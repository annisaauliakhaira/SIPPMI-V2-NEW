<div class="form-group">
    <x-label for="judul" value="Judul"/>
    <x-input wire:model.lazy="judul" id="judul" hidden="judul" class="'form-control '. $errors->has('judul') ? 'is-invalid' : ''"/>
    {{-- {{ html()->label('Judul', 'judul')->class(['control-label']) }}
    {{ html()->hidden('judul')->id('judul')->class('form-control '. $errors->has('judul') ? 'is-invalid' : '' )->required() }} --}}

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
    {{ html()->select('#')->id('skema_id')->class(['form-control', 'select2', 'is-invalid' => $errors->has('skema')])->placeholder('Pilihan Skema Penelitian') }}

    @if($errors->has('skema_id'))
        <div class="invalid-feedback">
            {{ $errors->first('skema_id') }}
        </div>
    @endif
    <span class="help-block">{{ html()->label('')->class(['control-label']) }}</span>
</div>

<div class="form-group">
    <x-label for="prodi" value="Prodi"/>
    {{ html()->select('#')->id('prodi_id')->class(['form-control', 'select2', 'is-invalid' => $errors->has('prodi')])->placeholder('Pilihan Prodi') }}

    @if($errors->has('prodi_id'))
        <div class="invalid-feedback">
            {{ $errors->first('prodi_id') }}
        </div>
    @endif
    <span class="help-block">{{ html()->label('')->class(['control-label']) }}</span>
</div>

<div class="form-group">
    {{ html()->label('Penelitian Multi Tahun', 'multi_tahun')->class(['control-label']) }}
    {{ html()->select('#')->id('multi_tahun')->class(['form-control', 'select2', 'is-invalid' => $errors->has('multi_tahun')])->placeholder('Pilihan Penelitian Multi Tahun')  }}
    @if($errors->has('multi_tahun'))
        <div class="invalid-feedback">
            {{ $errors->first('multi_tahun') }}
        </div>
    @endif
    <span class="help-block">{{ html()->label('')->class(['control-label']) }}</span>
</div>

<div id="base_clone">
    <x-label class="control-label"><b>Anggaran Biaya</b></x-label>
    <button class="btn btn-sm btn-primary clone_add" type="button" wire:click="addAnggaranBiaya({{ $anggaran_biaya }})">add</button>
    <div class="row item_clone">
        <div class="form-group col-sm-4">
            <x-label class="control-label">Keterangan</x-label>
            <x-input type="text" wire:model="keterangan.1" value=""/>
        </div>
        <div class="form-group col-sm-4">
            <x-label class="control-label">Biaya</x-label>
            <x-input type="text" wire:model="biaya.1"/>
        </div>
        <div class="col-sm-4 pt-4">
            <button type="button" class="btn btn-sm btn-danger cancel">cancel</button>
        </div>
    </div>
    @foreach ($form_biaya as $key => $value)
        <div class="row item_clone">
            <div class="form-group col-sm-4">
                <x-label class="control-label">Keterangan</x-label>
                <x-input type="text" wire:model="keterangan.{{ $value }}" value=""/>
            </div>
            <div class="form-group col-sm-4">
                <x-label class="control-label">Biaya</x-label>
                <x-input type="text" wire:model="biaya.{{ $value }}"/>
            </div>
            <div class="col-sm-4 pt-4">
                <button type="button" class="btn btn-sm btn-danger cancel" wire:click="removeAnggaranBiaya({{ $key }})">cancel</button>
            </div>
        </div>
    @endforeach
</div>

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
