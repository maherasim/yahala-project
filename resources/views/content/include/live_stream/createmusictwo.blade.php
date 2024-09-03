<style>
    .modal-footer {
        display: none;
    }

    .bgchn {
        cursor: pointer;
    }

    .owl-buttons {
        display: none;
    }


    .owl-carousel:hover .owl-buttons {
        display: block;
    }

    .owl-item {
        text-align: center;
    }

    .owl-nav {
        display: none !important;
    }

    .owl-theme .owl-controls .owl-buttons div {
        background: transparent;
        color: #869791;
        font-size: 40px;
        line-height: 300px;
        margin: 0;
        padding: 0 60px;
        position: absolute;
        top: 0;
    }

    .owl-theme .owl-controls .owl-buttons .owl-prev {
        left: 0;
        padding-left: 20px;
    }

    .owl-theme .owl-controls .owl-buttons .owl-next {
        right: 0;
        padding-right: 20px;
    }

    .owl-item {
        width: auto !important;
    }

    .carousel-indicators [data-bs-target] {
        background-color: black !important;
    }

    .owl-dots {
        display: none !important;
    }

    .modal-content {
        scrollbar-width: none;
    }

    #requestpopuptwo .btn-close {
        position: fixed !important;
        right: -56px !important;
        top: 30px !important;
        z-index: 2 !important;
    }

    .modal-content {
        /*overflow:scroll !important;*/
    }

    .dropify-wrapper .dropify-message span.file-icon {
        width: 100% !important;
    }

    .modal-content {
        padding: 20px !important;
    }

    .dropify-message .file-icon p {
        font-size: 24px !important;
    }

    .color-selector {
        background-color: #eaeaea;
        border-radius: 0px 0px 5px 5px;
        padding: 10px;
        display: flex;
        justify-content: space-between;
    }

    .color-option {
        height: 35px;
        width: 35px;
        border-radius: 100%;
        cursor: pointer;
    }

    .selected {
        border: 2px solid #000;
        /* You can customize this border as you wish */
    }

    #sharevideo {
        justify-content: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #shareimage {
        justify-content: center;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .modal-content {
        padding: 0px !important;
    }

    .modal-body {
        padding: 0px !important;
    }

    /*.customborderradiustopleft .dropify-wrapper {*/
    /*        border-radius:15px 0px 0px 0px;*/

    /*}*/
    /*.customborderradiustopright .dropify-wrapper{*/
    /*       border-radius:0px 15px 0px 0px;*/
    /*}*/

    /*    .dropify-wrapper{*/
    /*        border-radius:15px !important;*/
    /*    }*/

    .dropify-preview {
        padding: 0px !important;
    }

    .dropify-wrapper {
        border: none !important;
    }

    /*.dropify-wrapper:hover{*/
    /*    border-radius:15px !important;*/
    /*}*/
    .modal-content {
        border-radius: 15px;
    }

    .upload-btn {
        position: absolute;
        top: 2px;
        right: 13px;
        padding: 6px;
        z-index: 99999;
    }


    /*css add*/


    /* input image */
    /* input image */
    /* input image */
    .card-input-image {
        height: 300px;
        /* Set a fixed height */
        width: 100%;
        /* Make it full width */
        border-radius: 8px;
        position: relative;
        margin: 0 auto 12px auto;
        overflow: hidden;
        /* Prevent child elements from overflowing */
    }

    .card-input-image .label-upload-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 8px;
        color: #629ef5;
        font-weight: 700;
        font-size: 14px;
        line-height: 21px;
        border: 2px dashed #b0cffa;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        z-index: 1;
        /* Ensure the label is above the image */
    }

    .card-input-image input {
        width: 100%;
        height: 100%;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
        /* Ensure the input is above the label */
    }

    .card-input-image .image-preview {
        width: 100%;
        height: 100%;
        border-radius: 8px;
        object-fit: cover;
    }

    .card-input-image .btn-delete {
        background: #ef4e4e;
        border-radius: 14.5455px;
        color: #ffffff;
        font-weight: 700;
        font-size: 10px;
        line-height: 10px;
        border: none;
        padding: 7.27273px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: none;
        z-index: 3;
        /* Ensure the delete button is above other elements */
    }

    /* input image active state */
    .card-input-image.active .label-upload-image {
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45));
        color: #ffffff;
        border: none;
    }

    .card-input-image.active .image-preview {
        display: initial;
    }

    .card-input-image.active .btn-delete {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .videoclass:hover #videohover {
        visibility: visible !important;
    }

    /* New Css */

    .dz-size {
        font-size: 12px !important;
        padding: 0 !important;
    }

    .dropzone .dz-preview .dz-details .dz-size {
        margin-bottom: 0 !important;
    }

    .row.dz-processing.dz-image-preview.dz-success.dz-complete {
        width: 100% !important;
        margin: 0 auto !important;
    }

    .dz-thumbnail {
        width: 90px !important;
        height: 90px !important;
        margin: 0 auto !important;
    }

    .dropzone .dz-preview .dz-details {
        position: relative !important;
    }

    a.dz-remove {
        width: 95%;
        margin: 0 auto;
    }
</style>

<form action="{{ route('admin_activity.store_feeds') }}" id="feedsForm" method="post" enctype="multipart/form-data">
    @csrf
    <div class="hidden-inputs"></div>
    <div id="shahretext" class="share-content">
        <div style="padding:0px 2.75rem;">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div style="background-image:url('{{ asset('assets/img/hand.png') }}');height: 240px; width: 119%;margin-top:-28px;margin-left:-44px; background-size: 100% 100%;background-repeat: no-repeat;"
                    class="carousel-inner" id="feed-text-background">
                    <div class="carousel-item active">
                        <h2 style="font-size:28px;color:whitesmoke;margin-top:20px;text-align:center;"
                            class="feed-text">User
                            Text Will be then <br> showed here</h2>
                    </div>
                </div>
            </div>
        </div>

        <!--add-->
        <hr style="width: 131px;margin: auto;margin-top:20px;">

        <div style="padding:0px 2.75rem;">
            <div style="background: #eaeaea;border-radius:5px 5px 0px 0px;" class="d-flex mt-3">
                <div class="d-flex justify-content-center align-items-center mt-3"> <i style="font-size:4px;color:gray"
                        class="fa fa-circle p-1"></i>
                    <label>Select Feed Background</label>
                    <i style="font-size:4px;color:gray" class="fa fa-circle p-1"></i>
                </div>
            </div>

            <div style="padding:10px !important;background-color:#eaeaea;border-radius:0px 0px 5px 5px;"
                id="owl-example" class="owl-carousel">
                @php
                    $bgs = \App\Models\BackgroundFeed::all();
                @endphp
                @foreach ($bgs as $bg)
                    <a href="javascript:void(0)" class="feed-bg" data-url="{{ asset('storage/' . $bg->image) }}"><img
                            class="clickborder" style="height:55px;width:82px;padding: 0px 12px;"
                            src="{{ asset('storage/' . $bg->image) }}" alt=""></a>
                @endforeach
            </div>
            <input type="hidden" name="feed_background_image" value="{{ asset('assets/img/hand.png') }}"
                id="feed_background_image">
            <input type="hidden" name="feed_text_color" value="black" id="feed_text_color">
            <hr style="width: 131px;
    margin: auto;margin-top:20px;">
            <div style="background: #eaeaea;border-radius:5px 5px 0px 0px;"
                class="d-flex  align-items-center pt-3 mt-3"> <i style="font-size:4px;color:gray"
                    class="fa fa-circle p-1"></i>
                <label>Select Font Color</label>
                <i style="font-size:4px;color:gray" class="fa fa-circle p-1"></i>
            </div>

            <!--add color select-->
            <div class="color-selector">
                <div class="cursor-pointer color-option" style="background:black" data-color="black"></div>
                <div class="cursor-pointer color-option" style="background:pink" data-color="pink"></div>
                <div class="cursor-pointer color-option" style="background:blue" data-color="blue"></div>
                <div class="cursor-pointer color-option" style="background:green" data-color="green"></div>
                <div class="cursor-pointer color-option" style="background:white" data-color="white"></div>
                <div class="cursor-pointer color-option" style="background:red" data-color="red"></div>
                <div class="cursor-pointer color-option" style="background:skyblue" data-color="skyblue"></div>
            </div>
        </div>
    </div>

    <!--share image-->
    <div id="shahreimage" class="share-content">
        <div class="shareimage">
            <!--codee-->
            <div id="" class="">
                <div style="" id="feeds-image" class="">
                    <div class="dropzone needsclick" action="/" id="feeds-dropzone-img">
                        <div class="dz-message needsclick">
                            Drop files here or click to upload
                        </div>
                        <div class="fallback">
                            <input type="file" name="image" multiple />
                        </div>
                    </div>
                    <!--code-->
                </div>
                <div class="shareimage">
                    <div style="width:105%;display:contents;" id="feedimage22"
                        class="col-sm-12 image-content1 row  justify-content-around  justify-content-center">

                        <!--line here-->

                        <hr style="width: 131px;margin: auto;margin-top:20px;">
                        <div style="padding:0px 2.75rem;">
                            <div style="margin-left:5px;margin-top:20px;"
                                class="row pick-content d-flex justify-content-around ">
                                <div style="width:33.3%" class="carousel-inner ">
                                    <h6 style="text-align:center;">Modern</h6>
                                    <object style="height:80px;width:80px;margin:auto;display:flex;"
                                        data="{{ asset('assets/img/thanks3.png') }}"
                                        data-original="{{ asset('assets/img/thanks3.png') }}"
                                        data-default="{{ asset('assets/img/colorimage.PNG') }}" width="80"
                                        height="80" class="carousel-inner imagechangeclass grid_change"
                                        data-imagechange="#imagechangeone1" data-value="modern"></object>
                                </div>
                                <div style="width:33.3%" class="carousel-inner  ">
                                    <h6 style="text-align:center;">Elegant</h6>

                                    <object style="height:80px;width:80px;margin:auto;display:flex;"
                                        data="{{ asset('assets/img/thanks2.png') }}"
                                        data-original="{{ asset('assets/img/thanks2.png') }}"
                                        data-default="{{ asset('assets/img/thanks2 (1).png') }}" width="80"
                                        height="80"
                                        class="carousel-inner imagechange2 grid_change imagechangeclass"
                                        data-imagechange="#imagechangeone2" data-value="elegant"></object>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="margin-left:-1px;" style="display:contents;" id="feedimage33"
                        class="col-sm-12 image-content1 row ">

                        <div>
                            <hr style="width: 131px;margin: auto;margin-top:20px;">
                            <div style="padding:0px 2.75rem;">
                                <div style="margin-left:5px;margin-top:20px;"
                                    class="row pick-content d-flex justify-content-around">
                                    <div style="width:33.3%" class="carousel-inner brchg imagepicker "
                                        data-imagetwo="#feedimage22">
                                        <h6 style="text-align:center;">Modern</h6>

                                        <object style="height:80px;width:80px;margin:auto;display:flex;"
                                            data="{{ asset('assets/img/three3.png') }}"
                                            data-original2="{{ asset('assets/img/three3.png') }}"
                                            data-default2="{{ asset('assets/img/threedef1.png') }}" width="80"
                                            height="80" class="carousel-inner grid_change imagechangetwo2"
                                            data-imagechangetwo="#imagechangetwo1" data-value="modern"></object>
                                    </div>
                                    <div style="width:33.3%" class="carousel-inner brchg imagepicker "
                                        data-imagetwo="#feedimage33">
                                        <h6 style="text-align:center;">Elegant</h6>
                                        <object style="height:80px;width:80px;margin:auto;display:flex;"
                                            data="{{ asset('assets/img/three3(2).png') }}"
                                            data-original2="{{ asset('assets/img/three3(2).png') }}"
                                            data-default2="{{ asset('assets/img/threedef2.png') }}" width="80"
                                            height="80" class="carousel-inner grid_change imagechangetwo2"
                                            data-imagechangetwo="#imagechangetwo2" data-value="elegant"></object>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div style="display:contents;" id="feedimage44" class="col-sm-12 image-content1 row  ">
                        <!--add upp-->

                        <hr style="width: 131px;margin: auto;margin-top:20px;">

                        <div style="padding:0px 2.75rem;">
                            <div style="margin-left:5px;margin-top:20px;"
                                class="row pick-content d-flex justify-content-around">
                                <div style="width:33.3%" class="carousel-inner brchg imagepicker ">
                                    <h6 style="text-align:center;">Modern</h6>
                                    <object style="height:80px;width:80px;margin:auto;display:flex;"
                                        data="{{ asset('assets/img/four4.png') }}"
                                        data-original3="{{ asset('assets/img/four4.png') }}"
                                        data-default3="{{ asset('assets/img/fourdef2.png') }}" width="80"
                                        height="80" class="carousel-inner grid_change imagechangefour"
                                        data-contentfour2="#imagecontentfour1" data-value="modern"></object>
                                </div>
                                <div style="width:33.3%" class="carousel-inner brchg imagepicker ">
                                    <h6 style="text-align:center;">Elegant</h6>
                                    <object style="height:80px;width:80px;margin:auto;display:flex;"
                                        data="{{ asset('assets/img/four4(4).png') }}"
                                        data-original3="{{ asset('assets/img/four4(4).png') }}"
                                        data-default3="{{ asset('assets/img/fourdef1.png') }}" width="80"
                                        height="80" class="carousel-inner grid_change imagechangefour"
                                        data-contentfour2="#imagecontentfour2" data-value="elegant"></object>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!--code end-->
        </div>
    </div>
    <!--share image-->
    <div id="shahrevideo" class="share-content">
        <!--codee-->
        <div id="" class="">
            <div style="" id="video-image" class="">
                <div class="dropzone needsclick" action="/" id="video-dropzone-img">
                    <div class="dz-message needsclick">
                        Drop files here or click to upload
                    </div>
                    <div class="fallback">
                        <input type="file" name="image" multiple />
                    </div>
                </div>
                <!--code-->
            </div>
            <div class="shareimage">
                <div style="width:105%;display:contents;" id="videoimage22"
                    class="col-sm-12 image-content1 row  justify-content-around  justify-content-center">

                    <!--line here-->

                    <hr style="width: 131px;margin: auto;margin-top:20px;">
                    <div style="padding:0px 2.75rem;">
                        <div style="margin-left:5px;margin-top:20px;"
                            class="row pick-content d-flex justify-content-around ">
                            <div style="width:33.3%" class="carousel-inner ">
                                <h6 style="text-align:center;">Modern</h6>
                                <object style="height:80px;width:80px;margin:auto;display:flex;"
                                    data="{{ asset('assets/img/thanks3.png') }}"
                                    data-original="{{ asset('assets/img/thanks3.png') }}"
                                    data-default="{{ asset('assets/img/colorimage.PNG') }}" width="80"
                                    height="80" class="carousel-inner imagechangeclass grid_change"
                                    data-imagechange="#imagechangeone1" data-value="modern"></object>
                            </div>
                            <div style="width:33.3%" class="carousel-inner  ">
                                <h6 style="text-align:center;">Elegant</h6>

                                <object style="height:80px;width:80px;margin:auto;display:flex;"
                                    data="{{ asset('assets/img/thanks2.png') }}"
                                    data-original="{{ asset('assets/img/thanks2.png') }}"
                                    data-default="{{ asset('assets/img/thanks2 (1).png') }}" width="80"
                                    height="80" class="carousel-inner imagechange2 grid_change imagechangeclass"
                                    data-imagechange="#imagechangeone2" data-value="elegant"></object>

                            </div>
                        </div>
                    </div>
                </div>

                <div style="margin-left:-1px;" style="display:contents;" id="videoimage33"
                    class="col-sm-12 image-content1 row ">

                    <div>
                        <hr style="width: 131px;margin: auto;margin-top:20px;">
                        <div style="padding:0px 2.75rem;">
                            <div style="margin-left:5px;margin-top:20px;"
                                class="row pick-content d-flex justify-content-around">
                                <div style="width:33.3%" class="carousel-inner brchg imagepicker "
                                    data-imagetwo="#videoimage22">
                                    <h6 style="text-align:center;">Modern</h6>

                                    <object style="height:80px;width:80px;margin:auto;display:flex;"
                                        data="{{ asset('assets/img/three3.png') }}"
                                        data-original2="{{ asset('assets/img/three3.png') }}"
                                        data-default2="{{ asset('assets/img/threedef1.png') }}" width="80"
                                        height="80" class="carousel-inner grid_change imagechangetwo2"
                                        data-imagechangetwo="#imagechangetwo1" data-value="modern"></object>
                                </div>
                                <div style="width:33.3%" class="carousel-inner brchg imagepicker "
                                    data-imagetwo="#videoimage33">
                                    <h6 style="text-align:center;">Elegant</h6>
                                    <object style="height:80px;width:80px;margin:auto;display:flex;"
                                        data="{{ asset('assets/img/three3(2).png') }}"
                                        data-original2="{{ asset('assets/img/three3(2).png') }}"
                                        data-default2="{{ asset('assets/img/threedef2.png') }}" width="80"
                                        height="80" class="carousel-inner grid_change imagechangetwo2"
                                        data-imagechangetwo="#imagechangetwo2" data-value="elegant"></object>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="display:contents;" id="videoimage44" class="col-sm-12 image-content1 row  ">
                    <!--add upp-->

                    <hr style="width: 131px;margin: auto;margin-top:20px;">

                    <div style="padding:0px 2.75rem;">
                        <div style="margin-left:5px;margin-top:20px;"
                            class="row pick-content d-flex justify-content-around">
                            <div style="width:33.3%" class="carousel-inner brchg imagepicker ">
                                <h6 style="text-align:center;">Modern</h6>
                                <object style="height:80px;width:80px;margin:auto;display:flex;"
                                    data="{{ asset('assets/img/four4.png') }}"
                                    data-original3="{{ asset('assets/img/four4.png') }}"
                                    data-default3="{{ asset('assets/img/fourdef2.png') }}" width="80"
                                    height="80" class="carousel-inner grid_change imagechangefour"
                                    data-contentfour2="#imagecontentfour1" data-value="modern"></object>
                            </div>
                            <div style="width:33.3%" class="carousel-inner brchg imagepicker ">
                                <h6 style="text-align:center;">Elegant</h6>
                                <object style="height:80px;width:80px;margin:auto;display:flex;"
                                    data="{{ asset('assets/img/four4(4).png') }}"
                                    data-original3="{{ asset('assets/img/four4(4).png') }}"
                                    data-default3="{{ asset('assets/img/fourdef1.png') }}" width="80"
                                    height="80" class="carousel-inner grid_change imagechangefour"
                                    data-contentfour2="#imagecontentfour2" data-value="elegant"></object>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!--code end-->
    </div>
    <div style="padding:0px 2.75rem;">
        <hr style="width: 131px;margin: auto;margin-top:20px">
        <div style="background: #eaeaea;border-radius:5px 5px 0px 0px;" class="d-flex mt-3  ">
            <input style="height: 90px;" name="description" type="text"
                class="form-control feed-description w-100" placeholder="Enter The description">
        </div>
    </div>
    <input type="hidden" name="grid_style" id="feed_grid_style" value="modern">
    <hr style="width: 131px;margin: auto;margin-top:20px;">
    <div style="padding:0px 2.75rem;">
        <div style="border-radius:5px 5px 5px 5px;" class="d-flex justify-content-start mt-5 ">

            <div style="width:-webkit-fill-available;" class="">
                <div style="width:-webkit-fill-available;" class="btn-group" role="group"
                    aria-label="Basic example">
                    <label for="all" data-val="all-feed"
                        class="btn btn-label-secondary btn btn-outline-secondary usertypepicker active">
                        <input type="radio" class="form-check-input" name="user_type" value="all"
                            id="all-feed" checked />All</label>
                    <label for="standard" data-val="standard-feed"
                        class="btn btn-label-secondary btn btn-outline-secondary usertypepicker">
                        <input type="radio" class="form-check-input" name="user_type" value="standard"
                            id="standard-feed" />Standard</label>
                    <label for="premium" data-val="premium-feed"
                        class="btn btn-label-secondary  btn btn-outline-secondary usertypepicker">
                        <input type="radio" class="form-check-input" name="user_type" value="premium"
                            id="premium-feed" />Premium</label>
                    <label for="vip" data-val="vip-feed"
                        class="btn btn-label-secondary  btn btn-outline-secondary usertypepicker">
                        <input type="radio" class="form-check-input" name="user_type" value="vip"
                            id="vip-feed" />VIP</label>
                </div>
            </div>
        </div>
    </div>
    <hr style="width: 131px;margin: auto;margin-top:20px">

    <div style="padding:0px 2.75rem;">
        <div class="btn-toolbar " role="toolbar" aria-label="Toolbar with button groups">
            <div style="width:100%;padding:10px;" class="btn-group ary" role="group" aria-label="First group">

                <label for="share_text" data-sharetext="#shahretext" data-val="share_text"
                    class="btn btn-label-secondary btn btn-outline-secondary geo ary active active">
                    <input type="radio" class="form-check-input" name="feed_type" value="share_text"
                        id="share_text" checked />Share Text</label>
                <label for="share_image" data-sharetext="#shahreimage" data-val="share_image"
                    class="btn btn-label-secondary btn btn-outline-secondary geo shareimage ary">
                    <input type="radio" class="form-check-input" name="feed_type" value="share_image"
                        id="share_image" />Share Image</label>
                <label for="share_video" data-sharetext="#shahrevideo" data-val="share_video"
                    class="btn btn-label-secondary  btn btn-outline-secondary geo ary">
                    <input type="radio" class="form-check-input" name="feed_type" value="share_video"
                        id="share_video" />Share
                    Video</label>
            </div>
        </div>
    </div>

    <div style="padding:10px;" class="col-md-12 d-flex justify-content-center">
        <button type="button" class="btn btn-label-primary feed-btn">
            Submit
        </button>
    </div>
</form>

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.feed-bg').click(function() {
                let url = $(this).attr('data-url');
                $('#feed-text-background').css('background-image', `url('${url}')`);
                $('#feed_background_image').val(url);
            });

            $('.color-option').click(function() {
                let color = $(this).attr('data-color');
                $('#feed_text_color').val(color);
                $('.feed-text').css('color', color);
            })

            $('.feed-description').keyup(function() {
                let text = $(this).val();
                $('.feed-text').text(text);
            })
        });
    </script>
@endpush
