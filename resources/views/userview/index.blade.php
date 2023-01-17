<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #f1f1f1;
    }



    h1 {
        text-align: center;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    .tab {
        display: none;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #65a6d1;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card px-5 py-5 shadow p-3 mb-5 bg-white rounded" id="form1">
                    <form id="regForm" action="{{ url('update-profile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h1>Register:</h1>
                        <!-- One "tab" for each step in the form: -->
                        <div class="tab">Data Kelengkapan Ormas:
                            <p><input class="form-control" type="email" required placeholder="Email" oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->email ?? '' }}" name="email"></p>
                            <p><input class="form-control" placeholder="Nama Organisasi" oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->nama_organisasi ?? '' }}"
                                    name="nama_organisasi"></p>
                            <p><input class="form-control" placeholder="Jenis Organisasi" oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->jenis_organisasi ?? '' }}"
                                    name="jenis_organisasi"></p>
                            <p><input class="form-control" placeholder="Bidang Kegiatan" oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->bidang_kegiatan ?? '' }}"
                                    name="bidang_kegiatan"></p>
                        </div>
                        <div class="tab">Contact Info:
                            <p><input class="form-control" placeholder="Alamat" oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->alamat ?? '' }}" name="alamat"></p>
                                    <p><input class="form-control" placeholder="Bukti Alamat" oninput="this.className = ''"
                                        value="{{ Auth::user()->userDetail->bukti_alamat ?? '' }}" name="bukti_alamat"></p>
                            <p><input class="form-control" type="number" placeholder="Phone..." oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->no_hp ?? '' }}" name="no_hp"></p>
                        </div>
                        <div class="tab">Domisili:
                            <p><input class="form-control" placeholder="Kelurahan/Desa" oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->kelurahan ?? '' }}" name="kelurahan"></p>
                            <p><input class="form-control" placeholder="Kecamatam" oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->kecamatan ?? '' }}" name="kecamatan"></p>
                            <p><input class="form-control" placeholder="Kabupaten" oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->kabupaten ?? '' }}" name="kabupaten"></p>
                        </div>
                        <div class="tab">Validasi Kelengkapan Data:
                            <p><input class="form-control" placeholder="Nama Notaris" oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->nama_notaris ?? '' }}" name="nama_notaris"></p>
                            <p><input class="form-control" placeholder="No Notaris" oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->no_notaris ?? '' }}" name="no_notaris"></p>
                            <p><input class="form-control" type="text" placeholder="SK Terdaftar"
                                    oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->sk_terdaftar ?? '' }}" name="sk_terdaftar"></p>
                            <p><input class="form-control" type="text" placeholder="SK Pengurus"
                                    oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->sk_pengurus ?? '' }}" name="sk_pengurus"></p>
                        </div>
                        <div class="tab">Biodata Ketua:
                            <p><input class="form-control" placeholder="Nama Ketua" oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->nama_ketua ?? '' }}" name="nama_ketua"></p>
                            <p><input class="form-control" placeholder="Tempat/Tanggal lahir ketua"
                                    oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->ttl_ketua ?? '' }}" name="ttl_ketua"
                                    type="text"></p>
                            <p><input class="form-control" placeholder="Nomor Telp Ketua"
                                    oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->no_ketua ?? '' }}" name="no_ketua"></p>
                            <p><input class="form-control" type="text" placeholder="Bukti Identitas Ketua"
                                    oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->identitas_ketua ?? '' }}"
                                    name="identitas_ketua">
                            </p>
                        </div>
                        <div class="tab">Biodata Sekretaris:
                            <p><input class="form-control" placeholder="Nama Sekretaris"
                                    oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->nama_sekretaris ?? '' }}"
                                    name="nama_sekretaris"></p>
                            <p><input class="form-control" placeholder="Tempat/Tanggal lahir Sekretaris"
                                    oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->ttl_sekretaris ?? '' }}"
                                    name="ttl_sekretaris" type="password"></p>
                            <p><input class="form-control" placeholder="Nomor Telp Sekretaris"
                                    oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->no_sekretaris ?? '' }}" name="no_sekretaris">
                            </p>
                            <p><input class="form-control" type="text" placeholder="Bukti Identitas Sekretaris"
                                    oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->identitas_sekretaris ?? '' }}"
                                    name="identitas_sekretaris"></p>
                        </div>
                        <div class="tab">Biodata Bendahara:
                            <p><input class="form-control" placeholder="Nama Bendahara" oninput="this.className = ''"
                                value="{{ Auth::user()->userDetail->nama_bendahara ?? '' }}" name="nama_bendahara"></p>
                            <p><input class="form-control" placeholder="Tempat/Tanggal lahir Bendahara"
                                    oninput="this.className = ''"
                                    value="{{ Auth::user()->userDetail->ttl_bendahara ?? '' }}" name="ttl_bendahara"
                                    type="password"></p>
                            <p><input class="form-control" placeholder="Nomor Telp bendahara"
                                    oninput="this.className = ''" value="{{ Auth::user()->userDetail->no_bendahara ?? '' }}" name="no_bendahara"></p>
                            <p><input class="form-control" type="text" placeholder="Bukti Identitas Bendahara"
                                    oninput="this.className = ''" value="{{ Auth::user()->userDetail->identitas_bendahara ?? '' }}" name="identitas_bendahara"></p>
                        </div>
                        <div style="overflow:auto;">
                            <div style="float:right;">
                                <a class="btn btn-danger" href="{{ url('/logout') }}">Logout</a>
                                <button type="button" class="btn btn-secondary" id="prevBtn"
                                    onclick="nextPrev(-1)">Previous</button>
                                <button type="button" class="btn btn-primary" id="nextBtn"
                                    onclick="nextPrev(1)">Next</button>
                            </div>
                        </div>
                        
                        <!-- Circles which indicates the steps of the form: -->
                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
