<?php
use App\Models\Campus;
use App\Models\Prodi;
?>
<!DOCTYPE html>
<html lang="en">
<?php
$locale = App::getLocale();

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
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
                <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/logo/plblogo.png') }}"
                        alt="Politeknik LP3I" class="img-fluid" width="100" height="100" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav align-self-center me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/{{ $locale }}">@lang('navbar.home')</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Prodi
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @php
                                    $prodi = Prodi::all();
                                @endphp
                                @foreach ($prodi as $item)
                                    <li><a class="dropdown-item"
                                            href="/{{ $locale }}/prodi/{{ $item->id }}">{{ $item->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/{{ $locale }}/about">@lang('navbar.about')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/{{ $locale }}/link_and_match">@lang('navbar.education')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/{{ $locale }}/gallery">@lang('navbar.gallery')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="/{{ $locale }}/career_centre">@lang('navbar.carrier_centre')</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                @lang('navbar.journal')
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
                                @lang('navbar.campus')
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <?php $campus = Campus::all(); ?>
                                @foreach ($campus as $c)
                                    <li><a class="dropdown-item"
                                            href="/campus/{{ $c->id }}">{{ $c->campus_name }}</a></li>
                                @endforeach

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/{{ $locale }}/tridharma">Tridharma</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/{{ $locale }}/blogs">@lang('navbar.article')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
