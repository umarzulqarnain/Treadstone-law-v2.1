@extends('layouts.master')

@section('styles')


@endsection
@section('content')

    <!--begin::Subheader-->
    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center mr-1">

                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
                    <span></span>
                </button>
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Profile</h2>
                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center flex-wrap">
                <!--begin::Button-->

                @if(auth()->user()->type != "Client")
                    <div class="btn-group ml-2">
                        <a type="button"  class=" btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2 btn btn-primary font-weight-bold dropdown-toggle dropdown-toggle-split startFileButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="svg-icon svg-icon-lg">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
                            </g>
                        </svg>
                                <!--end::Svg Icon-->
                    </span>
                            <span class="d-none d-md-inline">Start New File</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-sm p-0 m-0 dropdown-menu-right" style="">
                            <ul class="navi py-5">

                                <li class="navi-item">
                                    <a href="#"  data-toggle="modal" data-target="#add_file_purchase_modal"  class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon-suitcase"></i>
                                        </span>
                                        <span class="navi-text">Buying a Home</span>
                                    </a>
                                </li>

                                @if(auth()->user()->type != "MortgageBroker" )
                                    <li class="navi-item">
                                        <a href="#"  data-toggle="modal" data-target="#add_file_sale_modal"  class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon-suitcase"></i>
                                        </span>
                                            <span class="navi-text">Selling a Home</span>
                                        </a>
                                    </li>
                                @endif

                                @if(auth()->user()->type == "Admin" || auth()->user()->type == "MortgageBroker" )
                                    <li class="navi-item">
                                        <a href="#"  data-toggle="modal" data-target="#add_file_refinance_modal"  class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon-suitcase"></i>
                                        </span>
                                            <span class="navi-text">Refinance</span>
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                @endif

                <a href="{{ route('profile') }}" class="btn btn-primary btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2">
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


                <a href="{{ route('messages')}}" class="btn btn-primary btn-icon font-weight-bold"  >
                    <span class="svg-icon svg-icon-lg">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
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
            <div class="h3 text-center">
                @include('flash::message')
            </div>
            <br>
            <!--begin::Profile Account Information-->
            <div class="d-flex flex-row" style="margin-top: 10px;">
                <!--begin::Aside-->
                <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
                    <!--begin::Profile Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end">
                                <div class="dropdown dropdown-inline">


                                </div>
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::User-->
                            <div class="d-flex align-items-center" style="margin-top: 15px;">
                                <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                    <div class="symbol-label" style="background-image:url({{ asset('uploads/profile_pictures/'. $user->image) }})"></div>
                                    <!--i class="symbol-badge bg-success"></i-->
                                </div>
                                <div>
                                    <a  class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">{{ $user->name  }} {{ $user->last_name }}</a>

                                    {{--<div class="mt-2">--}}
                                    {{--<a href="{{ route('messages') }}" class="btn btn-sm btn-primary font-weight-bold mr-2 py-2 px-3 px-xxl-5 my-1">My Messages</a>--}}

                                    {{--</div>--}}
                                </div>
                            </div>
                            <!--end::User-->
                            <!--begin::Contact-->
                            <div class="py-9">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Email:</span>
                                    <a href="#" class="text-muted text-hover-primary">{{ $user->email }}</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Phone Number:</span>
                                    <span class="text-muted">{{ $user->phone }}</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="font-weight-bold mr-2">City:</span>
                                    <span class="text-muted">{{ $user->city }}</span>
                                </div>
                            </div>
                            <!--end::Contact-->
                            <!--begin::Nav-->
                            <div class="navi navi-bold navi-hover navi-active navi-link-rounded nav-tabs" style="border-bottom: none">
                                <div class="navi-item  mb-2">
                                    <a class="navi-link py-4 active " href="#userInformation" data-toggle="tab">
                                        <span class="navi-icon mr-2">
                                            <span class="svg-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="navi-text font-size-lg"> Account Information</span>
                                    </a>
                                </div>
                                <div class="navi-item mb-2">
                                    <a class="navi-link py-4 " href="#useFiles" data-toggle="tab">
                                        <span class="navi-icon mr-2">
                                            <span class="svg-icon">
                                                <!--begin::Svg Icon | path:http://app.homeli.ca/public/template/assets/media/svg/icons/Communication/Shield-user.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"></path>
                                                        <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"></path>
                                                        <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"></path>
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="navi-text font-size-lg">Change Password</span>
                                    </a>
                                </div>
                            </div>

                            <!--end::Nav-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Profile Card-->
                </div>
                <!--end::Aside-->
                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Card-->
                    <div class="tab-content">

                        <div class="tab-pane active" id="userInformation">
                            <div class="card card-custom">
                                <!--begin::Form-->
                                <form  method="post" action="{{ route('update.user.info') }}" enctype="multipart/form-data" accept-charset="utf-8">
                                    @csrf
                                    <div class="card card-custom">
                                        <!--begin::Header-->
                                        <div class="card-header py-3">
                                            <div class="card-title align-items-start flex-column">
                                                <h3 class="card-label font-weight-bolder text-dark">Account Information</h3>
                                                <span class="text-muted font-weight-bold font-size-sm mt-1">Change Your Personal Information</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!--begin::Body-->

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="alert alert-danger m-t-20" role="alert" id="error_alert" style="display:none"></div>
                                        </div>

                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h5 class="font-weight-bold mb-6">Account Information</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url({{ asset('uploads/profile_pictures/'. $user->image) }})">
                                                    <div class="image-input-wrapper" style="background-image: none">
                                                    </div>
                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="profile_pic" id="profile_avatar" accept=".png, .jpg, .jpeg">
                                                        <input type="hidden" name="profile_avatar_remove" id="profile_avatar_remove" value="0">
                                                        <input type="hidden" name="userid" value="{{ auth()->user()->id }}">
                                                    </label>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" onclick="$('#profile_avatar_remove').val('1');" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
                                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                                            </span>
                                                </div>
                                                <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="text" name="first_name" value="{{ $user->name }}" id="first_name" required class="form-control form-control-lg form-control-solid">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="text" name="last_name" value="{{ $user->last_name }}" id="last_name" required class="form-control form-control-lg form-control-solid">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h5 class="font-weight-bold mt-10 mb-6">Contact information</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Phone Number</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la la-phone"></i>
                                            </span>
                                                    </div>
                                                    <input type="text" name="phone" value="{{ $user->phone }}" id="phone" required class="form-control form-control-lg form-control-solid">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="la la-at"></i>
                                                </span>
                                                    </div>
                                                    <input type="text" name="email" value="{{ $user->email }}" id="email" required class="form-control form-control-lg @error('email') is-invalid @enderror form-control-solid">
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Address Line 1</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="text" name="address_line_one" value="{{ $user->address_line_one }}" id="adr" required class="form-control form-control-lg form-control-solid">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Address Line 2</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="text" name="address_line_two" value="{{ $user->address_line_two }}" id="adr2"  class="form-control form-control-lg form-control-solid">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">City</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="text" name="city" value="{{ $user->city }}" id="city" required class="form-control form-control-lg form-control-solid">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Postal Code</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="text" name="postal_code" value="{{ $user->postal_code }}" id="zip" required="" class="form-control form-control-lg form-control-solid">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Province</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="text" name="province" value="{{ $user->province }}" id="province" required="" class="form-control form-control-lg form-control-solid">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Date of Birth</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="date" name="birth_date" max="2999-12-31" min="1800-12-31" value="{{ $user->birth_date }}" id="birthdate" required="" class="form-control form-control-lg form-control-solid" im-insert="true">
                                            </div>
                                        </div>

                                        @if($user->type == "Realtor" || $user->type == "MortgageBroker" )
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">How many transactions did you complete last year?</label>
                                            <br>
                                            @if($user->type == "Realtor" )
                                                <label class="officer-label realtorTransactions" style="padding: 0 !important;">
                                                    <input type="radio" name="transactions" value="0-3"  class="card-input-officers-element" @if($user['transactions'] == "0-3") checked @endif />
                                                    <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px; margin-left: 10px" class="card-input col-md-12">
                                                        <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content" >
                                                            <h5 style="font-weight: 500" >
                                                                <span style="display: block;">0-3</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </label>
                                                <label class="officer-label realtorTransactions" style="padding: 0 !important;">
                                                    <input type="radio" name="transactions" value="4-8"  class="card-input-officers-element" @if($user['transactions'] == "4-8") checked @endif />
                                                    <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 15px" class="card-input col-md-12">
                                                        <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                            <h5 style="font-weight: 500" >
                                                                <span style="display: block;">4-8</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </label>
                                                <label class="officer-label realtorTransactions" style="padding: 0 !important;">
                                                    <input type="radio" name="transactions" value="9-15"  class="card-input-officers-element" @if($user['transactions'] == "9-15") checked @endif />
                                                    <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 20px" class="card-input col-md-12">
                                                        <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                            <h5 style="font-weight: 500" >
                                                                <span style="display: block;">9-15</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </label>
                                                <label class="officer-label realtorTransactions" style="padding: 0 !important;">
                                                    <input type="radio" name="transactions" value="16+"  class="card-input-officers-element" @if($user['transactions'] == "16+") checked @endif />
                                                    <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 25px" class="card-input col-md-12">
                                                        <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                            <h5 style="font-weight: 500" >
                                                                <span style="display: block;">16+</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </label>
                                            @elseif($user->type == "MortgageBroker")
                                                <label class="officer-label mortTransactions" style="padding: 0 !important;">
                                                    <input type="radio" name="transactions" value="0-5"  class="card-input-officers-element"  @if($user['transactions'] == "0-5") checked @endif/>
                                                    <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 10px" class="card-input col-md-12">
                                                        <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                            <h5 style="font-weight: 500" >
                                                                <span style="display: block;">0-5</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </label>
                                                <label class="officer-label mortTransactions" style="padding: 0 !important;">
                                                    <input type="radio" name="transactions" value="6-15"  class="card-input-officers-element" @if($user['transactions'] == "6-15") checked @endif />
                                                    <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 15px" class="card-input col-md-12">
                                                        <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                            <h5 style="font-weight: 500" >
                                                                <span style="display: block;">6-15</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </label>
                                                <label class="officer-label mortTransactions" style="padding: 0 !important;">
                                                    <input type="radio" name="transactions" value="16-30"  class="card-input-officers-element" @if($user['transactions'] == "16-30") checked @endif />
                                                    <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 20px" class="card-input col-md-12">
                                                        <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                            <h5 style="font-weight: 500" >
                                                                <span style="display: block;">16-30</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </label>
                                                <label class="officer-label mortTransactions" style="padding: 0 !important;">
                                                    <input type="radio" name="transactions" value="31-50"  class="card-input-officers-element" @if($user['transactions'] == "31-50") checked @endif />
                                                    <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 25px" class="card-input col-md-12">
                                                        <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                            <h5 style="font-weight: 500" >
                                                                <span style="display: block;">31-50</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </label>
                                                <label class="officer-label mortTransactions" style="padding: 0 !important;">
                                                    <input type="radio" name="transactions" value="51+"  class="card-input-officers-element" @if($user['transactions'] == "51+") checked @endif />
                                                    <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 30px" class="card-input col-md-12">
                                                        <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                            <h5 style="font-weight: 500" >
                                                                <span style="display: block;">51+</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </label>
                                            @endif
                                        </div>
                                        @endif
                                    </div>
                                    <!--end::Body-->
                                    <div class="card-header py-3">

                                        <div class="card-toolbar">
                                            <button type="submit" class="btn btn-success mr-2 save_profile_btn">Save</button>
                                            <button type="reset" class="btn btn-primary mr-2 save_profile_btn">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <!--end::Form-->

                            </div>
                        </div>

                        <div class="tab-pane" id="useFiles">
                            <div class="card card-custom">
                                <!--begin::Form-->
                                <form  method="post" action="{{ route('update.user.password') }}" enctype="multipart/form-data" accept-charset="utf-8">
                                    @csrf
                                    <div class="card card-custom">
                                        <!--begin::Header-->
                                        <div class="card-header py-3">
                                            <div class="card-title align-items-start flex-column">
                                                <h3 class="card-label font-weight-bolder text-dark">Password Change</h3>
                                                <span class="text-muted font-weight-bold font-size-sm mt-1">Change Your Password</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="alert alert-danger m-t-20" role="alert" id="error_alert" style="display:none"></div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label text-alert">Current Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="password" name="current_password" value="" id="current_password" required class="form-control  form-control-lg form-control-solid mb-2">

                                                <a href="{{ route('password.forgot') }}" class="text-sm font-weight-bold">Forgot Password ?</a>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">New password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="password" name="new_password" value="" id="new_password" required class="form-control {{ $errors->has('new_password') ? ' is-invalid' : '' }} form-control-lg form-control-solid">
                                                @if($errors->has('new_password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('new_password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Confirm Password</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input id="confirm_password" type="password"  value=""  name="confirm_password" required class="form-control {{ $errors->has('confirm_password') ? ' is-invalid' : '' }} form-control-lg form-control-solid">
                                                @if($errors->has('confirm_password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('confirm_password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Body-->
                                    <div class="card-header py-3">
                                        <div class="card-toolbar">
                                            <button type="submit" class="btn btn-success mr-2 save_profile_btn">Save</button>
                                            <button type="reset" class="btn btn-primary mr-2 save_profile_btn">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <!--end::Form-->
                            </div>

                        </div>

                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Profile Account Information-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->



@endsection

@section('scripts')

    <script src="{{ asset('js/pages/crud/file-upload/dropzonejs.js') }}"></script>

    <script>
        // Class definition
        var KTProjectsAdd = function () {
            // Base elements
            var _wizardEl;
            var _formEl;
            var _wizardObj;
            var _validations = [];

            // Private functions
            var _initWizard = function () {
                // Initialize form wizard
                _wizardObj = new KTWizard(_wizardEl, {
                    startStep: 1, // initial active step number
                    clickableSteps: false  // allow step clicking
                });

                // Validation before going to next page
                _wizardObj.on('change', function (wizard) {
                    if (wizard.getStep() > wizard.getNewStep()) {
                        return; // Skip if stepped back
                    }

                    // Validate form before change wizard step
                    var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

                    if (validator) {
                        validator.validate().then(function (status) {
                            if (status == 'Valid') {
                                wizard.goTo(wizard.getNewStep());

                                KTUtil.scrollTop();
                            } else {
                                Swal.fire({
                                    text: "Sorry, looks like there are some errors detected, please try again.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-light"
                                    }
                                }).then(function () {
                                    KTUtil.scrollTop();
                                });
                            }
                        });
                    }

                    return false;  // Do not change wizard step, further action will be handled by he validator
                });

                // Change event
                _wizardObj.on('changed', function (wizard) {
                    KTUtil.scrollTop();
                });

                // Submit event
                _wizardObj.on('submit', function (wizard) {
                    Swal.fire({
                        text: "All is good! Please confirm the form submission.",
                        icon: "success",
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonText: "Yes, submit!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-primary",
                            cancelButton: "btn font-weight-bold btn-default"
                        }
                    }).then(function (result) {
                        if (result.value) {
                            _formEl.submit(); // Submit form
                        } else if (result.dismiss === 'cancel') {
                            Swal.fire({
                                text: "Your form has not been submitted!.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-primary",
                                }
                            });
                        }
                    });
                });
            }

            var _initValidation = function () {
                // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
                // Step 1
                _validations.push(FormValidation.formValidation(
                    _formEl,
                    {
                        fields: {


                            file_type: {
                                validators: {
                                    notEmpty: {
                                        message: 'required'
                                    }
                                }
                            },
                            closing_date: {
                                validators: {
                                    notEmpty: {
                                        message: 'required'
                                    }
                                }
                            },
                            address: {
                                validators: {
                                    notEmpty: {
                                        message: 'required'
                                    }
                                }
                            },
                            city: {
                                validators: {
                                    notEmpty: {
                                        message: 'required'
                                    }
                                }
                            },
                            postal_code: {
                                validators: {
                                    notEmpty: {
                                        message: 'required'
                                    }
                                }
                            },



                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            // Bootstrap Framework Integration
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                //eleInvalidClass: '',
                                eleValidClass: '',
                            })
                        }
                    }
                ));

                // Step 2
                _validations.push(FormValidation.formValidation(
                    _formEl,
                    {
                        fields: {
                            // Step 2
                            first_name: {
                                validators: {
                                    notEmpty: {
                                        message: 'required'
                                    }
                                }
                            },
                            last_name: {
                                validators: {
                                    notEmpty: {
                                        message: 'required'
                                    }
                                }
                            },


//                        email: {
//                            validators: {
//                                notEmpty: {
//                                    message: 'Email is required'
//                                },
//                                emailAddress: {
//                                    message: 'The value is not a valid email address'
//                                }
//                            }
//                        }

                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            // Bootstrap Framework Integration
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                //eleInvalidClass: '',
                                eleValidClass: '',
                            })
                        }
                    }
                ));

                // Step 3
                _validations.push(FormValidation.formValidation(
                    _formEl,
                    {
                        fields: {


                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            // Bootstrap Framework Integration
                            bootstrap: new FormValidation.plugins.Bootstrap({
                                //eleInvalidClass: '',
                                eleValidClass: '',
                            })
                        }
                    }
                ));
            }

            return {
                // public functions
                init: function () {
                    _wizardEl = KTUtil.getById('kt_projects_add');
                    _formEl = KTUtil.getById('kt_projects_add_form');

                    _initWizard();
                    _initValidation();
                }
            };
        }();

        jQuery(document).ready(function () {
            KTProjectsAdd.init();
        });

    </script>

    <script src="{{ asset('js/pages/widgets.js') }}"></script>
    <script src="{{ asset('js/pages/custom/profile/profile.js') }}"></script>
    <script src="{{ asset('js/pages/crud/forms/widgets/input-mask.js') }}"></script>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>

    <!--end::Page Scripts-->
    <script>

        $(document).ready(function(){


            $('.navi-link').click(function(){

                $('.navi-link').removeClass('active')

                $(this).addClass('active')
            })
        })

    </script>

@endsection