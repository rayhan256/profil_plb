@include('admin/layouts/header')
<div class="container-fluid">
  @if (Session::has('pesan')) 
  <div class="alert alert-success mt-4">
    {!! Session::get('pesan') !!}
  </div>     
  @endif
    <h1 class="mt-4">Published Articles</h1>
    <p class="text-muted">Only For Internal Events From Campus</p>
    <a href="/cms/en/articles/insert" class="btn btn-primary mt-4 mb-4">Add Article</a>
    <table class="table" id="article">
      <thead class="bg-dark text-white">
        <tr>
          <th>No</th>
          <th>Title</th>
          <th>Date</th>
          <th>Author</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1 ?>
        @foreach ($articles as $a)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$a->title}}</td>
          <td>{!! date('W F Y', strtotime($a->date)) !!}</td>
          <td>{{$a->author}}</td>
          <td>
            <a href="/cms/en/articles/view/{{$a->id}}" class="btn btn-outline-success">View</a>
            <a href="/cms/en/articles/delete/{{$a->id}}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
@include('admin/layouts/footer')
<script>
  $('#article').dataTable();
  setTimeout(() => {
    $('.alert').alert('close');
  }, 4000);
</script>