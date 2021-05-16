@include('admin/layouts/header')
<div class="container-fluid">
    <h1 class="mt-4">Create Blogs</h1>
	<form action="/cms/en/blogs/create" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" name="title" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Date</label>
			<input type="date" name="date" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Desc</label>
			<textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="">Author</label>
			<input type="text" name="author" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Category</label>
			<input type="text" name="category" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" name="image" class="form-control">
		</div>
		<input type="submit" value="Add Blogs" class="btn btn-primary mt-4 mb-3">
	</form>
</div>
@include('admin/layouts/footer')
<script>
		CKEDITOR.replace('desc', {
        removePlugins: 'image',
    })
</script>