<div class="row">
    <div class="col-lg-2">
        <x-label for="judul" value="Judul"/>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <x-input type="text" wire:model.lazy="judul" placeholder="Judul Penelitian"/>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-2">
        <x-label for="skema" value="Skema"/>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <x-select wire:model="skema_id">
                <option value="">--Pilihan--</option>
                @foreach ($skema as $data_skema)
                    <option value="{{ $data_skema->id }}">{{ $data_skema->nama }}</option>
                @endforeach
            </x-select>
        </div>
    </div>    
</div>

<div class="row">
    <div class="col-lg-2">
        <x-label for="prodi" value="Program Studi"/>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <x-select wire:model="prodi_id">
                <option value="">--Pilihan--</option>
                @foreach ($prodi as $data_prodi)
                    <option value="{{ $data_prodi->id }}">{{ $data_prodi->nama }}</option>
                @endforeach
            </x-select>
        </div>
    </div>    
</div>

<div class="row">
    <div class="col-lg-2">
        <x-label for="multi_tahun" value="Penelitian Multi Tahun"/>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <x-select wire:model.lazy="multi_tahun">
                <option value="">--Pilihan--</option>
                <option value="1">Ya</option>
                <option value="0">Tidak</option>
            </x-select>
        </div>
    </div>    
</div>


<div class="row">
    <div class="col-lg-2">
        <x-label for="biaya" value="Anggaran Biaya"/>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <x-input type="number" wire:model.lazy="biaya" placeholder="Anggaran Biaya"/>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-2">
        <x-label for="file_keuangan">Laporan Kuangan</x-label>
    </div>

    <div class="col-lg-10">
        <div class="form-group">
            <x-input wire:model="file_keuangan" id="file_keuangan" type="file"/>
            <small id="file_lap_keuangan_help" class="form-text text-muted">Maksimal ukuran file : 5 MB</small>
            @if($errors->has('file_keuangan'))
                <div class="invalid-feedback">
                    {{ $errors->first('file_keuangan') }}
                </div>
            @endif 
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-2">
        <x-label for="file_pengesahan">Lembaran Pengesahan</x-label>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <x-input wire:model="file_pengesahan" id="file_pengesahan" type="file"/>
            <small id="file_pengesahan_help" class="form-text text-muted">Maksimal ukuran file : 5 MB</small>
            @if($errors->has('file_pengesahan'))
                <div class="invalid-feedback">
                    {{ $errors->first('file_pengesahan') }}
                </div>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-2">
        <x-label for="file_proposal">File Proposal</x-label>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <x-input wire:model="file_proposal" id="file_proposal" type="file" />
            <small id="file_proposal_help" class="form-text text-muted">Maksimal ukuran file : 10 MB</small>
            @if($errors->has('file_proposal'))
                <div class="invalid-feedback">
                    {{ $errors->first('file_proposal') }}
                </div>
            @endif
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-2">
        <x-label for="file_cv">File CV</x-label>
    </div>
    <div class="col-lg-10">
        <div class="form-group">
            <x-input wire:model="file_cv" id="file_cv" type="file"/>
            <small id="file_cv_help" class="form-text text-muted">Maksimal ukuran file : 5 MB</small>
            @if($errors->has('file_cv'))
                <div class="invalid-feedback">
                    {{ $errors->first('file_cv') }}
                </div>
            @endif
        </div>
    </div>
</div>
