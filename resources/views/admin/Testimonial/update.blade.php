@include('admin/layouts/header')
<div class="container-fluid">
    <h1 class="mt-4 mb-4">Update Testimonial</h1>
    <form action="/cms/en/testimonial/update/post" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$testi->id}}">
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" name='title' class="form-control" value="{{$testi->title}}">
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{$testi->name}}">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="desc" id="" cols="30" rows="10" class="form-control">{{$testi->desc}}</textarea>
        </div>
        <div class="form-group">
            <label for="">Photo</label>
            <input type="file" name="image" id="" class="form-control" value="{{$testi->image}}">
        </div>
        <div class="form-group">
            <label for="">Position</label>
            <input type="text" name="position" class="form-control" value="{{$testi->position}}">
        </div>
        <input type="submit" value="Submit" class="btn btn-primary mt-3 mb-3">
    </form>
</div>
@include('admin/layouts/footer')