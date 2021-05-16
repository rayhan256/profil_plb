@include('admin/layouts/header')
    <div class="container">
        <h1 class="mt-4 mb-4">Update Organization</h1>
        <form action="/cms/en/ukm/update" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$ukm->id}}">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="{{$ukm->name}}">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Desc</label>
                <textarea name="desc" id="" cols="30" rows="10" class="form-control" value="{{$ukm->desc}}">{{$ukm->desc}}</textarea>
            </div>
            <input type="submit" value="Update" class="btn btn-primary mt-3 mb-3">
        </form>
    </div>
@include('admin/layouts/footer')
<script>
    CKEDITOR.replace('desc')
</script>