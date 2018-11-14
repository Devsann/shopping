@extends('main.master')

@section('title','IT edit');

@section('content')
    <div class="container">
        <div class="col-xs-8 col-xs-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit IT & Accessories Posts</div>

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
                            <label for="title" class="col-xs-4 control-label">Title</label>
                            <div class="col-xs-6">
                                <input type="text" name="title" id="title" class="form-control" value="{{$info->title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-xs-4 control-label">Price</label>
                            <div class="col-xs-6">
                                <input type="number" name="price" id="price" class="form-control" value="{{$info->price}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-xs-4 control-label">SalerPhone</label>
                            <div class="col-xs-6">
                                <input type="number" name="phone" id="phone" class="form-control" value="{{$info->phone}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="about" class="col-xs-4 control-label">About</label>
                            <div class="col-xs-6">
                                <textarea name="about" id="about" class="form-control" required="">{{$info->about}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file" class="col-xs-4 control-label">Image</label>
                            <div class="col-xs-6">
                                <input type="file" id="file" name="file" class="form-control" required="" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-6 col-xs-offset-4">
                                <button class="btn-success" name="create">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection