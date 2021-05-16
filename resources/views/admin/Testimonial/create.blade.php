@include('admin/layouts/header')
<div class="container-fluid">
    <h1 class="mt-4">Create Testimonial</h1>
	<form action="/cms/en/testimonial/post" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="">Reviews Title</label>
			<input type="text" name="title" id="" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Reviewer Name</label>
			<input type="text" name="name" id="" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Description</label>
			<textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<label for="">Picture ( Person )</label>
			<input type="file" name="image" class="form-control">
		</div>
		<div class="form-group">
			<label for="">Position</label>
			<input type="text" name="position" class="form-control">
		</div>
		<input type="submit" value="Add Testimonial" class="btn btn-primary mt-3 mb-3">
	</form>
</div>
@include('admin/layouts/footer')