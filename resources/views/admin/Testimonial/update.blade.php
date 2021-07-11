@include('admin/layouts/header')
<div class="container-fluid">
    <h1 class="mt-4 mb-4">Update Testimonial</h1>
    <form action="/cms/en/testimonial/update/post" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $testi->id }}">
        <div class="form-group">
            <label for="">Judul Review</label>
            <input type="text" name='title' class="form-control" value="{{ $testi->title }}">
        </div>
        <div class="form-group">
            <label for="">Name Mahasiswa / Alumni</label>
            <input type="text" name="name" class="form-control" value="{{ $testi->name }}">
        </div>
        <div class="form-group">
            <label for="">Prodi</label>
            <select name="id_prodi" id="" class="form-control">
                @foreach ($prodi as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="desc" id="" cols="30" rows="10" class="form-control">{{ $testi->desc }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Foto</label>
            <input type="file" name="image" id="" class="form-control" value="{{ $testi->image }}">
        </div>
        <div class="form-group">
            <label for="">Posisi / Jabatan</label>
            <input type="text" name="position" class="form-control" value="{{ $testi->position }}">
        </div>
        <input type="submit" value="Submit" class="btn btn-primary mt-3 mb-3">
    </form>
</div>
@include('admin/layouts/footer')
