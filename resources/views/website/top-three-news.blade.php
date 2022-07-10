 <section class="breaking-news horizantal-list">
        <div class="container">
            <div class="row">
                @foreach($homenews as $key=>$three_news)
                @php if($key>2){break;} @endphp
                <div class="col-md-4 col-sm-12">
                    <a href="{{route('singlepage',$three_news->nav_name)}}">
                        <div class="box">
                            <figure><img src="/websites/images/news-1.jpg"></figure>
                            <h3 class="title">{{$three_news->caption_nepali}}</h3>
                        </div>
                    </a>
                </div>   
               @endforeach
            </div>
        </div>
    </section>
<!------top three news completed---->