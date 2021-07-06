@include('users/layouts/header')
@php
$locale = App::getLocale();
@endphp
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ $locale }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $prodi->name }}</li>
        </ol>
    </nav>
    <section id="prodi">
        <div class="row">
            <div class="col-md-6 main-prodi-detail">
                <img src="{{ asset('/uploads/prodi/' . $prodi->image) }}" alt=""
                    class="img-fluid w-75 prodi-detail-image">
            </div>
            <div class="col-md-6">
                <h3>Tentang {{ $prodi->name }}</h3>
                {!! $prodi->desc ?? 'Belum Ada Deskripsi' !!}
                <a href="{{ asset('/uploads/certificate/' . $prodi->certificate) }}" class="btn btn-primary mt-3"
                    download>Download Sertifikat</a>
            </div>
        </div>
    </section>
</div>
@include('users/layouts/footer')
