<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <h1><b>{{$t->Ism}} {{$t->Familya}} {{$t->Sharifi}}</b></h1>
    <table border="1" cellspacing="0" cellpadding="2">
        <tbody>
            <tr>
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
                <td><b>To'lov miqdori</b></td>
                <td>{{$t->yonalish->contract->Summa}}</td>
            </tr>
            <tr>
                <td><b>O'quv yili</b></td>
                <td>{{$t->yonalish->contract->Oquv_yili}}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>