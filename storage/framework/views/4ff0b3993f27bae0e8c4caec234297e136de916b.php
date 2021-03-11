<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<!--begin::Head-->
<head>
    <meta charset="utf-8" />
    <title>Treadstone Law</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <link href="<?php echo e(asset('css/pages/wizard/wizard-1.css')); ?>" rel="stylesheet" type="text/css" />

    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="<?php echo e(asset('plugins/custom/fullcalendar/fullcalendar.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?php echo e(asset('plugins/global/plugins.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('plugins/custom/prismjs/prismjs.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('css/style.bundle.css')); ?>" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>" />

    <?php echo $__env->yieldContent('styles'); ?>

    <style>

        .datatable.datatable-default > .datatable-table >
        .datatable-body .datatable-row > .datatable-cell{
            padding-top : 25px
        }

        .fullnametxt{

            text-transform: none!important;
        }

        .min-h-110{

            min-height: 110px;
        }

        .fullnametxt , .fullnametxt-title , .paymentNameInput{


            display:none
        }
        .fullnametxt::placeholder {

            color:#cccc;
        }

        .startFileButton:after{

            margin-left: 7px !important;

        }

        .datatable.datatable-default > .datatable-table {

            overflow-x: auto !important;

        }

        .file-upload{ margin-top: 5px;display:block;text-align:center;font-family: Helvetica, Arial, sans-serif;font-size: 12px;}
        .file-upload .file-select{
            display: block;
            /* border: 2px solid #dce4ec; */
            color: #34495e;
            cursor: pointer;
            height: 80px;
            line-height: 40px;
            border-radius: 4px;
            text-align: left;
            background: #FFFFFF;
            overflow: hidden;
            position: relative;


        }
        .file-upload .file-select .file-select-button{
            width: 100px;
            background: #dce4ec;
            padding: 18px 10px;
            display: inline-block;
            height: 80px;
            line-height: 40px;
            vertical-align: middle;
        }
        .file-upload .file-select .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}
        .file-upload .file-select:hover{border-color:#34495e;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload .file-select:hover .file-select-button{background:#34495e;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload.active .file-select{border-color:#3fa46a;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload.active .file-select .file-select-button{background:#3fa46a;color:#FFFFFF;transition:all .2s ease-in-out;-moz-transition:all .2s ease-in-out;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;}
        .file-upload .file-select input[type=file]{z-index:100;cursor:pointer;position:absolute;height:100%;width:100%;top:0;left:0;opacity:0;filter:alpha(opacity=0);}
        .file-upload .file-select.file-select-disabled{opacity:0.65;}
        .file-upload .file-select.file-select-disabled:hover{cursor:default;display:block;border: 2px solid #dce4ec;color: #34495e;cursor:pointer;height:40px;line-height:40px;margin-top:5px;text-align:left;background:#FFFFFF;overflow:hidden;position:relative;}
        .file-upload .file-select.file-select-disabled:hover .file-select-button{background:#dce4ec;color:#666666;padding:0 10px;display:inline-block;height:40px;line-height:40px;}
        .file-upload .file-select.file-select-disabled:hover .file-select-name{line-height:40px;display:inline-block;padding:0 10px;}





        .sec_submit{
            position: absolute;
            top: -52px;
            right: 56px;
        }

        .blockMsg{

            z-index:1115 !important;
        }
        .officer-label{

            display: block;

        }
        .card-input-officers-element {
            display: none;
        }
        .card-input-officers-element:checked + .card-input{

            box-shadow: 0 0 1px 1px rgba(125, 243, 237, 0.19);
            background: #e6f3fe;
            border-radius: 4px;
        }

        .card-input-officers-element + .card-input{

            border-radius: 4px;
            border:2px solid rgba(125, 243, 237, 0.19);


        }

        .card-input-officers-element + .card-input:hover{

            box-shadow: 0 0 1px 1px rgba(125, 243, 237, 0.13);
            background: rgba(9, 204, 151, 0.05);
            border-radius: 4px;
        }
        .officer-label div {
            cursor: pointer;
            padding:5px 1px 2px 0px !important
        }
        .officer-content {
            margin-left: 10px;
            padding: 0;
            /* padding-left: 12px; */
        }
        .card-input-officers-element:checked + .card-input-apro span{
            background: #3699ff !important;
            color:white !important;
            padding: 23px;
            padding-bottom: 18px!important;
            padding-top: 19px !important;
        }

        .card-input-officers-element:checked + .redRadioNo span{
            background: #FFE2E5 !important;
            color:#F64E60 !important;
            padding: 23px;
            padding-bottom: 18px!important;
            padding-top: 19px !important;
        }


        .card-input-officers-element:checked + .greenRadioYes span{
            background: #C9F7F5 !important;
            color:#1BC5BD !important;
            padding: 23px;
            padding-bottom: 18px!important;
            padding-top: 19px !important;
        }

        .card-input-officers-element + .card-input-apro span{
            background: #f3f6f9 !important;
            color:black !important;
            padding: 23px!important;
            padding-bottom: 18px!important;
            padding-top: 19px !important;
        }

        .realtorinfo , .mortgagepartinfo {

            display:none
        }

        .extraStep{

            display:none!important;
        }

        .first-col-table-tasks{

            width:70px;

        }
        .first-col-table{

            max-width: 65px;
        }

        @media (max-width: 1300px){

            .first-col-table{

                max-width: 70px;
            }

        }



        @media (max-width: 991px){

            .sec_submit{

                right: 10%;
            }

            .first-col-table{

                max-width: 44px;
                width: 68px !important;
            }



        }
        @media (max-width: 663px){

            .first-col-table{

                max-width: 65px;
                width: 68px !important;
            }

            .first-col-table-tasks{

                width:70px;
                padding-right: 8px !important;


            }

        }
        @media (max-width: 480px){

            .sec_submit{

                right: 12%;
                top: -49px;

            }

        }
        @media (max-width: 320px){

            .sec_submit{

                right: 14%;

            }

        }

    </style>

</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">


<div style="overflow-y: scroll; height: 100%;">


    <input hidden class="authUserType" value="<?php echo e(auth()->user()->type); ?>" >
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile">
        <!--begin::Logo-->
        <a href="<?php echo e(URL::to('/')); ?>">
            <img alt="Logo" src="<?php echo e(URL::to('images/tread-logo.png')); ?>" class="logo-default max-h-30px" />
        </a>
        <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
        <?php echo $__env->make('layouts.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Content-->

                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

                    <?php echo $__env->yieldContent('content'); ?>


                </div>

                <!--end::Content-->


                <!--begin::Footer-->
                <!--doc: add "bg-white" class to have footer with solod background color-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2021 © </span>
                            <a href="#"  class="text-dark-75 text-hover-primary">Shadow Labs</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Nav-->

                        <!--end::Nav-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->

    <!--begin::Quick Actions Panel-->
    <div id="kt_quick_actions" class="offcanvas offcanvas-left p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-10">
            <h3 class="font-weight-bold m-0">Quick Actions
                <small class="text-muted font-size-sm ml-2">finance &amp; reports</small></h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_actions_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content pr-5 mr-n5">
            <div class="row gutter-b">
                <!--begin::Item-->
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
							<span class="svg-icon svg-icon-3x svg-icon-primary m-0">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Euro.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z" fill="#000000" opacity="0.3" />
										<path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z" fill="#000000" />
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
                        <span class="d-block font-weight-bold font-size-h6 mt-2">Accounting</span>
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
							<span class="svg-icon svg-icon-3x svg-icon-primary m-0">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-attachment.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z" fill="#000000" opacity="0.3" />
										<path d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z" fill="#000000" />
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
                        <span class="d-block font-weight-bold font-size-h6 mt-2">Members</span>
                    </a>
                </div>
                <!--end::Item-->
            </div>
            <div class="row gutter-b">
                <!--begin::Item-->
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
							<span class="svg-icon svg-icon-3x svg-icon-primary m-0">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
										<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
                        <span class="d-block font-weight-bold font-size-h6 mt-2">Projects</span>
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
							<span class="svg-icon svg-icon-3x svg-icon-primary m-0">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24" />
										<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
                        <span class="d-block font-weight-bold font-size-h6 mt-2">Customers</span>
                    </a>
                </div>
                <!--end::Item-->
            </div>
            <div class="row gutter-b">
                <!--begin::Item-->
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
							<span class="svg-icon svg-icon-3x svg-icon-primary m-0">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />
										<rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />
										<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero" />
										<rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
                        <span class="d-block font-weight-bold font-size-h6 mt-2">Email</span>
                    </a>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
							<span class="svg-icon svg-icon-3x svg-icon-primary m-0">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Color-profile.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
										<circle fill="#000000" cx="12" cy="9" r="5" />
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
                        <span class="d-block font-weight-bold font-size-h6 mt-2">Settings</span>
                    </a>
                </div>
                <!--end::Item-->
            </div>
            <div class="row">
                <!--begin::Item-->
                <div class="col-6">
                    <a href="#" class="btn btn-block btn-light btn-hover-primary text-dark-50 text-center py-10 px-5">
							<span class="svg-icon svg-icon-3x svg-icon-primary m-0">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Euro.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z" fill="#000000" opacity="0.3" />
										<path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z" fill="#000000" />
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
                        <span class="d-block font-weight-bold font-size-h6 mt-2">Orders</span>
                    </a>
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Quick Actions Panel-->
    <!-- begin::User Panel-->
    <div id="kt_quick_user" class="offcanvas offcanvas-left p-10">
        <!--begin::Header-->
        <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
            <h3 class="font-weight-bold m-0">User Profile
                <small class="text-muted font-size-sm ml-2">12 messages</small></h3>
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content pr-5 mr-n5">
            <!--begin::Header-->
            <div class="d-flex align-items-center mt-5">
                <div class="symbol symbol-100 mr-5">
                    <div class="symbol-label" style=""></div>
                    <i class="symbol-badge bg-success"></i>
                </div>
                <div class="d-flex flex-column">
                    <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">James Jones</a>
                    <div class="text-muted mt-1">Application Developer</div>
                    <div class="navi mt-2">
                        <a href="#" class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
									</span>
									<span class="navi-text text-muted text-hover-primary">jm@softplus.com</span>
								</span>
                        </a>
                        <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
                    </div>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Separator-->
            <div class="separator separator-dashed mt-8 mb-5"></div>
            <!--end::Separator-->
            <!--begin::Nav-->
            <div class="navi navi-spacer-x-0 p-0">
                <!--begin::Item-->
                <a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-success">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
												<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">My Profile</div>
                            <div class="text-muted">Account settings and more
                                <span class="label label-light-danger label-inline font-weight-bold">update</span></div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->
                <!--begin::Item-->
                <a href="custom/apps/user/profile-3.html" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-warning">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5" />
												<rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5" />
												<path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero" />
												<rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5" />
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">My Messages</div>
                            <div class="text-muted">Inbox and tasks</div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->
                <!--begin::Item-->
                <a href="custom/apps/user/profile-2.html" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-danger">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Files/Selected-file.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path d="M4.85714286,1 L11.7364114,1 C12.0910962,1 12.4343066,1.12568431 12.7051108,1.35473959 L17.4686994,5.3839416 C17.8056532,5.66894833 18,6.08787823 18,6.52920201 L18,19.0833333 C18,20.8738751 17.9795521,21 16.1428571,21 L4.85714286,21 C3.02044787,21 3,20.8738751 3,19.0833333 L3,2.91666667 C3,1.12612489 3.02044787,1 4.85714286,1 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
												<path d="M6.85714286,3 L14.7364114,3 C15.0910962,3 15.4343066,3.12568431 15.7051108,3.35473959 L20.4686994,7.3839416 C20.8056532,7.66894833 21,8.08787823 21,8.52920201 L21,21.0833333 C21,22.8738751 20.9795521,23 19.1428571,23 L6.85714286,23 C5.02044787,23 5,22.8738751 5,21.0833333 L5,4.91666667 C5,3.12612489 5.02044787,3 6.85714286,3 Z M8,12 C7.44771525,12 7,12.4477153 7,13 C7,13.5522847 7.44771525,14 8,14 L15,14 C15.5522847,14 16,13.5522847 16,13 C16,12.4477153 15.5522847,12 15,12 L8,12 Z M8,16 C7.44771525,16 7,16.4477153 7,17 C7,17.5522847 7.44771525,18 8,18 L11,18 C11.5522847,18 12,17.5522847 12,17 C12,16.4477153 11.5522847,16 11,16 L8,16 Z" fill="#000000" fill-rule="nonzero" />
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">My Activities</div>
                            <div class="text-muted">Logs and notifications</div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->
                <!--begin::Item-->
                <a href="custom/apps/userprofile-1/overview.html" class="navi-item">
                    <div class="navi-link">
                        <div class="symbol symbol-40 bg-light mr-3">
                            <div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-primary">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3" />
												<path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>
                            </div>
                        </div>
                        <div class="navi-text">
                            <div class="font-weight-bold">My Tasks</div>
                            <div class="text-muted">latest tasks and projects</div>
                        </div>
                    </div>
                </a>
                <!--end:Item-->
            </div>
            <!--end::Nav-->
            <!--begin::Separator-->
            <div class="separator separator-dashed my-7"></div>
            <!--end::Separator-->
            <!--begin::Notifications-->
            <div>
                <!--begin:Heading-->
                <h5 class="mb-5">Recent Notifications</h5>
                <!--end:Heading-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-warning rounded p-5 gutter-b">
						<span class="svg-icon svg-icon-warning mr-5">
							<span class="svg-icon svg-icon-lg">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
										<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
						</span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another purpose persuade</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-success rounded p-5 gutter-b">
						<span class="svg-icon svg-icon-success mr-5">
							<span class="svg-icon svg-icon-lg">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
										<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
						</span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would be to people</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-danger rounded p-5 gutter-b">
						<span class="svg-icon svg-icon-danger mr-5">
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
						</span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose would be to persuade</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-info rounded p-5">
						<span class="svg-icon svg-icon-info mr-5">
							<span class="svg-icon svg-icon-lg">
								<!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
										<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
										<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
										<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>
						</span>
                    <div class="d-flex flex-column flex-grow-1 mr-2">
                        <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The best product</a>
                        <span class="text-muted font-size-sm">Due in 2 Days</span>
                    </div>
                    <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                </div>
                <!--end::Item-->
            </div>
            <!--end::Notifications-->
        </div>
        <!--end::Content-->
    </div>
    <!-- end::User Panel-->
    <!--begin::Quick Panel-->
    <div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
        <!--begin::Header-->
        <div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
            <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10" role="tablist">

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
                </li>

            </ul>
            <div class="offcanvas-close mt-n1 pr-5">
                <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
                    <i class="ki ki-close icon-xs text-muted"></i>
                </a>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Content-->
        <div class="offcanvas-content px-10">
            <div class="tab-content">
                <!--begin::Tabpane-->
                <div class="tab-pane fade show pt-3 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">
                    <!--begin::Section-->
                    <div class="mb-15">
                        <h5 class="font-weight-bold mb-5">System Messages</h5>
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
									<span class="symbol-label">
										<img src="" class="h-50 align-self-center" alt="" />
									</span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Top Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder py-1 my-lg-0 my-2 text-dark-50">+82$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
									<span class="symbol-label">
										<img src="" class="h-50 align-self-center" alt="" />
									</span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Popular Authors</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+280$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
									<span class="symbol-label">
										<img src="" class="h-50 align-self-center" alt="" />
									</span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">New Users</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap mb-5">
                            <div class="symbol symbol-50 symbol-light mr-5">
									<span class="symbol-label">
										<img src="" class="h-50 align-self-center" alt="" />
									</span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Active Customers</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-wrap">
                            <div class="symbol symbol-50 symbol-light mr-5">
									<span class="symbol-label">
										<img src="" class="h-50 align-self-center" alt="" />
									</span>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-bolder text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller Theme</a>
                                <span class="text-muted font-weight-bold">Most Successful Fellas</span>
                            </div>
                            <span class="btn btn-sm btn-light font-weight-bolder my-lg-0 my-2 py-1 text-dark-50">+4500$</span>
                        </div>
                        <!--end: Item-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="mb-5">
                        <h5 class="font-weight-bold mb-5">Notifications</h5>
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-5">
								<span class="svg-icon svg-icon-warning mr-5">
									<span class="svg-icon svg-icon-lg">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
												<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>
								</span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Another purpose persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-warning py-1 font-size-lg">+28%</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-success rounded p-5 mb-5">
								<span class="svg-icon svg-icon-success mr-5">
									<span class="svg-icon svg-icon-lg">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
												<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>
								</span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normal text-dark-75 text-hover-primary font-size-lg mb-1">Would be to people</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-success py-1 font-size-lg">+50%</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-5">
								<span class="svg-icon svg-icon-danger mr-5">
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
								</span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">Purpose would be to persuade</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-danger py-1 font-size-lg">-27%</span>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center bg-light-info rounded p-5">
								<span class="svg-icon svg-icon-info mr-5">
									<span class="svg-icon svg-icon-lg">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
												<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
												<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
												<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>
								</span>
                            <div class="d-flex flex-column flex-grow-1 mr-2">
                                <a href="#" class="font-weight-normel text-dark-75 text-hover-primary font-size-lg mb-1">The best product</a>
                                <span class="text-muted font-size-sm">Due in 2 Days</span>
                            </div>
                            <span class="font-weight-bolder text-info py-1 font-size-lg">+8%</span>
                        </div>
                        <!--end: Item-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Tabpane-->
                <!--begin::Tabpane-->
                <div class="tab-pane fade pt-2 pr-5 mr-n5" id="kt_quick_panel_notifications" role="tabpanel">
                    <!--begin::Nav-->
                    <div class="navi navi-icon-circle navi-spacer-x-0">
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-bell text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">5 new user generated report</div>
                                    <div class="text-muted">Reports based on sales</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-box text-danger icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">2 new items submited</div>
                                    <div class="text-muted">by Grog John</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-psd text-primary icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">79 PSD files generated</div>
                                    <div class="text-muted">Reports based on sales</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-supermarket text-warning icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                                    <div class="text-muted">Total 234 items</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                                    <div class="text-muted">Fostest is Barry</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-safe-shield-protection text-danger icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">3 Defence alerts</div>
                                    <div class="text-muted">40% less alerts thar last week</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-notepad text-primary icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">Avarage 4 blog posts per author</div>
                                    <div class="text-muted">Most posted 12 time</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-users-1 text-warning icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">16 authors joined last week</div>
                                    <div class="text-muted">9 photodrapehrs, 7 designer</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-box text-info icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">2 new items have been submited</div>
                                    <div class="text-muted">by Grog John</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-download text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">2.8 GB-total downloads size</div>
                                    <div class="text-muted">Mostly PSD end AL concepts</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon2-supermarket text-danger icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                                    <div class="text-muted">Total 234 items</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-bell text-primary icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">7 new user generated report</div>
                                    <div class="text-muted">Reports based on sales</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <a href="#" class="navi-item">
                            <div class="navi-link rounded">
                                <div class="symbol symbol-50 mr-3">
                                    <div class="symbol-label">
                                        <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                                    </div>
                                </div>
                                <div class="navi-text">
                                    <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                                    <div class="text-muted">Fostest is Barry</div>
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                    </div>
                    <!--end::Nav-->
                </div>
                <!--end::Tabpane-->
                <!--begin::Tabpane-->
                <div class="tab-pane fade pt-3 pr-5 mr-n5" id="kt_quick_panel_settings" role="tabpanel">
                    <form class="form">
                        <!--begin::Section-->
                        <div>
                            <h5 class="font-weight-bold mb-3">Customer Care</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Notifications:</label>
                                <div class="col-4 d-flex justify-content-end">
                                    <span class="switch switch-success switch-sm">
                                        <label>
                                            <input type="checkbox" checked="checked" name="select" />
                                            <span></span>
                                        </label>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Case Tracking:</label>
                                <div class="col-4 d-flex justify-content-end">
										<span class="switch switch-success switch-sm">
											<label>
												<input type="checkbox" name="quick_panel_notifications_2" />
												<span></span>
											</label>
										</span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Support Portal:</label>
                                <div class="col-4 d-flex justify-content-end">
										<span class="switch switch-success switch-sm">
											<label>
												<input type="checkbox" checked="checked" name="select" />
												<span></span>
											</label>
										</span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--begin::Section-->
                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Reports</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Generate Reports:</label>
                                <div class="col-4 d-flex justify-content-end">
										<span class="switch switch-sm switch-danger">
											<label>
												<input type="checkbox" checked="checked" name="select" />
												<span></span>
											</label>
										</span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Report Export:</label>
                                <div class="col-4 d-flex justify-content-end">
										<span class="switch switch-sm switch-danger">
											<label>
												<input type="checkbox" name="select" />
												<span></span>
											</label>
										</span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Allow Data Collection:</label>
                                <div class="col-4 d-flex justify-content-end">
										<span class="switch switch-sm switch-danger">
											<label>
												<input type="checkbox" checked="checked" name="select" />
												<span></span>
											</label>
										</span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                        <div class="separator separator-dashed my-6"></div>
                        <!--begin::Section-->
                        <div class="pt-2">
                            <h5 class="font-weight-bold mb-3">Memebers</h5>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Member singup:</label>
                                <div class="col-4 d-flex justify-content-end">
										<span class="switch switch-sm switch-primary">
											<label>
												<input type="checkbox" checked="checked" name="select" />
												<span></span>
											</label>
										</span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                                <div class="col-4 d-flex justify-content-end">
										<span class="switch switch-sm switch-primary">
											<label>
												<input type="checkbox" name="select" />
												<span></span>
											</label>
										</span>
                                </div>
                            </div>
                            <div class="form-group mb-0 row align-items-center">
                                <label class="col-8 col-form-label">Enable Customer Portal:</label>
                                <div class="col-4 d-flex justify-content-end">
										<span class="switch switch-sm switch-primary">
											<label>
												<input type="checkbox" checked="checked" name="select" />
												<span></span>
											</label>
										</span>
                                </div>
                            </div>
                        </div>
                        <!--end::Section-->
                    </form>
                </div>
                <!--end::Tabpane-->
            </div>
        </div>
        <!--end::Content-->
    </div>
    <!--end::Quick Panel-->
    <!--begin::Chat Panel-->
    <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Header-->
                    <div class="card-header align-items-center px-4 py-3">
                        <div class="text-left flex-grow-1">
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown dropdown-inline">
                                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="svg-icon svg-icon-lg">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                                </button>
                                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover py-5">
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-drop"></i>
													</span>
                                                <span class="navi-text">New Group</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-list-3"></i>
													</span>
                                                <span class="navi-text">Contacts</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-rocket-1"></i>
													</span>
                                                <span class="navi-text">Groups</span>
                                                <span class="navi-link-badge">
														<span class="label label-light-primary label-inline font-weight-bold">new</span>
													</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
                                                <span class="navi-text">Calls</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-gear"></i>
													</span>
                                                <span class="navi-text">Settings</span>
                                            </a>
                                        </li>
                                        <li class="navi-separator my-3"></li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-magnifier-tool"></i>
													</span>
                                                <span class="navi-text">Help</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
                                                <span class="navi-text">Privacy</span>
                                                <span class="navi-link-badge">
														<span class="label label-light-danger label-rounded font-weight-bold">5</span>
													</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        <div class="text-center flex-grow-1">
                            <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                            <div>
                                <span class="label label-dot label-success"></span>
                                <span class="font-weight-bold text-muted font-size-sm">Active</span>
                            </div>
                        </div>
                        <div class="text-right flex-grow-1">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                                <i class="ki ki-close icon-1x"></i>
                            </button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Scroll-->
                        <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
                            <!--begin::Messages-->
                            <div class="messages">
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="" />
                                        </div>
                                        <div>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                            <span class="text-muted font-size-sm">2 Hours</span>
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">How likely are you to recommend our company to your friends and family?</div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">3 minutes</span>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="" />
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
                                </div>
                                <!--end::Message Out-->
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="" />
                                        </div>
                                        <div>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Ok, Understood!</div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="" />
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">You’ll receive notifications for all issues, pull requests!</div>
                                </div>
                                <!--end::Message Out-->
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="" />
                                        </div>
                                        <div>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">You can unwatch this repository immediately by clicking here:
                                        <a href="#">https://github.com</a></div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="" />
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed</div>
                                </div>
                                <!--end::Message Out-->
                                <!--begin::Message In-->
                                <div class="d-flex flex-column mb-5 align-items-start">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40 mr-3">
                                            <img alt="Pic" src="" />
                                        </div>
                                        <div>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                            <span class="text-muted font-size-sm">40 seconds</span>
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Most purchased Business courses during this sale!</div>
                                </div>
                                <!--end::Message In-->
                                <!--begin::Message Out-->
                                <div class="d-flex flex-column mb-5 align-items-end">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <span class="text-muted font-size-sm">Just now</span>
                                            <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                        </div>
                                        <div class="symbol symbol-circle symbol-40 ml-3">
                                            <img alt="Pic" src="" />
                                        </div>
                                    </div>
                                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
                                </div>
                                <!--end::Message Out-->
                            </div>
                            <!--end::Messages-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer align-items-center">
                        <!--begin::Compose-->
                        <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                        <div class="d-flex align-items-center justify-content-between mt-5">
                            <div class="mr-3">
                                <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                                    <i class="flaticon2-photograph icon-lg"></i>
                                </a>
                                <a href="#" class="btn btn-clean btn-icon btn-md">
                                    <i class="flaticon2-photo-camera icon-lg"></i>
                                </a>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                            </div>
                        </div>
                        <!--begin::Compose-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Card-->
            </div>
        </div>
    </div>



        <div class="modal fade" id="add_file_sale_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Sale File</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="wizard wizard-1" id="kt_file_add_sale" data-wizard-state="step-first" data-wizard-clickable="true">
                            <!--begin::Wizard Nav-->
                            <div class="wizard-nav border-bottom">
                                <div class="wizard-steps p-8 p-lg-10">
                                    <div class="wizard-step " data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-label">
                                            <span class="svg-icon svg-icon-4x wizard-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                            <h3 class="wizard-title">File Details</h3>
                                        </div>
                                        <span class="svg-icon svg-icon-xl wizard-arrow">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                            <!--end::Svg Icon-->
                                </span>
                                    </div>
                                    <div class="wizard-step " data-wizard-type="step">
                                        <div class="wizard-label">
															<span class="svg-icon svg-icon-4x wizard-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
																		<path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
                                            <h3 class="wizard-title"> <?php if(auth()->user()->type != "Client"): ?> Client <?php else: ?> Your <?php endif; ?> Information</h3>
                                        </div>
                                        <span class="svg-icon svg-icon-xl wizard-arrow">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                    </span>
                                    </div>
                                    <div class="wizard-step " data-wizard-type="step">
                                        <div class="wizard-label">
                                        <span class="svg-icon svg-icon-4x wizard-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
                                                    <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                            <h3 class="wizard-title">Documents</h3>
                                        </div>
                                        <?php if(auth()->user()->type =="Realtor"): ?>
                                            <span class="svg-icon svg-icon-xl wizard-arrow kt_projects_add ">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                </g>
                                            </svg>
                                    </span>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(auth()->user()->type =="Realtor"): ?>
                                        <div class="wizard-step " data-wizard-type="step">
                                            <div class="wizard-label">
                                        <span class="svg-icon svg-icon-4x wizard-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
                                                    <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
                                                </g>
                                            </svg>
                                        </span>
                                            <h3 class="wizard-title">Real State Team</h3>
                                        </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!--end::Wizard Nav-->
                            <!--begin::Wizard Body-->
                            <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                                <div class="col-xl-12 <?php if(auth()->user()->type == "Admin"): ?> col-xxl-7 <?php else: ?> col-xxl-9 <?php endif; ?> ">
                                    <!--begin::Form Wizard-->
                                    <form class="form" id="kt_file_sale_add_form" method="POST" action="<?php echo e(route('file.create')); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <!--begin::Step 1-->
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                            <h3 class="mb-10 font-weight-bold text-dark">File Details</h3>
                                            <div class="row">
                                                <div class="col-xl-12">

                                                    <div hidden class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Service Required</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select name="file_type" class="form-control form-control-lg form-control-solid file_type_select" required>
                                                                <option value="Sale" selected data-content="20">Selling a Home</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">File Name</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input style="text-transform: capitalize" class="form-control form-control-lg form-control-solid" name="file_name" type="text" value="" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Closing Date</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-lg form-control-solid" name="closing_date" max="2999-12-31" min="1800-12-31" type="date"  />
                                                        </div>
                                                    </div>

                                                    <div <?php if(auth()->user()->type =="Realtor" ): ?> style="display:flex" <?php else: ?>  style="display:none" <?php endif; ?>  class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Is the deal firm?</label>
                                                        <div class="col-12 col-md-4">
                                                            <label class="officer-label float-left" style="margin-right: 10px">
                                                                <input type="radio" name="deal_firm" value="yes" class="card-input-officers-element" />
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-danger label-inline font-weight py-4">Yes</span>
                                                                </div>
                                                            </label>
                                                            <label class="officer-label float-left">
                                                                <input type="radio" name="deal_firm" value="no" class="card-input-officers-element"  />
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-success label-inline font-weight py-4">No</span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <h3 class="mb-10 font-weight-bold text-dark">Property Details</h3>
                                            <div class="row">

                                                <div class="col-xl-12">


                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Street Address</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input style="text-transform: capitalize" class="form-control form-control-lg form-control-solid" name="address" type="text" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">City</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input style="text-transform: capitalize" class="form-control form-control-lg form-control-solid" name="city" type="text" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Postal Code</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-lg form-control-solid" name="postal_code" type="text" value="" />
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>

                                        </div>
                                        <!--end::Step 1-->
                                        <!--begin::Step 2-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h3 class="mb-10 font-weight-bold text-dark"> <?php if(auth()->user()->type != "Client"): ?> Client <?php else: ?> Your <?php endif; ?>  Information</h3>
                                                        </div>
                                                    </div>

                                                    <!--- for perfect scroll bar add this --->
                                                    <div data-scroll="true" data-height="300" class="newProjectClientsCountSale scroll ps ps--active-y"  >

                                                        <div id="client-info-part" class="row form-group client-info-part">

                                                            <div  class="col-12 col-md-12  d-none">
                                                                <a  href="#" class="btn btn-light-danger float-right font-weight-bold ml-2 remove-client">
                                                                    <i class="la la-trash-o"></i>

                                                                    Delete
                                                                </a>
                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label class=" form-control-label">First Name</label>
                                                                <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid   first_name" name="first_name[]" type="text" value=" "  />
                                                                <input hidden style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid " name="counter[]" type="text" value="0"  />
                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label class=" form-control-label">Last Name</label>
                                                                <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  last_name " name="last_name[]" type="text" value=" "  />
                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label  class=" form-control-label">E-mail</label>
                                                                <input type="email" class="form-control form-control-lg form-control-solid  email " name="email[]"  value=" "  />

                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label class=" form-control-label">Phone</label>
                                                                <input type="text" class="form-control form-control-lg form-control-solid  phone " name="phone[]"  value=" "  />
                                                            </div>

                                                            <div class="col-12 col-md-12">
                                                                <br>
                                                                <label class=" form-control-label">Gender</label>
                                                                <br/>
                                                                <label class="officer-label float-left" style="margin-right: 10px">
                                                                    <input type="radio" name="gender0" value="male" class="card-input-officers-element gender" />
                                                                    <div style="" class="card-input-apro col-md-12">
                                                                        <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                                    </div>
                                                                </label>
                                                                <label class="officer-label float-left">
                                                                    <input type="radio" name="gender0" value="female" class="card-input-officers-element gender" />
                                                                    <div style="" class="card-input-apro col-md-12">
                                                                        <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                                    </div>
                                                                </label>
                                                            </div>

                                                            <?php if(auth()->user()->type == "Realtor" || auth()->user()->type == "MortgageBroker"  ): ?>
                                                                <div class="col-12 col-md-12">
                                                                    <br>
                                                                    <hr>
                                                                </div>
                                                            <?php endif; ?>



                                                        </div>

                                                    </div>

                                                </div>
                                                <?php if(auth()->user()->type == "Realtor" || auth()->user()->type == "MortgageBroker"  ): ?>
                                                    <a id="" href="#"  data-file="Sale" class="addNewClient btn btn-light-primary font-weight-bold ml-2">
                                                        <i class="la la-plus"></i>
                                                        Add
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <!--end::Step 2-->
                                        <!--begin::Step 3-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <h3 class="mb-10 font-weight-bold text-dark">Documents</h3>
                                                    <span>Please upload relevant documents (mortgage commitment, purchase and sale agreement, etc.)</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">

                                                <div class="col-lg-9 col-xl-6">
                                                    <a style="width: 100%" class="btnAddfile dropzone-select btn btn-light-primary font-weight-bold btn-sm dz-clickable" data-content="addfilewizSale" data-col="4" data-multi="yes" data-name="docs[]">Attach Files</a>
                                                    <input style="display: none" type="file" class="form-control form-control-lg form-control-solid filetoupload fileElementId-addfilewizSale" name="no[]" multiple>
                                                    <br>
                                                </div>

                                                <div class="col-lg-9 col-xl-6">


                                                </div>

                                                <div class="col-12 col-md-12 ">
                                                    <div class="fileName-addfilewizSale row mt-10">  </div>
                                                    <br>
                                                </div>
                                            </div>


                                        </div>
                                        <!--end::Step 3-->
                                        <!--begin::Step 4 -->
                                        <?php if(auth()->user()->type =="Realtor"): ?>
                                            <div class="pb-5 " data-wizard-type="step-content">
                                                <div class="form-group row">

                                                <!-- Buyer Realtor details--->
                                                <div class="col-lg-12 col-xl-12">
                                                    <h3 class="mb-10 font-weight-bold text-dark">Buyer Realtor Details</h3>
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div id="buyer-realtor-information" class="row form-group">

                                                                <div hidden class="col-12 col-md-8">
                                                                    <br>
                                                                    <label class=" form-control-label">
                                                                        Did the buyer use realtor ?
                                                                    </label>
                                                                </div>
                                                                <div hidden class="col-12 col-md-4">
                                                                    <br/>
                                                                    <label class="officer-label float-left" style="margin-right: 10px">
                                                                        <input type="radio" name="used_buyer_realtor" value="yes" data-content="10" class="card-input-officers-element used_realtor" checked />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Yes</span>
                                                                        </div>
                                                                    </label>
                                                                    <label class="officer-label float-left">
                                                                        <input type="radio" name="used_buyer_realtor" value="no" data-content="20" class="card-input-officers-element used_realtor" />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-success label-inline font-weight py-4">No</span>
                                                                        </div>
                                                                    </label>
                                                                </div>


                                                                <!--- add this class 'mortgagepartinfo' if u want the elements to apply to the radio buttons changes  -->
                                                                <div class="col-12 col-md-6 ">
                                                                    <br>
                                                                    <label class=" form-control-label">First Name</label>
                                                                    <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid  " name="realtor_buyer_first_name" value="" required>
                                                                </div>

                                                                <div class="col-12 col-md-6 ">
                                                                    <br>
                                                                    <label  class=" form-control-label">Last Name</label>
                                                                    <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid  " name="realtor_buyer_last_name" value="" required>
                                                                </div>

                                                                <div  class="col-12 col-md-6 ">
                                                                    <br>
                                                                    <label  class=" form-control-label">E-mail</label>
                                                                    <input type="text" class="form-control form-control form-control-solid mortpro_email realtor_email" name="realtor_buyer_email" value="" required>
                                                                </div>

                                                                <div class="col-12 col-md-6 ">
                                                                    <br>
                                                                    <label class=" form-control-label">Phone</label>
                                                                    <input type="text" class="form-control form-control form-control-solid mortpro_phone realtor_phone" name="realtor_buyer_phone" value="" required>
                                                                </div>

                                                                <div class="col-12 col-md-12  ">
                                                                    <br>
                                                                    <label class=" form-control-label">Gender</label>
                                                                    <br/>
                                                                    <label class="officer-label float-left" style="margin-right: 10px">
                                                                        <input type="radio" name="realtor_buyer_gender" value="male" class="card-input-officers-element mortpro_gender realtor_gender" required />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                                        </div>
                                                                    </label>
                                                                    <label class="officer-label float-left">
                                                                        <input type="radio" name="realtor_buyer_gender" value="female" class="card-input-officers-element mortpro_gender realtor_gender" required  />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                                        </div>
                                                                    </label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            </div>
                                        <?php endif; ?>
                                        <!--end::Step 4-->

                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4 prevStep" data-wizard-type="action-prev">Previous</button>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4 add_project_submit_button" data-wizard-type="action-submit">Submit</button>
                                                <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4 add_project_next_button" data-wizard-type="action-next">Next Step</button>
                                            </div>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form Wizard-->
                                </div>
                            </div>
                            <!--end::Wizard Body-->
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="add_file_purchase_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Purchase File</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="wizard wizard-1" id="kt_file_add_purchase" data-wizard-state="step-first" data-wizard-clickable="true">
                            <!--begin::Wizard Nav-->
                            <div class="wizard-nav border-bottom">
                                <div class="wizard-steps p-8 p-lg-10">
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-label">
                                            <span class="svg-icon svg-icon-4x wizard-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                                <!--end::Svg Icon-->
                                    </span>
                                            <h3 class="wizard-title">File Details</h3>
                                        </div>
                                        <span class="svg-icon svg-icon-xl wizard-arrow">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                            <!--end::Svg Icon-->
                                </span>
                                    </div>
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">
															<span class="svg-icon svg-icon-4x wizard-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
																		<path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
                                            <h3 class="wizard-title"> <?php if(auth()->user()->type != "Client"): ?> Client <?php else: ?> Your <?php endif; ?> Information</h3>
                                        </div>
                                        <span class="svg-icon svg-icon-xl wizard-arrow">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                    </span>
                                    </div>
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">
                                        <span class="svg-icon svg-icon-4x wizard-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
                                                    <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                            <h3 class="wizard-title">Documents</h3>
                                        </div>
                                        <?php if(auth()->user()->type =="Realtor" || auth()->user()->type =="MortgageBroker" ): ?>
                                            <span class="svg-icon svg-icon-xl wizard-arrow kt_projects_add   ">
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                     <polygon points="0 0 24 0 24 24 0 24" />
                                                     <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                     <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                 </g>
                                             </svg>
                                     </span>
                                        <?php endif; ?>
                                    </div>
                                    <?php if(auth()->user()->type =="Realtor" || auth()->user()->type =="MortgageBroker" ): ?>
                                        <div class="wizard-step " data-wizard-type="step">
                                            <div class="wizard-label">
                                        <span class="svg-icon svg-icon-4x wizard-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
                                                    <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
                                                </g>
                                            </svg>
                                        </span>
                                            <h3 class="wizard-title">Real State Team</h3>
                                        </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!--end::Wizard Nav-->
                            <!--begin::Wizard Body-->
                            <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                                <div class="col-xl-12 <?php if(auth()->user()->type == "Admin"): ?> col-xxl-7 <?php else: ?> col-xxl-9 <?php endif; ?>">
                                    <!--begin::Form Wizard-->
                                    <form class="form" id="kt_file_purchase_add_form" method="POST" action="<?php echo e(route('file.create')); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <!--begin::Step 1-->
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                            <h3 class="mb-10 font-weight-bold text-dark">File Details</h3>
                                            <div class="row">
                                                <div class="col-xl-12">

                                                    <div hidden class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Service Required</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select name="file_type" class="form-control form-control-lg form-control-solid file_type_select" required>
                                                                <option selected value="Purchase" data-content="10">Buying a Home</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">File Name</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input style="text-transform: capitalize" class="form-control form-control-lg form-control-solid" name="file_name" type="text" value="" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Closing Date</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-lg form-control-solid" name="closing_date" max="2999-12-31" min="1800-12-31" type="date"  />
                                                        </div>
                                                    </div>

                                                    <div <?php if(auth()->user()->type =="Realtor" ): ?> style="display:flex" <?php else: ?>  style="display:none" <?php endif; ?>  class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Is the deal firm?</label>
                                                        <div class="col-12 col-md-4">
                                                            <label class="officer-label float-left" style="margin-right: 10px">
                                                                <input type="radio" name="deal_firm" value="yes" class="card-input-officers-element" />
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-danger label-inline font-weight py-4">Yes</span>
                                                                </div>
                                                            </label>
                                                            <label class="officer-label float-left">
                                                                <input type="radio" name="deal_firm" value="no" class="card-input-officers-element"  />
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-success label-inline font-weight py-4">No</span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <h3 class="mb-10 font-weight-bold text-dark">Property Details</h3>
                                            <div class="row">

                                                <div class="col-xl-12">


                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Street Address</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input style="text-transform: capitalize" class="form-control form-control-lg form-control-solid" name="address" type="text" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">City</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input style="text-transform: capitalize" class="form-control form-control-lg form-control-solid" name="city" type="text" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Postal Code</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-lg form-control-solid" name="postal_code" type="text" value="" />
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>

                                        </div>
                                        <!--end::Step 1-->
                                        <!--begin::Step 2-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h3 class="mb-10 font-weight-bold text-dark"> <?php if(auth()->user()->type != "Client"): ?> Client <?php else: ?> Your <?php endif; ?>  Information</h3>
                                                        </div>
                                                    </div>

                                                    <div class="newProjectClientsCountPurchase">

                                                        <div id="client-info-part" class="row form-group client-info-part">

                                                            <div  class="col-12 col-md-12  d-none">
                                                                <a  href="#" class="btn btn-light-danger float-right font-weight-bold ml-2 remove-client">
                                                                    <i class="la la-trash-o"></i>

                                                                    Delete
                                                                </a>
                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label class=" form-control-label">First Name</label>
                                                                <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid   first_name" name="first_name[]" type="text" value=" "  />
                                                                <input hidden style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  " name="counter[]" type="text" value="0"  />
                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label class=" form-control-label">Last Name</label>
                                                                <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  last_name " name="last_name[]" type="text" value=" "  />
                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label  class=" form-control-label">E-mail</label>
                                                                <input type="email" class="form-control form-control-lg form-control-solid  email " name="email[]"  value=" "  />

                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label class=" form-control-label">Phone</label>
                                                                <input type="text" class="form-control form-control-lg form-control-solid  phone " name="phone[]"  value=" "  />
                                                            </div>

                                                            <div class="col-12 col-md-12">
                                                                <br>
                                                                <label class=" form-control-label">Gender</label>
                                                                <br/>
                                                                <label class="officer-label float-left" style="margin-right: 10px">
                                                                    <input type="radio" name="gender0" value="male" class="card-input-officers-element gender" />
                                                                    <div style="" class="card-input-apro col-md-12">
                                                                        <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                                    </div>
                                                                </label>
                                                                <label class="officer-label float-left">
                                                                    <input type="radio" name="gender0" value="female" class="card-input-officers-element gender" />
                                                                    <div style="" class="card-input-apro col-md-12">
                                                                        <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                                    </div>
                                                                </label>
                                                            </div>

                                                            <?php if(auth()->user()->type == "Realtor" || auth()->user()->type == "MortgageBroker"  ): ?>
                                                                <div class="col-12 col-md-12">
                                                                    <br>
                                                                    <hr>
                                                                </div>
                                                            <?php endif; ?>



                                                        </div>

                                                    </div>

                                                </div>
                                                <?php if(auth()->user()->type == "Realtor" || auth()->user()->type == "MortgageBroker"  ): ?>
                                                    <a id="" href="#" data-file="Purchase" class="addNewClient btn btn-light-primary font-weight-bold ml-2">
                                                        <i class="la la-plus"></i>
                                                        Add
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <!--end::Step 2-->
                                        <!--begin::Step 3-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <h3 class="mb-10 font-weight-bold text-dark">Documents</h3>
                                                    <span>Please upload relevant documents (mortgage commitment, purchase and sale agreement, etc.)</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">

                                                <div class="col-lg-9 col-xl-6">
                                                    <a style="width: 100%" class="btnAddfile dropzone-select btn btn-light-primary font-weight-bold btn-sm dz-clickable" data-content="addfilewizPurchase" data-col="4" data-multi="yes" data-name="docs[]">Attach Files</a>
                                                    <input style="display: none" type="file" class="form-control form-control-lg form-control-solid filetoupload fileElementId-addfilewizPurchase" name="no[]" multiple>
                                                    <br>
                                                </div>

                                                <div class="col-lg-9 col-xl-6">


                                                </div>

                                                <div class="col-12 col-md-12 ">
                                                    <div class="fileName-addfilewizPurchase row mt-10">  </div>
                                                    <br>
                                                </div>
                                            </div>


                                        </div>
                                        <!--end::Step 3-->
                                        <!--begin::Step 4-->
                                        <?php if(auth()->user()->type =="Realtor" || auth()->user()->type =="MortgageBroker" ): ?>
                                            <div class="pb-5 " data-wizard-type="step-content">
                                            <?php if(auth()->user()->type =="Realtor"): ?>
                                                <div class="form-group row">

                                                    <!-- Mortgage Broker details--->
                                                    <div class="col-lg-12 col-xl-12">
                                                        <h3 class="mb-10 font-weight-bold text-dark">Mortgage Broker Details</h3>
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div id="mortgage-information" class="row form-group">

                                                                    <div hidden class="col-12 col-md-8">
                                                                        <br>
                                                                        <label class=" form-control-label">
                                                                            Was there a mortgage broker involved in this transaction?
                                                                        </label>
                                                                    </div>

                                                                    <div hidden class="col-12 col-md-4">
                                                                        <br/>
                                                                        <label class="officer-label float-left" style="margin-right: 10px">
                                                                            <input type="radio" name="mort_or_bank" value="yes" data-content="10" class="card-input-officers-element used_realtor" checked/>
                                                                            <div style="" class="card-input-apro col-md-12">
                                                                                <span class="label label-lg label-light-danger label-inline font-weight py-4">Yes</span>
                                                                            </div>
                                                                        </label>
                                                                        <label class="officer-label float-left">
                                                                            <input type="radio" name="mort_or_bank" value="no" data-content="20" class="card-input-officers-element used_realtor" />
                                                                            <div style="" class="card-input-apro col-md-12">
                                                                                <span class="label label-lg label-light-success label-inline font-weight py-4">No</span>
                                                                            </div>
                                                                        </label>
                                                                    </div>

                                                                    <!---add this class 'mortgagepartinfo' if u want them to apply to the radio buttons changes -->
                                                                    <div  class="col-12 col-md-6 ">
                                                                        <br>
                                                                        <label class=" form-control-label">First Name</label>
                                                                        <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid  " name="mort_first_name" value="" required>
                                                                    </div>

                                                                    <div  class="col-12 col-md-6 ">
                                                                        <br>
                                                                        <label  class=" form-control-label">Last Name</label>
                                                                        <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid  " name="mort_last_name" value="" required>
                                                                    </div>

                                                                    <div  class="col-12 col-md-6 ">
                                                                        <br>
                                                                        <label  class=" form-control-label">E-mail</label>
                                                                        <input type="text" class="form-control form-control form-control-solid  " name="mort_email" value="" required>
                                                                    </div>

                                                                    <div class="col-12 col-md-6 ">
                                                                        <br>
                                                                        <label class=" form-control-label">Phone</label>
                                                                        <input type="text" class="form-control form-control form-control-solid  " name="mort_phone" value="" required>
                                                                    </div>

                                                                    <div class="col-12 col-md-12  ">
                                                                        <br>
                                                                        <label class=" form-control-label">Gender</label>
                                                                        <br/>
                                                                        <label class="officer-label float-left" style="margin-right: 10px">
                                                                            <input type="radio" name="mort_gender" value="male" class="card-input-officers-element mortpro_gender realtor_gender" required />
                                                                            <div style="" class="card-input-apro col-md-12">
                                                                                <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                                            </div>
                                                                        </label>
                                                                        <label class="officer-label float-left">
                                                                            <input type="radio" name="mort_gender" value="female" class="card-input-officers-element mortpro_gender realtor_gender" required  />
                                                                            <div style="" class="card-input-apro col-md-12">
                                                                                <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                                            </div>
                                                                        </label>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-xl-12">
                                                        <div class="separator separator-dashed my-5"></div>
                                                    </div>

                                                    <!-- Seller Realtor details--->
                                                    <div class="col-lg-12 col-xl-12">
                                                        <h3 class="mb-10 font-weight-bold text-dark">Seller Realtor Details</h3>
                                                        <div class="row">
                                                        <div class="col-xl-12">
                                                            <div id="seller-realtor-information" class="row form-group">

                                                                <div hidden class="col-12 col-md-8">
                                                                    <br>
                                                                    <label class=" form-control-label">
                                                                        Did the client use a realtor?</label>
                                                                </div>
                                                                <div hidden class="col-12 col-md-4">
                                                                    <br/>
                                                                    <label class="officer-label float-left" style="margin-right: 10px">
                                                                        <input type="radio" name="used_seller_realtor" value="yes" data-content="10" class="card-input-officers-element used_realtor"  checked />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Yes</span>
                                                                        </div>
                                                                    </label>
                                                                    <label class="officer-label float-left">
                                                                        <input type="radio" name="used_seller_realtor" value="no" data-content="20" class="card-input-officers-element used_realtor"  />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-success label-inline font-weight py-4">No</span>
                                                                        </div>
                                                                    </label>
                                                                </div>


                                                                <!-- Add this class 'realtorinfo' if u want the elements to apply to radio buttons changes -->
                                                                <div class="col-12 col-md-6 ">
                                                                    <br>
                                                                    <label class=" form-control-label">First Name</label>
                                                                    <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid " name="realtor_seller_first_name" value="" required>
                                                                </div>
                                                                <div  class="col-12 col-md-6  ">
                                                                    <br>
                                                                    <label  class=" form-control-label">Last Name</label>
                                                                    <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid " name="realtor_seller_last_name" value="" required>
                                                                </div>
                                                                <div  class="col-12 col-md-6 ">
                                                                    <br>
                                                                    <label  class=" form-control-label">E-mail</label>
                                                                    <input type="text" class="form-control form-control form-control-solid " name="realtor_seller_email" value="" required>
                                                                </div>
                                                                <div  class="col-12 col-md-6 ">
                                                                    <br>
                                                                    <label class=" form-control-label">Phone</label>
                                                                    <input type="text" class="form-control form-control form-control-solid " name="realtor_seller_phone" value="" required>
                                                                </div>
                                                                <div class="col-12 col-md-12  ">
                                                                    <br>
                                                                    <label class=" form-control-label">Gender</label>
                                                                    <br/>
                                                                    <label class="officer-label float-left" style="margin-right: 10px">
                                                                        <input type="radio" name="realtor_seller_gender" value="male" class="card-input-officers-element realtor_gender" required />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                                        </div>
                                                                    </label>
                                                                    <label class="officer-label float-left">
                                                                        <input type="radio" name="realtor_seller_gender" value="female" class="card-input-officers-element realtor_gender"  required />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                                        </div>
                                                                    </label>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>

                                                </div>
                                            <?php elseif(auth()->user()->type == "MortgageBroker"): ?>
                                                <div class="form-group row">

                                                    <!-- Buyer Realtor details--->
                                                    <div class="col-lg-12 col-xl-12">
                                                        <h3 class="mb-10 font-weight-bold text-dark">Buyer Realtor Details</h3>
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div id="buyer-realtor-information" class="row form-group">

                                                                    <div hidden class="col-12 col-md-8">
                                                                        <br>
                                                                        <label class=" form-control-label">
                                                                            Did the buyer use realtor ?
                                                                        </label>
                                                                    </div>
                                                                    <div hidden class="col-12 col-md-4">
                                                                        <br/>
                                                                        <label class="officer-label float-left" style="margin-right: 10px">
                                                                            <input type="radio" name="used_buyer_realtor" value="yes" data-content="10" class="card-input-officers-element used_realtor" checked />
                                                                            <div style="" class="card-input-apro col-md-12">
                                                                                <span class="label label-lg label-light-danger label-inline font-weight py-4">Yes</span>
                                                                            </div>
                                                                        </label>
                                                                        <label class="officer-label float-left">
                                                                            <input type="radio" name="used_buyer_realtor" value="no" data-content="20" class="card-input-officers-element used_realtor" />
                                                                            <div style="" class="card-input-apro col-md-12">
                                                                                <span class="label label-lg label-light-success label-inline font-weight py-4">No</span>
                                                                            </div>
                                                                        </label>
                                                                    </div>


                                                                   <!--- add this class 'mortgagepartinfo' if u want the elements to apply to the radio buttons changes  -->
                                                                    <div class="col-12 col-md-6 ">
                                                                        <br>
                                                                        <label class=" form-control-label">First Name</label>
                                                                        <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid  " name="realtor_buyer_first_name" value="" required>
                                                                    </div>

                                                                    <div class="col-12 col-md-6 ">
                                                                        <br>
                                                                        <label  class=" form-control-label">Last Name</label>
                                                                        <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid  " name="realtor_buyer_last_name" value="" required>
                                                                    </div>

                                                                    <div  class="col-12 col-md-6 ">
                                                                        <br>
                                                                        <label  class=" form-control-label">E-mail</label>
                                                                        <input type="text" class="form-control form-control form-control-solid mortpro_email realtor_email" name="realtor_buyer_email" value="" required>
                                                                    </div>

                                                                    <div class="col-12 col-md-6 ">
                                                                        <br>
                                                                        <label class=" form-control-label">Phone</label>
                                                                        <input type="text" class="form-control form-control form-control-solid mortpro_phone realtor_phone" name="realtor_buyer_phone" value="" required>
                                                                    </div>

                                                                    <div class="col-12 col-md-12  ">
                                                                        <br>
                                                                        <label class=" form-control-label">Gender</label>
                                                                        <br/>
                                                                        <label class="officer-label float-left" style="margin-right: 10px">
                                                                            <input type="radio" name="realtor_buyer_gender" value="male" class="card-input-officers-element mortpro_gender realtor_gender" required/>
                                                                            <div style="" class="card-input-apro col-md-12">
                                                                                <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                                            </div>
                                                                        </label>
                                                                        <label class="officer-label float-left">
                                                                            <input type="radio" name="realtor_buyer_gender" value="female" class="card-input-officers-element mortpro_gender realtor_gender" required />
                                                                            <div style="" class="card-input-apro col-md-12">
                                                                                <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                                            </div>
                                                                        </label>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 col-xl-12">
                                                        <div class="separator separator-dashed my-5"></div>
                                                    </div>

                                                    <!-- Seller Realtor details--->
                                                    <div class="col-lg-12 col-xl-12">
                                                        <h3 class="mb-10 font-weight-bold text-dark">Seller Realtor Details</h3>
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <div id="seller-realtor-information" class="row form-group">

                                                                    <div hidden class="col-12 col-md-8">
                                                                        <br>
                                                                        <label class=" form-control-label">
                                                                            Did the client use a realtor?</label>
                                                                    </div>
                                                                    <div hidden class="col-12 col-md-4">
                                                                        <br/>
                                                                        <label class="officer-label float-left" style="margin-right: 10px">
                                                                            <input type="radio" name="used_seller_realtor" value="yes" data-content="10" class="card-input-officers-element used_realtor"  checked />
                                                                            <div style="" class="card-input-apro col-md-12">
                                                                                <span class="label label-lg label-light-danger label-inline font-weight py-4">Yes</span>
                                                                            </div>
                                                                        </label>
                                                                        <label class="officer-label float-left">
                                                                            <input type="radio" name="used_seller_realtor" value="no" data-content="20" class="card-input-officers-element used_realtor"  />
                                                                            <div style="" class="card-input-apro col-md-12">
                                                                                <span class="label label-lg label-light-success label-inline font-weight py-4">No</span>
                                                                            </div>
                                                                        </label>
                                                                    </div>


                                                                    <!-- Add this class 'realtorinfo' if u want the elements to apply to radio buttons changes -->
                                                                    <div class="col-12 col-md-6 ">
                                                                        <br>
                                                                        <label class=" form-control-label">First Name</label>
                                                                        <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid " name="realtor_seller_first_name" value="" required />
                                                                    </div>
                                                                    <div  class="col-12 col-md-6  ">
                                                                        <br>
                                                                        <label  class=" form-control-label">Last Name</label>
                                                                        <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid " name="realtor_seller_last_name" value="" required />
                                                                    </div>
                                                                    <div  class="col-12 col-md-6 ">
                                                                        <br>
                                                                        <label  class=" form-control-label">E-mail</label>
                                                                        <input type="text" class="form-control form-control form-control-solid " name="realtor_seller_email" value="" required />
                                                                    </div>
                                                                    <div  class="col-12 col-md-6 ">
                                                                        <br>
                                                                        <label class=" form-control-label">Phone</label>
                                                                        <input type="text" class="form-control form-control form-control-solid " name="realtor_seller_phone" value="" required />
                                                                    </div>
                                                                    <div class="col-12 col-md-12  ">
                                                                        <br>
                                                                        <label class=" form-control-label">Gender</label>
                                                                        <br/>
                                                                        <label class="officer-label float-left" style="margin-right: 10px">
                                                                            <input type="radio" name="realtor_seller_gender" value="male" class="card-input-officers-element realtor_gender" required />
                                                                            <div style="" class="card-input-apro col-md-12">
                                                                                <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                                            </div>
                                                                        </label>
                                                                        <label class="officer-label float-left">
                                                                            <input type="radio" name="realtor_seller_gender" value="female" class="card-input-officers-element realtor_gender"  />
                                                                            <div style="" class="card-input-apro col-md-12">
                                                                                <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                                            </div>
                                                                        </label>
                                                                    </div>


                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <?php endif; ?>
                                        <!--end::Step 4-->
                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4 prevStep" data-wizard-type="action-prev">Previous</button>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4 add_project_submit_button" data-wizard-type="action-submit">Submit</button>
                                                <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4 add_project_next_button" data-wizard-type="action-next">Next Step</button>
                                            </div>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form Wizard-->
                                </div>
                            </div>
                            <!--end::Wizard Body-->
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="add_file_refinance_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Refinance File</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="wizard wizard-1" id="kt_file_add_refinance" data-wizard-state="step-first" data-wizard-clickable="true">
                            <!--begin::Wizard Nav-->
                            <div class="wizard-nav border-bottom">
                                <div class="wizard-steps p-8 p-lg-10">
                                    <div class="wizard-step prevStep" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-label">
                                            <span class="svg-icon svg-icon-4x wizard-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                                <!--end::Svg Icon-->
                                    </span>
                                            <h3 class="wizard-title">File Details</h3>
                                        </div>
                                        <span class="svg-icon svg-icon-xl wizard-arrow">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                            <!--end::Svg Icon-->
                                </span>
                                    </div>
                                    <div class="wizard-step prevStep" data-wizard-type="step">
                                        <div class="wizard-label">
															<span class="svg-icon svg-icon-4x wizard-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
																		<path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
                                            <h3 class="wizard-title"> <?php if(auth()->user()->type != "Client"): ?> Client <?php else: ?> Your <?php endif; ?> Information</h3>
                                        </div>
                                        <span class="svg-icon svg-icon-xl wizard-arrow">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                    </span>
                                    </div>
                                    <div class="wizard-step lastStep" data-wizard-type="step">
                                        <div class="wizard-label">
                                        <span class="svg-icon svg-icon-4x wizard-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
                                                    <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                            <h3 class="wizard-title">Documents</h3>
                                        </div>

                                        <!--<span class="svg-icon svg-icon-xl wizard-arrow kt_projects_add  realtor-step ">
                                             <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                 <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                     <polygon points="0 0 24 0 24 24 0 24" />
                                                     <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                     <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                 </g>
                                             </svg>
                                     </span> -->

                                    </div>

                                    <!--
                                    <div class="wizard-step realtor-step " data-wizard-type="step">
                                            <div class="wizard-label">
                                        <span class="svg-icon svg-icon-4x wizard-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
                                                    <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
                                                </g>
                                            </svg>
                                        </span>
                                            <h3 class="wizard-title">Real State Team</h3>
                                        </div>
                                        </div> -->
                                </div>
                            </div>
                            <!--end::Wizard Nav-->
                            <!--begin::Wizard Body-->
                            <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                                <div class="col-xl-12 col-xxl-7 ">
                                    <!--begin::Form Wizard-->
                                    <form class="form" id="kt_file_refinance_add_form" method="POST" action="<?php echo e(route('file.create')); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <!--begin::Step 1-->
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                            <h3 class="mb-10 font-weight-bold text-dark">File Details</h3>
                                            <div class="row">
                                                <div class="col-xl-12">

                                                    <div hidden class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Service Required</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select name="file_type" class="form-control form-control-lg form-control-solid file_type_select" required>
                                                                <option selected value="Refinance" data-content="30">Refinance</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">File Name</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input style="text-transform: capitalize" class="form-control form-control-lg form-control-solid" name="file_name" type="text" value="" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Closing Date</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-lg form-control-solid" name="closing_date" max="2999-12-31" min="1800-12-31" type="date"  />
                                                        </div>
                                                    </div>

                                                    <div style="display:none"  class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Is the deal firm?</label>
                                                        <div class="col-12 col-md-4">
                                                            <label class="officer-label float-left" style="margin-right: 10px">
                                                                <input type="radio" name="deal_firm" value="yes" class="card-input-officers-element" checked/>
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-danger label-inline font-weight py-4">Yes</span>
                                                                </div>
                                                            </label>
                                                            <label class="officer-label float-left">
                                                                <input type="radio" name="deal_firm" value="no" class="card-input-officers-element" />
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-success label-inline font-weight py-4">No</span>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <h3 class="mb-10 font-weight-bold text-dark">Property Details</h3>
                                            <div class="row">

                                                <div class="col-xl-12">


                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Street Address</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input style="text-transform: capitalize" class="form-control form-control-lg form-control-solid" name="address" type="text" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">City</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input style="text-transform: capitalize" class="form-control form-control-lg form-control-solid" name="city" type="text" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Postal Code</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-lg form-control-solid" name="postal_code" type="text" value="" />
                                                        </div>
                                                    </div>



                                                </div>
                                            </div>

                                        </div>
                                        <!--end::Step 1-->
                                        <!--begin::Step 2-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h3 class="mb-10 font-weight-bold text-dark"> <?php if(auth()->user()->type != "Client"): ?> Client <?php else: ?> Your <?php endif; ?>  Information</h3>
                                                        </div>
                                                    </div>

                                                    <div class="newProjectClientsCountRefinance">

                                                        <div id="client-info-part" class="row form-group client-info-part">

                                                            <div  class="col-12 col-md-12  d-none">
                                                                <a  href="#" class="btn btn-light-danger float-right font-weight-bold ml-2 remove-client">
                                                                    <i class="la la-trash-o"></i>

                                                                    Delete
                                                                </a>
                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label class=" form-control-label">First Name</label>
                                                                <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid   first_name" name="first_name[]" type="text" value=" "  />
                                                                <input hidden style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  first_name" name="counter[]" type="text" value="0"  />
                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label class=" form-control-label">Last Name</label>
                                                                <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  last_name " name="last_name[]" type="text" value=" "  />
                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label  class=" form-control-label">E-mail</label>
                                                                <input type="email" class="form-control form-control-lg form-control-solid  email " name="email[]"  value=" "  />

                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label class=" form-control-label">Phone</label>
                                                                <input type="text" class="form-control form-control-lg form-control-solid  phone " name="phone[]"  value=" "  />
                                                            </div>

                                                            <div class="col-12 col-md-12">
                                                                <br>
                                                                <label class=" form-control-label">Gender</label>
                                                                <br/>
                                                                <label class="officer-label float-left" style="margin-right: 10px">
                                                                    <input type="radio" name="gender0" value="male" class="card-input-officers-element gender" />
                                                                    <div style="" class="card-input-apro col-md-12">
                                                                        <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                                    </div>
                                                                </label>
                                                                <label class="officer-label float-left">
                                                                    <input type="radio" name="gender0" value="female" class="card-input-officers-element gender" />
                                                                    <div style="" class="card-input-apro col-md-12">
                                                                        <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                                    </div>
                                                                </label>
                                                            </div>

                                                            <?php if(auth()->user()->type == "Realtor" || auth()->user()->type == "MortgageBroker"  ): ?>
                                                                <div class="col-12 col-md-12">
                                                                    <br>
                                                                    <hr>
                                                                </div>
                                                            <?php endif; ?>



                                                        </div>

                                                    </div>

                                                </div>
                                                <?php if(auth()->user()->type == "Realtor" || auth()->user()->type == "MortgageBroker"  ): ?>
                                                    <a id="" href="#" data-file="Refinance" class="addNewClient btn btn-light-primary font-weight-bold ml-2">
                                                        <i class="la la-plus"></i>
                                                        Add
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <!--end::Step 2-->
                                        <!--begin::Step 3-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <h3 class="mb-10 font-weight-bold text-dark">Documents</h3>
                                                    <span>Please upload relevant documents (mortgage commitment, purchase and sale agreement, etc.)</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">

                                                <div class="col-lg-9 col-xl-6">
                                                    <a style="width: 100%" class="btnAddfile dropzone-select btn btn-light-primary font-weight-bold btn-sm dz-clickable" data-content="addfilewizRefinance" data-col="4" data-multi="yes" data-name="docs[]">Attach Files</a>
                                                    <input style="display: none" type="file" class="form-control form-control-lg form-control-solid filetoupload fileElementId-addfilewizRefinance" name="no[]" multiple>
                                                    <br>
                                                </div>

                                                <div class="col-lg-9 col-xl-6">


                                                </div>

                                                <div class="col-12 col-md-12 ">
                                                    <div class="fileName-addfilewizRefinance row mt-10">  </div>
                                                    <br>
                                                </div>
                                            </div>


                                        </div>
                                        <!--end::Step 3-->
                                        <!--begin::Step 4
                                        <div class="pb-5 realtor-step " data-wizard-type="step-content">
                                            <div class="form-group row">
                                                <div class="col-lg-12 col-xl-12">
                                                    <h3 class="mb-10 font-weight-bold text-dark">Mortgage Broker Details</h3>
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div id="mortgage-information" class="row form-group">

                                                                <div class="col-12 col-md-8">
                                                                    <br>
                                                                    <label class=" form-control-label">
                                                                        Was there a mortgage broker involved in this transaction?
                                                                    </label>
                                                                </div>

                                                                <div class="col-12 col-md-4">
                                                                    <br/>
                                                                    <label class="officer-label float-left" style="margin-right: 10px">
                                                                        <input type="radio" name="mort_or_bank" value="Mortgage Broker" data-content="10" class="card-input-officers-element used_realtor" />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Yes</span>
                                                                        </div>
                                                                    </label>
                                                                    <label class="officer-label float-left">
                                                                        <input type="radio" name="mort_or_bank" value="bank" data-content="20" class="card-input-officers-element used_realtor" />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-success label-inline font-weight py-4">No</span>
                                                                        </div>
                                                                    </label>
                                                                </div>

                                                                <div  class="col-12 col-md-6 mortgagepartinfo">
                                                                    <br>
                                                                    <label class=" form-control-label">First Name</label>
                                                                    <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid mortpro_first_name realtor_first_name" name="realtor_first_name" value="">
                                                                </div>

                                                                <div  class="col-12 col-md-6 mortgagepartinfo">
                                                                    <br>
                                                                    <label  class=" form-control-label">Last Name</label>
                                                                    <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid mortpro_last_name realtor_last_name" name="realtor_last_name" value="">
                                                                </div>

                                                                <div  class="col-12 col-md-6 mortgagepartinfo">
                                                                    <br>
                                                                    <label  class=" form-control-label">E-mail</label>
                                                                    <input type="text" class="form-control form-control form-control-solid mortpro_email realtor_email" name="realtor_email" value="">
                                                                </div>

                                                                <div class="col-12 col-md-6 mortgagepartinfo">
                                                                    <br>
                                                                    <label class=" form-control-label">Phone</label>
                                                                    <input type="text" class="form-control form-control form-control-solid mortpro_phone realtor_phone" name="realtor_phone" value="">
                                                                </div>

                                                                <div class="col-12 col-md-12 mortgagepartinfo ">
                                                                    <br>
                                                                    <label class=" form-control-label">Gender</label>
                                                                    <br/>
                                                                    <label class="officer-label float-left" style="margin-right: 10px">
                                                                        <input type="radio" name="realtor_gender" value="male" class="card-input-officers-element mortpro_gender realtor_gender" />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                                        </div>
                                                                    </label>
                                                                    <label class="officer-label float-left">
                                                                        <input type="radio" name="realtor_gender" value="female" class="card-input-officers-element mortpro_gender realtor_gender"  />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                                        </div>
                                                                    </label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12 col-xl-12">
                                                    <div class="separator separator-dashed my-5"></div>
                                                </div>

                                                <div class="col-lg-12 col-xl-12">
                                                    <h3 class="mb-10 font-weight-bold text-dark">Seller Realtor Details</h3>
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <div id="realtor-information" class="row form-group">

                                                                <div class="col-12 col-md-8">
                                                                    <br>
                                                                    <label class=" form-control-label">
                                                                        Did the client use a realtor?</label>
                                                                </div>
                                                                <div class="col-12 col-md-4">
                                                                    <br/>
                                                                    <label class="officer-label float-left" style="margin-right: 10px">
                                                                        <input type="radio" name="used_realtor" value="yes" data-content="10" class="card-input-officers-element used_realtor"  />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Yes</span>
                                                                        </div>
                                                                    </label>
                                                                    <label class="officer-label float-left">
                                                                        <input type="radio" name="used_realtor" value="no" data-content="20" class="card-input-officers-element used_realtor"  />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-success label-inline font-weight py-4">No</span>
                                                                        </div>
                                                                    </label>
                                                                </div>

                                                                <div class="col-12 col-md-6 realtorinfo">
                                                                    <br>
                                                                    <label class=" form-control-label">First Name</label>
                                                                    <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid realtor_first_name" name="realtor_first_name" value="">
                                                                </div>
                                                                <div  class="col-12 col-md-6 realtorinfo ">
                                                                    <br>
                                                                    <label  class=" form-control-label">Last Name</label>
                                                                    <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid realtor_last_name" name="realtor_last_name" value="">
                                                                </div>
                                                                <div  class="col-12 col-md-6 realtorinfo">
                                                                    <br>
                                                                    <label  class=" form-control-label">E-mail</label>
                                                                    <input type="text" class="form-control form-control form-control-solid realtor_email" name="realtor_email" value="">
                                                                </div>
                                                                <div  class="col-12 col-md-6 realtorinfo">
                                                                    <br>
                                                                    <label class=" form-control-label">Phone</label>
                                                                    <input type="text" class="form-control form-control form-control-solid realtor_phone" name="realtor_phone" value="">
                                                                </div>
                                                                <div  class="col-12 col-md-12 realtorinfo ">
                                                                    <br>
                                                                    <label class=" form-control-label">Gender</label>
                                                                    <br/>
                                                                    <label class="officer-label float-left" style="margin-right: 10px">
                                                                        <input type="radio" name="realtor_gender" value="male" class="card-input-officers-element realtor_gender" />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                                        </div>
                                                                    </label>
                                                                    <label class="officer-label float-left">
                                                                        <input type="radio" name="realtor_gender" value="female" class="card-input-officers-element realtor_gender"  />
                                                                        <div style="" class="card-input-apro col-md-12">
                                                                            <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                                        </div>
                                                                    </label>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!--end::Step 4-->

                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">
                                                <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4 prevStep" data-wizard-type="action-prev">Previous</button>
                                            </div>
                                            <div>
                                                <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4 add_project_submit_button" data-wizard-type="action-submit">Submit</button>
                                                <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4 add_project_next_button" data-wizard-type="action-next">Next Step</button>
                                            </div>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form Wizard-->
                                </div>
                            </div>
                            <!--end::Wizard Body-->
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="add_user_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="wizard wizard-1" id="" data-wizard-state="step-first" data-wizard-clickable="true">
                            <!--begin::Wizard Nav-->
                            <div class="wizard-nav border-bottom">
                                <div class="wizard-steps p-8 p-lg-10">
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-label">
                                    <span class="svg-icon svg-icon-4x wizard-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                            <h3 class="wizard-title">User Details</h3>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!--end::Wizard Nav-->
                            <!--begin::Wizard Body-->
                            <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                                <div class="col-xl-12 col-xxl-12">
                                    <!--begin::Form Wizard-->
                                    <form class="form"  method="POST" action="<?php echo e(route('user.add')); ?>" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <!--begin::Step 1-->
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                            <h3 class="mb-10 font-weight-bold text-dark">User Details:</h3>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid" name="first_name" type="text" value="" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid" name="last_name" type="text" value="" required />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Date of Birth</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input class="form-control form-control-lg form-control-solid"  max="2999-12-31" min="1800-12-31"  name="birth_date" type="date" value=""   required/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Type</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <select name="type" class="form-control form-control form-control-solid " required>
                                                                <option value=""  selected disabled  class="form-control form-control-solid">Select Type</option>
                                                                <option value="Admin" class="form-control form-control-solid">Admin</option>
                                                                <option  value="Client" class="form-control form-control-solid">Client</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                                                        <div class="col-lg-9 col-xl-9">
                                                            <input id="email" type="email"  class="form-control form-control-lg form-control-solid <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" type="email" value="" required />
                                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                            <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Step 1-->

                                        <hr>
                                        <!--begin::Actions-->
                                        <button style="float: right" type="submit" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" >Submit</button>

                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Form Wizard-->
                                </div>
                            </div>
                            <!--end::Wizard Body-->
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="add_closing_package_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Document </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--begin::Form-->
                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-control-label">Document Title</label>
                                <input type="text" id="closingpack_title_main" class="form-control" value="" required>
                                <input hidden type="text" name="ref_file" value="<?php echo e(request()->segment(2)); ?>" class="form-control">
                                <input hidden type="text" name="type" value="CLOSING_PACKAGE" class="form-control">
                            </div>
                            <form id="frmTarget"  class="form  dropzone needsclick dz-clickable" method="POST" action="<?php echo e(route('filedoc.create')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <div id="dropzone" >
                                        <div class="dz-message needsclick">
                                            <input hidden id="closingpack_title" type="text" name="title" class="form-control " value="" required>
                                            <input hidden type="text" name="ref_file" value="<?php echo e(request()->segment(2)); ?>" class="form-control">
                                            <input hidden type="text" name="type" value="CLOSING_PACKAGE" class="form-control">
                                            <button type="button" class="dz-button">Drop files here or click to upload.</button><br>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>

                        <div class="card-footer">
                            <a id="submit_closing_package" class="btn btn-primary mr-2">Submit</a>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                        <!--end::Form-->
                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="add_signing_package_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Document </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--begin::Form-->

                        <div class="card-body">
                            <div class="form-group">
                                <label class="form-control-label">Document Title</label>
                                <input id="signpack_title_main" type="text"  class="form-control " required>
                                <input hidden type="text" name="ref_file" value="<?php echo e(request()->segment(2)); ?>" class="form-control">
                                <input hidden type="text" name="type" value="SIGNING_PACKAGE" class="form-control">
                            </div>
                            <form id="frmTargetTwo"  class="form  dropzone needsclick dz-clickable" method="POST" action="<?php echo e(route('filedoc.create')); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <div id="dropzone" >
                                        <div class="dz-message needsclick">
                                            <input hidden id="signpack_title" type="text" name="title" class="form-control " value="" required>
                                            <input hidden type="text" name="ref_file" value="<?php echo e(request()->segment(2)); ?>" class="form-control">
                                            <input hidden type="text" name="type" value="SIGNING_PACKAGE" class="form-control">
                                            <input hidden type="text" name="status" value="requested" class="form-control">
                                            <button type="button" class="dz-button">Drop files here or click to upload.</button><br>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>


                        <div class="card-footer">
                            <a id="submit_signing_package" class="btn btn-primary mr-2">Submit</a>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                        <!--end::Form-->
                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="add_outstanding_task_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Task </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--begin::Form-->
                        <form class="form" method="POST" action="<?php echo e(route('task.create')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">

                                <div class="form-group">
                                    <label class="form-control-label">Outstanding Task:</label>
                                    <input type="text" name="task" class="form-control">
                                    <input hidden type="text" name="ref_file" value="<?php echo e(request()->segment(2)); ?>" class="form-control">
                                    <input hidden type="text" name="type" value="TASK" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Due To Date:</label>
                                    <input type="date" class="form-control"   max="2999-12-31" min="1800-12-31"  name="due" placeholder="Select date">
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="add_outstanding_file_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Outstanding File </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--begin::Form-->
                        <form class="form" method="POST" action="<?php echo e(route('task.create')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">

                                <div class="form-group">
                                    <label class="form-control-label">Outstanding Task:</label>
                                    <input type="text" name="task" class="form-control">
                                    <input hidden type="text" name="ref_file" value="<?php echo e(request()->segment(2)); ?>" class="form-control">
                                    <input hidden type="text" name="type" value="FILE" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Due To Date:</label>
                                    <input type="date" class="form-control"   max="2999-12-31" min="1800-12-31" name="due" placeholder="Select date">
                                </div>

                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>

                </div>

            </div>
        </div>

        <div class="modal fade" id="add_document_request_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Document Request</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close"></i>
                        </button>
                    </div>
                    <form id="addFileRequestForm" class="form" method="POST" action="<?php echo e(route('filedoc.create')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">

                            <div class="row form-group">

                                <input hidden type="text" class="form-control form-control form-control-solid " name="ref_file" value="<?php echo e(request()->segment(2)); ?>">
                                <input hidden type="text" class="form-control form-control form-control-solid " name="type" value="FILE">
                                <input hidden type="text" class="form-control form-control form-control-solid " name="status" value="requested">

                                <div class="col-12 col-md-12 ">
                                    <br>
                                    <label  class=" form-control-label">Document Title</label>
                                    <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid file_request_title" name="title" value="">
                                </div>
                                <div class="col-12 col-md-12 ">
                                    <br>
                                    <label class=" form-control-label">Instructions</label>

                                    <textarea class="form-control form-control form-control-solid" name="instructions"></textarea>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary mr-2"  onclick="return submitForm('addFileRequestForm');">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    


    <div class="modal fade" id="add_homeowner_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Homeowner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="wizard wizard-1" id="kt_homeowners_add" data-wizard-state="step-first" data-wizard-clickable="true">
                        <!--begin::Wizard Nav-->
                        <div class="wizard-nav border-bottom">
                            <div class="wizard-steps p-8 p-lg-10">
                                <div class="wizard-step" onclick="hideSignatureBox('kt_homeowners_add')"  data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-label">
                                    <span class="svg-icon svg-icon-4x wizard-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                        <h3 class="wizard-title">Homeowner Information</h3>
                                    </div>
                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                </span>
                                </div>
                                <div class="wizard-step" onclick="hideSignatureBox('kt_homeowners_add')" data-wizard-type="step">
                                    <div class="wizard-label">
                                    <span class="svg-icon svg-icon-4x wizard-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
																		<path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
																	</g>
																</svg>
                                        <!--end::Svg Icon-->
															</span>
                                        <h3 class="wizard-title">Identification Verification</h3>
                                    </div>
                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                </g>
                                            </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <div class="wizard-step" onclick="hideSignatureBox('kt_homeowners_add')" data-wizard-type="step">
                                    <div class="wizard-label">
                                    <span class="svg-icon svg-icon-4x wizard-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />
                                                    <circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />
                                                </g>
                                            </svg>
                                        <!--end::Svg Icon-->
                                        </span>
                                        <h3 class="wizard-title">Address for Service</h3>
                                    </div>
                                    <?php if(auth()->user()->type == "Client"): ?>
                                        <span class="svg-icon svg-icon-xl wizard-arrow">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                </g>
                                            </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <?php if(auth()->user()->type == "Client"): ?>
                                    <div class="wizard-step" data-wizard-type="step">
                                    <div class="wizard-label">
                                    <span class="svg-icon svg-icon-4x wizard-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
																		<path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
																	</g>
																</svg>
                                        <!--end::Svg Icon-->
															</span>
                                        <h3 class="wizard-title">Review & Submit</h3>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!--end::Wizard Nav-->
                        <!--begin::Wizard Body-->
                        <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                            <div class="col-xl-12 col-xxl-10">
                                <!--begin::Form Wizard-->

                                <!--begin::Step 1-->
                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                    <h3 class="mb-10 font-weight-bold text-dark">Homeowner Information:</h3>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <form class="form" id="kt_homeowners_purchase_add_form_one" method="POST" action="" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <div class="row d-none howmanyHomeowners  form-group">
                                                    <div class="col-12 col-md-6">
                                                        <br>
                                                        <label class="form-control-label">What is the total number of homeowners?</label>
                                                        
                                                    </div>
                                                    <div  class="col-12 col-md-6">
                                                            <br>
                                                            <label class="officer-label float-left" style="margin-right: 20px">
                                                                <input type="radio" name="homeOwnersNumber" value="1" class="card-input-officers-element totalHomeownersNum " checked/>
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-danger label-inline font-weight py-4">One</span>
                                                                </div>
                                                            </label>
                                                            <label class="officer-label float-left" style="margin-right: 25px">
                                                                <input type="radio" name="homeOwnersNumber" value="2" class="card-input-officers-element totalHomeownersNum"/>
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-success label-inline font-weight py-4">Two</span>
                                                                </div>
                                                            </label>
                                                            <label class="officer-label float-left" style="margin-right: 20px" >
                                                                <input type="radio" name="homeOwnersNumber" value="3" class="card-input-officers-element totalHomeownersNum" />
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-success label-inline font-weight py-4">Three</span>
                                                                </div>
                                                            </label>
                                                            <label class="officer-label float-left" style="margin-right: 20px">
                                                                <input type="radio" name="homeOwnersNumber" value="4" class="card-input-officers-element totalHomeownersNum"  />
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-success label-inline font-weight py-4">Four</span>
                                                                </div>
                                                            </label>
                                                            <label class="officer-label float-left">
                                                                <input type="radio" name="homeOwnersNumber" value="5" class="card-input-officers-element totalHomeownersNum"  />
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-success label-inline font-weight py-4">Five</span>
                                                                </div>
                                                            </label>


                                                        </div>
                                                </div>

                                                <div id="SellerCount">

                                                    <div id="homeOwnerInfoPart" >

                                                        <div id="homeOwnerInfoPart" class="row form-group owner-sale-info-part ">
                                                            <div class="col-12 col-md-12">
                                                                <br>
                                                                <label class="form-control-label font-weight-bold">Homeowner </label>
                                                            </div>

                                                            <div style="display:none"  class="col col-md-2">
                                                                <br>
                                                                <a href="#" class="btn btn-light-success font-weight-bold mr-2 remove-homeowner"><i class="ki ki-bold-close icon-sm"></i></a>
                                                            </div>

                                                            <div class="col-12 col-md-4">
                                                                <br>
                                                                <label class="form-control-label">First Name</label>
                                                                <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  seller_purchase_first_name " name="seller_purchase_first_name" type="text" value=" "  />
                                                                <input hidden="" class="form-control form-control-lg form-control-solid  seller_purchase_id " name="seller_id" type="text" value="0"  />
                                                            </div>

                                                            <div class="col-12 col-md-4">
                                                                <br>
                                                                <label class="form-control-label">Last Name</label>
                                                                <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  seller_purchase_last_name " name="seller_last_name" type="text" value=" "  />
                                                            </div>

                                                            <div class="col-12 col-md-4">
                                                                <br>
                                                                <label class=" form-control-label">Gender</label>
                                                                <br/>
                                                                <label class="officer-label float-left" style="margin-right: 10px">
                                                                    <input type="radio" name="seller_gender" value="male" class="card-input-officers-element seller_gender" />
                                                                    <div style="" class="card-input-apro col-md-12">
                                                                        <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                                    </div>
                                                                </label>
                                                                <label class="officer-label float-left">
                                                                    <input type="radio" name="seller_gender" value="female" class="card-input-officers-element seller_gender" />
                                                                    <div style="" class="card-input-apro col-md-12">
                                                                        <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                                    </div>
                                                                </label>
                                                            </div>

                                                            <div class="col-12 col-md-4">
                                                                <br>
                                                                <label class="form-control-label">Birth Date</label>
                                                                <input type="date"  max="2999-12-31" min="1800-12-31"  class="form-control form-control-lg form-control-solid  seller_purchase_birthdate_name " name="seller_birthdate_name"  value=""  />
                                                            </div>

                                                            <div class="col-12 col-md-4">
                                                                <br>
                                                                <label class=" form-control-label">E-mail</label>
                                                                <input type="email" class="form-control form-control-lg form-control-solid  seller_pruchase_email " name="seller_email"  value=" "  />
                                                            </div>

                                                            <div class="col-12 col-md-4">
                                                                <br>
                                                                <label class=" form-control-label">Phone</label>
                                                                <input type="text" class="form-control form-control-lg form-control-solid  seller_pruchase_phone " name="seller_phone"  value=" "  />
                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label class=" form-control-label">Address</label>
                                                                <input style="text-transform: capitalize"  type="text" class="form-control form-control-lg form-control-solid  seller_pruchase_address " name="seller_address"  value=""  />
                                                            </div>

                                                            <div class="col-12 col-md-3">
                                                                <br>
                                                                <label class=" form-control-label">City</label>
                                                                <input style="text-transform: capitalize"  type="text" class="form-control form-control-lg form-control-solid  seller_purchase_city " name="seller_address"  value=""  />
                                                            </div>

                                                            <div class="col-12 col-md-3">
                                                                <br>
                                                                <label class=" form-control-label">Postal Code</label>
                                                                <input style="text-transform: capitalize"  type="text" class="form-control form-control-lg form-control-solid  seller_purchase_postal_code " name="seller_address"  value=""  />
                                                            </div>



                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label class=" form-control-label">Is this <?php if(auth()->user()->type == "Client"): ?>your <?php else: ?> the client's <?php endif; ?> primary residence?</label>
                                                                <br>
                                                            </div>

                                                            <div class="col-12 col-md-3">
                                                                <label class="officer-label">
                                                                    <input type="radio" name="isthisyourprimary" value="yes"  class="card-input-officers-element isthisyourprimary" />
                                                                    <div style="padding: 10px 0px;margin:0; margin-top: 15px" class="card-input col-md-12">
                                                                        <div style="padding-left: 0;" class="officer-content">
                                                                            <h5 style="font-weight: 500" >
                                                                                <span style="display: block;">Yes</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <br>
                                                            </div>
                                                            <div class="col-12 col-md-3">
                                                                <label class="officer-label">
                                                                    <input type="radio" name="isthisyourprimary" value="no" class="card-input-officers-element isthisyourprimary" />
                                                                    <div style="padding: 10px 0px;margin: 0; margin-top: 15px" class="card-input col-md-12">
                                                                        <div style="padding-left: 0;" class="officer-content">
                                                                            <h5 style="font-weight: 500" >
                                                                                <span style="display: block;">No</span>
                                                                            </h5>

                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <br>
                                                            </div>


                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label class=" form-control-label"><?php if(auth()->user()->type == "Client"): ?>Are you  <?php else: ?> Is the client  <?php endif; ?> legally married ?</label>
                                                                <br>
                                                            </div>
                                                            <div class="col-12 col-md-3">
                                                                <label class="officer-label">
                                                                    <input type="radio" name="areyoumarried" value="yes" data-content="10"   class="card-input-officers-element areyoumarried" />

                                                                    <div style="padding: 10px 0px;margin:0; margin-top: 15px" class="card-input col-md-12">
                                                                        <div style="padding-left: 0;" class="officer-content">
                                                                            <h5 style="font-weight: 500" >
                                                                                <span style="display: block;">Yes</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <br>
                                                            </div>
                                                            <div class="col-12 col-md-3">
                                                                <label class="officer-label">
                                                                    <input type="radio" name="areyoumarried" data-content="20" value="no"  class="card-input-officers-element areyoumarried" />
                                                                    <div style="padding: 10px 0px;margin: 0; margin-top: 15px" class="card-input col-md-12">
                                                                        <div style="padding-left: 0;" class="officer-content">
                                                                            <h5 style="font-weight: 500" >
                                                                                <span style="display: block;">No</span>
                                                                            </h5>

                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <br>
                                                            </div>

                                                            <div  class="col-12 col-md-6 isyourspouseon">
                                                                <br>
                                                                <label class=" form-control-label"><?php if(auth()->user()->type == "Client"): ?>Is your <?php else: ?> Is the client's  <?php endif; ?> spouse on title for this property?</label>
                                                                <br>
                                                            </div>
                                                            <div  class="col-12 col-md-3 isyourspouseon">

                                                                <label class="officer-label">
                                                                    <input type="radio" name="isyourspouseon" value="yes" class="card-input-officers-element isyourspouseon" />
                                                                    <div style="padding: 10px 0px; margin:0; margin-top: 15px" class="card-input col-md-12">
                                                                        <div style="padding-left: 0;" class="officer-content">
                                                                            <h5 style="font-weight: 500" >
                                                                                <span style="display: block;">Yes</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <br>
                                                            </div>
                                                            <div class="col-12 col-md-3 isyourspouseon">
                                                                <label class="officer-label">
                                                                    <input type="radio" name="isyourspouseon" value="no" class="card-input-officers-element isyourspouseon" />
                                                                    <div style="padding: 13px 0px;margin: 0; margin-top: 15px" class="card-input col-md-12">
                                                                        <div style="padding-left: 0;" class="officer-content">
                                                                            <h5 style="font-weight: 500" >
                                                                                <span style="display: block;">No</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <br>
                                                            </div>

                                                            <?php if(auth()->user()->type == "Client"): ?>
                                                                <div class="col-12 col-md-12">
                                                                    <br>
                                                                    <hr>
                                                                </div>
                                                            <?php endif; ?>


                                                        </div>

                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class="pb-5" data-wizard-type="step-content">
                                    <div class="row">
                                        <div class="col-xl-12">

                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            

                                            <div id="SellerIDSCount">
                                                <div  class="row form-group ">
                                                    <div class="col-lg-12 col-xl-12">
                                                        <h5 class="mb-10 font-weight-bold text-dark">
                                                            Please upload the front and back of two pieces of identification for the homeowners.
                                                        </h5>
                                                    </div>



                                                </div>
                                                <div id="homeOwnerIdPart" class=" seller-purchase-ids-part owner-sale-id-part ">

                                                    <h5 class="mb-10 font-weight-bold text-dark">
                                                      <span class="homeonwner-first_name"></span> <span class="homeonwner-last_name"></span>
                                                    </h5>

                                                    <div style="display:none"  class="col col-md-2">
                                                        <br>
                                                        <a href="#" class="btn btn-light-success font-weight-bold mr-2 remove-homeownerID"><i class="ki ki-bold-close icon-sm"></i></a>
                                                    </div>

                                                    <form method="post" id="upload_ids_form_purchase" enctype="multipart/form-data">
                                                        <?php echo e(csrf_field()); ?>

                                                        <div id="kt_kanban_4">
                                                            <div class="kanban-container" style="width: 1250px;">
                                                                <div data-id="_backlog" data-order="1" class="kanban-board" style="width: 250px; margin-left: 0px; margin-right: 0px;">
                                                                    <header class="kanban-board-header light-dark">
                                                                        <div style="text-align: center; padding: 11px; font-size: 23px;" class="kanban-title-board">ID ONE</div>
                                                                    </header>
                                                                    <div style="    margin-bottom: 19px;" class="col-md-12">
                                                                        <br>

                                                                        <div class="file-upload  card fileview-1">
                                                                            <div class="file-select">
                                                                                <div class="file-select-button" id="fileName">ID FRONT</div>
                                                                                <div style="display: contents;"  class="file-select-name" id="noFile-p1">No file chosen...</div>
                                                                                <input type="file" name="id-one-front" class="chooseFile" data-content="p1">
                                                                            </div>
                                                                        </div>

                                                                        <div class="file-upload card fileview-2">
                                                                            <div class="file-select">
                                                                                <div class="file-select-button" id="fileName">ID BACK</div>
                                                                                <div  style="display: contents;"  class="file-select-name" id="noFile-p2">No file chosen...</div>
                                                                                <input type="file" name="id-one-back" class="chooseFile" data-content="p2">
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                    <footer></footer>
                                                                </div>
                                                                <div data-id="_backlog" data-order="1" class="kanban-board" style="width: 250px; margin-left: 0px; margin-right: 0px;">
                                                                    <header class="kanban-board-header light-dark">
                                                                        <div style="text-align: center; padding: 11px; font-size: 23px;" class="kanban-title-board">ID TWO</div>
                                                                    </header>
                                                                    <div style="    margin-bottom: 19px;" class="col-md-12">
                                                                        <br>
                                                                        <div class="file-upload  card fileview-3">
                                                                            <div class="file-select">
                                                                                <div class="file-select-button" id="fileName">ID FRONT</div>
                                                                                <div  style="display: contents;"  class="file-select-name" id="noFile-p3">No file chosen...</div>
                                                                                <input type="file" name="id-two-front" class="chooseFile" data-content="p3">
                                                                            </div>
                                                                        </div>

                                                                        <div class="file-upload card fileview-4">
                                                                            <div class="file-select">
                                                                                <div class="file-select-button" id="fileName">ID BACK</div>
                                                                                <div  style="display: contents;"  class="file-select-name" id="noFile-p4">No file chosen...</div>
                                                                                <input type="file" name="id-two-back" class="chooseFile" data-content="p4">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <footer></footer>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <?php if(auth()->user()->type == "Client"): ?>
                                                        <div class="col-12 col-md-12">
                                                        <br>
                                                        <hr>
                                                    </div>
                                                    <?php endif; ?>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div class="pb-5" data-wizard-type="step-content">
                                    <div class="form-group row">
                                        <div class="col-lg-9 col-xl-6">
                                            <h3 class="mb-10 font-weight-bold text-dark">Address for Service</h3>
                                            <span>Please enter the new mailing address for each homeowner:</span>
                                        </div>
                                    </div>

                                    <form class="form" id="kt_homeowners_add_form_three" method="POST" action="" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>

                                        <div id="SellerAddressCount">
                                            <div id="homeOwnerAddressPart" class="owner-sale-address-part ">
                                                <div class="form-group row">
                                                    <div class="col-lg-9 col-xl-6">
                                                        <span class="homeonwner-first_name"></span> <span class="homeonwner-last_name"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    
                                                        
                                                        
                                                    
                                                    <div class="col-12 col-md-6">
                                                        <br>
                                                        <label class=" form-control-label">Street Address</label>
                                                        <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  seller_service_address " name="seller_service_address" type="text" value=""  />
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <br>
                                                        <label class=" form-control-label">City</label>
                                                        <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  seller_service_city " name="seller_service_city" type="text" value=""  />
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <br>
                                                        <label class=" form-control-label">Province</label>
                                                        <input class="form-control form-control-lg form-control-solid  seller_service_province " name="seller_service_province" type="text" value=""  />
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <br>
                                                        <label class=" form-control-label">Postal code</label>
                                                        <input class="form-control form-control-lg form-control-solid  seller_service_postal_code " name="seller_service_postal_code" type="text" value="" />
                                                    </div>
                                                    <div class="d-none col-12 col-md-6">
                                                        <br>
                                                        <label class="checkbox">
                                                            <input  type="checkbox" class="sameasfirst" name="sameasfirst">
                                                            <span style="margin-right:10px"></span>
                                                            Same Address as Homeowner One
                                                        </label>
                                                    </div>
                                                </div>

                                                <?php if(auth()->user()->type == "Client"): ?>
                                                    <div class="col-12 col-md-12">
                                                        <br>
                                                        <hr>
                                                    </div>
                                                <?php endif; ?>


                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <!--end::Step 3-->

                                <?php if(auth()->user()->type == "Client"): ?>
                                    <!--begin::Step 4-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Section-->
                                        <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>

                                        <div id="homeownerReviewCounter">

                                            <div id="homeowner-review-part" class="owner-sale-review-part">

                                                <div style="display:none"  class="col col-md-2">
                                                    <br>
                                                     <a href="#" class="btn btn-light-success font-weight-bold mr-2 remove-homeownerReview"><i class="ki ki-bold-close icon-sm"></i></a>
                                                </div>

                                                <h2 class="mb-10 font-weight-bold text-dark">Homeowner 1</h2>
                                                <h6 class="font-weight-bolder mb-3">Personal Information</h6>
                                                <div class="text-dark-50 line-height-lg">
                                                      <div><span class="first_name"> </span> <br> <span class="last_name"> </span>   </div>
                                                      <div><span class="gender"> </span></div>
                                                      <div><span class="birthdate"> </span> </div>
                                                      <div><span class="email"> </span></div>
                                                      <div><span class="phone"> </span></div>
                                                      <div><span class="street"></span><span class="city"> </span><span class="postal_code"> </span> </div>
                                                      <div><span class="question1"> </span></div>
                                                      <div> <span class="question2"> </span></div>
                                                      <div><span class="question3"> </span></div>
                                                </div>
                                                <br>


                                                <h6 class="font-weight-bolder mb-3 homeownerPropAddress">Property Address </h6>
                                                <div class="text-dark-50 line-height-lg">
                                                    <div>
                                                        <span class="prop_street"></span><span class="prop_city"> </span><span class="prop_province"> </span><span class="prop_postal_code"> </span>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </div>
                                    <!--end::Step 4-->
                                <?php endif; ?>

                                <!--begin::Actions-->
                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div class="mr-2">
                                        <button type="button" onclick="hideSignatureBox('kt_homeowners_add')" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                    </div>

                                    <div style="width:50%">
                                        <p style="color:#c4c2c2;margin-top:-18px" class="fullnametxt-title">I confirm that the information entered is correct.</p>
                                        <input style="margin-top:-10px"  class="form-control form-control-lg form-control-solid  fullnametxt"  type="text"  placeholder="Enter Your Full Name Here" value="<?php if(auth()->user()->type != "Client"): ?> Admin Admin <?php endif; ?>" />
                                    </div>

                                    <div>
                                        <button id="submit_homeowners_id" type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                        <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next Step</button>
                                    </div>
                                </div>
                                <!--end::Actions-->

                                <!--end::Form Wizard-->
                            </div>
                        </div>
                        <!--end::Wizard Body-->
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="modal fade" id="add_homeowner_purchase_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Homeowner </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="wizard wizard-1" id="kt_homeowners_purchase_add" data-wizard-state="step-first" data-wizard-clickable="true">
                        <!--begin::Wizard Nav-->
                        <div class="wizard-nav border-bottom">
                            <div class="wizard-steps p-8 p-lg-10">
                                <div class="wizard-step" onclick="hideSignatureBox('kt_homeowners_purchase_add')" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-label">
                                    <span class="svg-icon svg-icon-4x wizard-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                        <h3 class="wizard-title">Homeowner Information</h3>
                                    </div>
                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                </span>
                                </div>

                                <div class="wizard-step" onclick="hideSignatureBox('kt_homeowners_purchase_add')"  data-wizard-type="step">
                                    <div class="wizard-label">
                                        <span class="svg-icon svg-icon-4x wizard-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
																		<path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
																	</g>
																</svg>
                                            <!--end::Svg Icon-->
                                    </span>
                                        <h3 class="wizard-title">Identification Verification</h3>
                                    </div>

                                    <?php if(auth()->user()->type == "Client"): ?>
                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                            <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                        </g>
                                    </svg>
                                            <!--end::Svg Icon-->
                            </span>
                                    <?php endif; ?>

                                </div>

                                <?php if(auth()->user()->type == "Client"): ?>
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">
                                        <span class="svg-icon svg-icon-4x wizard-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                            <rect x="0" y="0" width="24" height="24" />
                                                                            <path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
                                                                            <path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
                                                                        </g>
                                                                    </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                            <h3 class="wizard-title">Review and Submit</h3>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                        <!--end::Wizard Nav-->
                        <!--begin::Wizard Body-->
                        <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                            <div class="col-xl-12 col-xxl-10">
                                <!--begin::Form Wizard-->
                                <!--begin::Step 1-->
                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                    <h3 class="mb-10 font-weight-bold text-dark">Homeowner Information:</h3>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <form class="form" id="kt_homeowners_purchase_add_form_one" method="POST" action="" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>

                                                <div class="row <?php if(auth()->user()->type  != "Client"): ?> d-none <?php endif; ?> howmanyHomeownersPurchase form-group">
                                                        <div class="col-12 col-md-6">
                                                            <br>
                                                            <label class="form-control-label">What's the total number of homeowners?</label>
                                                            
                                                        </div>

                                                        <div class="col-12 col-md-6">
                                                            <br>
                                                            <label class="officer-label float-left" style="margin-right: 20px">
                                                                <input type="radio" name="homeOwnersNumberPurchase" value="1" class="card-input-officers-element totalHomeownersNum " checked/>
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-danger label-inline font-weight py-4">One</span>
                                                                </div>
                                                            </label>
                                                            <label class="officer-label float-left" style="margin-right: 25px">
                                                                <input type="radio" name="homeOwnersNumberPurchase" value="2" class="card-input-officers-element totalHomeownersNum"/>
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-success label-inline font-weight py-4">Two</span>
                                                                </div>
                                                            </label>
                                                            <label class="officer-label float-left" style="margin-right: 20px" >
                                                                <input type="radio" name="homeOwnersNumberPurchase" value="3" class="card-input-officers-element totalHomeownersNum" />
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-success label-inline font-weight py-4">Three</span>
                                                                </div>
                                                            </label>
                                                            <label class="officer-label float-left" style="margin-right: 20px">
                                                                <input type="radio" name="homeOwnersNumberPurchase" value="4" class="card-input-officers-element totalHomeownersNum"  />
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-success label-inline font-weight py-4">Four</span>
                                                                </div>
                                                            </label>
                                                            <label class="officer-label float-left">
                                                                <input type="radio" name="homeOwnersNumberPurchase" value="5" class="card-input-officers-element totalHomeownersNum"  />
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-success label-inline font-weight py-4">Five</span>
                                                                </div>
                                                            </label>

                                                        </div>
                                                    </div>

                                                <div id="SellerCountPurchase">

                                                    <div id="homeOwnerInfoPartContainer" >

                                                        <div id="homeOwnerInfoPart" class="row form-group owner-purchase-info-part  ">
                                                            <div class="col-12 col-md-12">
                                                                <br>
                                                                <label class="form-control-label font-weight-bold">Homeowner 1</label>
                                                            </div>

                                                            <div style="display:none"  class="col col-md-2">
                                                                <br>
                                                                <a href="#" class="btn btn-light-success font-weight-bold mr-2 remove-homeowner"><i class="ki ki-bold-close icon-sm"></i></a>
                                                            </div>

                                                            <div class="col-12 col-md-4">
                                                                <br>
                                                                <label class="form-control-label">First Name</label>
                                                                <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  seller_purchase_first_name " name="seller_purchase_first_name" type="text" value=" "  />
                                                                <input hidden="" class="form-control form-control-lg form-control-solid  seller_purchase_id " name="seller_id" type="text" value="0"  />
                                                            </div>

                                                            <div class="col-12 col-md-4">
                                                                <br>
                                                                <label class="form-control-label">Last Name</label>
                                                                <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  seller_purchase_last_name " name="seller_last_name" type="text" value=" "  />
                                                            </div>

                                                            <div class="col-12 col-md-4">
                                                                <br>
                                                                <label class=" form-control-label">Gender</label>
                                                                <br/>
                                                                <label class="officer-label float-left" style="margin-right: 10px">
                                                                    <input type="radio" name="seller_gender" value="male" class="card-input-officers-element seller_gender" />
                                                                    <div style="" class="card-input-apro col-md-12">
                                                                        <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                                    </div>
                                                                </label>
                                                                <label class="officer-label float-left">
                                                                    <input type="radio" name="seller_gender" value="female" class="card-input-officers-element seller_gender" />
                                                                    <div style="" class="card-input-apro col-md-12">
                                                                        <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                                    </div>
                                                                </label>
                                                            </div>

                                                            <div class="col-12 col-md-4">
                                                                <br>
                                                                <label class="form-control-label">Birth Date</label>
                                                                <input type="date"  max="2999-12-31" min="1800-12-31"  class="form-control form-control-lg form-control-solid  seller_purchase_birthdate_name " name="seller_birthdate_name"  value=""  />
                                                            </div>

                                                            <div class="col-12 col-md-4">
                                                                <br>
                                                                <label class=" form-control-label">E-mail</label>
                                                                <input type="email" class="form-control form-control-lg form-control-solid  seller_pruchase_email " name="seller_email"  value=" "  />
                                                            </div>

                                                            <div class="col-12 col-md-4">
                                                                <br>
                                                                <label class=" form-control-label">Phone</label>
                                                                <input type="text" class="form-control form-control-lg form-control-solid  seller_pruchase_phone " name="seller_phone"  value=" "  />
                                                            </div>

                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label class=" form-control-label">Address</label>
                                                                <input style="text-transform: capitalize"  type="text" class="form-control form-control-lg form-control-solid  seller_pruchase_address " name="seller_address"  value=" "  />
                                                            </div>

                                                            <div class="col-12 col-md-3">
                                                                <br>
                                                                <label class=" form-control-label">City</label>
                                                                <input style="text-transform: capitalize"  type="text" class="form-control form-control-lg form-control-solid  seller_purchase_city " name="seller_address"  value=" "  />
                                                            </div>

                                                            <div class="col-12 col-md-3">
                                                                <br>
                                                                <label class=" form-control-label">Postal Code</label>
                                                                <input style="text-transform: capitalize"  type="text" class="form-control form-control-lg form-control-solid  seller_purchase_postal_code " name="seller_address"  value=" "  />
                                                            </div>


                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label class=" form-control-label"><?php if(auth()->user()->type == "Client"): ?>Are you <?php else: ?> Is the client  <?php endif; ?> purchasing <?php if(auth()->user()->type == "Client"): ?> your  <?php else: ?> their  <?php endif; ?> primary residence?</label>
                                                                <br>
                                                            </div>

                                                            <div class="col-12 col-md-3">
                                                                <label class="officer-label">
                                                                    <input type="radio" name="isthisyourprimary" value="yes"  class="card-input-officers-element" />
                                                                    <div style="padding: 10px 0px;margin:0; margin-top: 15px" class="card-input col-md-12">
                                                                        <div style="padding-left: 0;" class="officer-content">
                                                                            <h5 style="font-weight: 500" >
                                                                                <span style="display: block;">Yes</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <br>
                                                            </div>
                                                            <div class="col-12 col-md-3">
                                                                <label class="officer-label">
                                                                    <input type="radio" name="isthisyourprimary" value="no" class="card-input-officers-element" />
                                                                    <div style="padding: 10px 0px;margin: 0; margin-top: 15px" class="card-input col-md-12">
                                                                        <div style="padding-left: 0;" class="officer-content">
                                                                            <h5 style="font-weight: 500" >
                                                                                <span style="display: block;">No</span>
                                                                            </h5>

                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <br>
                                                            </div>


                                                            <div class="col-12 col-md-6">
                                                                <br>
                                                                <label class=" form-control-label"><?php if(auth()->user()->type == "Client"): ?>Are you <?php else: ?> Is the client <?php endif; ?> legally married ?</label>
                                                                <br>
                                                            </div>
                                                            <div class="col-12 col-md-3">
                                                                <label class="officer-label">
                                                                    <input type="radio" name="areyoumarried" value="yes" data-content="10"   class="card-input-officers-element areyoumarried" />

                                                                    <div style="padding: 10px 0px;margin:0; margin-top: 15px" class="card-input col-md-12">
                                                                        <div style="padding-left: 0;" class="officer-content">
                                                                            <h5 style="font-weight: 500" >
                                                                                <span style="display: block;">Yes</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <br>
                                                            </div>
                                                            <div class="col-12 col-md-3">
                                                                <label class="officer-label">
                                                                    <input type="radio" name="areyoumarried" data-content="20" value="no"  class="card-input-officers-element areyoumarried" />
                                                                    <div style="padding: 10px 0px;margin: 0; margin-top: 15px" class="card-input col-md-12">
                                                                        <div style="padding-left: 0;" class="officer-content">
                                                                            <h5 style="font-weight: 500" >
                                                                                <span style="display: block;">No</span>
                                                                            </h5>

                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <br>
                                                            </div>

                                                            <div  class="col-12 col-md-6 isyourspouseon">
                                                                <br>
                                                                <label class=" form-control-label">Will <?php if(auth()->user()->type == "Client"): ?> your <?php else: ?> the client's <?php endif; ?> spouse be on title for the property being
                                                                    purchased?</label>
                                                                <br>
                                                            </div>
                                                            <div  class="col-12 col-md-3 isyourspouseon">

                                                                <label class="officer-label">
                                                                    <input type="radio" name="isyourspouseon" value="yes" class="card-input-officers-element" />
                                                                    <div style="padding: 10px 0px; margin:0; margin-top: 15px" class="card-input col-md-12">
                                                                        <div style="padding-left: 0;" class="officer-content">
                                                                            <h5 style="font-weight: 500" >
                                                                                <span style="display: block;">Yes</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <br>
                                                            </div>
                                                            <div class="col-12 col-md-3 isyourspouseon">
                                                                <label class="officer-label">
                                                                    <input type="radio" name="isyourspouseon" value="no" class="card-input-officers-element" />
                                                                    <div style="padding: 13px 0px;margin: 0; margin-top: 15px" class="card-input col-md-12">
                                                                        <div style="padding-left: 0;" class="officer-content">
                                                                            <h5 style="font-weight: 500" >
                                                                                <span style="display: block;">No</span>
                                                                            </h5>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <br>
                                                            </div>

                                                            <?php if(auth()->user()->type == "Client"): ?>
                                                                <div class="col-12 col-md-12">
                                                                    <br>
                                                                    <hr>
                                                                </div>
                                                            <?php endif; ?>


                                                        </div>

                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div class="pb-5" data-wizard-type="step-content">
                                    <div class="row">
                                        <div class="col-xl-12">

                                            
                                                
                                                    
                                                        
                                                    
                                                    
                                                
                                            

                                            <div id="SellerIDSCountPurchase">
                                                <div  class="row form-group ">
                                                    <div class="col-lg-12 col-xl-12">
                                                        <h5 class="mb-10 font-weight-bold text-dark">
                                                            Please upload the front and back of two pieces of identification for the homeowners.
                                                        </h5>
                                                    </div>



                                                </div>
                                                <div id="homeOwnerIdPart" class=" seller-purchase-ids-part owner-purchase-id-part ">

                                                    <h5 class="mb-10 font-weight-bold text-dark">
                                                        <span class="homeonwner-first_name"></span> <span class="homeonwner-last_name"></span>

                                                    </h5>

                                                    <div style="display:none"  class="col col-md-2">
                                                        <br>
                                                        <a href="#" class="btn btn-light-success font-weight-bold mr-2 remove-homeownerID"><i class="ki ki-bold-close icon-sm"></i></a>
                                                    </div>
                                                    <form method="post" id="upload_ids_form_purchase" enctype="multipart/form-data">
                                                        <?php echo e(csrf_field()); ?>

                                                        <div id="kt_kanban_4">
                                                            <div class="kanban-container" style="width: 1250px;">
                                                                <div data-id="_backlog" data-order="1" class="kanban-board" style="width: 250px; margin-left: 0px; margin-right: 0px;">
                                                                    <header class="kanban-board-header light-dark">
                                                                        <div style="text-align: center; padding: 11px; font-size: 23px;" class="kanban-title-board">ID ONE</div>
                                                                    </header>
                                                                    <div style="    margin-bottom: 19px;" class="col-md-12">
                                                                        <br>
                                                                        <div class="file-upload  card fileview-1">
                                                                            <div class="file-select">
                                                                                <div class="file-select-button" id="fileName">ID FRONT</div>
                                                                                <div style="display: contents;"  class="file-select-name" id="noFile-1">No file chosen...</div>
                                                                                <input type="file" name="id-one-front" class="chooseFile" data-content="1">
                                                                            </div>
                                                                        </div>

                                                                        <div class="file-upload card fileview-2">
                                                                            <div class="file-select">
                                                                                <div class="file-select-button" id="fileName">ID BACK</div>
                                                                                <div  style="display: contents;"  class="file-select-name" id="noFile-2">No file chosen...</div>
                                                                                <input type="file" name="id-one-back" class="chooseFile" data-content="2">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <footer></footer>
                                                                </div>
                                                                <div data-id="_backlog" data-order="1" class="kanban-board" style="width: 250px; margin-left: 0px; margin-right: 0px;">
                                                                    <header class="kanban-board-header light-dark">
                                                                        <div style="text-align: center; padding: 11px; font-size: 23px;" class="kanban-title-board">ID TWO</div>
                                                                    </header>
                                                                    <div style="    margin-bottom: 19px;" class="col-md-12">
                                                                        <br>
                                                                        <div class="file-upload  card fileview-3">
                                                                            <div class="file-select">
                                                                                <div class="file-select-button" id="fileName">ID FRONT</div>
                                                                                <div  style="display: contents;"  class="file-select-name" id="noFile-3">No file chosen...</div>
                                                                                <input type="file" name="id-two-front" class="chooseFile" data-content="3">
                                                                            </div>
                                                                        </div>

                                                                        <div class="file-upload card fileview-4">
                                                                            <div class="file-select">
                                                                                <div class="file-select-button" id="fileName">ID BACK</div>
                                                                                <div  style="display: contents;"  class="file-select-name" id="noFile-4">No file chosen...</div>
                                                                                <input type="file" name="id-two-back" class="chooseFile" data-content="4">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <footer></footer>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <?php if(auth()->user()->type == "Client"): ?>
                                                        <div class="col-12 col-md-12">
                                                            <br>
                                                            <hr>
                                                        </div>
                                                    <?php endif; ?>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 2-->

                                <?php if(auth()->user()->type == "Client"): ?>
                                    <!--begin::Step 3-->
                                        <div class="pb-5" data-wizard-type="step-content">
                                            <!--begin::Section-->
                                            <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>

                                            <div id="homeownerReviewCounterPruchase">

                                                <div id="homeowner-review-part" class="owner-purchase-review-part " >

                                                    <div style="display:none"  class="col col-md-2">
                                                        <br>
                                                        <a href="#" class="btn btn-light-success font-weight-bold mr-2 remove-homeownerReview"><i class="ki ki-bold-close icon-sm"></i></a>
                                                    </div>

                                                    <h2 class="mb-10 font-weight-bold text-dark">Homeowner 1</h2>
                                                    <h6 class="font-weight-bolder mb-3">Personal Information</h6>
                                                    <div class="text-dark-50 line-height-lg">
                                                        <div><span class="first_name"> </span> <br> <span class="last_name"> </span>   </div>
                                                        <div><span class="gender"> </span></div>
                                                        <div><span class="birthdate"> </span> </div>
                                                        <div><span class="email"> </span></div>
                                                        <div><span class="phone"> </span></div>
                                                        <div><span class="street"></span><span class="city"> </span><span class="postal_code"> </span> </div>
                                                        <div><span class="question1"> </span></div>
                                                        <div>  <span class="question2"> </span></div>
                                                        <div><span class="question3"> </span></div>
                                                    </div>
                                                    <br>

                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    


                                                    <div class="separator separator-dashed my-5"></div>

                                                </div>

                                            </div>

                                        </div>
                                    <!--end::Step 3-->
                                <?php endif; ?>

                                <!--begin::Actions-->
                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div class="mr-2">
                                        <button type="button" onclick="hideSignatureBox('kt_homeowners_purchase_add')"  class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                    </div>

                                    <div style="width:50%">
                                        <p style="color:#c4c2c2;margin-top:-18px" class="fullnametxt-title">I confirm that the information entered is correct.</p>
                                        <input style="text-transform: capitalize; margin-top:-10px"  class="form-control form-control-lg form-control-solid  fullnametxt"  type="text"  placeholder="Enter Your Full Name Here" value="<?php if(auth()->user()->type != "Client"): ?> Admin Admin <?php endif; ?>" />
                                    </div>
                                    <div>
                                        <button id="submit_homeowners_purchase_id" type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                        <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next Step</button>
                                    </div>
                                </div>
                                <!--end::Actions-->

                                <!--end::Form Wizard-->
                            </div>
                        </div>
                        <!--end::Wizard Body-->
                    </div>
                </div>

            </div>

        </div>
    </div>


    <div class="modal fade" id="add_seller_buyer_master_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New
                        <?php
                        $type = 'Buyer';
                        isset($file_data) ? $type = $file_data->file_type : $type='';
                        if($type == "Purchase"){
                            $type ="Seller";
                        }
                        else { $type ="Buyer"; }
                        ?>
                        <?php echo e($type); ?>


                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="wizard wizard-1" id="kt_sellers_buyers_master_add" data-wizard-state="step-first" data-wizard-clickable="true">
                        <!--begin::Wizard Nav-->
                        <div class="wizard-nav border-bottom">
                            <div class="wizard-steps p-8 p-lg-10">
                                <div class="wizard-step" onclick="hideSignatureBox('kt_sellers_buyers_master_add')" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-label">
                                    <span class="svg-icon svg-icon-4x wizard-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                        <h3 class="wizard-title"><?php echo e($type); ?> Information</h3>
                                    </div>
                                    <span class="svg-icon svg-icon-xl wizard-arrow">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                        </span>
                                </div>

                                <div class="wizard-step" onclick="hideSignatureBox('kt_sellers_buyers_master_add')" data-wizard-type="step" >
                                    <div class="wizard-label">
                                    <span class="svg-icon svg-icon-4x wizard-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                        <h3 class="wizard-title">Lawyer Information</h3>
                                    </div>
                                    <?php if(auth()->user()->type == "Client"): ?>
                                        <span class="svg-icon svg-icon-xl wizard-arrow">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                            <!--end::Svg Icon-->
                                </span>
                                    <?php endif; ?>

                                </div>

                                <?php if(auth()->user()->type == "Client"): ?>
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">
                                            <span class="svg-icon svg-icon-4x wizard-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
																		<path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
																	</g>
																</svg>
                                                <!--end::Svg Icon-->
                                    </span>
                                            <h3 class="wizard-title"> Review and submit </h3>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!--end::Wizard Nav-->
                        <!--begin::Wizard Body-->
                        <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                            <div class="col-xl-12 col-xxl-8">
                                <!--begin::Form Wizard-->

                                <!--begin::Step 1-->
                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                    <h3 class="mb-10 font-weight-bold text-dark"><?php echo e($type); ?> Information</h3>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <form class="form" id="kt_sellers_add_form_one" method="POST" action="" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>

                                                <div class="row <?php if( auth()->user()->type == "Client"  || ( auth()->user()->type == "OtherSide" && auth()->user()->first_login ) ): ?>  <?php else: ?> d-none <?php endif; ?> howmanySellersBuyers form-group">
                                                    <div class="col-12 col-md-12">
                                                        <br>
                                                        <label class="form-control-label">What's the total number of <?php echo e($type); ?>s?</label>
                                                    </div>
                                                    <div class="col-12 col-md-12">
                                                        <br>
                                                        <label class="officer-label float-left" style="margin-right: 20px">
                                                            <input type="radio" name="buyersNumber" value="1" class="card-input-officers-element totalHomeownersNum " />
                                                            <div style="" class="card-input-apro col-md-12">
                                                                <span class="label label-lg label-light-danger label-inline font-weight py-4">One</span>
                                                            </div>
                                                        </label>
                                                        <label class="officer-label float-left" style="margin-right: 25px">
                                                            <input type="radio" name="buyersNumber" value="2" class="card-input-officers-element totalHomeownersNum"/>
                                                            <div style="" class="card-input-apro col-md-12">
                                                                <span class="label label-lg label-light-success label-inline font-weight py-4">Two</span>
                                                            </div>
                                                        </label>
                                                        <label class="officer-label float-left" style="margin-right: 20px" >
                                                            <input type="radio" name="buyersNumber" value="3" class="card-input-officers-element totalHomeownersNum" />
                                                            <div style="" class="card-input-apro col-md-12">
                                                                <span class="label label-lg label-light-success label-inline font-weight py-4">Three</span>
                                                            </div>
                                                        </label>
                                                        <label class="officer-label float-left" style="margin-right: 20px">
                                                            <input type="radio" name="buyersNumber" value="4" class="card-input-officers-element totalHomeownersNum"  />
                                                            <div style="" class="card-input-apro col-md-12">
                                                                <span class="label label-lg label-light-success label-inline font-weight py-4">Four</span>
                                                            </div>
                                                        </label>
                                                        <label class="officer-label float-left">
                                                            <input type="radio" name="buyersNumber" value="5" class="card-input-officers-element totalHomeownersNum"  />
                                                            <div style="" class="card-input-apro col-md-12">
                                                                <span class="label label-lg label-light-success label-inline font-weight py-4">Five</span>
                                                            </div>
                                                        </label>

                                                    </div>
                                                </div>


                                                <?php if(auth()->user()->type != "OtherSide"): ?>
                                                <div id="BuyersCount">

                                                    <div id="buyer-info-part" class="row form-group buyer-info-part">


                                                        <div style="display:none"  class="col col-md-12">
                                                            <br>
                                                            <a href="#" class="btn btn-light-success font-weight-bold mr-2 remove-buyer"><i class="ki ki-bold-close icon-sm"></i></a>
                                                        </div>
                                                        <div class="col-12 col-md-12">
                                                            <br>
                                                            <label class="form-control-label font-weight-bold"><?php echo e($type); ?> 1 </label>
                                                        </div>



                                                        <div class="col-12 col-md-4">
                                                            <br>
                                                            <label class=" form-control-label">First Name</label>
                                                            <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  buyer_purchase_first_name " name="buyer_purchase_first_name" type="text" value=""   />
                                                            <input hidden class="form-control form-control-lg form-control-solid  buyer_pruchase_id" name="buyer_pruchase_id" type="text" value="0"  />
                                                            <input hidden class="form-control form-control-lg form-control-solid  buyer_status" name="buyer_status" type="text" value="completed"  />

                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <br>
                                                            <label class=" form-control-label">Last Name</label>
                                                            <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  buyer_purchase_last_name " name="buyer_last_name" type="text" value=""  />

                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <br>
                                                            <label class=" form-control-label">Gender</label>
                                                            <br/>
                                                            <label class="officer-label float-left" style="margin-right: 10px">
                                                                <input type="radio" name="buyer_gender" value="male" class="card-input-officers-element buyer_gender" />
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                                </div>
                                                            </label>
                                                            <label class="officer-label float-left">
                                                                <input type="radio" name="buyer_gender" value="female" class="card-input-officers-element buyer_gender" />
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                                </div>
                                                            </label>
                                                        </div>


                                                        <div class="col-12 col-md-6">
                                                            <br>
                                                            <label class=" form-control-label">Address</label>
                                                            <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  buyer_purchase_address " name="buyer_address" type="text" value=""  />

                                                        </div>

                                                        <div class="col-12 col-md-3">
                                                            <br>
                                                            <label class=" form-control-label">City</label>
                                                            <input style="text-transform: capitalize"  type="text" class="form-control form-control-lg form-control-solid  buyer_city " name="buyer_city"  value=""  />
                                                        </div>

                                                        <div class="col-12 col-md-3">
                                                            <br>
                                                            <label class=" form-control-label">Postal Code</label>
                                                            <input style="text-transform: capitalize"  type="text" class="form-control form-control-lg form-control-solid  buyer_postal_code " name="buyer_postal_code"  value=""  />
                                                        </div>

                                                        <div class="col-12 col-md-12">
                                                            <br>
                                                            <label  class=" form-control-label">E-mail</label>
                                                            <input type="email" class="form-control form-control-lg form-control-solid  buyer_purchase_email " name="buyer_email"  value=""  />

                                                        </div>

                                                        <?php if(auth()->user()->type == "Client"): ?>
                                                            <div class="col-12 col-md-12">
                                                                <br>
                                                                <hr>
                                                            </div>
                                                        <?php endif; ?>

                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="pb-5" data-wizard-type="step-content" >

                                    <h3 class="mb-10 font-weight-bold text-dark">Lawyer Information</h3>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <form class="form" id="kt_lawyer_master_add_form" method="POST" action="" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <div id="lawyer-info-part" class="row form-group" >
                                                    <div class="col-12 col-md-12">
                                                        <br>
                                                        <label class=" form-control-label">Please provide details for <?php echo e($type); ?>'s lawyer</label>

                                                    </div>

                                                    <div class="col-12 col-md-12">
                                                        <br>
                                                        <label class=" form-control-label">Firm Name</label>
                                                        <input type="text" class="form-control form-control-lg form-control-solid lawyer_master_firm_name" name="firm_name" value="" >
                                                        <input hidden type="text" class="form-control form-control-lg form-control-solid firm_seller_name" name="ref_file" value="<?php echo e(request()->segment(2)); ?>" >
                                                        <input id="lawyer_status" hidden type="text" class="form-control form-control-lg form-control-solid lawyer_master_status" name="status" value="completed" >
                                                    </div>

                                                    <div class="col-12 col-md-4">
                                                        <br>

                                                        <label class=" form-control-label">First Name</label>
                                                        <input style="text-transform: capitalize"  type="text" class="form-control form-control-lg form-control-solid lawyer_master_first_name" name="lawyer_first_name" value="<?php echo e(isset($lawyer) ? $lawyer['first_name'] : ''); ?>">
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <br>
                                                        <label  class=" form-control-label">Last Name</label>
                                                        <input style="text-transform: capitalize"  type="text" class="form-control form-control-lg form-control-solid lawyer_master_last_name" name="lawyer_last_name" value="<?php echo e(isset($lawyer) ? $lawyer['last_name'] : ''); ?>">
                                                    </div>

                                                    <div class="col-12 col-md-4">
                                                        <br>
                                                        <label class=" form-control-label">Gender</label>
                                                        <br/>
                                                        <label class="officer-label float-left" style="margin-right: 10px">
                                                            <input type="radio" name="lawyer_master_gender" value="male" class="card-input-officers-element lawyer_gender"  />
                                                            <div style="" class="card-input-apro col-md-12">
                                                                <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                            </div>
                                                        </label>
                                                        <label class="officer-label float-left">
                                                            <input type="radio" name="lawyer_master_gender" value="female" class="card-input-officers-element lawyer_gender"  />
                                                            <div style="" class="card-input-apro col-md-12">
                                                                <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                            </div>
                                                        </label>
                                                    </div>


                                                    <div class="col-12 col-md-4">
                                                        <br>
                                                        <label  class=" form-control-label">E-mail</label>
                                                        <input type="text" class="form-control form-control-lg form-control-solid lawyer_master_email" name="lawyer_email" value="">
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <br>
                                                        <label class=" form-control-label">Phone</label>
                                                        <input  type="tel"  class="form-control form-control-lg form-control-solid lawyer_master_phone"  name="lawyer_phone" value="">
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <br>
                                                        <label class=" form-control-label">Fax</label>
                                                        <input type="text" class="form-control form-control-lg form-control-solid lawyer_master_fax" name="lawyer_fax" value="">
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <?php if(auth()->user()->type == "Client" ): ?>
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Section-->
                                        <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>

                                        <div id="BuyerSellerMasterReviewCounter">

                                            <div id="buyerseller_master-review-part" class="buyerseller_master-review-part-1" >

                                                <div style="display:none"  class="col col-md-2">
                                                    <br>
                                                    <a href="#" class="btn btn-light-success font-weight-bold mr-2 remove-buyersellerReview"><i class="ki ki-bold-close icon-sm"></i></a>
                                                </div>

                                                <h2 class="mb-10 font-weight-bold text-dark"><?php echo e($type); ?> 1</h2>
                                                <h6 class="font-weight-bolder mb-3">Personal Information</h6>
                                                <div class="text-dark-50 line-height-lg">
                                                    <div><span class="first_name"> </span> <br> <span class="last_name"> </span>   </div>
                                                    <div><span class="gender"> </span></div>
                                                    <div><span class="email"> </span></div>
                                                    <div><span class="street"></span> <span class="city"> </span> <span class="postal_code"> </span> </div>
                                                </div>
                                                <br>
                                                <div class="separator separator-dashed my-5"></div>


                                            </div>


                                        </div>

                                        <div >
                                            <h6 class="font-weight-bolder mb-3 buyerSellerLawyerSec">Lawyer Information</h6>
                                            <div class="text-dark-50 line-height-lg">
                                                <div><span class="master_lawyer_firm_name"> </span>   </div>
                                                <div><span class="master_lawyer_first_name"> </span> <br> <span class="master_lawyer_last_name"> </span>   </div>
                                                <div><span class="master_lawyer_gender"> </span></div>
                                                <div><span class="master_lawyer_email">  </span></div>
                                                <div><span class="master_lawyer_phone"> </span></div>
                                                <div><span class="master_lawyer_fax">  </span> </div>
                                            </div>
                                            <br>
                                        </div>

                                    </div>
                                <?php endif; ?>
                            <!--end::Step 2-->

                                <!--begin::Actions-->
                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div class="mr-2">
                                        <button type="button" onclick="hideSignatureBox('kt_sellers_buyers_master_add')" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                    </div>

                                    <div style="width:50%">
                                        <p style="color:#c4c2c2;margin-top:-18px" class="fullnametxt-title">I confirm that the information entered is correct.</p>
                                        <input style="text-transform: capitalize; margin-top:-10px"  class="form-control form-control-lg form-control-solid  fullnametxt"  type="text"  placeholder="Enter Your Full Name Here" value="<?php if(auth()->user()->type != "Client"): ?> Admin Admin <?php endif; ?>" />
                                    </div>
                                    <div>
                                        <button type="button"  class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                        <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next Step</button>
                                    </div>
                                </div>
                                <!--end::Actions-->

                                <!--end::Form Wizard-->
                            </div>
                        </div>
                        <!--end::Wizard Body-->
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="modal fade" id="add_seller_buyer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New
                        <?php
                        $type = 'Buyer';
                        isset($file_data) ? $type = $file_data->file_type : $type='';
                        if($type == "Purchase"){
                            $type ="Seller";
                        }
                        else {$type ="Buyer"; }
                        ?>
                        <?php echo e($type); ?>


                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="wizard wizard-1" id="kt_sellers_buyers_add" data-wizard-state="step-first" data-wizard-clickable="true">
                        <!--begin::Wizard Nav-->
                        <div class="wizard-nav border-bottom">
                            <div class="wizard-steps p-8 p-lg-10">
                                <div class="wizard-step" onclick="hideSignatureBox('kt_sellers_buyers_add')" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-label">
                                    <span class="svg-icon svg-icon-4x wizard-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat-check.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                        <h3 class="wizard-title"><?php echo e($type); ?> Information</h3>
                                    </div>
                                    <?php if(auth()->user()->type == "Client"): ?>
                                        <span class="svg-icon svg-icon-xl wizard-arrow">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                            </g>
                                        </svg>
                                            <!--end::Svg Icon-->
                                </span>
                                    <?php endif; ?>
                                </div>

                                <?php if(auth()->user()->type == "Client"): ?>
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">
                                            <span class="svg-icon svg-icon-4x wizard-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
																		<path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
																	</g>
																</svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                            <h3 class="wizard-title"> Review and submit </h3>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!--end::Wizard Nav-->
                        <!--begin::Wizard Body-->
                        <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                            <div class="col-xl-12 col-xxl-8">
                                <!--begin::Form Wizard-->

                                <!--begin::Step 1-->
                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                    <h3 class="mb-10 font-weight-bold text-dark"><?php echo e($type); ?> Information</h3>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <form class="form" id="kt_sellers_add_form_one" method="POST" action="" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>


                                                <div id="">
                                                    <div id="buyer-single-info-part" class="row form-group buyer-single-info-part">



                                                        <div class="col-12 col-md-12">
                                                            <br>
                                                            <label class="form-control-label font-weight-bold"><?php echo e($type); ?> 1</label>
                                                        </div>



                                                        <div class="col-12 col-md-4">
                                                            <br>
                                                            <label class=" form-control-label">First Name</label>
                                                            <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  buyer_purchase_first_name " name="buyer_purchase_first_name" type="text" value=""  />
                                                            <input hidden class="form-control form-control-lg form-control-solid  buyer_pruchase_id" name="buyer_pruchase_id" type="text" value="0"  />

                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <br>
                                                            <label class=" form-control-label">Last Name</label>
                                                            <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  buyer_purchase_last_name " name="buyer_last_name" type="text" value=""  />

                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <br>
                                                            <label class=" form-control-label">Gender</label>
                                                            <br/>
                                                            <label class="officer-label float-left" style="margin-right: 10px">
                                                                <input type="radio" name="buyer_gender" value="male" class="card-input-officers-element buyer_gender" />
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                                </div>
                                                            </label>
                                                            <label class="officer-label float-left">
                                                                <input type="radio" name="buyer_gender" value="female" class="card-input-officers-element buyer_gender" />
                                                                <div style="" class="card-input-apro col-md-12">
                                                                    <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                                </div>
                                                            </label>
                                                        </div>


                                                        <div class="col-12 col-md-6">
                                                            <br>
                                                            <label class=" form-control-label">Address</label>
                                                            <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  buyer_purchase_address " name="buyer_address" type="text" value=""  />

                                                        </div>

                                                        <div class="col-12 col-md-3">
                                                            <br>
                                                            <label class=" form-control-label">City</label>
                                                            <input style="text-transform: capitalize"  type="text" class="form-control form-control-lg form-control-solid  buyer_city " name="buyer_city"  value=""  />
                                                        </div>

                                                        <div class="col-12 col-md-3">
                                                            <br>
                                                            <label class=" form-control-label">Postal Code</label>
                                                            <input style="text-transform: capitalize"  type="text" class="form-control form-control-lg form-control-solid  buyer_postal_code " name="buyer_postal_code"  value=""  />
                                                        </div>

                                                        <div class="col-12 col-md-12">
                                                            <br>
                                                            <label  class=" form-control-label">E-mail</label>
                                                            <input type="email" class="form-control form-control-lg form-control-solid  buyer_purchase_email " name="buyer_email"  value=""  />

                                                        </div>

                                                        <?php if(auth()->user()->type == "Client"): ?>
                                                            <div class="col-12 col-md-12">
                                                                <br>
                                                                <hr>
                                                            </div>
                                                        <?php endif; ?>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <?php if(auth()->user()->type == "Client" ): ?>
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Section-->
                                        <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>

                                        <div id="BuyerSellerReviewCounter">

                                            <div id="buyerseller-review-part" class="buyerseller-review-part-1" >

                                                <div style="display:none"  class="col col-md-2">
                                                    <br>
                                                    <a href="#" class="btn btn-light-success font-weight-bold mr-2 remove-buyersellerReview"><i class="ki ki-bold-close icon-sm"></i></a>
                                                </div>

                                                <h2 class="mb-10 font-weight-bold text-dark"><?php echo e($type); ?> 1</h2>
                                                <h6 class="font-weight-bolder mb-3">Personal Information</h6>
                                                <div class="text-dark-50 line-height-lg">
                                                    <div><span class="first_name"> </span> <span class="last_name"> </span>   </div>
                                                    <div><span class="gender"> </span></div>
                                                    <div><span class="email"> </span></div>
                                                    <div><span class="street"></span><span class="city"> </span> <span class="postal_code"> </span> </div>
                                                </div>
                                                <br>
                                                <div class="separator separator-dashed my-5"></div>

                                            </div>

                                        </div>

                                    </div>

                                <?php endif; ?>
                                <!--end::Step 2-->

                                <!--begin::Actions-->
                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div class="mr-2">
                                        <button type="button" onclick="hideSignatureBox('kt_sellers_buyers_add')"  class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                    </div>

                                    <div style="width:50%">
                                        <p style="color:#c4c2c2;margin-top:-18px" class="fullnametxt-title">I confirm that the information entered is correct.</p>
                                        <input style="text-transform: capitalize; margin-top:-10px"  class="form-control form-control-lg form-control-solid  fullnametxt"  type="text"  placeholder="Enter Your Full Name Here" value="<?php if(auth()->user()->type != "Client"): ?> Admin Admin <?php endif; ?>" />
                                    </div>
                                    <div>
                                        <button type="button"  class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                        <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next Step</button>
                                    </div>
                                </div>
                                <!--end::Actions-->

                                <!--end::Form Wizard-->
                            </div>
                        </div>
                        <!--end::Wizard Body-->
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="modal fade" id="add_lawyer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Lawyer Information </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="wizard wizard-1" id="kt_lawyer_add" data-wizard-state="step-first" data-wizard-clickable="true">
                        <!--begin::Wizard Nav-->
                        <div class="wizard-nav border-bottom">
                            <div class="wizard-steps p-8 p-lg-10">
                                <div class="wizard-step" onclick="hideSignatureBox('kt_lawyer_add')" data-wizard-type="step" data-wizard-state="current">
                                    <div class="wizard-label">
                                        <span class="svg-icon svg-icon-4x wizard-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
																		<path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
																	</g>
																</svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                        <h3 class="wizard-title"> Lawyer Information </h3>
                                    </div>
                                    <?php if(auth()->user()->type == "Client"): ?>
                                        <span class="svg-icon svg-icon-xl wizard-arrow">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                    </span>
                                    <?php endif; ?>
                                </div>
                                <?php if(auth()->user()->type == "Client"): ?>
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div style="margin-left:0 ; margin-right:0"  class="wizard-label">
                                                            <span class="svg-icon svg-icon-4x wizard-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z" fill="#000000" opacity="0.3" />
																		<path d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z" fill="#000000" />
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
                                            <h3 class="wizard-title">Review & Submit</h3>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!--end::Wizard Nav-->
                        <!--begin::Wizard Body-->
                        <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                            <div class="col-xl-12 col-xxl-8">
                                <!--begin::Form Wizard-->
                            <?php
                            $type = 'buyer';
                            isset($file_data) ? $type = $file_data->file_type : $type='';
                            if($type == "Purchase"){
                                $type ="seller";
                            }
                            else { $type ="buyer"; }
                            ?>
                                <!--begin::Step 1-->
                                <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="form-group row">
                                                <div class="col-lg-9 col-xl-6">
                                                    <h3 class="mb-10 font-weight-bold text-dark">
                                                        Lawyer Information
                                                    </h3>
                                                </div>
                                            </div>
                                            <form class="form" id="kt_lawyer_add_form" method="POST" action="<?php echo e(route('lawyer.store')); ?>" enctype="multipart/form-data">
                                                <?php echo csrf_field(); ?>
                                                <div id="lawyer-info-part" class="row form-group" >
                                                    <div class="col-12 col-md-12">
                                                        <br>
                                                        <label class=" form-control-label">Please provide details for <?php echo e($type); ?>'s lawyer</label>

                                                    </div>

                                                    <div class="col-12 col-md-12">
                                                        <br>
                                                        <label class=" form-control-label">Firm Name</label>
                                                        <input type="text" class="form-control form-control-lg form-control-solid lawyer_firm_name" name="firm_name" value="<?php echo e(isset($lawyer) ? $lawyer['firm_name'] : ''); ?>" >
                                                        <input hidden type="text" class="form-control form-control-lg form-control-solid firm_seller_name" name="ref_file" value="<?php echo e(request()->segment(2)); ?>" >
                                                        <input id="lawyer_status" hidden type="text" class="form-control form-control-lg form-control-solid " name="status" value="" >
                                                    </div>

                                                    <div class="col-12 col-md-4">
                                                        <br>

                                                        <label class=" form-control-label">First Name</label>
                                                        <input style="text-transform: capitalize"  type="text" class="form-control form-control-lg form-control-solid lawyer_seller_first_name" name="lawyer_first_name" value="<?php echo e(isset($lawyer) ? $lawyer['first_name'] : ''); ?>">
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <br>
                                                        <label  class=" form-control-label">Last Name</label>
                                                        <input style="text-transform: capitalize"  type="text" class="form-control form-control-lg form-control-solid lawyer_seller_last_name" name="lawyer_last_name" value="<?php echo e(isset($lawyer) ? $lawyer['last_name'] : ''); ?>">
                                                    </div>

                                                    <div class="col-12 col-md-4">
                                                        <br>
                                                        <label class=" form-control-label">Gender</label>
                                                        <br/>
                                                        <label class="officer-label float-left" style="margin-right: 10px">
                                                            <input type="radio" name="lawyer_gender" value="male" class="card-input-officers-element lawyer_gender" <?php if(isset($lawyer) && $lawyer['gender'] == "male" ): ?> checked <?php endif; ?>/>
                                                            <div style="" class="card-input-apro col-md-12">
                                                                <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                                            </div>
                                                        </label>
                                                        <label class="officer-label float-left">
                                                            <input type="radio" name="lawyer_gender" value="female" class="card-input-officers-element lawyer_gender"  <?php if(isset($lawyer) && $lawyer['gender'] == "female" ): ?> checked <?php endif; ?> />
                                                            <div style="" class="card-input-apro col-md-12">
                                                                <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                                            </div>
                                                        </label>
                                                    </div>


                                                    <div class="col-12 col-md-4">
                                                        <br>
                                                        <label  class=" form-control-label">E-mail</label>
                                                        <input type="text" class="form-control form-control-lg form-control-solid lawyer_seller_email" name="lawyer_email" value="<?php echo e(isset($lawyer) ? $lawyer['email'] : ''); ?>">
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <br>
                                                        <label class=" form-control-label">Phone</label>
                                                        <input  type="tel"  class="form-control form-control-lg form-control-solid lawyer_seller_phone"  name="lawyer_phone" value="<?php echo e(isset($lawyer) ? $lawyer['phone'] : ''); ?>">
                                                    </div>
                                                    <div class="col-12 col-md-4">
                                                        <br>
                                                        <label class=" form-control-label">Fax</label>
                                                        <input type="text" class="form-control form-control-lg form-control-solid lawyer_seller_fax" name="lawyer_fax" value="<?php echo e(isset($lawyer) ? $lawyer['fax'] : ''); ?>">
                                                    </div>

                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                                <?php if(auth()->user()->type == "Client"): ?>
                                    <!--end::Step 1-->
                                <div class="pb-5" data-wizard-type="step-content" >
                                    <!--begin::Section-->
                                    <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>

                                    <div id="lawyer_review_info_part" class="" >

                                        
                                        
                                        
                                        


                                        <div class="row" >

                                            

                                            <div class="col-md-12">
                                                <h6 class="font-weight-bolder mb-3">Personal Information</h6>
                                                <div class="text-dark-50 line-height-lg">
                                                    <div><span class="firm_name"> </span>   </div>
                                                    <div><span class="first_name"> </span> <span class="last_name"> </span>   </div>
                                                    <div><span class="gender"> </span></div>
                                                    <div><span class="email">  </span></div>
                                                    <div><span class="phone"> </span></div>
                                                    <div><span class="fax">  </span> </div>
                                                </div>
                                                <br>
                                            </div>



                                        </div>

                                    </div>

                                </div>

                                <?php endif; ?>
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div class="mr-2">
                                        <button type="button" onclick="hideSignatureBox('kt_lawyer_add')" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                    </div>

                                    <div style="width:50%">
                                        <p style="color:#c4c2c2;margin-top:-18px" class="fullnametxt-title">I confirm that the information entered is correct.</p>
                                        <input style="text-transform: capitalize; margin-top:-10px"  class="form-control form-control-lg form-control-solid  fullnametxt"  type="text"  placeholder="Enter Your Full Name Here" value="<?php if(auth()->user()->type != "Client"): ?> Admin Admin <?php endif; ?>" />
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                        <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next Step</button>
                                    </div>
                                </div>
                                <!--end::Actions-->

                                <!--end::Form Wizard-->
                            </div>
                        </div>
                        <!--end::Wizard Body-->
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="modal fade" id="add_account_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <!--begin::Form-->
                    <form id="addAccountForm" class="form" method="POST" action="<?php echo e(route('payment.store')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">

                            <div id="payment-info-part" class="row form-group payment-info-part" >


                                <div class="col-12 col-md-12">
                                    <label  class=" form-control-label">Payment type</label>
                                    <select id="paymentTypesmain" data-id="main" name="type" class="form-control form-control form-control-solid paymentTypes payment_type" required>
                                        <option data-value="0" value=""   data-content="none"  selected disabled  class="form-control form-control-solid">Select Payment</option>
                                        <option data-value="10"  value="PropertyTax" data-content="PropertyTax"  class="form-control form-control-solid">Property Tax</option>
                                        <option data-value="20"  value="CreditCard" data-content="CreditCard" class="form-control form-control-solid">Credit Card</option>
                                        <option data-value="30"  value="BrokerFee" data-content="BrokerFee" class="form-control form-control-solid">Broker Fee</option>
                                        <option data-value="40"  value="CondoFees" data-content="CondoFees" class="form-control form-control-solid">Condo Fees</option>
                                        <option data-value="50"  value="RealtorPayment" data-content="RealtorPayment" class="form-control form-control-solid">Realtor Payment</option>
                                        <option data-value="70"  value="MortgageLoc" data-content="MortgageLoc" class="form-control form-control-solid">Mortgage</option>
                                        <option data-value="80"  value="LineOfCredit" data-content="LineOfCredit" class="form-control form-control-solid">Line Of Credit</option>
                                        <option data-value="60"  value="OtherPayment" data-content="OtherPayment" class="form-control form-control-solid">Other Payment</option>
                                    </select>
                                    <br>
                                </div>


                                <input hidden type="text"  class="form-control form-control form-control-solid pay_id" name="pay_id"  value="0">
                                <input hidden type="text"  class="form-control form-control form-control-solid pay_type" name="pay_type"  value="SALE">
                                <input hidden type="text"  class="form-control form-control form-control-solid " name="fileid"  value="<?php echo e(request()->segment(2)); ?>">


                                <div  id="MortgageLoc" class="col-12 col-md-12 LineOfCreditmain MortgageLocmain ">
                                    <br>
                                    <label  class=" form-control-label">Account Holder</label>
                                    <input type="text"  class="form-control form-control form-control-solid" name="payee_name" value="">
                                </div>


                                <div id="MortgageLoc" class="col-12 col-md-12 MortgageLocmain LineOfCreditmain">
                                    <br>
                                    <label  class=" form-control-label">Bank/Creditor Name </label>
                                    <select class="form-control form-control form-control-solid client_bank_name_select" data-content="add_account">
                                        <option value="CIBC" selected class="form-control form-control-solid" >CIBC</option>
                                        <option value="RBC" class="form-control form-control-solid">RBC</option>
                                        <option value="TD Bank" class="form-control form-control-solid">TD Bank</option>
                                        <option value="BMO" class="form-control form-control-solid">BMO</option>
                                        <option value="Scotiabank" class="form-control form-control-solid">Scotiabank</option>
                                        <option value="Other"  class="form-control form-control-solid">Other</option>
                                    </select>
                                </div>

                                <div class="col-12 col-md-12 ">
                                    <br>
                                    <label id="paymentDiffNames-main" class="form-control-label PropertyTaxmain CreditCardmain BrokerFeemain CondoFeesmain RealtorPaymentmain OtherPaymentmain"></label>
                                    <label id="otherbankNameTitlemain" class="filetoupload form-control-label client_tempo_bank_name-add_account  filetoupload">Other Bank Name</label>
                                    <input type="text"  class="form-control form-control-solid payment_name client_tempo_bank_name-add_account filetoupload PropertyTaxmain CreditCardmain BrokerFeemain CondoFeesmain RealtorPaymentmain OtherPaymentmain  " name="payment_name" value="">
                                </div>

                                <div  id="PropertyTax"  class="col-12 col-md-6 PropertyTaxmain">
                                    <br>
                                    <label  class=" form-control-label">Roll Number</label>
                                    <input type="number"  class="form-control form-control form-control-solid roll_number" name="roll_number" value="">
                                </div>


                                <div id="CondoFees" class="col-12 col-md-6 CondoFeesmain">
                                    <br>
                                    <label class=" form-control-label">Phone</label>
                                    <input type="text"  class="form-control form-control form-control-solid payment_phone" name="payment_phone" value="">
                                </div>


                                
                                    
                                    
                                    
                                        
                                        
                                        
                                        
                                    
                                    
                                

                                <div  id="MortgageLoc" class="col-12 col-md-12 MortgageLocmain">
                                    <br>
                                    <label class=" form-control-label">Priority</label>
                                    <br/>
                                    <label class="officer-label float-left" style="margin-right: 20px">
                                        <input type="radio" name="priority" value="First" class="card-input-officers-element priority" checked/>
                                        <div style="" class="card-input-apro col-md-12">
                                            <span class="label label-lg label-light-danger label-inline font-weight py-4">First</span>
                                        </div>
                                    </label>
                                    <label class="officer-label float-left" style="margin-right: 25px">
                                        <input type="radio" name="priority" value="Second" class="card-input-officers-element priority" />
                                        <div style="" class="card-input-apro col-md-12">
                                            <span class="label label-lg label-light-success label-inline font-weight py-4">Second</span>
                                        </div>
                                    </label>
                                    <label class="officer-label float-left" style="margin-right: 20px">
                                        <input type="radio" name="priority" value="Third" class="card-input-officers-element priority" />
                                        <div style="" class="card-input-apro col-md-12">
                                            <span class="label label-lg label-light-success label-inline font-weight py-4">Third</span>
                                        </div>
                                    </label>
                                    <label class="officer-label float-left">
                                        <input type="radio" name="priority" value="Fourth" class="card-input-officers-element priority" />
                                        <div style="" class="card-input-apro col-md-12">
                                            <span class="label label-lg label-light-success label-inline font-weight py-4">Fourth</span>
                                        </div>
                                    </label>
                                </div>

                                <div  id="LineOfCredit" class="col-12 col-md-12 LineOfCreditmain">
                                    <br>
                                    <label class=" form-control-label">Priority</label>
                                    <br/>
                                    <label class="officer-label float-left" style="margin-right: 20px">
                                        <input type="radio" name="priority" value="First" class="card-input-officers-element priority" checked/>
                                        <div style="" class="card-input-apro col-md-12">
                                            <span class="label label-lg label-light-danger label-inline font-weight py-4">First</span>
                                        </div>
                                    </label>
                                    <label class="officer-label float-left" style="margin-right: 25px">
                                        <input type="radio" name="priority" value="Second" class="card-input-officers-element priority" />
                                        <div style="" class="card-input-apro col-md-12">
                                            <span class="label label-lg label-light-success label-inline font-weight py-4">Second</span>
                                        </div>
                                    </label>
                                    <label class="officer-label float-left" style="margin-right: 20px">
                                        <input type="radio" name="priority" value="Third" class="card-input-officers-element priority" />
                                        <div style="" class="card-input-apro col-md-12">
                                            <span class="label label-lg label-light-success label-inline font-weight py-4">Third</span>
                                        </div>
                                    </label>
                                    <label class="officer-label float-left">
                                        <input type="radio" name="priority" value="N/A" class="card-input-officers-element priority" />
                                        <div style="" class="card-input-apro col-md-12">
                                            <span class="label label-lg label-light-success label-inline font-weight py-4">N/A</span>
                                        </div>
                                    </label>
                                </div>





                                <!-- mutual fields -->

                                <!--   <div id="PropertyTax"  class="col-12 col-md-6 PropertyTaxmain">
                                       <br>
                                       <label   class=" form-control-label">City Name</label>
                                       <input type="text"  class="form-control form-control form-control-solid city_name" name="city_name" value="">
                                   </div>
                                   <div  id="CreditCard"  class="col-12 col-md-6 CreditCardmain">
                                       <br>
                                       <label class=" form-control-label ">Card Company</label>
                                       <input type="text"  class="form-control form-control form-control-solid card_company" name="card_company" value="">
                                   </div>
                                   <div id="BrokerFee"  class="col-12 col-md-6 BrokerFeemain">
                                       <br>
                                       <label class=" form-control-label">Broker Name </label>
                                       <input type="text"  class="form-control form-control form-control-solid broker_name" name="broker_name" value="">
                                   </div>
                                   <div id="CondoFees" class="col-12 col-md-6 CondoFeesmain">
                                       <br>
                                       <label    class=" form-control-label">Property Management Company </label>
                                       <input type="text"  class="form-control form-control form-control-solid property_management_company" name="property_management_company"  value="">
                                   </div>
                                   <div id="RealtorPayment" class="col-12 col-md-6 RealtorPaymentmain">
                                       <br>
                                       <label    class=" form-control-label">Realtor Name </label>
                                       <input type="text"  class="form-control form-control form-control-solid realtor_name" name="realtor_name" value="">
                                   </div>
                                   <div id="MortgageLoc" class="col-12 col-md-6 MortgageLocmain">
                                       <br>
                                       <label    class=" form-control-label">Bank/Creditor Name </label>
                                       <input type="text"  class="form-control form-control form-control-solid bank_creditor" name="bank_creditor" value="">
                                   </div>
                                   <div  id="OtherPayment" class="col-12 col-md-6 OtherPaymentmain">
                                       <br>
                                       <label  class=" form-control-label"> Name </label>
                                       <input type="text"  class="form-control form-control form-control-solid payment_name" name="payment_name" value="">
                                   </div> -->


                                <div id="paymentAmount"  class="col-12 col-md-6 PropertyTaxmain CreditCardmain BrokerFeemain CondoFeesmain RealtorPaymentmain OtherPaymentmain MortgageLocmain LineOfCreditmain">
                                    <br>
                                    <label    class=" form-control-label">Amount</label>
                                    <div class="input-group input-group-lg input-group-solid">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                                                <i class="la la-dollar"></i>
                                                                            </span>
                                        </div>
                                        <input type="number"  class="form-control form-control form-control-solid payment_amount" name="payment_amount" value="">
                                    </div>
                                </div>

                                <div id="paymentAccountNumber" class="col-12 col-md-6 OtherPaymentmain MortgageLocmain LineOfCreditmain CreditCardmain">

                                    <br>
                                    <label   class=" form-control-label">Account Number</label>
                                    <input type="text"  class="form-control form-control form-control-solid account_number" name="account_number" value="">
                                </div>

                                <div  id="paymentEmail"  class="col-12 col-md-6 BrokerFeemain CondoFeesmain RealtorPaymentmain OtherPaymentmain">
                                    <br>
                                    <label  class=" form-control-label">E-mail</label>
                                    <input type="text"  class="form-control form-control form-control-solid payment_email" name="payment_email" value="">
                                </div>

                                <div  id="paymentPayableTo"  class="col-12 col-md-6 PropertyTaxmain CreditCardmain BrokerFeemain CondoFeesmain RealtorPaymentmain OtherPaymentmain  ">
                                    <br>
                                    <label  class=" form-control-label">Payable To</label>
                                    <input type="text"  class="form-control form-control form-control-solid payable_to" name="payable_to" value="">
                                </div>

                                <div  id="PaymentMailingAddress"  class="col-12 col-md-6 PropertyTaxmain CreditCardmain BrokerFeemain CondoFeesmain RealtorPaymentmain OtherPaymentmain  ">
                                    <br>
                                    <label  class=" form-control-label">Mailing Address</label>
                                    <input type="text"  class="form-control form-control form-control-solid mailing_address" name="mailing_address" value="">
                                </div>

                                <div  id="PaymentCity"  class="col-12 col-md-6 PropertyTaxmain CreditCardmain BrokerFeemain CondoFeesmain RealtorPaymentmain OtherPaymentmain  ">
                                    <br>
                                    <label  class=" form-control-label">City</label>
                                    <input type="text"  class="form-control form-control form-control-solid city" name="city" value="">
                                </div>

                                <div  id="paymentPostalCode"  class="col-12 col-md-6 PropertyTaxmain CreditCardmain BrokerFeemain CondoFeesmain RealtorPaymentmain OtherPaymentmain  ">
                                    <br>
                                    <label  class=" form-control-label">Postal Code</label>
                                    <input type="text"  class="form-control form-control form-control-solid postal_code" name="postal_code" value="">
                                </div>


                                <div id="paymentStatement"  class="col-12 col-md-12 PropertyTaxmain CreditCardmain BrokerFeemain RealtorPaymentmain MortgageLocmain LineOfCreditmain OtherPaymentmain">
                                    <br>

                                    <label class="form-control-label">Upload Statement </label>

                                    <a style="width: 100%" class="btnfile dropzone-select btn btn-light-primary font-weight-bold btn-sm dz-clickable" data-content="four" data-col="6">Attach Files</a>
                                    <input type="file" class="form-control form-control-lg form-control-solid fileElementId-four" name="payment_statement">
                                    <br>
                                    <br>


                                </div>
                                <div class="col-12 col-md-12">

                                    <div class="fileName-four row mt-10">  </div>
                                </div>

                                <!-- Mutual Feilds-->



                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary mr-2" onclick="return submitForm('addAccountForm');" >Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>

            </div>

        </div>
    </div>

    <div class="modal fade" id="add_real_estate_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <!--begin::Form-->
                    <form id="addRealtorForm" class="form" method="POST" action="<?php echo e(route('realtor.store')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">

                            <div id="realtor-information" class="row form-group">

                                <input hidden type="text" class="form-control form-control form-control-solid realtorid" name="realtorid" value="0">
                                <input hidden type="text" class="form-control form-control form-control-solid fileid" name="fileid" value="<?php echo e(request()->segment(2)); ?>">

                                <div class="col-12 col-md-12 ">
                                    <br>
                                    <label class=" form-control-label">Real Estate Team Member</label>

                                    <?php $fileinf = \App\Files::where('id' , request()->segment(2))->first();  ?>
                                    <?php if($fileinf['file_type'] == "Sale"): ?>

                                        <select id="realtor_selectmain" name="realtor_type"  data-id="main" class="form-control form-control-lg form-control-solid realtor_select" required>
                                            <option disabled selected value="" class="form-control-lg form-control-solid ">Please select</option>
                                            <option  data-number="10" data-id="main" value="Seller's Realtor" class="form-control-lg form-control-solid">My Realtor</option>
                                            <option  data-number="10" data-id="main"  value="Buyer's Realtor" class="form-control-lg form-control-solid">Buyer's Realtor</option>
                                            <option value="Other" data-id="main"   data-number="5" class="form-control-lg form-control-solid">Other</option>
                                        </select>

                                    <?php elseif($fileinf['file_type'] == "Purchase"): ?>

                                        <select id="realtor_selectmain" name="realtor_type"  data-id="main" class="form-control form-control-lg form-control-solid realtor_select" required>
                                            <option disabled selected value="" class="form-control-lg form-control-solid ">Please select</option>
                                            <option  data-number="10" data-id="main" value="Buyer's Realtor" class="form-control-lg form-control-solid">My Realtor</option>
                                            <option  data-number="10" data-id="main" value="Seller's Realtor" class="form-control-lg form-control-solid">Seller's Realtor</option>
                                            <option  data-number="10" data-id="main" value="Mortgage Broker" class="form-control-lg form-control-solid">My Mortgage Broker</option>
                                            <option  value="Other"  data-number="5" data-id="main" class="form-control-lg form-control-solid">Other</option>
                                        </select>
                                    <?php else: ?>

                                        <select id="realtor_selectmain" name="realtor_type"  data-id="main" class="form-control form-control-lg form-control-solid realtor_select" required>
                                            <option disabled selected value="" class="form-control-lg form-control-solid ">Please select</option>
                                            <option data-number="10" data-id="main" value="Mortgage Broker" class="form-control-lg form-control-solid">My Mortgage Broker</option>
                                            <option  value="Other"  data-number="5" data-id="main" class="form-control-lg form-control-solid">Other</option>
                                        </select>

                                    <?php endif; ?>

                                </div>

                                <div class="col-12 col-md-6 ">
                                    <br>
                                    <label  class=" form-control-label">First Name</label>
                                    <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid realtor_first_name" name="realtor_first_name" value="">
                                </div>
                                <div class="col-12 col-md-6 ">
                                    <br>
                                    <label  class=" form-control-label">Last Name</label>
                                    <input style="text-transform: capitalize"  type="text" class="form-control form-control form-control-solid realtor_last_name" name="realtor_last_name" value="">
                                </div>

                                <div class="col-12 col-md-6 ">
                                    <br>
                                    <label  class=" form-control-label">Phone</label>
                                    <input type="text" class="form-control form-control form-control-solid realtor_phone" name="realtor_phone" value="">
                                </div>

                                <div class="col-12 col-md-6 ">
                                    <br>
                                    <label class=" form-control-label">E-mail</label>
                                    <input type="text" class="form-control form-control form-control-solid realtor_email" name="realtor_email" value="">
                                </div>

                                <div class="col-12 col-md-6">
                                    <br>
                                    <label class=" form-control-label">Gender</label>
                                    <br/>
                                    <label class="officer-label float-left" style="margin-right: 10px">
                                        <input type="radio" name="realtor_gender" value="male" class="card-input-officers-element realtor_gender"  />
                                        <div style="" class="card-input-apro col-md-12">
                                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>
                                        </div>
                                    </label>
                                    <label class="officer-label float-left">
                                        <input type="radio" name="realtor_gender" value="female" class="card-input-officers-element realtor_gender"   />
                                        <div style="" class="card-input-apro col-md-12">
                                            <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>
                                        </div>
                                    </label>
                                </div>


                                <div hidden class="col col-md-12 com_realtormain ">
                                    <br>
                                    <br>
                                    <label style="font-weight: 600"  class=" form-control-label">Commission Information</label>
                                </div>
                                <div hidden class="col-12 col-md-6 com_realtormain ">
                                    <br>
                                    <label class=" form-control-label">Total Commission</label>
                                    <div class="input-group input-group-lg input-group-solid">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="la la-dollar"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control form-control form-control-solid realtor_total_commission" name="realtor_total_commission" value="">
                                    </div>
                                </div>
                                <div hidden class="col-12 col-md-6 com_realtormain  ">
                                    <br>
                                    <label class=" form-control-label">Percentage Commission</label>
                                    <input type="text" class="form-control form-control form-control-solid realtor_percentage_commission" name="realtor_percentage_commission" value="">
                                </div>

                            </div>


                        </div>
                        <div class="card-footer">
                            <button type="button" class="btn btn-primary mr-2"  onclick="return submitForm('addRealtorForm');"  >Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>

            </div>

        </div>
    </div>


    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
        <span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
        <!--end::Svg Icon-->
			</span>
    </div>
    <!--end::Scrolltop-->

</div>


<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#1BC5BD", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
<!--end::Global Config-->

<!--begin::Global Theme Bundle(used by all pages)-->
<script src="<?php echo e(asset('plugins/global/plugins.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('/plugins/custom/prismjs/prismjs.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('js/scripts.bundle.js')); ?>"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src="<?php echo e(asset('/plugins/custom/fullcalendar/fullcalendar.bundle.js')); ?>"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="<?php echo e(asset('js/pages/widgets.js')); ?>"></script>


<?php echo $__env->yieldContent('scripts'); ?>


<script>
    // Class definition

    var KTFileAddSale = function () {
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
                clickableSteps: true  // allow step clicking

            });

            // Validation before going to next page
            _wizardObj.on('change', function (wizard) {

                if (wizard.getStep() > wizard.getNewStep()) {
                    return; // Skip if stepped back
                }

                // Validate form before change wizard step
                var validator = _validations[wizard.getStep() - 1]; // get validator for current step

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
                    text: "Congrats on starting a new file! Please confirm the form submission.",
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

                        var loading = new KTDialog({
                            'type': 'loader',
                            'placement': 'top center',
                            'message': 'Preparing your file ...'
                        });

                        loading.show();

                        _formEl.submit(); // Submit form


                    }
                    else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: "Your form has not been submitted!.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-primary"
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


                            email: {
                                validators: {
                                    notEmpty: {
                                        message: 'Email is required'
                                    },
                                    emailAddress: {
                                        message: 'Please enter a valid email address.'
                                    }
                                }
                            }

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
                _wizardEl = KTUtil.getById('kt_file_add_sale');
                _formEl = KTUtil.getById('kt_file_sale_add_form');

                _initWizard();
                _initValidation();
            }
        };
    }();
    var KTFileAddPurchase = function () {
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
                clickableSteps: true  // allow step clicking

            });

            // Validation before going to next page
            _wizardObj.on('change', function (wizard) {

                if (wizard.getStep() > wizard.getNewStep()) {
                    return; // Skip if stepped back
                }

                // Validate form before change wizard step
                var validator = _validations[wizard.getStep() - 1]; // get validator for current step

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
                    text: "Congrats on starting a new file! Please confirm the form submission.",
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

                        var loading = new KTDialog({
                            'type': 'loader',
                            'placement': 'top center',
                            'message': 'Preparing your file ...'
                        });

                        loading.show();

                        _formEl.submit(); // Submit form


                    }
                    else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: "Your form has not been submitted!.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-primary"
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


                            email: {
                                validators: {
                                    notEmpty: {
                                        message: 'Email is required'
                                    },
                                    emailAddress: {
                                        message: 'Please enter a valid email address.'
                                    }
                                }
                            }

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
                _wizardEl = KTUtil.getById('kt_file_add_purchase');
                _formEl = KTUtil.getById('kt_file_purchase_add_form');

                _initWizard();
                _initValidation();
            }
        };
    }();
    var KTFileAddRefinance = function () {
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
                clickableSteps: true  // allow step clicking

            });

            // Validation before going to next page
            _wizardObj.on('change', function (wizard) {

                if (wizard.getStep() > wizard.getNewStep()) {
                    return; // Skip if stepped back
                }

                // Validate form before change wizard step
                var validator = _validations[wizard.getStep() - 1]; // get validator for current step

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
                    text: "Congrats on starting a new file! Please confirm the form submission.",
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

                        var loading = new KTDialog({
                            'type': 'loader',
                            'placement': 'top center',
                            'message': 'Preparing your file ...'
                        });

                        loading.show();

                        _formEl.submit(); // Submit form


                    }
                    else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: "Your form has not been submitted!.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-primary"
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
//                         Step 2
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


                            email: {
                                validators: {
                                    notEmpty: {
                                        message: 'Email is required'
                                    },
                                    emailAddress: {
                                        message: 'Please enter a valid email address.'
                                    }
                                }
                            }

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
                _wizardEl = KTUtil.getById('kt_file_add_refinance');
                _formEl = KTUtil.getById('kt_file_refinance_add_form');

                _initWizard();
                _initValidation();
            }
        };
    }();

    jQuery(document).ready(function () {


        $("body").on("change" , ".client_bank_name_select", function(){

            var id = $(this).data("content");

            var val = $(this).val();

            if(val == "Other"){

                $('.client_tempo_bank_name-'+id).css('display' ,'block');

                $('.client_tempo_bank_name-'+id).val('');

            }else{
                $('.client_tempo_bank_name-'+id).css('display' ,'none');


                $('.client_tempo_bank_name-'+id).val(val);

            }

        })

        $("input[name$='used_realtor']").click(function(){

            var inputval = $(this).data("content");

            if(inputval > 10){

                // no
                $(".realtorinfo").hide();


            }else{

                // yes
                $(".realtorinfo").show();
            }


        });

        $("input[name$='mort_or_bank']").click(function(){

            var inputval = $(this).data("content");

            if(inputval > 10){

                // no
                $('.mortqval').val('bank')
                $(".mortgagepartinfo").hide();


            }else{

                // yes
                $('.mortqval').val('mort')

                $(".mortgagepartinfo").show();
            }


        });


        KTFileAddRefinance.init();
        KTFileAddPurchase.init();
        KTFileAddSale.init();


        $('#firstLoginTermsModal').modal('show');

        $("body").on("click" , '.open_delete_modal' , function(e){


            var action = $(this).data('action');

            $('#delete_record_btn').attr('href', action);

        });

        $("body").on("click" ,'.single-wizard-homeowner' , function(){

            $('.owner-sale-info-part').addClass('homeOwnerInfoPart-1');
            $('.owner-sale-id-part').addClass('homeOwnerIdPart-1');
            $('.owner-sale-address-part').addClass('homeOwnerAddressPart-1');
            $('.owner-sale-review-part').addClass('homeowner-review-part-1');

            $('.howmanyHomeowners').css('display' , 'none')

        });

        $("body").on("click" , '.single-wizard-homeowner-purchase' , function(){


            $('.owner-purchase-info-part').addClass('homeOwnerInfoPartPurchase-1');
            $('.owner-purchase-id-part').addClass('homeOwnerIdPartPurchase-1');
            $('.owner-purchase-review-part').addClass('homeownerpurchase-review-part-1');

            $('.howmanyHomeownersPurchase').css('display' , 'none')

        });





    });

    function hideSignatureBox(id){

        $('#'+id).find('.fullnametxt').hide();
        $('#'+id).find('.fullnametxt-title').hide();

    }

</script>

<script>
    $(document).ready(function(){

        var counter = 1;

        var inputcounter = 1;

        $(document).on('click','.btnAddfile', function(){

            var id = $(this).data('content');
            var col = $(this).data('col');
            var name = $(this).data('name');
            var multi = $(this).data('multi');

            $('.fileElementId-'+id).trigger('click');

            if(counter == 1){

                buildFile(id , col , name , multi);
                counter++;
            }



        });

        function buildFile(id,col,names , multi){

            $(document).on('change','.fileElementId-'+id,function(){

                if(multi =="yes"){

                    if(inputcounter>0){

                        var $this = $(this);
                        $this.clone().insertAfter($this);
                        $this.hide();
                        $this.attr('name', names);
                        $this.removeClass('fileElementId-'+id);
                        $this.addClass('fileElementId-'+id+'-'+inputcounter);

                    }
                    inputcounter++;


                }

                for (var i = 0; i < this.files.length; ++i) {

                    var name = this.files.item(i).name;

                    $('.fileName-'+id).append('<div class="col-xl-'+col+' col-lg-'+col+' col-md-6 col-sm-12 filetoremo">\n' +
                        '                                                    <!--begin::Card-->\n' +
                        '                                                    <div class="card card-custom gutter-b card-stretch">\n' +
                        '                                                        <div class="card-header border-0">\n' +
                        '                                                            <h3 class="card-title"></h3>                                                                                    <div class="card-toolbar">\n' +
                        '                                                                                        <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">\n' +
                        '                                                                                            <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">\n' +
                        '                                                                                                <i class="ki ki-bold-more-hor"></i>\n' +
                        '                                                                                            </a>\n' +
                        '                                                                                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">\n' +
                        '                                                                                                <!--begin::Navigation-->\n' +
                        '                                                                                                <ul class="navi navi-hover py-0">\n' +
                        '                                                                                                   ' +
                        '                                                                                                    <li class="navi-item">\n' +
                        '                                                                                                        <a style="cursor:pointer" class="navi-link removefilen" data-countput="'+inputcounter+'">\n' +
                        '<span class="navi-icon">\n' +
                        '<i class="flaticon2-list-3"></i>\n' +
                        '</span>\n' +
                        '                                                                                                            <span class="navi-text">Delete</span>\n' +
                        '                                                                                                        </a>\n' +
                        '                                                                                                    </li>\n' +
                        '                                                                                                </ul>                                                                                <!--end::Navigation-->\n' +
                        '                                                                                            </div>\n' +
                        '                                                                                        </div>\n' +
                        '                                                                                    </div>\n\n' +
                        '                                                            \n' +
                        '                                                        </div>\n' +
                        '                                                        <div class="card-body">\n' +
                        '                                                            <div class="d-flex flex-column align-items-center">\n' +
                        '                                                                <!--begin: Icon-->\n' +
                        '                                                                <img alt="" class="max-h-65px" src="<?php echo e(asset('media/doc.svg')); ?>">\n' +
                        '                                                                <!--end: Icon-->\n' +
                        '                                                                <!--begin: Tite-->\n' +
                        '                                                                <a style="overflow: hidden;\n' +
                        '    width: 100%;" class="text-dark-75 font-weight-bold mt-15 font-size-lg ">'+name+'</a>\n' +
                        '                                                                <!--end: Tite-->\n' +
                        '                                                            </div>\n' +
                        '                                                        </div>\n' +
                        '                                                    </div>\n' +
                        '                                                </div>\n');







                }





            });

            $(document).on('click','.removefilen',function(){
                $(this).closest(".filetoremo").remove();
                var inputcounters = $(this).data("countput");
                inputcounters = inputcounters-1;
                $('.fileElementId-'+id+'-'+inputcounters).remove();

            });
        }


        $('.open_edit_lawyer_modal').click(function(){

            $('#lawyer_status').val('pending');

        });

        $("body").on("click", ".showSecSub", function () {

            var btn = $('.sec_submit');

            btn.show();

        });

        $("body").on("click", ".hideSecSub", function () {

            var btn = $('.sec_submit');

            btn.hide();

        });

        $("body").on("click" , '.side-link' , function(){

            localStorage.clear();
        });

        $('.terms_agree_btn').click(function(){

            $.ajax({
                url:"<?php echo e(route('user.terms.agree')); ?>",
                method:"POST",
                data:{
                    fileid:'<?php echo request()->segment(2); ?>',
                    _token:'<?php echo csrf_token(); ?>'} ,
                success:function(data){

                    $('#termsModal').modal('hide');

                }});



        });

        $('.terms_agree_first_login_btn').click(function(){

            $.ajax({
                url:"<?php echo e(route('user.first_login_terms.agree')); ?>",
                method:"POST",
                data:{
                    _token:'<?php echo csrf_token(); ?>'} ,
                success:function(data){

                    $('#firstLoginTermsModal').modal('hide');

                }});



        });

        $('#closingpack_title_main').on('keyup' , function(){

            $('#closingpack_title').val($('#closingpack_title_main').val());

        });

        $('#signpack_title_main').on('keyup' , function(){

            $('#signpack_title').val($('#signpack_title_main').val());

        });


    })
</script>

<script>
    // Client forms
    $(function () {

        var clientNo = 0;

        $("body").on("click", ".remove-client", function () {


            $(this).closest("#client-info-part").remove();
            clientNo--;


        });


        $("body").on("click", ".addNewClient", function () {

            var fileType = $(this).data('file');
            clientNo++;

            var div = $("<div />");
            div.html(GetClient(clientNo));
            $(".newProjectClientsCount"+fileType).append(div);
            div.fadeIn('slow');


        });


    });

    function GetClient(value){

        return '                                                        <div id="client-info-part" class="row form-group client-info-part">\n' +
            '\n' +
            '                                                            <div  class="col-12 col-md-12 ">\n' +
            '                                                                <a  href="#" class="btn btn-light-danger float-right font-weight-bold ml-2 remove-client">\n' +
            '                                                                    <i class="la la-trash-o"></i>\n\n' +
            '                                                                    Delete\n' +
            '                                                                </a>\n' +
            '                                                            </div>\n' +
            '\n' +
            '                                                            <div class="col-12 col-md-6">\n' +
            '                                                                <br>\n' +
            '                                                                <label class=" form-control-label">First Name</label>\n' +
            '                                                                <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  first_name" name="first_name[]" type="text" value=" "  />' +
            ' <input hidden style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  first_name" name="counter[]" type="text" value=" '+value+'"  />\n' +
            '                                                            </div>\n' +
            '\n' +
            '                                                            <div class="col-12 col-md-6">\n' +
            '                                                                <br>\n' +
            '                                                                <label class=" form-control-label">Last Name</label>\n' +
            '                                                                <input style="text-transform: capitalize"  class="form-control form-control-lg form-control-solid  last_name " name="last_name[]" type="text" value=" "  />\n' +
            '                                                            </div>\n' +
            '\n' +
            '                                                            <div class="col-12 col-md-6">\n' +
            '                                                                <br>\n' +
            '                                                                <label  class=" form-control-label">E-mail</label>\n' +
            '                                                                <input type="email" class="form-control form-control-lg form-control-solid  email " name="email[]"  value=" "  />\n' +
            '\n' +
            '                                                            </div>\n' +
            '\n' +
            '                                                            <div class="col-12 col-md-6">\n' +
            '                                                                <br>\n' +
            '                                                                <label class=" form-control-label">Phone</label>\n' +
            '                                                                <input type="text" class="form-control form-control-lg form-control-solid  phone " name="phone[]"  value=" "  />\n' +
            '                                                            </div>\n' +
            '\n' +
            '                                                            <div class="col-12 col-md-12">\n' +
            '                                                                <br>\n' +
            '                                                                <label class=" form-control-label">Gender</label>\n' +
            '                                                                <br/>\n' +
            '                                                                <label class="officer-label float-left" style="margin-right: 10px">\n' +
            '                                                                    <input type="radio" name="gender'+value+'" value="male" class="card-input-officers-element gender" />\n' +
            '                                                                    <div style="" class="card-input-apro col-md-12">\n' +
            '                                                                        <span class="label label-lg label-light-danger label-inline font-weight py-4">Male</span>\n' +
            '                                                                    </div>\n' +
            '                                                                </label>\n' +
            '                                                                <label class="officer-label float-left">\n' +
            '                                                                    <input type="radio" name="gender'+value+'" value="female" class="card-input-officers-element gender" />\n' +
            '                                                                    <div style="" class="card-input-apro col-md-12">\n' +
            '                                                                        <span class="label label-lg label-light-success label-inline font-weight py-4">Female</span>\n' +
            '                                                                    </div>\n' +
            '                                                                </label>\n' +
            '                                                            </div>\n' +
            '                                                           \n' +
            '                                                            <div class="col-12 col-md-12">\n' +
            '                                                                <br>\n' +
            '                                                                <hr>\n' +
            '                                                            </div>\n' +
            '\n' +
            '                                                           \n' +
            '                                                        </div>\n'
    }

</script>

<script type="text/javascript">

// most of forms use this ! , to show popup and validate feilds
    function submitForm(x){

        Swal.fire({
            text: "Please confirm to submit.",
            icon: "success",
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: "Yes, submit!",
            cancelButtonText: "No, cancel",
            customClass: {
                confirmButton: "btn font-weight-bold btn-primary",
                cancelButton: "btn font-weight-bold btn-default"
            }
        }).
        then(function (result) {



            /// code for unblocking loading spinner

            //KTApp.unblockPage();

            if(result.value) {

                KTApp.blockPage({
                    state: 'danger',
                    message: 'Please wait...'
                });

                    if(x == "addAccountForm"){
                        var paymenttype = $('#'+x).find('.payment_type :selected').val();

                        if(paymenttype == ''){

                            Swal.fire({
                                text: "Please choose payment type.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-primary"
                                }
                            });

                        }else{

                            $('#'+x).submit();

                        }

                    }
                    else if(x =="addRealtorForm") {

                        var realtorType = $('#'+x).find('.realtor_select :selected').val();

                        if(realtorType == ''){

                            Swal.fire({
                                text: "Please choose your realtor type.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-primary"
                                }
                            });

                        }else{

                            $('#'+x).submit();

                        }


                    }
                    else if(x =="addFileRequestForm") {

                        var file_request_title = $('#'+x).find('.file_request_title').val();

                        if(file_request_title == ''){

                            Swal.fire({
                                text: "Please fill the fields.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-primary"
                                }
                            });

                        }else{

                            $('#'+x).submit();

                        }


                    }
                    else {

                        $('#'+x).submit();

                    }

            }


        });

    }
</script>


<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
<?php /**PATH /home/u361969929/domains/bourne.shadowlabs.ca/resources/views/layouts/master.blade.php ENDPATH**/ ?>