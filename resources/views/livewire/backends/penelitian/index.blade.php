<div>
    <x-card>

        <x-card-body>

            <x-card-header>
                <div class="col-md-8">
                    <h3 class="card-title mb-0"><span class="fi-rr-fill"></span> Penelitian &nbsp;
                        <x-btn :url="route('backend.penelitian.create.informasi-dasar')"><span class="fi fi-rr-plus"></span> Tambah Usulan Penelitian</x-btn>
                    </h3>
                </div>
                <div class="col-md-4"> 
                        <x-input class="form-control"   type="text" wire:model="searchTerm" placeholder="Search...."><i class="fi-rr-search"></i></x-input>
                </div>
            </x-card-header>

            <x-table>
                <x-table-head>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">JUDUL SKEMA PENELITIAN</th>
                        <th class="text-center">BIAYA <br>(RP)</th>
                        <th class="text-center">PROPOSAL</th>
                        <th class="text-center">CV</th>
                        <th class="text-center">LEMBARAN<br>PENGESAHAN</th>
                        <th class="text-center">STATUS<br>PENELITIAN</th>
                        @can('penelitian_manage')
                            <th class="text-center">&nbsp;AKSI</th>
                        @endcan
                    </tr>
                </x-table-head>
                <x-table-body>
                    @foreach ($penelitian as $Penelitian)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $Penelitian->judul }}</td>
                        <td class="text-center">{{ $Penelitian->biaya }}</td>
                        <td class="text-center">
                            @if ($Penelitian->file_proposal_url)
                            <a href="{{ $Penelitian->file_proposal_url, $Penelitian->penelitian_id}}"><span class="fi-rr-download">&nbsp;{{ $Penelitian->file_proposal }}</a>
                            @else
                                File Proposal Tidak Tersedia
                            @endif
                        </td>
                        <td class="text-center">
                            @if ($Penelitian->file_cv_url)
                            <a href="{{ $Penelitian->file_cv_url}}"><span class="fi-rr-download">&nbsp;{{ $Penelitian->file_cv }}</a>
                            @else
                                File CV Tidak Tersedia
                            @endif
                        </td>
                        <td class="text-center">
                            @if ($Penelitian->file_pengesahan_url)
                            <a href="{{ $Penelitian->file_pengesahan_url}}"><span class="fi-rr-download">&nbsp;{{ $Penelitian->file_pengesahan }}</a>
                            @else
                                File Pengesahan Tidak Tersedia
                            @endif
                        </td>
                        <td class="text-center">
                            <h5>
                                <span class="badge badge-{!! $Penelitian->statusTextColor !!}">
                                {{ $Penelitian->statusText}}
                                </span>
                            </h5>
                        </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-btn-show url="{{ route('backend.penelitian.detail',$Penelitian->id) }}"/>&nbsp;
                                    <x-btn-edit url="{{ route('backend.penelitian.create.informasi-dasar',$Penelitian) }}"/>
                                    &nbsp;
                                    <x-btn-delete type="button" wire:click="destroy({{ $Penelitian }})"/>
                                </div>
                            </td>
                    </tr>
                    @endforeach
                </x-table-body>
            </x-table>
            {{ $penelitian->links() }}
        </x-card-body>
    </x-card>
</div>
