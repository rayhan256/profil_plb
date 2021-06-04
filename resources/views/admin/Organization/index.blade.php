@include('admin/layouts/header')
<div class="container">
    @if (Session::has('pesan'))
      <div class="alert alert-success mt-4">
        {!! Session::get('pesan') !!}
      </div>
  @endif
    <h1 class="mt-4 mb-4">Struktur Organisasi</h1>
    <div class="row">
        <div class="col-6">
            <form action="/cms/en/organization/post" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Tambah Struktur Organisasi</label>
                    <input type="file" name="image" id="" class="form-control">
                </div>
                <input type="submit" value="Add" class="btn btn-primary">
            </form>
        </div>
        <div class="col-6">
            <h2>Preview Image</h2>
            @foreach ($structure as $item)
            <img src="{{asset('uploads/structure/'.$item->image)}}" class="img-fluid rounded" alt="">
            <a href="/cms/en/organization/{{$item->id}}" class="btn btn-danger mt-4">Delete</a>
            @endforeach
        </div>
    </div>
</div>
@include('admin/layouts/footer')