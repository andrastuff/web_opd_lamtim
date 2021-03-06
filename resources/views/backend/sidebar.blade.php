
	<div class="page-content pt-0">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md align-self-start">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				<span class="font-weight-semibold">Main sidebar</span>
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user-material">
					<div class="sidebar-user-material-body card-img-top">
						<div class="card-body text-center">
							<a href="#">
								<img src="#" class="img-fluid rounded-circle shadow-2 mb-3" width="80" height="80" alt="">
							</a>
							<h6 class="mb-0 text-white text-shadow-dark"><?php echo $data['user']["name"]; ?></h6>
							<span class="font-size-sm text-white text-shadow-dark"><?php echo $data['user']["address"]; ?></span>
						</div>
													
						<div class="sidebar-user-material-footer">
							<a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>My account</span></a>
						</div>
					</div>

					<div class="collapse" id="user-nav">
						<ul class="nav nav-sidebar">
							<li class="nav-item">
								<a href="{{url('admin/user/profile/')}}" class="nav-link">
									<i class="icon-user-plus"></i>
									<span>My profile</span>
								</a>
							</li>
							<?php if($data['user']["hak_akses"] == "super admin"){ ?>
							<li class="nav-item">
								<a href="{{url('admin/user')}}" class="nav-link">
									<i class="icon-people"></i>
									<span>Users List</span>
								</a>
							</li>
							<?php } ?>
							<li class="nav-item">
								<a onClick="signOut()" class="nav-link">
									<i class="icon-switch2"></i>
									<span>Logout</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /user menu -->

				<?php if($data['user']["hak_akses"] == "super admin"){ ?>
				<!-- Navigation -->
				<div class="card card-sidebar-mobile">
						<div class="card-body p-0">
						<ul class="nav nav-sidebar" data-nav-type="accordion">
							<li class="nav-item"><a href="{{url('admin/')}}" class="nav-link"><i class="icon-home4"></i><span>Dashboard Home</span></a></li>
							 
						</ul>
						</div>
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Main App</h6>
						<div class="header-elements">
							<div class="list-icons">
								<a class="list-icons-item" data-action="collapse"></a>
							</div>
						</div>
					</div>

					<div class="card-body p-0">
						<ul class="nav nav-sidebar" data-nav-type="accordion">
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-stack2"></i> <span>Header Menu</span></a>
								<ul class="nav nav-group-sub" data-submenu-title="Header Menu">
									<li class="nav-item"><a href="{{url('admin/headerMenu')}}" class="nav-link"> <span>List Menu</span></a></li>
									<li class="nav-item"><a href="{{url('admin/headerMenu/add')}}" class="nav-link"> <span>Add Menu</span></a></li>
								</ul>
							</li>
						 	<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-cash3"></i> <span>Banner Ads</span></a>
								<ul class="nav nav-group-sub" data-submenu-title="Banner Ads">
									<li class="nav-item"><a href="{{url('admin/bannerAds/')}}" class="nav-link"> <span>List Banner Ads</span></a></li>
									<li class="nav-item"><a href="{{url('admin/bannerAds/add/')}}" class="nav-link"> <span>Add Banner Ads</span></a></li>
								</ul>
							</li>
							<li class="nav-item" data-html="true" data-content="<i class='icon-spinner10 spinner'></i> Headlines News" data-popup="popover" data-trigger="hover"><a href="{{url('admin/headline')}}" class="nav-link"><i class="icon-spinner10 spinner"></i> <span>Headlines News</span></a></li>
							<li class="nav-item" data-html="true" data-content="<i class='icon-file-text2'></i> Upload File" data-popup="popover" data-trigger="hover"><a href="{{url('admin/upload')}}" class="nav-link"><i class="icon-file-text2"></i> <span>Upload File</span></a></li>
							<li class="nav-item" data-html="true" data-content="<i class='icon-media'></i> Media" data-popup="popover" data-trigger="hover"><a href="{{url('admin/media/')}}" class="nav-link"><i class="icon-media"></i> <span>Media</span></a></li>
							
						</ul> 
					</div>
				</div>
				<!-- /navigation -->
				<?php } ?>
				<!-- Navigation -->
				<div class="card card-sidebar-mobile">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Main Web</h6>
						<div class="header-elements">
							<div class="list-icons">
								<a class="list-icons-item" data-action="collapse"></a>
							</div>
						</div>
					</div>

					<div class="card-body p-0">
						<ul class="nav nav-sidebar" data-nav-type="accordion">
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Artikels</span></a>
								<ul class="nav nav-group-sub" data-submenu-title="Artikels">
									<li class="nav-item"><a href="{{url('admin/artikel/')}}" class="nav-link"> <span>List Artikels</span></a></li>
									<li class="nav-item"><a href="{{url('admin/artikel/add/')}}" class="nav-link"> <span>Add Artikels</span></a></li>
								</ul>
							</li>
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-list-unordered"></i> <span>Kategori</span></a>
								<ul class="nav nav-group-sub" data-submenu-title="Kategori">
									<li class="nav-item"><a href="{{url('admin/kategori/')}}" class="nav-link"> <span>List Kategori</span></a></li>
									<li class="nav-item"><a href="{{url('admin/kategori/add/')}}" class="nav-link"> <span>Add Kategori</span></a></li>
								</ul>
							</li>
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-price-tags2"></i> <span>Tags</span></a>
								<ul class="nav nav-group-sub" data-submenu-title="Tags">
									<li class="nav-item"><a href="{{url('admin/tags/')}}" class="nav-link"> <span>List Tags</span></a></li>
									<li class="nav-item"><a href="{{url('admin/tags/add/')}}" class="nav-link"> <span>Add Tag</span></a></li>
								</ul>
							</li>
							<li class="nav-item nav-item-submenu">
								<a href="#" class="nav-link"><i class="icon-book"></i> <span>Pages</span></a>
								<ul class="nav nav-group-sub" data-submenu-title="Tags">
									<li class="nav-item"><a href="{{url('admin/pages/')}}" class="nav-link"> <span>List Pages</span></a></li>
									<li class="nav-item"><a href="{{url('admin/pages/add/')}}" class="nav-link"> <span>Add Pages</span></a></li>
								</ul>
							</li>
							
						</ul> 
					</div>
				</div>
				<!-- /navigation -->
				<?php if($data['user']["hak_akses"] == "super admin"){ ?>
				<!-- Navigation -->
				<div class="card card-sidebar-mobile">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Setting</h6>
						<div class="header-elements">
							<div class="list-icons">
								<a class="list-icons-item" data-action="collapse"></a>
							</div>
						</div>
					</div>

					<div class="card-body p-0">
						<ul class="nav nav-sidebar" data-nav-type="accordion">
							<li class="nav-item" data-html="true" data-content="<i class='icon-puzzle2'></i> Content Styling" data-popup="popover" data-trigger="hover"><a href="{{url('admin/styling')}}" class="nav-link"><i class="icon-puzzle2"></i> <span>Content Styling</span></a></li> 
							<li class="nav-item" data-html="true" data-content="<i class='icon-cog3'></i> Global Setting" data-popup="popover" data-trigger="hover"><a href="{{url('admin/setting')}}" class="nav-link"><i class="icon-cog3"></i> <span>Website Setting</span></a></li>
						</ul> 
					</div>
				</div>
				<!-- /navigation -->
				<?php } ?>
			</div>
			<!-- /sidebar content -->
			
		</div>	
			
			 
				
					
			 
			