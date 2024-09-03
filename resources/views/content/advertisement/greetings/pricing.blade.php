@extends('layouts/layoutMaster')

@section('title', 'Pricing - List')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-icons.css') }}" />
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css " rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('public/assets/vendor/libs/bs-stepper/bs-stepper.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />


@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
@endsection

@section('content')
    <script>
        const dropZoneInitFunctions = [];
    </script>
    <script src="//cdn.ckeditor.com/4.16.1/basic/ckeditor.js"></script>


    <style>
        .details {
            background: #f3f3f3;
            padding: 5px;
            border-radius: 10px;
            padding-bottom: 10px;
            margin-top: 5px;
        }

        .w-px-40 {
            height: 40px !important;
        }

        .upper {
            text-transform: uppercase;
        }

        .text-rigth {
            float: left;
            margin-right: 10px;
        }

        .ava-link {
            color: unset;
        }


        .modal .modal-header .btn-close {
            margin-top: -1.25rem;
            position: fixed;
            margin-left: 495px;
        }

        .dropify-wrapper .dropify-message span.file-icon {
            display: block !important;
            line-height: 50px;
            display: block !important;
            width: 100%;
        }

        .removebtn {
            position: absolute;

            margin-right: 10px;

            height: 30px;
            width: 30px;
            max-width: 30px;
            padding: 5px;
            display: none;
        }

        img {
            height: fit-content !important;
        }

        .bs-stepper .bs-stepper-content {
            padding: 0.5rem 1.5rem;
        }

        b,
        .title-tx {
            padding: 0px !important;
        }

        .mangprices {
            border-bottom: solid 1px #d9dee3;
        }

        .main-panel {
            background: #f2f2f2;
            margin-top: 10px;
            border-radius: 10px;
        }

        .max-plans {
            text-align: right;
            color: #DA6787;
            margin-bottom: 5px;
        }

        #avatar_image {
            height: 120px;
            /*border-radius:50%;*/
            width: 120px;
            cursor: pointer;
        }

        #uploadimage {
            display: none;
        }

        .bot-20 {
            margin-bottom: 20px;
        }

        .cke_notification_warning {
            display: none;
        }

        .price-list-heading {
            padding: 10px;
            background: #fff;
            border-radius: 10px;
            max-width: 75%;
            margin: auto;
            text-align: center;
            margin-bottom: 10px;
        }

        .price-list-heading h5 {
            margin-bottom: 0px;
        }

        .price-item {
            padding: 15px;
            background: #fff;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .currency {
            background: #8d92a5;
            padding-left: 5px;
            border-radius: 50%;
            height: 20px;
            width: 20px;
            display: block;
            float: left;
            color: #fff;
            font-size: 13px;
            margin-right: 3px;
        }

        .price {
            color: #ED1C25;
        }

        .txt-green {
            color: #1BC469;
            font-weight: 600;
        }

        .btn-save {
            margin-top: 10px;
            background: #f2f2f2;
        }

        .dots-img {
            float: right;
            margin-top: 5px;
        }

        .price_details {
            width: calc(100% - 100px);
            float: left;
        }

        .dots-img {
            cursor: pointer;
            width: 95px;
        }

        #links_btns {
            width: 20px;
            height: 20px;
            background: red;
        }

        .show_details {
            cursor: pointer;
        }
    </style>


    <!-- Content wrapper -->

    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="fw-bold py-3 mb-4">
                <span class="text-muted fw-light">Wizard examples /</span> Pricing List
            </h4>



            <!-- Property Listing Wizard -->

            <div class="row">

                <div class="col-md-8">




                    <div id="wizard-property-listing" class="bs-stepper vertical ">

                        <form method="POST" enctype="multipart/form-data">
                            @csrf


                            <input type="hidden" name="upid" id="upid" value="0" />

                            <div class="bs-stepper-content">

                                <div class="row mangprices">
                                    <b>Manage Prices</b>
                                    <!-- <input required class="form-control" placeholder="Title of Price" name="title" style="margin-bottom:5px;" />-->
                                    <div class="title-txt">Title of Price</div>
                                </div>


                                <div class="col-md-12 container p-3 main-panel">

                                    <div class="row">
                                        <div class="col-md-12 max-plans">
                                            Max 5 Prices plan allowed
                                        </div>

                                        <div class="col-md-12 text-center bot-20">
                                            <label for="uploadimage"><img id="avatar_image"
                                                    src="{{ asset('/images/uploadimage.png') }}" /> </label>
                                            <input required name="dp" id="uploadimage" type="file"
                                                onchange="loadFile(event)" class="dropify" data-height="90"
                                                accept="image/*" />

                                            <button type="button" class="btn btn-danger removebtn">X</button>
                                        </div>



                                        <div class="col-md-3">

                                            <label>Type Price Title</label>
                                            <input required class="form-control mb-3 one" id="title" name="title"
                                                type="text" class="mb-4" placeholder="Price Title...">

                                        </div>

                                        <div class="col-md-3">

                                            <label>Total Days Allowed</label>
                                            <input required class="form-control mb-3 one" id="days" name="days"
                                                min="0" type="number" class="mb-4" placeholder="1" value="1">

                                        </div>

                                        <div class="col-md-3">

                                            <label>Select Currency</label>
                                            <select required class="form-control mb-3 one" id="currency" name="currency"
                                                class="mb-4">
                                                <option value="$">USD</option>
                                                <option value="€">EUR</option>
                                                <option value="£">GBP</option>
                                                <option value="CHF">CHF</option>
                                                <option value="CA$">CAD</option>
                                                <option value="SAR">SAR</option>
                                                <option value="AED">AED</option>
                                                <option value="PKR">PKR</option>
                                                <option value="INR">INR</option>


                                            </select>

                                        </div>

                                        <div class="col-md-3">

                                            <label>Type Price</label>
                                            <input required class="form-control mb-3 one" id="price" name="price"
                                                type="text" placeholder="Free">

                                        </div>



                                        <div class="col-md-12 ">
                                            <label>Description</label>
                                            <textarea required class="form-control" id="description" name="description" id="description" placeholder="Description"></textarea>
                                        </div>

                                    </div>


                                </div>

                                <div class="col-md-12 text-center">
                                    <button class="btn btn-save">
                                        Save
                                    </button>
                                    <button class="btn btn-save" type="button" onclick="resetval();">
                                        Reset
                                    </button>

                                </div>
                        </form>








                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="main_side_bar">
                    <div class="price-list-heading">
                        <h5 class="d-flex justify-content-center">Our Pricing List</h5>
                    </div>



                    @foreach ($pricings as $newprice)
                        <div style="padding:15px" class="coloun price-item">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex justify-content-inline">
                                    <img src="{{ asset('/images/prices/' . $newprice->image) }}" alt=""
                                        width="20px" height="25px">

                                    <h5><b>{{ $newprice->title }}</b></h5>
                                </div>
                                <div class="d-flex justify-content-inline">
                                    <p class="price-free">
                                        <span class="currency">{{ $newprice->currency }}</span>
                                        {{ $newprice->price }}
                                    </p>

                                </div>
                            </div>
                            <p class="price_details"><span class="txt-green">&#10003; &nbsp;{{ $newprice->days }}
                                    days</span>
                                {{ $newprice->desription }}


                            </p>


                            <!--<img src="{{ asset('assets/img/dots.jpg') }}" class="dots-img" alt="" width="20px" height="20px">
        -->
                            <div class="dots-img">
                                <div class="btn show_details" cid="{{ $newprice->id }}" data-bs-toggle="tooltip"
                                    data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                    data-bs-original-title="Edit"><i class="bx bx-edit"></i></div>



                                <form action="" onsubmit="confirmAction(event, () => event.target.submit())"
                                    method="post" class="d-inline">
                                    @csrf
                                    <input type="hidden" name="delid" value="{{ $newprice->id }}" />
                                    <input type="hidden" name="isdelete" value="1" />
                                    <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip"
                                        data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true"
                                        data-bs-original-title="Remove">
                                        <i class="bx bx-trash me-1"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="clearfix"></div>

                            <div>

                            </div>

                        </div>
                    @endforeach

                    <!--
        <div style="padding:15px" class="coloun mt-4 price-item">
            <div class="d-flex justify-content-between ">
                <div class="d-flex justify-content-inline ">
                    <img src="{{ asset('assets/img/premium.png') }}" alt="" width="20px" height="25px">
                    <h5>Starter</h5>
                </div>
                <div class="d-flex justify-content-inline">
                    <p class="price">
           <span class="currency">€</span>
           9,99</p>
                   

                </div>
            </div>
            <p class="price_details"><span class="txt-green">&#10003; &nbsp;7 days</span> in <span class="txt-green">selected area</span> and
          in <span class="txt-green">category</span> on <span class="txt-green">first place</span>
          
         </p>
         <img src="{{ asset('assets/img/dots.jpg') }}" class="dots-img" alt="" width="20px" height="20px">
         <div class="clearfix"></div>
        </div>





        <div style="padding:15px" class="coloun mt-5 price-item">
            <div class="d-flex justify-content-between">
                <div class="d-flex justify-content-inline mt-1 ">
                    <img src="{{ asset('assets/img/advance.png') }}" alt="" width="20px" height="25px">
                    <h5>Advanced</h5>
                </div>
                <div class="d-flex justify-content-inline">
                    <p class="price">
           <span class="currency">€</span>
           19,99</p>
                   

                </div>
            </div>
            <p class="price_details"><span class="txt-green">&#10003; &nbsp;10 days</span> in <span class="txt-green">selected area </span>
          and in <span class="txt-green">category</span> on
          <span class="txt-green">first place in Feeds</span>
          
         </p>
         <img src="{{ asset('assets/img/dots.jpg') }}" class="dots-img" alt="" width="20px" height="20px">
         <div class="clearfix"></div>
        </div>

        -->

                </div>

            </div>
        </div>

    </div>
    <!--/ Property Listing Wizard -->


    <!--/ Content wrapper -->




@section('page-script')
    <script>
        var imgsrc = $("#avatar_image").attr("src");

        //CKEDITOR.replace('description');


        setTimeout(function() {
            $(".alert-message").fadeOut("slow");
        }, 5000);


        function addnew() {
            var str = '<div class="col-md-12 sources">'
            str = str + '<input class="form-control source_list" name="source_link[]" placeholder="Add Source Link Here" />'
            str = str +
                '<button type="button"  class="btn btn-sm btn-icon source_btn remove" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Add">';
            str = str + '<i class="bx bx-trash"></i></button></div>';

            $("#sourcelist").append(str);
        }

        $(document).on("click", ".remove", function() {
            $(this).closest(".sources").html("");

        });


        var loadFile = function(event) {
            var image = document.getElementById('avatar_image');

            image.src = URL.createObjectURL(event.target.files[0]);
            $(".removebtn").show();
        };

        $(document).on("click", ".removebtn", function() {
            $("#avatar_image").attr("src", imgsrc);
            $(".removebtn").hide();

            var fileInput = document.getElementById('uploadimage')
            fileInput.value = ''
            fileInput.dispatchEvent(new Event('change'));

        });

        var url = "{{ url('/get-pricing/') }}";
        var imgurl = "{{ asset('') }}";
        var imgsrc = $("#avatar_image").attr("src");


        $(document).on("click", ".show_details", function() {

            var cid = $(this).attr("cid");
            var apiurl = url + "/" + cid;
            $.ajax({
                url: apiurl,
                cache: false,
                success: function(r) {
                    var result = JSON.parse(r);

                    $("#upid").val(result._id);
                    $("#title").val(result.title);
                    $("#days").val(result.days);
                    $("#currency").val(result.currency);
                    $("#price").val(result.price);
                    if (result.image != "") {
                        var imgpath = imgurl + "images/prices/" + result.image;
                    } else {
                        var imgpath = "https://www.w3schools.com/howto/img_avatar.png";
                    }
                    $("#avatar_image").attr("src", imgpath);
                    $("#description").val(result.desription);
                }
            });
        });

        function resetval() {

            $("#upid").val("0");
            $("#title").val("");
            $("#days").val("");
            $("#currency").val("");
            $("#price").val("");
            $("#avatar_image").attr("src", imgsrc);
            $("#description").val("");
        }

        function delete_service(el) {
            let link = $(el).data('id');
            $('.deleted-modal').modal('show');
            $('#delete_form').attr('action', link);
        }

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
        //$('.dropify').dropify();
    </script>
    <script>
        function drpzone_init() {
            dropZoneInitFunctions.forEach(callback => callback());
        }
    </script>
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
@endsection
