@include('users/layouts/header')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 col-sm-12">
            <img src="{{asset('assets/images/kampus.jpg')}}" class="img-fluid rounded w-100" height="800"
                alt="Sejarah LP3I">
        </div>
        <div class="col-md-6 col-sm-12 mt-4">
            <div class="ms-3">
                <h1 class="mb-3">@lang('about.story')</h1>
                <p class="text-muted">@lang('about.story_desc')</p>
            </div>
        </div>
    </div>
    <section id="vision">
        <div class="row">
            <div class="col-12">
                <div class="h2 text-center">@lang('about.vision')</div>
                <hr class="mt-4 bg-primary">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 col-sm-12">
                <ul class="parent-vision-mission ms-3">
                    <li class="list-vision-mission">@lang('about.list_vision.1')</li>
                    <li class="list-vision-mission">@lang('about.list_vision.2')</li>
                    <li class="list-vision-mission">@lang('about.list_vision.3')</li>
                </ul>
                <button class="btn btn-outline-primary ms-5 mt-3" data-bs-toggle="modal" data-bs-target="#modalVision">@lang('about.see_more')</button>
            </div>
            <div class="col">
                <img src="{{asset('assets/images/kegiatan.jpg')}}" class="rounded sejarah-image ms-5" width="350"
                    height="300" alt="Sejarah LP3I">
            </div>
        </div>
    </section>
    <section id="vision">
        <div class="row">
            <div class="col-12">
                <div class="h2 text-center">@lang('about.mission')</div>
                <hr class="mt-4 bg-primary">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 col-sm-12">
                <img src="{{asset('assets/images/foto1.jpg')}}" class="img-fluid rounded sejarah-image ms-5" width="400"
                height="300" alt="Sejarah LP3I">
            </div>
            <div class="col-md-5 col-sm-12">
                <ul class="parent-vision-mission">
                    <li class="list-vision-mission">@lang('about.list_mission.1')</li>
                    <li class="list-vision-mission">@lang('about.list_mission.2')</li>
                    <li class="list-vision-mission">@lang('about.list_mission.3')</li>
                </ul>
                <button class="btn btn-outline-primary ms-4 mt-3" data-bs-toggle="modal" data-bs-target="#modalMission">@lang('about.see_more')</button>
            </div>
        </div>
    </section>
</div>
@include('users/About/mission')
@include('users/About/vision')
@include('users/layouts/footer')
