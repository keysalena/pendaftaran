<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url() ?>style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="script.js" defer></script> -->
    <title>Registraion Form</title>
    <style>
        .input-error {
            border: 1px solid red;
        }

        .radio-container input[type="radio"] {
            display: none;
        }

        .radio-container label {
            display: inline-block;
            position: relative;
            padding-left: 30px;
            cursor: pointer;
        }

        .radio-container label:before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            border: 2px solid #ccc;
            border-radius: 50%;
            box-sizing: border-box;
        }

        .radio-error {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            border: 1px solid red;
            border-radius: 50%;
            box-sizing: border-box;
        }

        .radio-container input[type="radio"]:checked+label:before {
            background-color: #007bff;
            border-color: #007bff;
        }

        .required {
            display: inline;
            color: red;
            margin-left: 0px;
        }
    </style>
    <style>
        .form-step-finish .input-group2 {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .input-group2 {
            text-align: center;
            margin-bottom: 10px;
        }

        .fa-check-circle {
            font-size: 100px;
            color: green;
        }
    </style>
</head>

<body>
    <form action="<?php echo base_url() ?>sekolah/tambah" method="post" class="form">
        <h1 class="text-center">Form Pendaftaran</h1>
        <!-- Progress bar -->
        <div class="progressbar">
            <div class="progress" id="progress"></div>

            <div class="progress-step progress-step-active" data-title="Siswa"></div>
            <div class="progress-step" data-title="Orang Tua (Ayah)"></div>
            <div class="progress-step" data-title="Orang Tua (Ibu)"></div>
            <div class="progress-step" data-title="Jurusan"></div>
            <div class="progress-step" data-title="Selesai"></div>
        </div>

        <!-- Siswa -->
        <div class="form-step form-step-active">
            <input type="hidden" name="next_step" value="1">
            <div class="input-group">
                <label for="nisn">NISN <span class="required">*</span></label>
                <input type="text" name="nisn" id="nisn" required />
            </div>
            <div class="input-group">
                <label for="nama_siswa">Nama Siswa <span class="required">*</span></label>
                <input type="text" name="nama_siswa" id="nama_siswa" required />
            </div>
            <div class="input-group">
                <label for="tempat_lahir">Tempat Tanggal Lahir <span class="required">*</span></label>
                <div class="input-wrapper">
                    <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required />
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required />
                </div>
            </div>

            <div class="input-group">
                <label for="agama">Agama <span class="required">*</span></label>
                <select name="agama" id="agama" required>
                    <option disabled selected>-Pilih Agama-</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </div>

            <label for="jenis_kelamin">Jenis Kelamin <span class="required">*</span></label>
            <div class="input-group1">
                <div class="radio-container">
                    <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki" required>
                    <label for="laki_laki">Laki-laki</label>
                </div>
                <div class="radio-container">
                    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
                    <label for="perempuan">Perempuan</label>
                </div>
            </div>

            <div class="input-group">
                <label for="asal_sekolah">Asal Sekolah <span class="required">*</span></label>
                <input type="text" name="asal_sekolah" id="asal_sekolah" required />
            </div>

            <div class="input-group">
                <label for="no_hp_siswa">No Handphone <span class="required">*</span></label>
                <input type="text" name="no_hp_siswa" id="no_hp_siswa" required />
            </div>
            <div class="btns-group">
                <a href="#" class=""></a>
                <a href="#" class="btn btn-next">Lanjut</a>
            </div>
        </div>

        <!-- Ayah -->
        <div class="form-step">
            <div class="input-group">
                <label for="nama_ayah">Nama Ayah <span class="required">*</span></label>
                <input type="text" name="nama_ayah" id="nama_ayah" required />
            </div>
            <div class="input-group">
                <label for="alamat_ayah">Alamat Domisili <span class="required">*</span></label>
                <textarea name="alamat_ayah" id="alamat_ayah" required></textarea>
            </div>
            <div class="input-group">
                <label for="no_hp_ayah">No Handphone <span class="required">*</span></label>
                <input type="text" name="no_hp_ayah" id="no_hp_ayah" required />
            </div>
            <div class="input-group">
                <label for="pekerjaanayah">Pekerjaan</label>
                <select name="pekerjaanayah" id="pekerjaanayah" required onchange="showHideForm1()">
                    <option disabled selected>-Pilih Pekerjaan-</option>
                    <option value="PNS">PNS</option>
                    <option value="Polri / TNI">Polri / TNI</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Buruh">Buruh</option>
                    <option value="Petani">Petani</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <div class="input-group" id="form-pekerjaanayah-lainnya" style="display: none;">
                <label for="pekerjaanayah_lainnya">Pekerjaan Lainnya <span class="required">*</span></label>
                <input type="text" name="pekerjaanayah_lainnya" id="pekerjaanayah_lainnya">
            </div>

            <div class="btns-group">
                <a href="#" class="btn btn-prev">Kembali</a>
                <input type="submit" value="Lanjut" class="btn btn-next" />
            </div>
        </div>

        <!-- Ibu -->
        <div class="form-step">
            <div class="input-group">
                <label for="nama_ibu">Nama Ibu <span class="required">*</span></label>
                <input type="text" name="nama_ibu" id="nama_ibu" />
            </div>
            <div class="input-group">
                <label for="alamat_ibu">Alamat Domisili <span class="required">*</span></label>
                <textarea name="alamat_ibu" id="alamat_ibu"></textarea>
            </div>
            <div class="input-group">
                <label for="no_hp_ibu">No Handphone <span class="required">*</span></label>
                <input type="text" name="no_hp_ibu" id="no_hp_ibu" />
            </div>
            <div class="input-group">
                <label for="pekerjaanibu">Pekerjaan <span class="required">*</span></label>
                <select name="pekerjaanibu" id="pekerjaanibu" required onchange="showHideForm2()">
                    <option disabled selected>-Pilih Pekerjaan-</option>
                    <option value="PNS">PNS</option>
                    <option value="Polri / TNI">Polri / TNI</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Buruh">Buruh</option>
                    <option value="Petani">Petani</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>

            <div class="input-group" id="form-pekerjaanibu-lainnya" style="display: none;">
                <label for="pekerjaanibu_lainnya">Pekerjaan Lainnya <span class="required">*</span></label>
                <input type="text" name="pekerjaanibu_lainnya" id="pekerjaanibu_lainnya">
            </div>

            <div class="btns-group">
                <a href="#" class="btn btn-prev">Kembali</a>
                <input type="submit" value="Lanjut" class="btn btn-next" />
            </div>
        </div>

        <!-- Jurusan -->
        <div class="form-step">
            <div class="input-group">
                <label for="jurusan1">Pilihan Pertama <span class="required">*</span></label>
                <select name="jurusan1" id="jurusan1" required onchange="updateJurusanOptions(this, 'jurusan2', 'jurusan3')">
                    <option disabled selected>-Pilih Jurusan-</option>
                    <option value="Kriya Kayu">Kriya Kayu</option>
                    <option value="Kriya Keramik">Kriya Keramik</option>
                    <option value="Kriya Tekstil">Kriya Tekstil</option>
                    <option value="Tata Busana">Tata Busana</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                    <option value="Animasi">Animasi</option>
                    <option value="Multimedia">Multimedia</option>
                </select>
            </div>
            <div class="input-group">
                <label for="jurusan2">Pilihan Kedua <span class="required">*</span></label>
                <select name="jurusan2" id="jurusan2" required onchange="updateJurusanOptions(this, 'jurusan3', 'jurusan1')">
                    <option disabled selected>-Pilih Jurusan-</option>
                </select>
            </div>
            <div class="input-group">
                <label for="jurusan3">Pilihan Ketiga <span class="required">*</span></label>
                <select name="jurusan3" id="jurusan3" required>
                    <option disabled selected>-Pilih Jurusan-</option>
                </select>
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Kembali</a>
                <input type="submit" value="Lanjut" class="btn" />
            </div>
        </div>

        <!-- Selesai -->
        <div class="form-step form-step-finish">
            <div class="input-group2">
                <h1>Sudah yakin dengan jawaban Anda?</h1>
            </div>
            <div class="btns-group">
                <a href="#" class="btn btn-prev">Kembali</a>
                <input type="submit" value="Kirim" class="btn" />
            </div>
        </div>
    </form>
    <script>
        function updateJurusanOptions(selectElement, nextDropdownId, lastDropdownId) {
            const selectedJurusan = selectElement.value;
            const nextDropdown = document.getElementById(nextDropdownId);
            const lastDropdown = document.getElementById(lastDropdownId);

            nextDropdown.innerHTML = '<option disabled selected>-Pilih Jurusan-</option>';

            const options = [
                "Kriya Kayu", "Kriya Keramik", "Kriya Tekstil", "Tata Busana",
                "Rekayasa Perangkat Lunak", "Teknik Komputer dan Jaringan",
                "Animasi", "Multimedia"
            ];

            options.forEach(option => {
                if (option !== selectedJurusan && option !== lastDropdown.value) {
                    nextDropdown.innerHTML += `<option value="${option}">${option}</option>`;
                }
            });
        }

        updateJurusanOptions(document.getElementById('jurusan1'), 'jurusan2', 'jurusan3');
    </script>

    <script>
        function showHideForm1() {
            var selectedValue = document.getElementById("pekerjaanayah").value;

            var formPekerjaanLainnya = document.getElementById("form-pekerjaanayah-lainnya");

            if (selectedValue === "Lainnya") {
                formPekerjaanLainnya.style.display = "block";
                inputPekerjaanLainnya.required = true;
            } else {
                formPekerjaanLainnya.style.display = "none";
                inputPekerjaanLainnya.required = false;
            }
        }

        function showHideForm2() {
            var selectedValue = document.getElementById("pekerjaanibu").value;

            var formPekerjaanLainnya = document.getElementById("form-pekerjaanibu-lainnya");
            var inputPekerjaanLainnya = document.getElementById("pekerjaanibu_lainnya");

            if (selectedValue === "Lainnya") {
                formPekerjaanLainnya.style.display = "block";
                inputPekerjaanLainnya.required = true;
            } else {
                formPekerjaanLainnya.style.display = "none";
                inputPekerjaanLainnya.required = false;
            }
        }
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const btnNext = document.querySelector('.btn-next');
            const btnPrev = document.querySelectorAll('.btn-prev');
            const progress = document.getElementById("progress");
            const formSteps = document.querySelectorAll(".form-step");
            const progressSteps = document.querySelectorAll(".progress-step");

            let formStepsNum = 0;

            btnNext.addEventListener("click", (e) => {
                const formStep = formSteps[formStepsNum];
                const requiredInputs = formStep.querySelectorAll('input[required], select[required], input[type="radio"][required]');
                let isValid = true;

                requiredInputs.forEach(function(input) {
                    if (input.type === 'radio') {
                        const radioGroup = formStep.querySelectorAll(`input[name="${input.name}"]:checked`);
                        if (radioGroup.length === 0) {
                            isValid = false;
                        }
                    } else if (!input.value.trim()) {
                        isValid = false;
                    } else {
                        input.classList.remove('input-error');
                    }
                });

                if (formStepsNum === 0) {
                    const namaInput = document.getElementById('nama_siswa');
                    const agamaInput = document.getElementById('agama');
                    const nisnInput = document.getElementById('nisn');
                    const laki = document.getElementById('laki_laki');
                    const perempuan = document.getElementById('perempuan');
                    const asalInput = document.getElementById('asal_sekolah');
                    const nosInput = document.getElementById('no_hp_siswa');
                    const tempatInput = document.getElementById('tempat_lahir');
                    const tanggalInput = document.getElementById('tanggal_lahir');
                    if (namaInput.value.trim() === '') {
                        isValid = false;
                        namaInput.classList.add('input-error');
                    } else {
                        namaInput.classList.remove('input-error');
                    }
                    if (agamaInput.selectedIndex === 0) {
                        isValid = false;
                        agamaInput.classList.add('input-error');
                    } else {
                        agamaInput.classList.remove('input-error');
                    }
                    if (nisnInput.value.trim() === '') {
                        isValid = false;
                        nisnInput.classList.add('input-error');
                    } else {
                        nisnInput.classList.remove('input-error');
                    }
                    if (asalInput.value.trim() === '') {
                        isValid = false;
                        asalInput.classList.add('input-error');
                    } else {
                        asalInput.classList.remove('input-error');
                    }
                    if (nosInput.value.trim() === '') {
                        isValid = false;
                        nosInput.classList.add('input-error');
                    } else {
                        nosInput.classList.remove('input-error');
                    }
                    if (tempatInput.value.trim() === '') {
                        isValid = false;
                        tempatInput.classList.add('input-error');
                    } else {
                        tempatInput.classList.remove('input-error');
                    }
                    if (tanggalInput.value.trim() === '') {
                        isValid = false;
                        tanggalInput.classList.add('input-error');
                    } else {
                        tanggalInput.classList.remove('input-error');
                    }

                    if (isValid) {
                        formStepsNum++;
                        updateFormSteps();
                        updateProgressbar();
                    }
                };
            });
            const formStep2 = formSteps[1];
            const submitButton = formStep2.querySelector('input[type="submit"]', 'select[required]');
            submitButton.addEventListener('click', (e) => {
                e.preventDefault();

                const namaInput = document.getElementById('nama_ayah');
                const alamatInput = document.getElementById('alamat_ayah');
                const noHandphoneInput = document.getElementById('no_hp_ayah');
                const pekerjaanInput = document.getElementById('pekerjaanayah');
                const pekerjaanLainnyaInput = document.getElementById('pekerjaanayah_lainnya');
                let isValid = true;

                if (namaInput.value.trim() === '') {
                    namaInput.classList.add('input-error');
                    isValid = false;
                } else {
                    namaInput.classList.remove('input-error');
                }

                if (alamatInput.value.trim() === '') {
                    alamatInput.classList.add('input-error');
                    isValid = false;
                } else {
                    alamatInput.classList.remove('input-error');
                }

                if (noHandphoneInput.value.trim() === '') {
                    noHandphoneInput.classList.add('input-error');
                    isValid = false;
                } else {
                    noHandphoneInput.classList.remove('input-error');
                }

                if (pekerjaanInput.value === 'Lainnya') {
                    if (pekerjaanLainnyaInput.value.trim() === '') {
                        pekerjaanLainnyaInput.classList.add('input-error');
                        isValid = false;
                    } else {
                        pekerjaanLainnyaInput.classList.remove('input-error');
                    }
                }

                if (pekerjaanInput.selectedIndex === 0) {
                    pekerjaanInput.classList.add('input-error');
                    isValid = false;
                } else {
                    pekerjaanInput.classList.remove('input-error');
                }

                if (isValid) {
                    formStepsNum++;
                    updateFormSteps();
                    updateProgressbar();
                }
            });

            const formStep3 = formSteps[2];
            const submitBtn = formStep3.querySelector('input[type="submit"]', 'select[required]');
            submitBtn.addEventListener('click', (e) => {
                e.preventDefault();

                const namaInput = document.getElementById('nama_ibu');
                const alamatInput = document.getElementById('alamat_ibu');
                const noHandphoneInput = document.getElementById('no_hp_ibu');
                const pekerjaanInput = document.getElementById('pekerjaanibu');
                const pekerjaanLainnyaInput = document.getElementById('pekerjaanibu_lainnya');
                let isValid = true;

                if (namaInput.value.trim() === '') {
                    namaInput.classList.add('input-error');
                    isValid = false;
                } else {
                    namaInput.classList.remove('input-error');
                }

                if (alamatInput.value.trim() === '') {
                    alamatInput.classList.add('input-error');
                    isValid = false;
                } else {
                    alamatInput.classList.remove('input-error');
                }

                if (noHandphoneInput.value.trim() === '') {
                    noHandphoneInput.classList.add('input-error');
                    isValid = false;
                } else {
                    noHandphoneInput.classList.remove('input-error');
                }

                if (pekerjaanInput.value === 'Lainnya') {
                    if (pekerjaanLainnyaInput.value.trim() === '') {
                        pekerjaanLainnyaInput.classList.add('input-error');
                        isValid = false;
                    } else {
                        pekerjaanLainnyaInput.classList.remove('input-error');
                    }
                }

                if (pekerjaanInput.selectedIndex === 0) {
                    pekerjaanInput.classList.add('input-error');
                    isValid = false;
                } else {
                    pekerjaanInput.classList.remove('input-error');
                }

                if (isValid) {
                    formStepsNum++;
                    updateFormSteps();
                    updateProgressbar();
                }
            });

            function submitForm(form, url) {
                e.preventDefault();

                const formData = new FormData(form);

                fetch(url, {
                        method: 'POST',
                        body: formData,
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Success:', data);

                        formStepsNum++;
                        updateFormSteps();
                        updateProgressbar();
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            }
            const formStep4 = formSteps[3];
            const finishBtn = formStep4.querySelector('input[type="submit"]', 'select[required]');
            finishBtn.addEventListener('click', (e) => {
                e.preventDefault();

                const jurusan1 = document.getElementById('jurusan1');
                const jurusan2 = document.getElementById('jurusan2');
                const jurusan3 = document.getElementById('jurusan3');
                let isValid = true;

                if (jurusan1.selectedIndex === 0) {
                    jurusan1.classList.add('input-error');
                    isValid = false;
                } else {
                    jurusan1.classList.remove('input-error');
                }

                if (jurusan2.selectedIndex === 0) {
                    jurusan2.classList.add('input-error');
                    isValid = false;
                } else {
                    jurusan2.classList.remove('input-error');
                }

                if (jurusan3.selectedIndex === 0) {
                    jurusan3.classList.add('input-error');
                    isValid = false;
                } else {
                    jurusan3.classList.remove('input-error');
                }

                if (isValid) {
                    formStepsNum++;
                    updateFormSteps();
                    updateProgressbar();
                }
            });

            btnPrev.forEach((btn) => {
                btn.addEventListener("click", () => {
                    formStepsNum--;
                    updateFormSteps();
                    updateProgressbar();
                });
            });

            function updateFormSteps() {
                formSteps.forEach((formStep) => {
                    formStep.classList.contains("form-step-active") &&
                        formStep.classList.remove("form-step-active");
                });

                formSteps[formStepsNum].classList.add("form-step-active");

                if (formStepsNum < formSteps.length - 1) {
                    document.querySelector(".form-step-finish").style.display = "none";
                } else {
                    document.querySelector(".form-step-finish").style.display = "block";
                }
            }

            function updateProgressbar() {
                progressSteps.forEach((progressStep, idx) => {
                    if (idx < formStepsNum + 1) {
                        progressStep.classList.add("progress-step-active");
                    } else {
                        progressStep.classList.remove("progress-step-active");
                    }
                });

                const progressActive = document.querySelectorAll(".progress-step-active");

                progress.style.width =
                    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
            }
        });
    </script>
</body>

</html>