<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?php echo asset('public/backend/assets/plugins/font-awesome/css/font-awesome.css');?>" rel="stylesheet" type="text/css" />

    <link href="<?php echo asset('public/backend/assets/login/css/bootstrap.min.css');?>" rel="stylesheet">

    <link href="<?php echo asset('public/backend/assets/login/css/animate.css');?>" rel="stylesheet">
    <link href="<?php echo asset('public/backend/assets/css/style.css');?>" rel="stylesheet">

</head>

<body class="gray-bg" style="background-image: url('https://www.csrbox.org/news/1614081082Rural%20India.jpg'); background-size:cover; text-align: center;">

    <div class="middle-box text-center loginscreen animated fadeInDown p-5 bg-white d-inline-block w-25" style="min-width: fit-content;">
        <div>
            <div>
                <img src="<?php echo asset('public/backend/assets/img/logo.png')?>" />
            </div>
            <br>
            <h3>Department of Panchayats and Rural Development</h3>
            <!-- <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views. -->
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            <!-- </p> -->
            <hr>
            <h2 class="font-bold">Login</h2>
            <p class="mt-3">Please login using your credentials. If you require access please speak to your department head.</p>
            <form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div class="form-group">
        <input id="email" class="form-control" placeholder="Email" required="" autofocus autocomplete="username" name="email"/>
        @error('email')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Password -->
    <div class="form-group">
        <input id="password" class="form-control" placeholder="Password" required="" type="password" name="password" autocomplete="current-password" />
        @error('password')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Remember Me -->
    <div class="form-group">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
            <span class="ml-2 text-sm text-gray-600">Remember me</span>
        </label>
    </div>

    <div>
    <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
    </div>
    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                Forgot your password?
            </a>
        @endif
        
    </div>
</form>

            <hr>

            <p class="m-t"> <small>&copy; 2023 Department of Panchayats and Rural Development</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?php echo asset('public/backend/assets/login/js/jquery-3.1.1.min.js');?>"></script>
    <script src="<?php echo asset('public/backend/assets/login/js/popper.min.js');?>"></script>
    <script src="<?php echo asset('public/backend/assets/login/js/bootstrap.js');?>"></script>

</body>

</html>
