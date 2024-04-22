<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <style>
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
      
          h4 {
        padding: 20px;
        border: 2px solid #3498db; 
        margin: 10px;
        color: #333; 
        background-color: #f8f9fa; 
        border-radius: 8px; 
        font-family: Arial, sans-serif; 
        }
        h4:hover {
    background-color: #3498db; 
    color: #fff; 
}
    </style>
</head>
<body>
    <h1>SELAMAT DATANG DI KALKULATOR ZAHRA!</h1>
    <center>
    <h4><a href="{{url('/kalkulator1')}}">KALKULATOR 1 PHP</a></h4>
    <h4><a href="{{url('/kalkulator2')}}">KALKULATOR 2 PHP</a></h4>
    <h4><a href="{{url('/kalkulatorjs')}}">KALKULATOR 3 JS</a></h4>
    </center>

    <footer class="footer">
    <p>Copyright @2024  Zahratul.com</p> 
</footer>
</body>
</html>
