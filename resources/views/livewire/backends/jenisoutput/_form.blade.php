<div>
    <div class="row">
        <div class="col-lg-2">
            <label for="code">Kode</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="text" class="form-control @error('code') is-invalid @enderror" placeholder="Kode output" wire:model.lazy="code">
                @error('code')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="luaran">Luaran</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="text" class="form-control @error('luaran') is-invalid @enderror" placeholder="luaran penelitian" wire:model.lazy="luaran">
                @error('luaran')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
</div>
