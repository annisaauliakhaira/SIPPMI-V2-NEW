<div>
    <div class="row">
        <div class="col-lg-8">
            <x-card>
                <x-card-body>
                    <div class="d-flex justify-content-between pb-4">
                        <div>
                            <h4 class="card-title mb-0">Detail Skema Penelitian</h4>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Nama Skema</th>
                                <td>: {{ $data_skema_penelitian->nama }}</td>
                            </tr>
                            <tr>
                                <th>Fakultas</th>
                                <td>: {{ $data_skema_penelitian->fakultas->nama }}</td>
                            </tr>
                            <tr>
                                <th>Jangka Waktu</th>
                                <td>: {{ $data_skema_penelitian->jangka_waktu }}</td>
                            </tr>
                            <tr>
                                <th>Sumber dana</th>
                                <td>: {{ $data_skema_penelitian->sumber_dana }}</td>
                            </tr>
                            <tr>
                                <th>Biaya Minimal</th>
                                <td>: {{ $data_skema_penelitian->biaya_minimal }}</td>
                            </tr>
                            <tr>
                                <th>Biaya Maksimal</th>
                                <td>: {{ $data_skema_penelitian->biaya_maksimal }}</td>
                            </tr>
                            <tr>
                                <th>Anggota Minimal</th>
                                <td>: {{ $data_skema_penelitian->anggota_min }}</td>
                            </tr>
                            <tr>
                                <th>Anggota Maksimal</th>
                                <td>: {{ $data_skema_penelitian->anggota_max }}</td>
                            </tr>
                            <tr>
                                <th>Mahasiswa Minimal</th>
                                <td>: {{ $data_skema_penelitian->mahasiswa_min }}</td>
                            </tr>
                            <tr>
                                <th>Mahasiswa Maksimal</th>
                                <td>: {{ $data_skema_penelitian->mahasiswa_max }}</td>
                            </tr>
                            <tr>
                                <th>Jabatan Ketua Minimal</th>
                                <td>: {{ $data_skema_penelitian->jabatan_ketua_min }}</td>
                            </tr>
                            <tr>
                                <th>Jabatan Ketua Maksimal</th>
                                <td>: {{ $data_skema_penelitian->jabatan_ketua_max }}</td>
                            </tr>
                            <tr>
                                <th>Jabatan Anggota Minimal</th>
                                <td>: {{ $data_skema_penelitian->jabatan_anggota_min }}</td>
                            </tr>
                            <tr>
                                <th>Jabatan Anggota Maksimal</th>
                                <td>: {{ $data_skema_penelitian->jabatan_anggota_max }}</td>
                            </tr>
                        </tbody>
                    </table>
                </x-card-body>
            </x-card>
        </div>
        <div class="col-lg-4">
            <x-card>
                <x-card-body>
                    <div class="d-flex justify-content-between pb-4">
                        <div>
                            <h4 class="card-title mb-0">Periode</h4>
                        </div>
                    </div>
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th>Mulai registrasi </th>
                                <td>: {{ $data_skema_penelitian->skema_penelitian_periode->tanggal_mulai_registrasi }}</td>
                            </tr>
                            <tr>
                                <th>Akhir Registrasi</th>
                                <td>: {{ $data_skema_penelitian->skema_penelitian_periode->tanggal_akhir_registrasi }}</td>
                            </tr>
                            <tr>
                                <th>Mulai Penelitian</th>
                                <td>: {{ $data_skema_penelitian->skema_penelitian_periode->tanggal_mulai_penelitian }}</td>
                            </tr>
                            <tr>
                                <th>Akhir Penelitian</th>
                                <td>: {{ $data_skema_penelitian->skema_penelitian_periode->tanggal_akhir_penelitian }}</td>
                            </tr>
                        </tbody>
                    </table>
                </x-card-body>
            </x-card>
        </div>
    </div>
</div>
