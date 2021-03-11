@extends('layouts.master')
@section('content')

    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">

        @include('layouts.header_mobile')

        <div class="card" style="border: 1px solid #fff; margin-bottom: 0;box-shadow: 8px 25px 17px 0 rgba(82,63,105,.05)">
            <div class="card-body card-block card-header-mobile">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <ul class="header-menu" >
                            <li class="first-li" >Appointments</li>

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
            <div class="card" style="border: 1px solid #fff;margin-top: 60px;box-shadow: 8px 25px 17px 0 rgba(82,63,105,.05);">
                <div class="card-body card-block" style="box-shadow: none!important;padding-bottom: 11px;padding-top: 11px;border-top: 1px solid #cccccc4d;">
                    <div class="row">
                        <ul class="header-menu" >
                            <li class="first-li" >Appointments</li>

                        </ul>
                        <button class="au-btn-filter" style="box-shadow: none;color: #0db686;line-height: 0;font-size: 27px;position: absolute;right: 0%;"><i class="far fa-plus-square"></i></button>
                    </div>
                </div>
            </div>

        </header>
        <!-- END HEADER DESKTOP-->

        <!--APPOINTMENTS MAIN CONTENT-->

        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-12">
                            <!--<h3  class="title-5 m-b-5 table-title col-xs-12">Appointments <span class="col-xs-12 table-span-title">  Updated on 20 March 2002</span></h3>-->
                            <!--<div class="table-data__tool">-->
                            <!--<div class="table-data__tool-left">-->

                            <!--<div class="rs-select2&#45;&#45;light rs-select2&#45;&#45;dark">-->
                            <!--<span style="color: #118df0;" class="table-sub-title-span"> Create New Appointment Request </span>-->
                            <!--</div>-->

                            <!--&lt;!&ndash;<button class="au-btn-filter"><i class="zmdi zmdi-filter-list"></i>filters</button>&ndash;&gt;-->
                            <!--</div>-->

                            <!--</div>-->


                            <br>
                            <br>

                            <div class="card" style="    border: 1px solid #fff;">
                                <div class="card-body card-block">
                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                        <div class="row form-group">
                                            <div class="col-12 col-md-9">
                                                <label class=" form-control-label">Select Your Location</label>
                                                <br>
                                                <input  type="text"  id="text-input" name="text-input" placeholder="Text" class="form-control treadstone-input" required>
                                                <br>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label class=" form-control-label">File Type</label>
                                                <br>
                                                <select name="select"  class="form-control treadstone-select">
                                                    <option value="0" class="treadstone-input">Please select</option>
                                                    <option value="1" class="treadstone-input">Option #1</option>
                                                    <option value="2" class="treadstone-input">Option #2</option>
                                                    <option value="3" class="treadstone-input">Option #3</option>
                                                </select>
                                                <br>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Signing Offers Address</label>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-12 col-md-4">
                                                <label class="officer-label">
                                                    <input type="radio" name="officer" class="card-input-officers-element" />
                                                    <div class="card-input col-md-12">


                                                        <div class="officer-image" >

                                                            <img src="images/icon/avatar-01.jpg" alt="John Doe">
                                                        </div>
                                                        <div class="officer-content" style="padding-left: 34px;" >

                                                            <h5>
                                                                <span style="display: block;">Samer Rafea</span>
                                                                <span class="officer-address">Cairo Maadi 25 St</span>
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <label class="officer-label">
                                                    <input type="radio" name="officer" class="card-input-officers-element" />
                                                    <div class="card-input col-md-12">


                                                        <div class="officer-image" >

                                                            <img src="images/icon/avatar-01.jpg" alt="John Doe">
                                                        </div>
                                                        <div class="officer-content" style="padding-left: 34px;">

                                                            <h5>
                                                                <span style="display: block;">Samer Rafea</span>
                                                                <span class="officer-address">Cairo Maadi 25 St</span>
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <label class="officer-label">
                                                    <input type="radio" name="officer" class="card-input-officers-element" />
                                                    <div class="card-input col-md-12">


                                                        <div class="officer-image" >

                                                            <img src="images/icon/avatar-01.jpg" alt="John Doe">
                                                        </div>
                                                        <div class="officer-content" style="padding-left: 34px;">

                                                            <h5>
                                                                <span style="display: block;">Samer Rafea</span>
                                                                <span class="officer-address">Cairo Maadi 25 St</span>
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label  class=" form-control-label">Provide Availability</label>
                                            </div>

                                        </div>

                                        <div class="row form-group dayfromto">

                                            <div class="col-12 col-md-3">
                                                <label  class=" form-control-label">Day</label>

                                                <br>
                                                <input style="padding: 10px;" type="date" class="form-control treadstone-input" value="">


                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label  class=" form-control-label">From</label>
                                                <br>
                                                <select name="select"  class="form-control treadstone-select">
                                                    <option value="0" class="treadstone-input">Please select</option>
                                                    <option value="1" class="treadstone-input">Option #1</option>
                                                    <option value="2" class="treadstone-input">Option #2</option>
                                                    <option value="3" class="treadstone-input">Option #3</option>
                                                </select>
                                            </div>
                                            <div class="col col-md-3">
                                                <label  class=" form-control-label">To</label>
                                                <br>
                                                <select name="select"  class="form-control treadstone-select">
                                                    <option value="0" class="treadstone-input">Please select</option>
                                                    <option value="1" class="treadstone-input">Option #1</option>
                                                    <option value="2" class="treadstone-input">Option #2</option>
                                                    <option value="3" class="treadstone-input">Option #3</option>
                                                </select>

                                            </div>

                                            <hr>
                                        </div>
                                        <div class="row form-group dayfromto">

                                            <div class="col-12 col-md-3">
                                                <label  class=" form-control-label">Day</label>

                                                <br>
                                                <input type="date" class="form-control treadstone-input" value="">


                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label  class=" form-control-label">From</label>
                                                <br>
                                                <select name="select"  class="form-control treadstone-select">
                                                    <option value="0" class="treadstone-input">Please select</option>
                                                    <option value="1" class="treadstone-input">Option #1</option>
                                                    <option value="2" class="treadstone-input">Option #2</option>
                                                    <option value="3" class="treadstone-input">Option #3</option>
                                                </select>

                                            </div>
                                            <div class="col col-md-3">
                                                <label  class=" form-control-label">To</label>
                                                <br>
                                                <select name="select"  class="form-control treadstone-select">
                                                    <option value="0" class="treadstone-input">Please select</option>
                                                    <option value="1" class="treadstone-input">Option #1</option>
                                                    <option value="2" class="treadstone-input">Option #2</option>
                                                    <option value="3" class="treadstone-input">Option #3</option>
                                                </select>

                                            </div>

                                            <hr>
                                        </div>
                                        <div class="row form-group dayfromto">

                                            <div class="col-12 col-md-3">
                                                <label  class=" form-control-label">Day</label>

                                                <br>
                                                <input type="date" class="form-control treadstone-input" value="">


                                            </div>
                                            <div class="col-12 col-md-3">
                                                <label  class=" form-control-label">From</label>
                                                <br>
                                                <select name="select"  class="form-control treadstone-select">
                                                    <option value="0" class="treadstone-input">Please select</option>
                                                    <option value="1" class="treadstone-input">Option #1</option>
                                                    <option value="2" class="treadstone-input">Option #2</option>
                                                    <option value="3" class="treadstone-input">Option #3</option>
                                                </select>
                                            </div>
                                            <div class="col col-md-3">
                                                <label  class=" form-control-label">To</label>
                                                <br>
                                                <select name="select"  class="form-control treadstone-select">
                                                    <option value="0" class="treadstone-input">Please select</option>
                                                    <option value="1" class="treadstone-input">Option #1</option>
                                                    <option value="2" class="treadstone-input">Option #2</option>
                                                    <option value="3" class="treadstone-input">Option #3</option>
                                                </select>

                                            </div>

                                            <hr>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-12 col-md-9">
                                                <button  href="#" class="btn long-blue-button">
                                                    <i class="zmdi zmdi-plus"></i> Add new date
                                                </button>
                                            </div>


                                        </div>

                                        <div class="row form-group">
                                            <div class="col-12 col-md-9">
                                                <button type="submit" class="au-btn au-btn-icon au-btn--blue au-btn--small right-blue-button">
                                                    <i class="zmdi zmdi-mail-send"></i> Send Request
                                                </button>
                                            </div>


                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <!-- DATA TABLE -->
                            <h3  class="title-5 m-b-5 table-title col-xs-12">Appointments <span class="col-xs-12 table-span-title">  Updated on 20 March 2002</span></h3>
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">


                                    <div class="rs-select2--light rs-select2--dark">
                                        <span style="color: #118df0;" class="table-sub-title-span"> All Appointments <span class="number-badge primary-badge "> 8</span></span>
                                    </div>

                                    <!--<button class="au-btn-filter"><i class="zmdi zmdi-filter-list"></i>filters</button>-->
                                </div>

                            </div>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2 table-hover">
                                    <thead>
                                    <tr>

                                        <th>User Name</th>
                                        <th>Date</th>
                                        <th>File Type</th>
                                        <th>Status</th>
                                        <th>Closing Date</th>

                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="tr-shadow">

                                        <td><span class="table-td-span-black">Samer Rafea</span></td>
                                        <td ><span class="table-td-span-primary">20 March 2020</span></td>
                                        <td><span class="badge file-type-refinance">Refinance</span></td>
                                        <td>
                                            <span class="badge status-closed">Closed File</span>
                                        </td>

                                        <td ><span class="table-td-span-black">20 march 2020</span></td>


                                        <td>
                                            <div class="table-data-feature">
                                                <button class="au-btn au-btn-icon au-btn--blue au-btn--small table-button">
                                                    View Details
                                                </button>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                    <tr class="tr-shadow">

                                        <td><span class="table-td-span-black">Samer Rafea</span></td>
                                        <td ><span class="table-td-span-primary">20 March 2020</span></td>
                                        <td><span class="badge file-type-refinance">Refinance</span></td>
                                        <td>
                                            <span class="badge status-opened">Completed</span>
                                        </td>

                                        <td ><span class="table-td-span-black">20 march 2020</span></td>


                                        <td>
                                            <div class="table-data-feature">
                                                <button class="au-btn au-btn-icon au-btn--blue au-btn--small table-button">
                                                    View Details
                                                </button>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                    <tr class="tr-shadow">

                                        <td><span class="table-td-span-black">Samer Rafea</span></td>
                                        <td ><span class="table-td-span-primary">20 March 2020</span></td>
                                        <td><span class="badge file-type-refinance">Refinance</span></td>
                                        <td>
                                            <span class="badge status-received">Received</span>
                                        </td>

                                        <td ><span class="table-td-span-black">20 march 2020</span></td>


                                        <td>
                                            <div class="table-data-feature">
                                                <button class="au-btn au-btn-icon au-btn--blue au-btn--small table-button">
                                                    View Details
                                                </button>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                    <tr class="tr-shadow">

                                        <td><span class="table-td-span-black">Samer Rafea</span></td>
                                        <td ><span class="table-td-span-primary">20 March 2020</span></td>
                                        <td><span class="badge file-type-refinance">Refinance</span></td>
                                        <td>
                                            <span class="badge status-closed">Closed File</span>
                                        </td>

                                        <td ><span class="table-td-span-black">20 march 2020</span></td>


                                        <td>
                                            <div class="table-data-feature">
                                                <button class="au-btn au-btn-icon au-btn--blue au-btn--small table-button">
                                                    View Details
                                                </button>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>

                                    <tr class="tr-shadow">

                                        <td><span class="table-td-span-black">Samer Rafea</span></td>
                                        <td ><span class="table-td-span-primary">20 March 2020</span></td>
                                        <td><span class="badge file-type-refinance">Refinance</span></td>
                                        <td>
                                            <span class="badge status-closed">Closed File</span>
                                        </td>

                                        <td ><span class="table-td-span-black">20 march 2020</span></td>


                                        <td>
                                            <div class="table-data-feature">
                                                <button class="au-btn au-btn-icon au-btn--blue au-btn--small table-button">
                                                    View Details
                                                </button>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>
                                    <tr class="tr-shadow">

                                        <td><span class="table-td-span-black">Samer Rafea</span></td>
                                        <td ><span class="table-td-span-primary">20 March 2020</span></td>
                                        <td><span class="badge file-type-refinance">Refinance</span></td>
                                        <td>
                                            <span class="badge status-closed">Closed File</span>
                                        </td>

                                        <td ><span class="table-td-span-black">20 march 2020</span></td>


                                        <td>
                                            <div class="table-data-feature">
                                                <button class="au-btn au-btn-icon au-btn--blue au-btn--small table-button">
                                                    View Details
                                                </button>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="spacer"></tr>


                                    </tbody>
                                </table>
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