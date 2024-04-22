<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR</title>
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

          body {
            font-family: Courier, sans-serif;
            background-color: #8FBC8F;
            margin: 100;
            padding-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100hv;
        }

        .calculator {
            background-color: #DCDCDC;
            width: 600px;
            height: 450px;
            font-weight : bold;
            padding: 50px;
            border-radius: 50px;
            box-shadow: 5px 5px  10px; rgba(6, 6, 6, 6,8);
            text-align: left;
        }

    

        input[type="number"] {
            padding: 10px;
            margin-bottom: 10px;
            width: 400px;
            box-shadow: 5px 5px 10px; rgba(0, 0, 0, 0,1);
            border: 1px solid #ccc;
            border-radius: 50px;
            outline: none;
        }

        input[type="submit"] {
            padding: 10px 20px;
            margin: 10px;
            border: 10;
            border-radius: 10px;
            cursor: pointer;
            background-color: #D3D3D3;
            color: dark;
            font-size: 20px;
            box-shadow: 5px 5px 10px; rgba(0, 0, 0, 0,1);
            transition: background-color 0,3s;
        }

       
        input[type="submit"]:hover {
            background-color: #A52A2A;
    

        }
        input[type="reset"] {
            padding: 10px 20px;
            margin: 10px;
            border: 10;
            border-radius: 10px;
            cursor: pointer;
            background-color: #D3D3D3;
            color: dark;
            font-size: 20px;
            box-shadow: 5px 5px 10px; rgba(0, 0, 0, 0,1);
            transition: background-color 0,3s;
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
    <center>
    <h4><a href="{{url('/index')}}">Halaman Home</a></h4>
    </center>
    
    <div class="calculator">
    <h1><center>KALKULATOR SEDERHANA</center></h1>


    <center>
    <form action="{{ route('hitung.store') }}" method="post">

    @csrf
    Angka Pertama : <input type="number" name="angka1" id=""><br><br>
    Angka Kedua : <input type="number" name="angka2" id=""><br><br>

  
                <input type="submit" name="op" value="+">
                <input type="submit" name="op" value="-">
                <input type="submit" name="op" value="x">
                <input type="submit" name="op" value="/">
                <input type="submit" name="op" value="Reset">

                <br><br>
        <center>
        <tr>
            <td>
            NAMA : ZAHRATUL HASANAH <br>
            KELAS: XII RPL 1
            </td>
        </tr>
        </center>

    </form>
    </div>
    </center>


</body>
</html>
    

    
