<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/nav.css') }}">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
<title>Tatil Sitesi Navbar</title>
<style>
</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark navbar-main">
    <div class="container">
      <a class="navbar-brand" href="{{route('anasayfa')}}">TatilSitem.com</a> <!-- Site adı veya logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarMainNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('anasayfa') }}">Anasayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('turlar')}}">Turlar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('oteller')}}">Oteller</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('galeri')}}">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{'iletisim'}}">İletişim</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('user.login')}}">
            <i class="fas fa-user"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="container">
<div class="row justify-content-center">
      <div class="col-md-8">
        <form class="date mt-4">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" class="form-control" placeholder="Şehir Seçin">
              <input type="date" id="startDate" class="form-control datepicker" placeholder="Giriş Tarihi">
              <input type="date" id="finishDate" class="form-control datepicker" placeholder="Çıkış Tarihi">
              <a  href = "javascript:login()" class="btn-action">Ara</a>
          
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row mb-4">
     <div class="col-md-12">
        <div id="icon-slider" class="carousel slide" data-ride="carousel"  data-interval="1000">
    <div class="carousel-inner">
    <div class="carousel-item active">
            <i class="fas fa-home fa-3x"></i>
    </div>
    <div class="carousel-item">
            <i class="fas fa-heart fa-3x"></i>
     </div>
     <div class="carousel-item">
            <i class="fas fa-user fa-3x"></i></div>
    </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <!-- Buraya 11 adet daha kart ekleyebilirsiniz -->
    </div>
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <!-- Buraya 11 adet daha kart ekleyebilirsiniz -->
    </div>
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <!-- Buraya 11 adet daha kart ekleyebilirsiniz -->
    </div>
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <!-- Buraya 11 adet daha kart ekleyebilirsiniz -->
    </div>
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mb-3" onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mb-3"  onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card mb-3"  onclick="getFlightDetails('04-05-2024', 'Horasan', 'Van')">
                <div class="card-body">
                    <h5 class="card-title">Uçuş Detayı</h5>
                    <p class="card-text">Kalkış Tarihi: 04-05-2024</p>
                    <p class="card-text">Kalkış Yeri: Horasan</p>
                    <p class="card-text">Varış Yeri: Van</p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer mt-auto py-3 bg-light">
    <div class="container-fluid text-center">
        <span class="text-muted">Telif Hakkı &copy; 2024 TatilSitesi. Tüm hakları saklıdır.</span>
        <br>
        <span class="text-muted">İletişim: info@tatilsitesi.com</span>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
 $('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true
})</script>
  