<div class="form-group">

    <x-card>
        <x-card-body>
            <div class="d-flex justify-content-between pb-4">
                <div>
                    <h4 class="card-title mb-0">Ringkasan Informasi Dasar</h4>
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
                        <th>Status Penelitian</th>
                        <td>: @if ($penelitian->status_usulan == 0)
                                Belum Disetujui
                            @else
                                Telah Disetujui
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
                                    <a href="{{ $penelitian->file_proposal_url}}"><span class="fi-rr-download">&nbsp;</span>{{ $penelitian->file_proposal }}</a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="{{ $penelitian->file_cv_url}}"><span class="fi-rr-download">&nbsp;</span>{{ $penelitian->file_cv }}</a>
                                </div>
                                <div class="col-sm-3">
                                    <a href="{{ $penelitian->file_pengesahan_url}}"><span class="fi-rr-download">&nbsp;</span>{{ $penelitian->file_pengesahan }}</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </x-card-body>
    </x-card>
</div>