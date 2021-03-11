

<?php $__env->startSection('styles'); ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

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
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">User View</h2>
                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center flex-wrap">
                <!--begin::Button-->

                <?php if(auth()->user()->type == "Admin"): ?>
                    <a href="#" class="btn btn-primary btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2" data-toggle="modal" data-target="#add_project_modal"  >
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
                <?php endif; ?>

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
                    <span class="d-none d-md-inline"><?php echo e(auth()->user()->name); ?> - <?php echo e(auth()->user()->type); ?></span>

                </a>


                <a href="#" class="btn btn-primary btn-icon font-weight-bold" data-toggle="modal" data-target="#kt_chat_modal" >
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
            <!--begin::Profile Account Information-->
            <div class="d-flex flex-row">
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
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                    <div class="symbol-label" style="background-image:url(<?php echo e(asset('uploads/profile_pictures/'. $user->image)); ?>)"></div>
                                    <!--i class="symbol-badge bg-success"></i-->
                                </div>
                                <div>
                                    <a  class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary"><?php echo e($user->name); ?> <?php echo e($user->last_name); ?></a>

                                    
                                        

                                    
                                </div>
                            </div>
                            <!--end::User-->
                            <!--begin::Contact-->
                            <div class="py-9">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Email:</span>
                                    <a class="text-muted text-hover-primary"><?php echo e($user->email); ?></a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Phone Number:</span>
                                    <span class="text-muted"><?php echo e($user->phone); ?></span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="font-weight-bold mr-2">City:</span>
                                    <span class="text-muted"><?php echo e($user->city); ?></span>
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
                                        <span class="navi-text font-size-lg">User Information</span>
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
                                        <span class="navi-text font-size-lg">User Files</span>
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
                                <form  method="post" action="<?php echo e(route('update.user.info')); ?>" enctype="multipart/form-data" accept-charset="utf-8">
                                    <?php echo csrf_field(); ?>
                                    <div class="card card-custom">
                                        <!--begin::Header-->
                                        <div class="card-header py-3">
                                            <div class="card-title align-items-start flex-column">
                                                <h3 class="card-label font-weight-bolder text-dark">User Information</h3>
                                                <span class="text-muted font-weight-bold font-size-sm mt-1">Change Your Personal Informations</span>
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
                                                <h5 class="font-weight-bold mb-6">User Information</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(<?php echo e(asset('uploads/profile_pictures/'. $user->image)); ?>)">
                                                    <div class="image-input-wrapper" style="background-image: none">
                                                    </div>
                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="profile_pic" id="profile_avatar" accept=".png, .jpg, .jpeg">
                                                        <input type="hidden" name="profile_avatar_remove" id="profile_avatar_remove" value="0">
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
                                                <input type="text" name="first_name" value="<?php echo e($user->name); ?>" id="first_name" required class="form-control form-control-lg form-control-solid">
                                                <input type="hidden" name="userid" value="<?php echo e(request()->segment(2)); ?>">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="text" name="last_name" value="<?php echo e($user->last_name); ?>" id="last_name" required class="form-control form-control-lg form-control-solid">
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
                                                    <input type="text" name="phone" value="<?php echo e($user->phone); ?>" id="phone" required class="form-control form-control-lg form-control-solid">
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
                                                    <input type="email" name="email" value="<?php echo e($user->fake_email); ?>" id="email" required class="form-control form-control-lg <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-control-solid" >
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
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Address Line 1</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="text" name="address_line_one" value="<?php echo e($user->address_line_one); ?>" id="adr" required class="form-control form-control-lg form-control-solid">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Address Line 2</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="text" name="address_line_two" value="<?php echo e($user->address_line_two); ?>" id="adr2"  class="form-control form-control-lg form-control-solid">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">City</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="text" name="city" value="<?php echo e($user->city); ?>" id="city" required class="form-control form-control-lg form-control-solid">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Postal Code</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="text" name="postal_code" value="<?php echo e($user->postal_code); ?>" id="zip" required="" class="form-control form-control-lg form-control-solid">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Province</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="text" name="province" value="<?php echo e($user->province); ?>" id="province" required="" class="form-control form-control-lg form-control-solid">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Date of Birth</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <input type="date" name="birth_date" value="<?php echo e($user->birth_date); ?>" id="birthdate" required="" class="form-control form-control-lg form-control-solid" im-insert="true">
                                            </div>
                                        </div>
                                        <?php if((auth()->user()->type == "Admin" ||
                                           auth()->user()->type == "Realtor" ||
                                           auth()->user()->type == "MortgageBroker" ) &&
                                           ( $user->type == "Realtor" || $user->type == "MortgageBroker") ): ?>
                                            <div class="form-group row">
                                                <label class="col-xl-3 col-lg-3 col-form-label">How many transactions did you complete last year?</label>


                                                <br>
                                                <?php if($user->type == "Realtor" ): ?>
                                                    <label class="officer-label realtorTransactions" style="padding: 0 !important;">
                                                        <input type="radio" name="transactions" value="0-3"  class="card-input-officers-element" <?php if($user['transactions'] == "0-3"): ?> checked <?php endif; ?> />
                                                        <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px; margin-left: 10px" class="card-input col-md-12">
                                                            <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content" >
                                                                <h5 style="font-weight: 500" >
                                                                    <span style="display: block;">0-3</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label class="officer-label realtorTransactions" style="padding: 0 !important;">
                                                        <input type="radio" name="transactions" value="4-8"  class="card-input-officers-element" <?php if($user['transactions'] == "4-8"): ?> checked <?php endif; ?> />
                                                        <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 15px" class="card-input col-md-12">
                                                            <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                                <h5 style="font-weight: 500" >
                                                                    <span style="display: block;">4-8</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label class="officer-label realtorTransactions" style="padding: 0 !important;">
                                                        <input type="radio" name="transactions" value="9-15"  class="card-input-officers-element" <?php if($user['transactions'] == "9-15"): ?> checked <?php endif; ?> />
                                                        <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 20px" class="card-input col-md-12">
                                                            <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                                <h5 style="font-weight: 500" >
                                                                    <span style="display: block;">9-15</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label class="officer-label realtorTransactions" style="padding: 0 !important;">
                                                        <input type="radio" name="transactions" value="16+"  class="card-input-officers-element" <?php if($user['transactions'] == "16+"): ?> checked <?php endif; ?> />
                                                        <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 25px" class="card-input col-md-12">
                                                            <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                                <h5 style="font-weight: 500" >
                                                                    <span style="display: block;">16+</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </label>
                                                <?php elseif($user->type == "MortgageBroker"): ?>
                                                    <label class="officer-label mortTransactions" style="padding: 0 !important;">
                                                        <input type="radio" name="transactions" value="0-5"  class="card-input-officers-element"  <?php if($user['transactions'] == "0-5"): ?> checked <?php endif; ?>/>
                                                        <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 10px" class="card-input col-md-12">
                                                            <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                                <h5 style="font-weight: 500" >
                                                                    <span style="display: block;">0-5</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label class="officer-label mortTransactions" style="padding: 0 !important;">
                                                        <input type="radio" name="transactions" value="6-15"  class="card-input-officers-element" <?php if($user['transactions'] == "6-15"): ?> checked <?php endif; ?> />
                                                        <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 15px" class="card-input col-md-12">
                                                            <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                                <h5 style="font-weight: 500" >
                                                                    <span style="display: block;">6-15</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label class="officer-label mortTransactions" style="padding: 0 !important;">
                                                        <input type="radio" name="transactions" value="16-30"  class="card-input-officers-element" <?php if($user['transactions'] == "16-30"): ?> checked <?php endif; ?> />
                                                        <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 20px" class="card-input col-md-12">
                                                            <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                                <h5 style="font-weight: 500" >
                                                                    <span style="display: block;">16-30</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label class="officer-label mortTransactions" style="padding: 0 !important;">
                                                        <input type="radio" name="transactions" value="31-50"  class="card-input-officers-element" <?php if($user['transactions'] == "31-50"): ?> checked <?php endif; ?> />
                                                        <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 25px" class="card-input col-md-12">
                                                            <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                                <h5 style="font-weight: 500" >
                                                                    <span style="display: block;">31-50</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label class="officer-label mortTransactions" style="padding: 0 !important;">
                                                        <input type="radio" name="transactions" value="51+"  class="card-input-officers-element" <?php if($user['transactions'] == "51+"): ?> checked <?php endif; ?> />
                                                        <div style="padding: 10px 11px;  margin: 0;   padding-bottom: 4px;margin-left: 30px" class="card-input col-md-12">
                                                            <div style="padding-left: 0;padding: 5px 6px 1px 6px !important;" class="officer-content">
                                                                <h5 style="font-weight: 500" >
                                                                    <span style="display: block;">51+</span>
                                                                </h5>
                                                            </div>
                                                        </div>
                                                    </label>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <!--end::Body-->
                                    <div class="card-header py-3">
                                        <div class="card-toolbar">
                                            <button type="submit" class="btn btn-success mr-2 save_profile_btn">Save</button>
                                            <button type="reset" class="btn btn-primary mr-2 save_profile_btn">Cancel</button>
                                        </div>
                                        <br>
                                    </div>

                                </form>
                                <!--end::Form-->

                            </div>
                        </div>

                        <div class="tab-pane" id="useFiles">

                            <div class="row">
                                <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-xl-6">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b card-stretch">
                                            <!--begin::Body-->
                                            <div class="card-body">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Pic-->
                                                    <?php
                                                    $arrayOfColors=array('#FF6633', '#FFB399', '#FF33FF', '#FFFF99', '#00B3E6',
                                                        '#E6B333', '#3366E6', '#999966', '#99FF99', '#B34D4D',
                                                        '#80B300', '#809900', '#E6B3B3', '#6680B3', '#66991A',
                                                        '#FF99E6', '#CCFF1A', '#FF1A66', '#E6331A', '#33FFCC',
                                                        '#66994D', '#B366CC', '#4D8000', '#B33300', '#CC80CC',
                                                        '#66664D', '#991AFF', '#E666FF', '#4DB3FF', '#1AB399',
                                                        '#E666B3', '#33991A', '#CC9999', '#B3B31A', '#00E680',
                                                        '#4D8066', '#809980', '#E6FF80', '#1AFF33', '#999933',
                                                        '#FF3380', '#CCCC00', '#66E64D', '#4D80CC', '#9900B3',
                                                        '#E64D66', '#4DB380', '#FF4D4D', '#99E6E6', '#6666FF');
                                                    $random_key = array_rand($arrayOfColors);
                                                    $random_value = $arrayOfColors[$random_key];
                                                    ?>
                                                    <div class="flex-shrink-0 mr-4 symbol symbol-65 symbol-circle">
                                                        <span style="background-color: <?php echo e($random_value); ?> !important;width: 54px !important;border-radius: 50%; height: 54px !important;" class="bullet bullet-bar bg-<?php echo e($random_value); ?> align-self-stretch"></span>

                                                        
                                                    </div>
                                                    <!--end::Pic-->
                                                    <!--begin::Info-->
                                                    <div class="d-flex flex-column mr-auto">
                                                        <!--begin: Title-->
                                                        <a  class="card-title text-hover-primary font-weight-bolder font-size-h5 text-dark mb-1"> Property <?php echo e($row->file_type); ?></a>
                                                        <span class="text-muted font-weight-bold"> <?php echo e($row->address); ?></span>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Info-->
                                                    <!--begin::Toolbar-->

                                                    <!--end::Toolbar-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Content-->
                                                <div class="d-flex flex-wrap mt-14">
                                                    <div class="mr-12 d-flex flex-column mb-7">
                                                        <span class="d-block font-weight-bold mb-4">File Opened</span>
                                                        <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text"> <?php echo e($row->created_at); ?></span>
                                                    </div>
                                                    <div class="mr-12 d-flex flex-column mb-7">
                                                        <span class="d-block font-weight-bold mb-4">Closing Date</span>
                                                        <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text"> <?php echo e($row->closing_date); ?></span>
                                                    </div>
                                                    <!--begin::Progress-->
                                                    <div class="flex-row-fluid mb-7">
                                                        <span class="d-block font-weight-bold mb-4">Progress</span>
                                                        <div class="d-flex align-items-center pt-2">
                                                            <?php

                                                            $totalpercentage= 0;

                                                            $sellersCount=0;
                                                            $all_seller_progress =0;
                                                            $all_seller_address_progress =0;
                                                            $all_id_progress = 0;
                                                            $homwowners_module_percentage=0;
                                                            $sellers= \App\Sellers::where('ref_file', $row->id)->get();
                                                            if($sellers->count() >0){

                                                                foreach($sellers as $sellerRow){
                                                                    $all_seller_progress += complete_percentage('Sellers' , 'sellers' , $sellerRow->id ,'id' , 11 , 4);
                                                                    $all_seller_address_progress += complete_percentage('ServiceAddress' , 'service_addresses' , $sellerRow->service['id'] ,'id' , 4 , 4) ;
                                                                    $id_check = \Illuminate\Support\Facades\DB::table('gov_ids')->where('ref_seller' , $sellerRow->id)->first();
                                                                    if($id_check ==null){
                                                                        $all_id_progress += 0;
                                                                    }else{
                                                                        $all_id_progress += 100;
                                                                    }
                                                                    $sellersCount++;
                                                                }
                                                                $homwowners_module_percentage =((($all_seller_progress + $all_seller_address_progress + $all_id_progress) /($sellersCount*300)) *100);

                                                            }



                                                            $buyersCount=0;
                                                            $all_buyers_progress =0;
                                                            $all_lawyers_progress =0;
                                                            $buyers_module_percentage=0;
                                                            $buyers = \App\Buyers::where('ref_file', $row->id)->get();
                                                            if($buyers->count() >0){

                                                                foreach($buyers as $buyerRow){

                                                                    $all_buyers_progress += complete_percentage('Buyers' , 'buyers' , $buyerRow['id'] ,'id' , 4 , 4);
                                                                    $all_lawyers_progress += complete_percentage('Lawyers' , 'lawyers' , $buyerRow->lawyer['id'] ,'id' , 6 , 4) ;

                                                                    $buyersCount++;
                                                                }
                                                                $buyers_module_percentage = ((($all_buyers_progress + $all_lawyers_progress ) /($buyersCount*200)) *100);

                                                            }


                                                            $paymentsCount=0;
                                                            $all_payment_percentage =0;
                                                            $payments = \App\Payment::where('ref_file' , $row->id)->where('pay_type' , 'SALE')->get(); //>
                                                            if($payments->count() >0){

                                                                foreach($payments as $paymentRow){

                                                                    if($paymentRow->type == "OtherPayment"){

                                                                        $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 10 , 10);
                                                                    }
                                                                    else if($paymentRow->type == "MortgageLoc"){

                                                                        $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 11 , 9);
                                                                    }
                                                                    else {

                                                                        $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 9 , 11);
                                                                    }

                                                                    $paymentsCount++;
                                                                }

                                                                $all_payment_percentage =((($all_payment_percentage ) /($paymentsCount*100)) *100);

                                                            }

                                                            $realtorsCount=0;
                                                            $all_realtors_percentage =0;
                                                            $realtors = \App\Realtors::where('ref_file' , $row->id)->get(); //>
                                                            if ($realtors->count() >0){
                                                                foreach($realtors as $realtorRow){

                                                                    $all_realtors_percentage += complete_percentage('Realtors' , 'realtors' , $realtorRow['id'] ,'id' , 6 , 5);

                                                                    $realtorsCount++;
                                                                }
                                                                $all_realtors_percentage =((($all_realtors_percentage ) /($realtorsCount*100)) *100);

                                                            }

                                                            $file_documents_percentage =0;
                                                            $file_documents = \App\FileDocuments::where('ref_file' , $row->id)->where('type' , 'FILE')->orderby('id', 'desc')->get(); //>
                                                            if($file_documents->count() >0){
                                                                $file_documents_percentage = 100;
                                                            }

                                                            $closing_packages_percentage =0;
                                                            $closing_packages = \App\FileDocuments::where('ref_file' , $row->id)->where('type' , 'CLOSING_PACKAGE')->orderby('id' , 'desc')->get(); //>
                                                            if($closing_packages->count() >0){
                                                                $closing_packages_percentage = 100;
                                                            }


                                                            $property_address_percentage = 0;
                                                            $property_address_percentage = complete_percentage('Props' , 'props' , $row->id ,'ref_file' , 4 , 4);
                                                            if($property_address_percentage<0){
                                                                $property_address_percentage=0;
                                                            }

                                                            $property_tax_percentage =0 ;
                                                            $property_tax_percentage = complete_percentage('PropTax' , 'prop_taxes' , $row->id ,'ref_file' , 3 , 4);
                                                            if($property_tax_percentage<0){
                                                                $property_tax_percentage=0;
                                                            }

                                                            $property_delivery_percentage =0;
                                                            $property_delivery_percentage = complete_percentage('DeliveryKey' , 'delivery_keys' , $row->id ,'ref_file' , 1 , 4);
                                                            if($property_delivery_percentage<0){
                                                                $property_delivery_percentage =0;
                                                            }


                                                            $financial_percentage= 0;
                                                            $financial_percentage = complete_percentage('FileInformation' , 'file_information' , $row->id ,'ref_file' , 4 , 4);
                                                            if($financial_percentage<0){
                                                                $financial_percentage =0;
                                                            }

                                                            $totalpercentage = ((
                                                                        $homwowners_module_percentage +
                                                                        $buyers_module_percentage +
                                                                        $all_payment_percentage +
                                                                        $all_realtors_percentage  +
                                                                        $file_documents_percentage   +
                                                                        $closing_packages_percentage  +
                                                                        $property_address_percentage   +
                                                                        $property_tax_percentage   +
                                                                        $property_delivery_percentage   +
                                                                        $financial_percentage   )  /1000 ) * 100;


                                                            if($totalpercentage <0){ $totalpercentage =0 ;}

                                                            ?>
                                                            <div class="progress progress-xs mt-2 mb-2 w-100">
                                                                <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo e(substr($totalpercentage , 0 ,4)); ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                            <span class="ml-3 font-weight-bolder"><?php echo e(substr($totalpercentage , 0 , 4)); ?>%</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Progress-->
                                                </div>
                                                <!--end::Content-->
                                                <!--begin::Text-->
                                                <p class="mb-7 mt-3">I distinguish three main text objectives.First, your objective could be merely to inform people.A second be to persuade people.</p>
                                                <!--end::Text-->
                                                <!--begin::Blog-->
                                                <div class="d-flex flex-wrap">
                                                    <!--begin: Item-->
                                                    <div class="mr-12 d-flex flex-column mb-7">
                                                        <span class="font-weight-bolder mb-4">Price</span>
                                                        <span class="font-weight-bolder font-size-h5 pt-1">
														<span class="font-weight-bold text-dark-50">$</span>249,500</span>
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-column flex-lg-fill float-left mb-7">
                                                        <span class="font-weight-bolder mb-4">Homeowners</span>
                                                        <div class="symbol-group symbol-hover">
                                                            <div class="symbol symbol-30 symbol-circle symbol-light">
                                                                <span class="symbol-label font-weight-bold"><?php echo e($row->sellers()); ?></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Blog-->
                                            </div>
                                            <!--end::Body-->
                                            <!--begin::Footer-->
                                            <div class="card-footer d-flex align-items-center">
                                                <div class="d-flex">
                                                    <div class="d-flex align-items-center mr-7">
														<span class="svg-icon svg-icon-gray-500">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Text/Bullet-list.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" fill="#000000" />
																	<path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
                                                        <a  class="font-weight-bolder text-primary ml-2"><?php echo e($row->tasks()); ?> Tasks</a>
                                                    </div>
                                                </div>
                                                <a type="button" href="<?php echo e(route('file.show' , $row->id)); ?>" class="btn btn-primary btn-sm text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto">details</a>
                                            </div>
                                            <!--end::Footer-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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



<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script src="<?php echo e(asset('js/pages/crud/file-upload/dropzonejs.js')); ?>"></script>

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


                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'Email is required'
                                },
                                emailAddress: {
                                    message: 'The value is not a valid email address'
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

    <script src="<?php echo e(asset('js/pages/widgets.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/custom/profile/profile.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/crud/forms/widgets/input-mask.js')); ?>"></script>

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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361969929/domains/bourne.shadowlabs.ca/resources/views/user_view.blade.php ENDPATH**/ ?>