@include('admin/layouts/header')
<div class="container">
    <h1 class="mt-4 mb-3">Update Prodi</h1>
    <form action="/cms/en/prodi/update" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $prodi->id }}" name="id">
        <div class="form-group">
            <label for="">Course Name</label>
            <input type="text" name="name" class="form-control" value="{{ $prodi->name }}">
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Akreditasi</label>
            <select name="akreditasi" class="form-control">
                <option value="{{ $prodi->akreditasi }}">{{ $prodi->akreditasi }}</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="desc" cols="30" rows="10" class="form-control">{{ $prodi->desc }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Potensi Karir</label>
            <textarea name="potensi_karir" cols="30" rows="10"
                class="form-control">{{ $prodi->potensi_karir }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Certificate</label>
            <input type="file" name="certificate" class="form-control">
        </div>
        <input type="submit" value="Update" class="btn btn-primary">
    </form>
</div>
@include('admin/layouts/footer')
<script>
    CKEDITOR.replace('desc')
    CKEDITOR.replace('potensi_karir')
</script>
