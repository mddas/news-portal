    <section class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <!--------------------------- adz------------------------------------>
                    <div class="body-horizantal-adz ">
                        <img src="/websites/images/ime.gif">
                    </div>
                    <!-------------------------------------- new  Section of news-------------------------------->
                    <!------here all category with their news displayed start------------------------------------------>
                    
                   <div id="home_news">
              
                    </div>
                      <!------here all category with their news displayed closed------------------------------------------>
                    <!-------------------------------------- new  Section of news-------------------------------->
              
                    <!--------------------------- adz------------------------------------>
                    <div class="body-horizantal-adz ">
                        <img src="/websites/images/ime.gif">
                    </div>


                    <div class="photo-slider">
                        <div class="cat-title">
                            <div class="main-title">समाचार</div>
                            <div class="sub-title"><a href="#">सबै
                                    <i class="fas fa-list"></i></a>
                            </div>
                        </div>
                        <div class="owl-carousel owl-theme photo-slider-img">
                            <div class="item">
                                <img src="/websites/images/photo-1.jpg" alt="First slide">
                                <div class="caption">
                                    <p>तनहुँको भीमाद नगरपालिका–४ स्थित मैदीखोलामा गत असार २९ गतेको बाढीले भत्किएको पुल ।
                                        पुल भत्किएपछि स्थानीयवासीलाई आवतजावतमा समस्या भएको छ । तस्वीर: कृष्ण
                                        न्यौपाने/रासस</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="/websites/images/photo-2.jpg" alt="First slide">
                                <div class="caption">
                                    <p>तनहुँको भीमाद नगरपालिका–४ स्थित मैदीखोलामा गत असार २९ गतेको बाढीले भत्किएको पुल ।
                                        पुल भत्किएपछि स्थानीयवासीलाई आवतजावतमा समस्या भएको छ । तस्वीर: कृष्ण
                                        न्यौपाने/रासस</p>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
                <aside class="col-md-3 col-sm-3 sidebar">
                    <div class="side-links">
                        <div class="cat-title">
                            <div class="main-title">राशीफल</div>
                        </div>
                        <ul>
                            <li><a href="#"><img src="/websites/images/horoscope-1.png" width="80" height="110"
                                                             alt=""/>
          section                          मिथुन</a></li>
                            <li><a href="#"><img src="/websites/images/horoscope-4.png" width="80" height="110"
                                                             alt=""/>
                                    कर्कट</a></li>
                            <li><a href="#"><img src="/websites/images/horoscope-5.png" width="80" height="110"
                                                             alt=""/>
                                    सिंह </a></li>
                            <li><a href="#"><img src="/websites/images/horoscope-6.png" width="80" height="110"
                                                             alt=""/>
                                    कन्या</a></li>
                            <li><a href="#"><img src="/websites/images/horoscope-7.png" width="80" height="110"
                                                             alt=""/>
                                    तुला</a></li>
                            <li><a href="#"><img src="/websites/images/horoscope-8.png" width="80" height="110"
                                                             alt=""/>
                                    बृश्चिक</a></li>
                            <li><a href="#"><img src="/websites/images/horoscope-9.png" width="80" height="110"
                                                             alt=""/>
                                    धनु </a></li>
                            <li><a href="#"><img src="/websites/images/horoscope-10.png" width="80" height="110"
                                                             alt=""/>
                                    मकर </a></li>
                            <li><a href="#"><img src="/websites/images/horoscope-11.png" width="80" height="110"
                                                             alt=""/>
                                    कुम्भ </a></li>
                            <li><a href="#"><img src="/websites/images/horoscope-12.png" width="80" height="110"
                                                             alt=""/>
                                    मीन </a></li>
                        </ul>
                    </div>
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

                    <div class="interview-box">
                        <div class="client-img">
                            <a href="#"><img src="/websites/images/testimonial-1.png" alt="" class="img-fluid "></a>
                        </div>
                        <h3 class="title text-center"><a href="#">पर्सा र बारामा थप ३५ जनामा कोरोना संक्रमण पुष्टि</a>
                        </h3>
                    </div>

                    <div class="interview-box">
                        <div class="client-img">
                            <a href="#"><img src="/websites/images/testimonial-1.png" alt="" class="img-fluid "></a>
                        </div>
                        <h3 class="title text-center"><a href="#">पर्सा र बारामा थप ३५ जनामा कोरोना संक्रमण पुष्टि</a>
                        </h3>
                    </div>

                    <div class="sidebar-adz">
                        <figure>
                            <img src="/websites/images/sidead9.gif"/>
                        </figure>
                        <figure>
                            <img src="/websites/images/sidead10.gif"/>
                        </figure>
                        <figure>
                            <img src="/websites/images/sidead5.gif"/>
                        </figure>
                        <figure>
                            <img src="/websites/images/sidead6.gif"/>
                        </figure>


                    </div>

                </aside>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function(){
            $("#home_news").html("");
            $.ajax({  
                type: 'get',  
                url: 'newsajax_home', 
                //data: { "_token": "{{ csrf_token() }}", },
                success: function(menus) {
                     menus.forEach(function(menu, index, array){
                         console.log(index)
                         data = '<div class="category-style-four"><div class="cat-title"><div class="main-title"> नेपाली ब्रान्ड</div><div class="sub-title"><a href="#">सबै<i class="fas fa-list"></i></a></div></div><div class="news-listing"><div class="row">'
                             //new agax
                     //*************************************************/
                               $.ajax({  
                                    type: 'get',  
                                    url: 'newsajax_ajax_home', 
                                    data: {"id":menu['id']},
                                    success: function(news) {
                                        // console.log(news[0])
                                        data = data + '<div class="col-md-7  col-sm-12 "><div class="row">'
                                        //$.each( news, function( key, val ) {
                                            let index1 = 0
                                        for (const [key, value] of Object.entries(news)) {
                                            // console.log(index)
                                            if(index1>3)
                                            {
                                              break;
                                            }
                                           data = data+'<div'
                                           if(index1==0){
                                               data = data+' class="col-md-12">'
                                           }
                                           else{
                                               data = data+' class="col-md-4 col-sm-12">'
                                           }
                                           data = data + ' <div class="main-news-list"><a href="page.html"><figure><img src="/websites/images/testimonial-1.png" alt=""></figure><div class="abs-title"><h3 class="title">पर्सा र बारामा थप ३५ जनामा कोरोना संक्रमणपुष्टि</h3></div></a></div></div>'
                                           console.log(index1)
                                          // console.log(data)
                                           index1++
                                        }
                                        data = data+'</div></div>'
                                        data = data + ' <div class="col-md-5 col-sm-12 ">'
                                        $.each( news, function( key, val ) {
                                          if(key>=4 && key<=7){
                                                data = data+'<div class="normal-news-list"><a href="page.html"><figure><img src="/websites/images/testimonial-1.png" alt=""></figure><div class="abs-title"><h3 class="title">पर्सा र बारामा थप ३५ जनामा कोरोना संक्रमण पुष्टि</h3></div></a></div>'
                                             }
                                        });
                                        data = data + '</div>'
                                        data = data + '</div></div></div>'
                                        $("#home_news").append(data)
                                        console.log(data)                                       
                                    }
                                });
                                
                       //*************************************************/
                             //new agax closed
                             
                        });
                      
                }
                

            });
            // console.log("main")
            //           console.log(data)
            //           $( "#home_news" ).append(data);
        });
    </script>