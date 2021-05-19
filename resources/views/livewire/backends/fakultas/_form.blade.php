<div class="row">
    <div class="col-lg-2">
        <label for="">Nama Fakultas</label>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <input type="text" class="form-control @error('nama_fakultas') is-invalid
            @enderror" placeholder="Fakultas" wire:model="nama_fakultas">
            @error('nama_fakultas')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
</div>
