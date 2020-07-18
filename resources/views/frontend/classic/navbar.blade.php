 <!-- Header Area Start -->
        <header class="header-portion">
            <!-- Top bar start -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="top-bar-left">
                                <p><small id="time" class="p-r-10"></small>| <span class="text-yellow">Have any question? {{$data['telp']}}</span></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="top-bar-right">
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top bar end -->

            <!-- Middle bar start -->
            <div class="middle-bar">
                <div class="container">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <a class="brand-logo" href="{{url('/')}}">
                            <img src="{{$data['logo']}}" alt="site logo" />
                        </a>
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="middle-bar-cta small">
                            <div class="cta-area">
                                <div class="cta-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="logo-right-text">
                                    <span>Mail us</span>
                                    <p>{{$data['email']}}</p>
                                </div>
                            </div>
                            <div class="cta-area">
                                <div class="cta-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="logo-right-text">
                                    <span>Address</span>
									<p>{{$data['alamat']}}</p>
                                    
                                </div>
                            </div> 
							
                        </div>
                    </div>
                </div>
            </div>
            <!-- Middle bar end -->

            <!-- Main navigation start -->
            <div class="main-navigation animated fadeInDown sticky-header">
                <div class="container">
                    <div class="main-navigation-content">
                        <div class="row">
                            <div class="col-md-10 col-sm-10">
                                <nav class="navbar-default">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> 
                                            <i class="fa fa-bars"></i> 
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="navbar-menu">
                                        <ul class="nav navbar-nav mobile-menu">
                                            <li><a href="{{url('/')}}"><i style="font-size: 18px;margin-top: -0; text-align: center; line-height: 0;" class="fa fa-home m-r-10"></i>HOME</a></li>
                                           <?php echo $data['menu']; ?>

                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-2 col-sm-1 hidden-sm hidden-xs small">
                                <ul>
                                    <li>
                                        <a href="//tulangbawangkab.go.id" class="quote hvr-buzz-out" style="font-size: 13px;">Portal Tulang Bawang</a>
                                    </li>
                                </ul>                    
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main navigation end -->
        </header>
        <!-- Header Area End --> 
	<script>
	function getUrlVars() {
		var vars = {};
		var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
			vars[key] = value.replace(/\+/g, ' ').replace(/\#/g, ' ');
		});
		return vars;
	}
	</script>			