@include('admin/layouts/header')
    <div class="container">
        <h1 class="mt-4 mb-4">Add Organization</h1>
        <form action="/cms/en/ukm/post" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Desc</label>
                <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <input type="submit" value="Add" class="btn btn-primary mt-3 mb-3">
        </form>
    </div>
@include('admin/layouts/footer')
<script>
    CKEDITOR.replace('desc')
</script>