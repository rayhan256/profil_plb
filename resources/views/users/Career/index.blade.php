@php
$locale = App::getLocale();
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
                <img src="{{ asset('assets/images/career.svg') }}" alt="career" class="img-fluid">
            </div>
            <div class="col-md-6 col-sm-12 mt-4">
                <h2>@lang('carreer.main_title')</h2>
                <p class="h5 mt-4">@lang('carreer.main_desc')</p>
            </div>
        </div>
    </section>
</div>
<div class="career-bg-wrapper">
    <img src="{{ asset('assets/images/latar-career.svg') }}" alt="" class="img-fluid">
</div>
<section class="partner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-white">@lang('carreer.partner')</h2>
            </div>
            <div class="col-12">
                <p class="text-center text-white">@lang('carreer.partner_desc')</p>
            </div>
        </div>
        <div class="row">
            @foreach ($partner as $item)
                <div class="col-3 my-3">
                    <div class="card card-partner d-flex align-items-center justify-content-center">
                        <img src="{{ asset('uploads/partner/' . $item->logo) }}" class="card-img-top" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="career-news">
    <h2 class="text-center my-4">@lang('carreer.news')</h2>
    <div class="container">
        <div class="row">
            @foreach ($careers as $i)
                <div class="col-md-3 col-sm-12">
                    <div class="card article-card">
                        <a href="/blogs/view/{{ $i->id }}"><img
                                src="{{ asset('uploads/article/') . '/' . $i->image }}"
                                style="background-size: cover;" class="card-img-top" alt=""></a>
                        <div class="card-body">
                            <div class="card-title">{{ $i->title }}</div>
                            <p>{{ $i->author }}, {!! date('W F Y', strtotime($i->date)) !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('users/layouts/footer')
