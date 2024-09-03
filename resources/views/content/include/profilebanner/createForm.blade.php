<form id="createForm" method="POST" action="{{ route('profile.banner.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="col mb-3">
        <label for="banner_name" class="form-label">Banner Name</label>
        <input type="text" id="banner_name" class="form-control" placeholder="Banner Name" name="banner_name" required>
    </div>
    <div class="col mb-3">
        <label for="banner_image" class="form-label">Banner Image</label>
        <input type="file" id="banner_image" class="form-control background_image"  name="banner_image" accept="image/*" required>
    </div>
</form>
