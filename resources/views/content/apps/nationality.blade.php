@extends('layouts/layoutMaster') 

@section('title', 'Nationality')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card-header d-flex align-items-center px-2 justify-content-between">
        <h4 class="fw-bold py-3 mb-4">Nationality</h4>
        <a href="javascript:void(0)" class="btn btn-primary add-button" data-bs-toggle="modal" data-bs-target="#addCategory">Add Nationality</a>
    </div>

    <div class="card" style="padding:20px">
        <div class="card-datatable col-sm-12">
            <table class="datatables-basic table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nationality Name</th>
                        <th>Nationality Flag</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nationality as $key => $nationality)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $nationality->name }}</td>
                            <td>
                                <img style="border-radius: 100%; height: 43px; width: 43px;" src="{{ asset('storage/' . $nationality->thumbnail_path) }}" alt="{{ $nationality->name }}">
                            </td>
                            <td>
                                <a href="javascript:;" class="btn btn-sm btn-icon edit-button" 
                                   data-bs-toggle="modal" 
                                   data-bs-target="#editCategory" 
                                   data-id="{{ $nationality->id }}" 
                                   data-name="{{ $nationality->name }}" 
                                   data-thumbnail="{{ asset('storage/' . $nationality->thumbnail_path) }}">
                                   <i class="bx bxs-edit"></i>
                                </a>
                                <form action="{{ route('nationality.destroy', $nationality->id) }}" 
                                      onsubmit="confirmAction(event, () => event.target.submit())" 
                                      method="post" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-icon" 
                                            data-bs-toggle="tooltip" 
                                            data-bs-offset="0,4" 
                                            data-bs-placement="top" 
                                            data-bs-html="true" 
                                            data-bs-original-title="Remove">
                                        <i class="bx bx-trash me-1"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add Nationality Modal -->
<div class="modal fade" id="addCategory" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span class="modal-title-span">Add</span> Nationality</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('nationality.store') }}" enctype="multipart/form-data" method="POST" id="addNationalityForm">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nationality_name" class="form-label">Nationality Name</label>
                        <input type="text" id="nationality_name" name="name" class="form-control" placeholder="Enter nationality name">
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Thumbnail</label>
                        <input type="file" name="thumbnail_path" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Nationality Modal -->
<div class="modal fade" id="editCategory" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Nationality</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="" method="POST" id="editNationalityForm" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit_nationality_name" class="form-label">Nationality Name</label>
                        <input type="text" id="edit_nationality_name" name="name" class="form-control" placeholder="Enter nationality name">
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Thumbnail</label>
                        <input type="file" name="thumbnail_path" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

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
            if (result.isConfirmed) {
                callback();
            }
        });
    }

    // Populate edit modal
    const editButtons = document.querySelectorAll('.edit-button');
    editButtons.forEach(button => {
        button.addEventListener('click', function() {
            const nationalityId = this.getAttribute('data-id');
            const nationalityName = this.getAttribute('data-name');
            const thumbnail = this.getAttribute('data-thumbnail');

            document.getElementById('edit_nationality_name').value = nationalityName;

            // Update the form action with the current nationality ID
            const editForm = document.getElementById('editNationalityForm');
            editForm.action = `{{ url('nationality') }}/${nationalityId}`; // Construct the URL for the update
        });
    });
</script>
@endsection
@endsection
