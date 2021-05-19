<div>
    <x-card>
        <x-card-body>
            <div class="d-flex justify-content-between pb-4">
                <div>
                    <h4 class="card-title mb-0">Skema Penelitian</h4>
                </div>
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with buttons">
                    <a href="{{ route('backend.skema_penelitian.create') }}" class="btn btn-sm btn-primary">
                        <x-bi-person-lines-fill class="c-icon" /> Tambah skema
                    </a>
                </div>
            </div>
            <x-table>
                <x-table-head>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Skema</th>
                        <th class="text-center">Fakultas</th>
                        <th class="text-center">Kelengkapan</th>
                        <th class="text-center">Action</th>
                    </tr>
                </x-table-head>
                <x-table-body>
                    @forelse ($skema_penelitian as $data_skema)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $data_skema->nama }}</td>
                            <td class="text-center">{{ $data_skema->fakultas->nama }}</td>
                            <td class="text-center">
                                @if($data_skema->skema_penelitian_periode)
                                <span wire:click="checkActionPeriode({{ $data_skema->skema_penelitian_periode->id }})" class="btn btn-sm btn-success periode_success">Periode</span>
                                @else
                                <a href="{{ route('backend.periode_skema_penelitian.create',$data_skema->id) }}" class="btn btn-sm btn-light periode_progress">Periode</a>
                                @endif
                                @if($data_skema->skema_penelitian_question)
                                <span wire:click="checkActionQuestion({{ $data_skema->skema_penelitian_question->id }})" class="btn btn-sm btn-success">Pertanyaan</span>
                                @else
                                <a href="{{ route('backend.pertanyaan_skema.create',$data_skema->id) }}" class="btn btn-sm btn-light">Pertanyaan</a>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route("backend.skema_penelitian.detail",$data_skema->id) }}" class="btn btn-info btn-sm"><i class="fi-rr-eye"></i></a>
                                <a href="{{ route("backend.skema_penelitian.edit",$data_skema->id) }}" class="btn btn-warning btn-sm"><i class="fi-rr-edit"></i></a>
                                <button wire:click="destroyConfirm({{ $data_skema->id }})" class="btn btn-danger btn-sm"><i class="fi-rr-trash"></i></button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="4">Data tidak ditemukan</td>
                        </tr>
                    @endforelse
                </x-table-body>
            </x-table>
        </x-card-body>
    </x-card>
</div>
