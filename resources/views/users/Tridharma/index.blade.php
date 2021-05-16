@include('users/layouts/header')
<div class="container">
    <section>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="{{asset('assets/images/edukasi.svg')}}" class="header-image-wrapper" alt="" data-aos="fade-left" data-aos-duration="1500">
            </div>
            <div class="col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1500">
                <h1 class="text-title">@lang('tridharma.section_1')</h1>
                <p class="mt-3">
                   @lang('tridharma.section_1_content')
                </p>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="1500">
                <h1 class="text-title">@lang('tridharma.section_2')</h1>
                <p class="mt-3">
                  @lang('tridharma.section_2_content')
                </p>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="{{asset('assets/images/research.svg')}}" class="header-image-wrapper img-fluid" alt="" data-aos="fade-right" data-aos-duration="1500">
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="{{asset('assets/images/pengabdian.svg')}}" class="header-image-wrapper img-fluid" alt="" data-aos="fade-left" data-aos-duration="1500">
            </div>
            <div class="col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="1500">
                <h1 class="text-title">@lang('tridharma.section_3')</h1>
                <p class="mt-3">
                  @lang('tridharma.section_3_content')
                </p>
            </div>
        </div>
    </section>
</div>
@include('users/layouts/footer')
