<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login talaba</title>
</head>

<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="/img/user.svg" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="get" action="{{route('check')}}">
                @csrf
                <input type="text" id="login" class="fadeIn second" name="passport" placeholder="Passport seriya raqami">
                {!!Captcha::img();!!}
                <input type="text" id="password" class="fadeIn third" name="captcha" placeholder="Captcha"><br>
                @if (session()->has('captchax'))
                <div class="alert alert-danger mr-5 ml-5">{{ session()->get('captchax') }}</div>
                @endif
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>
        </div>
    </div>
</body>

</html>