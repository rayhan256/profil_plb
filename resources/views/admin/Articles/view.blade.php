@include('admin/layouts/header')
    <div class="container">
        @if (Session::has('pesan'))
            <div class="alert alert-success">
                {!! Session::get('pesan') !!}
            </div>
        @endif
        <h4 class="mt-4">Article Detail</h4>
        <hr class="mb-4">
        <div class="row">
            <div class="col-12">
                <h1 class="h2">{{$article->title}}</h1>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <img src="{{asset('storage/articles/'.$article->image)}}" class=" rounded" style="width: 1000px; height: 350px; object-fit: cover" alt="">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <p><span class="font-weight-light">{!! date('W F Y', strtotime($article->date)) !!}</span><span class="font-weight-normal"> by {{$article->author}}</span></p>
            </div>
        </div>
        <div class="row mt-3">
           <div class="col-12">
                <p>{!! html_entity_decode($article->desc) !!}</p>
           </div>
        </div>
        <a href="/cms/en/articles/update/{{$article->id}}" class="btn btn-outline-primary mt-4 mb-3">Update Article</a>
    </div>
@include('admin/layouts/footer')
<script>
    setTimeout(() => {
        $('.alert').alert('close')
    }, 4000);
</script>