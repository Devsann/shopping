@extends('main.master')

@section('title','Home')

@section('content')
    <div class="container-fluid main_contain">
        <div class="row head-row">
            <div class="container-fluid">
                <div id="myCarousel" class="carousel slide img_slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner carousel-img" role="listbox">
                        <div class="item active">
                            <a href="#"><img src="{{asset('img/uk_a.png')}}" alt="guitars" class="img-responsive"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{asset('img/gu_w.png')}}" alt="guitars" class="img-responsive"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{asset('img/gu_n.png')}}" alt="guitars" class="img-responsive"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{asset('img/usa_mine.png')}}" alt="guitars" class="img-responsive"></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="{{asset('img/arc_slider.png')}}" alt="guitars" class="img-responsive"></a>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span></a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container content_main">
        <div class="row new_pd">
            <a href="#"><img src="{{asset('img/newPD.png')}}" alt="titleIMG"></a>
        </div>

        <div class="row IT_row">
            <div class="col-xs-3 it_a">
                <a href="{{url('/itview')}}"><img src="{{asset('img/dell_a.png')}}" alt="titleIMG"></a>
            </div>
            <div class="col-xs-3">
                <a href="{{url('/itview')}}"><img src="{{asset('img/dell_b.png')}}" alt="titleIMG"></a>
            </div>
            <div class="col-xs-3">
                <a href="{{url('/itview')}}"><img src="{{asset('img/dell_c.png')}}" alt="titleIMG"></a>
            </div>
            <div class="col-xs-3">
                <a href="{{url('/itview')}}"><img src="{{asset('img/msi_a.png')}}" alt="titleIMG"></a>
            </div>
        </div>

        {{---------------------------------IT & Accessory End---------------------------------------}}

        <div class="row IT_row">
            <div class="col-xs-3 it_a">
                <a href="{{url('/mobview')}}"><img src="{{asset('uploads/5b8d15bf310cb_galaxy_s8_plus_orchid_gray.png')}}" alt="titleIMG"></a>
            </div>
            <div class="col-xs-3">
                <a href="{{url('/mobview')}}"><img src="{{asset('uploads/5b8d15dd82ca4_galaxy_s9_lilac_purple.png')}}" alt="titleIMG"></a>
            </div>
            <div class="col-xs-3">
                <a href="{{url('/mobview')}}"><img src="{{asset('uploads/5b8d15911295b_galaxy_s8_plus_midnight_bla.png')}}" alt="titleIMG"></a>
            </div>
            <div class="col-xs-3">
                <a href="{{url('/mobview')}}"><img src="{{asset('uploads/5b8d14faab538_868_sm-j400f_001_front_gold.png')}}" alt="titleIMG"></a>
            </div>
        </div>
{{-----------------------------------------------Mobile End----------------------------------------------}}

        <div class="row hot-product">
            <a href="#"><img src="{{asset('img/hotpd.png')}}" alt="hotpd"></a>
        </div>
        <div class="row musical-row">
            <div class="col-xs-4 col_a">
                <a href="#"><img src="{{asset('img/c_a.png')}}" alt="guitars"></a>
            </div>
            <div class="col-xs-4 col_b">
                <a href="#"><img src="{{asset('img/c_b.png')}}" alt="guitars"></a>
            </div>
            <div class="col-xs-4 col_c">
                <a href="#"><img src="{{asset('img/c_d.png')}}" alt="guitars"></a>
            </div>
        </div>

        <div class="row new_music">
            <div class="col-xs-4 right_img">
                <a href="#"><img src="{{asset('img/c_h.png')}}" alt="guitars"></a>
            </div>
            <div class="col-xs-8 group_music">
                <a href="#"><img src="{{asset('img/group_a.png')}}" alt="guitars"></a>
            </div>
        </div><br><hr>


        {{---------------------------------Shoes Products Start---------------------------------------}}
        <div class="row new_fs">
            <a href="#"><img src="{{asset('img/newFS.png')}}" alt="newFS"></a>
        </div>

        <div class="row shoe_row">
            <div class="col-xs-5">
                <a href="#"><img src="{{asset('img/sh_big.jpg')}}" alt="shoeBig"></a>
            </div>
            <div class="col-xs-7">
                <div class="row">
                    <div class="col-xs-4">
                        <a href="#"><img src="{{asset('img/sh_a.jpg')}}" alt="shoeBig"></a>
                    </div>
                    <div class="col-xs-4">
                        <a href="#"><img src="{{asset('img/sh_b.jpg')}}" alt="shoeBig"></a>
                    </div>
                    <div class="col-xs-4">
                        <a href="#"><img src="{{asset('img/sh_c.jpg')}}" alt="shoeBig"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <a href="#"><img src="{{asset('img/sh_a.jpg')}}" alt="shoeBig"></a>
                    </div>
                    <div class="col-xs-4">
                        <a href="#"><img src="{{asset('img/sh_b.jpg')}}" alt="shoeBig"></a>
                    </div>
                    <div class="col-xs-4">
                        <a href="#"><img src="{{asset('img/sh_c.jpg')}}" alt="shoeBig"></a>
                    </div>
                </div>
            </div>
        </div> {{-------------------End Of Shoes----------------------}}

        {{-------------------------Fashion Starts--------------------------}}

        <div class="row fashion_row">
            <div class="col-xs-4">
                <a href="#"><img src="{{asset('img/t_s1.png')}}" alt="shoeBig"></a>
            </div>
            <div class="col-xs-8">
                <div class="row fashion_a">
                    <div class="col-xs-3">
                        <a href="#"><img src="{{asset('img/t_s (1).jpg')}}" alt="shoeBig"></a>
                    </div>
                    <div class="col-xs-3">
                        <a href="#"><img src="{{asset('img/t_s (2).jpg')}}" alt="shoeBig"></a>
                    </div>
                    <div class="col-xs-3">
                        <a href="#"><img src="{{asset('img/t_s (3).jpg')}}" alt="shoeBig"></a>
                    </div>
                    <div class="col-xs-3">
                        <a href="#"><img src="{{asset('img/t_s (4).jpg')}}" alt="shoeBig"></a>
                    </div>
                </div>
                <div class="row fashion_b">
                    <div class="col-xs-3">
                        <a href="#"><img src="{{asset('img/t_s (5).jpg')}}" alt="shoeBig"></a>
                    </div>
                    <div class="col-xs-3">
                        <a href="#"><img src="{{asset('img/t_s (6).jpg')}}" alt="shoeBig"></a>
                    </div>
                    <div class="col-xs-3">
                        <a href="#"><img src="{{asset('img/t_s (7).jpg')}}" alt="shoeBig"></a>
                    </div>
                    <div class="col-xs-3">
                        <a href="#"><img src="{{asset('img/t_s (8).jpg')}}" alt="shoeBig"></a>
                    </div>
                </div>
            </div>
        </div>
        {{----------------------End of Fashion------------------}}
    </div>
    @endsection
