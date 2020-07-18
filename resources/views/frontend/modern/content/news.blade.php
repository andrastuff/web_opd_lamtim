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


							<h4>The Corner</h4>
							 

							<!-- BANNER ROTATOR -->
							<?php if(isset($data['banner']['sidebar'])){ ?>
								 
									<img class="img-fluid" src="<?php echo $data['banner']['sidebar']['img']; ?>" alt="Team">
								 
							<?php } ?> 

							<hr />


						</div>

						<!-- RIGHT -->
						<div class="col-md-9 col-sm-9">
							<div class="row" id="news-list">
							
                            </div>

							 
							<!-- PAGINATION -->
							<div class="text-center" id="load">
								<div class="loader text-center"></div>
                                <div class="col-md-12 about-content text-center"><a id="loadmore" class="btn btn-reveal btn-default b-0 btn-shadow-1" onclick="loadMore()" data-value=""><i class="fa fa-circle-o-notch"></i><span> Load More</span></a></div>
							</div>
							<!-- /PAGINATION -->
							 

						</div>

					</div>


				</div>
			</section>
			<!-- / -->
			

     <script>
	var page 	= {"page" : 1};
	var extend  = getUrlVars();
	var data 	= $.extend(extend, page);
	function loadNews(data){
		
		var uri = window.location.pathname.split('/');
		var opt = "";
		if($.inArray('kategori', uri) >= 1){
			opt = '/kategori/'+window.location.pathname.split('/').pop();
		}else if($.inArray('tag', uri) >= 1){
			opt = '/tag/'+window.location.pathname.split('/').pop();
		}
		$.ajax({
					data: data,
					url: ServeUrl+"/news/"+Instansi+opt+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = ''; 
							$.each(response.responseJSON.data.data, function(k,v){
							
							 
							content +='<div class="blog-post-item">';
								content +='<figure class="blog-item-small-image mb-20">';
									content +='<img class="img-fluid" src="'+v.url_img+'" alt="">';
								content +='</figure>';
								content +='<div class="blog-item-small-content">';
									content +='<h2><a href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'">'+v.judul_artikel+'</a></h2>';
									content +='<ul class="blog-post-info list-inline">';
										content +='<li>';
											content +='<a href="#">';
												content +='<i class="fa fa-clock-o"></i> ';
												content +='<span class="font-lato">'+v.tanggal+'</span>';
											content +='</a>';
										content +='</li>';
										content +='<li>';
											content +='<a href="#">';
												content +='<i class="fa fa-heart"></i> ';
												content +='<span class="font-lato">'+v.view+'x dibaca</span>';
											content +='</a>';
										content +='</li>';
										content +='<li>';
											content +='<a href="#">';
												content +='<i class="fa fa-tag"></i> ';
												content +='<span class="font-lato"><a href="'+BaseUrl+'/news/kategori/'+convertToSlug(v.kategori)+'">'+v.kategori+'</a></span>';
											content +='</a>';
										content +='</li>';
									content +='</ul>';
									content +='<p>'+v.isi_artikel+'</p>';
									
								content +='</div>';
							content +='</div>';
							
								 
							
							});
							$('#loadmore').data("value", response.responseJSON.data.current_page);
							$('#news-list').append(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}else if(response.status == 204){
							 $('#loadmore').remove();
							 $('#load').append('<div class="text-center"><h2>Oops! Not Found</h2></div>');
						}
                    },
					dataType:'json'
        })
	
	};
	loadNews(data);
	
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
	loadSidebar();
	
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
	
	
	function loadMore(){
		var page = parseInt($('#loadmore').data("value"))+1;
		var page = {"page" : page};
		var extend  = getUrlVars();
		var data 	= $.extend(extend, page);
		loadNews(data);		
	};
	
	function convertToSlug(Text)
{
    return Text
        .toLowerCase()
        .replace(/ /g,'-')
        .replace(/[^\w-]+/g,'')
        ;
	}
	</script>    
@stop