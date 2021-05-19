<div>
    <x-card>
        
        <x-card-body>
            
            <x-card-header>
                <div>
                    <h4 class="fs-title">Output Penelitian</h4>
                </div>
            </x-card-header>
            <br> <!-- fieldsets -->
            <fieldset>
                <div class="form-card">

                    <x-table>
                        <x-table-head>
                            <tr>
                                <th class="text-center">Nama Skema</th>
                                <th class="text-center">Jenis Output</th>
                                    <th class="text-center">&nbsp;AKSI</th>
                            </tr>
                        </x-table-head>
        
                        <x-table-body>
                            @foreach ($penelitian_outputs as $penelitian_output)
                            <tr>
                                <td class="text-center">{{ $penelitian_output->skema_penelitian->nama}}</td>
                                <td class="text-center">{{ $penelitian_output->jenis_output->luaran}}</td>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        @if($penelitian_output->penelitian_outputs()->where('penelitian_id',$penelitian->id)->first())
                                        <span wire:click="checkActionOutput({{ $penelitian_output->id.','.$penelitian->id }})" class="btn btn-sm btn-success output_success">Output</span>
                                        @else
                                        <a href="{{ route('frontend.penelitian.create.output',['penelitian_output' => $penelitian_output, 'penelitian' => $penelitian]) }}" class="btn btn-sm btn-light output_progress">Output</a>
                                        @endif

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
