@include('admin/layouts/header')
<div class="container-fluid">
    <h1 class="mt-4">Create Blogs</h1>
	<form action="/cms/en/course/insert" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="">Course Name</label>
			<input type="text" name="course_name" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Description</label>
			<textarea name="desc" cols="30" rows="10" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="">Course Tribe</label>
			<input type="file" name="course_image" class="form-control">
		</div>
		<input type="submit" value="Submit" class="btn btn-primary mt-3 mb-3">
	</form>
</div>
@include('admin/layouts/footer')