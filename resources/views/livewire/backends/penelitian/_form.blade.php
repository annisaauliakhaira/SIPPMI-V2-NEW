<div class="form-group">
    {{ html()->label('Judul', 'judul')->class(['control-label']) }}
    {{ html()->hidden('judul')->id('judul')->class('form-control '. $errors->has('judul') ? 'is-invalid' : '' )->required() }}

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
    {{ html()->label('Skema Penelitian', 'skema')->class(['control-label']) }}
    {{ html()->select('#')->id('skema_id')->class(['form-control', 'select2', 'is-invalid' => $errors->has('skema')])->placeholder('Pilihan Skema Penelitian') }}

    @if($errors->has('skema_id'))
        <div class="invalid-feedback">
            {{ $errors->first('skema_id') }}
        </div>
    @endif
    <span class="help-block">{{ html()->label('')->class(['control-label']) }}</span>
</div>

<div class="form-group">
    {{ html()->label('Bidang Fokus', 'fokus_id')->class(['control-label']) }}
    {{ html()->text('judl', old('fokus_id'))->class(['form-control', 'is-invalid' => $errors->has('fokus_id')])->id('fokus_id')->attribute('wire:model','fokus_id') }}
    @if($errors->has('fokus_id'))
        <div class="invalid-feedback">
            {{ $errors->first('fokus_id') }}
        </div>
    @endif
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

<div class="form-group">
    {{ html()->label('Biaya', 'biaya')->class(['control-label']) }}
    {{ html()->text('biaya')->id('biaya')->class(['form-control', 'is-invalid' => $errors->has('biaya') ]) }}
    @if($errors->has('biaya'))
        <div class="invalid-feedback">
            {{ $errors->first('biaya') }}
        </div>
    @endif
    <span class="help-block">{{ html()->label('')->class(['control-label']) }}</span>
</div>

<div class="form-group">
    <label for="file_pengesahan">Lembaran Pengesahan</label>
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
    <label for="file_proposal">File Proposal</label>
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
    <label for="file_cv">File CV</label>
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
