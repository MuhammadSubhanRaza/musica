

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

        <div class="submit"><a href="#">Login to Account</a></div>

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

    <section class="sec-reg p-5">
        
        <div class="container pt-5">
            
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="reg-container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="reg-left">
                                    <img src="{{asset('images/reg4.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="reg-right p-5">

                                    <h4>Lets Start</h4>
                                    <div class="h-seprator"></div>
                                     <x-jet-validation-errors class="mb-4" />

                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="mt-2">
                                            <x-jet-label class="reg-input-label" for="name" value="{{ __('Name') }}" />
                                            <x-jet-input id="name" class="reg-inputs" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                        </div>

                                        <div class="mt-2">
                                            <x-jet-label class="reg-input-label" for="email" value="{{ __('Email') }}" />
                                            <x-jet-input id="email" class="reg-inputs" type="email" name="email" :value="old('email')" required />
                                        </div>

                                        <div class="mt-2">
                                            <x-jet-label class="reg-input-label" for="password" value="{{ __('Password') }}" />
                                            <x-jet-input id="password" class="reg-inputs" type="password" name="password" required autocomplete="new-password" />
                                        </div>

                                        <div class="mt-2">
                                            <x-jet-label class="reg-input-label" for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                            <x-jet-input id="password_confirmation" class="reg-inputs" type="password" name="password_confirmation" required autocomplete="new-password" />
                                        </div>

                                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                            <div class="mt-4">
                                                <x-jet-label for="terms">
                                                    <div class="flex items-center">
                                                        <x-jet-checkbox name="terms" id="terms"/>

                                                        <div class="ml-2">
                                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                            ]) !!}
                                                        </div>
                                                    </div>
                                                </x-jet-label>
                                            </div>
                                        @endif

                                        <div class="flex items-center justify-end mt-4">
                                            <x-jet-button class="reg-button">
                                                {{ __('Register') }}
                                            </x-jet-button>
                                            
                                            <a class="underline pt-3 d-flex text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>


        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form> --}}

