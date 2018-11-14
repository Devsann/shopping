@extends('main.master')

@section('title','CompanyLists')

@section('content')
    <div class="container main_contain">
        <div class="col-xs-6">
            <div class="it-acce">
                <a href="{{url('admin/salead')}}" class="btn btn-primary" role="button">IT & Accessories Creator</a>
            </div>
            <div class="fashion">
                <a href="{{url('admin/compani/mobtable')}}" class="btn btn-primary" role="button">Mobile & Accessories Creator</a>
            </div>
            <div class="music">
                <a href="#" class="btn btn-primary" role="button">Musicals Creator</a>
            </div>

        </div>
        <div class="col-xs-6">
            <div class="fashion">
                <a href="#" class="btn btn-primary" role="button">Fashions Creator</a>
            </div>
            <div class="shoes">
                <a href="#" class="btn btn-primary" role="button">Shoes Creator</a>
            </div>
            <div class="others">
                <a href="#" class="btn btn-primary" role="button">Others Creator</a>
            </div>
        </div>
    </div>
    @endsection