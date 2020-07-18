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
					<div class="col-md-3 section-white p-t-20">
                        <div class="widget-area">
                            <div class="widget-area">
                                <div class="widget-title">
                                    <h3>Related Publikasi</h3>
                                    <span class="divider"></span>
                                </div>
                                <span id="files"><div class="loader text-center"></div></span>
								
                            </div>
                            <div class="widget-area">
                                <div class="widget-title">
                                    <h3>The Corner</h3>
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
                    <div class="col-md-9">
                      <div class="blog-detail">
                            <div class="blog-area">
                                <div class="blog-content">
									 
                                    <div class="loader text-center"></div>
									<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover table-striped table-bordered">
									<tbody>
									  <tr>
										<td>Judul File</td>
										<td id="judul"></td>
									  </tr>
									  <tr>
										<td>Nama File </td>
										<td id="file"></td>
									  </tr>
									  <tr>
										<td>Type File</td>
										<td id="type"></td>
									  </tr>
									  <tr>
										<td>Tanggal Upload</td>
										<td id="date"></td>
									  </tr>
									  <tr>
										<td>Download </td>
										<td class="read-more" id="download">
										</td>
									  </tr>
									</tbody>
									</table>
                                </div>
							</div>
                        </div>
					</div>
                   </div>
            </div>
        </section>
        <!-- Blog page section end -->
	<script>
	function loadView(){
		var page = window.location.pathname.split('/').pop();
		$.ajax({
					data: "",
					url: ServeUrl+"/publikasi/"+Instansi+"/view/"+page,
                    crossDomain: true,
                    method: 'GET',
                    complete: function(response){ 		
                        if(response.status == 200){
							
							 $(".title").html(response.responseJSON.data.judul_file);
							 $("#judul").html(response.responseJSON.data.judul_file);
							 $("#file").html('<b>'+response.responseJSON.data.nama_file+'</b> <i>(encrypted)</i>');
							 $("#type").html(response.responseJSON.data.type_file);
							 $("#date").html(response.responseJSON.data.date);
							 $("#download").html('<a class="btn btn-default" href="'+response.responseJSON.data.link_download+'"><span class="glyphicon glyphicon-save"></span> Download</a>');
							 
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}else if(response.status == 204){ 
							 $("#blog-content").html('<center class="m-t-50 m-b-50"><h2>Oops! Not Found</h2></center>');
						}
                    },
					dataType:'json'
                })
                loadSidebar();
	}
	
	function loadSidebar(){
		var page = window.location.pathname.split('/').pop();
		$.ajax({
					data: {"render" : "sidebar"},
					url: ServeUrl+"/pages/"+Instansi+"/list",
                    
                    method: 'GET',
                    complete: function(response){ 				
                        if(response.status == 200){
							var content = '';
							 
							$.each(response.responseJSON.data.data, function(k,v){
							var addClass; if(v.slug == page){ addClass = 'class="active"';};
									content +='<li '+addClass+'>';
                                        content +='<a href="'+BaseUrl+'/informasi/'+v.slug+'">';
                                            content += v.judul;
                                        content +='</a>';
                                    content +='</li>';
							
							});
							
							$('#page-list').html(content);
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
							 
							$.each(response.responseJSON.data.data, function(k,v){
							
								content +='<div class="broucher-item"> ';
                                    content +='<a href="'+v.download_link+'" target="_blank">'+v.judul_file+'<span class="fa fa-download" aria-hidden="true"></span></a> ';
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
	loadView();
</script>	
@stop