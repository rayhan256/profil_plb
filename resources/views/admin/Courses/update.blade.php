@include('admin/layouts/header')
    <div class="container-fluid">
        <h1 class="mt-4 mb-3">Update Program Studi</h1>
        <form action="/cms/en/course/update/process" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$courses->id}}">
            <div class="form-group">
                <label for="">Course Name</label>
                <input type="text" name="course_name" class="form-control" value="{{$courses->course_name}}">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="desc" cols="30" rows="10" class="form-control">{{$courses->desc}}</textarea>
            </div>
            <div class="form-group">
                <label for="">Course Tribe</label>
                <input type="file" name="course_image" id="" class="form-control" value="{{$courses->course_image}}">
            </div>
            <input type="submit" value="Submit" class="btn btn-primary mt-3 mb-3">
        </form>
    </div>
    
@include('admin/layouts/footer')