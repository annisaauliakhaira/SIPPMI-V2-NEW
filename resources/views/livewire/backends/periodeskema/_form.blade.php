<div>
    <div class="row">
        <div class="col-lg-2">
            <label for="">Nama</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" wire:model.lazy="nama">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="tanggal_mulai_registrasi">Registrasi</label>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <input wire:key="mulai_regis" type="text" id="tanggal_mulai_registrasi" class="form-control @error('tanggal_mulai_registrasi') is-invalid @enderror" placeholder="Tanggal Mulai Registrasi" wire:model.lazy="tanggal_mulai_registrasi">
                @error('tanggal_mulai_registrasi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <input wire:key="akhir_regis" type="text" id="tanggal_akhir_registrasi" class="form-control @error('tanggal_akhir_registrasi') is-invalid @enderror" placeholder="Tanggal Akhir Registrasi" wire:model.lazy="tanggal_akhir_registrasi">
                @error('tanggal_akhir_registrasi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="tanggal_mulai_penelitian">Penelitian</label>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <input wire:key="mulai_penelitian" type="text" id="tanggal_mulai_penelitian" class="form-control @error('tanggal_mulai_penelitian') is-invalid @enderror" placeholder="Tanggal Mulai Penelitian" wire:model.lazy="tanggal_mulai_penelitian">
                @error('tanggal_mulai_penelitian')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-lg-5">
            <div class="form-group">
                <input wire:key="akhir_penelitian" type="text" id="tanggal_akhir_penelitian" class="form-control @error('tanggal_akhir_penelitian') is-invalid @enderror" placeholder="Tanggal Akhir Penelitian" wire:model.lazy="tanggal_akhir_penelitian">
                @error('tanggal_akhir_penelitian')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
</div>
