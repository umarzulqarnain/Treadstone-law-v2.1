
<div class="aside aside-left d-flex aside-fixed" id="kt_aside">
    <!--begin::Primary-->
    <!--end::Primary-->
    <!--begin::Secondary-->
    <div class="aside-secondary d-flex flex-row-fluid">
        <!--begin::Workspace-->
        <div class="aside-workspace scroll scroll-push my-2">
            <!--begin::Tab Content-->
            <div class="tab-content">
                <!--begin::Tab Pane-->
                <div class="tab-pane p-3 px-lg-7 py-lg-5 fade show active" id="kt_aside_tab_1">
                    <!--begin::Form-->
                    <a href="{{ URL::to('/') }}" class="side-link">
                        {{--<img alt="Logo" src="http://app.homeli.ca/public/uploads/Homeli-Logo.png" class="max-h-30px"/>--}}
                        <img alt="Logo" src="{{ URL::to('images/tread-logo.png') }}" class="max-h-50px"/>

                    </a>

                    <!--begin::List-->
                    <div class="list list-hover mt-20">
                        <!--begin::Item-->
                        <a href="{{ url('/') }}" class="text-muted text-hover-primary font-weight-bold side-link">
                            <div class="list-item hoverable p-2 p-lg-3 mb-2 @if(request()->segment(1)=='') active @endif ">
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40 symbol-light mr-4">
                                        <span class="symbol-label bg-hover-white">
                                            <span class="svg-icon svg-icon-xl  @if(request()->segment(1)=='') svg-icon-success @endif">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <span class="text-dark-75 font-size-h6 mb-0">
                                        Dashboard
                                        </span>

                                    </div>
                                    <!--begin::End-->
                                </div>
                            </div>
                            <!--end::Item-->
                        </a>
                        <!--begin::Item-->
                        <a href="{{ route('messages') }}" class="text-muted text-hover-primary font-weight-bold side-link">
                            <div class="list-item hoverable p-2 p-lg-3 mb-2 @if(request()->segment(1)=='messages') active @endif ">
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40 symbol-light mr-4">
                                            <span class="symbol-label bg-hover-white">
                                                <span class="svg-icon svg-icon-lg  @if(request()->segment(1)=='messages') svg-icon-success @endif ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
                                                            <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
													<span class="text-dark-75 font-size-h6 mb-0">
														Messages
													</span>

                                    </div>
                                    <!--begin::End-->
                                </div>
                            </div>
                            <!--end::Item-->
                        </a>
                        <!--begin::Item-->
                        @if(auth()->user()->type == "Admin")
                        <a href="{{ route('users') }}" class="text-muted text-hover-primary font-weight-bold side-link">
                            <div class="list-item hoverable p-2 p-lg-3 mb-2 @if(request()->segment(1)=='users') active @endif ">
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40 symbol-light mr-4">
                                        <span class="symbol-label bg-hover-white ">
                                            <span class="svg-icon svg-icon-xl @if(request()->segment(1)=='users') svg-icon-success @endif  ">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"></polygon>
													<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
													<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
												</g>
											</svg>                                                <!--end::Svg Icon-->
                                            </span>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
                                        <span class="text-dark-75 font-size-h6 mb-0">
                                        Users
                                        </span>

                                    </div>
                                    <!--begin::End-->
                                </div>
                            </div>
                            <!--end::Item-->
                        </a>
                        @endif
                         <!--begin::Item-->
                        <a href="{{ route('profile') }}" class="text-muted text-hover-primary font-weight-bold side-link">
                            <div class="list-item hoverable p-2 p-lg-3 mb-2 @if(request()->segment(1)=='profile') active @endif ">
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40 symbol-light mr-4">
													<span class="symbol-label bg-hover-white">
														<span class="svg-icon svg-icon-xl @if(request()->segment(1)=='profile') svg-icon-success @endif ">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
													<span class="text-dark-75 font-size-h6 mb-0">
													Profile
													</span>

                                    </div>
                                    <!--begin::End-->
                                </div>
                            </div>
                            <!--end::Item-->
                        </a>

                        <!--begin::Item-->
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"  class="side-link text-muted text-hover-primary font-weight-bold">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <div class="list-item hoverable p-2 p-lg-3 mb-2 ">
                                <div class="d-flex align-items-center">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-40 symbol-light mr-4">
													<span class="symbol-label bg-hover-white">
														<i class="flaticon-logout"></i>
													</span>
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Text-->
                                    <div class="d-flex flex-column flex-grow-1 mr-2">
													<span class="text-dark-75 font-size-h6 mb-0">
													Logout
													</span>

                                    </div>
                                    <!--begin::End-->
                                </div>
                            </div>
                        </a>
                        <!--end::Item-->
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Tab Pane-->
                <!--begin::Tab Pane-->
                <!--end::Tab Pane-->
            </div>
            <!--end::Tab Content-->
        </div>
        <!--end::Workspace-->
    </div>
    <!--end::Secondary-->
</div>

