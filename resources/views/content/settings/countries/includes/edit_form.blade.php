<form id="editForm{{ $country->id }}" action="{{ route('settings.countries.update', $country->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <input type="hidden" name="showEditFormModal{{ $country->id }}" value="1">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">
                <div class="col-md-12">
                    <label class="form-label" for="inputName{{ $country->id }}">Country Name</label>
                    <input type="text" id="inputName{{ $country->id }}" name="name" class="form-control" value="{{ old('name')?? $country->name }}" placeholder="Country Name">
                    @error('name')
                    <div class="invalid-feedback d-block">{{ $message }}</div>
                    @enderror
                </div>


                <div class="col-md-12">
                    <label class="form-label">Country Flag

                    @if($country->flag_path != "")
                        <img src="{{asset('/images/flags/' . $country->flag_path)}}" class="flag" />
            
                    @endif
                    </label>
                    
                    <input name="dp" id="uploadimage2" type="file"  data-height="90" accept="image/*" />
                </div>





            </div>
        </div>
    </div>
</form>