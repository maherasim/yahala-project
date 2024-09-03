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
                color: #495057;
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
            <div class="col-lg-3">
                <div id="feed-post-1" class="card is-post">
                    <div class="content-wrap">
                        <div class="card-heading justify-content-between">
                            <div class="user-block">
                                <div class="user-info" style="display: flex; align-items: center;">
                                    <div>
                                        <img id="viewer"
                                            onerror="this.src='https://efood-admin.6amtech.com/public/assets/admin/img/160x160/img1.jpg'"
                                            class="avatar-img" src="{{ asset('storage/' . auth()->user()->image) }}"
                                            alt="Image"
                                            style="width: 50px; height: 50px; border-radius: 50%; margin-right: 10px;">
                                    </div>
                                    <div>
                                        <span class="d-flex"><a href="#">{{ Auth::user()->name }}</a></span>
                                        <span
                                            class="time">{{ \Carbon\Carbon::parse($card->created_at)->format('D d M g:i a') }}</span>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex justify-content-end align-item-end">
                                <form action="{{ route('list.cards.delete', $card->id) }}" method="post" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="button" onclick="confirmAction(event, '{{ $card->id }}')"
                                        class="btn btn-sm btn-icon  " data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Remove">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                          </svg>
                                          
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="post-image">
                                <a data-fancybox="post1">
                                    <img src="{{ asset('storage/' . $card->image) }}" style="width: 375px;height:264px"
                                        alt="">
                                </a>
                            </div>
                        </div>
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
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteReasonModalLabel">   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FFFF00" class="bi bi-exclamation-triangle" viewBox="0 0 16 16" style="transform: translateY(-2px);">
                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z"/>
                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                      </svg>
                      
                       Denied Request</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted">Select the reason for deletion:</p>
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
                                        <i class="bi bi-lightning-fill text-danger me-2"></i>
                                        <div>
                                            <strong>{{ $items->title }}</strong><br><small>{{ $items->reason }}</small>
                                        </div>
                                    </label>
                                </div>
                                <input class="form-check-input" type="radio" name="reason"
                                    id="reason{{ $key }}" value="{{ $items->id }}"
                                    data-title="{{ $items->title }}" data-description="{{ $items->reason }}" required>
                            </div>
                        @endforeach
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
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
