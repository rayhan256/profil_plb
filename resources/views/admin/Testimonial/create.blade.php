@include('admin/layouts/header')
<div class="container-fluid">
    <h1 class="mt-4">Create Testimonial</h1>
    <form action="/cms/en/testimonial/post" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="">Judul Review</label>
            <input type="text" name="title" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nama Mahasiswa / Alumni</label>
            <input type="text" name="name" id="" class="form-control">
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
            <label for="">Description</label>
            <textarea name="desc" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Picture ( Person )</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Position</label>
            <input type="text" name="position" class="form-control">
        </div>
        <input type="submit" value="Add Testimonial" class="btn btn-primary mt-3 mb-3">
    </form>
</div>
@include('admin/layouts/footer')
