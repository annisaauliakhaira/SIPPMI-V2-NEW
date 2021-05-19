<div class="row">
    <div class="col-lg-2">
        <x-label for="satuan" value="Nama Barang"/>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <x-input  wire:model.lazy="satuan" id="satuan" placeholder="Nama Barang"/>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-2">
        <x-label for="jumlah" value="Jumlah"/>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <x-input type="number" wire:model.lazy="jumlah" id="jumlah" placeholder="Jumlah Barang"/>
        </div>
    </div>
</div>
            
<div class="row">
    <div class="col-lg-2">
        <x-label for="harga_satuan" value="Harga Satuan"/>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <x-input  type="number" wire:model.lazy="harga_satuan" id="harga_satuan" placeholder="Harga Satuan"/>
        </div>
    </div>
</div>    
    
<div class="form-group">
    <button type="submit" class="btn btn-success"><span class="fi-rr-plus">&nbsp Tambah</button>
</div>
       

        

