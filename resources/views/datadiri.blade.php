</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medy Budy</title>
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
                    <form class="sign-up-form" method="POST" action="{{ route('register.step.two') }}">
                        @csrf
                        <div class="heading">
                            <h2>Daftar</h2>
                            <p>Lengkapi identitas diri anda</p>
                        </div>

                        <div class="actual-form">
                            <div class="form-group">
                                <div class="text">Jenis Kelamin</div>
                                <div class="radio-group">
                                    <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-Laki</label>
                                    <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
                                </div>
                            </div>

                            <div class="input-wrap">
                                <input type="number" name="umur" class="input-field" required placeholder="Umur" />
                            </div>

                            <div class="input-wrap">
                                <input type="text" name="alamat" class="input-field" required placeholder="Alamat Lengkap" />
                            </div>

                            <div class="form-group">
                                <div class="text">Pendidikan Terakhir</div>
                                <div class="radio-group">
                                    <label><input type="radio" name="pendidikan_terakhir" value="SD"> SD</label>
                                    <label><input type="radio" name="pendidikan_terakhir" value="SLTP"> SLTP</label>
                                    <label><input type="radio" name="pendidikan_terakhir" value="SLTA"> SLTA</label>
                                    <label><input type="radio" name="pendidikan_terakhir" value="Perguruan Tinggi"> Perguruan Tinggi</label>
                                </div>
                            </div>

                            <label for="status">Status Perkawinan</label>
                            <select id="status" name="status_pernikahan">
                                <option value="Sudah">Sudah</option>
                                <option value="Belum">Belum</option>
                                <option value="Cerai">Cerai</option>
                            </select>

                            <div class="input-wrap">
                                <input type="text" name="pekerjaan" class="input-field" required placeholder="Pekerjaan" />
                            </div>

                            <label for="penghasilan">Range Penghasilan</label>
                            <select id="penghasilan" name="penghasilan">
                                <option value="Rendah" data-range="1500000">1.500.000 ke bawah</option>
                                <option value="Menengah" data-range="6000000">1.500.000 sampai 6.000.000</option>
                                <option value="Tinggi" data-range="6000001">6.000.000 ke atas</option>
                            </select>

                            <div class="form-group">
                                <div class="text">Tunjangan</div>
                                <div class="radio-group">
                                    <label><input type="radio" name="tunjangan" value="BPJS"> BPJS</label>
                                    <label><input type="radio" name="tunjangan" value="Asuransi"> Asuransi</label>
                                    <label><input type="radio" name="tunjangan" value="Tidak Keduanya"> Tidak Keduanya</label>
                                </div>
                            </div>

                            <button type="submit" class="sign-btn">Sign Up</button>

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
