<div class="row">
    <div class="col-lg-2">
        <label for="nama">Nama</label>
    </div>
    <div class="col-lg-10">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input wire:model="nama" type="text" class="form-control @error('nama') is-invalid
                    @enderror" placeholder="Nama">
                    @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <input wire:model="gelar_depan" type="text" class="form-control @error('gelar_depan') is-invalid
                    @enderror" placeholder="Gelar Depan">
                    @error('gelar_depan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-3">
                <div class="form-group">
                    <input wire:model="gelar_belakang" type="text" class="form-control @error('gelar_belakang') is-invalid
                    @enderror" placeholder="Gelar Belakang">
                    @error('gelar_belakang')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        <label for="nidn">NIDN</label>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <input wire:model="nidn" type="text" class="form-control @error('nidn') is-invalid
            @enderror" placeholder="NIDN">
            @error('nidn')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        <label for="tempat_lahir">Tempat, Tanggal Lahir</label>
    </div>
    <div class="col-lg-10">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input wire:model="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid
                    @enderror" placeholder="Tempat Lahir">
                    @error('tempat_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input wire:model="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid
                    @enderror" placeholder="Tanggal Lahir">
                    @error('tanggal_lahir')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        <label for="">Fakultas</label>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <select wire:model="selectedFakultas" class="form-control" id="selectFakultas">
              <option value="">-- Pilih Fakultas --</option>
              @foreach($fakultas as $data_fakultas)
              <option value="{{ $data_fakultas->id }}">{{ $data_fakultas->nama }}</option>
              @endforeach
            </select>
        </div>
    </div>
</div>
@if(!is_null($selectedFakultas))
<div class="row">
    <div class="col-lg-2">
        <label for="">Prodi</label>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <select wire:model="prodi_id" class="form-control" id="selectProdi">
              <option>-- Pilih Prodi --</option>
              @foreach($prodi as $data_prodi)
              <option value="{{ $data_prodi->id }}">{{ $data_prodi->nama }}</option>
              @endforeach
            </select>
        </div>
    </div>
</div>
@endif
<div class="row">
    <div class="col-lg-2">
        <label for="jabatan_fungsional">Jabatan Fungsional</label>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <input wire:model="jabatan_fungsional" type="text" class="form-control @error('jabatan_fungsional') is-invalid
            @enderror" placeholder="Jabatan Fungsional">
            @error('jabatan_fungsional')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        <label for="status">Status</label>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <input wire:model="status" type="text" class="form-control @error('status') is-invalid
            @enderror" placeholder="Status">
            @error('status')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        <label for="email">Email</label>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <input wire:model="email" type="text" id="email" class="form-control @error('email') is-invalid
            @enderror" placeholder="Email">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        <label for="">Jenis Kelamin</label>
    </div>
    <div class="col-lg-10">
        <div class="row">
            <div class="col-lg-6">
                <div class="form-check">
                    <input wire:model="jenis_kelamin" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="laki-laki" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Laki-Laki
                    </label>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-check">
                    <input wire:model="jenis_kelamin" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="perempuan">
                    <label class="form-check-label" for="exampleRadios2">
                      Perempuan
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        <label for="">Pangkat Golongan</label>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <input wire:model="pangkat_golongan" type="text" class="form-control @error('pangkat_golongan') is-invalid
            @enderror" placeholder="Pangkat Golongan">
            @error('pangkat_golongan')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-2">
        <label for="telepon">Nomor telepon</label>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <input wire:model="telepon" type="text" class="form-control @error('telepon') is-invalid
            @enderror" placeholder="Nomor telpon">
            @error('telepon')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
</div>
