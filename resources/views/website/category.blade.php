@extends('layouts.master_website') @section("home") @include('website.top-adz')
@include('website.header') @include('website.navbar')
<!-- include('website.top-adz') include('website.breaking-news')
include('website.body-horizontal-adz') include('website.top-three-news') -->

<!-- content section -->

<section class="category-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="category-page-type-1">
                    <div class="cat-title">
                        <div class="main-title">समाचार</div>
                    </div>

                    <div class="news-listing">
                        <div class="row">
                            @foreach($news as $key=>$new)
                            @php if($key>=5){
                                break;
                            }
                            @endphp
                            <div @if($key==0) class="col-md-12 col-sm-12" @else class="col-md-3 col-sm-12" @endif>
                                <div class="main-news-list">
                                    <a href="{{route('singlepage',$new->nav_name)}}">
                                        <figure>
                                            <img
                                                src="{{$new->banner_image}}"
                                                alt=""
                                            />
                                        </figure>
                                        <div class="abs-title">
                                            <h3 class="title">
                                                {{$new->caption_nepali}}
                                                
                                            </h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                          @endforeach

                        
                            <!----end---->
                        </div>
                    </div>
                 </div>
                <!----content start------------->
                <div class="category-page-type-1">
                    <div class="news-listing">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="normal-news-list">
                                    <a href="single.html">
                                        <figure>
                                            <img
                                                src="/websites/images/news-1.jpg"
                                                alt=""
                                            />
                                        </figure>
                                        <div class="abs-title">
                                            <h3 class="title">
                                                पर्सा र बारामा थप ३५ जनामा
                                                कोरोना संक्रमण पुष्टि
                                            </h3>
                                        </div>
                                        <div class="post-meta">
                                            <div>
                                                <i class="icofont-calendar"></i>
                                                बिहिबार, साउन २९, २०७७
                                            </div>
                                            <div></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="normal-news-list">
                                    <a href="single.html">
                                        <figure>
                                            <img
                                                src="/websites/images/news-1.jpg"
                                                alt=""
                                            />
                                        </figure>
                                        <div class="abs-title">
                                            <h3 class="title">
                                                पर्सा र बारामा थप ३५ जनामा
                                                कोरोना संक्रमण पुष्टि
                                            </h3>
                                        </div>
                                        <div class="post-meta">
                                            <div>
                                                <i class="icofont-calendar"></i>
                                                बिहिबार, साउन २९, २०७७
                                            </div>
                                            <div></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="category-page-type-1">
                    <div class="news-listing">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <div class="normal-news-list">
                                    <a href="single.html">
                                        <figure>
                                            <img
                                                src="/websites/images/news-1.jpg"
                                                alt=""
                                            />
                                        </figure>
                                        <div class="abs-title">
                                            <h3 class="title">
                                                पर्सा र बारामा थप ३५ जनामा
                                                कोरोना संक्रमण पुष्टि
                                            </h3>
                                        </div>
                                        <div class="post-meta">
                                            <div>
                                                <i class="icofont-calendar"></i>
                                                बिहिबार, साउन २९, २०७७
                                            </div>
                                            <div></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="normal-news-list">
                                    <a href="single.html">
                                        <figure>
                                            <img
                                                src="/websites/images/news-1.jpg"
                                                alt=""
                                            />
                                        </figure>
                                        <div class="abs-title">
                                            <h3 class="title">
                                                पर्सा र बारामा थप ३५ जनामा
                                                कोरोना संक्रमण पुष्टि
                                            </h3>
                                        </div>
                                        <div class="post-meta">
                                            <div>
                                                <i class="icofont-calendar"></i>
                                                बिहिबार, साउन २९, २०७७
                                            </div>
                                            <div></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="normal-news-list">
                                    <a href="single.html">
                                        <figure>
                                            <img
                                                src="/websites/images/news-1.jpg"
                                                alt=""
                                            />
                                        </figure>
                                        <div class="abs-title">
                                            <h3 class="title">
                                                पर्सा र बारामा थप ३५ जनामा
                                                कोरोना संक्रमण पुष्टि
                                            </h3>
                                        </div>
                                        <div class="post-meta">
                                            <div>
                                                <i class="icofont-calendar"></i>
                                                बिहिबार, साउन २९, २०७७
                                            </div>
                                            <div></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="normal-news-list">
                                    <a href="single.html">
                                        <figure>
                                            <img
                                                src="/websites/images/news-1.jpg"
                                                alt=""
                                            />
                                        </figure>
                                        <div class="abs-title">
                                            <h3 class="title">
                                                पर्सा र बारामा थप ३५ जनामा
                                                कोरोना संक्रमण पुष्टि
                                            </h3>
                                        </div>
                                        <div class="post-meta">
                                            <div>
                                                <i class="icofont-calendar"></i>
                                                बिहिबार, साउन २९, २०७७
                                            </div>
                                            <div></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="category-page-type-1">
                    <div class="news-listing">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="normal-news-list">
                                    <a href="single.html">
                                        <figure>
                                            <img
                                                src="/websites/images/news-1.jpg"
                                                alt=""
                                            />
                                        </figure>
                                        <div class="abs-title">
                                            <h3 class="title">
                                                पर्सा र बारामा थप ३५ जनामा
                                                कोरोना संक्रमण पुष्टि
                                            </h3>
                                        </div>
                                        <div class="post-meta">
                                            <div>
                                                <i class="icofont-calendar"></i>
                                                बिहिबार, साउन २९, २०७७
                                            </div>
                                            <div></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="normal-news-list">
                                    <a href="single.html">
                                        <figure>
                                            <img
                                                src="/websites/images/news-1.jpg"
                                                alt=""
                                            />
                                        </figure>
                                        <div class="abs-title">
                                            <h3 class="title">
                                                पर्सा र बारामा थप ३५ जनामा
                                                कोरोना संक्रमण पुष्टि
                                            </h3>
                                        </div>
                                        <div class="post-meta">
                                            <div>
                                                <i class="icofont-calendar"></i>
                                                बिहिबार, साउन २९, २०७७
                                            </div>
                                            <div></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="category-page-type-1">
                    <div class="news-listing">
                        <div class="row">
                            <div class="col-md-3 col-sm-12">
                                <div class="normal-news-list">
                                    <a href="single.html">
                                        <figure>
                                            <img
                                                src="/websites/images/news-1.jpg"
                                                alt=""
                                            />
                                        </figure>
                                        <div class="abs-title">
                                            <h3 class="title">
                                                पर्सा र बारामा थप ३५ जनामा
                                                कोरोना संक्रमण पुष्टि
                                            </h3>
                                        </div>
                                        <div class="post-meta">
                                            <div>
                                                <i class="icofont-calendar"></i>
                                                बिहिबार, साउन २९, २०७७
                                            </div>
                                            <div></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="normal-news-list">
                                    <a href="single.html">
                                        <figure>
                                            <img
                                                src="/websites/images/news-1.jpg"
                                                alt=""
                                            />
                                        </figure>
                                        <div class="abs-title">
                                            <h3 class="title">
                                                पर्सा र बारामा थप ३५ जनामा
                                                कोरोना संक्रमण पुष्टि
                                            </h3>
                                        </div>
                                        <div class="post-meta">
                                            <div>
                                                <i class="icofont-calendar"></i>
                                                बिहिबार, साउन २९, २०७७
                                            </div>
                                            <div></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="normal-news-list">
                                    <a href="single.html">
                                        <figure>
                                            <img
                                                src="/websites/images/news-1.jpg"
                                                alt=""
                                            />
                                        </figure>
                                        <div class="abs-title">
                                            <h3 class="title">
                                                पर्सा र बारामा थप ३५ जनामा
                                                कोरोना संक्रमण पुष्टि
                                            </h3>
                                        </div>
                                        <div class="post-meta">
                                            <div>
                                                <i class="icofont-calendar"></i>
                                                बिहिबार, साउन २९, २०७७
                                            </div>
                                            <div></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="normal-news-list">
                                    <a href="single.html">
                                        <figure>
                                            <img
                                                src="/websites/images/news-1.jpg"
                                                alt=""
                                            />
                                        </figure>
                                        <div class="abs-title">
                                            <h3 class="title">
                                                पर्सा र बारामा थप ३५ जनामा
                                                कोरोना संक्रमण पुष्टि
                                            </h3>
                                        </div>
                                        <div class="post-meta">
                                            <div>
                                                <i class="icofont-calendar"></i>
                                                बिहिबार, साउन २९, २०७७
                                            </div>
                                            <div></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--closed--->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection
