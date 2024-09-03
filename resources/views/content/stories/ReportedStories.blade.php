@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
    <link href="
https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css
" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css" />

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
    <style>
        /* Hide the default radio button */
.custom-radio {
    appearance: none;
    background-color: #fff;
    border: 2px solid #ccc;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    position: relative;
    cursor: pointer;
    outline: none;
}

/* Create a custom radio button effect */
.custom-radio:checked::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
     width: 16px; /* Adjust width for inner circle */
    height: 16px; /* Adjust height for inner circle */
    border-radius: 50%;
    background-color: #28a745;  /* Success green color */
}

/* Optional: Add a hover effect */
.custom-radio:hover {
    border-color: #28a745;
}

        /* Custom Modal Styles */
        .modal-content {
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .custom-form-check {
            background-color: #F2F2F2;
            padding-right: 15px;
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

        .dropify-wrapper .dropify-message p {
            margin: 5px 0 0;
            font-size: 31px !important;

            .modal-header {
                background-color: #f8f9fa;
                border-bottom: none;
            }

            .modal-title {
                font-weight: bold;
            }

            .modal-body {
                padding: 20px 30px;
            }

            .form-check-label {
                font-size: 16px;
                margin-left: 10px;
                color: #f2f2f2;
            }

            .form-check-input:checked {
                background-color: #007bff;
                border-color: #007bff;
            }

            .modal-footer {
                border-top: none;
                padding-top: 0;
                display: flex;
                justify-content: center;
            }

            .btn-primary {
                background-color: #007bff;
                border-color: #007bff;
            }

            .btn-primary:hover {
                background-color: #0056b3;
                border-color: #0056b3;
            }

            /* Transition for the modal */
            .modal.fade .modal-dialog {
                transform: translate(0, -25%);
                transition: transform 0.3s ease-out;
            }

            .modal.show .modal-dialog {
                transform: translate(0, 0);
            }
    </style>
@endsection

@section('vendor-style')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
@endsection

@section('content')
    <div class="row g-4 mb-4">
        <div class="col-sm-6  col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Total Category</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">21,459</h4>
                                <small class="text-success">(+29%)</small>
                            </div>
                            <small>Last week analytics</small>
                        </div>
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="bx bx-user bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                        <div class="content-left">
                            <span>Total Vote</span>
                            <div class="d-flex align-items-end mt-2">
                                <h4 class="mb-0 me-2">4,567</h4>
                                <small class="text-success">(+18%)</small>
                            </div>
                            <small>Last week analytics </small>
                        </div>
                        <span class="badge bg-label-danger rounded p-2">
                            <i class="bx bx-user-plus bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mb-4">
        @foreach ($cards as $card)
            <div class="col-lg-4">
                <div id="feed-post-1" class="card is-post">
                    <div class="content-wrap">
                        <div class="card-heading justify-content-between">
                            <div class="user-block">
                                <div class="user-info"
                                    style="display: flex; align-items: center; justify-content: space-between; padding: 5px;">
                                    <div style="display: flex; align-items: center;">
                                        <div>
                                            <img id="viewer"
                                                onerror="this.src='https://efood-admin.6amtech.com/public/assets/admin/img/160x160/img1.jpg'"
                                                class="avatar-img" src="{{ asset('storage/' . auth()->user()->image) }}"
                                                alt="Image"
                                                style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px;">
                                        </div>
                                        <div style="display: flex; flex-direction: column;">
                                            <span class="d-flex" style="font-weight: bold;"><a
                                                    href="#">{{ Auth::user()->name }}</a></span>
                                            <span class="time"
                                                style="font-size: 12px; color: gray;">{{ \Carbon\Carbon::parse($card->created_at)->format('D d M g:i a') }}</span>
                                        </div>
                                    </div>
                                    <!-- Emojis, Like Count, and Red Flag -->
                                    <div style="display: flex; align-items: center; gap: 8px;">
                                        <!-- Emojis -->
                                        <div
                                            style="display: flex; gap: 3px; background-color: white; padding: 5px 10px; border-radius: 15px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);">
                                            <span>
                                                <img src="{{ asset('assets/img/emoji 1.svg') }}" style="width: 25px; height: 35px;" alt="emoji">
                                            </span>
                                            <span>
                                                <img src="{{ asset('assets/img/emoji 2.svg') }}" style="width: 25px; height: 35px;" alt="emoji">
                                            </span>
                                            <span>
                                                <img src="{{ asset('assets/img/emoji 3.svg') }}" style="width: 25px; height: 35px;" alt="emoji">
                                            </span>
                                            <span>
                                                <img src="{{ asset('assets/img/emoji-1.svg') }}" style="width: 25px; height: 35px;" alt="emoji">
                                            </span>
                                        </div>
                                        <!-- Like Count -->
                                        <div style="display: flex; align-items: center;">
                                            <span>
                                                <img src="{{ asset('assets/img/like.svg') }}" style="width: 25px; height: 35px;" alt="emoji">
                                            </span>
                                            <span style="font-weight: bold;">123</span>
                                        </div>
                                        <!-- Red Flag -->
                                        <div>
                                            <span>
                                                <img src="{{ asset('assets/img/Flag 2.svg') }}" style="width: 25px; height: 35px;" alt="emoji">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-item-end">
                                <form action="{{ route('list.cards.delete', $card->id) }}" method="post" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="button" onclick="confirmAction(event, '{{ $card->id }}')"
                                        class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Remove">
                                        <span>
                                            <img src="{{ asset('assets/img/Trash icon.svg') }}" style="width: 25px; height: 35px;" alt="emoji">
                                        </span>
                                        {{-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                                        
                                        viewBox="0 0 16 16">
                                            <path
                                                d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                            <path
                                                d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                        </svg> --}}
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="post-image">
                                <a data-fancybox="post1">
                                    
                                    <img src="{{ asset('assets/img/Stories Cards.svg') }}" style="width: 100%; height: 70%; object-fit: cover;" alt="Post Image">
                                </a>
                            </div>
                            
                            
                        </div>
{{-- new --}} 
                       {{-- some  --}}
<div class="form-check mb-3 d-flex justify-content-center align-items-center text-center">
    <span>
        <img src="{{ asset('assets/img/Reason Icon.svg') }}" style="width: 20px; height: 20px;" alt="emoji">
        Reported Reason
    </span>
</div>

{{-- padding --}}
<div class="form-check mb-3 d-flex justify-content-between align-items-center custom-form-check" style="padding-left: 20px; padding-right: 20px; margin:20px; border-radius:10px">
    <div class="d-flex align-items-center">
        <label class="form-check-label d-flex align-items-center" for="reason" style="margin-bottom: 0;">
            <span>
                <img src="{{ asset('assets/img/Reason Icon.svg') }}" style="width: 20px; height: 20px;" alt="emoji">
            </span>
            <div class="ml-2">
                <strong>Reason Title</strong><br>
                <small>Reason Description</small>
            </div>
        </label>
    </div>
    <!-- Align the radio button to the right -->
    <div>
        <input class="form-check-input custom-radio" type="radio" name="reason" id="reason" value="" data-title="Reason Title" data-description="Reason Description" required>
    </div>
</div>

{{-- end --}}
                       
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <!-- Delete Reason Modal -->
    @php

        $reason = App\Models\FeedReason::get();
    @endphp
    <div class="modal fade" id="deleteReasonModal" tabindex="-1" aria-labelledby="deleteReasonModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #F2F2F2 ">
                    <h5 class="modal-title" id="deleteReasonModalLabel">  

                        Remove Reason</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                    <p class="text-muted">Select the reason </p>
                    <form id="deleteReasonForm" action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="card_id" id="cardIdInput">
                        <input type="hidden" name="reason_title" id="reasonTitleInput">
                        <input type="hidden" name="reason_description" id="reasonDescriptionInput">
                        @foreach ($reason as $key => $items)
                            <div
                                class="form-check mb-3 d-flex justify-content-between align-items-center custom-form-check">
                                <div>
                                    <label class="form-check-label d-flex align-items-start"
                                        for="reason{{ $key }}" data-title="{{ $items->title }}"
                                        data-description="{{ $items->reason }}">
                                        <span>
                                            <img src="{{ asset('assets/img/Reason Icon.svg') }}" style="width: 20px; height: 20px;" alt="emoji">
                                        </span>
                                        <div>
                                            <strong>{{ $items->title }}</strong><br><small>{{ $items->reason }}</small>
                                        </div>
                                    </label>
                                </div>
                                <input class="form-check-input custom-radio" type="radio" name="reason"
                                    id="reason{{ $key }}" value="{{ $items->id }}"
                                    data-title="{{ $items->title }}" data-description="{{ $items->reason }}" required>
                            </div>
                        @endforeach
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-label-secondary">Save</button>
                        </div>


                    </form>


                </div>
            </div>
        </div>
    </div>


@endsection

@section('page-script')

    <script>
        function confirmAction(event, cardId) {
            event.preventDefault(); // Prevent form submission

            // Set the card ID in the modal's hidden input
            document.getElementById('cardIdInput').value = cardId;

            // Set the form action URL
            const form = document.getElementById('deleteReasonForm');
            form.action = `/cards/${cardId}`;

            // Clear previous values in hidden inputs
            document.getElementById('reasonTitleInput').value = '';
            document.getElementById('reasonDescriptionInput').value = '';

            // Attach change event to radio buttons
            document.querySelectorAll('input[name="reason"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    document.getElementById('reasonTitleInput').value = this.getAttribute('data-title');
                    document.getElementById('reasonDescriptionInput').value = this.getAttribute(
                        'data-description');
                });
            });

            // Show the modal
            var myModal = new bootstrap.Modal(document.getElementById('deleteReasonModal'));
            myModal.show();
        }
    </script>



@endsection
