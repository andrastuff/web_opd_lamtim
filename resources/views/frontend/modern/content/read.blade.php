@extends('frontend.modern.body')
@section('modern.content')

	<section class="page-header dark page-header-xs">
		<div class="container">

			<h1>{{$data['title']}}</h1>

			<!-- breadcrumbs -->
			<ol class="breadcrumb">
				<li><a href="{{url('/')}}">Home</a></li>
				<li class="active">{{$data['title']}}</li>
			</ol><!-- /breadcrumbs -->

		</div>
	</section>
	
	<!-- -->
			<section>
				<div class="container">

					<div class="row">

						<!-- LEFT -->
						<div class="col-md-9 col-sm-9">

							<h1 class="blog-post-title">{{$data['metapage']['judul_artikel']}}</h1>
							<ul class="blog-post-info list-inline">
								<li>
									<a href="#">
										<i class="fa fa-clock-o"></i> 
										<span class="font-lato">{{$data['metapage']['tanggal']}}</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-comment-o"></i> 
										<span class="font-lato">{{$data['metapage']['view']}} x dibaca</span>
									</a>
								</li>
								<li>
									<i class="fa fa-folder-open-o"></i> 

									<a class="category" href="#">
										<span class="font-lato">{{$data['metapage']['kategori']}}</span>
									</a>
									
								</li>
								<li>
									<a href="#">
										<i class="fa fa-user"></i> 
										<span class="font-lato">Admin</span>
									</a>
								</li>
							</ul>

							<!-- OWL SLIDER -->
							<!--
							<div class="owl-carousel buttons-autohide controlls-over" data-plugin-options='{"items": 1, "autoPlay": 4500, "autoHeight": false, "navigation": true, "pagination": true, "transitionStyle":"fadeUp", "progressBar":"false"}'>
								<a class="lightbox" href="demo_files/images/1200x800/10-min.jpg" data-plugin-options='{"type":"image"}'>
									<img class="img-fluid" src="demo_files/images/content_slider/10-min.jpg" alt="" />
								</a>
								<a class="lightbox" href="demo_files/images/1200x800/3-min.jpg" data-plugin-options='{"type":"image"}'>
									<img class="img-fluid" src="demo_files/images/content_slider/3-min.jpg" alt="" />
								</a>
								<a class="lightbox" href="demo_files/images/1200x800/21-min.jpg" data-plugin-options='{"type":"image"}'>
									<img class="img-fluid" src="demo_files/images/content_slider/21-min.jpg" alt="" />
								</a>
							</div>
							-->
							<!-- /OWL SLIDER -->

							<!-- IMAGE -->
							<figure class="mb-20" id="url_img">
								 
							</figure>
							<!-- /IMAGE -->

							<!-- VIDEO -->
							<!--
							<div class="mb-20 embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="//player.vimeo.com/video/8408210" width="800" height="450"></iframe>
							</div>
							-->
							<!-- /VIDEO -->


							<!-- article content -->
							<div id="blog-content"></div>


							<div class="divider divider-dotted"><!-- divider --></div>


							<!-- TAGS -->
							<div id="tagsme"></div>
							
							<!-- /TAGS -->



							
							<div class="divider"><!-- divider --></div>

							
							<!-- COMMENTS -->
							<div id="comments" class="comments">

								<h4 class="page-header mb-60 fs-20">
									<span>COMMENTS</span> 
								</h4>

								<!-- comment item -->
								<div class="comment-item">

									 
								</div>

							</div>
							<!-- /COMMENTS -->


						</div>


						<!-- RIGHT -->
						<div class="col-md-3 col-sm-3">

							<!-- INLINE SEARCH -->
							<div class="inline-search clearfix mb-30">
								<form action="#" method="get" class="widget_search">
									<input name="keyword" type="search" placeholder="Start Searching..." id="s" name="s" class="serch-input">
									<button type="submit">
										<i class="fa fa-search"></i>
									</button>
								</form>
							</div>
							<!-- /INLINE SEARCH -->

							<hr />

							<!-- side navigation -->
							<div class="side-nav mb-60 mt-30">

								<div class="side-nav-head">
									<button class="fa fa-bars"></button>
									<h4>CATEGORIES</h4>
								</div>
								<ul class="list-group list-group-bordered list-group-noicon uppercase" id="category">
								 <div class="loader text-center"></div>
								</ul>
								<!-- /side navigation -->

							
							</div>


							<!-- JUSTIFIED TAB -->
							<div class="tabs mt-0 hidden-xs-down mb-60">

								<!-- tabs -->
								<ul class="nav nav-tabs nav-bottom-border nav-justified">
									<li class="nav-item">
										<a class="nav-item active" href="#popular" data-toggle="tab">
											Popular
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-item" href="#tab_2" data-toggle="tab">
											GPR
										</a>
									</li>
								</ul>

								<!-- tabs content -->
								<div class="tab-content mb-60 mt-30">

									<!-- POPULAR -->
									<div id="popular" class="tab-pane active">
										<div class="loader text-center"></div>
									</div>
									<!-- /POPULAR -->


									<!-- RECENT -->
									<div id="tab_2" class="tab-pane">
									<script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script> 
									<div id="gpr-kominfo-widget-container"></div>
									</div>
									<!-- /RECENT -->

								</div>

							</div>
							<!-- JUSTIFIED TAB -->


							<!-- TAGS -->
							<h3 class="hidden-xs-down fs-16 mb-20">TAGS</h3>
							<div class="hidden-xs-down mb-60" id="tags">
								<div class="loader text-center"></div>
							</div>


							

							<hr />


						</div>

					</div>


				</div>
			</section>
			<!-- / -->
	
                            
    <script>

    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
    
    var disqus_config = function () {
    this.page.url = <?php echo '"'.url()->current().'"'; ?>;  // Replace PAGE_URL with your page's canonical URL variable
    //this.page.identifier = window.location.pathname.split('/').pop(); // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    
    (function() { 
    var d = document, s = d.createElement('script');
    s.src = 'https://http-testing-tulangbawangkab-online.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();

	function loadView(){
		var slug 	= window.location.pathname.split('/').pop();
		var segment = window.location.pathname.split('/');
			uri		= parseInt(segment.length) - 2;
		var id 		= segment[uri];
		$.ajax({
					data: "",
					url: ServeUrl+"/news/"+Instansi+"/view/"+id+'/'+slug,
                    crossDomain: true,
                    method: 'GET',
                    complete: function(response){ 		
                        if(response.status == 200){
							
							 $(".titles").html(response.responseJSON.data.judul_artikel);
							 $("#blog-content").html(response.responseJSON.data.isi_artikel);
							 $("#tanggal").html(response.responseJSON.data.tanggal);
							 $("#views").html(response.responseJSON.data.view);
							 $("#kategori").html(response.responseJSON.data.kategori);
							 $("#url_img").html('<img class="img-fluid" width="100%" src="'+response.responseJSON.data.url_img+'" alt="blog-image"><small><i><center>'+response.responseJSON.data.caption+'</center></i></small>');
							 var tags = response.responseJSON.data.tag.split(',')
								$.each(tags, function(x,y){
									 $("#tagsme").append('<a class="tag" href="'+BaseUrl+'/news/tag/'+slugify(y)+'"><span class="txt">'+y+'</span> </a>');
								});
								
							 loadSidebar();
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}else if(response.status == 204){ 
							 window.location.replace(BaseUrl+'/news');
						}
                    },
					dataType:'json'
                })
	loadSidebar();			
	}
	loadView();
	function loadSidebar(){

		$.ajax({
					data: {"render" : "sidebar"},
					url: ServeUrl+"/kategori/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data, function(k,v){
							
								content +='<li class="list-group-item"><a href="'+BaseUrl+'/news/kategori/'+v.slug+'"><span class="fs-11 text-muted float-right">('+v.total+')</span> '+v.kategori+'</a></li>';
				
							});
							
							$('#category').html(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
                });
				
		$.ajax({
					data: {"render" : "sidebar"},
					url: ServeUrl+"/tags/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data, function(k,v){
								content +='<a class="tag" href="'+BaseUrl+'/news/tag/'+v.tag_seo+'"><span class="txt">'+v.nama_tag+'</span></a>';
							});
							
							$('#tags').html(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}
                    },
					dataType:'json'
        })
	loadPopular();
	};
	
	
	function loadPopular(){
		$.ajax({
					data: {"render" : "sidebar", "type" : "popular"},
					url: ServeUrl+"/news/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data, function(k,v){

								content +='<div class="row tab-post">';
									content +='<div class="col-md-3 col-sm-3 col-3">';
										content +='<a href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'">';
											content +='<img src="'+v.url_img+'" width="50" alt="" />';
										content +='</a>';
									content +='</div>';
									content +='<div class="col-md-9 col-sm-9 col-9">';
										content +='<a href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'" class="tab-post-link">'+v.judul_artikel+'</a>';
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
	
	function slugify(string) {
	  return string
		.toString()
		.trim()
		.toLowerCase()
		.replace(/\s+/g, "-")
		.replace(/[^\w\-]+/g, "")
		.replace(/\-\-+/g, "-")
		.replace(/^-+/, "")
		.replace(/-+$/, "");
	}
    </script>  
   
    
@stop