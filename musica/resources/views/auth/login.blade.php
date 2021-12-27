

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Musica</title>
    <link rel="stylesheet" href="{{asset('auth_ui/styles.css')}}">
    <link rel="stylesheet" href="{{asset('musica_assets/styles/bootstrap-4.1.2/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('musica_assets/styles/custm.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('musica_assets/styles/mainCssFile.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<section class="login-sec">

    <header class="header trans_400">

      <div class="logo">
        <a href="#"><span>my</span>podcast<img src="images/xplay.png.pagespeed.ic.IEpt9ndsY3.png" alt=""></a>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
              <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="episodes.html">Episodes</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

      <div class="header_right d-flex flex-row align-items-start justify-content-start">

        <div class="submit"><a href="#">Create an Account</a></div>

        <div class="social">
          <ul class="d-flex flex-row align-items-start justify-content-start">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          </ul>
        </div>

        <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
      </div>

    </header>

    <div class="menu">
      <div class="menu_content d-flex flex-column align-items-end justify-content-start">
        <ul class="menu_nav_list text-right">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="episodes.html">Episodes</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <div class="menu_extra d-flex flex-column align-items-end justify-content-start">
          <div class="menu_submit"><a href="#">Submit your podcast</a></div>
          <div class="social">
            <ul class="d-flex flex-row align-items-start justify-content-start">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div  div class="login-container">
        <div class="login-header">
            <h4>login</h4>
            <div class="login-seperator"></div>
        </div>
        <div class="login-body">
            <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label class="login-label mt-3" for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="login-input" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label class="login-label" for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="login-input" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button class="login-button">
                    {{ __('Login') }}
                </x-jet-button>

                 @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
        </div>
    </div>  


    </section>


    <script src="{{asset('musica_assets/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('musica_assets/styles/bootstrap-4.1.2/popper.js')}}"></script>
  <script src="{{asset('musica_assets/styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
  <script src="{{asset('musica_assets/plugins/greensock/TweenMax.min.js')}}"></script>
  <script src="{{asset('musica_assets/plugins/customcolo.js')}}"></script>
  <script>eval(mod_pagespeed_E5t$q8S3wD);</script>
  <script>eval(mod_pagespeed_yIzQqQk4mU);</script>
  <script>eval(mod_pagespeed_AEu86u_i5O);</script>
  <script>eval(mod_pagespeed_$vqM02XAr6);</script>
  <script>eval(mod_pagespeed_dch6Nm9XO1);</script>
  <script>eval(mod_pagespeed_$36$KeigdZ);</script>
  <script>eval(mod_pagespeed_rSXM3F4kPH);</script>
  <script>eval(mod_pagespeed_EXrkD4rwSu);</script>
  <script src="{{asset('musica_assets/js/custom.js')}}"></script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
    integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
    data-cf-beacon='{"rayId":"6c415aa60b9314e1","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
    crossorigin="anonymous"></script>
</body>

</body>
</html>




{{-- 
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
