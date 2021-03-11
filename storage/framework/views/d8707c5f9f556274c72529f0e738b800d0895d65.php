

<?php $__env->startSection('styles'); ?>

    <style>

      .datatable-head  .datatable-cell span{

            text-transform: uppercase;
            color: #B5B5C3 !important;
        }

      .datatable.datatable-default > .datatable-table > .datatable-head .datatable-row >
      .datatable-cell.datatable-cell-sort, .datatable.datatable-default > .datatable-table >
      .datatable-body .datatable-row > .datatable-cell.datatable-cell-sort, .datatable.datatable-default >
      .datatable-table > .datatable-foot .datatable-row > .datatable-cell.datatable-cell-sort
      {

          white-space: nowrap;
      }
      .datatable.datatable-default > .datatable-table{

          overflow-x: scroll;

      }
    </style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--begin::Subheader-->

    <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Dashboard</h2>
                    <!--end::Page Title-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center flex-wrap">
                <!--begin::Button-->

                <?php if(auth()->user()->type != "Client"): ?>
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

                                <?php if(auth()->user()->type != "MortgageBroker" ): ?>
                                    <li class="navi-item">
                                    <a href="#"  data-toggle="modal" data-target="#add_file_sale_modal"  class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon-suitcase"></i>
                                        </span>
                                        <span class="navi-text">Selling a Home</span>
                                    </a>
                                </li>
                                <?php endif; ?>

                                <?php if(auth()->user()->type == "Admin" || auth()->user()->type == "MortgageBroker" ): ?>
                                    <li class="navi-item">
                                    <a href="#"  data-toggle="modal" data-target="#add_file_refinance_modal"  class="navi-link">
                                        <span class="navi-icon">
                                            <i class="flaticon-suitcase"></i>
                                        </span>
                                        <span class="navi-text">Refinance</span>
                                    </a>
                                </li>
                                <?php endif; ?>

                            </ul>
                        </div>
                    </div>
                <?php endif; ?>

                <a href="<?php echo e(route('profile')); ?>" class="btn btn-primary btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2">
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
                    <span class="d-none d-md-inline"><?php echo e(auth()->user()->name); ?> -

                        <?php
                        $str = auth()->user()->type;

                        $str_array = preg_split('/\B(?=[A-Z])/s', $str);
                        $newUserTypeFormat = "";
                        foreach ($str_array as $value) {$newUserTypeFormat .= $value . " "; }
                        ?>
                        <?php echo e($newUserTypeFormat); ?>

                    </span>

                </a>

                <a href="<?php echo e(route('messages')); ?>" class="btn btn-primary btn-icon font-weight-bold mr-2"  >
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


                <a href="#" class="btn btn-icon btn-clean btn-lg mb-1 position-relative" id="kt_quick_panel_toggle" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="" data-original-title="Notifications">
                    <span class="svg-icon svg-icon-xl">
                        <i class="text-primary flaticon2-bell-4"></i>

                    </span>
                    <span class="label label-sm label-light-danger label-rounded font-weight-bolder position-absolute top-0 right-0 mt-1 mr-1">3</span>
                </a>


                <!--end::Button-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">

      <?php if(auth()->user()->type =="Client"): ?>
        <!--begin::Client Container-->
        <div class="container">
            <!--begin::Row-->
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
                                <div class="flex-shrink-0 mr-4 symbol symbol-65 symbol-circle">
                                    <?php
                                    $arrayOfColors=array(
                                        '#f7525f', '#87cefa', '#00abe5', '#166dc2', '#00b1b8',
                                        '#a056b2', '#f05070', '#50f0d0'
                                    );
                                    $random_key = array_rand($arrayOfColors);
                                    $random_color = $arrayOfColors[$random_key];
                                    ?>
                                    <span style="background-color: <?php echo e($random_color); ?> !important;width: 54px !important;border-radius: 50%; height: 54px !important;display: flex;align-items: center;justify-content: center;" class="bullet bullet-bar bg-<?php echo e($random_color); ?> align-self-stretch">
                                            <i class="icon-2x text-white flaticon-home"></i>
                                    </span>

                                    
                                </div>
                                <!--end::Pic-->
                                <!--begin::Info-->
                                <div class="d-flex flex-column mr-auto">
                                    <!--begin: Title-->
                                    <a  href="<?php echo e(route('file.show' , $row->id)); ?>" class="side-link card-title text-hover-primary font-weight-bolder font-size-h5 text-dark mb-1"><?php echo e(isset($row->file_name)  ? $row->file_name : 'Property ' . $row->file_type); ?> </a>
                                    <span class="text-muted font-weight-bold">  <?php echo e(!empty($row->prop['address']) ? $row->prop['address'].', '  : ''); ?><?php echo e(!empty($row->prop['city']) ? $row->prop['city'].', '  : ''); ?><?php echo e(!empty($row->prop['province']) ? $row->prop['province'].', ' : ''); ?><?php echo e(!empty($row->prop['postal_code']) ? $row->prop['postal_code'] : ''); ?> </span>
                                    <!--end::Title-->
                                </div>

                                <?php if(auth()->user()->type=="Admin"): ?>
                                    <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ki ki-bold-more-hor"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right" style="">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover py-0">

                                            <li class="navi-item">
                                                <a href="#" data-toggle="modal" data-target="#edit_file_modal-<?php echo e($row->id); ?>" data-action="<?php echo e(route('file.update.name' , $row->id)); ?>" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Edit File Name</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Generate File Audit</span>
                                                </a>
                                            </li>

                                            <li class="navi-item">
                                                <a href="#" data-toggle="modal" data-target="#delete_record_modal" data-action="<?php echo e(route('file.delete' , $row->id)); ?>" data-id="<?php echo e($row->id); ?>"
                                                   class="open_delete_modal navi-link">
                                                        <span class="navi-icon">
                                                            <i class="flaticon-delete"></i>
                                                        </span>
                                                    <span class="navi-text">Delete</span>

                                                </a>
                                            </li>

                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <?php endif; ?>

                            </div>
                            <!--end::Section-->
                            <!--begin::Content-->
                            <div class="d-flex flex-wrap mt-14">
                                <?php if(auth()->user()->type == "Client"): ?>
                                <div class="mr-12 d-flex flex-column mb-7">
                                    <span class="d-block font-weight-bold mb-4">File Type</span>
                                    <span class="btn btn-light-success btn-sm font-weight-bold btn-upper btn-text"> <?php echo e($row->file_type); ?></span>
                                </div>
                                <?php else: ?>
                                    <div class="mr-12 d-flex flex-column mb-7">
                                        <span class="d-block font-weight-bold mb-4">File Opened</span>
                                        <span class="btn btn-light-primary btn-sm font-weight-bold btn-upper btn-text"> <?php echo e($row->created_at->format('Y-m-d')); ?></span>
                                    </div>
                                <?php endif; ?>
                                <div class="mr-12 d-flex flex-column mb-7">
                                    <span class="d-block font-weight-bold mb-4">Closing Date</span>
                                    <span class="btn btn-light-danger btn-sm font-weight-bold btn-upper btn-text"> <?php echo e($row->closing_date); ?></span>
                                </div>
                                <!--begin::Progress-->
                                <div class="flex-row-fluid mb-7">
                                    <span class="d-block font-weight-bold mb-4">Progress</span>
                                    <div class="d-flex align-items-center pt-2">
                                        <?php if($row->file_type=="Sale"): ?>
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

                                                  $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 5 , 10);
                                              }
                                              else if($paymentRow->type == "MortgageLoc"){

                                                  $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 6 , 9);
                                              }
                                              else {

                                                  $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 4 , 11);
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

                                                $all_realtors_percentage += complete_percentage('Realtors' , 'realtors' , $realtorRow['id'] ,'id' , 7 , 5);

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
                                        $property_address_percentage = complete_percentage('Files' , 'files' , $row->id ,'id' , 8 , 5);
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
                                        $financial_percentage = complete_percentage('FileInformation' , 'file_information' , $row->id ,'ref_file' , 5 , 4);
                                        if($financial_percentage<0){
                                            $financial_percentage =0;
                                        }

                                        $deposie_percentage=0;
                                        $deposie_percentage = complete_percentage('DepositeSale' , 'deposite_sales' , $row->id ,'ref_file' , 5 , 4);
                                        if($deposie_percentage<0){
                                            $deposie_percentage =0;
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
                                                    $financial_percentage + $deposie_percentage)  /1100 ) * 100;


                                        if($totalpercentage <0){ $totalpercentage =0 ;}
                                            if($totalpercentage >100){  $totalpercentage =100 ; }

                                        ?>
                                        <?php elseif($row->file_type =="Purchase"): ?>
                                            <?php

                                            $totalpercentage= 0;

                                            $sellersCount=0;
                                            $all_seller_progress =0;
                                            $all_seller_address_progress =0;
                                            $all_id_progress = 0;
                                            $homwowners_module_percentage=0;
                                            $sellers= \App\Sellers::where('ref_file', $row->id)->get();
                                            if($sellers->count()>0){

                                                foreach($sellers as $sellerRow){
                                                    $all_seller_progress += complete_percentage('Sellers' , 'sellers' , $sellerRow->id ,'id' , 11 , 4);
                                                    $id_check = \Illuminate\Support\Facades\DB::table('gov_ids')->where('ref_seller' , $sellerRow->id)->first();
                                                    if($id_check ==null){
                                                        $all_id_progress += 0;
                                                    }else{
                                                        $all_id_progress += 100;
                                                    }
                                                    $sellersCount++;
                                                }
                                                $homwowners_module_percentage = $all_seller_progress + $all_id_progress;
                                                $homwowners_module_percentage = ((($homwowners_module_percentage) /($sellersCount*200)) *100);

                                            }

                                            $buyersCount=0;
                                            $all_buyers_progress =0;
                                            $all_lawyers_progress =0;
                                            $buyers_module_percentage=0;
                                            $buyers = \App\Buyers::where('ref_file', $row->id)->get();
                                            if($buyers->count()>0){
                                                foreach($buyers as $buyerRow){

                                                    $all_buyers_progress += complete_percentage('Buyers' , 'buyers' , $buyerRow['id'] ,'id' , 4 , 4);
                                                    $all_lawyers_progress += complete_percentage('Lawyers' , 'lawyers' , $buyerRow->lawyer['id'] ,'id' , 6 , 4) ;

                                                    $buyersCount++;
                                                }
                                                $buyers_module_percentage = $all_buyers_progress +$all_lawyers_progress;
                                                $buyers_module_percentage = ( ($buyers_module_percentage/ ($buyersCount*200)) *100);

                                            }


                                            $paymentsCount=0;
                                            $all_payment_percentage =0;
                                            $payments = \App\Payment::where('ref_file' , $row->id)->where('pay_type' , 'SALE')->get(); //>
                                            if($payments->count()>0){

                                                foreach($payments as $paymentRow){

                                                    if($paymentRow->type == "OtherPayment"){

                                                        $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 5 , 10);
                                                    }
                                                    else if($paymentRow->type == "MortgageLoc"){

                                                        $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 6 , 9);
                                                    }
                                                    else {

                                                        $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 4 , 11);
                                                    }

                                                    $paymentsCount++;
                                                }

                                                $all_payment_percentage =((($all_payment_percentage ) /($paymentsCount*100)) *100);

                                            }

                                            $realtorsCount=0;
                                            $all_realtors_percentage =0;
                                            $realtors = \App\Realtors::where('ref_file' , $row->id)->get(); //>
                                            if($realtors->count() >0){
                                                foreach($realtors as $realtorRow){

                                                    $all_realtors_percentage += complete_percentage('Realtors' , 'realtors' , $realtorRow['id'] ,'id' , 7 , 5);

                                                    $realtorsCount++;
                                                }
                                                $all_realtors_percentage = ((($all_realtors_percentage) /($realtorsCount*100)) *100);

                                            }

                                            $motCount=0;
                                            $mort_percentage=0;
                                            $mortgages= \App\Mortgages::where('ref_file' , $row->id)->get();
                                            if($mortgages->count()>0){

                                                foreach($mortgages as $mort){

                                                    $mort_percentage += complete_percentage('Mortgages' , 'mortgages' , $mort['id'] ,'id' , 3 , 4);

                                                    $motCount++;
                                                }

                                                $mort_percentage =  ( $mort_percentage /($motCount*100)) *100;

                                            }
                                            if($mort_percentage <0){
                                                $mort_percentage =0 ;
                                            }


                                            $file_documents_percentage =1;
                                            $file_documents = \App\FileDocuments::where('ref_file' , $row->id)->where('type' , 'FILE')->orderby('id', 'desc')->get(); //>
                                            if($file_documents->count() >0){
                                                $file_documents_percentage = 100;
                                            }

                                            $closing_packages_percentage =1;
                                            $closing_packages = \App\FileDocuments::where('ref_file' , $row->id)->where('type' , 'CLOSING_PACKAGE')->orderby('id' , 'desc')->get(); //>
                                            if($closing_packages->count() > 0){
                                                $closing_packages_percentage = 100;
                                            }


                                            $property_address_percentage = 0;
                                            $property_address_percentage = complete_percentage('Files' , 'files' , $row->id ,'id' , 8 , 5);
                                            if($property_address_percentage<0){
                                                $property_address_percentage=0;
                                            }


                                            $purchase_file_percentage = complete_percentage('PurchaseFileDetails' , 'purchase_file_details' , $row->id ,'ref_file' , 8 , 4);
                                            if($purchase_file_percentage<0){
                                                $purchase_file_percentage=0;
                                            }


                                            $financial_percentage = complete_percentage('FileInformation' , 'file_information' , $row->id ,'ref_file' , 5 , 4);
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
                                                        $purchase_file_percentage   +
                                                        $financial_percentage +
                                                        $mort_percentage)  /1000 ) * 100;


                                            if($totalpercentage <0){  $totalpercentage =0 ; }
                                            if($totalpercentage >100){  $totalpercentage =100 ; }

                                            ?>


                                        <?php else: ?>
                                            <?php

                                            $totalpercentage= 0;

                                            $sellersCount=0;
                                            $all_seller_progress =0;
                                            $all_seller_address_progress =0;
                                            $all_id_progress = 0;
                                            $homwowners_module_percentage=0;
                                            $sellers= \App\Sellers::where('ref_file', $row->id )->get();
                                            if($sellers->count()>0){

                                                foreach($sellers as $sellerRow){
                                                    $all_seller_progress += complete_percentage('Sellers' , 'sellers' , $sellerRow->id ,'id' , 11 , 4);
                                                    $id_check = \Illuminate\Support\Facades\DB::table('gov_ids')->where('ref_seller' , $sellerRow->id)->first();
                                                    if($id_check ==null){
                                                        $all_id_progress += 0;
                                                    }else{
                                                        $all_id_progress += 100;
                                                    }
                                                    $sellersCount++;
                                                }
                                                $homwowners_module_percentage = $all_seller_progress + $all_id_progress;
                                                $homwowners_module_percentage = ((($homwowners_module_percentage) /($sellersCount*200)) *100);

                                            }

                                            $paymentsCount=0;
                                            $all_payment_percentage =0;
                                            $payments = \App\Payment::where('ref_file' , $row->id )->get(); //>
                                            if($payments->count()>0){

                                                foreach($payments as $paymentRow){

                                                    if($paymentRow->type == "OtherPayment"){

                                                        $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 5 , 10);
                                                    }
                                                    else if($paymentRow->type == "MortgageLoc"){

                                                        $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 6 , 9);
                                                    }
                                                    else {

                                                        $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 4 , 11);
                                                    }

                                                    $paymentsCount++;
                                                }

                                                $all_payment_percentage =((($all_payment_percentage ) /($paymentsCount*100)) *100);

                                            }



                                            $realtorsCount=0;
                                            $all_realtors_percentage =0;
                                            $realtors = \App\Realtors::where('ref_file' , $row->id)->get(); //>
                                            if($realtors->count() >0){
                                                foreach($realtors as $realtorRow){

                                                    $all_realtors_percentage += complete_percentage('Realtors' , 'realtors' , $realtorRow['id'] ,'id' , 7 , 5);

                                                    $realtorsCount++;
                                                }
                                                $all_realtors_percentage = ((($all_realtors_percentage) /($realtorsCount*100)) *100);

                                            }


                                            $file_documents_percentage =1;
                                            $file_documents = \App\FileDocuments::where('ref_file' , $row->id )->where('type' , 'FILE')->orderby('id', 'desc')->get(); //>
                                            if($file_documents->count() >0){
                                                $file_documents_percentage = 100;
                                            }

                                            $closing_packages_percentage =1;
                                            $closing_packages = \App\FileDocuments::where('ref_file' , $row->id)->where('type' , 'CLOSING_PACKAGE')->orderby('id' , 'desc')->get(); //>
                                            if($closing_packages->count() > 0){
                                                $closing_packages_percentage = 100;
                                            }



                                            $property_address_percentage = complete_percentage('Files' , 'files' , $row->id ,'id' , 8 , 5);
                                            if($property_address_percentage<0){
                                                $property_address_percentage=0;
                                            }


                                            $purchase_file_percentage = complete_percentage('PurchaseFileDetails' , 'purchase_file_details' , $row->id ,'ref_file' , 8 , 4);
                                            if($purchase_file_percentage<0){
                                                $purchase_file_percentage=0;
                                            }



                                            $deposie_percentage=0;
                                            $deposie_percentage = complete_percentage('DepositeSale' , 'deposite_sales' , $row->id ,'ref_file' , 5 , 4);
                                            if($deposie_percentage<0){
                                                $deposie_percentage =0;
                                            }


                                            $totalpercentage = ((
                                                        $homwowners_module_percentage +
                                                        $all_payment_percentage +
                                                        $all_realtors_percentage  +
                                                        $file_documents_percentage   +
                                                        $closing_packages_percentage  +
                                                        $property_address_percentage   +
                                                        $purchase_file_percentage   +
                                                        $deposie_percentage)  /800 ) * 100;


                                            if($totalpercentage <0){  $totalpercentage =0 ; }
                                            if($totalpercentage >100){  $totalpercentage =100 ; }

                                            ?>
                                        <?php endif; ?>
                                        <div class="progress progress-xs mt-2 mb-2 w-100">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo e(substr($totalpercentage , 0 ,4)); ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="ml-3 font-weight-bolder"><?php echo e(round(substr($totalpercentage , 0 , 4)/5) * 5); ?>% </span>
                                    </div>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Text-->
                            <!--end::Text-->
                            <!--begin::Blog-->
                            <div class="d-flex flex-wrap">
                                <!--begin: Item-->
                                <div class="mr-12 d-flex flex-column mb-7">
                                    <span class="font-weight-bolder mb-4">Price</span>
                                    <span class="font-weight-bolder font-size-h5 pt-1">
                                        <span class="font-weight-bold text-dark-50">$</span>
                                        <?php if($row->file_info['file_price']): ?> <?php echo e($row->file_info['file_price']); ?> <?php else: ?> 0 <?php endif; ?>
                                    </span>
                                </div>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <div class="d-flex flex-column flex-lg-fill float-left mb-7">
                                    <span class="font-weight-bolder mb-4">Homeowners</span>
                                    <div class="symbol-group symbol-hover">
                                           <?php
                                            $homeowners = \App\Sellers::where('ref_file' , $row->id)->take(4)->get();
                                            $homeownersCount = \App\Sellers::where('ref_file' , $row->id)->get()->count();
                                           ?>
                                          <?php $__currentLoopData = $homeowners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $homie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="<?php echo e($homie['first_name']); ?> <?php echo e($homie['last_name']); ?>">
                                                <img alt="Pic" <?php if($homie['gender'] =="male"): ?> src="<?php echo e(asset('media/001-boy.svg')); ?>" <?php else: ?> src="<?php echo e(asset('media/002-girl.svg')); ?>" <?php endif; ?>>
                                            </div>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                           <?php if($homeownersCount > 4): ?>
                                            <div class="symbol symbol-30 symbol-circle symbol-light">
                                                <span class="symbol-label font-weight-bold">+<?php echo e($homeownersCount-4); ?></span>
                                            </div>
                                           <?php endif; ?>
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
                                    <a class="font-weight-bolder text-primary ml-2"><?php echo e($row->tasks()); ?> Tasks</a>
                                </div>
                            </div>
                            <a type="button" href="<?php echo e(route('file.show' , $row->id)); ?>" class="side-link btn btn-primary btn-sm text-uppercase font-weight-bolder mt-5 mt-sm-0 mr-auto mr-sm-0 ml-sm-auto">details</a>
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Card-->
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <!--end::Row-->
            <!--begin::Pagination-->
            <?php echo e($files->links()); ?>

            <!--end::Pagination-->
        </div>
        <!--end:: Client Container-->
      <?php else: ?>
          <!--begin::Admin & Partner Container-->
          <div class="container-fluid">

              <?php if( auth()->user()->type == "Realtor" ||
                   auth()->user()->type == "MortgageBroker" ||
                   auth()->user()->type == "OtherSide" ): ?>

                  <div class="row">
                     <div class="col-xl-12">
                      <!--begin::Tiles Widget 25-->
                      <div class="card card-custom bgi-no-repeat bgi-size-cover gutter-b bg-primary" style="height: 200px; background-image: url(<?php echo e(asset('media/taieri.svg')); ?>)">
                          <div class="card-body d-flex">
                              <div class="d-flex py-5 flex-column align-items-start flex-grow-1 row">

                                  <div class=" col-12 col-md-6">
                                      <a href="#" class="text-white font-weight-bolder font-size-h3">Introduce Treadstone Law To a Client</a>
                                      <p class="text-white opacity-75 font-weight-bold mt-3">Do you have upcoming closings? Do you want to ensure a streamlined client experience? Enter your client's email add and we will send them an introduction to work with Treadstone Law.</p>
                                  </div>
                                  <div class="col-12 col-md-6">

                                      <div class=" align-items-center flex-wrap">

                                          <br>

                                          <br>
                                          <form class="form" method="POST" action="<?php echo e(route('send.intro.mail')); ?>" enctype="multipart/form-data">
                                              <?php echo csrf_field(); ?>
                                              <div class="form-group row">

                                                  <div class="col-12 col-lg-9 col-xl-9">
                                                      <input  type="text"  class="form-control float-left px-2 px-lg-5 mr-2" value="" name="email" required placeholder="Enter Client's Email Address">
                                                  </div>
                                                  <div class="col-12 col-xl-3 col-lg-3">

                                                      <button style="color: black; background: white" type="submit" class="btn btn-primary btn-fixed-height font-weight-bold px-2 px-lg-7 mr-4" >
                                                          <span class="d-none d-md-inline">Send</span>
                                                      </button>
                                                  </div>
                                              </div>

                                          </form>
                                                                               <!--begin::Button-->



                                          <!--end::Button-->
                                      </div>

                                  </div>

                              </div>
                          </div>
                      </div>
                      <!--end::Tiles Widget 25-->
                  </div>
                  </div>

              <?php endif; ?>

              <!--begin::Card-->
              <div class="card card-custom">
                  <div class="card-body">
                      <div class="table-responsive">
                          <table class="table table-head-custom table-vertical-center kt_datatable" id="">
                              <thead>
                              <tr class="text-left">
                                  <th style="white-space: nowrap;">#</th>
                                  <th style="white-space: nowrap;" >File Name</th>
                                  <th style="white-space: nowrap;"> </th>
                                  <th style="white-space: nowrap;"> Client</th>
                                  <th style="white-space: nowrap;">Closing Date</th>
                                  <th style="white-space: nowrap;">File Type</th>
                                  <th style="white-space: nowrap;">Days To Close</th>
                                  <th style="white-space: nowrap;">Progress</th>
                                  <th style="white-space: nowrap;">Tasks  </th>
                                  <th style="white-space: nowrap;">actions</th>
                              </tr>
                              </thead>
                              <tbody>

                              <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                      <td class="pr-0">
                                        <div class="symbol symbol-50 symbol-light mt-1">
                                            <?php echo e($files->firstItem() + $key); ?>

                                        </div>
                                    </td>
                                      <td class="pr-0" width="100">
                                          <div class="symbol symbol-50 symbol-light mt-1">
                                              <?php echo e($row['file_name']); ?>

                                          </div>
                                      </td>
                                      <td class="pr-0" width="100">
                                          <div class="d-flex align-items-center">
                                          <div class="symbol symbol-40 symbol-circle symbol-sm" style="    margin-top: -10px;">
                                              <?php
                                              $arrayOfColors=array(
                                                  '#f7525f', '#87cefa', '#00abe5', '#166dc2', '#00b1b8',
                                                  '#a056b2', '#f05070', '#50f0d0'
                                              );
                                              $random_key = array_rand($arrayOfColors);
                                              $random_color = $arrayOfColors[$random_key];
                                              ?>
                                              <span style="background-color: <?php echo e($random_color); ?> !important;width: 54px !important;border-radius: 50%; height: 54px !important;display: flex;align-items: center;justify-content: center;" class="bullet bullet-bar bg-<?php echo e($random_color); ?> align-self-stretch">
                                                  <i class="icon-2x text-white flaticon-home"></i>
                                              </span>
                                          </div>

                                      </div>
                                      </td>
                                      <td class="pr-0" width="100">
                                          <div class="d-flex align-items-center">
                                              <div class="ml-3">
                                              <div class="text-dark-75 font-weight-bolder font-size-lg mb-0">
                                                  <p style=" overflow: hidden;white-space: nowrap;text-overflow: ellipsis;max-width: 200px;">
                                                      <?php $__currentLoopData = $row->sellers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hkey=> $homeowner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                          <?php if($hkey>0): ?>
                                                             <?php if(!isset($homeowner->last_name) || $homeowner->last_name ==""): ?>  <?php else: ?>   <?php echo e('/'.$homeowner->last_name); ?> <?php endif; ?>
                                                          <?php else: ?>
                                                              <?php if(!isset($homeowner->last_name) || $homeowner->last_name ==""): ?>  <?php else: ?>   <?php echo e($homeowner->last_name); ?> <?php endif; ?>
                                                          <?php endif; ?>
                                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                  </p>

                                              </div>
                                              <a class="text-muted font-weight-bold text-hover-primary"><p style=" overflow: hidden;white-space: nowrap;text-overflow: ellipsis;max-width: 200px;"><?php echo e(!empty($row->prop->address) ? $row->prop->address.', '  : ''); ?><?php echo e(!empty($row->prop->city) ? $row->prop->city.', '  : ''); ?><?php echo e(!empty($row->prop->province) ? $row->prop->province .', ' : ''); ?><?php echo e(!empty($row->prop->postal_code) ? $row->prop->postal_code : ''); ?> </p></a>
                                          </div>
                                          </div>
                                      </td>
                                      <td class="pr-0" width="200">
                                          <div class="symbol symbol-50 symbol-light mt-1">
                                              <div class="d-inline font-weight-bolder text-primary mb-0"><?php echo e(\Carbon\Carbon::parse($row['closing_date'])->format('M j, Y')); ?></div>
                                          </div>
                                      </td>
                                      <td class="pr-0" width="100">
                                          <div class="symbol symbol-50 symbol-light mt-1">
                                              <span class="d-inline label label-lg font-weight-bold  label-light-success label-inline" style="color:blueviolet" ><?php echo e($row['file_type']); ?></span>
                                          </div>
                                      </td>
                                      <td class="pr-0" width="50">
                                          <div class="symbol symbol-50 symbol-light mt-1">
                                              <span class="d-inline label label-lg font-weight-bold  label-light-success label-inline"><?php echo e(Carbon\Carbon::now()->diffInDays($row->closing_date, false)); ?></span>
                                          </div>
                                      </td>
                                      <td class="pr-0" width="50">
                                          <div class="symbol symbol-50 symbol-light mt-1">
                                              <?php if($row->file_type=="Sale"): ?>
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

                                                              $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 5 , 10);
                                                          }
                                                          else if($paymentRow->type == "MortgageLoc"){

                                                              $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 6 , 9);
                                                          }
                                                          else {

                                                              $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 4 , 11);
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

                                                          $all_realtors_percentage += complete_percentage('Realtors' , 'realtors' , $realtorRow['id'] ,'id' , 7 , 5);

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
                                                  $property_address_percentage = complete_percentage('Files' , 'files' , $row->id ,'id' , 8 , 5);
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
                                                  $financial_percentage = complete_percentage('FileInformation' , 'file_information' , $row->id ,'ref_file' , 5 , 4);
                                                  if($financial_percentage<0){
                                                      $financial_percentage =0;
                                                  }

                                                  $deposie_percentage=0;
                                                  $deposie_percentage = complete_percentage('DepositeSale' , 'deposite_sales' , $row->id ,'ref_file' , 5 , 4);
                                                  if($deposie_percentage<0){
                                                      $deposie_percentage =0;
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
                                                              $financial_percentage + $deposie_percentage)  /1100 ) * 100;


                                                  if($totalpercentage <0){ $totalpercentage =0 ;}
                                                  if($totalpercentage >100){  $totalpercentage =100 ; }

                                                  ?>
                                              <?php elseif($row->file_type =="Purchase"): ?>
                                                  <?php

                                                  $totalpercentage= 0;

                                                  $sellersCount=0;
                                                  $all_seller_progress =0;
                                                  $all_seller_address_progress =0;
                                                  $all_id_progress = 0;
                                                  $homwowners_module_percentage=0;
                                                  $sellers= \App\Sellers::where('ref_file', $row->id)->get();
                                                  if($sellers->count()>0){

                                                      foreach($sellers as $sellerRow){
                                                          $all_seller_progress += complete_percentage('Sellers' , 'sellers' , $sellerRow->id ,'id' , 11 , 4);
                                                          $id_check = \Illuminate\Support\Facades\DB::table('gov_ids')->where('ref_seller' , $sellerRow->id)->first();
                                                          if($id_check ==null){
                                                              $all_id_progress += 0;
                                                          }else{
                                                              $all_id_progress += 100;
                                                          }
                                                          $sellersCount++;
                                                      }
                                                      $homwowners_module_percentage = $all_seller_progress + $all_id_progress;
                                                      $homwowners_module_percentage = ((($homwowners_module_percentage) /($sellersCount*200)) *100);

                                                  }

                                                  $buyersCount=0;
                                                  $all_buyers_progress =0;
                                                  $all_lawyers_progress =0;
                                                  $buyers_module_percentage=0;
                                                  $buyers = \App\Buyers::where('ref_file', $row->id)->get();
                                                  if($buyers->count()>0){
                                                      foreach($buyers as $buyerRow){

                                                          $all_buyers_progress += complete_percentage('Buyers' , 'buyers' , $buyerRow['id'] ,'id' , 4 , 4);
                                                          $all_lawyers_progress += complete_percentage('Lawyers' , 'lawyers' , $buyerRow->lawyer['id'] ,'id' , 6 , 4) ;

                                                          $buyersCount++;
                                                      }
                                                      $buyers_module_percentage = $all_buyers_progress +$all_lawyers_progress;
                                                      $buyers_module_percentage = ( ($buyers_module_percentage/ ($buyersCount*200)) *100);

                                                  }


                                                  $paymentsCount=0;
                                                  $all_payment_percentage =0;
                                                  $payments = \App\Payment::where('ref_file' , $row->id)->where('pay_type' , 'SALE')->get(); //>
                                                  if($payments->count()>0){

                                                      foreach($payments as $paymentRow){

                                                          if($paymentRow->type == "OtherPayment"){

                                                              $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 5 , 10);
                                                          }
                                                          else if($paymentRow->type == "MortgageLoc"){

                                                              $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 6 , 9);
                                                          }
                                                          else {

                                                              $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 4 , 11);
                                                          }

                                                          $paymentsCount++;
                                                      }

                                                      $all_payment_percentage =((($all_payment_percentage ) /($paymentsCount*100)) *100);

                                                  }

                                                  $realtorsCount=0;
                                                  $all_realtors_percentage =0;
                                                  $realtors = \App\Realtors::where('ref_file' , $row->id)->get(); //>
                                                  if($realtors->count() >0){
                                                      foreach($realtors as $realtorRow){

                                                          $all_realtors_percentage += complete_percentage('Realtors' , 'realtors' , $realtorRow['id'] ,'id' , 7 , 5);

                                                          $realtorsCount++;
                                                      }
                                                      $all_realtors_percentage = ((($all_realtors_percentage) /($realtorsCount*100)) *100);

                                                  }

                                                  $motCount=0;
                                                  $mort_percentage=0;
                                                  $mortgages= \App\Mortgages::where('ref_file' , $row->id)->get();
                                                  if($mortgages->count()>0){

                                                      foreach($mortgages as $mort){

                                                          $mort_percentage += complete_percentage('Mortgages' , 'mortgages' , $mort['id'] ,'id' , 3 , 4);

                                                          $motCount++;
                                                      }

                                                      $mort_percentage =  ( $mort_percentage /($motCount*100)) *100;

                                                  }
                                                  if($mort_percentage <0){
                                                      $mort_percentage =0 ;
                                                  }


                                                  $file_documents_percentage =1;
                                                  $file_documents = \App\FileDocuments::where('ref_file' , $row->id)->where('type' , 'FILE')->orderby('id', 'desc')->get(); //>
                                                  if($file_documents->count() >0){
                                                      $file_documents_percentage = 100;
                                                  }

                                                  $closing_packages_percentage =1;
                                                  $closing_packages = \App\FileDocuments::where('ref_file' , $row->id)->where('type' , 'CLOSING_PACKAGE')->orderby('id' , 'desc')->get(); //>
                                                  if($closing_packages->count() > 0){
                                                      $closing_packages_percentage = 100;
                                                  }


                                                  $property_address_percentage = 0;
                                                  $property_address_percentage = complete_percentage('Files' , 'files' , $row->id ,'id' , 8 , 5);
                                                  if($property_address_percentage<0){
                                                      $property_address_percentage=0;
                                                  }


                                                  $purchase_file_percentage = complete_percentage('PurchaseFileDetails' , 'purchase_file_details' , $row->id ,'ref_file' , 8 , 4);
                                                  if($purchase_file_percentage<0){
                                                      $purchase_file_percentage=0;
                                                  }


                                                  $financial_percentage = complete_percentage('FileInformation' , 'file_information' , $row->id ,'ref_file' , 5 , 4);
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
                                                              $purchase_file_percentage   +
                                                              $financial_percentage +
                                                              $mort_percentage)  /1000 ) * 100;


                                                  if($totalpercentage <0){  $totalpercentage =0 ; }
                                                  if($totalpercentage >100){  $totalpercentage =100 ; }

                                                  ?>
                                              <?php else: ?>
                                                  <?php

                                                  $totalpercentage= 0;

                                                  $sellersCount=0;
                                                  $all_seller_progress =0;
                                                  $all_seller_address_progress =0;
                                                  $all_id_progress = 0;
                                                  $homwowners_module_percentage=0;
                                                  $sellers= \App\Sellers::where('ref_file', $row->id )->get();
                                                  if($sellers->count()>0){

                                                      foreach($sellers as $sellerRow){
                                                          $all_seller_progress += complete_percentage('Sellers' , 'sellers' , $sellerRow->id ,'id' , 11 , 4);
                                                          $id_check = \Illuminate\Support\Facades\DB::table('gov_ids')->where('ref_seller' , $sellerRow->id)->first();
                                                          if($id_check ==null){
                                                              $all_id_progress += 0;
                                                          }else{
                                                              $all_id_progress += 100;
                                                          }
                                                          $sellersCount++;
                                                      }
                                                      $homwowners_module_percentage = $all_seller_progress + $all_id_progress;
                                                      $homwowners_module_percentage = ((($homwowners_module_percentage) /($sellersCount*200)) *100);

                                                  }

                                                  $paymentsCount=0;
                                                  $all_payment_percentage =0;
                                                  $payments = \App\Payment::where('ref_file' , $row->id )->get(); //>
                                                  if($payments->count()>0){

                                                      foreach($payments as $paymentRow){

                                                          if($paymentRow->type == "OtherPayment"){

                                                              $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 5 , 10);
                                                          }
                                                          else if($paymentRow->type == "MortgageLoc"){

                                                              $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 6 , 9);
                                                          }
                                                          else {

                                                              $all_payment_percentage += complete_percentage('Payment' , 'payments' , $paymentRow['id'] ,'id' , 4 , 11);
                                                          }

                                                          $paymentsCount++;
                                                      }

                                                      $all_payment_percentage =((($all_payment_percentage ) /($paymentsCount*100)) *100);

                                                  }



                                                  $realtorsCount=0;
                                                  $all_realtors_percentage =0;
                                                  $realtors = \App\Realtors::where('ref_file' , $row->id)->get(); //>
                                                  if($realtors->count() >0){
                                                      foreach($realtors as $realtorRow){

                                                          $all_realtors_percentage += complete_percentage('Realtors' , 'realtors' , $realtorRow['id'] ,'id' , 7 , 5);

                                                          $realtorsCount++;
                                                      }
                                                      $all_realtors_percentage = ((($all_realtors_percentage) /($realtorsCount*100)) *100);

                                                  }


                                                  $file_documents_percentage =1;
                                                  $file_documents = \App\FileDocuments::where('ref_file' , $row->id )->where('type' , 'FILE')->orderby('id', 'desc')->get(); //>
                                                  if($file_documents->count() >0){
                                                      $file_documents_percentage = 100;
                                                  }

                                                  $closing_packages_percentage =1;
                                                  $closing_packages = \App\FileDocuments::where('ref_file' , $row->id)->where('type' , 'CLOSING_PACKAGE')->orderby('id' , 'desc')->get(); //>
                                                  if($closing_packages->count() > 0){
                                                      $closing_packages_percentage = 100;
                                                  }



                                                  $property_address_percentage = complete_percentage('Files' , 'files' , $row->id ,'id' , 8 , 5);
                                                  if($property_address_percentage<0){
                                                      $property_address_percentage=0;
                                                  }


                                                  $purchase_file_percentage = complete_percentage('PurchaseFileDetails' , 'purchase_file_details' , $row->id ,'ref_file' , 8 , 4);
                                                  if($purchase_file_percentage<0){
                                                      $purchase_file_percentage=0;
                                                  }



                                                  $deposie_percentage=0;
                                                  $deposie_percentage = complete_percentage('DepositeSale' , 'deposite_sales' , $row->id ,'ref_file' , 5 , 4);
                                                  if($deposie_percentage<0){
                                                      $deposie_percentage =0;
                                                  }


                                                  $totalpercentage = ((
                                                              $homwowners_module_percentage +
                                                              $all_payment_percentage +
                                                              $all_realtors_percentage  +
                                                              $file_documents_percentage   +
                                                              $closing_packages_percentage  +
                                                              $property_address_percentage   +
                                                              $purchase_file_percentage   +
                                                              $deposie_percentage)  /800 ) * 100;


                                                  if($totalpercentage <0){  $totalpercentage =0 ; }
                                                  if($totalpercentage >100){  $totalpercentage =100 ; }

                                                  ?>
                                              <?php endif; ?>

                                              <?php

                                                  $daysToClose = Carbon\Carbon::now()->diffInDays($row->closing_date, false);
                                                        $perc =  round(substr($totalpercentage , 0 , 4)/5) * 5 ;

                                                ?>


                                              <?php if( $daysToClose > 30 ): ?>
                                                  <span class="d-inline label label-lg font-weight-bold  label-light-success label-inline"><?php echo e(round(substr($totalpercentage , 0 , 4)/5) * 5); ?>%</span>
                                             <?php elseif( $daysToClose < 30 && $perc <= 35 ): ?>
                                                      <span class="d-inline label label-lg font-weight-bold  label-light-danger label-inline"><?php echo e(round(substr($totalpercentage , 0 , 4)/5) * 5); ?>%</span>
                                              <?php elseif( $daysToClose < 30 && $perc >= 36 && $perc <= 99  ): ?>
                                                  <span class="d-inline label label-lg font-weight-bold  label-light-warning label-inline"><?php echo e(round(substr($totalpercentage , 0 , 4)/5) * 5); ?>%</span>
                                              <?php elseif($daysToClose < 30 && $perc == 100  ): ?>
                                                  <span class="d-inline label label-lg font-weight-bold  label-light-primary label-inline"><?php echo e(round(substr($totalpercentage , 0 , 4)/5) * 5); ?>%</span>
                                              <?php endif; ?>

                                          </div>
                                      </td>
                                      <td class="pr-0" width="100">
                                          <div class="symbol symbol-50 symbol-light mt-1">
                                              <span class="d-inline label label-lg font-weight-bold  label-light-success label-inline" style="color:blueviolet" ><?php echo e($row->tasks()); ?></span>

                                          </div>
                                      </td>
                                      <td class="pr-0" width="100">
                                          <div class="symbol symbol-50 symbol-light mt-1">
                                              <a href="#" data-toggle="modal" data-target="#edit_file_modal-<?php echo e($row->id); ?>" data-action="<?php echo e(route('file.update.name' , $row->id)); ?>" class=" btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" >
                                                      <span class="svg-icon svg-icon-md">
                                                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-icon">                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">                                            <rect x="0" y="0" width="24" height="24"></rect>                                            <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>                                            <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>                                        </g>

                                                          </svg>
                                                      </span>
                                              </a>
                                              <a href="<?php echo e(route('file.show' , $row->id )); ?>" class="btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon mr-2" title="Edit details">
                                                  <span class="svg-icon svg-icon-md">
                                                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">                                        <rect x="0" y="0" width="24" height="24"></rect>                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953) "></path>                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>                                    </g>
                                                      </svg>
                                                  </span>
                                              </a>
                                              <a <?php if( (auth()->user()->type == "Realtor" ||
                                                    auth()->user()->type == "MortgageBroker" ||
                                                   auth()->user()->type == "OtherSide") && $row->updated_at ==""   ): ?>

                                                 <?php else: ?>
                                                 href="#" data-toggle="modal" data-target="#delete_record_modal" data-action="<?php echo e(route('file.delete' , $row->id)); ?>" data-id="<?php echo e($row->id); ?>"
                                                 <?php endif; ?>   class="open_delete_modal btn btn-sm btn-default btn-text-primary btn-hover-primary btn-icon" title="Delete">
                                                  <span class="svg-icon svg-icon-md">
                                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">                                        <rect x="0" y="0" width="24" height="24"></rect>                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>                                    </g>
                                                  </svg>
                                              </span>
                                              </a>
                                          </div>
                                      </td>
                                  </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                              </tbody>
                          </table>

                      </div>
                  </div>
              </div>
              <!--begin::Pagination-->
          <?php echo e($files->links()); ?>

          <!--end::Pagination-->

          </div>
          <!--end:: Admin & Partner Container-->
      <?php endif; ?>
    </div>

    <!--end::Entry-->

    <?php if(auth()->user()->type != "Admin" && !auth()->user()->agreed_to_terms): ?>
        <div class="modal fade show" id="firstLoginTermsModal"  data-backdrop="static"  tabindex="-1" aria-labelledby="exampleModalCustomScrollable" data-keyboard="false" aria-modal="true" role="dialog" style="display: block;" >
                <div class="modal-dialog   modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Terms and Conditions</h5>

                        </div>
                        <div class="modal-body">
                            <div data-scroll="true" data-height="300" class="scroll ps ps--active-y" style="height: 300px; overflow: hidden;">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                
                                    
                                
                                
                                    
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary font-weight-bold terms_agree_first_login_btn" >I Agree</button>
                        </div>
                    </div>
                </div>
            </div><!--end::Main-->
    <?php endif; ?>

    <div class="modal fade" id="delete_record_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Are you sure you want to delete this item ?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Please confirm that you want to delete this item. This action cannot be reversed.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="" id="delete_record_btn" type="submit" class="btn btn-danger">Delete</a>
                </div>

            </div>

        </div>
    </div>

    <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="edit_file_modal-<?php echo e($file->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit File Name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <form class="form" method="POST" action="<?php echo e(route('file.update.name' , $file->id)); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                <div class="modal-body">

                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label">File Name</label>
                            <div class="col-lg-9 col-xl-9">
                                <input style="text-transform: capitalize" class="form-control form-control-lg form-control-solid" name="file_name" type="text" value="<?php echo e($file['file_name']); ?>"  />
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                </form>

            </div>

        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

    <script>

        var KTDatatableHtmlTableDemo = function() {
            // Private functions

            // demo initializer
            var demo = function() {

                var datatable = $('.kt_datatable').KTDatatable({
                    data: {
                        saveState: {cookie: false},
                    },
                    search: {
                        input: $('#kt_datatable_search_query'),
                        key: 'generalSearch'
                    },
                    layout: {
                        class: 'datatable-bordered'
                    },
                    columns: [

                        {
                            width: 10,

                            field: '#',
                            sortable: true,

                            autoHide: false

                        },
                        {
                            field: 'File Name',
                            width: 157,
                            autoHide: false

                        },
                        {
                            field: '',
                            width: 30,

                            autoHide: false

                        },
                        {
                            field: 'Client',
                            width: 200,

                            autoHide: false

                        },
                        {
                            field: 'Closing Date',
                            width:110,
                            autoHide: false

                        },
                        {
                            field: 'File Type',
                            width:80,

                            autoHide: false

                        },
                        {
                            field: 'Days To Close',
                            width:118,
                            autoHide: false

                        },
                        {

                            field: 'Progress',
                            width:80,
                            autoHide: false

                        },
                        {
                            width:50,

                            field: 'Tasks',

                            autoHide: false

                        },

                        {

                            field: 'actions',
                            width:120,
                            autoHide: false

                        }
                    ],
                });


                $('#kt_datatable_search_status').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_search_type').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Type');
                });

                $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

            };

            return {
                // Public functions
                init: function() {
                    // init dmeo
                    demo();
                },
            };
        }();

        jQuery(document).ready(function() {
            KTDatatableHtmlTableDemo.init();
        });

    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u361969929/domains/bourne.shadowlabs.ca/resources/views/dashboard.blade.php ENDPATH**/ ?>