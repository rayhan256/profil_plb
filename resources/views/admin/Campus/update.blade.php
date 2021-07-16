@include('admin/layouts/header')
<div class="container-fluid">
    <h1 class="mt-4 mb-3">Update Campus</h1>
    <form action="/cms/en/campus/update/post" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $campus->id }}">
        <div class="form-group">
            <label for="">Nama Kampus</label>
            <input type="text" class="form-control" name="campus_name" value="{{ $campus->campus_name }}" />
        </div>
        <div class="form-group">
            <label for="">Call Centre</label>
            <input type="text" class="form-control" name="call_centre" value="{{ $campus->call_centre }}" />
        </div>
        <div class="form-group">
            <label for="">Whatsapp</label>
            <input type="text" class="form-control" name="whatsapp" value="{{ $campus->whatsapp }}" />
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email" value="{{ $campus->email }}" />
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="desc" class="form-control" cols="30" rows="10">{{ $campus->desc }}</textarea>
        </div>
        <div class="form-group">
            <div class="d-flex justify-content-md-between my-3">
                <label for="">Link Map (Baca Panduan Terlebih Dahulu)</label>
                <div class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#panduan">Panduan</div>
            </div>
            <textarea name="embedded_map" id="" cols="30" rows="10"
                class="form-control">{{ $campus->embedded_map }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" name="image" value="{{ $campus->iaage }}" />
        </div>
        <input type="submit" value="Update Campus" class="btn btn-primary mt-3 mb-3">
    </form>
</div>
<div class="modal fade" id="panduan" tabindex="-1" aria-labelledby="panduanLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="panduanLabel">Panduan Menambah Google Maps</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('admin/assets/img/search.JPG') }}"
                                alt="First slide" style="filter: brightness(50%);">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Langkah 1</h5>
                                <p>Lakukan Pencarian Kampus LP3I Yang Dituju, Lalu Pilih Menu <strong>Maps</strong></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('admin/assets/img/search2.JPG') }}"
                                alt="Second slide" style="filter: brightness(50%);">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Langkah 2</h5>
                                <p>Setelah Masuk Pada Halaman <strong>Maps</strong>, Lalu Pilih Menu
                                    <strong>Share</strong>
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('admin/assets/img/search3.JPG') }}"
                                alt="Third slide" style="filter: brightness(50%);">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Langkah 3</h5>
                                <p>Setelah Mengklik Menu <strong>Share</strong>, Maka Akan Keluar Pop-up Seperti Gambar
                                    Berikut, Lalu Pilih <strong>Embed Map</strong> dan klik <strong>Copy Html</strong>.
                                    Dan Paste Pada <Strong>Link Map</Strong> yang tersedia di dashboard admin</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@include('admin/layouts/footer')
<script>
    CKEDITOR.replace('desc')
</script>
