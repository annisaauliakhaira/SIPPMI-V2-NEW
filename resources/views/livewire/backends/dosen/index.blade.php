<x-card>
    <x-card-body>
        <div class="d-flex justify-content-between pb-4">
            <div>
                <h4 class="card-title mb-0">Data Dosen</h4>
            </div>
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with buttons">
                <a href="{{ route('backend.dosen.create') }}" class="btn btn-sm btn-primary">
                    <x-bi-person-lines-fill class="c-icon" /> Tambah Dosen
                </a>
            </div>
        </div>
        <x-table>
            <x-table-head>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">NIDN</th>
                    <th class="text-center">Action</th>
                </tr>
            </x-table-head>
            <x-table-body>
                @forelse ($dosen as $data_dosen)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $data_dosen->gelar_depan }}. {{ $data_dosen->nama }}, {{ $data_dosen->gelar_belakang }}</td>
                        <td class="text-center">{{ $data_dosen->nidn }}</td>
                        <td class="text-center">
                            <a href="{{ route('backend.dosen.edit',$data_dosen->id) }}" class="btn btn-warning btn-sm"><i class="fi-rr-edit"></i></a>
                            <button wire:click="destroyConfirmation({{ $data_dosen->id }})" class="btn btn-danger btn-sm"><i class="fi-rr-trash"></i></button>
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
