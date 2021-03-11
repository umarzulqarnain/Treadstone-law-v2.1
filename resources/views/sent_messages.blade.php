@extends('layouts.master')


@section('styles')

    <style>

        .choose_member_list{

            background-color: #fff !important;
            border-color: #fff !important;
        }

        .select2-container{

            width: 100% !important;
            border: none !important;
        }

        .select2-container--default.select2-container--focus .select2-selection--multiple ,
        .select2-container--default .select2-selection--multiple{

            border: none!important;
        }

        .select2-container--default .select2-search--inline .select2-search__field{

            width: 100% !important;
        }

    </style>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

@endsection

@section('content')



    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center mr-1">
                <!--begin::Mobile Toggle-->
                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Mobile Toggle-->
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Messages</h2>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">


                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center flex-wrap">
                <!--begin::Button-->
                <a href="#" class="btn btn-primary btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2">
                    <span class="svg-icon svg-icon-lg">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="d-none d-md-inline">{{ auth()->user()->name }} - {{ auth()->user()->type }}</span>

                </a>
                <!--end::Button-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Inbox-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                <div class="flex-row-auto offcanvas-mobile w-200px w-xxl-275px" id="kt_inbox_aside">
                    <!--begin::Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Body-->
                        <div class="card-body px-5">
                            <!--begin::Compose-->
                            <div class="px-4 mt-4 mb-10">
                                <a id="newmsgbtn" data-content="0" href="#" class="btn btn-block btn-primary font-weight-bold text-uppercase py-4 px-6 text-center" onclick="_initNewMsgEditor('contentmsg')" data-toggle="modal" data-target="#kt_inbox_compose">New Message</a>
                            </div>
                            <!--end::Compose-->
                            <!--begin::Navigations-->
                            <div class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon">
                                <!--begin::Item-->
                                <div class="navi-item my-2">
                                    <a href="{{ route('messages') }}" class="navi-link ">
                                        <span class="navi-icon mr-4">
                                            <span class="svg-icon svg-icon-lg">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-heart.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M13.8,4 C13.1562,4 12.4033,4.72985286 12,5.2 C11.5967,4.72985286 10.8438,4 10.2,4 C9.0604,4 8.4,4.88887193 8.4,6.02016349 C8.4,7.27338783 9.6,8.6 12,10 C14.4,8.6 15.6,7.3 15.6,6.1 C15.6,4.96870845 14.9396,4 13.8,4 Z" fill="#000000" opacity="0.3" />
                                                        <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Inbox</span>
                                        {{--<span class="navi-label">--}}
                                            {{--<span class="label label-rounded label-light-success font-weight-bolder"></span>--}}
                                        {{--</span>--}}
                                    </a>
                                </div>
                                <div class="navi-item my-2 ">
                                    <a href="{{ route('messages.sent') }}" class="navi-link active">
															<span class="navi-icon mr-4 ">
																<span class="svg-icon svg-icon-lg">
																	<!--begin::Svg Icon | path:/metronic/theme/html/demo3/dist/assets/media/svg/icons/Communication/Sending.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<rect x="0" y="0" width="24" height="24"></rect>
																			<path d="M8,13.1668961 L20.4470385,11.9999863 L8,10.8330764 L8,5.77181995 C8,5.70108058 8.01501031,5.63114635 8.04403925,5.56663761 C8.15735832,5.31481744 8.45336217,5.20254012 8.70518234,5.31585919 L22.545552,11.5440255 C22.6569791,11.5941677 22.7461882,11.6833768 22.7963304,11.794804 C22.9096495,12.0466241 22.7973722,12.342628 22.545552,12.455947 L8.70518234,18.6841134 C8.64067359,18.7131423 8.57073936,18.7281526 8.5,18.7281526 C8.22385763,18.7281526 8,18.504295 8,18.2281526 L8,13.1668961 Z" fill="#000000"></path>
																			<path d="M4,16 L5,16 C5.55228475,16 6,16.4477153 6,17 C6,17.5522847 5.55228475,18 5,18 L4,18 C3.44771525,18 3,17.5522847 3,17 C3,16.4477153 3.44771525,16 4,16 Z M1,11 L5,11 C5.55228475,11 6,11.4477153 6,12 C6,12.5522847 5.55228475,13 5,13 L1,13 C0.44771525,13 6.76353751e-17,12.5522847 0,12 C-6.76353751e-17,11.4477153 0.44771525,11 1,11 Z M4,6 L5,6 C5.55228475,6 6,6.44771525 6,7 C6,7.55228475 5.55228475,8 5,8 L4,8 C3.44771525,8 3,7.55228475 3,7 C3,6.44771525 3.44771525,6 4,6 Z" fill="#000000" opacity="0.3"></path>
																		</g>
																	</svg>
                                                                    <!--end::Svg Icon-->
																</span>
															</span>
                                        <span class="navi-text font-weight-bolder font-size-lg">Sent</span>
                                    </a>
                                </div>
                                <!--end::Item-->

                            </div>
                            <!--end::Navigations-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Aside-->
                <!--begin::List-->
                <div class="flex-row-fluid ml-lg-8 d-block" id="kt_inbox_list">
                    <!--begin::Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Header-->
                        <div class="card-header row row-marginless align-items-right flex-wrap py-5 h-auto">
                            <!--begin::Toolbar-->

                            <!--end::Toolbar-->
                            <!--begin::Search-->

                            <!--end::Search-->
                            <!--begin::Pagination-->
                            <div class="col-12 col-sm-12 col-xxl-12 order-2 order-xxl-3 d-flex align-items-right justify-content-sm-end text-right my-2">
                                <!--begin::Per Page Dropdown-->
                                <div class="d-flex align-items-center mr-2" data-toggle="tooltip" title="" data-original-title="Records per page">
                                    <span class="text-muted font-weight-bold mr-2" data-toggle="dropdown">1 - 10 of 3</span>
                                    <div class="dropdown-menu dropdown-menu-right p-0 m-0 dropdown-menu-sm">
                                        <ul class="navi py-3">
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">20 per page</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link active">
                                                    <span class="navi-text">50 par page</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-text">100 per page</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--end::Per Page Dropdown-->
                                <!--begin::Arrow Buttons-->
                                <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip" title="" data-original-title="Previose page">
														<i class="ki ki-bold-arrow-back icon-sm"></i>
													</span>
                                <span class="btn btn-default btn-icon btn-sm mr-2" data-toggle="tooltip" title="" data-original-title="Next page">
														<i class="ki ki-bold-arrow-next icon-sm"></i>
													</span>
                                <!--end::Arrow Buttons-->
                                <!--begin::Sort Dropdown-->

                                <!--end::Sort Dropdown-->
                                <!--begin::Options Dropdown-->

                                <!--end::Options Dropdown-->
                            </div>
                            <!--end::Pagination-->
                        </div>

                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body table-responsive px-0">
                            <!--begin::Items-->
                            <div class="list list-hover min-w-500px" data-inbox="list">



                                @foreach($messages as $message)

                                    <div style="cursor: pointer" class="d-flex align-items-start list-item card-spacer-x py-3 contact_message_click contact_message-{{ $message['id'] }}" data-id="{{ $message['id'] }}"  data-number="0" >
                                        <!--begin::Toolbar-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Author-->
                                            <div class="d-flex align-items-center flex-wrap w-xxl-200px mr-3" data-toggle="view">
                                                <?php
                                                $arrayOfColors=array('danger' , 'primary' , 'success' , 'warning');
                                                $random_key = array_rand($arrayOfColors);
                                                $random_value = $arrayOfColors[$random_key];
                                                ?>

                                                <div class="symbol symbol-light-{{ $random_value }} symbol-35 mr-3">
                                                    <span class="symbol-label font-weight-bolder"> {{  mb_substr($message->receiver->name, 0, 1, "UTF-8") }} {{  mb_substr($message->sender->last_name, 0, 1, "UTF-8") }}</span>
                                                </div>
                                                <a href="#" style="text-transform: capitalize" class="font-weight-bold text-dark-75 text-hover-primary">{{ $message->receiver->name }} {{ $message->receiver->last_name }}</a>
                                            </div>
                                            <!--end::Author-->
                                        </div>
                                        <!--end::Toolbar-->
                                        <!--begin::Info-->
                                        <div class="flex-grow-1 mt-2 mr-2" data-toggle="view">
                                            <div>
                                                <span class="font-weight-bolder font-size-lg mr-2">{{ $message['subject'] }}</span>

                                                <?php $striped  = strip_tags($message['body']);

                                                $message_body = substr($striped, 0, 120);
                                                ?>

                                                <span class="text-muted">{{ $message_body }}..</span>
                                            </div>

                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Datetime-->
                                        <div class="mt-2 mr-3 font-weight-normal w-100px text-right text-muted" data-toggle="view"> {{  Carbon\Carbon::parse($message['created_at'])->diffForHumans() }} </div>
                                        <!--end::Datetime-->
                                    </div>


                                @endforeach




                            </div>
                            <!--end::Items-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->

                    <br>

                    {{ $messages->links() }}


                </div>
                <!--end::List-->

                <!--begin::View-->
                @foreach($messages as $key => $row)
                <div id="kt_inbox_view" class="flex-row-fluid ml-lg-8 d-none kt_inbox_view-{{$row->id}}">
                    <!--begin::Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Header-->
                        <div class="card-header align-items-center flex-wrap justify-content-between py-5 h-auto">
                            <!--begin::Left-->
                            <div style="text-transform: capitalize" class="d-flex align-items-center my-2">
                                <a  href="#" class="btn btn-clean btn-icon btn-sm mr-6 back_to_list"  data-id="{{ $row->id }}">
                                    <i class="flaticon2-left-arrow-1"></i>
                                </a>

                                <b>{{ $row->receiver['name'] }} {{ $row->receiver['last_name']  }}  </b>

                            </div>
                            <!--end::Left-->
                        </div>

                    <?php


                    $convo_msgs = \App\Messages::where([['sender_id' , '=' , $row->receiver['id'] ] , ['user_id' , '=' , auth()->user()->id] ] )
                                    ->orWhere([['user_id' , '=' , $row->receiver    ['id'] ] , ['sender_id' , '=' , auth()->user()->id] ] )
                                    ->orderby('created_at')
                                    ->get();

                    ?>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body p-0">
                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between flex-wrap card-spacer-x py-5">
                                <!--begin::Title-->
                                <div class="d-flex align-items-center mr-2 py-2">
                                    {{--<div class="font-weight-bold font-size-h3 mr-3">Trip Reminder. Thank you for flying with us!</div>--}}
                                </div>
                                <!--end::Title-->

                            </div>
                            <!--end::Header-->
                            <!--begin::Messages-->
                            <div class="mb-3">


                                @foreach($convo_msgs as $msg)

                                <div id="message_self{{ $msg->id }}" class="cursor-pointer shadow-xs message_self toggle-off" data-id="{{ $msg->id }}"  >
                                    <!--begin::Message Heading-->
                                    <div class="d-flex card-spacer-x py-6 flex-column flex-md-row flex-lg-column flex-xxl-row justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <span class="symbol symbol-50 mr-4">
                                                <?php
                                                $arrayOfColors=array('danger' , 'primary' , 'success' , 'warning');
                                                $random_key = array_rand($arrayOfColors);
                                                $random_value = $arrayOfColors[$random_key];
                                                ?>

                                                <div class="symbol symbol-light-{{ $random_value }} symbol-35 mr-3">
                                                    <span class="symbol-label font-weight-bolder"> {{  mb_substr($msg->sender['name'], 0, 1, "UTF-8") }} {{  mb_substr($msg->sender['last_name'], 0, 1, "UTF-8") }}</span>
                                                </div>

                                            </span>
                                            <div class="d-flex flex-column flex-grow-1 flex-wrap mr-2">
                                                <div class="d-flex">
                                                    <a href="#" class="font-size-lg font-weight-bolder text-dark-75 text-hover-primary mr-2">{{ $msg->sender['name'] }}</a>
                                                    <div class="font-weight-bold text-muted">
                                                        <span class="label label-success label-dot mr-2"></span>{{ Carbon\Carbon::parse($msg->created_at)->diffForHumans() }}</div>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <div class="toggle-off-item">
                                                            <span class="font-weight-bold text-muted cursor-pointer" data-toggle="dropdown">
                                                            </span>
                                                    </div>
                                                    <div class="text-muted font-weight-bold toggle-on-item" data-inbox="toggle">
                                                        <?php $striped  = strip_tags($msg->body);

                                                        $message_body = substr($striped, 0, 120);
                                                        ?>
                                                        {{ $message_body }}..</div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="d-flex my-2 my-xxl-0 align-items-md-center align-items-lg-start align-items-xxl-center flex-column flex-md-row flex-lg-column flex-xxl-row">
                                            <div class="font-weight-bold text-muted mx-2">{{ $msg->created_at }}</div>
                                        </div>
                                    </div>
                                    <!--end::Message Heading-->
                                    <div style="padding-bottom: 2.5rem !important;" class="card-spacer-x py-3 toggle-off-item">

                                      {!! $msg->body !!}
                                    </div>
                                </div>

                                @endforeach

                            </div>
                            <!--end::Messages-->
                            <!--begin::Reply-->
                            <div class="card-spacer mb-3" id="kt_inbox_reply">
                                <div class="card card-custom shadow-sm">
                                    <div class="card-body p-0">
                                        <!--begin::Form-->
                                        <form id="kt_inbox_compose_form"  method="post" action="{{ route('message.send') }}">
                                            @csrf
                                            <!--begin::Header-->
                                            <div class="d-flex align-items-center justify-content-between py-5 pl-8 pr-5 border-bottom">
                                                <h5 class="font-weight-bold m-0">Compose</h5>
                                                <div class="d-flex ml-2">
                                                    <span class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
                                                        <i class="ki ki-close icon-1x"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="d-block">
                                                <!--begin::To-->
                                                <div  style="display: none !important;" class="d-flex  align-items-center border-bottom inbox-to px-8 min-h-45px">
                                                    <div class="text-dark-50 w-75px">To:</div>
                                                    <div class="d-flex align-items-center flex-grow-1">
                                                      <input  hidden type="text" name="user_id" value="{{ $row->user_id }}">
                                                    </div>

                                                </div>

                                                <!--end::To-->

                                                <!--begin::Subject-->
                                                <div class="border-bottom">
                                                    <input class="form-control border-0 px-8 min-h-45px" name="subject" placeholder="Subject"  />
                                                </div>
                                                <!--end::Subject-->
                                                <!--begin::Message-->
                                                {{--<div id="kt_inbox_compose_editor"  class="border-0" style="height: 250px">--}}

                                                {{--</div>--}}


                                                <div id="contentmsg-{{ $row->id }}" style="height: 250px;">

                                                </div>
                                                <textarea id="contentmsg-{{$row->id}}-textarea" type="textarea" class="form-control "  row="5" name="body" style="display: none;">
                                                </textarea>
                                                <!--end::Message-->
                                                <!--begin::Attachments-->
                                                <!--end::Attachments-->
                                            </div>
                                            <!--end::Body-->
                                            <!--begin::Footer-->
                                            <div class="d-flex align-items-center justify-content-between py-5 pl-8 pr-5 border-top">
                                                <!--begin::Actions-->
                                                <div class="d-flex align-items-center mr-3">
                                                    <!--begin::Send-->
                                                    <div class="btn-group mr-4">
                                                        <button type="submit"  class="btn btn-primary font-weight-bold px-6">Send</button>
                                                    </div>
                                                    <!--end::Send-->
                                                    <!--begin::Other-->

                                                    <!--end::Other-->
                                                </div>
                                                <!--end::Actions-->
                                                <!--begin::Toolbar-->
                                                <div class="d-flex align-items-center">

                                                    <span class="btn btn-icon btn-sm btn-clean" data-inbox="dismiss" data-toggle="tooltip" title="Dismiss reply">
                                        <i class="flaticon2-rubbish-bin-delete-button"></i>
                                    </span>
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Footer-->
                                        </form>

                                        <!--end::Form-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Reply-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Card-->
                </div>
                @endforeach
                <!--end::View-->
            </div>
            <!--end::Inbox-->
            <!--begin::Compose-->
            <div class="modal modal-sticky modal-sticky-lg modal-sticky-bottom-right" id="kt_inbox_compose" role="dialog" data-backdrop="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!--begin::Form-->
                        <form id="kt_inbox_compose_form"  method="post" action="{{ route('message.send') }}">
                            @csrf
                            <!--begin::Header-->
                            <div class="d-flex align-items-center justify-content-between py-5 pl-8 pr-5 border-bottom">
                                <h5 class="font-weight-bold m-0">Compose</h5>
                                <div class="d-flex ml-2">
                                    <span class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
                                        <i class="ki ki-close icon-1x"></i>
                                    </span>
                                </div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <div class="d-block">
                                <!--begin::To-->
                                <div class="d-flex align-items-center border-bottom inbox-to px-8 min-h-45px">
                                    <div class="text-dark-50 w-75px">To:</div>
                                    <div class="d-flex align-items-center flex-grow-1">


                                        <select name="user_id" class="form-control select2 select2-hidden-accessible" id="kt_select2_9"  multiple="" data-select2-id="kt_select2_9" tabindex="-1" aria-hidden="true" required>
                                            <?php
                                            if(auth()->user()->type=="Admin"){
                                                $users = DB::table('users')->where('id' , '!=' , auth()->user()->id)->get();
                                            }else{
                                                $users = DB::table('users')->where('id' , '!=' , auth()->user()->id)->where('type' , 'Admin')->get();


                                            }
                                             ?>
                                            @foreach($users as $row)
                                                <option value="{{ $row->id }}">{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>



                                </div>

                                <!--end::To-->

                                <!--begin::Subject-->
                                <div class="border-bottom">
                                    <input class="form-control border-0 px-8 min-h-45px" name="subject" placeholder="Subject"  />
                                </div>
                                <!--end::Subject-->
                                <!--begin::Message-->
                                {{--<div id="kt_inbox_compose_editor"  class="border-0" style="height: 250px">--}}

                                {{--</div>--}}


                                <div id="contentmsg" style="height: 250px;">

                                </div>
                                <textarea id="contentmsg-textarea" type="textarea" class="form-control "  row="5" name="body" style="display: none;">


                                </textarea>
                                <!--end::Message-->
                                <!--begin::Attachments-->
                                <!--end::Attachments-->
                            </div>
                            <!--end::Body-->
                            <!--begin::Footer-->
                            <div class="d-flex align-items-center justify-content-between py-5 pl-8 pr-5 border-top">
                                <!--begin::Actions-->
                                <div class="d-flex align-items-center mr-3">
                                    <!--begin::Send-->
                                    <div class="btn-group mr-4">
                                        <button type="submit"  class="btn btn-primary font-weight-bold px-6">Send</button>
                                    </div>
                                    <!--end::Send-->
                                </div>
                                <!--end::Actions-->
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center">
                                    <span class="btn btn-icon btn-sm btn-clean" data-inbox="dismiss" data-toggle="tooltip" title="Dismiss reply">
                                        <i class="flaticon2-rubbish-bin-delete-button"></i>
                                    </span>
                                </div>
                                <!--end::Toolbar-->
                            </div>
                            <!--end::Footer-->
                        </form>

                        <!--end::Form-->
                    </div>
                </div>
            </div>
            <!--end::Compose-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->


@endsection

@section('scripts')


    <script src="{{ asset('js/pages/custom/inbox/inbox.js') }}"></script>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script>

        var _initNewMsgEditor = function(editor) {

            var msgbtn_content  = $('#newmsgbtn').data('content');

            if(msgbtn_content == 0){

                var quill = new Quill('#'+editor, {
                    modules: {
                        toolbar: {}
                    },
                    placeholder: 'Type message...',
                    theme: 'snow'

                });

            }



            $('#newmsgbtn').data('content',1); //setter




            quill.on('text-change', function(delta, oldDelta, source) {

                var html = quill.root.innerHTML;

                $('#'+editor+'-textarea').text(html).innerHTML;

            });


        };

        var _initEditor = function(editor) {


            var quill = new Quill('#'+editor, {
                modules: {
                    toolbar: {}
                },
                placeholder: 'Type message...',
                theme: 'snow'

            });


            quill.on('text-change', function(delta, oldDelta, source) {

                var html = quill.root.innerHTML;

                $('#'+editor+'-textarea').text(html).innerHTML;

            });


        };

        $(document).ready(function(){

            $('#kt_select2_9').select2({
                placeholder: "Choose a Contact..",
                maximumSelectionLength: 1
            });

            $(".back_to_list").bind("click", function () {


                var id = $(this).data('id');

                var list_view  = $('#kt_inbox_list');

                var inbox_view  = $('.kt_inbox_view-'+id);

                localStorage.clear();

                var loading = new KTDialog({
                    'type': 'loader',
                    'placement': 'top center',
                    'message': 'Loading ...'
                });

                loading.show();

                setTimeout(function() {
                    loading.hide();

                    list_view.css('display', 'block');
                    list_view.addClass('d-block');

                    inbox_view.css('display' , 'none');

                    inbox_view.addClass('d-none');
                    inbox_view.removeClass('d-block');

                }, 700);

            });

            $(".message_self").bind("click", function () {

                var id = $(this).data('id');

                if($('#message_self'+id).hasClass('toggle-on')){

                    $('#message_self'+id).removeClass('toggle-on');
                    $('#message_self'+id).addClass('toggle-off');
                }
                else if($('#message_self'+id).hasClass('toggle-off')){

                    $('#message_self'+id).removeClass('toggle-off');
                    $('#message_self'+id).addClass('toggle-on');
                }

            });

            var viewId ;
            $('.contact_message_click').click(function (e) {
                e.preventDefault();

                var viewId = $(this).data('id');

                localStorage.setItem('selectedTab', $(this).data('id'));
                localStorage.setItem('viewId', $(this).data('id'));

                var msgbtn_content  = $('.contact_message-'+viewId).data('number');

                if(msgbtn_content == 0){

                    _initEditor('contentmsg-'+viewId);

                }

                $('.contact_message-'+viewId).data('number',1); //setter


                var list_view  = $('#kt_inbox_list');
                var inbox_view  = $('.kt_inbox_view-'+viewId);


                var loading = new KTDialog({
                    'type': 'loader',
                    'placement': 'top center',
                    'message': 'Loading ...'
                });

                loading.show();

                setTimeout(function() {
                    loading.hide();

                    list_view.css('display', 'none');
                    list_view.removeClass('d-block');

                    inbox_view.css('display' , 'block');

                    inbox_view.addClass('d-block');
                    inbox_view.removeClass('d-none');

//                    localStorage.setItem('selectedTab-'+viewId, viewId)

                }, 700);


            });


            var selectedTab = localStorage.getItem('selectedTab');
            var viewIdNew = localStorage.getItem('viewId');

            if (selectedTab != null) {


                var list_view  = $('#kt_inbox_list');
                var inbox_view  = $('.kt_inbox_view-'+viewIdNew);

                _initEditor('contentmsg-'+viewIdNew);
                $('.contact_message-'+viewIdNew).data('number',1); //setter


                list_view.css('display', 'none');
                list_view.removeClass('d-block');

                inbox_view.css('display' , 'block');

                inbox_view.addClass('d-block');
                inbox_view.removeClass('d-none');



            }
            else{


                var list_view  = $('#kt_inbox_list');
                var inbox_view  = $('#kt_inbox_view');

                list_view.css('display', 'block');
                list_view.removeClass('d-none');

                inbox_view.css('display' , 'none');

                inbox_view.addClass('d-none');
                inbox_view.removeClass('d-block');

            }


        })



    </script>



    <script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('js/scripts.bundle.js') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('js/pages/crud/forms/widgets/select2.js') }}"></script>


@endsection