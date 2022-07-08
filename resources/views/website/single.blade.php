  @extends('layouts.master_website') @section("home") @include('website.top-adz')
@include('website.header') @include('website.navbar')
<!-- include('website.top-adz') include('website.breaking-news')
include('website.body-horizontal-adz') include('website.top-three-news') -->

<!-- content section -->
  <section class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <div class="page-detail">
                        <div class="cat-title">
                            <div class="main-title">{{$singlenews->caption_nepali}}</div>

                        </div>
                        
                        <!-- <div class="post-meta">
                            <div><i class="icofont-user-alt-4"></i> गोकर्णप्रसाद उपाध्याय  <i class="icofont-calendar"></i> बिहिबार, साउन २९, २०७७</div>
                        </div> -->

                        <figure><img src="{{$singlenews->banner_image}}" alt=""></figure>
                        <div class="inner-page">
                            <div class="description">
                                <p>
                                    {{$singlenews->long_content_nepali}}
                                </p>

                            </div>
                        </div>

                    </div>

                    <div class="page-detail">
                        <div class="cat-title">
                            <div class="main-title">प्रतिक्रिया दिनुहोस्</div>
                        </div>

                        <div class="comment">
                        </div>
                    </div>


                    <div class="page-detail">
                        <div class="cat-title">
                            <div class="main-title">संबन्धित</div>
                        </div>

                        <div class="category-page-type-1">

                            <div class="news-listing">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 ">
                                        <div class="normal-news-list">
                                            <a href="#">
                                                <figure><img src="/websites/images/news-1.jpg" alt=""></figure>
                                                <div class="abs-title">
                                                    <h3 class="title">पर्सा र बारामा थप ३५ जनामा कोरोना संक्रमण
                                                        पुष्टि</h3>
                                                </div>
                                                <div class="post-meta">
                                                    <div><i class="icofont-calendar"></i> बिहिबार, साउन २९, २०७७</div>
                                                    <div></div>
                                                </div>

                                            </a>
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-sm-12 ">
                                        <div class="normal-news-list">
                                            <a href="#">
                                                <figure><img src="/websites/images/news-1.jpg" alt=""></figure>
                                                <div class="abs-title">
                                                    <h3 class="title">पर्सा र बारामा थप ३५ जनामा कोरोना संक्रमण
                                                        पुष्टि</h3>
                                                </div>
                                                <div class="post-meta">
                                                    <div><i class="icofont-calendar"></i> बिहिबार, साउन २९, २०७७</div>
                                                    <div></div>
                                                </div>

                                            </a>
                                        </div>

                                    </div>
                                    <div class="col-md-4 col-sm-12 ">
                                        <div class="normal-news-list">
                                            <a href="#">
                                                <figure><img src="/websites/images/news-1.jpg" alt=""></figure>
                                                <div class="abs-title">
                                                    <h3 class="title">पर्सा र बारामा थप ३५ जनामा कोरोना संक्रमण
                                                        पुष्टि</h3>
                                                </div>
                                                <div class="post-meta">
                                                    <div><i class="icofont-calendar"></i> बिहिबार, साउन २९, २०७७</div>
                                                    <div></div>
                                                </div>

                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <aside class="col-md-3 col-sm-12 sidebar">
                  <!--  <div class="side-links">
                        <div class="cat-title">
                            <div class="main-title">संबन्धित लिन्क </div>
                        </div>
                        <ul>
                            <li><a href="https://www.onlinekhabar.com/"><i class="icofont-simple-right"></i> Online Khabar</a></li>
                            <li><a href="https://www.setopati.com/"><i class="icofont-simple-right"></i> Seto Pati</a></li>
                            <li><a href="https://ratopati.com/"><i class="icofont-simple-right"></i>  Rato Pati</a></li>
                            <li><a href="https://www.reportersnepal.com/"><i class="icofont-simple-right"></i> Reporters Nepal</a></li>
                            <li><a href="https://www.nepalipatra.com/"><i class="icofont-simple-right"></i> Nepali Patra</a></li>
                            <li><a href="https://nagariknews.nagariknetwork.com/"><i class="icofont-simple-right"></i> Nagarik News</a></li>
                            <li><a href="http://annapurnapost.com/"><i class="icofont-simple-right"></i> Annapurna Post</a></li>
                            <li><a href="https://nagariknews.nagariknetwork.com/"><i class="icofont-simple-right"></i> Nagarik News</a></li>
                        </ul>
                    </div>-->
                    <div class="sidebar-adz">
                        <figure>
                            <img src="/websites/images/sidead3.gif"/>
                        </figure>
                        <figure>
                            <img src="/websites/images/sidead4.gif"/>
                        </figure>
                        <figure>
                            <img src="/websites/images/sidead5.gif"/>
                        </figure>
                        <figure>
                            <img src="/websites/images/sidead6.gif"/>
                        </figure>
                        <figure>
                            <img src="/websites/images/sidead7.gif"/>
                        </figure>


                    </div>


                </aside>
            </div>
    </section>
    @endsection