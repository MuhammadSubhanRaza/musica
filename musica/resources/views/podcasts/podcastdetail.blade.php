@extends('layouts/sitelayout')

@section('main-sec')


<section class="sec-podcast-details">
    <div class="podcast-detail-header">
        <div class="container">
            <div class="row pt-5">
                <div class="col-md-2 text-right pt-5">
                    <img src="{{asset('musica_assets/images/blog_1.jpg')}}" alt="">
                </div>
                <div class="col-md-7 pt-5">
                    <div class="detail-header-content">
                        <h1>The Future of Humanity with Elon Musk</h1>
                        <p>This is for description</p>
                        <br>
                        <br>
                        <span>(55) Comments <i class="fa fa-comment"></i></span>
                        <span class="ml-4">(120) Likes <i class="fa fa-heart"></i></span>
                        <br><br>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <br><br>
                    <div class="details-user-follow d-flex">
                            <img src="{{Auth::user()->profile_photo_url}}" alt="">
                            <div class="pl-3">
                                <h2>Muhammad Subhan Raza</h2>
                                <button>Follow <i class="fa fa-signal"></i></button>
                            </div>
                        </div>
                </div>
                
            </div>
        </div>
    </div>


    <div class="podcast-detail-body p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="post-comment-block">
                        
                        <form action="">
                        <table>
                            <tr>
                                <td>
                                    <img src="{{Auth::user()->profile_photo_url}}" alt="">
                                </td>
                                <td>
                                    <input type="text" placeholder="Write a comment">
                                </td>
                                <td>
                                    <button type="submit"><i class="fa fa-send"></i></button>
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>

                    <div class="post-visitor-comment-block">
                        <table>
                          <tr>
                                <td>
                                    <img src="{{Auth::user()->profile_photo_url}}" alt="">
                                </td>
                                <td>
                                    <span class="p-0 m-0">Muhammad Subhan Raza</span>
                                    <p class="p-0 m-0">this is a nice podcast</p>
                                </td>
                                <td>
                                    <span>02/02/2021</span>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="sec-related-post">
                        <span>Recent Posts</span>
                        <a href="#" class="text-right d-block">View All</a>

                        <div class="related-post-itme-block">
                            <table>
                                <tr>
                                    <td style="width: 80px">
                                        <img src="{{asset('musica_assets/images/blog_1.jpg')}}" alt="">
                                    </td>
                                    <td>
                                        <p>New Track</p>
                                        <a href="#">Go to the Post</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
