@extends('main.master')
@section('title',"IT & Accessories")

@section('content')
    <div class="container">
        <div class="row IT_row">
            @foreach($info as $infos)
                <div class="col-xs-3 it_a">
                    <a href="#"><img src="{{asset('/uploads/'.$infos->imgs)}}" alt="titleIMG"></a>
                    <div class="title">
                        <p>{{$infos->title}}</p>
                    </div>
                    <div class="body">
                        <p>{{$infos->about}}</p>
                        <p>{{$infos->price}}</p>
                    </div>
                    <div class="body_foot">
                        <a href="{{url('/itview/it/'.$infos->id.'/buy')}}" class="btn btn-success col-md-12 col-sm-12">$ Order</a>
                    </div>
                </div>
                @endforeach
        </div>
        <div class="text-center">
            {!! $info->links(); !!}
        </div>
    </div>
    @endsection