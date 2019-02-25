@extends('layouts.layoutUser')

@section('content')
    <!--Main layout-->
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <!--Grid row-->
            <div class="card-deck row wow fadeIn">
                    @if(count($cards) > 0)
                    @foreach($cards as $card)

                        <div class="col-sm-6 col-md-3 mb-3">
                            <div class="view overlay">
                                <img class="card-img-top" src="/{{$card->image}}" alt="{{$card->title}}">

                                    <div class="mask rgba-white-slight"></div>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">{{$card->title}}</h4>
                                <!--Text-->
                                <p class="card-text">{{$card->content}}</p>
                                <a href="/user/edit/{{$card->id}}" class="btn purple-gradient mb-1">Edit</a>
                                <a href="/user/delete/{{$card->id}}" class="mb-1 btn aqua-gradient">Delete</a>
                            </div>
                        </div>

                    @endforeach
                    @else
                        <h3 class="mb-3 mt-3 text-primary">У вас пока нет личных товаров</h3>
                    @endif

            </div>
            <!--Grid row-->
            <div class="row">
                <div class="col-sm-12 text-center">
                    {{$cards->links()}}
                </div>
            </div>

        </div>
    </main>
    <!--Main layout-->
@endsection
