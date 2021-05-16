@include('admin/layouts/header')
<div class="container-fluid">
    @if (Session::has('pesan'))
    <div class="alert alert-success mt-4">
        {!! Session::get('pesan') !!}
    </div>
    @endif
    <h1>Add Picture Slider</h1>
    <div class="row mt-3">
        <form action="/cms/en/slider/post" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="">Add Image</label>
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                </div>
                <div class="col-4">
                    <label for="">Add Links</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input"
                                    placeholder="Has Link" id="checkbox" name="hasLink">
                            </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox"
                            placeholder="Add Link Here" id="link" name="link">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="">Image Name</label>
                        <input type="text" class="form-control" name="imageName">
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <input type="submit" value="Add Image" class="btn btn-primary">
            </div>
        </form>
    </div>
    <div class="mt-4">
        <table class="table" id="fileTable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($sliders as $slider)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$slider->filename}}</td>
                    <td>
                        <a href="/cms/en/slider/delete/{{$slider->id}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    var hasLink = document.getElementById('checkbox');
    document.getElementById('link').disabled = true;
    hasLink.addEventListener('change', () => {
        document.getElementById('link').disabled = !hasLink.checked;
        // if (hasLink.checked) {
        //     document.getElementById('link').disabled = false;
        // } else {
        //     document.getElementById('link').disabled = true;
        // }
    })

</script>
@include('admin/layouts/footer')
<script>
    $('#fileTable').dataTable()
    setTimeout(() => {
        $('.alert').alert('close');
    }, 4000);

</script>
