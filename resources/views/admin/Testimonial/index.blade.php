@include('admin/layouts/header')
<div class="container-fluid">
  @if (Session::has("pesan"))
      <div class="alert alert-success mt-4">
        {!! Session::get('pesan') !!}
      </div>
  @endif
    <h1 class="mt-4">Published Testimonial</h1>
    <a href="/cms/en/testimonial/insert" class="btn btn-primary mt-3 mb-4">Add Testimonial</a>
    <table class="table" id="testi">
      <thead class="bg-dark text-white">
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Nama</th>
          <th>Deskripsi</th>
          <th>Gambar</th>
          <th>Posisi</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        @foreach ($testimonial as $t)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$t->title}}</td>
          <td>{{$t->name}}</td>
          <td>{{$t->desc}}</td>
          <td><img src="{{asset('storage/testimonial/'.$t->image)}}" width="100" height="100" class="img-fluid" alt=""></td>
          <td>{{$t->position}}</td>
          <th>
            <a href="/cms/en/testimonial/update/{{$t->id}}" class="btn btn-outline-primary">Update</a>
            <a href="/cms/en/testimonial/delete/{{$t->id}}" class="btn btn-danger">Delete</a>
          </th>
        </tr>    
        @endforeach
      </tbody>
    </table>
</div>
@include('admin/layouts/footer')
<script>
  $('#testi').dataTable()
  setTimeout(() => {
    $('.alert').alert('close')
  }, 4000);
</script>