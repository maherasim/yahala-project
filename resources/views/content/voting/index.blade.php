@extends('layouts/layoutMaster')

@section('title', 'Boxicons - Icons')

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-icons.css')}}" />
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />

@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
@endsection

@section('content')
<script>
    const dropZoneInitFunctions = [];
  </script>
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


<!-- Basic Bootstrap Table -->
  <div class="card">
    <div class="card-header d-flex align-items-center">
        <h5 class="m-0">Voting List</h5>
        {{-- @can('voting.create') --}}
        <div class="flex-fluid d-flex justify-content-end align-items-center">
          <button class="btn btn-primary btn-create-vote" data-vote-type='single_vote'><i class="bx bx-plus me-0 me-sm-1"></i>Single Vote</button>
          <button class="btn btn-primary btn-create-vote ms-2" data-vote-type='individual_vote'><i class="bx bx-plus me-0 me-sm-1"></i>Individual Vote</button>
        </div>
        {{-- @endcan --}}
    </div>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Vote Title</th>
            <th>Vote Banner</th>
            <th>Created Date</th>
            <th>Statistic</th>
            <th>Option</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
        @forelse($votes as $index => $vote)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>
              <div class="">
                <div style="font-size:110%; font-weight:bold;">{{$vote->name}}</div>
                <div style="font-size:90%">{{ $vote->voting_category->name ?? '' }}</div>
              </div>
            </td>
            <td>
              @if(!empty($vote->banner))
              <img class="vote-banner-image" src='/storage/{{$vote->banner}}' width="100"/>
              @endif
            </td>
            <td>
              <div>
                <div>{{date("d.m.Y", strtotime($vote->created_at))}}<div>
                <div>{{date("H:i", strtotime($vote->created_at))}}<div>
              </div>
            </td>
            <td>
              <div class="d-flex">
                @foreach($vote->options as $index=>$option)
                  <div class="d-flex align-items-center {{$index > 0 ? 'ms-3' : ''}}"
                        style="background:#f5f5f5; border-radius:5px; padding: 5px 10px;"
                  >
                    @if(!empty($option['image']))
                    <img src="{{\App\Helpers\Helpers::storagePath($option['image'])}}" class="vote-option-image" />
                    @endif
                    <div class="ms-3">
                      <div>{{$option['title']}}</div>
                      <div style="font-size:80%">215</div>
                    </div>
                  </div>
                @endforeach
              </div>
            </td>
            <td>
                <div class="dropdown d-inline-block">
                    <!-- Edit -->
                    <span>
                        {{-- @can('voting.write') --}}
                        <button
                            class="btn btn-sm btn-icon btn-edit-vote"
                            data-bs-toggle="tooltip"
                            data-bs-offset="0,4"
                            data-bs-placement="top"
                            data-bs-html="true"
                            data-vote-id="{{$vote->id}}"
                            data-bs-original-title="Edit" aria-describedby="tooltip557134">
                            <i class="bx bx-edit"></i>
                        </button>
                        {{-- @endcan --}}
                    </span>

                    <!-- Delete -->
                    <form action="{{ route('vote.destroy', $vote->id) }}" onsubmit="confirmAction(event, () => event.target.submit())" method="post" class="d-inline">
                        @method('DELETE')
                        @csrf
                        {{-- @can('voting.delete') --}}
                        <button type="submit" class="btn btn-sm btn-icon" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Remove"><i class="bx bx-trash me-1"></i></button>
                        {{-- @endcan --}}
                    </form>

                    <span>
                      <button
                          class="btn btn-sm btn-icon btn-statistic-vote"
                          data-bs-toggle="tooltip"
                          data-bs-offset="0,4"
                          data-bs-placement="top"
                          data-bs-html="true"
                          data-vote-id="{{$vote->id}}"
                          data-bs-original-title="Statistic" aria-describedby="tooltip557134"
                      >
                          <i class="bx bx-bar-chart-alt-2"></i>
                      </button>
                    </span>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td class="text-center" colspan="8"><b>No Voting found.<b></td>
        </tr>
        @endforelse
        </tbody>
      </table>
    </div>
  </div>
  <!--/ Basic Bootstrap Table -->

<div class="modal fade deleted-modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="padding-right: 17px;" aria-modal="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Banner</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Are you Sure to delete this!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="" method="post" id="delete_form">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function delete_service(el) {
        let link = $(el).data('id');
        $('.deleted-modal').modal('show');
        $('#delete_form').attr('action', link);
    }

</script>

{{-- Create Vote model --}}
<x-modal
  id="createvotingModal"
  title="Single Vote"
  saveBtnText="Create"
  saveBtnType="submit"
  saveBtnForm="createForm"
  :showHeader="false"
  size="md"
>
 @include('content.include.voting.createForm')
</x-modal>

{{-- Edit Model Form --}}
<x-modal
  id="editvotingModal"
  title="Edit Vote"
  saveBtnText="Update"
  saveBtnType="submit"
  saveBtnForm="editForm"
  :showHeader="false"
  size="md"
>
  @include('content.include.voting.editForm')
</x-modal>

{{-- Stastics Model Form --}}
<x-modal
  id="statisticVotingModal"
  :showSaveBtn="false"
  :showHeader="false"
  size="md"
>
</x-modal>

<script>
    (function() {
        ClassicEditor
        .create( document.querySelector( '#inputDescription' ) )
        .catch( error => {
            console.error( error );
        } );

    }());

</script>

@endsection

@section('page-script')
<script src="{{asset('assets/js/app-voting.js')}}"></script>
<script src="{{asset('assets/js/app-upload-audio.js')}}"></script>
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
    }).then(function (result) {
      if (result.value) {
        callback();
      }
    });
  }
</script>

<script>
// bootstrap-maxlength & repeater (jquery)
$(function () {
    var formRepeater = $('.form-repeater');

  if (formRepeater.length) {
    var row = 2;
    var col = 1;
    formRepeater.on('submit', function (e) {
      e.preventDefault();
    });
    formRepeater.repeater({
        // initEmpty: true,
      show: function () {
        var fromControl = $(this).find('.form-control, .form-select');
        var formLabel = $(this).find('.form-label');

        fromControl.each(function (i) {
          var id = 'form-repeater-' + row + '-' + col;
          $(fromControl[i]).attr('id', id);
          $(formLabel[i]).attr('for', id);
          col++;
        });

        row++;

        $(this).slideDown();
      },
      hide: function (e) {
        $(this).slideUp(e);
      }
    });
  }
});
</script>

<script>
    var votes = @json(!empty($votes) ? $votes : []);
    var vote_categories = @json(!empty($vote_categories) ? $vote_categories : []);
    function drpzone_init() {
        dropZoneInitFunctions.forEach(callback => callback());
    }
  </script>
  <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js" onload="drpzone_init()"></script>
@endsection
