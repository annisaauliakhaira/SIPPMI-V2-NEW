<div class="form-group">
    <x-label for="judul" value="Judul"/>
    <x-input wire:model.lazy="judul" type="hidden"/>
    {{-- {{ html()->label('Judul', 'judul')->class(['control-label']) }}
    {{-- {{ html()->hidden('judul')->id('judul')->class('form-control '. $errors->has('judul') ? 'is-invalid' : '' )->required() }} --}}

    <div id="editor">
        {!! old('judul', optional($penelitian ?? '')->judul) !!}
    </div>
    @if($errors->has('judul'))
        <div class="invalid-feedback">
            {{ $errors->first('judul') }}
        </div>
    @endif
</div>

<div class="form-group">
    <x-label for="skema" value="Skema Penelitian"/>
    <x-select wire:model.lazy="skema">
        <option value="">--Pilihan--</option>
        @foreach ($skemas as $skema)
            <option value="{{ $skema->id }}">{{ $skema->nama }}</option>
        @endforeach
    </x-select>

    @if($errors->has('skema_id'))
        <div class="invalid-feedback">
            {{ $errors->first('skema_id') }}
        </div>
    @endif
    <span class="help-block">{{ html()->label('')->class(['control-label']) }}</span>
</div>

<div class="form-group">
    <x-label for="prodi" value="Prodi"/>
    <x-select wire:model.lazy="prodi">
        <option value="">--Pilihan--</option>
        @foreach ($prodis as $prodi)
            <option value="{{ $prodi->id }}">{{ $prodi->nama }}</option>
        @endforeach
    </x-select>

    @if($errors->has('prodi_id'))
        <div class="invalid-feedback">
            {{ $errors->first('prodi_id') }}
        </div>
    @endif
</div>

<div class="form-group">
    <x-label for="multi_tahun" value="Penelitian Multi Tahun"/>
    <x-select wire:model.lazy="multi_tahun">
        <option value="">--Pilihan--</option>
        <option value="1">Ya</option>
        <option value="0">Tidak</option>
    </x-select>
    @if($errors->has('multi_tahun'))
        <div class="invalid-feedback">
            {{ $errors->first('multi_tahun') }}
        </div>
    @endif
</div>

<div class="form-group">
    <x-label for="biaya" value="Anggaran Biaya"/>
    <x-input wire:model.lazy="biaya" id="biaya"/>
</div>

{{-- <div id="base_clone">
    <x-label class="control-label"><b>Anggaran Biaya</b></x-label>
    <button class="btn btn-sm btn-primary clone_add" type="button" wire:click="addAnggaranBiaya({{ $anggaran_biaya }})">add</button>
    <div class="row item_clone">
        <div class="form-group col-sm-2">
            <x-label class="control-label">Jumlah</x-label>
            <x-input type="text" wire:model.lazy="jumlah.1" value=""/>
        </div>
        <div class="form-group col-sm-2">
            <x-label class="control-label">Harga Satuan</x-label>
            <x-input type="text" wire:model.lazy="harga_satuan.1"/>
        </div>
        <div class="form-group col-sm-2">
            <x-label class="control-label">Total</x-label>
            <x-input type="text" wire:model="jumlah_final.1"/>
        </div>
        <div class="col-sm-4 pt-4">
            <button type="button" class="btn btn-sm btn-danger cancel">cancel</button>
        </div>
    </div>
    @foreach ($form_biaya as $key => $value)
        <div class="row item_clone">
            <div class="form-group col-sm-2">
                <x-label class="control-label">Jumlah</x-label>
                <x-input type="text" wire:model="jumlah.{{ $value }}" value=""/>
            </div>
            <div class="form-group col-sm-2">
                <x-label class="control-label">Harga Satuan</x-label>
                <x-input type="text" wire:model="harga_satuan.{{ $value }}"/>
            </div>
            <div class="form-group col-sm-2">
                <x-label class="control-label">Total</x-label>
                <x-input type="text" wire:model="jumlah_final.{{ $value }}"/>
            </div>
            <div class="col-sm-4 pt-4">
                <button type="button" class="btn btn-sm btn-danger cancel" wire:click="removeAnggaranBiaya({{ $key }})">cancel</button>
            </div>
        </div>
    @endforeach
</div> --}}

<div class="form-group">
    <x-label for="file_lap_keuangan">Laporan Kuangan</x-label>
    {{ html()->input('file', 'file_lap_keuangan')->id('file_lap_keuangan')->class('form-control')->attribute('aria-describedBy', 'file_lap_keuangan_help') }}
    <small id="file_lap_keuangan_help" class="form-text text-muted">Maksimal ukuran file : 5 MB</small>
    @if($errors->has('file_lap_keuangan'))
        <div class="invalid-feedback">
            {{ $errors->first('file_lap_keuangan') }}
        </div>
    @endif
    <span class="help-block">{{ html()->label('')->class(['control-label']) }}</span>
    @if(isset($penelitian) && !empty($penelitian->file_lap_keuangan))
        <a href="{{ $penelitian->getFilePengesahanUrl() ?? '' }}" target="_blank">
            <i class="fa fa-file-pdf text-danger"></i>
            Download
        </a>
    @endif
</div>

<div class="form-group">
    <x-label for="file_pengesahan">Lembaran Pengesahan</x-label>
    {{ html()->input('file', 'file_pengesahan')->id('file_pengesahan')->class('form-control')->attribute('aria-describedBy', 'file_pengesahan_help') }}
    <small id="file_pengesahan_help" class="form-text text-muted">Maksimal ukuran file : 5 MB</small>
    @if($errors->has('file_pengesahan'))
        <div class="invalid-feedback">
            {{ $errors->first('file_pengesahan') }}
        </div>
    @endif
    <span class="help-block">{{ html()->label('')->class(['control-label']) }}</span>
    @if(isset($penelitian) && !empty($penelitian->file_pengesahan))
        <a href="{{ $penelitian->getFilePengesahanUrl() ?? '' }}" target="_blank">
            <i class="fa fa-file-pdf text-danger"></i>
            Download
        </a>
    @endif
</div>

<div class="form-group">
    <x-label for="file_proposal">File Proposal</x-label>
    {{ html()->input('file', 'file_proposal')->id('file_proposal')->class('form-control')->attribute('aria-describedBy', 'file_proposal_help') }}
    <small id="file_proposal_help" class="form-text text-muted">Maksimal ukuran file : 10 MB</small>
    @if($errors->has('file_proposal'))
        <div class="invalid-feedback">
            {{ $errors->first('file_proposal') }}
        </div>
    @endif
    <span class="help-block">{{ html()->label('')->class(['control-label']) }}</span>
    @if(isset($penelitian) && !empty($penelitian->file_proposal))
        <a href="{{ $penelitian->getFileProposalUrl() ?? '' }}" target="_blank">
            <i class="fa fa-file-pdf text-danger"></i>
            Download
        </a>
    @endif
</div>

<div class="form-group">
    <x-label for="file_cv">File CV</x-label>
    {{ html()->input('file', 'file_cv')->id('file_cv')->class('form-control')->attribute('aria-describedBy', 'file_cv_help') }}
    <small id="file_cv_help" class="form-text text-muted">Maksimal ukuran file : 5 MB</small>
    @if($errors->has('file_proposal'))
        <div class="invalid-feedback">
            {{ $errors->first('file_cv') }}
        </div>
    @endif
    <span class="help-block">{{ html()->label('')->class(['control-label']) }}</span>
    @if(isset($penelitian) && !empty($penelitian->file_cv))
        <a href="{{ $penelitian->getFileCvUrl() ?? ''->getFileCvUrl() }}" target="_blank">
            <i class="fa fa-file-pdf text-danger"></i>
            Download
        </a>
    @endif
</div>
