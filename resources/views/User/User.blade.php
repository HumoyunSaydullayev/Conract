<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="/css/Use.css"> -->
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<nav class="navbar navbar-light bg-primary rect">
    <div class="container-fluid">
        <h3><b>TOSHKENT SHAHRI YEOJU TEXNIKA INSTITUTI</b></h3>
        <button type="submit" class="btn btn-light m-4">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Tizimdan chiqish</font>
            </font>
        </button>
    </div>
</nav>

<body class="d-flex flex-column min-vh-100">
    @foreach($list as $t)
    <h1 class="m-3"><b>{{$t->Ism}}</b></h1>
    @endforeach

    <p>TOSHKENT SHAHRI YEOJU TEXNIKA INSTITUTI</p>
    <div class="container d-flex justify-content-center">

        <table class="table  table-bordered table-striped table-hover ">
            <tbody>
                @foreach($list as $t)
                <tr class="">
                    <td><b>Fakultet</b></td>
                    <td>{{$t->Yonalishi_id}}</td>
                </tr>
                <tr>
                    <td><b>Kurs</b></td>
                    <td>{{$t->Yonalishi_id}}</td>
                </tr>
                <tr>
                    <td><b>Pasport seriya</b></td>
                    <td>{{$t->Passport_seriya}}</td>
                </tr>
                <tr>
                    <td><b>O'qish turi</b></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>To'lov miqdori</b></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

<footer class=" mt-auto bg-dark text-center text-white footer">
    <div class="container p-4">
        <section class="mb-4">
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com" role="button"><i class="fa-brands fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="https://t.me/Humoyun_Saydullayev" role="button"><i class="fa-brands fa-telegram"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com" role="button"><i class="fab fa-google"></i></a>
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/humoyun_saydullayev" role="button"><i class="fab fa-instagram"></i></a>
        </section>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright: Humoyun Saydullayev
    </div>
</footer>

</html>