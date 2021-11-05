@extends('layout.base')

@section('pageTitle')
    Homepage
@endsection

@section('pageContent')

    <section id="currentSeries">
        <div class="container">

            <div class="currTitle">Current Series</div>

            <ul class="wrapSeries">
                @foreach ($comics as $comic)
                    <li>
                        <div class="imgcontainer">
                            <img src="{{$comic["thumb"]}}" alt="comicSeries[index].series">
                        </div>
                        <p>{{$comic["title"]}}</p>
                    </li>
                @endforeach
            </ul>

            <button class="btn type-2">Load More</button>

        </div>
    </section>

    <section id="dcIndexBar">
        <div class="container">
            <ul>
                <li>
                    <img src="../images/buy-comics-digital-comics.png" alt="">
                    <h4>Digital Comics</h4>
                </li>
                <li>
                    <img src="../images/buy-comics-merchandise.png" alt="">
                    <h4>Digital Comics</h4>
                </li>
                <li>
                    <img src="../images/buy-comics-subscriptions.png" alt="">
                    <h4>Digital Comics</h4>
                </li>
                <li>
                    <img src="../images/buy-comics-shop-locator.png" alt="">
                    <h4>Digital Comics</h4>
                </li>
                <li>
                    <img src="../images/buy-dc-power-visa.svg" class="svg" alt="">
                    <h4>Digital Comics</h4>
                </li>
            </ul>
        </div>
    </section>

@endsection