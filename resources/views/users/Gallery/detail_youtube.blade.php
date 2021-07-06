@include('users/layouts/header')
@php
$locale = App::getLocale();
@endphp
<div class="container mt-4">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/{{ $locale }}">Home</a></li>
            <li class="breadcrumb-item"><a href="/{{ $locale }}/gallery">Gallery</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Videos</li>
        </ol>
    </nav>
    <h3>Dokumentasi Kegiatan Kami</h3>
    <hr class="mb-3">
    <div class="row" id="video-wrapper"></div>
</div>
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
            items.map(e => {
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
