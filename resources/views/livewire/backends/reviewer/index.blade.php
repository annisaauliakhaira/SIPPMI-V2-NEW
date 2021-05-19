<div>
    <x-card>
        <x-card-body>
            <x-card-header>
                <div>
                    <h4 class="card-title mb-0">Reviewer</h4>
                </div>
                <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                    <div class="btn-group">
                        <a class="btn btn-sm btn-primary" href="" >
                            <x-bi-person-plus class="c-icon" /> Tambah Reviewer
                        </a>
                    </div>
                </div>
            </x-card-header>

            <x-table>
                <x-table-head>
                    <tr>
                        <th class="text-center">NO</th>
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
                    <tr>
                        <td class="text-center">{{ '#' }}</td>
                        <td class="text-center">{{ '#' }}</td>
                        <td class="text-center">{{ '#' }}</td>
                        <td class="text-center">{{ '#' }}</td>
                        <td class="text-center">{{ '#' }}</td>
                        <td class="text-center">{{ '#' }}</td>
                        @can('penelitian_manage')
                            <td class="text-center">
                                <div class="btn-group">
                                </div>
                            </td>
                        @endcan
                    </tr>
                </x-table-body>
            </x-table>
        </x-card-body>
    </x-card>
</div>
