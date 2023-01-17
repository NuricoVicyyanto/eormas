@extends('template.homepage')
@section('content')
    <div class="container">
        <div class="row i-am-centered">
            <div class="col-sm-5 card mx-4 my-4">
                <canvas id="myCharta" style="width:100%;max-width:600px"></canvas>

                <script>
                    var xValues = ["Binakal", "Bondowoso", "Botolinggo", "Cermee", "Curhdami", "Grujugan", "Jambesari DS", "Klabang",
                        "Maesan", "Pakem", "Prajekan", "Pujer", "Ijen", "Sukosari", "Sumberwringin", "Taman Krocok", "Tamanan",
                        "tapen", "Tegalampel", "Tengarang", "Tlogosari", "Wringin", "Wonosari"
                    ];
                    var yValues = [
                        {{ $binakal_count }},
                        {{ $bondowoso_count }},
                        {{ $botolinggo_count }},
                        {{ $cermee_count }},
                        {{ $curahdami_count }},
                        {{ $grujugan_count }},
                        {{ $jambesari_count }},
                        {{ $klabang_count }},
                        {{ $maesan_count }},
                        {{ $pakem_count }},
                        {{ $prajekan_count }},
                        {{ $pujer_count }},
                        {{ $ijen_count }},
                        {{ $sukosari_count }},
                        {{ $sumberwringin_count }},
                        {{ $tamankrocok_count }},
                        {{ $tamanan_count }},
                        {{ $tapen_count }},
                        {{ $tegalampel_count }},
                        {{ $tenggarang_count }},
                        {{ $tlogosari_count }},
                        {{ $wringin_count }},
                        {{ $wonosari_count }},
                    ];
                    var barColors = ["red", "green", "blue", "orange", "brown", "red", "green", "blue", "orange", "brown", "red",
                        "green", "blue", "orange", "brown", "red", "green", "blue", "orange", "brown", "red", "green"
                    ];

                    new Chart("myCharta", {
                        type: "bar",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: "Jumlah Ormas Per-Kecamatan Kab. Bondowoso"
                            }
                        }
                    });
                </script>
            </div>
            <div class="col-sm-5 card mx-4 my-4">
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                <script>
                    var xValues = ["Binakal", "Bondowoso", "Botolinggo", "Cermee", "Curhdami", "Grujugan", "Jambesari DS", "Klabang",
                        "Maesan", "Pakem", "Prajekan", "Pujer", "Ijen", "Sukosari", "Sumberwringin", "Taman Krocok", "Tamanan",
                        "tapen", "Tegalampel", "Tengarang", "Tlogosari", "Wringin", "Wonosari"
                    ];
                    var yValues = [
                        {{ $binakal_count }},
                        {{ $bondowoso_count }},
                        {{ $botolinggo_count }},
                        {{ $cermee_count }},
                        {{ $curahdami_count }},
                        {{ $grujugan_count }},
                        {{ $jambesari_count }},
                        {{ $klabang_count }},
                        {{ $maesan_count }},
                        {{ $pakem_count }},
                        {{ $prajekan_count }},
                        {{ $pujer_count }},
                        {{ $ijen_count }},
                        {{ $sukosari_count }},
                        {{ $sumberwringin_count }},
                        {{ $tamankrocok_count }},
                        {{ $tamanan_count }},
                        {{ $tapen_count }},
                        {{ $tegalampel_count }},
                        {{ $tenggarang_count }},
                        {{ $tlogosari_count }},
                        {{ $wringin_count }},
                        {{ $wonosari_count }},
                    ];
                    var barColors = ["red", "green", "blue", "orange", "brown", "red", "green", "blue", "orange", "brown", "red",
                        "green", "blue", "orange", "brown", "red", "green", "blue", "orange", "brown", "red", "green"
                    ];

                    new Chart("myChart", {
                        type: "bar",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: "Jumlah Ormas Per-Bidang Kegiatan Kab. Bondowoso"
                            }
                        }
                    });
                </script>
            </div>
            <div class="col-sm-5 card mx-3 my-3">
                <canvas id="myCharto" style="width:100%;max-width:600px"></canvas>

                <script>
                    var xValues = ["Bondowoso"];
                    var yValues = [
                        {{ $kabupaten_count }},
                    ];
                    var barColors = ["green", "blue", "orange"];

                    new Chart("myCharto", {
                        type: "bar",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: "Jumlah Ormas Kab. Bondowoso"
                            }
                        }
                    });
                </script>
            </div>
            <div class="col-sm-6">
               
            </div>
        </div>
    </div>
@endsection
