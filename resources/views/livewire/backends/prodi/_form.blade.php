<div>
    <div class="row">
        <div class="col-lg-2">
            <label for="">Fakultas</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <select class="form-control" id="fakultas" wire:model="fakultas_id">
                  <option>-- Pilih Fakultas --</option>
                  @foreach ($fakultas as $data_fakultas)
                      <option value="{{ $data_fakultas->id }}">{{ $data_fakultas->nama }}</option>
                  @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="prodi">Nama Prodi</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="text" class="form-control @error('nama_prodi') is-invalid @enderror" placeholder="Nama prodi" wire:model.lazy="nama_prodi">
                @error('nama_prodi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="prodi">Kode</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="text" class="form-control @error('kode') is-invalid @enderror" placeholder="Kode prodi" wire:model.lazy="kode">
                @error('kode')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="prodi">Kode Dikti</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="text" class="form-control @error('kode_dikti') is-invalid @enderror" placeholder="Kode dikti" wire:model.lazy="kode_dikti">
                @error('kode_dikti')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="prodi">Akreditasi</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="text" class="form-control @error('akreditasi') is-invalid @enderror" placeholder="Akreditasi" wire:model.lazy="akreditasi">
                @error('akreditasi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
</div>
