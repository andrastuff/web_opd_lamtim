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
                                <li>{{$data['subtitle']}}</li>
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
                      <div class="blog-detail">
                            <div class="blog-area">
                                
                                <div class="blog-head">
                                    <h3>
                                        <a href="#" class="title"></a>
                                    </h3>
                                </div>
                                <div class="blog-img m-t-10 m-b-5" id="url_img">
                                    
                                </div>
                                <div class="blog-content" id="blog-content">
                                    <div class="loader text-center"></div>
                                </div>
                                <div class="sharethis-inline-reaction-buttons"></div>
								<div class="blog-meta small ">
                                    <p>
                                        <i class="fa fa-user"></i> Admin
                                    </p>
                                    <p>
                                        <i class="fa fa-calendar"></i> <span id="tanggal"></span>
                                    </p>
                                    <p>
                                         <i class="fa fa-heart"></i> <span id="views"></span> views
                                    </p>
                                    <p>
                                         <i class="fa fa-tag"></i> <span id="kategori"></span>
                                    </p>
									<p>
                                         <i class="fa fa-tags"></i> <span id="tagsme"></span>
                                    </p>
                                </div>
                            </div>
                            <div class="read-more m-b-30">
                                <a href="#comment">    
                                    Leave a comment
                                </a>
                            </div>

                            <!-- Comment form start -->
                            <div class="quote-form m-b-30" id="comment">
                                <div id="disqus_thread"></div>
							</div>
                            <!-- Comment form end -->
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
                                <form action="{{url('/news')}}">
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
                                
                        </div>
                        <!-- Sidebar widget area end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog page section end -->
                                            
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
							
							 $(".title").html(response.responseJSON.data.judul_artikel);
							 $("#blog-content").html(response.responseJSON.data.isi_artikel);
							 $("#tanggal").html(response.responseJSON.data.tanggal);
							 $("#views").html(response.responseJSON.data.view);
							 $("#kategori").html(response.responseJSON.data.kategori);
							 $("#url_img").html('<a href="#"><img width="100%" src="'+response.responseJSON.data.url_img+'" alt="blog-image"></a><small><i><center>'+response.responseJSON.data.caption+'</center></i></small>');
							 var tags = response.responseJSON.data.tag.split(',')
								$.each(tags, function(x,y){
									 $("#tagsme").append('<a href="'+BaseUrl+'/news/tag/'+slugify(y)+'">#'+y+', </a>');
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