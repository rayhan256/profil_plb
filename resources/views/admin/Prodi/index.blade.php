@include('admin/layouts/header')
<div class="container">
    @if (Session::has('pesan'))
      <div class="alert alert-success mt-4">
        {!! Session::get('pesan') !!}
      </div>
  @endif
    <h1 class="mt-4">Course</h1>
    <a href="/cms/en/prodi/create" class="btn btn-primary my-3 mb-4">Add Course</a>

    <table class="table mt-4" id="prodi">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Image</th>
                <th>Akreditasi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $index = 0;
            @endphp
            @foreach ($prodi as $item)
                @php
                    $index++;
                @endphp
                 <tr>
                    <td>{{$index}}</td>
                    <td>{{$item->name}}</td>
                    <td><img src="{{asset('uploads/prodi/'.$item->image)}}" width="150" height="150" alt=""></td>
                    <td>{{$item->akreditasi}}</td>
                    <td>
                        <a href="/cms/en/prodi/update/{{$item->id}}" class="btn btn-outline-primary">Update</a>
                        <a href="/cms/en/prodi/delete/{{$item->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@include('admin/layouts/footer')
<script>
$('#prodi').dataTable()
</script>