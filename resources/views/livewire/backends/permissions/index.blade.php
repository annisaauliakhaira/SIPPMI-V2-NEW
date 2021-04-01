
<div>
    <x-card>

        <x-card-body>
            <div class="d-flex justify-content-between pb-4">
                <div>
                    <h4 class="card-title mb-0">List Permissions</h4>
                </div>
                <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                    <div class="btn-group">
                        <a class="btn btn-sm btn-primary" href="{{ route('backend.permissions.create') }}" >
                            <x-bi-person-plus class="cil-library-add" /> Tambah
                        </a>
                    </div>
                    <a href="{{ route('backend.roles.index') }}" class="btn btn-sm btn-secondary">
                        <x-bi-person-lines-fill class="cil-user-follow" /> Role
                    </a>
                </div>
            </div>


            <x-table>
                <x-table-head>
                    <tr>
                        <th>Permissions</th>
                        @can('roles_manage')
                            <th class="text-center">Aksi</th>
                        @endcan
                    </tr>
                </x-table-head>

                <x-table-body>
                    @if (count($permissions) > 0)
                        @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td>
                                @can('roles_manage')
                                    <td class="text-center">
                                        {!! cui()->btn_edit(route('backend.permissions.edit', [$permission->id])) !!}
                                        {{-- {!! cui()->btn_delete(route('backend.permissions.destroy', $permission->id), 'Anda yakin menghapus permission ini') !!} --}}
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">No Permission Available</td>
                        </tr>
                    @endif
                </x-table-body>
            </x-table>

        </x-card-body>

    </x-card>
{{-- 
@endsection --}}
</div>
