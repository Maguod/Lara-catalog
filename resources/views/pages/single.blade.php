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
    <div class="single contact">
        <div class="container">
            <div class="single-main">
                <div class="col-md-9 single-main-left">
                    <div class="sngl-top">
                        <div class="col-md-5 single-top-left">
                            <img src="{{$card->getImage()}}" alt="{{$card->title}}" class="thumb-image">
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
            @if($comments)
            <div class="row">
                <div class="col-sm-12">
                    <ul class="list-group list-group-flush">
                        @foreach($comments as $com)
                            <li class="list-group-item">
                                <div class="alert alert-success" role="alert">{{$com->text}}</div>
                                <div class="author text-right text-info" >
                                    {{$com->getAuthor()}}
                                </div>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>
            @endif
            @if(Auth::check())
                <div class="col-md-6 mt-5">
                    <form action="/user/comment/{{$card->id}}" class="comment_form" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleFormControlTextarea3">Your comment</label>
                            <textarea class="form-control" name="text" id="exampleFormControlTextarea3"
                                      rows="7"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info">leave comment</button>
                    </form>
                </div>
            @endif
        </div>
    </div>
@endsection



