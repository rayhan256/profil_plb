@include('users/layouts/header')
@php
     use Stichoza\GoogleTranslate\GoogleTranslate;
    $locale = App::getLocale();
    $tr = new GoogleTranslate();
    $tr->setSource();
    $tr->setTarget($locale);
@endphp
</header>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-6 col-sm-12">
            <img src="{{asset('assets/images/link_match.png')}}" alt="Link and Match LP3I" class="img-fluid"
                style="object-fit: fill;" class="ms-3">
        </div>
        <div class="col-md-6 col-sm-12 mt-5">
            <div class="ms-4">
                <h3 class="text-title mt-4">@lang('linkandmatch.linkandmatch_title')</h3>
                <p class="mt-4 ms-1 text-muted h6">@lang('linkandmatch.linkandmatch_short_desc')</p>
                <a href="https://pmb.plb.ac.id/" class="btn btn-primary mt-3">@lang('linkandmatch.link_button')</a>
            </div>
        </div>
    </div>
</div>
<section class="mt-5 wrapper-education">
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6 col-sm-12">
            <div class="education-text-wrapper">
                <h1>{{$tr->translate('Kami Pastiin Mahasiswa Sudah Siap Bekerja Kok')}}</h1>
                <p>{{$tr->translate('Kami menjamin dan berkomitmen kepada seluruh mahasiswa dan mahasiswi kami memiliki kemampuan yang
                    kompeten dan dapat bersaing dalam dunia kerja.')}}</p>
                <a href="" class="btn btn-primary">{{$tr->translate('Lihat Pusat Karir')}}</a>
            </div>
        </div>
    </div>
</section>
<div class="prodi">
    <div class="container">
        <h2 class="text-center text-white">{{$tr->translate('Program Studi')}}</h2>
        <div class="row prodi-wrapper">
            @foreach ($prodi as $item)
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <img src="{{asset('uploads/prodi/'.$item->image)}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title h5">{{$tr->translate($item->name)}}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <div class="main">
                    <div class="slider slider-for">
                        @foreach ($prodi as $item)
                        <div class="testimonial-wrapper">
                            <img src="{{asset('uploads/prodi/'.$item->image)}}" class="img-fluid testimonial-image"
                                alt="{{$item->name}}">
                            <div class="testimonial-body mt-3">
                                <div class="title text-white align-self-center">{{$item->name}}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="slider slider-nav mb-5 w-100">
                        @foreach ($prodi as $item)
                        <div class="testimonial-wrapper">
                            <img src="{{asset('uploads/prodi/'.$item->image)}}" class="img-fluid testimonial-image"
                                style="cursor: pointer" alt="{{$item->name}}">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="ukm">
    <div class="mt-4">
        <h2 class="text-center">{{$tr->translate('Organization')}}</h2>
        <p class="text-center">{{$tr->translate("Here's Our Organization You Should Know")}}</p>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($ukm as $item)
            <div class="col-md-3 col-sm-6">
                <div class="card bg-transparent my-3">
                    <img src="{{asset('uploads/'.$item->image)}}" alt="" class="card-img-top" style="object-fit: cover;">
                    <div class="card-body mt-3">
                        <div class="card-title"><strong>{{$item->name}}</strong></div>
                        <p class="card-text m-0">{!!$tr->translate($item->desc)!!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('users/layouts/footer')
<script>
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        focusOnSelect: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

</script>
