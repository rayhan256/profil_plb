@include('admin/layouts/header')
<div class="container-fluid">
    <h1 class="mt-4">Update Blogs</h1>
    <form action="/cms/en/blogs/update/post" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$blog->id}}">
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" value="{{$blog->title}}">
        </div>
        <div class="form-group">
            <label for="">Date</label>
            <input type="date" name="date" class="form-control" value="{{$blog->date}}">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="desc" id="" cols="30" rows="10" class="form-control">{{$blog->desc}}</textarea>
        </div>
        <div class="form-group">
            <label for="">Author</label>
            <input type="text" name="author" class="form-control" value="{{$blog->author}}">
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <input type="text" name="category" class="form-control" value="{{$blog->category}}">
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" id="" class="form-control" value="{{$blog->image}}">
        </div>
        <input type="submit" value="Update Blogs" class="btn btn-primary mt-3 mb-3">
    </form>
</div>
@include('admin/layouts/footer')
<script>
	CKEDITOR.replace('desc', {
        removePlugins: 'image',
    })
</script>