@include('users/layouts/header')
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
    <img src="{{asset('assets/images/latar.svg')}}" alt="" class="img-fluid education-bg">
    <div class="education-text-wrapper">
        <h1>Kami Pastiin Mahasiswa Sudah Siap Bekerja Kok</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores quia voluptates est, tempore hic esse
            atque totam, nam deleniti aliquid dolorem repellat beatae expedita quae iure reprehenderit dolor quibusdam
            numquam.</p>
        <a href="" class="btn btn-outline-primary">Lihat Pusat Karir</a>
    </div>
</section>
<div class="prodi">
    <div class="container">
        <h2 class="text-center text-white">Program Studi</h2>
        <div class="row prodi-wrapper">
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <img src="{{asset('assets/images/MI.png')}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title">Managemen Informatika</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <img src="{{asset('assets/images/MI.png')}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title">Managemen Informatika</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <img src="{{asset('assets/images/MI.png')}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title">Managemen Informatika</div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="card">
                    <img src="{{asset('assets/images/MI.png')}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="card-title">Managemen Informatika</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="ukm">
    <div class="mt-4">
        <h2 class="text-center">Organization</h2>
        <p class="text-center">Here's Our Organization You Should Know</p>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($ukm as $item)
            <div class="col-md-3 col-sm-6">
                <div class="card bg-transparent my-3">
                    <img src="{{asset('uploads/'.$item->image)}}" alt="" class="card-img-top">
                    <div class="card-body mt-3">
                        <div class="card-title"><strong>{{$item->name}}</strong></div>
                        <p class="card-text m-0">{!!$item->desc!!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('users/layouts/footer')
