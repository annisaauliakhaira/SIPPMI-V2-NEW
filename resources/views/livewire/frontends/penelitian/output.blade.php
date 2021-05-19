<div>
    <x-card>
        
        <x-card-body>
            
            <x-card-header>
                <div>
                    <h4 class="fs-title">Create Output Penelitian</h4>
                </div>
            </x-card-header>
            <br> <!-- fieldsets -->
            <fieldset>
                <div class="form-card">

                    <form action="#" method="GET" wire:submit.prevent="storeOutput">
                        @include('livewire.frontends.penelitian.output._form_output')
                    </form>
                    <x-table>
                        <x-table-head>
                            <tr>
                                <th class="text-center">Skema</th>
                                <th class="text-center">File Luaran</th>
                                    <th class="text-center">&nbsp;AKSI</th>
                            </tr>
                        </x-table-head>
        
                        <x-table-body>
                            @foreach ($penelitian_output as $penelitianOutput)
                                <tr>
                                    <td class="text-center">{{ $penelitianOutput->tanggal_upload}}</td>
                                    <td class="text-center">{{ $penelitianOutput->skema_penelitian_output->jenis_output->luaran}}</td>
                                    <td class="text-center">
                                        @if ($penelitianOutput->file_name_url)
                                            <a href="{{ $penelitianOutput->file_name_url}}"><i class="fi-rr-download">&nbsp;</i>{{ $penelitianOutput->file_name_url }}</a>
                                        @else
                                            File Output Tidak Tersedia
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <x-btn-delete type="button" wire:click="destroy({{ $penelitianOutput }})"/>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </x-table-body>
                    </x-table>
                </div> 
            </fieldset>  

        </x-card-body>
    </x-card>
</div>
