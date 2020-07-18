    <!-- Top Bar -->
			<div id="topBar" class="dark">
				<div class="container">

					<!-- right -->
					<ul class="top-links list-inline float-right">
						<li class="text-welcome hidden-xs-down">Welcome to <strong>{{$data['judul']}}!</strong></li>
						<li></li>
						<li class="hidden-xs-down"><a class="bg-primary" href="http://lampungtimurkab.go.id/">PORTAL LAMPUNG TIMUR</a></li>
						
					</ul>

					<!-- left -->
					<ul class="top-links list-inline pt-5">
						<li class="hidden-xs-down"><small id="time"></small> &nbsp;</li>
						<li></li>
					</ul>

				</div>
			</div>
			<!-- /Top Bar -->
			
			
			<div id="header" class="navbar-toggleable-md sticky shadow-after-3 clearfix">

				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						


						<!-- Logo -->
						<a class="logo float-left" href="{{url('/')}}">
							<img src="{{$data['logo']}}" alt="" />
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse collapse float-right nav-main-collapse submenu-dark">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="active"> <a href="{{url('/')}}">HOME</a> </li>
									<?php echo $data['menu']; ?>
									

									<!-- 
										MENU ANIMATIONS
											.nav-animate-fadeIn
											.nav-animate-fadeInUp
											.nav-animate-bounceIn
											.nav-animate-bounceInUp
											.nav-animate-flipInX
											.nav-animate-flipInY
											.nav-animate-zoomIn
											.nav-animate-slideInUp

											.nav-hover-animate 		= animate text on hover

											.hover-animate-bounceIn = bounceIn effect on mouse over of main menu
									-->
									
								</ul>

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>

	
			