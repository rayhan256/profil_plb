@include('admin/layouts/header')
<div class="container-fluid">
    @if (Session::has('pesan'))
        <div class="alert alert-success mt-4">
            {!! Session::get('pesan') !!}
        </div>
    @endif
    <h1 class="mt-4">Published Prodi</h1>
    <a href="/cms/course/create" class="btn btn-primary mt-3 mb-3">Add Prodi</a>
    <div class="row">
      <div class="col-12">
        <table class="table" id="course">
            <thead class="bg-dark text-white">
                <tr>
                    <th>No</th>
                    <th>Course Name</th>
                    <th>Desc</th>
                    <th>Tribe</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($courses as $course)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$course->course_name}}</td>
                    <td>{{$course->desc}}</td>
                    <td><img src="{{asset('storage/courses/'.$course->course_image)}}" class="img-fluid" width="100" height="100" alt=""></td>
                    <td>
                        <a href="/cms/en/course/update/{{$course->id}}" class="btn btn-outline-primary">Update</a>
                        <a href="/cms/en/course/delete/{{$course->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>

</div>
@include('admin/layouts/footer')
<script>
        $('#course').DataTable();
       setTimeout(() => {
        $('.alert').alert('close');
       }, 4000);
</script>
