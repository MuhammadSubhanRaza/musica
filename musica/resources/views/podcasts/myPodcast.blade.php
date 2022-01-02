@extends('layouts/sitelayout')

@section('main-sec')


  <div class="home" style="background-position:center;height:300px !important;background-image:url({{asset('musica_assets/images/newback4.jpg')}})">
      
      <div class="home_container d-flex flex-column align-items-center justify-content-center">
        <div class="home_content">
          <div class="home_title">
            <h1>My Podcasts</h1>
          </div>
        </div>
      </div>
    </div>


    <div class="episodes">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="season_links text-center">
              {{-- <ul class="d-flex flex-row align-items-start justify-content-center flex-wrap">
                <li class="item_filter_btn" data-filter="*">All Seasons</li>
                <li class="item_filter_btn" data-filter=".s1">Season 1</li>
                <li class="item_filter_btn" data-filter=".s2">Season 2</li>
                <li class="item_filter_btn" data-filter=".s3">Season 3</li>
              </ul> --}}



              
              
            </div>
          </div>
        </div>
        <div class="row episodes_row">

          <div class="col-lg-3">
            <div class="sidebar">

              <div class="sidebar_search">
                <div class="sidebar_title">Search</div>
                <form action="#" class="search_form" id="search_form">
                  <input type="text" class="search_input" placeholder="Search here" required>
                  <button class="search_button"><img src="{{asset('musica_assets/images/search.png')}}" alt=""></button>
                </form>
              </div>

              <div class="sidebar_list">
                <div class="sidebar_title">Categories</div>
                <ul>
                  <li><a href="#">Travel</a></li>
                  <li><a href="#">Music</a></li>
                  <li><a href="#">Lifestyle</a></li>
                  <li><a href="#">Social Media</a></li>
                  <li><a href="#">Art</a></li>
                  <li><a href="#">Audiobooks</a></li>
                  <li><a href="#">Documentaries</a></li>
                </ul>
              </div>

              <div class="sidebar_tags">
                <div class="sidebar_title">Tags</div>
                <div class="tags">
                  <ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
                    <li><a href="#">music</a></li>
                    <li><a href="#">art</a></li>
                    <li><a href="#">technology</a></li>
                    <li><a href="#">travel & food</a></li>
                    <li><a href="#">viral</a></li>
                    <li><a href="#">interview</a></li>
                    <li><a href="#">social media</a></li>
                    <li><a href="#">development</a></li>
                    <li><a href="#">success</a></li>
                    <li><a href="#">did you know?</a></li>
                    <li><a href="#">live</a></li>
                  </ul>
                </div>
              </div>

              <div class="sidebar_archive">
                <div class="sidebar_title">Archive</div>
                <div class="dropdown">
                  <ul>
                    <li class="dropdown_selected d-flex flex-row align-items-center justify-content-start">
                      <span>September 2018</span><i class="fa fa-chevron-down ml-auto" aria-hidden="true"></i>
                      <ul>
                        <li><a href="#">August 2018</a></li>
                        <li><a href="#">July 2018</a></li>
                        <li><a href="#">June 2018</a></li>
                        <li><a href="#">May 2018</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-9 episodes_col">
              <div class="addnewpod-btn-holder">
                  <div class="row">
                      <div class="col-md-6 text-left pl-5">
                          <i class="fa fa-microphone fa-4x  addnewpodcast-ind-icon"></i>
                          <h1 class="d-inline">Add New Podcast</h1>
                      </div>
                      <div class="col-md-6 text-right pr-5">
                        <a href="#" class="btn-addnewpodcast" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                          <i class="fa fa-upload"></i> Upload New Track</a>
                      </div>
                  </div>
              </div>
              <br><br>
            <div class="episodes_container">

              <div class="episode d-flex flex-row align-items-start justify-content-start s1">
                <div>
                  <div class="episode_image">
                    <img src="{{asset('musica_assets/images/episode_1.jpg')}}" alt="">
                    <div class="tags">
                      <ul class="d-flex flex-row align-items-start justify-content-start">
                        <li><a href="#">music</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="episode_content">
                  <div class="episode_name"><a href="episode.html">Audio - Lorem ipsum dolor sit amet consectetur</a>
                  </div>
                  <div class="episode_date"><a href="#">24 September, 2018</a></div>
                  <div class="show_info d-flex flex-row align-items-start justify-content-start">
                    <div class="show_fav d-flex flex-row align-items-center justify-content-start">
                      <div class="show_fav_icon show_info_icon"><img class="svg" src="{{asset('musica_assets/images/heart.svg')}}" alt=""></div>
                      <div class="show_fav_count">2371</div>
                    </div>
                    <div class="show_comments">
                      <a href="#">
                        <div class="d-flex flex-row align-items-center justify-content-start">
                          <div class="show_comments_icon show_info_icon"><img class="svg" src="{{asset('musica_assets/images/bubble.svg')}}"
                              alt=""></div>
                          <div class="show_comments_count">88 Comments</div>
                        </div>
                      </a>
                    </div>
                  </div>

                  <div class="single_player_container">
                    <div class="single_player d-flex flex-row align-items-center justify-content-start">
                      <div id="jplayer_1" class="jp-jplayer"></div>
                      <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
                        <div class="jp-type-single">
                          <div class="player_controls">
                            <div class="jp-gui jp-interface d-flex flex-row align-items-center justify-content-start">
                              <div
                                class="jp-controls-holder time_controls d-flex flex-row align-items-center justify-content-between">
                                <div>
                                  <div class="jp-controls-holder play_button ml-auto">
                                    <button class="jp-play" tabindex="0"></button>
                                  </div>
                                </div>
                                <div>
                                  <div class="jp-progress">
                                    <div class="jp-seek-bar">
                                      <div class="jp-play-bar"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="jp-volume-controls d-flex flex-row align-items-center justify-content-between ml-auto">
                                <div class="d-flex flex-row align-items-center justify-content-start">
                                  <button class="jp-mute" tabindex="0"></button>
                                </div>
                                <div class="d-flex flex-row align-items-center justify-content-start">
                                  <div class="jp-volume-bar">
                                    <div class="jp-volume-bar-value"></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="row page_nav_row">
          <div class="col">
            <div class="page_nav d-flex flex-row align-items-center justify-content-center">
              <ul class="d-flex flex-row">
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>




    <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" style="background-color: tomato !important" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="add-new-pod-modal-outter">
    <h1>Upload Your Track</h1>
    <p>upload mp3 file along with the title and description</p>
  </div>
  
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Upload Track</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form method="POST" action="" enctype="multipart/form-data">
            @csrf
            <input type="text" class="form-control" name="title" placeholder="Title">
            <input type="text" class="form-control mt-3" name="description" placeholder="Description">
            <label class="mt-3">Upload Audio File</label>
            <input type="file" class="form-control mt-2" name="title" placeholder="Title">
            <div class="pt-4 pb-4 text-right">
                <button type="button" class="btn-add-new-podcast-modal-cancel" data-dismiss="modal">Close</button>
                <button type="submit" class="btn-add-new-podcast-modal-save">Save changes</button>
            </div>
        
          </form>
      </div>
    </div>
  </div>
</div>

@endsection