<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Medy Budy</title>
  <link rel="stylesheet" href="{{ asset('lg/login/login.css') }}">
</head>

<body>
  <main>
    <div class="box">
      <div class="inner-box">
        <div class="forms-wrap">
          <div class="logo">
            <img src="{{ asset('lg/img/Logo medybudy.png') }}" alt="Logo medybudy">
          </div>
          <form class="sign-in-form" action="{{ route('login.proses') }}" method="POST">
            @csrf

            <div class="heading">
              @if ($errors->has('login_failed'))
              <p style="color: red; font-size: 18px; font-weight: bold; margin-top: 10px;">
                {{ $errors->first('login_failed') }}
              </p>
              @endif

              <h2>Masuk</h2>
            </div>
            <p class="text">Gunakan Email yang terdaftar</p>

            <div class="actual-form">
              <div class="input-wrap">
                <input
                  type="email"
                  class="input-field"
                  name="email"
                  autocomplete="off"
                  required
                  placeholder="Email" />
              </div>
              <div class="input-wrap">
                <input
                  type="password"
                  minlength="4"
                  class="input-field"
                  name="password"
                  autocomplete="off"
                  required
                  placeholder="Password" />
              </div>
              <p class="text">
                <a href="#">Lupa Password</a>
              </p>
              <input type="submit" value="Log In" class="sign-btn">
              <div class="to-signup">
                <p>Belum punya akun? <a href="{{ route('register') }}" class="toggle">Daftar disini!</a></p>
                <p>Login Dokter <a href="{{ route('dokter.loginForm') }}" class="dokter-login-link">Masuk disini!</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="icons"></div>
      <div class="carousel"></div>
    </div>
  </main>

  <!-- js file -->
  <script src="{{ asset('lg/login/login.js') }}"></script>
</body>

</html>
