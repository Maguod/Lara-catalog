@extends('layouts.layoutHome')
@section('header-bottom')
    <div class="header-bottom">
        <div class="container">
            <div class="header">
                <div class="col-md-12">
                    <div class="top-nav">
                        <ul class="memenu skyblue"><li class="active"><a href="/">Home</a></li>

                            @foreach($cats as $cat)
                                <li class="grid"><a href="/category/{{$cat->id}}">{{$cat->title}}</a>
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
    <div class="single contact">
        <div class="container">
            <div class="single-main">
                <div class="col-md-9 single-main-left">
                    <div class="sngl-top">
                        <div class="col-md-5 single-top-left">
                            <img src="/{{$card->image}}" alt="{{$card->title}}">
                        </div>
                        <div class="col-md-7 single-top-right">
                            <div class="single-para simpleCart_shelfItem">
                                <h2>{{$card->title}}</h2>
                                <div class="star-on">
                                    <ul class="star-footer">
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                        <li><a href="#"><i> </i></a></li>
                                    </ul>
                                    <div class="clearfix"> </div>
                                </div>

                                <p>{{$card->content}}</p>

                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection



