<div>
    <div class="row">
        <div class="col-lg-12">
            <x-card>
                <form wire:submit.prevent="update">
                    <x-card-header>
                        <strong>Edit Periode Skema Penelititan</strong>
                    </x-card-header>
                    <x-card-body>
                        @include('livewire.backends.periodeskema._form')
                    </x-card-body>
                    <x-card-footer>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </x-card-footer>
                </form>
            </x-card>
        </div>
    </div>
</div>
