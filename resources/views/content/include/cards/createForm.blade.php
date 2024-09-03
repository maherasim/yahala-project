<form id="createForm" method="POST" action="{{ route('list.cards.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="col mb-3">
        <label for="card_name" class="form-label">Card Name</label>
        <input type="text" id="card_name" class="form-control" placeholder="Cards Name" name="card_name" required>
    </div>
    <div class="col mb-3">
        <label for="card_image" class="form-label">Card Image</label>
        <input type="file" id="card_image" class="form-control background_image"  name="card_image" accept="image/*" required>
    </div>
</form>
