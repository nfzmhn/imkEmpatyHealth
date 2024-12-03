<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Klinik Pratama</title>
  <link rel="stylesheet" href="{{ asset('lg/daftar/daftar.css') }}">
</head>

<body>
  <main>
    <div class="box">
      <div class="carousel"></div>
      <div class="inner-box">
        <div class="forms-wrap">
          <div class="logo">
            <img src="{{ asset('lg/img/Logo medybudy.png') }}" alt="Logo medybudy">
          </div>
          <form action="{{ route('register.step.one.post') }}" method="POST">
            @csrf
            <div class="heading">
              <h2>Daftar</h2>
              <p>Lengkapi identitas diri anda</p>
            </div>

            <div class="actual-form">
              <!-- Nama Depan -->
              <div class="input-wrap">
                <input type="text" name="namadepan" class="input-field" value="{{ old('namadepan') }}" required placeholder="Nama Depan" />
                @error('namadepan') <small class="error">{{ $message }}</small> @enderror
              </div>

              <!-- Nama Belakang -->
              <div class="input-wrap">
                <input type="text" name="namabelakang" class="input-field" value="{{ old('namabelakang') }}" required placeholder="Nama Belakang" />
                @error('namabelakang') <small class="error">{{ $message }}</small> @enderror
              </div>

              <!-- Email -->
              <div class="input-wrap">
                <input type="email" name="email" class="input-field" value="{{ old('email') }}" required placeholder="Email" />
                @error('email') <small class="error">{{ $message }}</small> @enderror
              </div>

              <!-- Password -->
              <div class="input-wrap">
                <input type="password" name="password" class="input-field" required placeholder="Password" />
                @error('pw') <small class="error">{{ $message }}</small> @enderror
              </div>

              <!-- Nomor Telepon -->
              <div class="input-wrap">
                <input type="tel" name="no_hp" class="input-field" value="{{ old('no_hp') }}" required placeholder="Nomor Telepon" />
                <small class="note">Nomor WhatsApp aktif</small>
                @error('no_hp') <small class="error">{{ $message }}</small> @enderror
              </div>

              <!-- Tanggal Lahir -->
              <div class="input-wrap">
                <input type="text" name="tgl_lahir" class="input-field" value="{{ old('tgl_lahir') }}"
                  placeholder="Tanggal Lahir"
                  onfocus="(this.type='date')"
                  onblur="if(this.value===''){this.type='text'}"
                  required />
                @error('tgl_lahir') <small class="error">{{ $message }}</small> @enderror
              </div>

<<<<<<< HEAD
              <!-- Tombol Submit -->
              <button type="submit" class="sign-btn">Sign Up</button>
=======
              <button type="submit" class="sign-btn">Lengkapi data diri</button>
>>>>>>> 9caa69230c2925c3e169ea596a286d23c328bc50

              <!-- Link ke Halaman Login -->
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

  <script src="{{ asset('lg/daftar/daftar.js') }}"></script>
</body>

</html>