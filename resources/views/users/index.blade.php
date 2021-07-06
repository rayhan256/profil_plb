@include('users/layouts/header')
<?php $locale = App::getLocale(); ?>
@php
$index = 0;
@endphp
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($slider as $item)
            @php
                $index++;
            @endphp
            <div class="carousel-item {{ $index == 1 ? 'active' : '' }}">
                <img src="{{ asset('uploads/slider/' . $item->filename) }}" class="d-block w-100 carousel-image"
                    alt="{{ $item->name }}">
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
</header>
<main>
    <div class="container">
        <section id="about-vocational">
            <div class="row">
                <div class="col-md-6 col-sm-12 my-2">
                    <img src="https://tinyimg.io/i/6TTNd6L.jpg" class="img-fluid rounded" width="900" height="900"
                        alt="tentang fokasi" data-aos="ease-in" data-aos-duration="1500">
                </div>
                <div class="col-md-6 col-sm-12 my-2">
                    <div class="wrapper mt-5 ms-5" style="width: 80%" data-aos="ease-in" data-aos-duration="1600">
                        <h1 class="text-title" style="font-size: 35px">@lang('home.about_vocational_title')</h1>
                        <p class="mt-4">@lang('home.about_vocational_desc')</p>
                        <?php $locale = App::getLocale(); ?>
                        <a href="/{{ $locale }}/link_and_match" class="mt-3 btn text-primary"
                            style="padding: 0; font-weight: 600;">@lang('home.about_vocational_button')<svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right ms-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg></a>
                    </div>
                </div>
            </div>
        </section>
        <section id="course">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h1>Program Studi</h1>
                </div>
            </div>
            <hr class="mt-3 mb-3 bg-primary">
            <div class="row">
                @foreach ($prodi as $item)
                    <div class="col-md-3 col-sm-12">
                        <a href="/{{ $locale }}/prodi/{{ $item->id }}">
                            <div class="prodi-home-wrapper">
                                <div class="h5 prodi-home-title text-center">{{ $item->name }}</div>
                                <img src="{{ asset('/uploads/prodi/' . $item->image) }}"
                                    class="img-fluid rounded prodi-icon" alt="{{ $item->image }}">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
        <section id="news">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h1>@lang('home.events')</h1>
                </div>
            </div>
            <hr class="mt-3 mb-3 bg-primary">
            <div class="row mt-4">
                @foreach ($articles as $article)
                    <div class="col-md-3 my-2 col-sm-12">
                        <div class="card bg-white rounded border-0">
                            <div class="card-image">
                                <img src="{{ asset('uploads/article/' . $article->image) }}" alt="news" height="250"
                                    class="card-img-top rounded">
                                <div class="card-body mt-4" style="padding: 0;">
                                    <div class="card-title">
                                        {{ $article->title }}
                                    </div>

                                    <div class="mt-3 float-right">
                                        <a href="{{ $locale }}/articles/{{ $article->id }}"
                                            class="btn btn-outline-primary btn-sm">
                                            {{ 'Read More' }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row mt-4">
                <div class="col-12">
                    {{$articles->links()}}
    </div>
    </div> --}}
    </div>
    </section>
    </div>
</main>
@include('users/layouts/footer')
