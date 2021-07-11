@include('users/layouts/header')
@php
$locale = App::getLocale();
@endphp
<div class="container mt-4">
    <div class="container">
        <div class="row">
            <div class="gallery-title-wrapper">
                <h2>Galleri Kegiatan</h2>
                <a href="/{{ $locale }}/gallery/all" class="gallery-link">Lihat Semua</a>
            </div>
        </div>
        <hr class="mb-3">
        <div class="row">
            @foreach ($galleries as $gallery)
                <div class="col-md-3 mb-3 col-sm-6">
                    <x-card-gallery :name="$gallery->name" :image="$gallery->image" />
                </div>

            @endforeach
        </div>
    </div>
</div>
<section id="video">
    <div class="container">
        <div class="row">
            <div class="gallery-title-wrapper">
                <h2 class="">Konten Youtube Kami</h2>
                <a href="/{{ $locale }}/gallery/videos" class="gallery-link">Lihat Semua</a>
            </div>
        </div>
        <hr class="mb-3">
        <div class="row" id="video-wrapper"></div>
    </div>
</section>
@include('users/layouts/footer')
<script>
    let key = 'AIzaSyDMAjMk6OlFTnbBBHz9mboYyBgFP7xifYA'
    let url =
        `https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=50&playlistId=PLZi_OkjogCdGC9wtpxqzU_orETUl1nTED&key=${key}`
    const wrapper = document.getElementById('video-wrapper')
    fetch(url)
        .then(res => res.json())
        .then(data => {
            const {
                items
            } = data
            const filteredArr = items.filter((val, index) => index <= 5)
            filteredArr.map(e => {
                const {
                    id,
                    snippet
                } = e
                const {
                    title,
                    description,
                    thumbnails,
                    resourceId,
                    playlistId,
                    position
                } = snippet
                wrapper.innerHTML += `
          <div class="col-md-4 col-sm-12">
            <div class="card border-0">
              <iframe src="https://www.youtube.com/embed/${resourceId.videoId}" frameborder="0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="card-img-top"></iframe>
              <div class="card-body p-0 mt-2 mb-4">
                <div class="card-title">${title}</div>
              </div>
            </div>
        </div>`
            })
        })
</script>
