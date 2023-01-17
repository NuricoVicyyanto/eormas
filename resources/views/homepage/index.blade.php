@extends('template.homepage')
@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-sm-8 mt-3 ">
                <div class="accordion " id="accordionPanelsStayOpenExample">
                    <div class="accordion-item shadow-sm">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                Informasi
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <p>Badan Kesatuan Bangsa dan Politik mempunyai fungsi :
                                <p>1. Perumusan kebijakan teknis di bidang kesatuan bangsa dan politik di wilayah kabupaten
                                    sesuai dengan ketentuan peraturan perundang-undangan</p>
                                <p>2. Pelaksanaan kebijakan di bidang pembinaan ideologi Pancasila dan wawasan kebangsaan,
                                    penyelenggaraan politik dalam negeri dan kehidupan demokrasi, pemeliharaan ketahan
                                    ekonomi, sosial dan budaya, pembinaan kerukunan antar suku, umat beragama, ras, dan
                                    golongan lainnya, pembinaan dan pemberdayaan organisasi kemasyarakatan, serta
                                    pelaksanaan kewaspadaan nasional dan penanganan konflik sosial di wilayah kabupaten
                                    sesuai dengan ketentuan peraturan perundang-undangan</p>
                                <p>3. Pelaksanaan koordinasi di bidang pembinaan ideologi Pancasila dan wawasan kebangsaan,
                                    penyelenggaraan politik dalam negeri dan kehidupan demokrasi, pemeliharaan ketahanan
                                    ekonomi, sosial dan budaya, pembinaan kerukunan antar suku, umat beragama, ras, dan
                                    golongan lainnya, fasilitasi organisasi kemasyarakatan, serta pelaksanaan kewaspadaan
                                    nasional dan penanganan konflik sosial di wilayah kabupaten sesuai dengan ketentuan
                                    peraturan perundang-undangan</p>
                                <p>4. Pelaksanaan evaluasi dan pelaporan di bidang pembinaan ideologi Pancasila dan wawasan
                                    kebangsaan, penyelenggaraan politik dalam negeri dan kehidupan demokrasi, pemeliharaan
                                    ketahan ekonomi, sosial dan budaya, pembinaan kerukunan antar suku, umat beragama, ras,
                                    dan golongan lainnya, pembinaan dan pemberdayaan organisasi kemasyarakatan, serta
                                    pelaksanaan kewaspadaan nasional dan penanganan konflik sosial di wilayah kabupaten
                                    sesuai dengan ketentuan peraturan perundang-undangan</p>
                                <p>5. Pelaksanaan fasilitasi forum koordinasi pimpinan daerah</p>
                                <p>6. Pelaksanaan administrasi kesekretariatan badan kesatuan bangsa dan politik kabupaten
                                </p>
                                <p>7. Pelaksanaan tugas lain yang diberikan oleh bupati sesuai dengan tugas dan fungsinya
                                </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-3">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item shadow-sm">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                Pengumuman
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <!-- Section: Timeline -->
                                <section class="py-5">
                                    <ul class="timeline">
                                        @foreach ($dtInfo as $item)
                                            <li class="timeline-item mb-0">
                                                <p class="fw-bold mb-0">{{ $item->judul }}</p>
                                                <p class="text-muted mb-0">
                                                    {{ $item->konten }}
                                                </p>
                                                <p class="text-muted mb-3 fw-bold"><a href="{{ $item->data }}">unduh</a>
                                                </p>
                                            </li>
                                        @endforeach
                                    </ul>
                                </section>
                                <!-- Section: Timeline -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 mt-3 ">
                <div class="accordion " id="accordionPanelsStayOpenExample">
                    <div class="accordion-item shadow-sm">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                Eormas
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                Organisasi Kemasyarakatan adalah organisasi yang didirikan dan dibentuk oleh masyarakat
                                secara sukarela berdasarkan kesamaan aspirasi, kehendak, kebutuhan, kepentingan, kegiatan,
                                dan tujuan untuk berpartisipasi dalam pembangunan demi tercapainya tujuan Negara Kesatuan
                                Republik Indonesia yang berdasarkan Pancasila.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-3">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item shadow-sm">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                VISI DAN MISI
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show"
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <!-- Section: Timeline -->
                                <p>
                                    Terwujudnya penyelenggaraan pemerintahan yang baik, transparan, efektif dan efisien,
                                    akuntabel serta meningkatkan pengelolaan dan pelayanan informasi dan dokumentasi di
                                    Badan Kesatuan Bangsa dan Politik Provinsi Jawa Timur untuk menghasilkan layanan
                                    informasi dan dokumentasi yang berkualitas.

                                    Misi
                                    a) Menghimpun informasi publik di Iingkungan Bakesbangpol Provinsi Jawa Timur;

                                    b) Menata dan menyimpan informasi publik di Bakesbangpol Provinsi Jawa Timur;

                                    c) Melaksanakan konsultasi informasi publik kategori dikecualikan dari informasi yang
                                    terbuka untuk publik;

                                    d) Menyelesaikan sengketa informasi.
                                </p>
                                <!-- Section: Timeline -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <a href="{{ url('dashboard') }}">Dashboard</a>
    <a href="{{ url('login') }}">login</a>
    <a class="nav-link" href="{{ url('register') }}">
        <i class="fas fa-fw fa-plus"></i>
        <span>Pendaftaran Akun Ormas</span></a> --}}
@endsection
