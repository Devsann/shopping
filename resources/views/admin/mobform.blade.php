@extends('main.master')

@section('title','Mobile Form')

@section('content')
    <div class="container">
        <div class="col-xs-8 col-xs-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">Create Mobile & Accessories Posts</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                            @endforeach

                        @if(session('status'))
                            <p class="alert alert-success">{{session('status')}}</p>
                            @endif

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <label for="name" class="col-xs-4 control-label">Brand / Name</label>
                            <div class="col-xs-6">
                                <input type="text" name="name" id="name" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-xs-4 control-label">Price</label>
                            <div class="col-xs-6">
                                <input type="number" name="price" id="price" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-xs-4 control-label">Saler Phone</label>
                            <div class="col-xs-6">
                                <input type="number" name="phone" id="phone" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="about" class="col-xs-4 control-label">About</label>
                            <div class="col-xs-6">
                                <textarea name="about" id="about" class="form-control" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="img" class="col-xs-4 control-label">Image</label>
                            <div class="col-xs-6">
                                <input type="file" name="img" id="img" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-4 col-xs-offset-4">
                                <button class="btn-primary" name="create">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
