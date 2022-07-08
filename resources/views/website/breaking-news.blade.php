@if(isset($top_first_news))
    <section class="breaking-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!----top_three_news---->
                    <a href="page.html">
                        <div class="box">
                            <h2 class="breaking-news-title">{{$top_first_news->caption_nepali ?? ''}}</h2>
                            <figure><img src="{{$top_first_news->banner_image}}"></figure>
                            <div class="description"><p>{{$top_first_news->short_content_nepali ?? ''}}</p></div>
                        </div>
                    </a>

                    <a href="page.html">
                        <div class="box">
                            <h2 class="breaking-news-title">{{$top_first_news->caption_nepali ?? ''}}</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endif