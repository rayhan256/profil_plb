@php
use Stichoza\GoogleTranslate\GoogleTranslate;
$locale = App::getLocale();
// $tr = new GoogleTranslate();
// $tr->setSource();
// $tr->setTarget($locale);
@endphp
@include('users/layouts/header')
</header>
<style>
    .main {
        width: 100%;
        display: block;
        margin: 0 auto;
        max-height: 500px;
    }

</style>
<div class="container mt-4">
    <section>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="{{asset('assets/images/career.svg')}}" alt="career" class="img-fluid">
            </div>
            <div class="col-md-6 col-sm-12 mt-4">
                <h2>{{'Pusat Karir Politeknik LP3I'}}</h2>
                <p class="h5 mt-4">{{"Merupakan pusat penempatan kerja dan sumber informasi perusahaan yang bekerja sama
                    dengan Politeknik LP3I"}}</p>
            </div>
        </div>
    </section>
</div>
<div class="career-bg-wrapper">
    <img src="{{asset('assets/images/latar-career.svg')}}" alt="" class="img-fluid">
</div>
<section class="partner">
    <div class="container">
        <h2 class="text-center text-white mt-5">{{"Perusahaan Kerja Sama"}}</h2>
        <p class="text-center text-white">{{'Ini Adalah Perusahaan Kerja Sama Kami'}}</p>
        <div class="row">
            @foreach ($partner as $item)
            <div class="col-3 my-3">
                <div class="card card-partner d-flex align-items-center justify-content-center">
                    <img src="{{asset('uploads/partner/'.$item->logo)}}" class="card-img-top" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-md-12 px-3">
                <h1 class="text-white text-center" style="margin-top: 100px;">{{"Kata Alumni Tentang Politeknik LP3I"}}</h1>
                {{-- <p class="text-center text-white mb-5">{{"Terima K "}}</p> --}}
                <hr style="background-color: white;">
                <div class="main">
                    <div class="slider slider-for">
                        @foreach ($testimonial as $item)
                        <div class="testimonial-wrapper p-sm-3">
                            <img src="{{asset('uploads/testimonial/'.$item->image)}}"
                                class="img-fluid testimonial-image" alt="{{$item->title}}">
                            <div class="testimonial-body mt-3">
                                <div class="title align-self-center">{{$item->title}}</div>
                                <blockquote class="quote align-self-center">"{{$item->desc}}" - {{$item->name}}
                                </blockquote>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="slider slider-nav mb-5 w-100">
                        @foreach ($testimonial as $item)
                        <div class="testimonial-wrapper">
                            <img src="{{asset('uploads/testimonial/'.$item->image)}}"
                                class="img-fluid testimonial-image" style="cursor: pointer" alt="{{$item->name}}">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="career-news">
    <h2 class="text-center">{{"Berita Tentang Pusat Karir"}}</h2>
    <div class="container">
        <div class="row">
            @foreach ($careers as $i)
            <div class="col-md-3 col-sm-12">
                <div class="card article-card">
                    <a href="/blogs/view/{{$i->id}}"><img src="{{asset('uploads/article/').'/'.$i->image}}"
                            style="background-size: cover;" class="card-img-top" alt=""></a>
                    <div class="card-body">
                        <div class="card-title">{{$i->title}}</div>
                        <p>{{$i->author}}, {!! date('W F Y', strtotime($i->date)) !!}</p>
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
