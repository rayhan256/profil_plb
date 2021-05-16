<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:url" content="{!! Request::url() !!}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{$blog->title}}" />
    <meta property="og:description" content="{{$blog->desc}}" />
    <meta property="og:image" content="{{asset('assets/images/facebook.png')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Politeknik LP3I Bandung</title>
</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

    </script>
    <header class="mt-5">
        <div class="container">
            <div class="d-flex flex-row justify-content-between">
                <img src="{{asset('assets/images/back_btn.png')}}" class="img-fluid" width="30" height="15"
                    onclick="window.history.back()" style="cursor: pointer">
            </div>
        </div>
    </header>
    <div class="container">
        <section>
            <div style="width: 50%">
                <h4 class="text-title">{{$blog->title}}</h4>
            </div>
            <div class="d-flex flex-row mt-4 justify-content-between">
                <h5 class="text-muted">{!! date('D, w F Y', strtotime($blog->date)) !!}, By {{$blog->author}}</h5>
                <div style="width: 200px" class="d-flex flex-row">
                    <h5 class="text-muted me-2">Share</h5>
                    <a href="whatsapp://send?text={!! Request::url() !!}" data-action="share/whatsapp/share"
                        onClick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"
                        target="_blank" title="Share on whatsapp"><img src="{{asset('assets/images/whatsapp.png')}}"
                            class="ms-1" alt="" width="28" height="28"></a>
                    <div class="fb-share-button ms-2" data-href="{!! Request::url() !!}" data-layout="button_count">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class=col-12">
                    <img src="{{asset('storage/blogs/'. $blog->image)}}" alt="{{$blog->title}}" class="img-fluid" style="border-radius: 30px;">
                </div>
                <div class="col-12">
                    <div>
                        <p class="text-muted">{!! html_entity_decode($blog->desc) !!}</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center"> See Another Blogs</h1>
                </div>
                <hr>
            </div>
            <div class="row mt-4">
                @foreach ($another_blog as $b)
                <div class="mt-5 col-md-3 col-sm-12">
                    <div class="card border-0">
                        <div class="card-img"><img src="{{asset('storage/blogs/'.$b->image)}}" class="card-img-top"
                                style="width: 100%; height: 200px; object-position: center; object-fit: fill; background-position: center;"
                                alt="{{$b->title}}"></div>
                        <div class="card-body p-0 mt-4">
                            <div class="h6">{{$b->title}} <br>
                                <div class="mt-2 text-muted" style="font-size: 12px;">
                                    {!! date('D, w F Y', strtotime($b->date)) !!}
                                </div>
                            </div>
                            {{-- <p class="ellipsis" style="font-size: 13px;">
                                {!! html_entity_decode($b->desc) !!}
                            </p> --}}
                            <a href="/blogs/view/{{$b->id}}" class="btn text-primary p-0 text-left btn-sm">Read More</a>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

</body>

</html>
