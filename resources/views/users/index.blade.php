@include('users/layouts/header')
<?php 
    // use Stichoza\GoogleTranslate\GoogleTranslate;
    $locale = App::getLocale();
    // $tr = new GoogleTranslate();
    // $tr->setSource();
    // $tr->setTarget($locale);
?>
<div class="cities slideshow screen-height" data-js="city-slider" data-transition="">
    <div class="slideshow-inner"> 
      <div class="cities__slider slides">
       <?php $index = 1; ?>
        @foreach ($slider as $item)
        @php
            $index++;
        @endphp
        <div class="cities__slide slide {{$index == 1 ? "is_active" : ""}}">
          <div class="slide__slide-content">
              <span></span>  
              <h3>
                  <a href="{{$item->link}}" style="color: white">{{$item->name}}</a>
              </h3>
          </div>
          <div class="image-container">
              <img
                  src="data:image/gif;base64,R0lGODdhAQABAPAAAP///wAAACwAAAAAAQABAEACAkQBADs="
                  data-src={{asset('uploads/slider/'.$item->filename)}}
                  alt="bracelets-bijoux-createur" 
                  class="image queue-loading as-background"/>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
              <filter id="blur">
                <feGaussianBlur stdDeviation="3" />
              </filter>
            </svg>
          </div>
      </div>
        @endforeach 
      <nav class="pages mt-5">
        <ul>
          @foreach ($slider as $item)
          <li class="page {{$index == 0 ? "is-active" : ""}}">
            <a href="#" class="page__link">
              <i data-js="page-loader"></i>
              {{$item->name}}
            </a>
          </li>
          @endforeach
        </ul>
      </nav>
      
      <div class="arrows">
        <div class="arrow prev" style="opacity: 1; transform: translate3d(0px, 0px, 0px);">
          <span class="svg svg-arrow-left">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 26" enable-background="new 0 0 30 26"><path d="M13 26c-.3 0-.5-.1-.7-.3l-12-12c-.4-.4-.4-1 0-1.4l12-12c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-11.3 11.3 11.3 11.3c.4.4.4 1 0 1.4-.2.2-.4.3-.7.3z"/><path class="arrow__line" d="M29.9 13.1h-28.4"/></svg>
          </span>
        </div>
        <div class="arrow next" style="opacity: 1; transform: translate3d(0px, 0px, 0px);">
          <span class="svg svg-arrow-right">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 26" enable-background="new 0 0 30 26"><path d="M16.9 0c.3 0 .5.1.7.3l12 12c.4.4.4 1 0 1.4l-12 12c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l11.3-11.3-11.3-11.3c-.4-.4-.4-1 0-1.4.2-.2.5-.3.7-.3z"/><path class="arrow__line" d="M0 12.9h28.5"/></svg>
          </span>
        </div>
      </div>
    </div>
</div>
</header>
<main>
    <div class="container">
        <section id="about-vocational">
            <div class="row">
                <div class="col-md-6 col-sm-12 my-2">
                    <img src="{{asset('assets/images/plb.jpg')}}" class="img-fluid rounded" width="900" height="900"
                        alt="tentang fokasi">
                </div>
                <div class="col-md-6 col-sm-12 my-2">

                    <div class="wrapper mt-5 ms-5" style="width: 80%">
                        <h1 class="text-title" style="font-size: 35px">{{"Apa Itu Pendidikan Vokasi ?"}}</h1>
                        <p class="mt-4">{{"Pendidikan vokasi adalah sistem pendidikan yang menerapkan praktik 80% serta teori 20%."}}</p>
                        <?php $locale = App::getLocale(); ?>
                        <a href="/{{$locale}}/link_and_match" class="mt-3 btn text-primary"
                            style="padding: 0; font-weight: 600;">Find Out
                            Here <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right ms-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg></a>

                    </div>
                </div>
            </div>
        </section>
        <section id="news">
            <div class="row mb-3">
                <div class="col-12 text-center">
                    <h1>{{"Berita dan Kegiatan Terbaru"}}</h1>
                </div>
            </div>
            <hr class="mt-3 mb-3 bg-primary">
            <div class="row mt-4">
                @foreach ($articles as $article)
                <div class="col-md-3 my-2 col-sm-12">
                    <div class="card bg-white rounded border-0">
                        <div class="card-image">
                            <img src="{{asset('uploads/article/'.$article->image)}}" alt="news" height="250"
                                class="card-img-top rounded">
                            <div class="card-body mt-4" style="padding: 0;">
                                <div class="card-title">
                                    {{$article->title}}
                                </div>
            
                                <div class="mt-3 float-right">
                                    <a href="{{$locale}}/articles/{{$article->id}}" class="btn btn-outline-primary btn-sm">
                                        {{"Read More"}}
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
@include('users/layouts/indexjs')

