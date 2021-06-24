


<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" alt="" width="100" height="100">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('website.home') }}">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('website.produk') }}">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('website.blog') }}">Blog</a>
            </li>
          
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Blog
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/tentang-madu">Tentang madu</a></li>
                <li><a class="dropdown-item" href="/manfaat-madu">Manfaat madu</a></li>
                <li><a class="dropdown-item" href="/sistem-keagenan">Keagenan</a></li>
              </ul>
            </li> -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Social Media
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" target="_blank" href="https://www.instagram.com/madualhafizh.id/">Instagram</a></li>
                <li><a class="dropdown-item" target="_blank" href="https://www.facebook.com/madualhafizh.id/">Facebook</a></li>
              </ul>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="{{ route('website.kontak') }}">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
