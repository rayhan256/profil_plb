<footer class="footer-bs">
    <hr class="bg-primary">
    <div class="row">
        <div class="col-md-3 footer-brand animated fadeInLeft">
            <img src="{{ asset('assets/images/logo/plblogo.png') }}" alt="Politeknik LP3I" class="img-fluid"
                width="120" height="100" />
            <p class="mt-4">© 2021 Politeknik LP3I, All rights reserved</p>
        </div>
        <div class="col-md-4 footer-nav animated fadeInUp">
            <div class="row">
                <h4>Menu —</h4>
                <div class="col-md-6">
                    <ul class="list">
                        @php
                            $locale = App::getLocale();
                        @endphp
                        <li><a href="/{{ $locale }}/about">Our Courses</a></li>
                        <li><a href="/{{ $locale }}/about">Link And Match</a></li>
                        <li><a href="/{{ $locale }}/link_and_match">Student Work</a></li>
                        <li><a href="/{{ $locale }}/blogs">Blogs</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list">
                        <li><a href="#">Abouts</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-md-2 footer-social animated fadeInDown">
            <h4>Follow Us</h4>
            <ul>
                <li><a href="https://www.facebook.com/polteklp3ibdg">Facebook</a></li>
                <li><a href="https://www.instagram.com/lp3i.bandung/">Instagram</a></li>
                <li><a href="https://vt.tiktok.com/ZSJJkfUbv/">Tiktok</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-ns animated fadeInRight">
            <h4>Copyright</h4>
            <p>Politeknik LP3I Bandung</p>
            <h6 class="text-primary" onclick="backToTop()" style="cursor: pointer;">
                Back To Top
            </h6>
        </div>
    </div>
</footer>
<a href="https://api.whatsapp.com/send?phone=6281290780050&text=Hai%20Minta%20Informasinya%20Dong%20..%20."
    rel="noreferrer" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
</div>

<script src="{{ asset('/js/script.js') }}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous">
</script>
<script>
    function backToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
<script src="{{ asset('/queryloader/queryloader2.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $("body").queryLoader2({
            barColor: "#efefef",
            backgroundColor: "#063173",
            percentage: true,
            barHeight: 1,
            minimumTime: 200,
            fadeOutTime: 1000
        });
    });
</script>
</body>

</html>
