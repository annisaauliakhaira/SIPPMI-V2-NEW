<div>
<x-card>
 <x-card-body>
    <x-card-header>
        <h4>Penilaian</h4>
    </x-card-header>
    
        <!-- Static Field for Judul -->
    
        <div class="form-group row">
            <div class='col-md-3 col-form-label'>Judul</div>
            <div class="col-md-5">
                <input class="form-control" value="aaaa" disabled>
            </div>
        </div>

        <!-- Static Field for Skim -->
        <div class='form-group row'>
            <div class='col-md-3 col-form-label'>Skim</div>
            <div class="col-md-5">
                <input class="form-control" value="skim test" disabled>
            </div>
        </div>

        <!-- Static Field for Program Studi -->
        <div class='form-group row'>
            <div class='col-md-3 col-form-label'>Prodi/Fakultas</div>
            <div class="col-md-5">
                <input class="form-control" value="Sistem Informasi/FTI" disabled>
            </div>
        </div>

        <!-- Static Field for Ketua Peneliti -->
        <div class='form-group row'>
            <div class='col-md-3 col-form-label'>Ketua Peneliti</div>
            <div class="col-md-5">
                <input class="form-control" value="Nama 1" disabled>
            </div>
        </div>


        <!-- Static Field for Anggota Peneliti -->
        <div class='form-group row'>
            <div class='col-md-3 col-form-label'>Anggota (Dosen)</div>
            <div class="col-md-5">
                <div><input class="form-control" value="Nama 2" disabled>  </div><br>
                <div><input class="form-control" value="Nama 3" disabled>  </div><br>
                <div><input class="form-control" value="Nama 4" disabled>  </div>   
            </div>
        </div>

        <div class='form-group row'>
            <div class='col-md-3 col-form-label'>Anggota (Mahasiswa)</div>
            <div class="col-md-5">
                <div><input class="form-control" value="Nama 2" disabled>  </div><br>
                <div><input class="form-control" value="Nama 3" disabled>  </div><br> 
            </div>
        </div>


        <div class="form-group row">
            <div class="col-sm-3">
                <strong>File</strong>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="#" target="_blank">
                        <i class="fi-rr-download"></i>
                            Proposal
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" target="_blank">
                        <i class="fi-rr-download"></i>
                            CV
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <a href="#" target="_blank">
                        <i class="fi-rr-download"></i>  
                            Lembaran Pengesahan
                        </a>
                    </div>
                </div>
            </div>
    </x-card-body>

            <!-- Static Field for Kriteria -->
            
            <x-table>
                <x-table-head>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Kriteria</th>
                        <th class="text-center">Bobot (%)</th>
                        <th class="text-center">Skor</th>
                    </tr>
                </x-table-head>

                <x-table-body>
                @php $no = 1; @endphp
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">{{ '#' }}</td>
                        <td class="text-center">{{ '#' }}</td>
                        <td class="text-center">{{ '#' }}</td>
                    </tr>
                </x-table-body>
            </x-table>            
          
            <!-- Static Field for  -->
            <div class='form-group row'>
                <div class='col-md-3 col-form-label'>Biaya Diusulkan</div>
                <div class="col-md-5">
                    <div><input class="form-control" value="Rp200000" disabled>  </div>
                </div>
            </div>

            <!-- Text Field Input for Direkomendasikan -->
            <div class='form-group row'>
                <label class="col-md-3 col-form-label" for="biaya">Rekomendasi Biaya Penelitian</label>
                <div class="col-md-5">
                    <div><input class="form-control" value="Rp44443" disabled>  </div>
                </div>
            </div>


            <!-- Text Field Input for Komentar -->
            <div class='form-group row'>
                <label class="col-md-3 col-form-label" for="komentar">Komentar</label>
                <div class="col-md-5">
                    <div><input class="form-control" value="Nocoment" disabled>  </div>
                </div>
            </div>

        </div>

        <div class="card-footer">
            <input type="submit" value="Submit" class="btn btn-primary"/>
        </div>

</x-card>
</div>
