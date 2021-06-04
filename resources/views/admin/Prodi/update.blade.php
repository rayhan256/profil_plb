@include('admin/layouts/header')
<div class="container">
    <h1 class="mt-4 mb-3">Update Prodi</h1>
    <form action="/cms/en/prodi/update" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" value="{{$prodi->id}}" name="id">
        <div class="form-group">
            <label for="">Course Name</label>
            <input type="text" name="name" class="form-control" value="{{$prodi->name}}">
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <input type="submit" value="Update" class="btn btn-primary">
    </form>
</div>
@include('admin/layouts/footer')