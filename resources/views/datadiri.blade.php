</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Klinik Pratama</title>
    <link rel="stylesheet" href="{{ asset('lg/datadiri/datadiri.css') }}">
</head>

<body>
    <main>
        <div class="box">
            <div class="carousel"></div>
            <div class="inner-box">
                <div class="forms-wrap">
                    <div class="logo">
                        <img src="{{ asset('lg/img/Logo medybudy.png') }}">
                    </div>
                    <form class="sign-up-form" onsubmit="redirectToLogin(event)">
                        <div class="heading">
                            <h2>Daftar</h2>
                            <p>Lengkapi identitas diri anda</p>
                        </div>

                        <div class="actual-form">
                            <div class="form-group">
                                <div class="text">Jenis Kelamin</div>
                                <div class="radio-group">
                                    <label><input type="radio" name="gender" value="Laki-laki"> Laki-Laki</label>
                                    <label><input type="radio" name="gender" value="Perempuan"> Perempuan</label>
                                </div>
                            </div>

                            <div class="input-wrap">
                                <input type="text" class="input-field" required placeholder="Umur" />
                            </div>
                            <div class="input-wrap">
                                <input type="text" class="input-field" required placeholder="Alamat Lengkap" />
                            </div>

                            <div class="form-group">
                                <div class="text">Pendidikan Trakhir</div>
                                <div class="radio-group">
                                    <label><input type="radio" name="gender" value="SD"> SD</label>
                                    <label><input type="radio" name="gender" value="SLTP"> SLTP</label>
                                    <label><input type="radio" name="gender" value="SLTA"> SLTA</label>
                                    <label><input type="radio" name="gender" value="Perguruan Tinggi"> Perguruan
                                        Tinggi</label>
                                </div>
                            </div>

                            <label for="status">Status Perkawinan</label>
                            <select id="status">
                                <option>Select Option</option>
                            </select>

                            <div class="input-wrap">
                                <input type="email" class="input-field" required placeholder="Pekerjaan" />
                            </div>

                            <label for="range">Range Penghasilan</label>
                            <select id="range">
                                <option>Select Option</option>
                            </select>

                            <div class="form-group">
                                <div class="text">Tunjangan</div>
                                <div class="radio-group">
                                    <label><input type="radio" name="gender" value="bpjs">BPKS</label>
                                    <label><input type="radio" name="gender" value="asuransi">Asuransi</label>
                                    <label><input type="radio" name="gender" value="tidakkeduanya">Tidak
                                        Keduanya</label>
                                </div>
                            </div>


                            <!-- <div class="input-wrap">
                <input type="text" class="input-field" required placeholder="Nomor Identitas" />
                <small class="note">NIM, NIP atau NIK (Masukan salah satu)</small>
              </div> -->

                            <!-- <div class="input-wrap">
                <input type="text" class="input-field" placeholder="Tanggal Lahir" onfocus="(this.type='date')"
                  onblur="if(this.value===''){this.type='text'}" required />
              </div> -->

                            <button type="submit" class="sign-btn" href="{{ route('login') }}">Sign Up</button>

                            <div class="to-signup">
                                <p>Sudah punya akun? <a href="{{ route('login') }}" class="toggle">Masuk disini!</a></p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="icons"></div>
            </div>
        </div>
    </main>

    <script src="{{ asset('datadiri/datadiri.js') }}"></script>
</body>

</html>