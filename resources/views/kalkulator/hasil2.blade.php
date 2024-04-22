<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>

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
      
    table {
        border: 1px; solid black;
        margin-left: auto;
        margin-right: auto;

    }
    input[type="submit"]{
        width:100%;
        padding: 5px 10px;
        background-color: #39ff14;
        color:white;
        font-size: 20px;
        border:none;
        border-radius:300px;
        box-shadow: 6px 6px 6px rgba(0,0,0,0.8)
    }
    input[type="number"]{
        padding: 5px 10px;
        font-size:24px;
        font-weight:bold;
        text-align:center;
        border:none;
        border-radius:5px;
        border:2px solid black;
    }
    input[type="reset"]{
        width:50%;
        padding: 5px 5px;
        background-color: #ff3131;
        color:white;
        font-size: 20px;
        border:none;
        border-radius:10px;
        box-shadow: 6px 6px 6px rgba(0,0,0,0.8);
    }
    
    </style>


</head>
<body>

    <center>
    <h4><a href="{{url('/index')}}">Halaman Home</a></h4>
    </center>
    
    <center>
        <h2>KALKULATOR SEDERHANA</h2>
        <form action="{{ route('hitung2.store') }}" method="post">
       @csrf
       <table>
            <tr>
                <td colspan=2><input type="number" name="angka1" id=""></td>
                <td colspan=2><input type="number" name="angka2" id=""></td>
            </tr>

            <tr>
                <td colspan=4><center><input type="number" name="hasil" id="" value="{{$hasil2}}"></center></td>
            </tr>


            <tr>
                <td><input type="submit" name="op" value="+"></td>
                <td><input type="submit" name="op" value="-"></td>
                <td><input type="submit" name="op" value="x"></td>
                <td><input type="submit" name="op" value="/"></td>
            </tr>


            <tr>
                <td colspan=4><center><input type="reset" value="CLEAR"></center></td>
                
            </tr>

        </table>
        </form>
    </center>

    <footer class="footer">
    <p>Copyright @2024  Zahratul.com</p> 
</footer>
</body>
</html>
