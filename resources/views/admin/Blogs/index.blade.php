@include('admin/layouts/header')
<div class="container-fluid">
  @if (Session::has('pesan'))
      <div class="alert alert-success mt-4">
        {!! Session::get('pesan') !!}
      </div>
  @endif
    <h1 class="mt-4">Published Blogs</h1>
    <p class="text-muted">Only For External Content Like Tips & Triks, etc</p>
    <a href="/cms/en/blogs/insert" class="btn btn-primary mt-4 mb-4">Add Blogs</a>
    <table class="table" id="blog">
      <thead class="bg-dark text-white">
        <tr>
          <th>No</th>
          <th>Title</th>
          <th>Date</th>
          <th>Author</th>
          <th>Category</th>
          <th>Action</th>  
        </tr>  
      </thead>  
      <tbody>
        <?php $no = 1; ?>
        @foreach ($blogs as $b)
        <tr>
          <td>{{$no}}</td>
          <td>{{$b->title}}</td>
          <td>{{$b->date}}</td>
          <td>{{$b->author}}</td>
          <td>{{$b->category}}</td>
          <td>
            <a href="/cms/en/blogs/view/{{$b->id}}" class="btn btn-success">View</a>
            <a href="/cms/en/blogs/delete/{{$b->id}}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      
      </tbody>
    </table>    
</div>
@include('admin/layouts/footer')
<script>
  $("#blog").dataTable();
  setTimeout(() => {
    $('.alert').alert('close')
  }, 4000);
</script>