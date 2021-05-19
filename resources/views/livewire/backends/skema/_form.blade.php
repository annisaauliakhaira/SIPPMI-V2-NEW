<div>
    <div class="row">
        <div class="col-lg-2">
            <label for="fakultas">Fakultas</label>
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
            <label for="nama">Nama Skema</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="text" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama skema" wire:model="nama">
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
            <label for="jangka_waktu">Jangka Waktu</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="text" class="form-control @error('jangka_waktu') is-invalid @enderror" placeholder="Jangka Waktu" wire:model="jangka_waktu">
                @error('jangka_waktu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="biaya_minimal">Biaya Minimal</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="number" class="form-control @error('biaya_minimal') is-invalid @enderror" placeholder="Biaya Minimal" wire:model="biaya_minimal">
                @error('biaya_minimal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="biaya_maksimal">Biaya Maksimal</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="number" class="form-control @error('biaya_maksimal') is-invalid @enderror" placeholder="Biaya Maksimal" wire:model="biaya_maksimal">
                @error('biaya_maksimal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="sumber_dana">Sumber Dana</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="text" class="form-control @error('sumber_dana') is-invalid @enderror" placeholder="Sumber dana" wire:model="sumber_dana">
                @error('sumber_dana')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="anggota_min">Anggota Minimal</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="number" class="form-control @error('anggota_min') is-invalid @enderror" placeholder="Anggota Minimal" wire:model="anggota_min">
                @error('anggota_min')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="anggota_max">Anggota Maksimal</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="number" class="form-control @error('anggota_max') is-invalid @enderror" placeholder="Anggota Maksimal" wire:model="anggota_max">
                @error('anggota_max')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="mahasiswa_min">Mahasiswa Minimal</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="number" class="form-control @error('mahasiswa_min') is-invalid @enderror" placeholder="Mahasiswa Minimal" wire:model="mahasiswa_min">
                @error('mahasiswa_min')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="mahasiswa_max">Mahasiswa Maksimal</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="number" class="form-control @error('mahasiswa_max') is-invalid @enderror" placeholder="Mahasiswa Maksimal" wire:model="mahasiswa_max">
                @error('mahasiswa_max')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="jabatan_ketua_min">Jabatan Minimal Ketua</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="number" class="form-control @error('jabatan_ketua_min') is-invalid @enderror" placeholder="Jabatan Minimal Ketua" wire:model="jabatan_ketua_min">
                @error('jabatan_ketua_min')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="jabatan_ketua_max">Jabatan Ketua Maksimal</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="number" class="form-control @error('jabatan_ketua_max') is-invalid @enderror" placeholder="Jabatan Ketua Maksimal" wire:model="jabatan_ketua_max">
                @error('jabatan_ketua_max')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="jabatan_anggota_min">Jabatan Anggota Minimal</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="number" class="form-control @error('jabatan_anggota_min') is-invalid @enderror" placeholder="Jabatan Anggota Minimal" wire:model="jabatan_anggota_min">
                @error('jabatan_anggota_min')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <label for="jabatan_anggota_max">Jabatan Anggota Maksimal</label>
        </div>
        <div class="col-lg-10">
            <div class="form-group">
                <input type="number" class="form-control @error('jabatan_anggota_max') is-invalid @enderror" placeholder="Jabatan Anggota Maksimal" wire:model="jabatan_anggota_max">
                @error('jabatan_anggota_max')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
</div>
