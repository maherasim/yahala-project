<style>
    .btn-close {
        position: fixed !important;
        right: 100px !important;
        top: 30px !important;
        z-index: 2 !important;
    }

    .dz-message {
        font-size: 20px !important;
    }

    .dropzone .dz-message {
        margin: 1em 0 !important;
    }

    .modal-content {
        overflow-y: scroll;
        scrollbar-width: thin;
        scrollbar-color: transparent transparent;
        /* For Firefox */
        scrollbar-width: thin;
        scrollbar-color: transparent transparent;

        /* For Webkit (Chrome, Safari, Edge) */
        &::-webkit-scrollbar {
            width: 0px;
        }

        &::-webkit-scrollbar-thumb {
            background-color: transparent;
        }
    }

    .imagefullmargin .dropify-wrapper {
        min-width: 124%;
        margin-left: -83px;
        height: 260px;
    }

    .imagefullmargin2one .dropify-wrapper {
        min-width: 120%;
        margin-left: -66px;
    }

    .imagefullmargin2two .dropify-wrapper {
        height: 160px;
        min-width: 395px;
    }

    .modal-header {
        /*padding:0px !important;*/
    }

    .imagefullmargintwotwo .dropify-wrapper {
        margin-left: -68px;
        min-width: 800px;
    }

    .imagefullmarginthreeone .dropify-wrapper {
        margin-left: -54px;
    }

    .imagefullmarginthreetwo .dropify-wrapper {
        height: 90px;
        min-width: 345px;
        margin-left: -37px;
    }

    .imagefullmargin4one .dropify-wrapper {
        height: 90px;
        margin-left: -60px;
        min-width: 392px;
    }

    .imagefullmargin4two .dropify-wrapper {
        min-width: 395px;
    }

    .imagefullmargin4three .dropify-wrapper {
        height: 185px;
        min-width: 507px;
        margin-left: -61px;
    }

    .imagefullmargin4four .dropify-wrapper {
        height: 60px;
        min-width: 343px;
    }
/* New Css */

    .dz-size {
        font-size: 12px !important;
        padding: 0 !important;
    }

    .dropzone .dz-preview .dz-details .dz-size{
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
    .dropzone .dz-preview .dz-details{
        position: relative !important;
    }
    a.dz-remove {
    width: 95%;
    margin: 0 auto;
}
</style>
<div style="padding:0px 2.75rem;">
    <div class="bs-stepper wizard-vertical shadow-none vertical mt-2">
        <div class="bs-stepper-header d-none" style="min-width: auto;">
            <div class="step d-none active" data-target="#en">
                <button type="button" class="step-trigger" aria-selected="true">
                    <span class="bs-stepper-circle">EN</span>
                </button>
            </div>

        </div>
        <div class="bs-stepper-content">
            <form id="createForm" method="POST" action="{{ route('admin_activity.store_news') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="hidden-inputs"></div>

                <!-- EN -->
                <div id="en" class="content active dstepper-block">
                    <div class="row g-3">
                        <div class="mt-4">
                            <div class="col-md-12">
                                <input type="text" id="title" class="form-control mt-3"
                                    placeholder="News Title" name="title" required>
                            </div>
                        </div>
                        <!--codee-->
                        <div class="mt-4">
                            <div style="" id="news-image" class="">
                                <div class="dropzone needsclick" action="/" id="news-dropzone-img">
                                    <div class="dz-message needsclick">
                                        Drop files here or click to upload
                                    </div>
                                    <div class="fallback">
                                        <input type="file" name="image" multiple/>
                                    </div>
                                </div>
                                <!--code-->
                            </div>
                        </div>
                        <input type="hidden" name="grid_style" id="news_grid_style" value="modern">
                        <div class="mt-4">
                            <div class="shareimage">
                                <div style="width:105%;display:none;" id="image22"
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
                                                    data-default="{{ asset('assets/img/colorimage.PNG') }}"
                                                    width="80" height="80"
                                                    class="carousel-inner imagechangeclass grid_change"
                                                    data-imagechange="#imagechangeone1" data-value="modern"></object>
                                            </div>
                                            <div style="width:33.3%" class="carousel-inner  ">
                                                <h6 style="text-align:center;">Elegant</h6>

                                                <object style="height:80px;width:80px;margin:auto;display:flex;"
                                                    data="{{ asset('assets/img/thanks2.png') }}"
                                                    data-original="{{ asset('assets/img/thanks2.png') }}"
                                                    data-default="{{ asset('assets/img/thanks2 (1).png') }}"
                                                    width="80" height="80"
                                                    class="carousel-inner imagechange2 grid_change imagechangeclass"
                                                    data-imagechange="#imagechangeone2" data-value="elegant"></object>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div style="margin-left:-1px;" style="display:none;" id="image33"
                                    class="col-sm-12 image-content1 row ">

                                    <div>
                                        <hr style="width: 131px;margin: auto;margin-top:20px;">
                                        <div style="padding:0px 2.75rem;">
                                            <div style="margin-left:5px;margin-top:20px;"
                                                class="row pick-content d-flex justify-content-around">
                                                <div style="width:33.3%" class="carousel-inner brchg imagepicker "
                                                    data-imagetwo="#image22">
                                                    <h6 style="text-align:center;">Modern</h6>

                                                    <object style="height:80px;width:80px;margin:auto;display:flex;"
                                                        data="{{ asset('assets/img/three3.png') }}"
                                                        data-original2="{{ asset('assets/img/three3.png') }}"
                                                        data-default2="{{ asset('assets/img/threedef1.png') }}"
                                                        width="80" height="80"
                                                        class="carousel-inner grid_change imagechangetwo2"
                                                        data-imagechangetwo="#imagechangetwo1" data-value="modern"></object>
                                                </div>
                                                <div style="width:33.3%" class="carousel-inner brchg imagepicker "
                                                    data-imagetwo="#image33">
                                                    <h6 style="text-align:center;">Elegant</h6>
                                                    <object style="height:80px;width:80px;margin:auto;display:flex;"
                                                        data="{{ asset('assets/img/three3(2).png') }}"
                                                        data-original2="{{ asset('assets/img/three3(2).png') }}"
                                                        data-default2="{{ asset('assets/img/threedef2.png') }}"
                                                        width="80" height="80"
                                                        class="carousel-inner imagechangetwo2 grid_change"
                                                        data-imagechangetwo="#imagechangetwo2" data-value="elegant"></object>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div style="display:none;" id="image44" class="col-sm-12 image-content1 row  ">
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
                                                    data-default3="{{ asset('assets/img/fourdef2.png') }}"
                                                    width="80" height="80"
                                                    class="carousel-inner grid_change imagechangefour"
                                                    data-contentfour2="#imagecontentfour1"
                                                    data-value="modern"></object>
                                            </div>
                                            <div style="width:33.3%" class="carousel-inner brchg imagepicker ">
                                                <h6 style="text-align:center;">Elegant</h6>
                                                <object style="height:80px;width:80px;margin:auto;display:flex;"
                                                    data="{{ asset('assets/img/four4(4).png') }}"
                                                    data-original3="{{ asset('assets/img/four4(4).png') }}"
                                                    data-default3="{{ asset('assets/img/fourdef1.png') }}"
                                                    width="80" height="80"
                                                    class="carousel-inner grid_change imagechangefour"
                                                    data-contentfour2="#imagecontentfour2"
                                                    data-value="elegant"></object>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="mt-4">
                            <div style="padding:0px 2.75rem;">
                                <hr style="width: 131px;margin: auto;margin-top:20px;">
                                <div style="background: #eaeaea;border-radius:5px 5px 0px 0px;" class="d-flex mt-3  ">
                                    <input style="height: 90px;" type="text" name="description"
                                        class="form-control w-100" placeholder="Enter The description" required>
                                </div>


                                {{-- <hr style="width: 131px;margin: auto;margin-top:20px"> --}}

                                <div class="mt-4">
                                    <div>
                                        <div style="border-radius:5px 5px 5px 5px;"
                                            class="d-flex justify-content-start mt-5 ">
                                            <div style="width:-webkit-fill-available;" class="">
                                                <div style="width:-webkit-fill-available;" class="btn-group" role="group"
                                                    aria-label="Basic example">
                                                    <label for="all"
                                                        class="btn btn-label-secondary btn btn-outline-secondary usertypepicker active">
                                                        <input type="radio" class="form-check-input" name="user_type"
                                                            value="all" id="all" checked />All</label>
                                                    <label for="standard"
                                                        class="btn btn-label-secondary btn btn-outline-secondary usertypepicker">
                                                        <input type="radio" class="form-check-input" name="user_type"
                                                            value="standard" id="standard" />Standard</label>
                                                    <label for="premium"
                                                        class="btn btn-label-secondary  btn btn-outline-secondary usertypepicker">
                                                        <input type="radio" class="form-check-input" name="user_type"
                                                            value="premium" id="premium" />Premium</label>
                                                    <label for="vip"
                                                        class="btn btn-label-secondary  btn btn-outline-secondary usertypepicker">
                                                        <input type="radio" class="form-check-input" name="user_type"
                                                            value="vip" id="vip" />VIP</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div style="width:-webkit-fill-available" class="mt-3 clickhere"><div style="width:-webkit-fill-available" class="btn-group" role="group" aria-label="Basic example"><label for="one_image" class="btn btn-label-secondary btn btn-outline-secondary imagea imagepicker active" data-imageone="#image1" data-imagetwo="#image11" data-value="#one_image"><input type="radio" class="form-check-input" name="image_type" value="1" id="one_image" checked="checked">1 Image</label><label for="two_image" class="btn btn-label-secondary btn btn-outline-secondary imagea imagepicker" data-imageone="#image2" data-imagetwo="#image22" data-value="#two_image"><input type="radio" class="form-check-input" name="image_type" value="2" id="two_image">2 Image</label><label for="three_image" class="btn btn-label-secondary btn btn-outline-secondary imagea imagepicker" data-imageone="#image3" data-imagetwo="#image33" data-value="#three_image"><input type="radio" class="form-check-input" name="image_type" value="3" id="three_image">3 Image</label><label for="four_image" class="btn btn-label-secondary btn btn-outline-secondary imagea imagepicker" data-imageone="#image4" data-imagetwo="#image44" data-value="#four_image"><input type="radio" class="form-check-input" name="image_type" value="4" id="four_image">+4 Image</label></div></div> --}}
                            </div>
                        </div>
                        <!--code end-->

                        <div class="row mt-4">
                            <div class="col-md mb-md-0 mb-2">
                                <div class="form-check custom-option custom-option-basic">
                                    <label class="form-check-label custom-option-content" for="comments">
                                        <input name="comments" class="form-check-input" type="checkbox"
                                            value="1" id="comments">
                                        <span class="custom-option-header">
                                            <span class="h6 mb-0">Comments</span>
                                        </span>
                                        {{-- <span class="custom-option-body">
                                            <small>Get 1 project with 1 teams members.</small>
                                        </span> --}}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-check custom-option custom-option-basic">
                                    <label class="form-check-label custom-option-content" for="voice_comments">
                                        <input name="voice_comments" class="form-check-input" type="checkbox"
                                            value="1" id="voice_comments">
                                        <span class="custom-option-header">
                                            <span class="h6 mb-0">Voice Comments</span>
                                        </span>
                                        {{-- <span class="custom-option-body">
                                            <small>Get 5 projects with 5 team members.</small>
                                        </span> --}}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md mb-md-0 mb-2">
                                <div class="form-check custom-option custom-option-basic">
                                    <label class="form-check-label custom-option-content" for="share">
                                        <input name="share" class="form-check-input" type="checkbox"
                                            value="1" id="share">
                                        <span class="custom-option-header">
                                            <span class="h6 mb-0">Share</span>
                                        </span>
                                        {{-- <span class="custom-option-body">
                                            <small>Get 1 project with 1 teams members.</small>
                                        </span> --}}
                                    </label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-check custom-option custom-option-basic">
                                    <label class="form-check-label custom-option-content" for="emotion">
                                        <input name="emotion" class="form-check-input" type="checkbox"
                                            value="1" id="emotion">
                                        <span class="custom-option-header">
                                            <span class="h6 mb-0">Emotion</span>
                                        </span>
                                        {{-- <span class="custom-option-body">
                                            <small>Get 5 projects with 5 team members.</small>
                                        </span> --}}
                                    </label>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Start Date</label>
                                <input type="date" class="form-control" name="start_date" id="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">End Date</label>
                                <input type="date" class="form-control" name="end_date" id="">
                            </div>
                        </div> --}}

                        <div class="col-md-12">
                            <label class="form-label">Status</label>
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option value="" selected="">Select status</option>
                                <option value="1">Published</option>
                                <option value="0">UnPublished</option>
                            </select>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <button type="button" class="btn btn-label-primary news-btn">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<script>
    window.addEventListener('load', () => {
        // Wizard
        const wizardVertical = document.querySelector('.wizard-vertical'),
            wizardVerticalBtnNextList = [].slice.call(wizardVertical.querySelectorAll('.btn-next')),
            wizardVerticalBtnPrevList = [].slice.call(wizardVertical.querySelectorAll('.btn-prev')),
            wizardVerticalBtnSubmit = wizardVertical.querySelector('.btn-submit');

        if (typeof wizardVertical !== undefined && wizardVertical !== null) {
            const verticalStepper = new Stepper(wizardVertical, {
                linear: false
            });
            if (wizardVerticalBtnNextList) {
                wizardVerticalBtnNextList.forEach(wizardVerticalBtnNext => {
                    wizardVerticalBtnNext.addEventListener('click', event => {
                        verticalStepper.next();
                    });
                });
            }
            if (wizardVerticalBtnPrevList) {
                wizardVerticalBtnPrevList.forEach(wizardVerticalBtnPrev => {
                    wizardVerticalBtnPrev.addEventListener('click', event => {
                        verticalStepper.previous();
                    });
                });
            }

            if (wizardVerticalBtnSubmit) {
                wizardVerticalBtnSubmit.addEventListener('click', event => {
                    wizardVerticalBtnSubmit.closest('form').submit();
                });
            }
        }


    })
</script>

