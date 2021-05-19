<div class="row col-sm-10 form-group">
    <div class="col-lg-2">
        <x-label for="dosen" value="Dosen Peneliti"/>
    </div>
    <div class="col-lg-4">
        <x-select wire:model="dosen_id" key="dosen_id">
            <option value="">--Pilihan--</option>
            @foreach ($dosen as $data_dosen)
                <option value="{{ $data_dosen->id }}">{{ $data_dosen->nama }}</option>
            @endforeach
        </x-select>
        @if($errors->has('dosen_id'))
                <span>{{ $errors->first('dosen_id') }}</span>
        @endif
    </div>

    <div class="col-lg-1">
        <x-label for="jabatan" value="Jabatan"/>
    </div>
    <div class="col-lg-4">
        
            <x-select wire:model="jabatan" key="jabatan">
                <option value="">--Pilihan--</option>
                <option value="Ketua">Ketua</option>
                <option value="Anggota">Anggota</option>
            </x-select>
            @if($errors->has('jabatan'))
                <span>{{ $errors->first('jabatan') }}</span>
            @endif
    </div>
    
    <div class="col-lg-1">
        <button type="submit" class="btn btn-success"><span class="fi-rr-plus"></span></button>
    </div>
</div>
