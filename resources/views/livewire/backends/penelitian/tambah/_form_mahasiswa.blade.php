<div class="row form-group">
    <div class="col-lg-1">
        <x-label for="nama" value="Nama"/>
    </div>
    <div class="col-lg-4">
        <x-input wire:model.lazy="nama" id="nama"/>
    </div>

    <div class="col-lg-1">
        <x-label for="identifier" value="NIM"/>
    </div> <br><br>
    <div class="col-lg-4">  
        <x-input wire:model.lazy="identifier" id="identifier"/>
    </div>
    
    <div class="col-lg-2">
        <button type="submit" class="btn btn-success"><span class="fi-rr-plus"></span></button>
    </div>
</div>
