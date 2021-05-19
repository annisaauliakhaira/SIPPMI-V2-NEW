<div>
    <x-card>
        
        <form action="#" method="GET" wire:submit.prevent="storeOutput">
        <x-card-body>
            
            <x-card-header>
                <div>
                    <h4 class="fs-title">Create Output Penelitian</h4>
                </div>
            </x-card-header>
             <br> <!-- fieldsets -->
            <fieldset>
                <div class="form-card">

                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Skema Penelitian</th>
                                <td>: {{ $penelitian_output->skema_penelitian->nama }}</td>
                            </tr>
                            <tr>
                                <th>Luaran</th>
                                <td>: {{ $penelitian_output->jenis_output->luaran }}</td>
                            </tr>
                        </tbody>
                    </table>
                    
                        @include('livewire.frontends.penelitian.output._form_output')
                </div> 
            </fieldset>  
        </x-card-body>
        <x-card-footer>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </x-card-footer>
        
    </form>
    </x-card>
</div>
