@include('admin/layouts/header')
<div class="container">
    <h1 class="mt-4">Organisasi Mahasiswa</h1>
    <a href="/cms/en/ukm/create" class="btn btn-primary mt-4 mb-4">Add UKM</a>

    <table class="table" id="ukm">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $index = 0;
            @endphp
            @foreach ($ukm as $item)
            @php
                $index++;
            @endphp
            <tr>
                <td>{{$index}}</td>
                <td>{{$item->name}}</td>
                <td><img src="{{asset('uploads/'. $item->image)}}" width="150" height="150" class="rounded" alt=""></td>
                <td>
                    <a href="/cms/en/ukm/update/{{$item->id}}" class="btn btn-outline-primary">Update</a>
                    <a href="/cms/en/ukm/delete/{{$item->id}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>    
            @endforeach
        </tbody>
    </table>
</div>
@include('admin/layouts/footer')
<script>
    $('#ukm').dataTable()
</script>