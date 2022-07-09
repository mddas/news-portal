<div class="khabari-nav" id="khabari-nav">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav id="site-navigation" class="main-navigation">
                    <button class="main-menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i
                                class="fa fa-bars"></i></button>

                    <div class="main-menu-container-collapse">
                        <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                            <!---------start menu and sub menu----->  
                            <li class="current-menu-item"><a href="/">मुख्य पृष्ठ</a></li>
                            @foreach($menus as $menu)                            
                            <li>
                                <a href="{{route('category',$menu->nav_name)}}">
                                    {{$menu->caption_nepali}}
                                </a>
                                    @if($menu->childs->where('page_type','Group')->count()>0)
                                    @php 
                                        $submenu = $menu->childs->where('page_type','Group');
                                    @endphp
                                    <ul>
                                        <!-- route('category',$sub->nav_name) -->
                                        @foreach($submenu as $sub)
                                          <li><a href="#">{{$sub->caption_nepali}}</a></li>
                                        @endforeach
                                    </ul>
                                     @endif
                                
                            </li>
                            @endforeach
                            <!-- <li>
                              <a href="#"> विविध  </a>
                                 <ul>
                                    <li><a href="#">कला/साहित्य</a></li>
                                    <li><a href="#">फोटो ग्यालरी</a></li>
                                    <li><a href="#">नेपाली चलचित्र</a></li>
                                    <li><a href="#">मनोरञ्जन </a></li>
                                    <li><a href="#">अपराध</a></li>
                                </ul>
                                
                            </li> -->
      
                            
                            <!-------end menu sub menu------------>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>