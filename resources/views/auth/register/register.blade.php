<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>register</title>

  <meta name="mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="msapplication-starturl" content="/" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- General CSS -->
<link rel="stylesheet" href="{{asset ('assets/dist/css/bootstrap.min.css')}}" />

  <!-- CSS Libraries -->
<link rel="stylesheet" href="{{asset('assets/css/pages/authentication.css')}}" />

  <!-- Template CSS -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
</head>

<body>
  <div id="login" class="app app-navbar container">
    <main class="login-header">
      <div class="login-body text-dark col-12">
        <div class="row">
          <div class="col-3">
            <a href="" class="">
              <img src="{{asset('./../icon/logo-sekolah/logo-muhi.png')}}" alt="" class="icon-back" />
            </a>
          </div>

          <div class="col-9 col-md-7">
            <h6 class="login-title text-left pt-4 text-warning">
              SMK MUHAMMADIYAH 1 WELERI
            </h6>
          </div>

          <div class="col-12 mt-5">
            <h3 class="h-3">
              <strong>Daftar</strong>
            </h3>
            <p class="text-muted" style="font-size: 14px;">Masukkan nomor telepon Anda</p>
          </div>

          <div class="col-12 mt-5">

            <h6 style="font-size: 12px;"><strong>No Telepon</strong></h6>
            <input id="frist_name" type="" class="form-control" name="frist_name" placeholder="0000 0000 0000"
              autofocus="" data-height="55" style="border: 1px solid #CACCCF;
                box-sizing: border-box;
                border-radius: 10px;" />
          </div>
        </div>
        <div class="mt-5">
          <a href="javascript:;" class="btn btn-yellow follow-btn btn-block" style="border: 1px solid #FF9463;
              box-sizing: border-box;
              box-shadow: 3px 4px 10px rgba(255, 148, 99, 0.25);
              border-radius: 25px; padding-top: 10px">Lanjut</a>
          <p class="text-muted text-center mt-3 mb-3" style="font-size: 14px;"> Atau daftar Dengan</p>
          <a href="javascript:;" class="btn ollow-btn btn-block" style="border: 1px solid #FF9463;
                box-shadow: 3px 4px 10px rgba(255, 148, 99, 0.25);
                border-radius: 25px;
                background-image: url('./../icon/other/login-google.svg');
                background-repeat: no-repeat;
                background-size: contain;">Google</a>
        </div>
      </div>

      <div class="col-12 mt-5">
        <p class="text-center" style="font-size: 14px;">Sudah Punya Akun? <a href="#" class="text-danger"> Login </a></p>
      </div>
    </main>

    <div class="loading-page" style="display:none">
      <div class="loading-dialog">
        <div class="loading-content">
          <div class="lds-spinner">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- General JS Scripts -->
<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('assets/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/service-worker.js')}}"></script>
</body>

</html>