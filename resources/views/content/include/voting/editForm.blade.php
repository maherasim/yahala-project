<div class="nav-align-top edit-vote-modal">
    <div class="vote-header d-flex justify-content-center">
        <div class="vote-header1">
            <i class='bx bx-like bx-sm'></i>
            <span class='title'></span>
        </div>
    </div>

    <div class="p-2">
        <form id="editForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="hidden-inputs">
                <input type="hidden" name="vote_category_id" />
                <input type="hidden" name="vote_type" />
                <input type="hidden" name="id" />
            </div>

            <div class="vote-categories p-3 pt-2">
                <div class="p-1 select-category" for="category">Select Category</div>
                <div class="d-flex">
                    @foreach ($vote_categories as $index => $category )
                    <div class="vote-category" data-id="{{$category->id}}">
                        <div class="p-2">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('storage/'.$category->image) }}" />
                            </div>
                            <div class="text-center mt-2">{{$category->name}}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="vote-content mt-2 p-2">
                <div class="vote-banner dropzone needsclick dropzone-img p-2" action="/">
                    <div class="dz-message needsclick">
                        <img src='' style="height:100px; width:auto;" />
                    </div>
                    <div class="fallback">
                        <input type="file" name="image"  id="image" />
                    </div>
                </div>

                <div class="vote-title mt-3">
                    <div>Vote Title</div>
                    <div style="background:white;">
                        <input type="text" id="fullname" class="form-control" placeholder="title" name="name" required>
                    </div>
                </div>

                <div class="mt-3 vote-audio">
                </div>
            </div>

            @php
                $optionLabels = ["Left Button Title","Middle Button Title","Right Button Title"];
            @endphp

            <div class="allowed-reactions mt-4 p-3">
                <div id="individual-vote-options">
                    <div class="fw-bold">Allowed Reaction</div>
                    @foreach($optionLabels as $index => $optionLabel)
                        <div class="d-flex align-items-center mt-4 individual-reaction-option" data-index="{{$index}}">
                            <div class="max-10-letters">Max. 10 Letters</div>
                            <div class="individual-vote-react-option-image uploaded">
                                <img src="" style='width:30px;height:30px' />
                                <input type="file" class="hidden" />
                                <input type='hidden' name="reaction_option[{{$index}}][image]" />
                                <div class="remove-image justify-content-center align-items-center">
                                    <button class="btn btn-danger p-0"><i class='bx bx-trash bx-sm'></i></button>
                                </div>
                            </div>
                            <div class="ms-2 flex-fluid">
                                <input
                                    type="text"
                                    class="form-control w-100"
                                    placeholder="{{$optionLabel}}"
                                    name="reaction_option[{{$index}}][title]"
                                    value="11"
                                    required
                                />
                            </div>
                        </div>
                    @endforeach
                </div>

                <div id="single-vote-options">
                    <div class="fw-bold">Allowed Reaction</div>
                    <div class="d-flex justify-content-between mt-1">
                        <input type="hidden" name="reaction_option[1][title]" value="Yes" />
                        <input type="hidden" name="reaction_option[2][title]" value="No idea" />
                        <input type="hidden" name="reaction_option[3][title]" value="No" />
                        <div class="reaction-option">Yes</div>
                        <div class="reaction-option">No idea</div>
                        <div class="reaction-option">No</div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="hidden" id='hidden_div'></div>
</div>
