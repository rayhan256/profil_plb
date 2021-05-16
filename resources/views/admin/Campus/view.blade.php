@include('admin/layouts/header')
<div class="container">
    @if (Session::has('pesan'))
    <div class="alert alert-success">
        {!! Session::get('pesan') !!}
    </div>
    @endif
    <h4 class="mt-4">Campus Detail</h4>
    <hr class="mb-4">
    <div class="row">
        <div class="col-12">
            <h1 class="h2">{{$campus->campus_name}}</h1>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <img src="{{asset('storage/campus/'.$campus->image)}}" class=" rounded"
                style="width: 1000px; height: 350px; object-fit: cover" alt="">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <p>{!! $campus->desc !!}</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="row mt-3">
                <div class="col-12">
                    <dl class="row">
                        <dt class="col-sm-3">Call Centre</dt>
                        <dd class="col-sm-7">{{$campus->call_centre}}</dd>
                        <dt class="col-sm-3">Whatsapp</dt>
                        <dd class="col-sm-7">{{$campus->whatsapp}}</dd>
                        <dt class="col-sm-3">Email</dt>
                        <dd class="col-sm-7">{{$campus->email}}</dd>
                        <dt class="col-sm-3">Map</dt>
                        <dd class="col-sm-7">{!! $campus->embedded_map !!}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <a href="/cms/en/campus/update/{{$campus->id}}" class="btn btn-outline-primary mt-4 mb-3">Update Campus</a>
</div>
@include('admin/layouts/footer')
<script>
    setTimeout(() => {
        $('.alert').alert('close')
    }, 4000);

</script>
