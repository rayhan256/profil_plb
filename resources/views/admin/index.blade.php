@include('admin/layouts/header')
<div class="container-fluid">
    <div class="h1 mt-4">Dashboard</div>
    <div class="row mt-5">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-white text-dark mb-4">
                <div class="card-header bg-primary text-white">Jumlah Visitor</div>
                <div class="card-body">
                    <div class="row align-self-center">
                        <div class="col">
                            <img src="{{asset('admin/assets/img/visitor.svg')}}" alt="visitor" class="img-fluid">
                        </div>
                        <div class="col">
                            <div class="h5 mt-3 w-100">{{$count_visitor}} Orang</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-white text-dark mb-4">
                <div class="card-header bg-success text-white">Jumlah Berita</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <img src="{{asset('admin/assets/img/web-browser.svg')}}" alt="blog" class="img-fluid">
                        </div>
                        <div class="col">
                            <div class="h5 mt-4 w-100">{{$count_article}} Berita</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin/layouts/footer')