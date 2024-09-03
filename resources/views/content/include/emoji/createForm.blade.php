<form id="createForm" method="POST" action="{{ route('feed.emoji.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="col mb-3">
        <label for="emoji_name" class="form-label">Emoji Name</label>
        <input type="text" id="emoji_name" class="form-control" placeholder="Emoji Name" name="emoji_name" required>
    </div>
    <div class="col mb-3">
        <label for="emoji_image" class="form-label">Emoji Image</label>
        <input type="file" id="emoji_image" class="form-control emoji_image"  name="emoji_image" accept="image/*" required>
    </div>
</form>
