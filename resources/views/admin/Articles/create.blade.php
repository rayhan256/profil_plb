@include('admin/layouts/header')
<div class="container-fluid">
    <h1 class="my-4">Create Article</h1>
	<form action="/cms/en/articles/create" method="post" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col-12">
				<h2>Header Content</h2>
				<hr>
			</div>
		</div>
		<div class="form-group">
			<label for="">TItle</label>
			<input type="text" name="title" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Date</label>
			<input type="date" name="date" id="" class="form-control">
		</div>
		
		<div class="form-group">
			<label for="">Author</label>
			<input type="text" name="author" class="form-control">
		</div>
		<div class="row my-4">
			<div class="col-12">
				<h2>Content Description</h2>
				<hr>
			</div>
		</div>
		<div class="form-group">
			<label for="">Desc</label>
			<textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
		</div>	
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" name="image" id="" class="form-control">
		</div>
		<input type="submit" value="Add Article" class="btn btn-primary mt-3 mb-3">
	</form>
</div>
@include('admin/layouts/footer')
<script>
		CKEDITOR.replace('desc', {
        removePlugins: 'image',
    })
</script>