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
    <title>Contract</title>
</head>
<nav class="navbar navbar-light bg-primary rect">
    <div class="container-fluid">
        <h3><b>TOSHKENT SHAHRI YEOJU TEXNIKA INSTITUTI</b></h3>

        <button type="submit" class="btn btn-light m-4">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit; "><a style="text-decoration:none" href="{{ route('chiqish')}}">Tizimdan chiqish</a> </font>
            </font>
        </button>
    </div>
</nav>

<body class="d-flex flex-column min-vh-100">
    <h1 class="m-3"><b>{{$t->Ism}} {{$t->Familya}} {{$t->Sharifi}}</b></h1>

    <p>TOSHKENT SHAHRI YEOJU TEXNIKA INSTITUTI</p>
    <div class="container d-flex justify-content-center">

        <table class="table table-bordered table-striped table-hover justify-content-center">
            <tbody>
                <tr class="">
                    <td><b>Fakultet</b></td>
                    <td>({{$t->yonalish->Short_name}})-{{$t->yonalish->Nomi}} </td>
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
                    <td>{{$t->yonalish->Talim_shakli}}</td>
                </tr>
                <tr>
                    <td><b>Shartnoma raqami</b></td>
                    <td>{{$t->shartnoma[0]->id}}</td>
                </tr>
                <tr>
                    <td><b>To'lov miqdori</b></td>
                    <td>{{$t->yonalish->contract->Summa}}</td>
                </tr>
                <tr>
                    <td><b>O'quv yili</b></td>
                    <td>{{$t->yonalish->contract->Oquv_yili}}</td>
                </tr>
            </tbody>
        </table>

    </div>
    <div class="mx-5 my-4 d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mx-5 my-2 d-flex justify-content-center">
            <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit; "><a style="color:#fff;text-decoration:none;" href="{{ route('pdf', ['passport'=>$t->Passport_seriya])}}">Shartnomani yuklab ollish</a> </font>
            </font>
        </button>
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