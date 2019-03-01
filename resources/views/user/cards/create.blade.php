@extends('user.layout')

@section('content')
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <!--Grid row-->
            <div class="card-deck row wow fadeIn">
                <div class="row">
                    <div class="col-sm-12">
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger text-center" role="alert">{{$error}}</div>
                        @endforeach
                    </div>
                </div>
    <!--Main layout-->
                <form action="/user/store" method="post" enctype="multipart/form-data" class="col-sm-12 col-md-8 ">
                    {{csrf_field()}}
                    <div class="md-form form-group mt-5">
                        <input type="text" name="title" class="form-control" id="formGroupExampleInputMD" placeholder=""
                               value="{{old('title')}}">
                        <label for="formGroupExampleInputMD">Title Card</label>
                    </div>

                    <div class="md-form mb-4 pink-textarea active-pink-textarea">
                        <i class="fas fa-angle-double-right prefix"></i>
                        <textarea type="text" name="content" id="form21" class="md-textarea form-control"
                                  rows="3"></textarea>
                        <label for="form21">Content Cards</label>
                    </div>
                    <div class="form-group select-wrapper mdb-select md-form">
                        <select name="category_id" class="browser-default custom-select custom-select-md mb-3">
                            <option value="" disabled selected>Choose category</option>
                            @foreach($cats as $cat)
                                <option value="{{$cat->id}}">{{$cat->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="file-field form-group">
                        <div class="btn btn-primary btn-sm ">
                            <span>Choose file</span>
                            <input type="file" name="image">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Upload your file">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-purple btn-rounded mt-4"><i class="fas fa-user fa-sm pr-2"
                                                                           aria-hidden="true"></i>Создать</button>
                </form>
            </div>
        </div>
    </main>
    <!--Main layout-->
@endsection


