<div>
    <x-card>

        <x-card-body>

            <div class="d-flex justify-content-between pb-4">
                <div>
                    <h4 class="card-title mb-0">Role User</h4>
                </div>
                <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                    <div class="btn-group">
                        <a class="btn btn-sm btn-secondary" href="{{ route('backend.roles.create') }}" >
                            <x-bi-person-plus class="c-icon" /> Tambah Role
                        </a>
                    </div>
                    <a href="{{ route('backend.permissions.index') }}" class="btn btn-sm btn-primary">
                        <x-bi-person-lines-fill class="c-icon" /> Permission
                    </a>
                </div>
            </div>

            <x-table>
                <x-table-head>
                    <tr>
                        <th class="text-center">ROLE</th>
                        <th class="text-center">PERMISSION</th>
                        @can('roles_manage')
                            <th class="text-center">AKSI</th>
                        @endcan
                    </tr>
                </x-table-head>

                <x-table-body>
                    @if (count($roles) > 0)
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <h5>
                                        @foreach ($role->permissions()->pluck('name') as $permission)
                                            <span
                                                class="badge badge-lg badge-primary">{{ $permission }}</span>
                                        @endforeach
                                    </h5>
                                </td>
                                @can('roles_manage')
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <x-btn-edit :url="route('backend.roles.edit',[$role])"/>
                                            &nbsp;
                                            @if (!in_array($role->name, config('central.system_roles')))
                                                {{-- <x-btn-delete message="Anda yakin menghapus role ini?"
                                                                :url="route('backend.roles.destroy', $role->id)"/> --}}
                                            @endif
                                        </div>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    @endif
                </x-table-body>
            </x-table>
        </x-card-body>

    </x-card>
</div>
