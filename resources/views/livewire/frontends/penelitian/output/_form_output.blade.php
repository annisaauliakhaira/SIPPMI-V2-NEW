<div class="row">
    <div class="col-lg-2">
        <x-label for="filename" value="File Luaran"/>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <x-input wire:model="filename" id="filename" type="file"/>
            <small id="file_name_help" class="form-text text-muted">Maksimal ukuran file : 5 MB</small>
            @if($errors->has('filename'))
                <div class="invalid-feedback">
                    {{ $errors->first('filename') }}
                </div>
            @endif 
        </div>
    </div> 
</div>    