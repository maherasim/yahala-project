<form id="createForm" method="POST" action="{{ route('feed.background.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="col mb-3">
        <label for="background_name" class="form-label">Background Name</label>
        <input type="text" id="background_name" class="form-control" placeholder="Background Name" name="background_name" required>
    </div>
    <div class="col mb-3">
        <label for="background_image" class="form-label">Background Image</label>
        <input type="file" id="background_image" class="form-control background_image"  name="background_image" accept="image/jpeg,image/jpg,image/png,image/webp,image/gif" required>
    </div>
</form>
