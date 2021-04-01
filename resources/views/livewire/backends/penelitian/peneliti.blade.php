<x-card>
    <x-card-body>
        @include('livewire.backends.penelitian._info')
        <div class="form-group row">
            <label for="file_proposal" class="col-sm-2 col-form-label">
                <strong>Peneliti</strong>
            </label>
            <div class="col-sm-10">

                <table class="table table-hover table-sm">
                    <thead>
                    <tr>
                        <th scope="col" class="text-center">Nama / NIP</th>
                        <th class="text-center">NIDN</th>
                        <th scope="col" class="text-center">Prodi</th>
                        <th scope="col" class="text-center">Jabatan</th>
                        <th scope="col" class="text-center">Hapus</th>
                    </tr>
                    </thead>
                    <tbody>
                    <form method="POST" action="#" enctype="multipart/form-data" class="form form-inline">
                        @csrf
                    <tr>
                        <td colspan="3">
                            <select
                                    class="custom-select select2 my-1 mr-sm-2"
                                    name="#" id="#">

                                    {{-- @foreach($dosens as $id => $dosen)
                                        <option
                                            value="#" ></option>
                                    @endforeach --}}

                                </select>
                            </td>
                            <td colspan="2">
                                <button class="btn btn-danger btn-block" type="submit">Tambah Anggota</button>
                            </td>
                        </tr>
                    </form>
                   
                        <tr>
                            <td>
                                {{-- {{ optional($anggota->dosen)->nama }} <br>
                                <small><em>{{ optional($anggota->dosen)->nip }}</em></small> --}}
                            </td>
                            <td>
                                {{-- {{ optional($anggota->dosen)->nidn }} --}}
                            </td>
                            <td>
                                {{-- {{ optional($anggota->dosen->prodi)->nama }} --}}
                            </td>
                            <td class="text-center">
                                {{-- @if(isset($anggota->jabatan))
                                    {{ \App\PenelitianAnggotum::JABATAN_SELECT[$anggota->jabatan] }}
                                @endif --}}
                            </td>
                            <td class="text-center">
                                {{-- @if($penelitian->owner != $anggota->dosen_id)
                                    {!! cui()->btn_delete(route('penelitian.anggota.destroy', [$penelitian->id, $anggota->id]), trans('global.areYouSure')) !!}
                                @endif --}}
                            </td>
                        </tr>
                
                    </tbody>
                </table>

            </div>
        </div>
    </x-card-body>
</x-card>