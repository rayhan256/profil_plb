@include('users/layouts/header')
<div class="container mt-4">
    <section>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="{{asset('assets/images/career.svg')}}" alt="career" class="img-fluid">
            </div>
            <div class="col-md-6 col-sm-12">
                <h2>Pusat Karir Politeknik LP3I</h2>
                <p class="h5 mt-4">Merupakan pusat penempatan kerja dan sumber informasi perusahaan yang bekerja sama
                    dengan Politeknik LP3I</p>
            </div>
        </div>
    </section>
    <section>
        <center>
            <h2 class="mb-5">Our Partner</h2>
        </center>
        <div class="row mt-3">
            <div class="col-md-2">
                <div class="client-wrapper">
                    <img src="{{asset('storage/partner/1620141220.png')}}" class="img-fluid greyscale" alt="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="client-wrapper">
                    <img src="{{asset('storage/partner/1620141220.png')}}" class="img-fluid greyscale" alt="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="client-wrapper">
                    <img src="{{asset('storage/partner/1620141220.png')}}" class="img-fluid greyscale" alt="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="client-wrapper">
                    <img src="{{asset('storage/partner/1620141220.png')}}" class="img-fluid greyscale" alt="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="client-wrapper">
                    <img src="{{asset('storage/partner/1620141220.png')}}" class="img-fluid greyscale" alt="">
                </div>
            </div>
            <div class="col-md-2">
                <div class="client-wrapper">
                    <img src="{{asset('storage/partner/1620141220.png')}}" class="img-fluid greyscale" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <h2 class="text-center mb-5">Testimonial</h2>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="border: none;">
                    <img src="{{asset('assets/images/foto1.jpg')}}" class="card-img-top rounded" alt="">
                    <div class="card-body p-0">
                        <div class="card-title mt-3"><strong>Rayhan Rahmat Aziz</strong></div>
                        <div class="card-text">
                            <blockquote>"Politeknik LP3I Bandung Sangat Menarik"</blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border: none;">
                    <img src="{{asset('assets/images/foto1.jpg')}}" class="card-img-top rounded" alt="">
                    <div class="card-body p-0">
                        <div class="card-title mt-3"><strong>Rayhan Rahmat Aziz</strong></div>
                        <div class="card-text">
                            <blockquote>"Politeknik LP3I Bandung Sangat Menarik"</blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border: none;">
                    <img src="{{asset('assets/images/foto1.jpg')}}" class="card-img-top rounded" alt="">
                    <div class="card-body p-0">
                        <div class="card-title mt-3"><strong>Rayhan Rahmat Aziz</strong></div>
                        <div class="card-text">
                            <blockquote>"Politeknik LP3I Bandung Sangat Menarik"</blockquote>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="border: none;">
                    <img src="{{asset('assets/images/foto1.jpg')}}" class="card-img-top rounded" alt="">
                    <div class="card-body p-0">
                        <div class="card-title mt-3"><strong>Rayhan Rahmat Aziz</strong></div>
                        <div class="card-text">
                            <blockquote>"Politeknik LP3I Bandung Sangat Menarik"</blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@include('users/layouts/footer')
<script>
    $(document).ready(function () {
        $("#testimonial-slider").owlCarousel({
            items: 3,
            itemsDesktop: [1000, 3],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 2],
            itemsMobile: [650, 1],
            pagination: true,
            autoPlay: true
        });
    });

</script>
