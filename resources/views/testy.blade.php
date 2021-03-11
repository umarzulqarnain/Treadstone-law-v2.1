


<!--<div class="modal fade" id="review_propertyinformation_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalSizeSm" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Review & Submit</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>

            </div>
            <div class="modal-body">
                <div class="wizard wizard-1 " id="kt_propinfo_review" data-wizard-state="step-first" data-wizard-clickable="true">



                    <div class="wizard-nav border-bottom">
                        <div class="wizard-steps p-8 p-lg-10">
                            <div class="wizard-step " data-wizard-type="step" data-wizard-state="current">
                                <div class="wizard-label">
                                    <i class="wizard-icon flaticon-globe"></i>
                                    <h3 class="wizard-title">Review & Submit</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                        <div class="col-xl-12 col-xxl-12">

                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">

                                <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>

                                <div id="property-review-partup" class="row property-review-partup" >


                                    <div class="col-12 col-md-4">
                                        <br>
                                        <label class="officer-label float-left " style="margin-right: 10px">
                                            <input type="radio" name="reject_approve_propaddress" value="approve" class="card-input-officers-element"/>
                                            <div style="" class="card-input-apro col-md-12">
                                                <span class="label label-lg label-light-danger label-inline font-weight py-4">Approve</span>
                                            </div>
                                        </label>
                                        <label class="officer-label float-left ">
                                            <input type="radio" name="reject_approve_propaddress" value="reject" class="card-input-officers-element "  checked/>
                                            <div style="" class="card-input-apro col-md-12">
                                                <span class="label label-lg label-light-success label-inline font-weight py-4">Reject</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <br>
                                        <h6 class="font-weight-bolder mb-3">Property Address</h6>
                                        <div class="text-dark-50 line-height-lg">
                                            <div><span class="street">Street Address: {{ $file_data->prop['street_address'] }}</span> <br><span class="city"> City: {{ $file_data->prop['city'] }} </span> <br> <span class="province"> Province:  {{ $file_data->prop['province'] }} </span> <span class="postal_code"> Postal Code:  {{ $file_data->prop['postal_code'] }} </span> </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <br>
                                        <h6 class="font-weight-bolder mb-3">Request Change to Property Address</h6>
                                        <div class="text-dark-50 line-height-lg">
                                            <div>

                                                @if($file_data->prop['holder_street_address'] != $file_data->prop['street_address'] &&
                                                                            $file_data->prop['holder_street_address'] != "" )

                                                   <span class="street"> Street Address: {{ $file_data->prop['holder_street_address'] }} </span>

                                                @endif


                                                @if($file_data->prop['holder_city'] != $file_data->prop['city'] &&
                                                                            $file_data->prop['holder_city'] != "" )

                                                        <span class="city"> City: {{ $file_data->prop['holder_city'] }} </span>

                                                @endif

                                                @if($file_data->prop['holder_province'] != $file_data->prop['province'] &&
                                                                            $file_data->prop['holder_province'] != "" )

                                                        <span class="province"> Province:  {{ $file_data->prop['holder_province'] }} </span>

                                                @endif


                                                @if($file_data->prop['holder_postal_code'] != $file_data->prop['postal_code'] &&
                                                                                $file_data->prop['holder_postal_code'] != "" )

                                                        <span class="postal_code"> Postal Code:  {{ $file_data->prop['holder_postal_code'] }} </span>

                                                @endif

                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="separator separator-dashed my-5"></div>

                                    <div class="col-12 col-md-4">
                                        <br>
                                        <label class="officer-label float-left " style="margin-right: 10px">
                                            <input type="radio" name="reject_approve_proptax" value="approve" class="card-input-officers-element"/>
                                            <div style="" class="card-input-apro col-md-12">
                                                <span class="label label-lg label-light-danger label-inline font-weight py-4">Approve</span>
                                            </div>
                                        </label>
                                        <label class="officer-label float-left ">
                                            <input type="radio" name="reject_approve_proptax" value="reject" class="card-input-officers-element"  checked/>
                                            <div style="" class="card-input-apro col-md-12">
                                                <span class="label label-lg label-light-success label-inline font-weight py-4">Reject</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <br>
                                        <h6 class="font-weight-bolder mb-3">Property Tax</h6>
                                        <div class="text-dark-50 line-height-lg">
                                            <div> Annual <?php echo date('Y'); ?> Taxes: $<span class="annual_taxes_r">{{ $taxes['annual_tax'] }} </span> </div>
                                            <div> Annual paid to date:  $<span class="annual_paid_r"> {{ $taxes['annual_paid_to_date'] }} </span> </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <br>
                                        <h6 class="font-weight-bolder mb-3">Request Change to Property Tax</h6>
                                        <div class="text-dark-50 line-height-lg">
                                            <div> Annual <?php echo date('Y'); ?> Taxes: $<span class="annual_taxes_r"> {{ $taxes['holder_annual_tax'] }} </span> </div>
                                            <div> Annual paid to date:  $<span class="annual_paid_r">{{ $taxes['holder_annual_paid_to_date'] }} </span> </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="separator separator-dashed my-5"></div>

                                    <div class="col-12 col-md-4">
                                        <br>
                                        <label class="officer-label float-left" style="margin-right: 10px">
                                            <input type="radio" name="reject_approve_keydelivery" value="approve" class="card-input-officers-element"/>
                                            <div style="" class="card-input-apro col-md-12">
                                                <span class="label label-lg label-light-danger label-inline font-weight py-4">Approve</span>
                                            </div>
                                        </label>
                                        <label class="officer-label float-left ">
                                            <input type="radio" name="reject_approve_keydelivery" value="reject" class="card-input-officers-element " checked />
                                            <div style="" class="card-input-apro col-md-12">
                                                <span class="label label-lg label-light-success label-inline font-weight py-4">Reject</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <br>
                                        <h6 class="font-weight-bolder mb-3">Key Delivery</h6>
                                        <div class="text-dark-50 line-height-lg">
                                            <div><span class="deliver_to_r">{{ $deliveryKey['name'] }} </span></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <br>
                                        <h6 class="font-weight-bolder mb-3">Request Change to Key Delivery</h6>
                                        <div class="text-dark-50 line-height-lg">
                                            <div><span class="deliver_to_r">{{ $deliveryKey['holder_name'] }} </span></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="separator separator-dashed my-5"></div>

                                    <div class="col-12 col-md-4">
                                        <br>
                                        <label class="officer-label float-left"  style="margin-right: 10px">
                                            <input type="radio" name="reject_approve_financialdetails" value="approve" class="card-input-officers-element "/>
                                            <div style="" class="card-input-apro col-md-12">
                                                <span class="label label-lg label-light-danger label-inline font-weight py-4">Approve</span>
                                            </div>
                                        </label>
                                        <label class="officer-label float-left">
                                            <input type="radio" name="reject_approve_financialdetails" value="reject" class="card-input-officers-element" checked/>
                                            <div style="" class="card-input-apro col-md-12">
                                                <span class="label label-lg label-light-success label-inline font-weight py-4">Reject</span>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <br>
                                        <h6 class="font-weight-bolder mb-3">Financial Details </h6>
                                        <div class="text-dark-50 line-height-lg">
                                            <div> Sale Price:  $<span class="file_price_r">{{ $file_info['file_price'] }}</span> </div>
                                        </div>
                                        <div class="text-dark-50 line-height-lg">
                                            <div> Was a deposit received from the buyer?  <span class="question1"> {{ $file_info['is_deposit_received'] }} </span> </div>
                                        </div>

                                        <div class="text-dark-50 line-height-lg">
                                            <div> How much was received?  $<span class="question2">{{ $file_info['much_received'] }}</span></div>
                                        </div>

                                        <div class="text-dark-50 line-height-lg">
                                            <div> Who received the deposit ?  $<span class="question3">{{ $file_info['who_received'] }} </span>  </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <br>
                                        <h6 class="font-weight-bolder mb-3">Request Change to Financial Details </h6>
                                        <div class="text-dark-50 line-height-lg">
                                            <div> Sale Price:  $<span class="file_price_r"> {{ $file_info['holder_file_price'] }}</span> </div>
                                        </div>
                                        <div class="text-dark-50 line-height-lg">
                                            <div> Was a deposit received from the buyer?  <span class="question1"> {{ $file_info['holder_is_deposit_received'] }} </span> </div>
                                        </div>

                                        <div class="text-dark-50 line-height-lg">
                                            <div> How much was received?  $<span class="question2"> {{ $file_info['holder_much_received'] }}</span>  </div>
                                        </div>

                                        <div class="text-dark-50 line-height-lg">
                                            <div> Who received the deposit ?  <span class="question3"> {{ $file_info['holder_who_received'] }} </span>  </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                <div class="mr-2">
                                </div>
                                <div style="width:50%" class="@if($user->type != "Client" ) d-none @endif">
                                    <p style="color:#c4c2c2;margin-top:-18px;display:flex" class="">I confirm that the information entered is correct.</p>
                                    <input style="margin-top:-10px;display:flex"  class="form-control form-control-lg form-control-solid  fullnametxt"  type="text"  placeholder="Enter Your Full Name Here" value="@if($user->type != "Client") Admin Admin @endif" />
                                </div>
                                <div>
                                    <button  type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit" >Submit</button>
                                    <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4 " data-wizard-type="action-next">Next Step</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div> -->


<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
    <!--begin::Section-->

    @if($pending_sellers->count()>0)
        <h2 class="mb-10 font-weight-bold text-dark"> Homeowners </h2>
        @foreach($pending_sellers as $key => $seller_review )
            <br>
            <h6 class="mb-10 font-weight-bold ext-dark ">Homeowner {{ $key+1 }} - {{ $seller_review['first_name'] }} {{ $seller_review['last_name'] }}</h6>
            <div class="row review_all_homeowners" >
                <input hidden type="text"  value="{{ $seller_review['id'] }}" class="card-input-officers-element seller_id_review_all "  />

                <div class="col-12 col-md-4">
                    <br>
                    <label class="officer-label float-left " style="margin-right: 10px">
                        <input type="radio" name="reject_approve_homeowner_all{{ $seller_review->id }}" value="approve" class="card-input-officers-element reject_approve_homeowner_all " />
                        <div style="" class="card-input-apro col-md-12">
                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Approve</span>
                        </div>
                    </label>
                    <label class="officer-label float-left ">
                        <input type="radio" name="reject_approve_homeowner_all{{ $seller_review->id }}" value="reject" class="card-input-officers-element reject_approve_homeowner_all"/>
                        <div style="" class="card-input-apro col-md-12">
                            <span class="label label-lg label-light-success label-inline font-weight py-4">Reject</span>
                        </div>
                    </label>
                </div>
                <div class="col-md-4">
                    <h6 class="font-weight-bolder mb-3">Current Personal Information</h6>
                    <div class="text-dark-50 line-height-lg">
                        <div><span class="first_name"> First Name:  {{ $seller_review['first_name'] }} </span> <br> <span class="last_name"> Last Nmae: {{  $seller_review['last_name'] }} </span>  </div>
                        <div><span class="gender">Gender: {{ $seller_review['gender'] }} </span></div>
                        <div><span class="birthdate">Birthdate: {{ $seller_review['birth_date'] }} </span> </div>
                        <div><span class="email">E-Mail: {{ $seller_review['email'] }} </span></div>
                        <div><span class="phone">Phone: {{ $seller_review['phone'] }} </span></div>
                        <div><span class="street">Address:  {{ $seller_review['address'] }} </span><span class="city"> {{ isset($seller_review['city']) ? ', ' . $seller_review['city'] : '' }} </span><span class="postal_code"> {{ isset($seller_review['postal_code']) ? ', '. $seller_review['postal_code'] : '' }} </span> </div>
                        <div>Is this @if($user->type == "Client") your @else the client's @endif  primary residence? <span class="question1"> {{ $seller_review['is_client_primary'] }} </span></div>
                        <div>@if($user->type == "Client") Are you @else Is the client @endif legally married ?  <span class="question2"> {{ $seller_review['is_married'] }} </span></div>
                        <div>Is @if($user->type == "Client") your @else the client's @endif  spouse on title for the property being sold? <span class="question3"> {{ $seller_review['is_spouse_on_title'] }}  </span></div>
                    </div>
                    <br>

                    <div class="separator separator-dashed my-5"></div>




                </div>
                <div class="col-md-4">

                    <h6 class="font-weight-bolder mb-3">Requested Change to  Personal Information</h6>
                    <div class="text-dark-50 line-height-lg">
                        <div><span class="first_name"> First Name:  {{ $seller_review['holder_first_name'] }} </span> <br> <span class="last_name"> Last Nmae: {{  $seller_review['holder_last_name'] }} </span>  </div>
                        <div><span class="gender">Gender: {{ $seller_review['holder_gender'] }} </span></div>
                        <div><span class="birthdate">Birthdate: {{ $seller_review['holder_birth_date'] }} </span> </div>
                        <div><span class="email">E-Mail: {{ $seller_review['holder_email'] }} </span></div>
                        <div><span class="phone">Phone: {{ $seller_review['holder_phone'] }} </span></div>
                        <div><span class="street">Address:  {{ $seller_review['holder_address'] }} </span><span class="city"> {{ isset($seller_review['holder_city']) ? ', ' . $seller_review['holder_city'] : '' }} </span><span class="postal_code"> {{ isset($seller_review['holder_postal_code']) ? ', '. $seller_review['holder_postal_code'] : '' }} </span> </div>
                        <div>Is this @if($user->type == "Client") your @else the client's @endif  primary residence? <span class="question1"> {{ $seller_review['holder_is_client_primary'] }} </span></div>
                        <div>@if($user->type == "Client") Are you @else Is the client @endif legally married ?  <span class="question2"> {{ $seller_review['holder_is_married'] }} </span></div>
                        <div>Is @if($user->type == "Client") your @else the client's @endif  spouse on title for the property being sold ? <span class="question3"> {{ $seller_review['holder_is_spouse_on_title'] }}  </span></div>
                    </div>
                    <br>


                    <div class="separator separator-dashed my-5"></div>





                </div>

                <div class="col-12 col-md-4">
                    <label class="officer-label float-left" style="margin-right: 10px">
                        <input type="radio" name="reject_approve_address_all{{ $seller_review['id'] }}" value="approve" class="card-input-officers-element reject_approve_address_all " />
                        <div style="" class="card-input-apro col-md-12">
                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Approve</span>
                        </div>
                    </label>
                    <label class="officer-label float-left ">
                        <input type="radio" name="reject_approve_address_all{{ $seller_review['id'] }}" value="reject" class="card-input-officers-element reject_approve_address_all"  />
                        <div style="" class="card-input-apro col-md-12">
                            <span class="label label-lg label-light-success label-inline font-weight py-4">Reject</span>
                        </div>
                    </label>
                </div>
                <div class="col-md-4">
                    <h6 class="font-weight-bolder mb-3">Property Address </h6>
                    <div class="text-dark-50 line-height-lg">
                        <div>
                            <span class="prop_street">{{ $seller_review->service['address'] }} </span>
                            <span class="prop_city"> {{ isset($seller_review->service['city']) ? ', '. $seller_review->service['city'] : ''  }} </span>
                            <span class="prop_province"> {{ isset($seller_review->service['province']) ? ', '. $seller_review->service['province'] : '' }} </span>
                            <span class="prop_postal_code"> {{ isset($seller_review->service['postal_code']) ? ', '. $seller_review->service['postal_code'] : ''  }} </span>
                        </div>
                    </div>
                    <div class="separator separator-dashed my-5"></div>

                </div>
                <div class="col-md-4">

                    <h6 class="font-weight-bolder mb-3">Requested Change to Property Address </h6>
                    <div class="text-dark-50 line-height-lg">
                        <div>
                            <span class="prop_street">{{ $seller_review->service['holder_address'] }} </span>
                            <span class="prop_city"> {{ isset($seller_review->service['holder_city']) ? ', '. $seller_review->service['holder_city'] : ''  }} </span>
                            <span class="prop_province"> {{ isset($seller_review->service['holder_province']) ? ', '. $seller_review->service['holder_province'] : '' }} </span>
                            <span class="prop_postal_code"> {{ isset($seller_review->service['holder_postal_code']) ? ', '. $seller_review->service['holder_postal_code'] : ''  }} </span>
                        </div>
                    </div>

                    <div class="separator separator-dashed my-5"></div>


                </div>

            </div>

        @endforeach

        <hr>
    @endif


    @if($file_data->prop['status'] == "pending" ||
    $purchase_file['status'] == 'pending' ||
      $file_info['status'] == "pending")
        <br>
        <h2 class="mb-10 font-weight-bold text-dark"> Property Information </h2>
        <div id="property_review" class="row " >


            @if($file_data->prop['status'] == "pending"  )
                <div class="col-12 col-md-4">
                    <br>
                    <label class="officer-label float-left " style="margin-right: 10px">
                        <input type="radio" name="reject_approve_propaddress_all" value="approve" class="card-input-officers-element"/>
                        <div style="" class="card-input-apro col-md-12">
                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Approve</span>
                        </div>
                    </label>
                    <label class="officer-label float-left ">
                        <input type="radio" name="reject_approve_propaddress_all" value="reject" class="card-input-officers-element "  />
                        <div style="" class="card-input-apro col-md-12">
                            <span class="label label-lg label-light-success label-inline font-weight py-4">Reject</span>
                        </div>
                    </label>
                </div>
                <div class="col-12 col-md-4">
                    <br>
                    <h6 class="font-weight-bolder mb-3">Current Property Address</h6>
                    <div class="text-dark-50 line-height-lg">
                        <div><span class="street">Street Address: {{ $file_data->prop['street_address'] }}</span> <br><span class="city"> City: {{ $file_data->prop['city'] }} </span> <br> <span class="province"> Province:  {{ $file_data->prop['province'] }} </span> <span class="postal_code"> Postal Code:  {{ $file_data->prop['postal_code'] }} </span> </div>
                    </div>
                    <div class="separator separator-dashed my-5"></div>

                </div>
                <div class="col-12 col-md-4">
                    <br>
                    <h6 class="font-weight-bolder mb-3">Requested Change to Property Address</h6>
                    <div class="text-dark-50 line-height-lg">
                        <div><span class="street">Street Address:  {{ $file_data->prop['holder_street_address'] }}</span> <span class="city"> ity: {{ $file_data->prop['holder_city'] }} </span> <span class="province"> Province:  {{ $file_data->prop['holder_province'] }} </span> <span class="postal_code"> Postal Code:  {{ $file_data->prop['holder_postal_code'] }} </span> </div>
                    </div>
                    <div class="separator separator-dashed my-5"></div>

                </div>
                <br>
            @endif


            @if($purchase_file['status'] == "pending")
                <div class="col-12 col-md-4">
                    <br>
                    <label class="officer-label float-left " style="margin-right: 10px">
                        <input type="radio" name="reject_approve_pruchasedetails_all" value="approve" class="card-input-officers-element"/>
                        <div style="" class="card-input-apro col-md-12">
                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Approve</span>
                        </div>
                    </label>
                    <label class="officer-label float-left ">
                        <input type="radio" name="reject_approve_pruchasedetails_all" value="reject" class="card-input-officers-element"  />
                        <div style="" class="card-input-apro col-md-12">
                            <span class="label label-lg label-light-success label-inline font-weight py-4">Reject</span>
                        </div>
                    </label>
                </div>
                <div class="col-12 col-md-4">
                    <br>
                    <h6 class="font-weight-bolder mb-3">Current File Details</h6>
                    <div class="text-dark-50 line-height-lg">
                        <div>Closing Date: <span class="closing_date_r"> {{ $purchase_file['closing_date'] }} </span></div>
                    </div>
                    <div class="text-dark-50 line-height-lg">
                        <div> Is the property a condo ? <span class="question1"> {{ $purchase_file['is_condo'] }}</span> </div>
                    </div>

                    <div class="text-dark-50 line-height-lg">
                        <div> Do you require a status certificate review?  $<span class="question2"> {{ $purchase_file['require_certificate'] }} </span>  </div>
                    </div>

                    <div class="text-dark-50 line-height-lg">
                        <div> Company Name:  <span class="company"> </span> {{ $purchase_file['company_name'] }} </div>
                    </div>
                    <div class="text-dark-50 line-height-lg">
                        <div> Address:  <span class="address"> {{ $purchase_file['address'] }} </span>  </div>
                    </div>
                    <div class="text-dark-50 line-height-lg">
                        <div> E-mail:  <span class="email"> {{ $purchase_file['email'] }} </span>  </div>
                    </div>
                    <div class="text-dark-50 line-height-lg">
                        <div> Number:  <span class="number"> {{ $purchase_file['number'] }} </span>  </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <br>
                    <h6 class="font-weight-bolder mb-3">Requested Change to File Details</h6>
                    <div class="text-dark-50 line-height-lg">
                        <div>Closing Date: <span class="closing_date_r"> {{ $purchase_file['holder_closing_date'] }} </span></div>
                    </div>
                    <div class="text-dark-50 line-height-lg">
                        <div> Is the property a condo ? <span class="question1"> {{ $purchase_file['holder_is_condo'] }}</span> </div>
                    </div>

                    <div class="text-dark-50 line-height-lg">
                        <div> Do you require a status certificate review?  <span class="question2">{{ $purchase_file['holder_require_certificate'] }} </span>  </div>
                    </div>

                    <div class="text-dark-50 line-height-lg">
                        <div> Company Name:  <span class="company"> </span> {{ $purchase_file['holder_company_name'] }} </div>
                    </div>
                    <div class="text-dark-50 line-height-lg">
                        <div> Address:  <span class="address"> {{ $purchase_file['holder_address'] }} </span>  </div>
                    </div>
                    <div class="text-dark-50 line-height-lg">
                        <div> E-mail:  <span class="email"> {{ $purchase_file['holder_email'] }} </span>  </div>
                    </div>
                    <div class="text-dark-50 line-height-lg">
                        <div> Number:  <span class="number"> {{ $purchase_file['holder_number'] }} </span>  </div>
                    </div>
                </div>
                <br>
                <div class="col-12 col-md-12">
                    <div class="separator separator-dashed my-5"></div>
                </div>
            @endif
        </div>

        <hr>
    @endif


    @if(isset($deposite_sale) && $deposite_sale['status'] == "pending")
        <br>
        <h4 class="mb-10 font-weight-bold text-dark">Deposit Sale Information</h4>
        <div id="" class="row " >

            <div class="col-12 col-md-4">
                <br>
                <label class="officer-label float-left " style="margin-right: 10px">
                    <input type="radio" name="reject_approve_despositsale_all" value="approve" class="card-input-officers-element "/>
                    <div style="" class="card-input-apro col-md-12">
                        <span class="label label-lg label-light-danger label-inline font-weight py-4">Approve</span>
                    </div>
                </label>
                <label class="officer-label float-left ">
                    <input type="radio" name="reject_approve_despositsale_all" value="reject" class="card-input-officers-element " />
                    <div style="" class="card-input-apro col-md-12">
                        <span class="label label-lg label-light-success label-inline font-weight py-4">Reject</span>
                    </div>
                </label>

            </div>
            <div class="col-12 col-md-4">
                <br>
                <h6 class="font-weight-bolder mb-3">Current Sale Proceeds</h6>
                <div class="text-dark-50 line-height-lg">
                    <div>Bank Name: <span class="bank_name_r"> {{ $deposite_sale['client_bank_name']  }}</span>  </div>
                </div>
                <div class="text-dark-50 line-height-lg">
                    <div>Account Holder: <span class="account_holder_r">{{ $deposite_sale['client_account_holder']  }}</span>  </div>
                </div>
                <div class="text-dark-50 line-height-lg">
                    <div>Account Number: <span class="account_number_r"></span> {{ $deposite_sale['client_account_number']  }} </div>
                </div>
                <div class="text-dark-50 line-height-lg">
                    <div>Transit Number: <span class="transit_number_r"></span>  {{ $deposite_sale['client_transit_number']  }} </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <br>
                <h6 class="font-weight-bolder mb-3">Requested Change to Sale Proceeds</h6>
                <div class="text-dark-50 line-height-lg">
                    <div>Bank Name: <span class="bank_name_r"> {{ $deposite_sale['holder_client_bank_name']  }}</span>  </div>
                </div>
                <div class="text-dark-50 line-height-lg">
                    <div>Account Holder: <span class="account_holder_r">{{ $deposite_sale['holder_client_account_holder']  }}</span>  </div>
                </div>
                <div class="text-dark-50 line-height-lg">
                    <div>Account Number: <span class="account_number_r"></span> {{ $deposite_sale['holder_client_account_number']  }} </div>
                </div>
                <div class="text-dark-50 line-height-lg">
                    <div>Transit Number: <span class="transit_number_r"></span>  {{ $deposite_sale['holder_client_transit_number']  }} </div>
                </div>
            </div>

        </div>

        <hr>
    @endif

    @if($pending_mortgages->count() > 0 )
        <br>
        <h2 class="mb-10 font-weight-bold text-dark"> New Mortgages </h2>

        <div id="mortgages" class="row " >
            @foreach($pending_mortgages as $key => $newmort)
                <div class="col-12 col-md-4 newmortAdminreview_all-part">
                    <br>
                    <label class="officer-label float-left " style="margin-right: 10px">
                        <input type="radio" name="reject_approve_newmort_all-{{ $newmort['id'] }}" value="approve" class="card-input-officers-element reject_approve_newmort_all "/>
                        <div style="" class="card-input-apro col-md-12">
                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Approve</span>
                        </div>
                    </label>
                    <label class="officer-label float-left ">
                        <input type="radio" name="reject_approve_newmort_all-{{ $newmort['id'] }}" value="reject" class="card-input-officers-element reject_approve_newmort_all" />
                        <div style="" class="card-input-apro col-md-12">
                            <span class="label label-lg label-light-success label-inline font-weight py-4">Reject</span>
                        </div>
                    </label>
                    <input hidden type="text" class="card-input-officers-element newmoreviewid"  value="{{ $newmort['id'] }}" />
                </div>
                <div class="col-12 col-md-4">
                    <br>
                    <h6 class="mb-10 font-weight-bold text-dark">Current Mortgage {{ $key+1 }}</h6>
                    <div class="text-dark-50 line-height-lg">
                        <div>Are you obtaining a bridge loan?
                            <span class="bridge_loan_r">Yes</span>
                        </div>
                    </div>
                    <br>
                    <div class="text-dark-50 line-height-lg">
                        <div>Bank / Creditor Name:  <span class="bank_creditor_name_r">  {{ $newmort['bank_institution'] }}  </span></div>
                        <div>Priority:   <span class="payout_priority_r"> {{ $newmort['priority'] }}  </span> </div>
                    </div>
                    <div class="separator separator-dashed my-5"></div>

                </div>
                <div class="col-12 col-md-4">
                    <br>
                    <h6 class="mb-10 font-weight-bold text-dark">Requested Change to Mortgage {{ $key+1 }}</h6>
                    <div class="text-dark-50 line-height-lg">
                        <div>Are you obtaining a bridge loan?
                            <span class="bridge_loan_r">Yes</span>
                        </div>
                    </div>
                    <br>
                    <div class="text-dark-50 line-height-lg">
                        <div>Bank / Creditor Name:  <span class="bank_creditor_name_r">  {{ $newmort['holder_bank_institution'] }}  </span></div>
                        <div>Priority:   <span class="payout_priority_r"> {{ $newmort['holder_priority'] }}  </span> </div>
                    </div>
                    <div class="separator separator-dashed my-5"></div>

                </div>
                <br>
            @endforeach
        </div>

        <hr>
    @endif

    @if($pending_payments->count() > 0)
        <br>
        <h4 class="mb-10 font-weight-bold text-dark">Payments Information</h4>
        <div id="payments" class="row " >

            @foreach($pending_payments as $key => $payment)

                <div class="col-12 col-md-4 paymentReview_all-part">
                    <br>
                    <label class="officer-label float-left " style="margin-right: 10px">
                        <input type="radio" name="reject_approve_payment_all-{{ $payment['id'] }}" value="approve" class="card-input-officers-element reject_approve_payment_all "/>
                        <div style="" class="card-input-apro col-md-12">
                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Approve</span>
                        </div>
                    </label>
                    <label class="officer-label float-left ">
                        <input type="radio" name="reject_approve_payment_all-{{ $payment['id'] }}" value="reject" class="card-input-officers-element reject_approve_payment_all" />
                        <div style="" class="card-input-apro col-md-12">
                            <span class="label label-lg label-light-success label-inline font-weight py-4">Reject</span>
                        </div>
                    </label>
                    <input hidden type="text" class="card-input-officers-element paymentid"  value="{{ $payment['id'] }}" />
                </div>
                <div class="col-12 col-md-4">
                    <br>
                    <?php
                    $str = $payment['type'];
                    if($str == "MortgageLoc"){   $str = "Mortgage";}

                    $str_array = preg_split('/\B(?=[A-Z])/s', $str);
                    $newPaymentTypeFormat = "";
                    foreach ($str_array as $value) {$newPaymentTypeFormat .= $value . " "; }
                    ?>
                    <h6 class="mb-10 font-weight-bold text-dark">Current {{ $newPaymentTypeFormat }}</h6>
                    <div class="text-dark-50 line-height-lg">

                        @if($payment['type'] == "MortgageLoc" || $payment['type'] == "LineOfCredit" )
                            <div>Account Holder: <span class="account_holder"> {{ $payment['payee_name'] }} </span>  </div>
                        @endif

                        <div> @if($payment['type'] == "PropertyTax")
                                City Name:
                            @elseif($payment['type'] == "CreditCard")
                                Card Company:
                            @elseif($payment['type'] == "BrokerFee")
                                Broker Name:
                            @elseif($payment['type'] == "CondoFees")
                                Property Management Company:
                            @elseif($payment['type'] == "RealtorPayment")
                                Realtor Name:
                            @elseif($payment['type'] == "MortgageLoc" || $payment['type'] == "LineOfCredit" )
                                Bank/Creditor Name:
                            @elseif($payment['type'] == "OtherPayment")
                                Name:

                            @endif
                            <span class="bank_creditor_name_r">  {{ $payment['name'] }}  </span>
                        </div>
                        @if($payment['type'] == "PropertyTax")
                            <div>Roll Number:   <span class="payout_priority_r"> {{ $payment['roll_number'] }}  </span> </div>
                        @endif

                        @if($payment['type'] == "CondoFees")
                            <div>Phone:   <span class="payout_priority_r"> {{ $payment['phone'] }}  </span> </div>
                        @endif

                        @if($payment['type'] == "MortgageLoc" || $payment['type'] == "LineOfCredit")
                            <div>Priority:   <span class="payout_priority_r"> {{ $payment['priority'] }}  </span> </div>
                        @endif

                        @if($payment['type'] == "PropertyTax" ||
                          $payment['type'] == "CreditCard"  ||
                          $payment['type'] == "BrokerFee" ||
                          $payment['type'] == "CondoFees" ||
                          $payment['type'] == "RealtorPayment"  ||
                          $payment['type'] == "MortgageLoc"  ||
                          $payment['type'] == "LineOfCredit"  ||
                          $payment['type'] == "OtherPayment"  )
                            <div>Amount: <span class="payout_payable_to_r"> {{ $payment['amount'] }}  </span></div>
                        @endif

                        @if($payment['type'] == "OtherPayment" ||
                        $payment['type'] == "CreditCard"  ||
                        $payment['type'] == "LineOfCredit"  ||
                        $payment['type'] == "MortgageLoc" )
                            <div>Account Number: <span class=""> {{ $payment['account_number'] }}  </span></div>
                        @endif

                        @if( $payment['type'] == "OtherPayment"  ||
                           $payment['type'] == "BrokerFee" ||
                           $payment['type'] == "CondoFees" ||
                           $payment['type'] == "RealtorPayment" )
                            <div>Email: <span class=""> {{ $payment['email'] }}  </span></div>
                        @endif

                        @if($payment['type'] == "PropertyTax" ||
                               $payment['type'] == "CreditCard"  ||
                               $payment['type'] == "BrokerFee" ||
                               $payment['type'] == "CondoFees" ||
                               $payment['type'] == "RealtorPayment"  ||
                               $payment['type'] == "MortgageLoc"  ||
                               $payment['type'] == "LineOfCredit"  ||
                               $payment['type'] == "OtherPayment"  )
                            <div>Payable To: <span class="payout_payable_to_r"> {{ $payment['payable_to'] }}  </span></div>
                        @endif


                        @if($payment['type'] == "PropertyTax" ||
                        $payment['type'] == "CreditCard"  ||
                        $payment['type'] == "BrokerFee" ||
                        $payment['type'] == "CondoFees" ||
                        $payment['type'] == "RealtorPayment"  ||
                        $payment['type'] == "MortgageLoc"  ||
                        $payment['type'] == "LineOfCredit"  ||
                        $payment['type'] == "OtherPayment"  )
                            <div>Mailing Address: <span class="mailing_address_r"> {{ $payment['mailing_address'] }}  </span></div>
                        @endif

                        @if($payment['type'] == "PropertyTax" ||
                         $payment['type'] == "CreditCard"  ||
                         $payment['type'] == "BrokerFee" ||
                         $payment['type'] == "CondoFees" ||
                         $payment['type'] == "RealtorPayment"  ||
                         $payment['type'] == "MortgageLoc"  ||
                         $payment['type'] == "LineOfCredit"  ||
                         $payment['type'] == "OtherPayment"  )
                            <div>City: <span class="payout_city_r"> {{ $payment['city'] }}  </span> </div>
                        @endif


                        @if($payment['type'] == "PropertyTax" ||
                         $payment['type'] == "CreditCard"  ||
                         $payment['type'] == "BrokerFee" ||
                         $payment['type'] == "CondoFees" ||
                         $payment['type'] == "RealtorPayment"  ||
                         $payment['type'] == "MortgageLoc"  ||
                         $payment['type'] == "LineOfCredit"  ||
                         $payment['type'] == "OtherPayment"  )
                            <div>Postal Code: <span class="payout_postal_code_r"> {{ $payment['postal_code'] }} </span></div>
                        @endif
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <br>
                    <?php
                    $str = $payment['holder_type'];
                    if($str == "MortgageLoc"){   $str = "Mortgage";}

                    $str_array = preg_split('/\B(?=[A-Z])/s', $str);
                    $newPaymentTypeFormat = "";
                    foreach ($str_array as $value) {$newPaymentTypeFormat .= $value . " "; }
                    ?>
                    <h6 class="mb-10 font-weight-bold text-dark">Requested Change to {{ $newPaymentTypeFormat }}</h6>
                    <div class="text-dark-50 line-height-lg">

                        @if($payment['holder_type'] == "MortgageLoc" || $payment['holder_type'] == "LineOfCredit" )
                            <div>Account Holder: <span class="account_holder"> {{ $payment['holder_payee_name'] }} </span>  </div>
                        @endif

                        <div> @if($payment['holder_type'] == "PropertyTax")
                                City Name:
                            @elseif($payment['holder_type'] == "CreditCard")
                                Card Company:
                            @elseif($payment['holder_type'] == "BrokerFee")
                                Broker Name:
                            @elseif($payment['holder_type'] == "CondoFees")
                                Property Management Company:
                            @elseif($payment['holder_type'] == "RealtorPayment")
                                Realtor Name:
                            @elseif($payment['holder_type'] == "MortgageLoc" || $payment['holder_type'] == "LineOfCredit" )
                                Bank/Creditor Name:
                            @elseif($payment['holder_type'] == "OtherPayment")
                                Name:

                            @endif
                            <span class="bank_creditor_name_r">  {{ $payment['holder_name'] }}  </span>
                        </div>
                        @if($payment['holder_type'] == "PropertyTax")
                            <div>Roll Number:   <span class="payout_priority_r"> {{ $payment['holder_roll_number'] }}  </span> </div>
                        @endif

                        @if($payment['holder_type'] == "CondoFees")
                            <div>Phone:   <span class="payout_priority_r"> {{ $payment['holder_phone'] }}  </span> </div>
                        @endif

                        @if($payment['holder_type'] == "MortgageLoc" || $payment['type'] == "LineOfCredit")
                            <div>Priority:   <span class="payout_priority_r"> {{ $payment['holder_priority'] }}  </span> </div>
                        @endif

                        @if($payment['holder_type'] == "PropertyTax" ||
                          $payment['holder_type'] == "CreditCard"  ||
                          $payment['holder_type'] == "BrokerFee" ||
                          $payment['holder_type'] == "CondoFees" ||
                          $payment['holder_type'] == "RealtorPayment"  ||
                          $payment['holder_type'] == "MortgageLoc"  ||
                          $payment['holder_type'] == "LineOfCredit"  ||
                          $payment['holder_type'] == "OtherPayment"  )
                            <div>Amount: <span class="payout_payable_to_r"> {{ $payment['holder_amount'] }}  </span></div>
                        @endif

                        @if($payment['holder_type'] == "OtherPayment" ||
                        $payment['holder_type'] == "CreditCard"  ||
                        $payment['holder_type'] == "LineOfCredit"  ||
                        $payment['holder_type'] == "MortgageLoc" )
                            <div>Account Number: <span class=""> {{ $payment['holder_account_number'] }}  </span></div>
                        @endif

                        @if( $payment['holder_type'] == "OtherPayment"  ||
                           $payment['holder_type'] == "BrokerFee" ||
                           $payment['holder_type'] == "CondoFees" ||
                           $payment['holder_type'] == "RealtorPayment" )
                            <div>Email: <span class=""> {{ $payment['holder_email'] }}  </span></div>
                        @endif

                        @if($payment['holder_type'] == "PropertyTax" ||
                               $payment['holder_type'] == "CreditCard"  ||
                               $payment['holder_type'] == "BrokerFee" ||
                               $payment['holder_type'] == "CondoFees" ||
                               $payment['holder_type'] == "RealtorPayment"  ||
                               $payment['holder_type'] == "MortgageLoc"  ||
                               $payment['holder_type'] == "LineOfCredit"  ||
                               $payment['holder_type'] == "OtherPayment"  )
                            <div>Payable To: <span class="payout_payable_to_r"> {{ $payment['holder_payable_to'] }}  </span></div>
                        @endif


                        @if($payment['holder_type'] == "PropertyTax" ||
                        $payment['holder_type'] == "CreditCard"  ||
                        $payment['holder_type'] == "BrokerFee" ||
                        $payment['holder_type'] == "CondoFees" ||
                        $payment['holder_type'] == "RealtorPayment"  ||
                        $payment['holder_type'] == "MortgageLoc"  ||
                        $payment['holder_type'] == "LineOfCredit"  ||
                        $payment['holder_type'] == "OtherPayment"  )
                            <div>Mailing Address: <span class="mailing_address_r"> {{ $payment['holder_mailing_address'] }}  </span></div>
                        @endif

                        @if($payment['holder_type'] == "PropertyTax" ||
                         $payment['holder_type'] == "CreditCard"  ||
                         $payment['holder_type'] == "BrokerFee" ||
                         $payment['holder_type'] == "CondoFees" ||
                         $payment['holder_type'] == "RealtorPayment"  ||
                         $payment['holder_type'] == "MortgageLoc"  ||
                         $payment['holder_type'] == "LineOfCredit"  ||
                         $payment['holder_type'] == "OtherPayment"  )
                            <div>City: <span class="payout_city_r"> {{ $payment['holder_city'] }}  </span> </div>
                        @endif


                        @if($payment['holder_type'] == "PropertyTax" ||
                         $payment['holder_type'] == "CreditCard"  ||
                         $payment['holder_type'] == "BrokerFee" ||
                         $payment['holder_type'] == "CondoFees" ||
                         $payment['holder_type'] == "RealtorPayment"  ||
                         $payment['holder_type'] == "MortgageLoc"  ||
                         $payment['holder_type'] == "LineOfCredit"  ||
                         $payment['holder_type'] == "OtherPayment"  )
                            <div>Postal Code: <span class="payout_postal_code_r"> {{ $payment['holder_postal_code'] }} </span></div>
                        @endif
                    </div>
                </div>
                <br>
                <div class="col-12 col-md-12">
                    <div class="separator separator-dashed my-5"></div>
                </div>

            @endforeach




        </div>

        <hr>
    @endif

    @if($pending_realtors->count() > 0)
        <br>
        <h4 class="mb-10 font-weight-bold text-dark">Real Estate Team Information</h4>
        <div id="realtors" class="row " >

            @foreach($pending_realtors as $key => $realtor)
                <div class="col-12 col-md-4 penRealtorReview_all-part">
                    <br>
                    <label class="officer-label float-left " style="margin-right: 10px">
                        <input type="radio" name="reject_approve_penrealtor-{{ $realtor['id'] }}" value="approve" class="card-input-officers-element reject_approve_penrealtor "/>
                        <div style="" class="card-input-apro col-md-12">
                            <span class="label label-lg label-light-danger label-inline font-weight py-4">Approve</span>
                        </div>
                    </label>
                    <label class="officer-label float-left ">
                        <input type="radio" name="reject_approve_penrealtor-{{ $realtor['id'] }}" value="reject" class="card-input-officers-element reject_approve_penrealtor" />
                        <div style="" class="card-input-apro col-md-12">
                            <span class="label label-lg label-light-success label-inline font-weight py-4">Reject</span>
                        </div>
                    </label>
                    <input hidden type="text" class="card-input-officers-element penrealtorid"  value="{{ $realtor['id'] }}" />
                </div>
                <div class="col-12 col-md-4">
                    <br>
                    <h6 class="font-weight-bolder mb-3">Current Real Estate Team Information</h6>

                    <div class="text-dark-50 line-height-lg">
                        <div>Did you use a realtor?
                            <span class="used_realtor_r"> {{ $realtor['used_realtor'] }}</span>
                        </div>
                    </div>
                    <br>
                    <div class="text-dark-50 line-height-lg">
                        <div><span class="first_name">Realtor Type: {{ $realtor['realtor_type'] }} </span>  </div>
                        <div><span class="first_name">First Name: {{ $realtor['first_name'] }} </span> <br> <span class="last_name"> Last Name: {{ $realtor['last_name'] }} </span>   </div>
                        <div><span class="gender">Gender: {{ $realtor['gender'] }} </span></div>
                        <div><span class="email"> Email: {{ $realtor['email'] }}</span></div>
                        <div><span class="phone">Phone: {{ $realtor['phone'] }} </span></div>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <br>
                    <h6 class="font-weight-bolder mb-3">Requested Change to Real Estate team member Information</h6>

                    <div class="text-dark-50 line-height-lg">
                        <div>Did you use a realtor?
                            <span class="used_realtor_r"> {{ $realtor['holder_used_realtor'] }}</span>
                        </div>
                    </div>
                    <br>
                    <div class="text-dark-50 line-height-lg">
                        <div><span class="first_name">Realtor Type {{ $realtor['holder_realtor_type'] }} </span>  </div>
                        <div><span class="first_name">First Name: {{ $realtor['holder_first_name'] }} </span> <span class="last_name">Last Name: {{ $realtor['holder_last_name'] }} </span>   </div>
                        <div><span class="gender">Gender: {{ $realtor['holder_gender'] }} </span></div>
                        <div><span class="email">Email: {{ $realtor['holder_email'] }}</span></div>
                        <div><span class="phone">Phone: {{ $realtor['holder_phone'] }} </span></div>
                    </div>

                </div>
                <br>
                <div class="col-12 col-md-12">
                    <div class="separator separator-dashed my-5"></div>
                </div>
            @endforeach




        </div>

        <hr>
    @endif

</div>






<script>










</script>