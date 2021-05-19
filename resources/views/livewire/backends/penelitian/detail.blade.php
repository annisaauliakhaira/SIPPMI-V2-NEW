<div>
    <div class="form-group">

        <x-card>
            <x-card-body>
                <div class="d-flex justify-content-between pb-4">
                    <div>
                        <h4 class="card-title mb-0">Detail Informasi Dasar</h4>
                    </div>
                    <div class="col-14">
                        @include('livewire.backends.penelitian.tambah._status_update')
                    </div>
                </div>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Judul Penelitian</th>
                            <td>: {{ $penelitian->judul }}</td>
                        </tr>
                        <tr>
                            <th>Pengusul Penelitian</th>
                            <td>: {{ $penelitian->pengusul->nama }}</td>
                        </tr>
                        <tr>
                            <th>Program Studi</th>
                            <td>: {{ $penelitian->prodi->nama }}</td>
                        </tr>
                        <tr>
                            <th>Status Penelitian</th>
                            <td>: <span class="badge badge-{!! $penelitian->statusTextColor !!}">
                                {{ $penelitian->statusText}}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>Penelitian Multi Tahun</th>
                            <td>: @if ( $penelitian->multi_tahun == "1" )
                                    Ya
                                    @else
                                        Tidak
                                    @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Anggaran Biaya</th>
                            <td>:  Rp {{ number_format($penelitian->biaya, 0, ',', '.').',-' }}</td>
                        </tr>
                        <tr>
                            <th>File</th>
                            <td> <div class="row">
                                    <div class="col-sm-3">
                                        <a href="{{ $penelitian->file_proposal_url}}"><span class="fi-rr-download">&nbsp;{{ $penelitian->file_proposal }}</a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="{{ $penelitian->file_cv_url}}"><span class="fi-rr-download">&nbsp;{{ $penelitian->file_cv }}</a>
                                    </div>
                                    <div class="col-sm-3">
                                        <a href="{{ $penelitian->file_pengesahan_url}}"><span class="fi-rr-download">&nbsp;{{ $penelitian->file_pengesahan }}</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Penelitian Ketua</th>
                            <td>      
                                @foreach ($penelitian_dosen_ketua as $penelitianKetua)
                                    <div>
                                        : {{ $penelitianKetua->dosen->nama}}
                                    </div>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Penelitian Anggota Dosen</th>
                            <td> 
                                <div> 
                                    @foreach ($penelitian_dosen_anggota as $penelitianAnggotaDosen)
                                        <div class="row form-control"> 
                                            : {{ $penelitianAnggotaDosen->dosen->nama}}
                                        </div>
                                    @endforeach 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Penelitian Anggota Mahasiswa</th>
                            <td> 
                                <div> 
                                    @foreach ($penelitan_anggota_mahasiswas as $penelitianAnggotaMahasiswa)
                                        <div class="row form-control"> 
                                            : {{ $penelitianAnggotaMahasiswa->nama}}
                                        </div>
                                    @endforeach 
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>Ringkasan Penelitian</th>
                            <td>: {{ $penelitian->ringkasan }}</td>
                        </tr>
                    </tbody>
                </table>
            </x-card-body>
        </x-card>
    </div>
</div>
