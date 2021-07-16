<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Politeknik LP3I Bandung</title>
</head>
<style>
    .carousel-inner {
        height: auto !important;
    }

    iframe {
        width: 100% !important;
    }

</style>

<body>
    <header class="mt-5">
        <div class="container">
            <div class="d-flex flex-row">
                <img src="{{ asset('assets/images/back_btn.png') }}" class="img-fluid" width="30" height="15"
                    onclick="window.history.back()" style="cursor: pointer">
            </div>
        </div>
    </header>
    <div class="container">
        <section style="margin-bottom: 3%;">
            <div class="d-flex flex-row mt-4 justify-content-between">
                <div style="width: 50%">
                    <h4 class="text-title">{{ $campus->campus_name }}</h4>
                </div>
                <div style="width: 150px" class="d-flex flex-row">
                    <h5 class="text-muted me-2">Share</h5>
                    <a href="whatsapp://send?text={!! Request::url() !!}"><img
                            src="{{ asset('assets/images/whatsapp.png') }}" class="ms-1" alt="" width="28"
                            height="28"></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u={!! Request::url() !!}&display=popup"><img
                            src="{{ asset('assets/images/facebook.png') }}" class="ms-1" alt="" width="28"
                            height="28"></a>
                </div>
            </div>
            <hr class="mt-3 mb-3 bg-primary">
        </section>

        <section style="margin: 0; padding: 0;">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <img src="{{ asset('uploads/campus/' . $campus->image) }}" alt="{{ $campus->campus_name }}"
                        class="img-fluid rounded" style="border-radius: 30px;">
                </div>
                <div class="col-md-6 col-sm-12 mt-5">
                    <div>
                        <dl class="row">
                            <dt class="col-sm-3">Call Center</dt>
                            <dd class="col-sm-9">{{ $campus->call_centre }}</dd>
                            <dt class="col-sm-3">Whatsapp</dt>
                            <dd class="col-sm-9">
                                <p>{{ $campus->whatsapp }}</p>
                            </dd>
                            <dt class="col-sm-3">Email</dt>
                            <dd class="col-sm-9">{{ $campus->email }}</dd>
                            <dt class="col-sm-3 text-truncate">Deskripsi</dt>
                            <dd class="col-sm-9">{!! $campus->desc !!}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="row mt-4 mb-4">
                <div class="col-12">
                    <h3 class="text-title text-center">Lokasi Kami</h3>
                    <hr class="mt-3 mb-3 bg-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="rounded shadow overflow-scroll">{!! $campus->embedded_map !!}</div>
                </div>
            </div>
        </section>
    </div>
    @include('users/layouts/footer')
