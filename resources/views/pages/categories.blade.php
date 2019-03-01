@extends('pages.layout')

@section('header-bottom')
    <div class="header-bottom">
        <div class="container">
            <div class="header">
                <div class="col-md-12">
                    <div class="top-nav">
                        <ul class="memenu skyblue"><li class="active"><a href="/">Home</a></li>

                            @foreach($cats as $cat)
                                <li class="grid"><a href="/categories/{{$cat->id}}">{{$cat->title}}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('content')

    <h2 class="text-center text-uppercase mb-3 mt-3">{{$mainCat->title}}</h2>
    <div class="product">
        <div class="container">
            <div class="product-top">
                <div class="product-one">

                    @foreach($cards as $card)
                        <div class="col-md-3 product-left">
                            <div class="product-main simpleCart_shelfItem">
                                <a href="/single/{{$card->id}}" class="mask">
                                    <img class="img-responsive zoom-img" src="{{$card->getImage()}}" alt="" />
                                </a>
                                <div class="product-bottom">
                                    <h3>{{$card->title}}</h3>

                                </div>
                                <div class="srch">
                                    <span>-50%</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{$cards->links()}}
        </div>
    </div>


@endsection




