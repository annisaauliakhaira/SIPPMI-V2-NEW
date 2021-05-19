<div>
    <div class="row">
        <div class="col-lg-12">
            <form wire:submit.prevent="store">
                <div class="row">
                    <div class="col-lg-9">
                        <x-card>
                            <x-card-header>
                                <strong>Form Data Dosen</strong>
                            </x-card-header>
                            <x-card-body>
                                @include('livewire.backends.dosen._form')
                            </x-card-body>
                            <x-card-footer>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </x-card-footer>
                        </x-card>
                    </div>
                    <div class="col-lg-3">
                        <x-card>
                            <x-card-header>
                                <strong>Foto</strong>
                            </x-card-header>
                            <x-card-body>
                                @if($photo)
                                <div class="preview-zone">
                                    <div class="box box-solid">
                                        <div class="box-header with-border">
                                            <div>
                                                <b>
                                                    <button type="button" wire:click="deletePreview" class="btn btn-danger btn-sm remove-preview">
                                                    <i class="fa fa-times"></i> Delete
                                                    </button>
                                                </b>
                                            </div>
                                        </div>
                                        <div class="box-body">
                                            <img width="150" src="{{ $photo->temporaryUrl() }}">
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if(!$photo)
                                <div class="dropzone-wrapper">
                                    <div class="dropzone-desc">
                                        <p>Pilih atau seret gambar</p>
                                    </div>
                                    <input type="file" wire:model="photo" class="dropzone">
                                </div>
                                @endif
                            </x-card-body>
                        </x-card>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
