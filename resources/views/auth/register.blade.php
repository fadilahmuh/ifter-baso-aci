<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="assets-landing/img/BACKGROUND.png" alt="logo" width="100">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Registrasi</h4></div>
              @if($errors->any())
                    @foreach($errors->getMessages() as $this_error)
                    <div class="alert alert-danger" role="alert">
                    <i class="fas fa-exclamation-triangle  mr-3"></i> {{$this_error[0]}}
                    </div> 
                    @endforeach
            @endif 
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    <i class="fas fa-check mr-3"></i> {{ Session('success') }} 
                </div>        
            @endif

              <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    @method("POST")
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nama_mitra">Nama Mitra</label>
                      <input id="nama_mitra" placeholder="E.g. Baso Aci Mojok" type="text" class="form-control" name="nama_mitra" autofocus>                        
                    </div>
                    <div class="form-group col-6">
                      <label for="nama_pemilik">Nama Pemilik</label>
                      <input id="nama_pemilik" placeholder="E.g. Alam" type="text" class="form-control" name="nama_pemilik">
                    </div>
                  </div>

                  

                  <div class="row">                    
                    <div class="form-group col-6">
                      <label for="telepon">Nomor Telepon</label>
                      <input id="telepon" type="type" placeholder="08xxxxxxxxx" class="form-control" name="telepon">
                      <div class="invalid-feedback">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>Kota</label>
                      <input type="text" class="form-control" name="kota" id="kota">
                    </div>
                    <div class="form-group col-6">
                      <label>Kode Pos</label>
                      <input type="number" class="form-control" name="kodepos" id="kodepos">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat Lengkap</label>
                    <input id="alamat" type="alamat" placeholder="" class="form-control" name="alamat">
                    <div class="invalid-feedback">
                    </div>
                  </div>
                    
                  <br>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" placeholder="email@example.com" class="form-control" name="email">
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block">Password</label>
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password">
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password-confirm" class="d-block">Konfirmasi Password</label>
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                    </div>
                  </div>
                  
                  

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                        <label class="custom-control-label" for="agree">Saya setuju dengan syarat dan ketentuan</label>
                      </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" id='regis' disabled>
                      Register
                    </button>
                  </div>
                </form>
              </div>
            </div> 
            
            <div class="row my-5">
              <div class="col-6">
                <div class="text-muted text-right text-decoration-none">
                  <a href="{{ route('login',) }}"><i class="fas fa-arrow-left"></i> ke Login</a>
                </div>   
              </div>
              <div class="col-6">
                <div class="text-muted text-left text-decoration-none">
                  <a href="/">ke Home <i class="fas fa-arrow-right"></i></a>
                </div>   
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="assets/modules/jquery.min.js"></script>
  <script src="assets/modules/popper.js"></script>
  <script src="assets/modules/tooltip.js"></script>
  <script src="assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="assets/modules/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>
  
  <!-- JS Libraies -->
  <script src="assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/auth-register.js"></script>
  
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>
</body>
</html>