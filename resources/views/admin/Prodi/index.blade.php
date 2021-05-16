@include('admin/layouts/header')
<div class="container">
    <h1 class="mt-4">Course</h1>
    <a href="" class="btn btn-primary my-3 mb-4">Add Course</a>

    <table class="table mt-4" id="prodi">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Manajemen Informatika</td>
                <td>Image</td>
                <td>
                    <a href="" class="btn btn-outline-primary">Update</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@include('admin/layouts/footer')
<script>
$('#prodi').dataTable()
</script>