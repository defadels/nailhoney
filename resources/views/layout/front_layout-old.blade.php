
<!doctype html>
<html lang="id">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="title" content="@yield('title','Madu Al-Hafizh')">
    <meta name="description" content="@yield('description','Supplier Madu Sumatera Terbesar')">
    <meta name="keywords" content="Madu, Hutan, Madu Ternak, Ganti Gula ke Madu">
    <meta name="author" content="Bag Kinantan">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:url"         content="https://madualhafizh.id" />
    <meta property="og:type"        content="website" />
    
    <meta property="og:title"       content="@yield('title','Website Resmi Madu Al-Hafizh')" />
    <meta property="og:description" content="@yield('description','Supplier Madu Hutan Sumatera Terbesar')" />
    <meta property="og:image"       content="@yield('logo','/img/logo.png')" />
    <link rel="icon" href="{{ asset('/img/logo.png') }}" type="image/gif" sizes="16x16">    

    <!-- Google Analytics -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YD7D898YBE"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-YD7D898YBE');
    </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    @yield('page_style')
    
    <title>@yield('title')</title>
  </head>
  <body>

    @include('layout.front.menu')



    <main>
    @yield('content')
    
    @include('layout.front.chat')

  <!-- FOOTER -->
  @include('layout.front.footer')

  </main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    @yield('page_script')
    
  </body>
</html>