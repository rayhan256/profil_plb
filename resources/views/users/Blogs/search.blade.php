@include('users.layouts.header')
<div class="container">
    <section class="news-header" style="margin-top: 1.5em;">
        <h3>Search Result</h3>
    </section>
    <section style="margin-top: 1em;">
        <div class="row">
            @if ($articles->isNotEmpty())
            @foreach ($articles as $i)
            <div class="col-md-3 col-sm-12">
                <div class="card article-card">
                    <div class="card-img-top">
                        <a href="/blogs/view/{{$i->id}}"><img src="{{asset('uploads/article/').'/'.$i->image}}" width="250" height="200"
                            style="background-size: cover;" alt=""></a>
                    </div>
                    <div class="card-body">
                        <div class="card-title h4">{{$i->title}}</div>
                        <p>{{$i->author}}, {!! date('W F Y', strtotime($i->date)) !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <center>
                <h2>No Articles Found</h2>
            </center>
            @endif
        </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                {{$articles->links()}}
            </div>
        </div>
    </section>
</div>
@include('users.layouts.footer')
