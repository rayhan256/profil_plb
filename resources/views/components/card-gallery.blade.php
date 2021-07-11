<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid - Cato the Younger -->
    <div class="card-gallery-wrapper">
        <a href="{{ asset('uploads/galleries/' . $image) }}">
            <div class="image-name">{{ $name }}</div>
            <img src="{{ asset('uploads/galleries/' . $image) }}" class="gallery-image rounded-3" alt="">
        </a>
    </div>
</div>
