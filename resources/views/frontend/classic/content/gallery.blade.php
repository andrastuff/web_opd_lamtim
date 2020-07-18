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
        
		 <!-- Portfolio section start -->
        <section class="section-light-grey p-t-100 p-b-100 portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="portfolioFilter clearfix">
                          <a href="#" data-filter="*" class="current">All</a>
                          
                        </div>
                    </div>
                    <div class="portfolioContainer projects" id="gallery-list">
					
                    </div>
                </div>
				 <div class="row p-t-30"><div class="loader text-center"></div>
                               <div class="col-md-12 popular-tags text-center"><a id="loadmore" class="btn" onclick="loadMore()" data-value=""><strong><i class="fa fa-circle-o-notch"></i> Load More</strong></a></div>
                            </div>
            </div>
        </section>
        <!-- Portfolio section end -->   
        
    <script src="{{url('assets/frontend')}}/classic/js/jquery.isotope.min.js"></script>
    
    
    <script>
	var data 	= {"page" : 1};
	function loadGallery(data){
		
		$.ajax({
					data: data,
					url: ServeUrl+"/gallery/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = ''; 
							$.each(response.responseJSON.data.data, function(k,v){
							if(v.judul_img == null){v.judul_img = ''}else{v.judul_img = v.judul_img;}
								 if(v.type == 'image'){
                                    content +='<div class="image objects project-area">';
								    content +='<a data-fancybox href="'+v.img_link+'"><img src="'+v.img_link+'" alt="image"></a>';
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
								    content +='</div>';
                                }else{
                                var youtube = $(v.source).html(content);
                                
                                    content +='<div class="embed objects project-area">';
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
							});
							$('#loadmore').data("value", response.responseJSON.data.current_page);
							$('#gallery-list').append(content);
							//isotop(content)
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}else if(response.status == 204){
							 $('#loadmore').remove();
							 $('#gallery-list').append('<center class="m-t-50 m-b-50"><h2>Oops! Not Found</h2></center>');
						}
                    },
					dataType:'json'
        })
	
	};
	loadGallery(data);
	
	function loadMore(){
		var page = parseInt($('#loadmore').data("value"))+1;
		var data = {"page" : page};
		loadGallery(data);		
	};
	
	jQuery(document).ajaxComplete(function (){
var $container = $('.portfolioContainer');
    setTimeout(function(){ 
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 50,
            easing: 'linear',
            queue: false
        }
    })
    $container.isotope( 'reloadItems' ).isotope();
    }, 1000);
    
    $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
	});
	</script>  
@stop