@include('admin/layouts/header')
<div class="container">
    <h1 class="mt-4 mb-3">Add Prodi</h1>
    <form action="/cms/en/prodi/post" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Course Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <input type="submit" value="Add" class="btn btn-primary">
    </form>
</div>
@include('admin/layouts/footer')