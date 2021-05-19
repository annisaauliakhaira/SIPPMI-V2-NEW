<div>
    <div class="row">
        <div class="col-lg-2">
            <label for="pertanyaan">Pertanyaan</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="text" class="form-control @error('pertanyaan') is-invalid @enderror" placeholder="Pertanyaan" wire:model.lazy="pertanyaan">
                @error('pertanyaan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="bobot">Bobot</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="text" class="form-control @error('bobot') is-invalid @enderror" placeholder="bobot" wire:model.lazy="bobot">
                @error('bobot')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="prodi">Tipe Pertanyaan</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <select class="form-control" id="tipe_pertanyaan" wire:model="tipe_pertanyaan">
                    <option>-- Pilih Tipe Pertanyaan --</option>
                    <option value="tipe1">Tipe 1</option>
                    <option value="tipe2">Tipe 2</option>
                    <option value="tipe3">Tipe 3</option>
                </select>
            </div>
        </div>
    </div>
</div>
