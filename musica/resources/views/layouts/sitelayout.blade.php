
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Podcast</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="My Podcast template project">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{asset('musica_assets/styles/custm.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('musica_assets/styles/mainCssFile.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/sitecustomfilecss.css')}}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="super_container">

    <header class="header trans_400" style="background-color: rgba(0,0,0,0.6)">

      <div class="logo">
        <a href="#"><span>my</span>podcast<img src="images/xplay.png.pagespeed.ic.IEpt9ndsY3.png" alt=""></a>
      </div>
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
              <nav class="main_nav">
                <ul class="d-flex flex-row align-items-start justify-content-start">
                  <li><a href="/">Home</a></li>
                  <li><a href="{{route('about')}}">About</a></li>
                  <li><a href="{{route('contact')}}">Contact</a></li>
                  @auth
                    <li><a href="{{route('episodes')}}">Stream</a></li>
                      <li style="background-color: tomato; padding:5px 15px; border-radius: 20px"><a href="{{route('mypodcast')}}">My Podcasts</a></li>
                  @endauth
                  
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>

      <div class="header_right d-flex flex-row align-items-start justify-content-start">
        @auth
        
        <p class="pr-3 pt-1" style="color: white">
          {{ Auth::user()->name }}
        </p>
        
        <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>

        @else
          <div class="submit" style="background-color: tomato;"><a href="/register">Upload Your Poadcast</a></div>
          <div class="submit" style="background-color: white;"><a href="/login" style="color:royalblue !important;">Login</a></div>
           <div class="social">
          <ul class="d-flex flex-row align-items-start justify-content-start">
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        @endauth
        
       

        <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
      </div>
    </header>

    

    {{-- @auth
      @livewire('navigation-menu')  
    @endauth --}}

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

    @yield('main-sec')

    <footer class="footer">
      
      <div class="container">
        <div class="row footer_logo_row">
          <div class="col d-flex flex-row align-items-center justify-content-center">
            <div class="logo">
              <a href="#"><span>my</span>podcast<img src="images/xplay.png.pagespeed.ic.IEpt9ndsY3.png" alt=""></a>
            </div>
          </div>
        </div>
        <div class="row footer_content_row">

          <div class="col-lg-4">
            <div class="footer_title">Tags</div>
            <div class="footer_list">
              <div>
                <div><a href="#">music</a></div>
              </div>
              <div>
                <div><a href="#">art</a></div>
              </div>
              <div>
                <div><a href="#">technology</a></div>
              </div>
              <div>
                <div><a href="#">travel & food</a></div>
              </div>
              <div>
                <div><a href="#">viral</a></div>
              </div>
              <div>
                <div><a href="#">social media</a></div>
              </div>
              <div>
                <div><a href="#">interview</a></div>
              </div>
              <div>
                <div><a href="#">developement</a></div>
              </div>
              <div>
                <div><a href="#">success</a></div>
              </div>
              <div>
                <div><a href="#">live</a></div>
              </div>
              <div>
                <div><a href="#">did you know?</a></div>
              </div>
              <div>
                <div><a href="#">health</a></div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="footer_title">Latest Episodes</div>
            <div class="latest_container">

              <div class="latest">
                <div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
                  <a href="episode.html">
                    <div class="d-flex flex-row align-items-start justify-content-start">
                      <div class="latest_play">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                          id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714"
                          style="enable-background:new 0 0 714 714;" xml:space="preserve">
                          <g id="Play">
                            <path
                              d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z"
                              fill="#FFFFFF" />
                          </g>
                        </svg>
                      </div>
                      <div class="latest_title_content">
                        <div class="latest_title">Season 4 Episode 48 - A Step Further</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="latest_episode_info">
                  <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="#">September 24, 2018</a></li>
                    <li><a href="#">Music</a></li>
                  </ul>
                </div>
              </div>

              <div class="latest">
                <div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
                  <a href="episode.html">
                    <div class="d-flex flex-row align-items-start justify-content-start">
                      <div class="latest_play">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                          id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714"
                          style="enable-background:new 0 0 714 714;" xml:space="preserve">
                          <g id="Play">
                            <path
                              d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z"
                              fill="#FFFFFF" />
                          </g>
                        </svg>
                      </div>
                      <div class="latest_title_content">
                        <div class="latest_title">Season 4 Episode 47 - Deep in Crypto</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="latest_episode_info">
                  <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="#">September 24, 2018</a></li>
                    <li><a href="#">Music</a></li>
                  </ul>
                </div>
              </div>

              <div class="latest">
                <div class="latest_title_container d-flex flex-row align-items-start justify-content-start">
                  <a href="episode.html">
                    <div class="d-flex flex-row align-items-start justify-content-start">
                      <div class="latest_play">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                          id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 714 714"
                          style="enable-background:new 0 0 714 714;" xml:space="preserve">
                          <g id="Play">
                            <path
                              d="M641.045,318.521L102,0C73.822,0,51,22.822,51,51v612c0,28.178,22.822,51,51,51l539.045-318.521      C654.661,387.422,663,372.81,663,357C663,341.19,654.661,326.579,641.045,318.521z M153,565.386V148.614L505.665,357      L153,565.386z"
                              fill="#FFFFFF" />
                          </g>
                        </svg>
                      </div>
                      <div class="latest_title_content">
                        <div class="latest_title">Season 4 Episode 46 - Nothing is real</div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="latest_episode_info">
                  <ul class="d-flex flex-row align-items-start justify-content-start">
                    <li><a href="#">September 24, 2018</a></li>
                    <li><a href="#">Music</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="footer_title">Instagram</div>
            <div class="gallery d-flex flex-row align-items-start justify-content-start flex-wrap">

              <div class="gallery_item">
                <a class="colorbox" href="{{asset('musica_assets/images/gallery_1.jpg')}}" ><img src="{{asset('musica_assets/images/gallery_1.jpg')}}" alt=""></a>
              </div>

              <div class="gallery_item">
                <a class="colorbox" href="{{asset('musica_assets/images/gallery_2.jpg')}}"><img src="{{asset('musica_assets/images/gallery_2.jpg')}}" alt=""></a>
              </div>

              <div class="gallery_item">
                <a class="colorbox" href="{{asset('musica_assets/images/gallery_3.jpg')}}"><img src="{{asset('musica_assets/images/gallery_3.jpg')}}" alt=""></a>
              </div>

              <div class="gallery_item">
                <a class="colorbox" href="i{{asset('musica_assets/images/gallery_4.jpg')}}"><img src="{{asset('musica_assets/images/gallery_4.jpg')}}" alt=""></a>
              </div>

              <div class="gallery_item">
                <a class="colorbox" href="{{asset('musica_assets/images/gallery_5.jpg')}}"><img src="{{asset('musica_assets/images/gallery_5.jpg')}}" alt=""></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row footer_social_row">
          <div class="col">
            <div class="footer_social">
              <ul class="d-flex flex-row align-items-center justify-content-center">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-soundcloud" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        </br></br>
        Copyright &copy;
        <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i
          class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>

      </div>
    </footer>
  </div>
  <script src="{{asset('js/app.js')}}"></script>
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

<!-- Mirrored from preview.colorlib.com/theme/mypodcast/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 08:59:53 GMT -->

</html>
