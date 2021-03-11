@extends('layouts.master')
@section('content')

    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">

        @include('layouts.header_mobile')

        <div class="card" style="border: 1px solid #fff; margin-bottom: 0;box-shadow: 8px 25px 17px 0 rgba(82,63,105,.05)">
            <div class="card-body card-block card-header-mobile" >
                <div class="row">
                    <div class="col-12 col-md-12">
                        <ul class="header-menu" >
                            <li class="first-li" >Knowledge Base</li>


                            <button style="line-height: 0;box-shadow:none; color: #0db686;right: 3%;top: -2px;position: absolute; font-size: 22px;" class="au-btn-filter"><i class="far fa-plus-square"></i></button>


                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->

    @include('layouts.aside')

    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">


           @include('layouts.header_desktop')

            {{--Bottom Header--}}
            <div class="card" style="border: 1px solid #fff;margin-top: 60px;box-shadow: 8px 25px 17px 0 rgba(82,63,105,.05)">
                <div class="card-body card-block" style="box-shadow: none!important;padding-bottom: 11px;padding-top: 11px;border-top: 1px solid #cccccc4d;">
                    <div class="row">

                        <ul class="header-menu" >
                            <li class="first-li" >Knowledge Base</li>
                        </ul>
                        @if(auth()->user()->type=="Admin")
                            <button class="au-btn-filter plus-square-add" style="box-shadow: none;color: #0db686;line-height: 0;font-size: 27px;position: absolute;right: 0%;"><i class="far fa-plus-square"></i></button>
                            <nav class="add-new-file-header-desktop">
                                <div class="table-responsive col-12 table-responsive-data2">

                                    <form method="POST" action="{{ route('knowledge_base.add') }}">
                                        @csrf

                                        <div class="row">

                                            <div class="col-12 col-md-6">
                                                <br>
                                                <label style="font-weight: 600" class=" form-control-label">Question</label>
                                                <input type="text" class="form-control treadstone-input" name="question" value="" required>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <br>
                                                <label style="font-weight: 600" class=" form-control-label">Answer</label>
                                                <textarea style="height: 50px;" type="text" class="form-control treadstone-input" name="answer" ></textarea>
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <br>
                                                <label style="font-weight: 600" class=" form-control-label">Video Url</label>
                                                <input type="text" class="form-control treadstone-input" name="video_url" value="">
                                            </div>

                                            <div class="col-12 col-md-6">
                                                <br>
                                                <label style="font-weight: 600" class=" form-control-label">Type</label>
                                                <select name="type"  class="form-control treadstone-select" required>
                                                    <option class="treadstone-input">starting</option>
                                                    <option  class="treadstone-input">closing</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <br>
                                                <label style="font-weight: 600"   class="form-control-label">User Type</label>
                                                <select name="user_type"  class="form-control treadstone-select">
                                                    <option  value="Client" class="treadstone-input">Client</option>
                                                    <option  value="Admin" class="treadstone-input">Admin</option>
                                                    <option  value="LawClerk" class="treadstone-input">Law Clerk </option>
                                                    <option   value="MortgageBroker" class="treadstone-input">Mortgage Broker </option>
                                                    <option  value="SigningOfficer" class="treadstone-input">Signing Officer </option>
                                                    <option  value="Realtor" class="treadstone-input">Realtor </option>
                                                </select>
                                            </div>

                                            <div class="col-12 col-md-12">
                                                <br>
                                                <div class="table-data-feature">
                                                    <button type="submit"   class="btn long-blue-button">
                                                      Add
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>

                            </nav>

                        @endif
                    </div>
                </div>
            </div>

        </header>
        <!-- END HEADER DESKTOP-->

        <!--KNOWLEDGE BASE MAIN CONTENT-->


        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">

                    <div class="row">

                        <div class="col-lg-12">

                            <!--<h3  class="title-5 m-b-5 table-title col-xs-12">Knowledge Base </h3>-->
                            <!--<div class="table-data__tool">-->
                            <!--<div class="table-data__tool-left">-->


                            <!--<div class="rs-select2&#45;&#45;light rs-select2&#45;&#45;dark">-->
                            <!--<span style="color: #121f3e;" class="table-sub-title-span"> Introduction</span>-->
                            <!--</div>-->

                            <!--&lt;!&ndash;<button class="au-btn-filter"><i class="zmdi zmdi-filter-list"></i>filters</button>&ndash;&gt;-->
                            <!--</div>-->
                            <!--<div class="table-data__tool-right">-->
                            <!--<button class="au-btn au-btn-icon au-btn&#45;&#45;blue au-btn&#45;&#45;small right-blue-button">-->
                            <!--<i class="zmdi zmdi-plus"></i> Create a new question-->
                            <!--</button>-->

                            <!--</div>-->
                            <!--</div>-->
                        </div>

                    </div>


                    <div  class="row">

                        <div  class="col-lg-12">


                            <br>
                            <!--<div class="text-center" style=" height: 45%; position: relative; background-image: url('https://static.standard.co.uk/s3fs-public/thumbnails/image/2020/03/07/19/lionelmessi070320b.jpg');">-->
                            <!--<div id="color-overlay">-->
                            <!--</div>-->
                            <!--<i style="color: #fff;font-size: 47px;position: absolute;left: 50%;top: 45%;transform: translate(-50%, -50%);" class="zmdi zmdi-play"></i>-->

                            <!--<h4 style="color: #fff ; position:absolute ;top:60%; ; left: 50%; transform: translate(-50%, -50%)">Welcome To You</h4>-->

                            <!--</div>-->
                            <div class="h3 text-center">
                                @include('flash::message')

                            </div>

                            <br>
                            <div class="image-box">
                                {{--<div--}}
                                        {{--class="image-box__background"--}}
                                        {{--style="--image-url: url(https://picsum.photos/2000/3000)"--}}
                                {{--></div>--}}

                                <div class="image-box__overlay"></div>
                                <div class="image-box__content">

                                    <a href="#" style="color:white; position: absolute ; font-size: 40px ;" class="zmdi zmdi-play" ></a>
                                    <h5 style="color: white;">Welcome to you</h5>
                                </div>
                            </div>



                            <!-- END DATA TABLE -->
                        </div>


                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <br>
                            <br>
                            <br>
                            <h3  class="title-5 m-b-5 table-title col-xs-12">Getting Started </h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">


                                    <div class="rs-select2--light rs-select2--dark">
                                        <span style="color: #118df0;" class="table-sub-title-span"> All Questions <span class="number-badge primary-badge "> {{ $count_starting }}</span></span>
                                    </div>

                                    <!--<button class="au-btn-filter"><i class="zmdi zmdi-filter-list"></i>filters</button>-->
                                </div>

                            </div>
                            <div class="table-responsive table-responsive-data2">


                                <div id="accordion" class="accordion-wrapper mb-3">

                                    @foreach($starting_rows as $key =>$errors)

                                        <div class="faq">
                                        <div id="heading{{ $errors->id }}" class=" col-lg-12">
                                            <div  class="row">

                                                <div class="card faq-card" style="border: 1px solid #fff;width: 100%;font-size: 14px">
                                                    <div class="card-body card-block">
                                                        <div class="row">
                                                            <div class="col-12 col-md-10 faq-div">
                                                                <span class="table-td-span-black">{{ $key+1 }}. {{ $errors->question }}</span>
                                                            </div>

                                                            {{--<div class="col-12 col-md-2 faq-div">--}}
                                                                {{--<span class="table-td-span-black date-span">{{ $errors->created_at }}</span>--}}
                                                            {{--</div>--}}

                                                            <div class="col-12 col-md-2 faq-div">
                                                                <button  style="margin-top: -8px" data-toggle="collapse" data-target="#collapse{{ $errors->id }}" class="au-btn au-btn-icon au-btn--blue au-btn--small table-button know-table-button">
                                                                    View
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div data-parent="#accordion" id="collapse{{$errors->id}}" aria-labelledby="heading{{ $errors->id }}" class="collapse" style="">

                                            @if($errors->answer == null)

                                                <div class="card-body">
                                                    <div class="embed-responsive embed-responsive-16by9 center-block text-center">
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $errors->video_url }}"
                                                                frameborder="0"
                                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                                allowfullscreen></iframe>

                                                    </div>
                                                </div>

                                            @else
                                                <div class="card-body">{{ $key+1 }}. {{ $errors->answer }}</div>
                                            @endif
                                        </div>
                                        </div>


                                    @endforeach

                                </div>


                            </div>

                            <br>
                            <h3  class="title-5 m-b-5 table-title col-xs-12">Closing Documents </h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">

                                    <div class="rs-select2--light rs-select2--dark">
                                        <span style="color: #fe3f5c;" class="table-sub-title-span"> All Questions <span class="number-badge red-badge "> {{$count_closing}}</span></span>
                                    </div>

                                    <!--<button class="au-btn-filter"><i class="zmdi zmdi-filter-list"></i>filters</button>-->
                                </div>

                            </div>

                            <div class="table-responsive table-responsive-data2">

                                <div id="accordiontwo" class="accordion-wrapper mb-3">
                                   @foreach($closing_rows as $key => $crows)
                                        <div class="faq">
                                        <div id="heading{{$errors->id}}" class=" col-lg-12">

                                            <div class="row">

                                                <div class="card faq-card" style="border: 1px solid #fff;width: 100%;font-size: 14px">
                                                    <div class="card-body card-block">
                                                        <div class="row">
                                                            <div class="col-12 col-md-10 faq-div">
                                                                <span class="table-td-span-black">{{$key+1}}. {{ $crows->question }}</span>
                                                            </div>

                                                            {{--<div class="col-12 col-md-2 faq-div">--}}
                                                                {{--<span class="table-td-span-black date-span date-span">{{ $crows->created_at }}</span>--}}
                                                            {{--</div>--}}

                                                            <div class="col-12 col-md-2 faq-div">
                                                                <button  style="margin-top: -8px; background: #fe3f5c" data-toggle="collapse"  data-target="#collapse{{$crows->id}}" class="au-btn au-btn-icon au-btn--blue au-btn--small table-button know-table-button">
                                                                    View
                                                                </button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div data-parent="#accordiontwo" id="collapse{{ $crows->id }}" aria-labelledby="heading{{$crows->id}}" class="collapse" style="">


                                            @if($crows->answer == null)

                                                <div class="card-body">
                                                    <div class="embed-responsive embed-responsive-16by9 center-block text-center">
                                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $crows->video_url }}"
                                                                frameborder="0"
                                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                                                allowfullscreen></iframe>

                                                    </div>
                                                </div>

                                            @else
                                                <div class="card-body">{{ $key+1 }}. {{ $crows->answer }}</div>
                                            @endif
                                            </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- END DATA TABLE -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2020 TreadStone Law. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>



@endsection