@extends('template.homepage')
@section('content')
    <div class="container mt-4">
        <div class="card shadow-sm mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-dark">Data Ormas Aktif Kabupaten Bondowoso</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Organisasi</th>
                                <th>Jenis Organisasi</th>
                                <th>Bidang Kegiatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dtOrmas as $item)
                                @if ($item->status == 'Approve')
                                    <tr>
                                        <td>{{ $item->nama_organisasi }}</td>
                                        <td>{{ $item->jenis_organisasi }}</td>
                                        <td>{{ $item->bidang_kegiatan }}</td>
                                    </tr>
                                @else
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card shadow-sm mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">Data Jumlah Ormas Per-Kecamatan</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Kecamatan</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Binakal</td>
                                        <td>{{ $binakal_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Bondowoso</td>
                                        <td>{{ $bondowoso_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Botolinggo</td>
                                        <td>{{ $botolinggo_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Cermee</td>
                                        <td>{{ $cermee_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Curahdami</td>
                                        <td>{{ $curahdami_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Grujugan</td>
                                        <td>{{ $grujugan_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jambesari DS</td>
                                        <td>{{ $jambesari_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Klabang</td>
                                        <td>{{ $klabang_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Maesan</td>
                                        <td>{{ $maesan_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pakem</td>
                                        <td>{{ $pakem_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Prajekan</td>
                                        <td>{{ $prajekan_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pujer</td>
                                        <td>{{ $pujer_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ijen</td>
                                        <td>{{ $ijen_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Sukosari</td>
                                        <td>{{ $sukosari_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Sumberwringin</td>
                                        <td>{{ $sumberwringin_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Taman Krocok</td>
                                        <td>{{ $tamankrocok_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tamanan</td>
                                        <td>{{ $tamanan_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tapen</td>
                                        <td>{{ $tapen_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tegalampel</td>
                                        <td>{{ $tegalampel_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tenggarang</td>
                                        <td>{{ $tenggarang_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tlogosari</td>
                                        <td>{{ $tlogosari_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Wringin</td>
                                        <td>{{ $wringin_count }}</td>
                                    </tr>
                                    <tr>
                                        <td>Wonosari</td>
                                        <td>{{ $wonosari_count }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card shadow-sm mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-dark">data Jumlah Ormas Kabupaten Bondowoso</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display table table-striped" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Kabupaten</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bondowoso</td>
                                        <td>{{ $kabupaten_count }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('table.display').DataTable();
        });
    </script>
@endsection
