<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
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
        body{
    background: linear-gradient(280deg, transparent, #02c8cf);        
    font-family: Tahoma;
        }
    </style>
   
   

</head>
<body>
    <center>
    <h4><a href="{{url('/index')}}">Halaman Home</a></h4>
    </center>
    
   

<h2>Kalkulator Sederhana</h2>
<form action="" method="post" name="form1">
    <input type="text" name="a" id=""><br><br>
    <input type="button" value="1" onClick="form1.a.value+='1'">
    <input type="button" value="2" onClick="form1.a.value+='2'">
    <input type="button" value="3" onClick="form1.a.value+='3'"><br>
    <input type="button" value="4" onClick="form1.a.value+='4'">
    <input type="button" value="5" onClick="form1.a.value+='5'">
    <input type="button" value="6" onClick="form1.a.value+='6'"><br>
    <input type="button" value="7" onClick="form1.a.value+='7'">
    <input type="button" value="8" onClick="form1.a.value+='8'">
    <input type="button" value="9" onClick="form1.a.value+='9'"><br>
    <input type="button" value="0" onClick="form1.a.value+='0'">
    <input type="button" value="000" onClick="form1.a.value+='000'">
    <input type="button" value="+" onClick="form1.a.value+='+'"><br>
    <input type="button" value="-" onClick="form1.a.value+='-'">
    <input type="button" value="*" onClick="form1.a.value+='*'">
    <input type="button" value="/" onClick="form1.a.value+='/'">
    <input type="button"  value="c" onClick="form1.a.value=''">
    <input type="button" value="=" onClick="form1.a.value=eval(form1.a.value)">

</form>    
    
<footer class="footer">
    <p>Copyright @2024  Zahratul.com</p> 
</footer>
</body>
</html>