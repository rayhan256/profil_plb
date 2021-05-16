@include('admin/layouts/header')
<div class="container-fluid">
    <h1 class="mt-4">Update Article</h1>
	<form action="/cms/en/articles/update/post" method="post" enctype="multipart/form-data">
		@csrf
        <input type="hidden" name="id" value="{{$article->id}}">
		<div class="row">
			<div class="col-12">
				<h2>Header</h2>
				<hr>
			</div>
		</div>
		<div class="form-group">
			<label for="">TItle</label>
			<input type="text" name="title" class="form-control" value="{{$article->title}}">
		</div>
		<div class="form-group">
			<label for="">Date</label>
			<input type="date" name="date" id="" class="form-control" value="{{$article->date}}">
		</div>
		<div class="form-group">
			<label for="">Author</label>
			<input type="text" name="author" class="form-control" value="{{$article->author}}">
		</div>
		<div class="form-group">
			<label for="">Desc</label>
			<textarea name="desc" id="" cols="30" rows="10" class="form-control">{{$article->desc}}</textarea>
		</div>	
		<div class="form-group">
			<label for="">Image</label>
			<input type="file" name="image" id="" class="form-control" value="{{$article->image}}">
		</div>
		<input type="submit" value="Update Article" class="btn btn-primary mt-3 mb-3">
	</form>
</div>
@include('admin/layouts/footer')
<script>
		CKEDITOR.replace('desc', {
        removePlugins: 'image',
    })
</script>