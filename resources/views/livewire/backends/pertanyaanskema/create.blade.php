<div>
    <div>
        <div class="row">
            <div class="col-lg-12">
                <x-card>
                    <form wire:submit.prevent="store">
                        <x-card-header>
                            <strong>Form Pertanyaan Skema Penelitian</strong>
                        </x-card-header>
                        <x-card-body>
                            @include('livewire.backends.pertanyaanskema._form')
                        </x-card-body>
                        <x-card-footer>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </x-card-footer>
                    </form>
                </x-card>
            </div>
        </div>
    </div>
</div>