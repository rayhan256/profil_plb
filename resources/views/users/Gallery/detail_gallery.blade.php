@include('users/layouts/header')
@php
$locale = App::getLocale();
@endphp
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ $locale }}">Home</a></li>
            <li class="breadcrumb-item"><a href="/{{ $locale }}/gallery">Gallery</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Galleries</li>
        </ol>
    </nav>
    <section>
        <h3>Galleri Kegiatan Kami</h3>
        <div class="row">
            @foreach ($galleries as $gallery)
                <div class="col-md-3 col-sm-4 my-3">
                    <x-card-gallery :name="$gallery->name" :image="$gallery->image" />
                </div>
            @endforeach
        </div>
        <div class="row mt-4">
            <div class="col-12">
                {{ $galleries->links() }}
            </div>
        </div>
    </section>
</div>
@include('users/layouts/footer')
