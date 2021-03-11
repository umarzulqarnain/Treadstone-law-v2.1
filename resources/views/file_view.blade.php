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
                            <li class="first-li" >File View</li>


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
                            <li class="first-li" >File view</li>


                        </ul>
                        <button class="au-btn-filter" style="box-shadow: none;color: #0db686;line-height: 0;font-size: 27px;position: absolute;right: 0%;"><i class="far fa-plus-square"></i></button>
                    </div>
                </div>
            </div>

        </header>
        <!-- END HEADER DESKTOP-->

        <!--FILE_VIEW MAIN CONTENT-->

        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">

                    <!--<div class="row">-->

                    <!--<div class="col-lg-12">-->
                    <!--<h3  class="title-5 m-b-5 table-title col-xs-12">File View</h3>-->
                    <!--<h6>File Details</h6>-->
                    <!--<br>-->
                    <!--</div>-->

                    <!--</div>-->

                    <br>
                    <br>
                    <div class="row">

                        <div class="col-lg-12">

                            <div class="card" style="border: 1px solid #fff;">
                                <div class="card-body card-block">
                                    <div class="row">


                                        <div class="col-12 col-md-12">
                                            <br>
                                            <ul class="list-unstyled multi-steps">

                                                <li class="donestep"> <span >Collecting Information</span></li>

                                                <li class="is-active"> <span> Preparing Documents</span>  </li>
                                                <li class=""> <span>Scheduling Appointment </span> </li>
                                                <li class=""> <span>Signing</span> </li>
                                                <li class=""> <span>Closing Tasks</span> </li>
                                                <li class=""> <span>Registered + Payout Pending </span></li>
                                                <li><span>Completed</span></li>

                                            </ul>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-4">
                            <div class="card" style="    border: 1px solid #fff;">
                                <div style="padding: 0" class="card-body card-block">

                                    <div style="height: calc(65vh - 75px);" class="menu-sidebar__content js-scrollbar1">

                                        <label class="title-label" >Progress</label>
                                        <nav class="navbar-sidebar">
                                            <ul class="list-unstyled navbar__list">
                                                <li class="active">
                                                    <a class="side-link" href="#">
                                                        <i class="fas fa-chart-bar"></i>General Information</a>
                                                </li>
                                                <li>
                                                    <a class="side-link" href="#">
                                                        <i class="fas fa-table">

                                                        </i>Tax Information
                                                        <i style="color: #e96161; float: right ; font-size: 22px" class="fas fa-warning"></i>

                                                    </a>
                                                </li>
                                                <li >
                                                    <a class="side-link" href="#">
                                                        <i class="fas fa-table"></i>Mortagage Information</a>
                                                </li>
                                                <li>
                                                    <a  style="color: black ; font-weight: 900" class="side-link" href="#">
                                                        <i  class="fas fa-table"></i>
                                                        Schedule Appointment
                                                        <i style="color: #2eb62e; float: right ; font-size: 22px" class="fas fa-check-circle"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="side-link" href="#">
                                                        <i class="fas fa-table"></i>Funding Information</a>
                                                </li>
                                            </ul>
                                        </nav>

                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card" style="border: 1px solid #fff;">
                                <div class="card-body card-block">
                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col-12 col-md-12">
                                                <label style="font-weight: 600" class=" form-control-label">Enter your E-mail address</label>
                                                <input type="text" class="form-control treadstone-input" value="itszakjo@gmail.com">
                                            </div>

                                            <div class="col-12 col-md-6">

                                                <br>
                                                <label style="font-weight: 600"   class=" form-control-label">Select The Law Clerk</label>
                                                <select name="select"  class="form-control treadstone-select">
                                                    <option value="0" class="treadstone-input">Please select</option>
                                                    <option value="1" class="treadstone-input">Option #1</option>
                                                    <option value="2" class="treadstone-input">Option #2</option>
                                                    <option value="3" class="treadstone-input">Option #3</option>

                                                </select>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <br>
                                                <label style="font-weight: 600"  class=" form-control-label">Select the file</label>
                                                <select name="select"  class="form-control treadstone-select">
                                                    <option value="0" class="treadstone-input">Please select</option>
                                                    <option value="1" class="treadstone-input">Option #1</option>
                                                    <option value="2" class="treadstone-input">Option #2</option>
                                                    <option value="3" class="treadstone-input">Option #3</option>
                                                </select>
                                            </div>

                                            <div class="col-12 col-md-6">

                                                <br>
                                                <label style="font-weight: 600"  class="form-control-label">Select a reminder type</label>
                                                <select name="select"  class="form-control treadstone-select">
                                                    <option value="0" class="treadstone-input">Please select</option>
                                                    <option value="1" class="treadstone-input">Option #1</option>
                                                    <option value="2" class="treadstone-input">Option #2</option>
                                                    <option value="3" class="treadstone-input">Option #3</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <br>

                                                <br>
                                                <label class="officer-label">
                                                    <input type="checkbox" name="officer" class="card-input-officers-element" />
                                                    <div style="padding: 14px 8px;margin: 0; margin-top: 7px" class="card-input col-md-12">
                                                        <div class="officer-content">
                                                            <h5>
                                                                <span style="display: block;">Mark Tasks as completed</span>
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </label>
                                            </div>

                                        </div>
                                        <div class="row form-group">

                                            <div class="col col-md-12">
                                                <br>
                                                <label style="font-weight: 600"   class=" form-control-label">Document List</label>
                                            </div>

                                        </div>
                                        <div class="table-responsive table-responsive-data2">
                                            <table class="table table-data2 table-hover">
                                                <thead>
                                                <tr>
                                                    <th>Document Type</th>
                                                    <th>Upload Date</th>
                                                    <th>Download Document</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="tr-shadow">

                                                    <td class="td-user-view" ><span class="table-td-span-primary">Refincance</span></td>

                                                    <td  class="td-user-view"><span class="table-td-span-black">20 march 2020 </span></td>

                                                    <td class="td-user-view">
                                                        <button  href="#" class="btn download-button-file">
                                                            <i class="zmdi zmdi-download"></i> download the document
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr class="spacer"></tr>
                                                <tr class="spacer"></tr>
                                                <tr class="spacer"></tr>
                                                <tr class="tr-shadow">

                                                    <td class="td-user-view" ><span class="table-td-span-primary">Refincance</span></td>

                                                    <td  class="td-user-view"><span class="table-td-span-black">20 march 2020 </span></td>

                                                    <td class="td-user-view">
                                                        <button  href="#" class="btn request-button">
                                                            <i class="zmdi zmdi-info"></i> request the document
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr class="spacer"></tr>

                                                </tbody>
                                            </table>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <br>
                                                <label style="font-weight: 600"   class=" form-control-label">Upload Document</label>
                                            </div>

                                        </div>
                                        <div class="row form-group">


                                            <div class="col-12 col-md-6">

                                                <label style="color: #fff;" class=" form-control-label">A</label>

                                                <input style="border: 2px dashed #cccccc61; padding: 10px;" type="file" class="btn long-blue-button">

                                                <br>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <label style="font-weight: 600"   class=" form-control-label">Select  a Document File</label>
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


                                            <div class="col-12 col-md-6">


                                                <br>
                                                <label style="font-weight: 800" class=" form-control-label">Was a deposit received by your real estate baker ?</label>
                                                <br>
                                            </div>
                                            <div class="col-12 col-md-3">

                                                <label class="officer-label">
                                                    <input type="radio" name="choose" class="card-input-officers-element" />
                                                    <div style="padding: 13px 0px;margin:0; margin-top: 15px" class="card-input col-md-12">
                                                        <div style="padding-left: 0;" class="officer-content">
                                                            <h5>
                                                                <span style="display: block;">Yes</span>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </label>
                                                <br>
                                            </div>
                                            <div class="col-12 col-md-3">

                                                <label class="officer-label">
                                                    <input type="radio" name="choose" class="card-input-officers-element" />
                                                    <div style="padding: 13px 0px;margin: 0; margin-top: 15px" class="card-input col-md-12">
                                                        <div style="padding-left: 0;" class="officer-content">
                                                            <h5>
                                                                <span style="display: block;">No</span>
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </label>
                                                <br>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <button type="submit" class="au-btn au-btn-icon au-btn--blue au-btn--small right-blue-button">
                                                Next step  <i style="margin-left: 13px;" class="zmdi zmdi-arrow-forward"></i>
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
            </div>
        </div>



    </div>



@endsection