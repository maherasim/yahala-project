@extends('layouts/layoutMaster')

@section('title', 'Event - Ticket List')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
    <script src="{{ asset('assets/js/wizard-ex-property-listing.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    {{-- <script src="{{asset('assets/js/app-ecommerce-product-list.js')}}"></script> --}}
@endsection

@section('content')

    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

            <h4 class="py-3 mb-4">
                <span class="text-muted fw-light">Event /</span> Ticket List
            </h4>

            <!-- Product List Widget -->

            <div class="card mb-4">
                <div class="card-widget-separator-wrapper">
                    <div class="card-body card-widget-separator">
                        <div class="row gy-4 gy-sm-1">
                            <div class="col-sm-6 col-lg-4">
                                <div
                                    class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                                    <div>
                                        <h6 class="mb-2">Total Tickets</h6>
                                        <h4 class="mb-2">$5,345.43</h4>
                                        <p class="mb-0"><span class="text-muted me-2">5k orders</span><span
                                                class="badge bg-label-success">+5.7%</span></p>
                                    </div>
                                    <div class="avatar me-sm-4">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-store-alt bx-sm"></i>
                                        </span>
                                    </div>
                                </div>
                                <hr class="d-none d-sm-block d-lg-none me-4">
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div
                                    class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                                    <div>
                                        <h6 class="mb-2">Total Sales</h6>
                                        <h4 class="mb-2">$674,347.12</h4>
                                        <p class="mb-0"><span class="text-muted me-2">21k orders</span><span
                                                class="badge bg-label-success">+12.4%</span></p>
                                    </div>
                                    <div class="avatar me-lg-4">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-laptop bx-sm"></i>
                                        </span>
                                    </div>
                                </div>
                                <hr class="d-none d-sm-block d-lg-none">
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div
                                    class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                                    <div>
                                        <h6 class="mb-2">Sale Amount</h6>
                                        <h4 class="mb-2">$14,235.12</h4>
                                        <p class="mb-0 text-muted">6k orders</p>
                                    </div>
                                    <div class="avatar me-sm-4">
                                        <span class="avatar-initial rounded bg-label-secondary">
                                            <i class="bx bx-gift bx-sm"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


<div class="card">

        <div class="card-datatable table-responsive">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                <div class="card-header d-flex flex-wrap py-3 justify-content-between">
                    <div class="me-5 ms-n2 mt-3">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search" class="form-control" placeholder="Search Order" aria-controls="DataTables_Table_0"></label></div>
                    </div>
                    <div class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end gap-3 gap-sm-2 flex-wrap flex-sm-nowrap pt-0">
                        <div class="dataTables_length mt-0 mt-md-3 me-2" id="DataTables_Table_0_length"><label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-select">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select></label></div>
                    </div>
                </div>
               <table class="table border-top" id="data-table">
                    <thead>
                        <tr>
                            <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label=""></th>
                            <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1" colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox" class="form-check-input"></th>
                            <th class="text-nowrap sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 132px;" aria-label="Customer Id: activate to sort column descending" aria-sort="ascending">
                                Event Id</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 280px;" aria-label="Customer: activate to sort column ascending">Event Title
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 225px;" aria-label="Country: activate to sort column ascending">Event Start
                            </th>
                            <th>Event End</th>
                            <th>Event Type</th>
                            <th>Total Ticket Sales</th>
                            <th style="text-align:right;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 225px;" aria-label="Country: activate to sort column ascending">Option
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#100696</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-warning">RC</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Rochell Cockill</span></a><small class="text-muted">rcockill1q@irs.gov</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-id rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Indonesia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                                <td></td>
                            <td>

                                 <a  style="float:right;" href="https://yekbun.hellodev.site/app/invoice/list" class="btn btn-primary">View</a>

                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#123210</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/16.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Norri Dillinton</span></a><small class="text-muted">ndillinton1o@bbc.co.uk</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-mk rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Macedonia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                                <td></td>
                            <td>

                                 <a  style="float:right;" href="https://yekbun.hellodev.site/app/invoice/list" class="btn btn-primary">View</a>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#137049</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/7.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Maddie Witherop</span></a><small class="text-muted">mwitherops@bing.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-cn rounded-circle me-2 fs-3"></i></div>
                                    <div><span>China</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                                <td></td>
                            <td>

                                 <a  style="float:right;" href="https://yekbun.hellodev.site/app/invoice/list" class="btn btn-primary">View</a>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#137230</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">BT</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Brooke Tegler</span></a><small class="text-muted">btegler2p@state.tx.us</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-kp rounded-circle me-2 fs-3"></i></div>
                                    <div><span>North Korea</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                                <td></td>
                            <td>

                                 <a  style="float:right;" href="https://yekbun.hellodev.site/app/invoice/list" class="btn btn-primary">View</a>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#140146</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/13.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Lauritz Ramble</span></a><small class="text-muted">lramble2j@discuz.net</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Russia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                                <td></td>
                            <td>

                                 <a  style="float:right;" href="https://yekbun.hellodev.site/app/invoice/list" class="btn btn-primary">View</a>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#152193</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-danger">ED</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Elsinore Daltry</span></a><small class="text-muted">edaltry20@themeforest.net</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-br rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Brazil</span></div>
                                </div>
                            </td>
                              <td></td>
                                <td></td>
                              <td></td>
                            <td>

                                 <a  style="float:right;" href="https://yekbun.hellodev.site/app/invoice/list" class="btn btn-primary">View</a>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#155681</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">PT</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Price Tremathack</span></a><small class="text-muted">ptremathackd@amazon.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Russia</span></div>
                                </div>
                            </td>
                              <td></td>
                                <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>-->
                            <!--<a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> -->
                                 <a  style="float:right;" href="https://yekbun.hellodev.site/app/invoice/list" class="btn btn-primary">View</a>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#158581</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><img src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/11.png" alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Michale Britton</span></a><small class="text-muted">mbritton2c@cloudflare.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-cn rounded-circle me-2 fs-3"></i></div>
                                    <div><span>China</span></div>
                                </div>
                            </td>
                              <td></td>
                                <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->
                                <!--<button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>-->
                            <!--<a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> -->
                                 <a  style="float:right;" href="https://yekbun.hellodev.site/app/invoice/list" class="btn btn-primary">View</a>
                              </td>
                        </tr>
                        <tr class="odd">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#165827</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-primary">TB</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Tobin Bassick</span></a><small class="text-muted">tbassick2e@quantcast.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-jo rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Jordan</span></div>
                                </div>
                            </td>
                              <td></td>
                                <td></td>
                              <td></td>
                            <td>
                                <!--<button type="button" class="btn p-1 accept"><i class="bx bx-check"></i></button>-->
                                <!--                                <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestDenied"><i class="bx bx-x"></i></button>-->




                            <!--    <button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestView"><i class="bx bx-block"></i></button>-->
                            <!--<a href="#"><button type="button" class="btn p-1" data-bs-toggle="modal" data-bs-target="#requestpopup"><i class="bx bx-show"></i></button></a> -->
                                 <a  style="float:right;" href="https://yekbun.hellodev.site/app/invoice/list" class="btn btn-primary">View</a>
                              </td>
                        </tr>
                        <tr class="even">
                            <td class="control dtr-hidden" tabindex="0" style="display: none;"></td>
                            <td class="  dt-checkboxes-cell"><input type="checkbox" class="dt-checkboxes form-check-input"></td>
                            <td class="sorting_1"><span class="fw-medium text-heading">#178408</span></td>
                            <td class="">
                                <div class="d-flex justify-content-start align-items-center customer-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2"><span class="avatar-initial rounded-circle bg-label-dark">LD</span></div>
                                    </div>
                                    <div class="d-flex flex-column"><a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/app/ecommerce/customer/details/overview"><span class="fw-medium">Laurie Dax</span></a><small class="text-muted">ldax1@lycos.com</small></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center customer-country">
                                    <div><i class="fis fi fi-ru rounded-circle me-2 fs-3"></i></div>
                                    <div><span>Russia</span></div>
                                </div>
                            </td>
                              <td></td>
                              <td></td>
                                <td></td>
                            <td>

                                 <a  style="float:right;" href="https://yekbun.hellodev.site/app/invoice/list" class="btn btn-primary">View</a>
                              </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Offcanvas to add new customer -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCustomerAdd" aria-labelledby="offcanvasEcommerceCustomerAddLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">Add Customer</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mx-0 flex-grow-0">
                <form class="ecommerce-customer-add pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="eCommerceCustomerAddForm" onsubmit="return false" novalidate="novalidate">
                    <div class="ecommerce-customer-add-basic mb-3">
                        <h6 class="mb-3">Basic Information</h6>
                        <div class="mb-3 fv-plugins-icon-container">
                            <label class="form-label" for="ecommerce-customer-add-name">Name*</label>
                            <input type="text" class="form-control" id="ecommerce-customer-add-name" placeholder="John Doe" name="customerName" aria-label="John Doe">
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <div class="mb-3 fv-plugins-icon-container">
                            <label class="form-label" for="ecommerce-customer-add-email">Email*</label>
                            <input type="text" id="ecommerce-customer-add-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="customerEmail">
                            <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>
                        <div>
                            <label class="form-label" for="ecommerce-customer-add-contact">Mobile</label>
                            <input type="text" id="ecommerce-customer-add-contact" class="form-control phone-mask" placeholder="+(123) 456-7890" aria-label="+(123) 456-7890" name="customerContact">
                        </div>
                    </div>

                    <div class="ecommerce-customer-add-shiping mb-3 pt-3">
                        <h6 class="mb-3">Shipping Information</h6>
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-customer-add-address">Address Line 1</label>
                            <input type="text" id="ecommerce-customer-add-address" class="form-control" placeholder="45 Roker Terrace" aria-label="45 Roker Terrace" name="customerAddress1">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-customer-add-address-2">Address Line 2</label>
                            <input type="text" id="ecommerce-customer-add-address-2" class="form-control" aria-label="address2" name="customerAddress2">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ecommerce-customer-add-town">Town</label>
                            <input type="text" id="ecommerce-customer-add-town" class="form-control" placeholder="New York" aria-label="New York" name="customerTown">
                        </div>
                        <div class="row mb-3">
                            <div class="col-12 col-sm-6">
                                <label class="form-label" for="ecommerce-customer-add-state">State / Province</label>
                                <input type="text" id="ecommerce-customer-add-state" class="form-control" placeholder="Southern tip" aria-label="Southern tip" name="customerState">
                            </div>
                            <div class="col-12 col-sm-6">
                                <label class="form-label" for="ecommerce-customer-add-post-code">Post Code</label>
                                <input type="text" id="ecommerce-customer-add-post-code" class="form-control" placeholder="734990" aria-label="734990" name="pin" pattern="[0-9]{8}" maxlength="8">
                            </div>
                        </div>
                        <div>
                            <label class="form-label" for="ecommerce-customer-add-country">Country</label>
                            <div class="position-relative"><select id="ecommerce-customer-add-country" class="select2 form-select select2-hidden-accessible" data-select2-id="ecommerce-customer-add-country" tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="2">Select</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="Canada">Canada</option>
                                    <option value="China">China</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">Indonesia</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Korea">Korea, Republic of</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Philippines">Philippines</option>
                                    <option value="Russia">Russian Federation</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="United States">United States</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 335px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ecommerce-customer-add-country-container"><span class="select2-selection__rendered" id="select2-ecommerce-customer-add-country-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">United
                                                    States </span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        </div>

                    </div>

                    <div class="d-sm-flex mb-3 pt-3">
                        <div class="me-auto mb-2 mb-md-0">
                            <h6 class="mb-0">Use as a billing address?</h6>
                            <small class="text-muted">If you need more info, please check budget.</small>
                        </div>
                        <label class="switch m-auto pe-2">
                            <input type="checkbox" class="switch-input">
                            <span class="switch-toggle-slider">
                                <span class="switch-on"></span>
                                <span class="switch-off"></span>
                            </span>
                        </label>
                    </div>
                    <div class="pt-3">
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Add</button>
                        <button type="reset" class="btn bg-label-danger" data-bs-dismiss="offcanvas">Discard</button>
                    </div>
                    <input type="hidden">
                </form>
            </div>
        </div>
    </div>
        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>

    <script>
        function delete_service(el) {
            let link = $(el).data('id');
            $('.deleted-modal').modal('show');
            $('#delete_form').attr('action', link);
        }
    </script>


@section('page-script')
    <script>
        function confirmAction(event, callback) {
            event.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "Are you sure you want to delete this?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                customClass: {
                    confirmButton: 'btn btn-danger me-3',
                    cancelButton: 'btn btn-label-secondary'
                },
                buttonsStyling: false
            }).then(function(result) {
                if (result.value) {
                    callback();
                }
            });
        }
    </script>
    <script>
        function drpzone_init() {
            dropZoneInitFunctions.forEach(callback => callback());
        }
    </script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>



        <x-modal
id="requestpopup"
title="Detail of Air Jordan"
size="md">
 @include('content.include.live_stream.popuptwo')
</x-modal>



<x-modal
id="requestView"
title="Request Deined"
saveBtnText="Submit"
saveBtnType="button"
saveBtnForm="createForm"
size="md">
 @include('content.include.live_stream.view_request')
</x-modal>
@endsection
@endsection
