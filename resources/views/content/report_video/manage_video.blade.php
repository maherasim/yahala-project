@extends('layouts/layoutMaster')

@section('title', 'User View - Pages')

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/core.css') }}" />



@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js') }}"></script>
@endsection

@section('page-script')
    <script src="{{ asset('assets/js/modal-edit-user.js') }}"></script>
    <script src="{{ asset('assets/js/modal-edit-cc.js') }}"></script>
    <script src="{{ asset('assets/js/modal-add-new-cc.js') }}"></script>
    <script src="{{ asset('assets/js/modal-add-new-address.js') }}"></script>
    <script src="{{ asset('assets/js/app-user-view.js') }}"></script>
    <script src="{{ asset('assets/js/app-user-view-billing.js') }}"></script>

    <!--<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>-->
    <script src="https://cdn.tiny.cloud/1/hpjsz8rrrv9w9q89ahul4i659im6c7189itma1bqn5e22d4g/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>

    videoclass
    <script>
        // var video = document.getElementByClass("videoclass");

        //   // Add a click event listener to the video element
        //   video.addEventListener("click", function() {
        //     // Call your custom function here
        //     myFunction();
        //   });

        //   // Your custom function
        //   function myFunction() {
        //     // Add your desired functionality here
        //     alert("Custom function triggered!");
        //   }


        // jQuery code
        $(document).ready(function() {
            // Add a click event listener to the play button
            $(".videoclass").on("play", function() {
                // Call your custom function here
                myFunction();
            });
        });

        // Your custom function
        function myFunction() {
            // Add your desired functionality here
            $('#requestView').modal('show');

        }




        $(".clicktoggled").click(function() {
            $(this).closest(".dropdown-trigger").toggleClass("is-active");
        });


        tinymce.init({
            selector: "#mytextarea",
            plugins: "emoticons autoresize",
            toolbar: "emoticons",
            toolbar_location: "bottom",
            menubar: false,
            statusbar: false
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".modal-content").css({
                "overflow": "visible"
            })
        })

        $(document).ready(function() {
            $('#requestView >  .modal-dialog').addClass('modal-fullscreen');
        })
    </script>
@endsection

@section('content')

    <style>
        #requestView .modal-footer {
            display: none;
        }

        body {

            color: white;
            font-family: Arial, sans-serif;
        }

        .video-container {
            display: flex;
            gap: 15px;
            overflow-x: auto;
            padding: 20px;
        }

        .video-card {
           
            width: 250px;
            border-radius: 10px;
            overflow: hidden;
        }
        .video-info{
          background: #333;
}

        .video-thumbnail {
            position: relative;
        }

        .video-thumbnail img {
            width: 100%;
            display: block;
        }

        .video-duration {
            position: absolute;
            bottom: 8px;
            right: 8px;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 4px 6px;
            font-size: 12px;
            border-radius: 4px;
        }

        .video-info {
            padding: 10px;
        }

        .video-title {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .video-channel,
        .video-views {
            font-size: 12px;
            color: #aaa;
        }
    </style>
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Videos / Manage </span>Videos
    </h4>
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 order-0 order-md-1">


            <div class="row">
              <div class="video-container">
                <div class="video-card">
                    <div class="video-thumbnail">
                        <img src="https://img.freepik.com/premium-psd/business-youtube-thumbnail-design-template_475351-263.jpg?w=2000" alt="Video Thumbnail">
                        <span class="video-duration">4:31</span>
                    </div>
                    <div class="video-info">
                        <div class="video-title">Ibrahim Tatlıses Bulamadım</div>
                        <div class="video-channel">Caner Üner</div>
                        <div class="video-views">4.6M views • 12 years ago</div>
                    </div>
                </div>
        
                <div class="video-card">
                    <div class="video-thumbnail">
                        <img src="https://tse1.mm.bing.net/th?id=OIP.8gLtXrl4KYPfPA6QyMnlUwHaEK&pid=Api&P=0&h=220" alt="Video Thumbnail">
                        <span class="video-duration">3:58</span>
                    </div>
                    <div class="video-info">
                        <div class="video-title">Majid Derakhshani Mahbanoo</div>
                        <div class="video-channel">Majid Derakhshani</div>
                        <div class="video-views">9.7M views • 10 years ago</div>
                    </div>
                </div>
                
                <div class="video-card">
                    <div class="video-thumbnail">
                        <img src="https://tse1.mm.bing.net/th?id=OIP.8gLtXrl4KYPfPA6QyMnlUwHaEK&pid=Api&P=0&h=220" alt="Video Thumbnail">
                        <span class="video-duration">4:20</span>
                    </div>
                    <div class="video-info">
                        <div class="video-title">Xero Abbas Serifetemo</div>
                        <div class="video-channel">Gigaprojects</div>
                        <div class="video-views">1.3M views • 16 years ago</div>
                    </div>
                </div>
            </div>


            </div>



        </div>




        <x-modal id="requestView" size="">
            @include('content.include.live_stream.longpopup')
        </x-modal>

        <!-- Modal -->
        @include('_partials/_modals/modal-edit-user')
        @include('_partials/_modals/modal-edit-cc')
        @include('_partials/_modals/modal-add-new-address')
        @include('_partials/_modals/modal-add-new-cc')
        @include('_partials/_modals/modal-upgrade-plan')
        <!-- /Modal -->

    @endsection
