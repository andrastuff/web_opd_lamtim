@extends('frontend.modern.body')
@section('modern.content')
 <!-- Banner section start -->
	<!--Main Slider-->
	<!-- REVOLUTION SLIDER -->
			<div class="slider fullwidthbanner-container roundedcorners">
				<!--
					Navigation Styles:
					
						data-navigationStyle="" theme default navigation
						
						data-navigationStyle="preview1"
						data-navigationStyle="preview2"
						data-navigationStyle="preview3"
						data-navigationStyle="preview4"
						
					Bottom Shadows
						data-shadow="1"
						data-shadow="2"
						data-shadow="3"
						
					Slider Height (do not use on fullscreen mode)
						data-height="300"
						data-height="350"
						data-height="400"
						data-height="450"
						data-height="500"
						data-height="550"
						data-height="600"
						data-height="650"
						data-height="700"
						data-height="750"
						data-height="800"
				-->
				<div class="fullwidthbanner" data-height="600" data-shadow="0" data-navigationStyle="preview2">
					<ul class="hide">
					<?php foreach($data['slider'] as $item){ ?>
						<!-- SLIDE  -->
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-delay="10000" data-saveperformance="off" data-title="Slide 1" style="background-color: #F6F6F6;">

							<img src="<?php echo $item->img; ?>" alt="slide" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat">

						</li>
					<?php } ?>
					
					</ul>

					<div class="tp-bannertimer"><!-- progress bar --></div>
				</div>
			</div>
			<!-- /REVOLUTION SLIDER -->
			
			<section>
				<div class="container">

					<div class="row">

						<!-- LEFT -->
						<div class="col-sm-9">

							
							 




							<!-- TWO COLUMNS -->
							<div class="row">

								<!-- first column -->
								<div class="col-md-12">

									<h3 class="page-header pt-0">
										<a href="#" data-toggle="tooltip" title="view more"><i class="fa fa-plus-square-o"></i></a>
										<strong>Berita</strong> Terbaru
									</h3>

								
								</div>
							</div>
							<div class="row" id="recent">
							<div class="loader text-center"></div>
								

							</div>
							<!-- /TWO COLUMNS -->



						</div>
						<!-- /LEFT -->

						<!-- RIGHT -->
						<div class="col-sm-3">

							<!-- HOT -->
							<h3 class="page-header mt-0 fw-300">
								Kepala <span>Dinas</span>
							</h3>

							<!-- No #1 Hot -->
							<div class="item-box mt-0">
								<figure>
									<a class="item-hover" href="#">
										<span class="overlay color2"></span>
										 
									</a>
									<img alt="" class="img-fluid" src="{{$data['foto_kepala']}}" />
								</figure>
								<div class="item-box-desc p-10">
									 
									<h4><a href="#">{{$data['nama_kepala']}}</a></h4>
								</div>
							</div>
							<!-- /No #1 Hot -->

							<!-- LATEST -->
							<h3 class="page-header fw-300 mt-60">
								Info <span>Pengumuman</span>
							</h3>
							
							<ul class="list-group list-group-bordered list-group-noicon uppercase" id="pengumuman">
									<div class="loader text-center"></div>
									

							</ul>

							<h3 class="page-header fw-300 mt-60">
								Info <span>Sosialisasi</span>
							</h3>
							
							<?php if(isset($data['banner']['sidebar'])){ ?>
								 
									<img class="img-fluid" src="<?php echo $data['banner']['sidebar']['img']; ?>" alt="Team">
								 
							<?php } ?> 
							
		
						</div>
						<!-- /RIGHT -->

					</div>

				</div>
			</section>
			
			<!-- PARALLAX -->
			<section class="parallax parallax-2 d-none d-sm-block " style="background-image: url('{{url('assets/images/web/lamtimbg.jpg')}}');">
				<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<ul class="social-icons list-unstyled list-inline">
						<li>
							<a href="http://lampungtimurkab.go.id/">
								<img width="60px" class="img-fluid" src="{{url('assets/images/web/logo.png')}}" alt="">
								<h4><br>PORTAL KAB.</h4>
								 
							</a>
						</li>
						<li>
							<a target="_blank" href="http://tpid.lampungtimurkab.go.id/">
								<img width="90px" class="img-fluid" src="{{url('assets/images/web/harga.png')}}" alt="">
								<h4><br>HARGA PANGAN</h4>
							</a>
						</li>
						<li>
							<a target="_blank" href="http://lpse.lampungtimurkab.go.id/">
								<img width="90px" class="img-fluid" src="{{url('assets/images/web/lpse.png')}}" alt="">
								<h4><br>LPSE</h4>
							</a>
						</li>
						<li>
							<a target="_blank" href="http://jdih.lampungtimurkab.go.id/">
								<img width="90px" class="img-fluid" src="{{url('assets/images/web/jdih.png')}}" alt="">
								<h4><br>JDIH</h4>
							</a>
						</li>
						<li>
							<a target="_blank" href="https://www.lapor.go.id/">
								<img width="90px" class="img-fluid" src="{{url('assets/images/web/elapor.png')}}" alt="">
								<h4><br>LAPOR</h4>
							</a>
						</li>
						<li>
							<a target="_blank" href="https://www.aduankonten.id/">
								<img width="90px" class="img-fluid" src="{{url('assets/images/web/aduan.png')}}" alt="">
								<h4><br>ADUAN KONTEN</h4>
							</a>
						</li>
					</ul>

				</div>

			</section>
			<!-- /PARALLAX -->
			
			<section class="pt-10">
				<div class="container">

					<div class="row">

						<!-- LEFT -->
						<div class="col-sm-9">

							<h3 class="page-header fw-300 mt-60">
								<a href="#" data-toggle="tooltip" title="view more"><i class="fa fa-plus-square-o"></i></a> 
								Berita <strong>Kabupaten</strong> 
							</h3>

							
							<div class="row" id="recentkab">
							<div class="loader text-center"></div>
								

							</div>



						</div>
						<!-- /LEFT -->

						<!-- RIGHT -->
						<div class="col-sm-3">

							<h3 class="page-header fw-300 mt-60">
								Info <span>Gempa</span>
							</h3>
							
														<div class="tabs mt-0  mb-60">

								<!-- tabs -->
								<ul class="nav nav-tabs nav-bottom-border nav-justified">
									<li class="nav-item">
										<a class="nav-item active" href="#gempa-1" data-toggle="tab">
											M ≥ 5.0 SR
										</a>
									</li>
									<li class="nav-item">
										<a id="btn-gempa-2" class="nav-item" href="#gempa-2" data-toggle="tab">
											DIRASAKAN
										</a>
									</li>
								</ul>

								<!-- tabs content -->
								<div class="tab-content mb-60 mt-30">

									<!-- POPULAR -->
									<div id="gempa-1" class="tab-pane active">
										<div class="loader text-center"></div>
									</div>
									<!-- /POPULAR -->


									<!-- RECENT -->
									<div id="gempa-2" class="tab-pane">
									<div class="loader text-center"></div>
									</div>
									<!-- /RECENT -->

								</div>

							</div>

							

							<!-- FOLLOW -->
							<h3 class="page-header fw-300 mt-60">
								<i class="fa fa-twitter"></i> 
								Foolow <span>Us</span> 
							</h3>

							<!-- Social Icons -->
							<div class="mt-20 clearfix">
								<a href="#" class="social-icon social-icon-border social-facebook float-left" data-toggle="tooltip" data-placement="top" title="Facebook">

									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-twitter float-left" data-toggle="tooltip" data-placement="top" title="Twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-gplus float-left" data-toggle="tooltip" data-placement="top" title="Google plus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-linkedin float-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

								<a href="#" class="social-icon social-icon-border social-rss float-left" data-toggle="tooltip" data-placement="top" title="Rss">
									<i class="icon-rss"></i>
									<i class="icon-rss"></i>
								</a>
					
							</div>
							<!-- /Social Icons -->

						</div>
						<!-- /RIGHT -->

					</div>

				</div>
			</section>
			

 
<script>
	function loadRecentpost(){
		$.ajax({
					data: {"render" : "home"},
					url: ServeUrl+"/news/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							
							 
							$.each(response.responseJSON.data.data.slice(0,6), function(k,v){
							
		 
											
								content +='<div class="col-md-4">';
									content +='<div class="item-box">';
										content +='<figure>';
											content +='<a class="item-hover" href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'">';
												content +='<span class="overlay color2"></span>';
												content +='<span class="inner">';
													content +='<span class="block fa fa-plus fsize20"></span>';
													content +='<strong>READ</strong> ARTICLE';
												content +='</span>';
											content +='</a>';
											content +='<img alt="'+v.judul_artikel+'" class="img-fluid" src="'+v.url_img+'" width="263" height="147" />';
										content +='</figure>';
										content +='<div class="item-box-desc">';
											content +='<h4>'+v.judul_artikel+'</h4>';
											content +='<small>'+v.tanggal+', '+v.view+'x dibaca</small>';
											content +='<p>'+v.isi_artikel+'</p>';
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
	
	function loadRecentpostKab(){
		var KabUrl = 'http://lampungtimurkab.go.id';
		$.ajax({
					data: {"render" : "home"},
					url: KabUrl+"/websiteLampungTimur/beapi/web/article",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							
							 
							$.each(response.responseJSON.data.data.slice(0,6), function(k,v){
							
		 
											
								content +='<div class="col-md-4">';
									content +='<div class="item-box">';
										content +='<figure>';
											content +='<a class="item-hover" href="'+v.link+'">';
												content +='<span class="overlay color2"></span>';
												content +='<span class="inner">';
													content +='<span class="block fa fa-plus fsize20"></span>';
													content +='<strong>READ</strong> ARTICLE';
												content +='</span>';
											content +='</a>';
											content +='<img alt="'+v.judul_artikel+'" class="img-fluid" src="'+v.url_img+'" width="263" height="147" />';
										content +='</figure>';
										content +='<div class="item-box-desc">';
											content +='<h4>'+v.judul_artikel+'</h4>';
											content +='<small>'+v.tanggal+', '+KabUrl+'</small>';
											content +='<p>'+v.isi_artikel+'</p>';
										content +='</div>';
									content +='</div>';
								content +='</div>';

							
							});
							$('#recentkab').html(content);
							
							
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                })
	
	};
	loadRecentpostKab();
	
	function loadSidebar(){
		$.ajax({
					data: {"render" : "home"},
					url: ServeUrl+"/news/"+Instansi+"/kategori/pengumuman/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data, function(k,v){
											
										content +='<div class="row tab-post">';
											content +='<div class="col-md-12 col-sm-12 col-12">';
												content +='<a href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'" class="tab-post-link">'+v.judul_artikel+'</a>';
												content +='<small>'+v.tanggal+'</small>';
											content +='</div>';
										content +='</div>'; 
							});
							
							$('#pengumuman').html(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                });
				
		
	};
	loadSidebar();
	
	
	function loadInfoBmkg(){
		   $.ajax({
					type: "GET" ,
					url: ServeUrl+"/meta/sidebar/widget_gempa.xml" ,
					dataType: "xml" ,
					complete: function(response) {
					if(response.status == 200){
							var content = '';
							var xml = response.responseXML;
							var now = $(xml).find('gempa');
							$.each(now, function(k,v){
								content +=' <li class="list-group-item"><img class="img-responsive img-fluid" width="100%" src="http://data.bmkg.go.id/eqmap.gif" alt=""></li>'; 
								content +=' <li class="list-group-item"><p class="post-date font-12 font-weight-600"> Tanggal : '+$(v).find('Tanggal').text()+'</p></li>'; 
								content +=' <li class="list-group-item"><p class="post-date font-12 font-weight-600"> Jam : '+$(v).find('Jam').text()+'</p></li>'; 
								content +=' <li class="list-group-item"><p class="post-date font-12 font-weight-600"> Magnitude : '+$(v).find('Magnitude').text()+'</p></li>'; 
								content +=' <li class="list-group-item"><p class="post-date font-12 font-weight-600"> Kedalaman : '+$(v).find('Kedalaman').text()+'</p></li>'; 
								content +=' <li class="list-group-item"><p class="post-date font-12 font-weight-600"> Wilayah : '+$(v).find('Wilayah1').text()+'</p></li>'; 
								content +=' <li class="list-group-item"><p class="post-date font-12 font-weight-600"> '+$(v).find('Potensi').text()+'</p></li>'; 
								 
							});
						$('#gempa-1').html(content);
						$('#gempa-1').before('<p class="font-11 p-all-5">sumber: <a class="text-theme-colored" href="https://www.bmkg.go.id">bmkg.go.id</a></p>');						
					}
					 
					}       
				});
	}
	loadInfoBmkg();
	
	$('#btn-gempa-2').click(function(){
			$.ajax({
					type: "GET" ,
					url: ServeUrl+"/meta/sidebar/widget_gempa_dirasakan.xml" ,
					dataType: "xml" ,
					complete: function(response) {
					if(response.status == 200){
							var content = '';
							var xml = response.responseXML;
							var now = $(xml).find('Gempa');
							console.log(now);
							$.each(now, function(k,v){
								 
								content +=' <li class="list-group-item"><p class="post-date font-12 font-weight-600"> '+$(v).find('Tanggal').text()+'</p></li>';
								content +=' <li class="list-group-item"><p class="post-date font-12 font-weight-600"> Jam : '+$(v).find('Jam').text()+'</p></li>'; 
								content +=' <li class="list-group-item"><p class="post-date font-12 font-weight-600"> Magnitude : '+$(v).find('Magnitude').text()+' SR</p></li>'; 
								content +=' <li class="list-group-item"><p class="post-date font-12 font-weight-600"> Kedalaman : '+$(v).find('Kedalaman').text()+'</p></li>'; 
								content +=' <li class="list-group-item"><p class="post-date font-12 font-weight-600"> Keterangan : '+$(v).find('Keterangan').text()+'</p></li>'; 
								content +=' <li class="list-group-item"><p class="post-date font-12 font-weight-600"> Dirasakan : '+$(v).find('Dirasakan').text()+'</p></li>'; 
								 
							});
						$('#gempa-2').html(content);	
					}
					 
					}       
			});
	});
	
	jQuery(document).ajaxStop(function () { 
		 
	});
</script>
@stop