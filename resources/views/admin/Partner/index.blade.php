@include('admin/layouts/header')
<div class="container mt-4">
    @if (Session::has('pesan'))
    <div class="alert alert-success mb-4">
        {!! Session::get('pesan') !!}
    </div>
    @endif
    <h1 class="mb-4">Tambah Perusahaan Kerjasama</h1>
    <form action="/cms/en/partner/insert" method="post" enctype="multipart/form-data" class="mb-5">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">Company Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="">Logo</label>
                    <input type="file" name="image" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <textarea name="desc" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <input type="submit" value="Add Partner" class="btn btn-primary mt-3">
    </form>
    <table class="table" id="partner">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Logo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($partner as $i)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$i->name}}</td>
                <td><img src="{{asset('storage/partner/'.$i->logo)}}" width="200" height="200" alt=""></td>
                <td>
                    <a href="/cms/en/partner/delete/{{}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    CKEDITOR.replace('desc')
</script>
@include('admin/layouts/footer')
<script>
    $('#partner').dataTable()
</script>