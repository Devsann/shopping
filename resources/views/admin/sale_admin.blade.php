@extends('main.master')

@section('title','Sale Admin');

@section('content')
    <div class="container">
        <div class="row sub_header">
            <div class="col-xs-6 left_head">
                <h4>IT & Accessories Post</h4>
            </div>
            <div class="col-xs-6 right_head">
                <a href="{{url('admin/itcreator')}}" class="btn btn-primary pull-right" role="button">Create New Post</a>
            </div>
        </div><hr>
    </div><br>
    <div class="container">
        <table class="table table-responsive">
            <thead>
            <th>#</th>
            <th>title</th>
            <th>body</th>
            <th>price</th>
            <th>created_at</th>
            <th>actions</th>
            </thead>
            <tbody>
            @foreach($info as $infos)
                <tr>
                    <td>{{$infos->id}}</td>
                    <td>{{$infos->title}}</td>
                    <td>{{$infos->about}}</td>
                    <td>{{$infos->price}}</td>
                    <td>{{$infos->created_at}}</td>
                    <td>
                        <a href="{{url('/itview')}}" class="btn btn-default btn-sm">Views</a>
                        <a href="{{action('admin\SaleAdController@edit',$infos->id)}}" class="btn btn-default btn-sm">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection




