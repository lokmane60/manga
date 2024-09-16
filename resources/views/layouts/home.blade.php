@extends('app')

@section('title', 'Home')

@section('content')
<section class="top-banner">
    <div class="banner-content">
        <div class="banner-slide active">
            <img src="{{ asset('images/creator1.jpg') }}" alt="Top Creator 1">
            <p>Best Creator 1</p>
        </div>
        <div class="banner-slide">
            <img src="{{ asset('images/creator2.jpg') }}" alt="Top Creator 2">
            <p>Best Creator 2</p>
        </div>
        <!-- More slides here -->
    </div>
</section>

<section class="most-viewed">
    @auth
    <a href="login">deconexion {{auth()->user()->id}}</a>
    @endauth
    @guest
    <a href="login">login</a>
    @endguest
    <h2>Top 10 Most Viewed Creators</h2>
    <ul>
        <div class="fel">
            <div class="el">
                <a href="https://www.voyce.me/series/lost-domain-1">
                    <img src="https://dlkfxmdtxtzpb.cloudfront.net/featured_panels/LD.png?w=420&q=75" alt="Lost Domain">
                    <p>Lost Domain</p>
                </a>
            </div>
            <div class="el">
                <a href="https://www.voyce.me/series/lost-domain-1">
                    <img src="https://dlkfxmdtxtzpb.cloudfront.net/featured_panels/LD.png?w=420&q=75" alt="Lost Domain">
                    <p>Lost Domain</p>
                </a>
            </div>
            @foreach ($links as $link)
                <div class="el">
                    <a href="manga/{{ $link->id }}">
                        <img src="{{ $link->image }}" alt="Lost Domain">
                        <p> {{ $link->name }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    
    </ul>
</section>

<iframe src="{{ url('Website details.pdf') }}" width="600" height="500"></iframe> 

<section class="new-hot-series">
    <h2>New and Hot Series</h2>
    <ul>

    </ul>
</section>

<section class="new-stories">
    <h2>Newest Stories</h2>
    <ul>

    </ul>
</section>
@endsection
