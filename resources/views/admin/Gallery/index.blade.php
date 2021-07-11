@include('admin/layouts/header')
<div class="container mt-4">
    @if (Session::has('pesan'))
        <div class="alert alert-success mb-4">
            {!! Session::get('pesan') !!}
        </div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger mb-4">
            {!! Session::get('error') !!}
        </div>
    @endif
    <h1 class="mb-4">Gallery</h1>
    <div class="row">
        <div class="col-md-12">
            <form action="/cms/en/galleries/add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="image" id="image">
                </div>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <input type="submit" value="Add" id="submit" class="btn btn-primary disabled">
            </form>
        </div>
    </div>
    <hr class="mb-3">
    <div class="row mt-4 mb-3">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Preview</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $index = 1;
                    @endphp
                    @foreach ($galleries as $gallery)
                        <tr>
                            <td>{{ $index++ }}</td>
                            <td>{{ $gallery->name }}</td>
                            <td> <img src="{{ asset('/uploads/galleries/' . $gallery->image) }}" width="100"
                                    height="100">
                            </td>
                            <td> <a href="/cms/en/galleries/{{ $gallery->id }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('admin/layouts/footer')
<script>
    const name = document.getElementById('name');
    window.addEventListener('load', () => {
        name.addEventListener('keyup', () => {
            document.getElementById('submit').classList.remove('disabled');
        })
    })
</script>
<script>
    $('.table').dataTable()
</script>
