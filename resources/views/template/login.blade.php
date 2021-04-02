<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('template-login/style.css')}}"/>
    <title>PeMas | Pengaduan Masyarakat</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="/login" class="sign-in-form" method="post">
          @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" autocomplete="off" name="username"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            <input type="submit" value="Login" class="btn solid" />
          </form>

          <form action="/signup" method="post" class="sign-up-form">
          @csrf
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-id-card"></i>
              <input type="text" name="nik" placeholder="NIK" autocomplete="off"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="nama" placeholder="Nama" autocomplete="off"/>
            </div>
            <div class="input-field">
              <i class="fas fa-font"></i>
              <input type="text" name="username" placeholder="Username" autocomplete="off"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" name="telp" placeholder="Telp" autocomplete="off"/>
            </div>
            <input type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Belum Mempunyai Akun ?</h3>
            <p>
              Klik tombol dibawah ini
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="{{asset('template-login/img/log.svg')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah Mempunyai Akun ?</h3>
            <p>
              Silahkan masuk dengan klik tombol dibawah ini
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="{{asset('template-login/img/register.svg')}}" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="{{asset('template-login/app.js')}}"></script>
  </body>
</html>
