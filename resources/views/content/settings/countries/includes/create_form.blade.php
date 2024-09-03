<form id="createForm" action="{{ route('settings.countries.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="showCreateFormModal" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputName">Country Name</label>
                    <input type="text" id="inputName" name="name" class="form-control" value="{{ old('name') }}" placeholder="Country Name">
                    @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>

                

                <div class="col-md-12">
                <label class="form-label" >Country Flag</label><br>
                        <!--<label for="uploadimage">
                            <img id="flag_image" src="{{asset('/images/flags/flag.png')}}" />	</label>-->
                        <input name="dp" id="uploadimage2" type="file"  data-height="90" accept="image/*" />
                        
                        <!--<button type="button" class="btn1 btn-danger removebtn">X</button>-->
                        
                    </div>

            </div>
        </div>
    </div>
</form>
