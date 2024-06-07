<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <script src="app.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <title>PW HIMI PERSIS JABAR</title>
    <link rel="icon" type="image/png" href="logohimipersisjabar.png">
</head>
<body>
  <nav class="navbar">
    <div class="logo">
      <img src="logohimipersisjabar.png" alt="HIMI PERSIS JABAR Logo" width="70" height="50">
    </div>
    <div class="menu">
      <div class="menu-links">
        <a href="#home" class="menu-link">Home</a>
        <a href="#tentang" class="menu-link">Tentang</a>
        <a href="#visi-misi" class="menu-link">Visi & Misi</a>
        <a href="#struktur" class="menu-link">Struktur</a>
      </div>
      <!-- @guest -->
        <a href="#">Login</a>
      <!-- @else
        <a href="{{ route('dashboards.index') }}">Dashboard</a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
            <button type="submit" class="logout">{{ __('Logout') }}</button>
        </form>
      @endguest -->
    </div>
    <div class="menu-btn" id="menu-btn">
      <i class="fa-solid fa-bars"></i>
    </div>
    <div class="dropdown-menu" id="dropdown-menu">
    <div class="menu-btn" id="close-btn">
        <i class="fa-solid fa-bars"></i>
    </div>
        <a href="#home">Home</a>
        <a href="#tentang">Tentang</a>
        <a href="#visi-misi">Visi & Misi</a>
        <a href="#struktur">Struktur</a>
        @guest
        <a href="{{ route('login') }}">Login</a>
      @else
        <a href="{{ route('dashboards.index') }}">Dashboard</a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
            <button type="submit" class="logout">{{ __('Logout') }}</button>
        </form>
      @endguest
    </div>
  </nav>

  <div id="home">  
  <div class="jumbotron">
      <div class="jumbotron-content">
        <div class="jumbotron-text">
          <!-- <p>Pimpinan Wilayah Himpunan Mahasiswi Jawa Barat adalah salah satu organisasi masyarakat Islam di Wilayah Jawa Barat, beranggotakan para perempuan yang berada dalam jenjang kemahasiswaan. Lahir sebagai otonom dari organisasi masyarakat Persatuan Islam dengan arah gerakan:</p>
          <p>Keagamaan | Sosial | Intelektual | Keperempuanan</p> -->
          <p>{!! nl2br($pengaturan->deskripsi) !!}</p>
        </div>
        <div class="jumbotron-image">
          <img src="{{ asset('/storage/pengaturans/'.$pengaturan->image) }}" alt="HIMI PERSIS JABAR Logo">
        </div>
      </div>
    </div>
  </div>

  <div class="video-container" id="tentang">
      <img class="thumbnail" src="{{ asset('/storage/pengaturans/'.$pengaturan->thumbnail) }}" alt="Thumbnail">
        <video autoplay loop class="video">
            <source src="{{ asset('/storage/pengaturans/'.$pengaturan->video) }}">
            <audio muted style="display:none;"></audio>
            Your browser does not support the video tag.
        </video>
        <button class="play-button"></button>
    </div>

    <div id="visi-misi" style="padding-top: 90px;">
    <div class="container">
    <div class="card">
      <div class="card-header">
        Visi
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <!-- <p>“Membumikan nilai-nilai ulul ilmi dalam Kiprah Himi Persis sebagai Organisasi Kemahasiswaan berbasis keperempuanan di Jawa Barat.”</p> -->
          <p>{!! nl2br($pengaturan->visi) !!}</p>
        </blockquote>
      </div>
    </div>
    </div>
    </div>

    <div class="container">
    <div class="card">
      <div class="card-header">
        Misi
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <!-- <ol>
            <li>Peningkatan profesionalitas organisasi dalam bidang penertiban administrasi keorganisasian.</li>
            <li>Penguatan kultur pengkaderan baik formal, non formal maupun emosional kader.</li>
            <li>Meningkatkan peranan himi persis sebagai organisasi kader / otonom jam'iyyah, organisasi keperempuanan dan organisasi kemahasiswaan.</li>
            <li>Berkontribusi dalam penyelesaian permasalahan keperempuanan di Jawa Barat.</li>
            <li>Membangun sinergi dengan aliansi strategis yang sejalan dengan Himi Persis Jawa Barat.</li>
          </ol> -->
          <p>{!! nl2br($pengaturan->misi) !!}</p>
        </blockquote>
      </div>
    </div>
    </div>

    <div id="struktur" style="padding-top: 90px;">
    <div class="container">
      <div class="struktur">
      <img src="{{ asset('/storage/pengaturans/'.$pengaturan->struktur) }}" alt="Struktur Himi Persis Jabar" width="100%" class="rounded">
      </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <footer>
      <div class="background">
        <svg
          version="1.1"
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          x="0px"
          y="0px"
          width="100%"
          height="100%"
          viewBox="0 0 1600 900"
        >
          <defs>
            <path
              id="wave"
              fill="hsl(145, 70%, 28%)"
              d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
      s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z"
            />
          </defs>
          <g>
            <use xlink:href="#wave" opacity=".4">
              <animateTransform
                attributeName="transform"
                attributeType="XML"
                type="translate"
                dur="8s"
                calcMode="spline"
                values="270 230; -334 180; 270 230"
                keyTimes="0; .5; 1"
                keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                repeatCount="indefinite"
              />
            </use>
            <use xlink:href="#wave" opacity=".6">
              <animateTransform
                attributeName="transform"
                attributeType="XML"
                type="translate"
                dur="6s"
                calcMode="spline"
                values="-270 230;243 220;-270 230"
                keyTimes="0; .6; 1"
                keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                repeatCount="indefinite"
              />
            </use>
            <use xlink:href="#wave" opacty=".9">
              <animateTransform
                attributeName="transform"
                attributeType="XML"
                type="translate"
                dur="4s"
                calcMode="spline"
                values="0 230;-140 200;0 230"
                keyTimes="0; .4; 1"
                keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
                repeatCount="indefinite"
              />
            </use>
          </g>
        </svg>
      </div>
      <section>
        <ul class="socials">
          <li><a href="https://www.instagram.com/{{ $pengaturan->sosmed }}" class="fa-brands fa-instagram" target="_blank"></a></li>
          <li><a href="#" class="fa-brands fa-facebook"></a></li>
          <li><a href="#" class="fa-brands fa-tiktok"></a></li>
          <li><a href="#" class="fa-brands fa-linkedin"></a></li>
          <li><a href="#" class="fa-brands fa-youtube"></a></li>
        </ul>
        <ul class="links">
          <li><a href="#home">Home</a></li>
          <li><a href="#tentang">Tentang</a></li>
          <li><a href="#visi-misi">Visi & Misi</a></li>
          <li><a href="#struktur">Struktur</a></li>
        </ul>
        <p class="legal">PW HIMI PERSIS JAWA BARAT</p>
      </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: true,
                timer: 3000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: true,
                timer: 3000
            });
        @endif

    </script>
</body>
</html>
