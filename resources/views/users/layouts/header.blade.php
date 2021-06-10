<?php use App\Models\Campus; ?>
<!DOCTYPE html>
<html lang="en">
<?php
// use Stichoza\GoogleTranslate\GoogleTranslate;
$locale = App::getLocale();
//      $tr = new GoogleTranslate();
//     $tr->setSource();
//     $tr->setTarget($locale);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
    <meta name="description"
        content="Institusi Pendidikan Vokasi Bisnis & Teknologi dengan Ilmu Terapan untuk Indonesia." />
    <title>Politeknik LP3I Bandung</title>
</head>
<style>
    html {
        scroll-behavior: smooth;
    }

</style>

<body>

    <header class="">
        <nav class="navbar navbar-expand-lg navbar-dark d-flex justify-content-evenly">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{asset('assets/images/logo/plblogo.png')}}"
                        alt="Politeknik LP3I" class="img-fluid" width="100" height="100" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav align-self-center me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page"
                                href="/{{$locale}}">{{"Beranda"}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/{{$locale}}/about">{{"Tentang"}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/{{$locale}}/blogs">{{"Artikel"}}</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="/{{$locale}}/career_centre">{{$tr->translate('Career Centre')}}</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="/{{$locale}}/link_and_match">{{"Pendidikan"}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/{{$locale}}/gallery">{{"Galeri"}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/{{$locale}}/career_centre">Pusat Karir</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{"Jurnal"}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item"
                                        href="https://jurnal.plb.ac.id/index.php/atrabis">Atrabis</a></li>
                                <li><a class="dropdown-item"
                                        href="https://jurnal.plb.ac.id/index.php/tematik">Tematik</a></li>
                                <li><a class="dropdown-item" href="https://jurnal.plb.ac.id/index.php/JRAK">JRAK</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="https://jurnal.plb.ac.id/index.php/komversal">Komversal</a></li>
                                <li><a class="dropdown-item"
                                        href="https://jurnal.plb.ac.id/index.php/nasional">Nasional</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                data-bs-toggle="dropdown" aria-expanded="true">
                                {{ "Kampus"}}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <?php $campus = Campus::all() ?>
                                @foreach ($campus as $c)
                                <li><a class="dropdown-item" href="/campus/{{$c->id}}">{{$c->campus_name}}</a></li>
                                @endforeach

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/{{$locale}}/tridharma">Tridharma</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-self-center ms-auto mb-2 mb-lg-0">
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                @switch($locale)
                                @case('en')
                                English
                                @break
                                @case('id-ID')
                                Indonesia
                                @break
                                @default
                                English
                                @endswitch
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="/en">English</a></li>
                                <li><a class="dropdown-item" href="/id-ID">Indonesia</a></li>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
