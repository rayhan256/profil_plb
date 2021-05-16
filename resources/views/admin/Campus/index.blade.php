@include('admin/layouts/header')
<div class="container-fluid">
  @if (Session::has('pesan'))
        <div class="alert alert-success mt-4">
            {!! Session::get('pesan') !!}
        </div>
    @endif
    <h1 class="mt-4 mb-4">Published Blogs</h1>
    <a href="/cms/en/campus/create_view" class="btn btn-primary mb-4">Add New Campus</a>

    <table class="table" id="campus">
      <thead class="bg-dark text-white">
        <tr>
          <th>No</th>
          <th>Nama Kampus</th>
          <th>Call Centre</th>
          <th>Whatsapp</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; ?>
        @foreach ($campus as $c)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$c->campus_name}}</td>
          <td>{{$c->call_centre}}</td>
          <td>{{$c->whatsapp}}</td>
          <td>{{$c->email}}</td>
          
          <td>
            <a href="/cms/en/campus/view/{{$c->id}}" class="btn btn-outline-success">View</a>
            <a href="/cms/en/campus/delete/{{$c->id}}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@include('admin/layouts/footer')
<script>
  $('#campus').dataTable();
  setTimeout(() => {
    $('.alert').alert('close')
  }, 4000);
</script>