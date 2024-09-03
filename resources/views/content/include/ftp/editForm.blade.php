<form id='editForm{{$ftp->id}}' method="POST" action="{{route("app-ftp-update", $ftp->id)}}" enctype="multipart/form-data">
    @csrf
    {{-- <div class="hidden-inputs"></div> --}}
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row g-3">

              <div class="col-md-12">
                <label class="form-label" for="ftp_for">Ftp For</label>
                <input type="text" name="ftp_for" id="ftp_for" class="form-control" value="{{$ftp->ftp_for}}"/>
                @error('ftp_for')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-12">
                <label class="form-label" for="server_ip">Servre IP</label>
                <input type="text" name="server_ip" id="server_ip" class="form-control" value="{{$ftp->server_ip}}" />
                @error('server_ip')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-md-12">
                <label class="form-label" for="folder">Folder</label>
                <input type="text" name="folder" id="folder" class="form-control" value="{{$ftp->folder}}"/>
                @error('folder')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>
        </div>
    </div>
    </div>
</form>
