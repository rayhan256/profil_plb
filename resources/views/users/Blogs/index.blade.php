@include('users/layouts/header')
@php
    $locale = App::getLocale();
@endphp
<div class="container">
    <section class="news-header" style="margin-top: 1.5em;">
        <h3>@lang('article.title')</h3>
        <form action="blogs/search" method="GET">
            <div class="row mt-5">
                <div class="col-md-3 col-sm-4 w-50">
                    <div class="form-group">
                        <input type="text" placeholder="@lang('article.search')" class="form-control" name="article"
                            id="article">
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 w-50">
                    <button class="btn btn-primary">@lang('article.button')</button>
                </div>
            </div>
        </form>
    </section>
    <section style="margin-top: 1em;">
        <div class="row">
            @foreach ($articles as $i)
            <div class="col-md-3 col-sm-12 mt-3">
                <div class="card article-card">
                        <a href="/blogs/view/{{$i->id}}"><img src="{{asset('uploads/article/').'/'.$i->image}}" class="card-img-top" alt=""></a>
                    <div class="card-body">
                        <div class="card-title">{{$i->title}}</div>
                        <p class="card-text">{{$i->author}}, {!! date('jS F Y', strtotime($i->date)) !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
<div class="row mt-4">
    <div class="col-12">
        {{$articles->links()}}
    </div>
</div>
</section>
</div>
@include('users/layouts/footer')
