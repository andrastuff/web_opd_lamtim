@extends('frontend.classic.body')
@section('classic.content')
 <!-- Banner section start -->
        <section class="carousel fade-carousel slide" data-ride="carousel" data-interval="3000" id="bs-carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
			<?php $n = 0; foreach($data['slider'] as $item){ 
				 if($data['slider'][0]->id == $item->id){ $css = 'active'; }else{ $css = ''; };
				?>
                <li data-target="#bs-carousel" data-slide-to="<?php echo $n++; ?>" class="<?php echo $css; ?>"></li>
            <?php } ?>
            </ol>
      
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <!-- Slide 1 -->
				<?php foreach($data['slider'] as $item){ 
				 if($data['slider'][0]->id == $item->id){ $css = 'active'; }else{ $css = ''; };
				?>
                <div class="item slides <?php echo $css; ?>">
                    <!-- Overlay -->
                    <div class="overlay"></div>
                    <div class="slide-1" style="background-image: url(<?php echo $item->img; ?>);"></div>
                    <div class="hero">
                        <div>
                            <h1>
                               <span class="text-yellow">{{$data['instansi']}}</span>
							   <p>Kabupaten Tulang Bawang</p>
                            </h1>        
                             
                        </div>
                         
                    </div>
                </div>
				<?php } ?>
                
                 
            </div>        
        </section>
        <!-- Banner section end --> 
		
		<section class="p-t-100 p-b-70 section-white">
            <div class="container">
                <div class="row">
                   <div class="col-md-9">
                        <div class="row">
							<div class="col-md-12">
                            <div class="widget-title">
                                <h3>Berita Terbaru</h3>
                                <span class="divider"></span>
                            </div>
                            </div>
							<span id="recent"><div class="loader text-center"></div></span>
                            
						    <div class="col-md-12 popular-tags text-center"><a class="" href="{{url('news/')}}/">Selengkapnya</a></div>
						</div>
						<div class="row p-t-50">
						<?php if(isset($data['banner']['unsd'])){ ?>
						<div class="col-md-4">
							<div class="blog-area">
								<div class="blog-img">
									<a href="<?php echo $data['banner']['unsd']['img']; ?>" data-fancybox>
										<img class="img-thumbnail" src="<?php echo $data['banner']['unsd']['img']; ?>" alt="blog-image">
									</a>
								</div>
							</div>
						</div>
						<?php } ?>
						<?php if(isset($data['banner']['unsmp'])){ ?>
						<div class="col-md-4">
							<div class="blog-area">
								<div class="blog-img">
									<a href="<?php echo $data['banner']['unsmp']['img']; ?>" data-fancybox>
										<img src="<?php echo $data['banner']['unsmp']['img']; ?>" alt="blog-image">
									</a>
								</div>
							</div>
						</div>
						<?php } ?>
						<?php if(isset($data['banner']['unsma'])){ ?>
						<div class="col-md-4">
							<div class="blog-area">
								<div class="blog-img">
									<a href="<?php echo $data['banner']['unsma']['img']; ?>" data-fancybox>
										<img src="<?php echo $data['banner']['unsma']['img']; ?>" alt="blog-image">
									</a>
								</div>
							</div>
						</div>
						<?php } ?>
						</div>
					</div>
                   <div class="col-md-3">
                        <div class="right-sidebar">
                            <div class="blog-widget">
								
								<div class="member-img">
									<img src="{{$data['foto_kepala']}}" alt="Team">
								</div>
								 <h6 class="p-t-10 text-center widget-title">{{$data['nama_kepala']}}</h6>
                            </div>
                            <div class="blog-widget recent-posts">
                                <div class="widget-title">
                                    <h3>Pengumuman</h3>
                                    <span class="divider"></span>
                                </div>
								<span id="pengumuman"><div class="loader text-center"></div></span>
                                
								<div class="popular-tags text-center"><a class="" href="{{url('news/kategori/pengumuman')}}/">Selengkapnya</a></div>
                            </div>
                            <div class="widget-area">
                                <div class="widget-title">
                                    <h3>Download Publikasi</h3>
                                    <span class="divider"></span>
                                </div>
								<span id="files"><div class="loader text-center"></div></span>
                               
                            </div>
							<div class="widget-area p-all-0">
                                <div class="widget-title">
                                    <h3>Sosialisasi</h3>
                                    <span class="divider"></span>
                                </div>
								<?php if(isset($data['banner']['sidebar'])){ ?>
								<div class="member-img">
									<img src="<?php echo $data['banner']['sidebar']['img']; ?>" alt="Team">
								</div>
								<?php } ?>
                                 
                            </div>
						</div>
                    </div>  
				</div>
            </div>
        </section>
		
		<section class="free-quote p-b-20 p-t-20">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                        <div class="quote-form">
                          <div class="row">
							<div class="col-md-12">
								<div class="row m-t-20">
									<div class="col-sm-6">
										<div class="speciality">
											<a href="http://tulangbawangkab.go.id" target="_blank"><div class="media">
												<div class="media-left">
													<i class="fa fa-university" aria-hidden="true"></i>
												</div>
												<div class="media-body p-t-5">
													<h5 class="media-heading">PORTAL KAB.</h5>
													
												</div>
											</div>
											</a>
										</div>
									</div>
									
									<div class="col-sm-6">
										<div class="speciality">
											<a href="http://lpse.tulangbawangkab.go.id/eproc4" target="_blank"><div class="media">
												<div class="media-left">
													<i class="fa fa-bullhorn" aria-hidden="true"></i>
												</div>
												<div class="media-body p-t-5">
													<h4 class="media-heading">LPSE</h4>
													
												</div>
											</div></a>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="speciality">
											<a href="http://sitadi.tulangbawangkab.go.id/" target="_blank"><div class="media">
												<div class="media-left">
													<i class="fa fa-users" aria-hidden="true"></i>
												</div>
												<div class="media-body p-t-5">
													<h4 class="media-heading">SITADI</h4>
													
												</div>
											</div></a>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="speciality">
										<a href="http://www.jdih.tulangbawangkab.go.id/" target="_blank">
											<div class="media">
												<div class="media-left">
												   <i class="fa fa-gavel" aria-hidden="true"></i>
												</div>
												<div class="media-body p-t-5">
													<h4 class="media-heading">JDIH</h4>
													
												</div>
											</div>
										</a>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="speciality">
											<a href="https://www.lapor.go.id/" target="_blank"><div class="media">
												<div class="media-left">
													<i class="fa fa-user-secret" aria-hidden="true"></i>
												</div>
												<div class="media-body p-t-5">
													<h4 class="media-heading">LAPOR!</h4>
													
												</div>
											</div></a>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="speciality">
										    <a href="https://www.aduankonten.id/" target="_blank">
											<div class="media">
												<div class="media-left">
													<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
												</div>
												<div class="media-body p-t-5">
													<h4 class="media-heading">ADUAN</h4>
													
												</div>
											</div>
											</a>
										</div>
									</div>
									<!--ini adalah paragraf -->
								</div>
							</div>
                        </div> 
						</div>
                    </div>
                </div>
            </div>
        </section>
		
		<section class="p-t-70 p-b-50 section-light-grey">
		<div class="container">
                <div class="row recent-posts">
					<div class="col-md-4">
					 <div class="widget-title">
                                <h3>Terpopular</h3>
                                <span class="divider"></span>
                     </div>
					 <span id="popular"><div class="loader text-center"></div></span>
					 
					 <div class="popular-tags text-center"><a class="" href="{{url('news?type=popular')}}">Selengkapnya</a></div>
					</div>
					<div class="col-md-4">
					 <div class="widget-title">
                                <h3>Umum</h3>
                                <span class="divider"></span>
					 </div>
					 <span id="umum"><div class="loader text-center"></div></span>
					  
                     <div class="popular-tags text-center"><a class="" href="{{url('news/kategori/umum')}}">Selengkapnya</a></div>
					</div>
					<div class="col-md-4">
					 <div class="widget-title">
                                <h3>Pemerintahan</h3>
                                <span class="divider"></span>
					 </div>
					 <span id="pemerintahan"><div class="loader text-center"></div></span>
					 
                    <div class="popular-tags text-center"><a class="" href="{{url('news/kategori/pemerintahan')}}">Selengkapnya</a></div>
					</div>
				</div>
        </div>
		</section>
        <!-- Recent Projects section Start -->
        <section class="projects section-light-grey p-t-0 p-b-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Gallery Kegiatan</h2>
							 
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="owl-carousel owl-theme" id="recent-projects">
                    </div>
                </div>
            </div>
        </section>
        <!-- Recent Projects section End -->
		 <script src="{{url('assets/frontend')}}/classic/js/jquery.isotope.min.js"></script>
		 
<script>
	function loadRecentpost(){
		$.ajax({
					data: {"render" : "home"},
					url: ServeUrl+"/news/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data, function(k,v){
							
											content +='<div class="col-md-4">';
											content +='<div class="blog-area">';
												content +='<div class="blog-img">';
													content +='<a href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'">';
														content +='<img src="'+v.url_img+'" alt="blog-image">';
													content +='</a>';
												content +='</div>';
												content +='<div class="blog-head">';
													content +='<h3>';
														content +='<a href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'">'+v.judul_artikel+'</a>';
													content +='</h3>';
												content +='</div>';
												content +='<div class="blog-content">';
													content += v.isi_artikel;
												content +='</div>';
												content +='<div class="blog-meta">';
													content +='<p><i class="fa fa-user"></i> By Admin</p>';
													content +='<p><i class="fa fa-calendar"></i>'+v.tanggal+'</p>';
												content +='</div>';
											content +='</div>';
											content +='</div>';
							
							});
							
							$('#recent').html(content);
							
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                })
	
	};
	loadRecentpost();
	function loadSidebar(){
		$.ajax({
					data: {"render" : "home"},
					url: ServeUrl+"/news/"+Instansi+"/kategori/pengumuman/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data, function(k,v){
							
											content +='<div class="media">';
												content +='<div class="media-body">';
													content +='<h6 class="media-heading"><a href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'">'+v.judul_artikel+'</a></h6>';
													content +='<small>'+v.tanggal+'</small>';
												content +='</div>';
											content +='</div> ';
								
							
							});
							
							$('#pengumuman').html(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                });
				
		$.ajax({
					data: {"render" : "sidebar"},
					url: ServeUrl+"/publikasi/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data.slice(0,3), function(k,v){
							
								content +='<div class="broucher-item"> ';
                                    content +='<a href="{{url("/informasi/publikasi/")}}/'+v.id+'">'+v.judul_file+'<span class="fa fa-download" aria-hidden="true"></span></a> ';
                                    content += v.icon;
                                content +='</div> ';
							
							});
							
							$('#files').html(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
        })

	};
	loadSidebar();
	
	function loadPopular(){
		$.ajax({
					data: {"render" : "bottom", "type" : "popular"},
					url: ServeUrl+"/news/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data, function(k,v){

									content +='<div class="media">';
									 content +='<div class="media-left media-top">';
										content +='<img src="'+v.url_img+'" class="media-object">';
									 content +='</div>';
									 content +='<div class="media-body">';
										content +='<h6 class="media-heading">';
											content +='<a href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'">'+v.judul_artikel+'</a>';
										content +='</h6>';
											content +='<small>'+v.tanggal+'</small>';
									 content +='</div>';
								  content +='</div>';
							});
							
							$('#popular').html(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                })
	
	};
	loadPopular();
	
	function loadKategoriPost(){
		$.ajax({
					data: {"render" : "bottom"},
					url: ServeUrl+"/news/"+Instansi+"/kategori/umum/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data, function(k,v){

									content +='<div class="media">';
									 content +='<div class="media-left media-top">';
										content +='<img src="'+v.url_img+'" class="media-object">';
									 content +='</div>';
									 content +='<div class="media-body">';
										content +='<h6 class="media-heading">';
											content +='<a href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'">'+v.judul_artikel+'</a>';
										content +='</h6>';
											content +='<small>'+v.tanggal+'</small>';
									 content +='</div>';
								  content +='</div>';
							});
							
							$('#umum').html(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                })
		
		$.ajax({
					data: {"render" : "bottom"},
					url: ServeUrl+"/news/"+Instansi+"/kategori/pemerintahan/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data, function(k,v){

									content +='<div class="media">';
									 content +='<div class="media-left media-top">';
										content +='<img src="'+v.url_img+'" class="media-object">';
									 content +='</div>';
									 content +='<div class="media-body">';
										content +='<h6 class="media-heading">';
											content +='<a href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'">'+v.judul_artikel+'</a>';
										content +='</h6>';
											content +='<small>'+v.tanggal+'</small>';
									 content +='</div>';
								  content +='</div>';
							});
							
							$('#pemerintahan').html(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                })
	
	};
	loadKategoriPost();
	function loadGallery(){
		
		$.ajax({
					data: {"render" : "home"},
					url: ServeUrl+"/gallery/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = ''; 
							$.each(response.responseJSON.data.data, function(k,v){
							if(v.judul_img == null){v.judul_img = ''}else{v.judul_img = v.judul_img;}
							if(v.type == 'image'){
								 content +='<div class="item">';
									content +='<div class="project-area">';
										content +='<a data-fancybox href="'+v.img_link+'"><img src="'+v.img_link+'" alt="image" style="height: 190px"></a>';
										content +='<div class="hover-box">';
											content +='<h4>';
												content +='<a data-fancybox href="'+v.img_link+'">';
													content += v.judul_media;
												content +='</a>';   
											content +='</h4>';
											content +='<p>';
												content += v.judul_img;
											content +='</p>';
										content +='</div>';
									content +='</div> ';
								content +='</div>';
							} else {
							    if(v.source.length > 70){
							    var youtube = $(v.source).html(content);
							    content +='<div class="project-area">';
                                content += '<div class="embed-responsive embed-responsive-16by9">'+v.source+'</div>';
                                        content +='<div class="hover-box">';
                                            content +='<h4>';
        									content +='<a data-fancybox href="https://www.youtube.com/watch?v='+youtube.attr('src').split("/").pop()+'">';
        										content += v.judul_media;
        										content +='</a>';   
    										content +='</h4>';
    										content +='<p>';
    											content += v.judul_img;
    										content +='</p>';
                                        content +='</div>';
                                content +='</div>';
                                }
							}
							});
							$('#loadmore').data("value", response.responseJSON.data.current_page);
							$('#recent-projects').append(content);
							recent_project_carousel();
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
        })
	
	};
	loadGallery();
	
	function recent_project_carousel(){
        var owl = jQuery('#recent-projects');
        owl.owlCarousel({
            margin: 0,
            nav: true,
            loop: true,
            dots: false,
            smartSpeed :1200,
            navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    }
    
jQuery(document).ajaxComplete(function () { 
    	var $container = $('.recents');
        setTimeout(function(){
        console.log('hai');
        $container.isotope({
            filter: '*',
            animationOptions: {
                easing: 'linear',
                queue: false
            }
        });	
    	}, 2000)
    });
</script>
@stop