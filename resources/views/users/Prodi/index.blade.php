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
            <div class="col-md-6 text-center left-prodi-wrapper">
                <div class="main-prodi-detail">
                    <img src="{{ asset('/uploads/prodi/' . $prodi->image) }}" alt=""
                        class="img-fluid w-75 prodi-detail-image">
                    <ul class="list-group text-center mt-4">
                        <li class="list-group-item" id="tentang"><a href="#tentangProdi">Tentang
                                {{ $prodi->name }}</a></li>
                        <li class="list-group-item" id="potensi"><a href="#potensiKarir">Potensi Karir</a></li>
                        <li class="list-group-item"> <a
                                href="{{ asset('/uploads/certificate/' . $prodi->certificate) }}"
                                class="btn btn-outline-primary mt-3" download>Download Sertifikat</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tentang-prodi-wrapper" id="tentangProdi">
                    <h3>Tentang {{ $prodi->name }}</h3>
                    <h5>Akreditasi {{ $prodi->akreditasi }}</h5>
                    {!! $prodi->desc ?? 'Belum Ada Deskripsi' !!}
                </div>
            </div>
            <div class="col-12 potensi-karir-wrapper" id="potensiKarir">
                <h3 class="mt-4 mb-4">Potensi Karir</h3>
                <p class="potensi-karir">
                    {!! $prodi->potensi_karir !!}
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <h3>Testimonial</h3>
            <hr class="mt-3 mb-4">
            <div class="row">
                <div class="col-12">
                    <div class="testi-prodi">
                        @php
                            $index = 0;
                        @endphp
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <!-- Carousel indicators -->
                            <ol class="carousel-indicators">
                                @foreach ($testimonials as $key => $item)
                                    <li data-target="#carouselExampleControls" data-slide-to="{{ $key }}"
                                        class="{{ $index == $key ? 'active' : '' }}"></li>
                                @endforeach
                            </ol> <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                @foreach ($testimonials as $testi)
                                    @php
                                        $index++;
                                    @endphp
                                    <div class="item carousel-item {{ $index == 1 ? 'active' : '' }}">
                                        <div class="img-box"><img
                                                src="{{ asset('uploads/testimonial/' . $testi->image) }}"
                                                alt="{{ $testi->name }}"></div>
                                        <p class="testimonial-desc">{!! $testi->desc !!}</p>
                                        <p class="overview"><b>{{ $testi->name }}</b>{{ $testi->position }}</p>
                                        <div class="star-rating"> </div>
                                    </div>
                                @endforeach
                            </div> <!-- Carousel controls --> <a class="carousel-control left carousel-control-prev"
                                href="#carouselExampleControls" data-bs-target="#carouselExampleControls"
                                data-bs-slide="prev">
                                <i class="fa fa-angle-left"></i> </a> <a
                                class="carousel-control right carousel-control-next" href="#carouselExampleControls"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <i class="fa fa-angle-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('users/layouts/footer')
<script>
    $('.slider').slick({
        infinite: true
    });
</script>
