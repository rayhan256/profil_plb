@include('admin/layouts/header')
<div class="container mt-4">
    @if (Session::has('pesan'))
    <div class="alert alert-success mb-4">
        {!! Session::get('pesan') !!}
    </div>
    @endif
    @if (Session::has('error'))
    <div class="alert alert-danger mb-4">
        {!! Session::get('error') !!}
    </div>
    @endif
    <h1>Gallery</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="/cms/en/galleries/add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" id="image">
                </div>
                <input type="submit" value="Add" id="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
    <hr class="mb-3">
    <div class="row mt-4 mb-3">
        @foreach($galleries as $gallery)
        <div class="col-md-3 mb-4">
            <div class="card">
                <img src="{{asset('/uploads/galleries/'.$gallery->image)}}" class="card-img-top">
                <div class="card-footer text-center">
                    <a href="/cms/en/galleries/{{$gallery->id}}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include('admin/layouts/footer')
