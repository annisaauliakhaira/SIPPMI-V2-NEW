<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">

                {{ html()->form('#')->attribute('wire:submit.prevent','update')->open() }}

                <div class="card-header">
                    <strong><i class="cil-library-add"></i> Tambah Permissions</strong>
                </div>

                <div class="card-body">

                    @include('livewire.backends.permissions._form')

                </div>

                <div class="card-footer">
                    {{ html()->submit('Tambah')->class('btn btn-primary') }}
                </div>


                {{ html()->form()->close() }}

            </div>
        </div>
    </div>
</div>
