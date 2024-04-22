<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    .footer{
        width: 100%;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: black;
        color:yellow;
        font-size: 12px;
        text-transform: uppercase;
        position: fixed;
        bottom: 0px;
        z-index: 1;
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PROFILE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="latihan1.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="about.html">About Me</a></li>
                  <li><a class="dropdown-item" href="myschool.html">About My School</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="contact.html">Contact Us</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>

    
    <hr />

    <header style="text-align: center;">
    <img src="gambar/people.webp" width="200" height="200" 50%;">
    <h1>Zahratul Hasanah</h1>

    <p>(Pengembangan Perangkat Lunak dan Gim)</p>
    
   
    <p>Lahir   : 05 April 2006 </p>
    <p>Sekolah : SMKN 1 Lubuk Sikaping</p>
    <p>Jurusan : PPLG</p>
    <p>Alamat  : Rao</p>
    <p>Agama   : Islam</p>
    <p>No. HP : 082384921101 </p>
</header>

    </hr>

<article style="text-align: center;">
    <h2>Overview</h2>
    <p>
        Hi, saya adalah siswi SMKN 1 Lubuk Sikaping yang berdomilisi di Lubuk Sikaping.
        Saat ini sedang berada di jurusan Pengembangan Perangkat Lunak dan Gim.
    </p>
</article>



<hr>
<footer class="footer">
    <p>Copyright @2022  All Right Reserved</p> 
</footer>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>