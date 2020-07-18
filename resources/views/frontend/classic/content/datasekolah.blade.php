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
					<div class="col-md-2 section-white p-t-20">
                        <div class="widget-area">
                            <div class="widget-area">
                                <ul id="page-list">
                                    
								   <li class="active"><a href="{{url('mod/data-sekolah')}}">Data Sekolah</a></li>
								   <li><a href="{{url('mod/data-peserta-didik')}}">Data Peserta Didik</a></li>
								   <li><a href="{{url('mod/data-rombel')}}">Data Rombel</a></li>
								   <li><a href="{{url('mod/data-guru')}}">Data Guru</a></li>
								   <li><a href="{{url('mod/data-pegawai')}}">Data Pegawai</a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-10">
                      <div class="blog-detail">
                            <div class="blog-area">
                                <div class="blog-content m-all-20" id="blog-content">
								<h5>Data Sekolah Kab. Tulang Bawang</h5><br>
								<div class="form-group">
								<?php $start = date('Y') ; $end = 2014; ?> 
								<select class="form-control" name="selectTahun" title="Pilih Semester">
										<option value="" disabled="">Pilih Tahun</option>
										<?php for($i=$start; $i>=$end; $i--) { ?>
										<option value="<?php echo $i; ?>" <?php if($start == $i){ echo 'selected'; } ?>>Tahun <?php echo ucwords($i); ?> </option>
										<?php } ?>
								</select>
								</div>
								<div class="form-group">
								<select class="form-control" name="selectSemester" title="Pilih Semester">
										<option value="" disabled="">Pilih Semester</option>
										<option value="2">Semester Genap</option>
										<option value="1">Semester Ganjil</option>
								</select>
								</div>
                                    <div class="loader text-center"></div>
									<table class="table table-hover table-striped table-bordered" id="DataTables_Table_0" role="grid"> <thead><tr role="row"><th class="text-center sorting_asc" rowspan="2" tabindex="0" aria-controls="DataTables_Table_0" colspan="1" aria-sort="ascending" aria-label="No: activate to sort column descending">No</th><th class="text-center sorting" rowspan="2" tabindex="0" aria-controls="DataTables_Table_0" colspan="1" aria-label="Wilayah: activate to sort column ascending">Wilayah</th><th class="text-center" colspan="3" rowspan="1">Total</th><th class="text-center" colspan="3" rowspan="1">SD</th><th class="text-center" colspan="3" rowspan="1">SMP</th><th class="text-center" colspan="3" rowspan="1">SMA</th><th class="text-center" colspan="3" rowspan="1">SMK</th><th class="text-center" colspan="3" rowspan="1">SLB</th></tr><tr role="row"><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Jml: activate to sort column ascending">Jml</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="N: activate to sort column ascending">N</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="S: activate to sort column ascending">S</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Jml: activate to sort column ascending">Jml</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="N: activate to sort column ascending">N</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="S: activate to sort column ascending">S</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Jml: activate to sort column ascending">Jml</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="N: activate to sort column ascending">N</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="S: activate to sort column ascending">S</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Jml: activate to sort column ascending">Jml</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="N: activate to sort column ascending">N</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="S: activate to sort column ascending">S</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Jml: activate to sort column ascending">Jml</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="N: activate to sort column ascending">N</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="S: activate to sort column ascending">S</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Jml: activate to sort column ascending">Jml</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="N: activate to sort column ascending">N</th><th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="S: activate to sort column ascending">S</th></tr></thead>
										<tbody id="content"></tbody>
									</table>
									<p class="pull-right small">sumber data: <a class="text-yellow" href="http://dapo.dikdasmen.kemdikbud.go.id" target="_blank">http://dapo.dikdasmen.kemdikbud.go.id</a></p><br><br>
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
		var y = $('select[name="selectTahun"]').val();
		var m = parseInt($('select[name="selectSemester"]').val());
		var page = window.location.pathname.split('/').pop();
		$("#content").html("");
		$.ajax({
					data: {"semester" : y+''+m},
					url: ServeUrl+"/meta/data/data_sekolah",
                    crossDomain: true,
                    method: 'GET',
                    complete: function(response){ 	
						var content = "", n = 0;					
                        if(response.status == 200){
							console.log(response);
							$.each(response.responseJSON.data, function(k,v){
								n++;
							content += '<tr class="data odd" role="row">';
								content += '<td class="sorting_1">'+n+'</td>';
								content += '<td class="text-yellow"><a href="http://dapo.dikdasmen.kemdikbud.go.id/sp/3/'+v.kode_wilayah+'" target="_blank">'+v.nama+'</a></td>';
								content += '<td>'+v.sekolah+'</td>';
								content += '<td>'+v.sekolah_n+'</td>';
								content += '<td>'+v.sekolah_s+'</td>';
								content += '<td>'+v.sd+'</td>';
								content += '<td>'+v.sd_n+'</td>';
								content += '<td>'+v.sd_s+'</td>';
								content += '<td>'+v.smp+'</td>';
								content += '<td>'+v.smp_n+'</td>';
								content += '<td>'+v.smp_s+'</td>';
								content += '<td>'+v.sma+'</td>';
								content += '<td>'+v.sma_n+'</td>';
								content += '<td>'+v.sma_s+'</td>';
								content += '<td>'+v.smk+'</td>';
								content += '<td>'+v.smk_n+'</td>';
								content += '<td>'+v.smk_s+'</td>';
								content += '<td>'+v.slb+'</td>';
								content += '<td>'+v.slb_n+'</td>';
								content += '<td>'+v.slb_s+'</td>';
							content += '</tr>';
							});
							 $("#content").html(content);
							
                        }else if(response.status == 401){
							 e('info','401 server conection error');
						}else if(response.status == 204){ 
							 $("#blog-content").html('<center class="m-t-50 m-b-50"><h2>Oops! Not Found</h2></center>');
						}
                    },
					dataType:'json'
                })
               
	}
	
	loadView();

	$('select[name="selectSemester"]').change(function(){
		loadView();
	});
	$('select[name="selectTahun"]').change(function(){
		loadView();
	});
</script>	
@stop