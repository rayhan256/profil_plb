@php
$locale = App::getLocale();
@endphp
<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <a href="/{{ $locale }}/prodi/{{ $id }}">
        <div class="prodi-home-wrapper">
            <div class="h5 prodi-home-title text-center {{ $isLight }}">{{ $name }}</div>
            <img src="{{ asset('/uploads/prodi/' . $image) }}" class="img-fluid rounded prodi-icon"
                alt="{{ $name }}">
        </div>
    </a>
</div>
