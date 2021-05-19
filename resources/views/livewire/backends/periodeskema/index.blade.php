<div>
    <x-card>
        <x-card-body>
            <div class="d-flex justify-content-between pb-4">
                <div>
                    <h4 class="card-title mb-0">Periode Skema Penelitian</h4>
                </div>
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with buttons">
                    <a href="{{ route('backend.periode_skema_penelitian.create') }}" class="btn btn-sm btn-primary">
                        <x-bi-person-lines-fill class="c-icon" /> Masukkan Periode Penelitian
                    </a>
                </div>
            </div>
            <x-table>
                <x-table-head>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Skema Penelitian</th>
                        <th class="text-center">Fakultas</th>
                        <th class="text-center">Action</th>
                    </tr>
                </x-table-head>
                <x-table-body>
                    @forelse($skema_penelitian_periode as $data_skema_penelitian_periode)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $data_skema_penelitian_periode->nama }}</td>
                        <td class="text-center">{{ $data_skema_penelitian_periode->skema_penelitian->fakultas->nama }}</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-warning btn-sm"><i class="fi-rr-edit"></i></a>
                            <button wire:click="destroy()" id="hapus_skema" class="btn btn-danger btn-sm"><i class="fi-rr-trash"></i></button>
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
