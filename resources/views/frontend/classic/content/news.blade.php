@extends('frontend.classic.body')
@section('classic.content')
         <!-- Page title section start -->
        <section class="page-title p-t-50 p-b-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-area">
                            <h1>{{$data['title']}}</h1>
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li>/</li>
                                <li>{{$data['title']}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page title section end -->
        <!-- Blog page section start -->
        <section class="section-light-grey p-t-70 p-b-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="blog-post-area">
                            <div class="row" id="news-list">
							
                            </div>
                           <div class="row">
							   <div class="loader text-center"></div>
                               <div class="col-md-12 popular-tags text-center"><a id="loadmore" class="btn" onclick="loadMore()" data-value=""><strong><i class="fa fa-circle-o-notch"></i> Load More</strong></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Sidebar widget area start -->
                        <div class="right-sidebar">
                            <div class="blog-widget">
                                <div class="widget-title">
                                    <h3>Search</h3>
                                    <span class="divider"></span>
                                </div>
                                <form>
                                    <input name="keyword" placeholder="Keywords..." type="search" />
                                    <button type="submit" >
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                            <div class="blog-widget">
                                <div class="widget-title">
                                    <h3>Categories</h3>
                                    <span class="divider"></span>
                                </div>
                                <ul class="category" id="category">
									<div class="loader text-center"></div>
                                </ul>
                            </div>
                            <div class="blog-widget">
                                <div class="widget-title">
                                    <h3>Tags</h3>
                                    <span class="divider"></span>
                                </div>
                               <ul class="popular-tags" id="tags"><div class="loader text-center"></div></ul>
                            </div>
                            <div class="blog-widget recent-posts">
                                <div class="widget-title">
                                    <h3>Trending Posts</h3>
                                    <span class="divider"></span>
                                </div>
								<ul id="popular"><div class="loader text-center"></div></ul>
								
                            </div> 
							<div class="blog-widget recent-posts">
                                <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script> 
								<div id="gpr-kominfo-widget-container"></div>
                            </div>    
                                
                        </div>
                        <!-- Sidebar widget area end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog page section end -->
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
							
								 content +='<div class="col-md-12">';
								 content +='<div class="col-md-12 blog-area p-b-20">';
									 content +='<div class="col-md-3">';
									 content +='<div class="blog-img p-t-20">';
									  content +='<a href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'">';
										 content +='<img class="img-responsive" src="'+v.url_img+'" width="" alt="">';
									 content +='</a>';
									 content +='</div>';
									 content +='</div>';
									 content +='<div class="col-md-9">';
										 content +='<div class="blog-head">';
										 content +='<h3><a href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'">'+v.judul_artikel+'</a></h3>';
										 content +='</div>';
										 content +='<div class="blog-content">';
                                             content +='<p>';
                                                 content += v.isi_artikel;
                                             content +='</p>';
                                         content +='</div>';
										 content +='<div class="blog-meta">';
                                             content +='<p>';
                                                 content +='<i class="fa fa-user"></i> By Admin';
                                             content +='</p>';
                                             content +='<p>';
                                                 content +='<i class="fa fa-calendar"></i> '+v.tanggal;
                                             content +='</p>';
                                             content +='<p>';
                                                 content +='<i class="fa fa-heart"></i> '+v.view+' views';
                                             content +='</p>';
											 content +='<p>';
                                                 content +='<i class="fa fa-tag"></i> '+v.kategori;
                                             content +='</p>';
                                         content +='</div>';
									 content +='</div>';
								 content +='</div>';
								 content +='</div>';
							
							});
							$('#loadmore').data("value", response.responseJSON.data.current_page);
							$('#news-list').append(content);
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}else if(response.status == 204){
							 $('#loadmore').remove();
							 $('#news-list').append('<center class="m-t-50"><h2>Oops! Not Found</h2></center>');
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
							
								content +=' <li><a href="'+BaseUrl+'/news/kategori/'+v.slug+'">'+v.kategori+' <span>('+v.total+')</span></a></li>';

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
								content +='<li><a href="'+BaseUrl+'/news/tag/'+v.tag_seo+'">'+v.nama_tag+'</a></li>';
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

								content +='<div class="media">';
                                    content +='<div class="media-left media-top">';
                                        content +='<img src="'+v.url_img+'" class="media-object">';
                                    content +='</div>';
                                    content +='<div class="media-body">';
                                        content +='<h4 class="media-heading">';
                                            content +='<a href="'+BaseUrl+'/news/read/'+v.id+'/'+v.slug+'">'+v.judul_artikel+'</a>';
                                        content +='</h4>';
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
	</script>    
@stop