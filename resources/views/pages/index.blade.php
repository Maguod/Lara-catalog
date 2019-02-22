@extends('layouts.layoutHome')

@section('header-bottom')
    <div class="header-bottom">
        <div class="container">
            <div class="header">
                <div class="col-md-9 header-left">
                    <div class="top-nav">
                        <ul class="memenu skyblue">
                            <li class="active"><a href="/">Home</a></li>

                            @foreach($cats as $cat)
                                <li class="grid"><a href="/category/{{$cat->id}}">{{$cat->title}}</a>
                                </li>
                            @endforeach

                            <li class="grid"><a href="#">Blog</a>
                            </li>
                            <li class="grid"><a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-3 header-right">
                    <div class="search-bar">
                        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value="">
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="product">
        <div class="container">
            <div class="product-top">
                <div class="product-one">
                    @foreach($cards as $card)
                    <div class="col-md-3 product-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="/single/{{$card->id}}" class="mask">
                                <img class="img-responsive zoom-img" src="/{{$card->image}}" alt="{{$card->title}}"
                                />
                            </a>
                            <div class="product-bottom">
                                <h3>{{$card->title}}</h3>
                                <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
                            </div>
                            <div class="srch">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    {{$cards->links()}}
                </div>
            </div>

        </div>
    </div>
@endsection

