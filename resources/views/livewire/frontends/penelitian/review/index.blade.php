<div>
<x-card>
        <x-card-body>
            <x-card-header>
                <div>
                    <h4 class="card-title mb-0"><i class="fi-rr-search-alt"></i> Review Penelitian</h4>
                </div>    
            </x-card-header>
            <x-table>
                <x-table-head>
                    <tr>
                        <th class="text-center">Ketua</th>
                        <th class="text-center">Anggota</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Nilai</th>
                        @can('penelitian_manage')
                            <th class="text-center">&nbsp;Review</th>
                        @endcan
                    </tr>
                </x-table-head>

                <x-table-body>
                    <tr>
                        <td class="text-center">{{ '#' }}</td>
                        <td class="text-center">{{ '#' }}</td>
                        <td class="text-center">{{ '#' }}</td>
                        <td class="text-center">{{ '#' }}</td>
                        @can('penelitian_manage')
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-btn-edit :url="route('frontend.review_penelitian.edit')"/>
                                    &nbsp;
                                    {{-- @if (!in_array($penelitian->name, config('central.system_roles')))
                                        <x-btn-delete message="Anda yakin menghapus role ini?"
                                                        :url="route('#')"/>
                                    @endif --}}
                                </div>
                            </td>
                        @endcan
                    </tr>
                </x-table-body>
            </x-table>
        </x-card-body>
    </x-card>
</div>
