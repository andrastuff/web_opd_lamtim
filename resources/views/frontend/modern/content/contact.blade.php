@extends('frontend.modern.body')
@section('modern.content')

			<section class="page-header">
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

					<!-- 
					Available heights
						h-100
						h-150
						h-200
						h-250
						h-300
						h-350
						h-400
						h-450
						h-500
						h-550
						h-600
					-->
				
					<div class="row">

						<!-- FORM -->
						<div class="col-md-9">

							<?=$data['maps'] ?>
						</div>
						<!-- /FORM -->


						<!-- INFO -->
						<div class="col-md-3">

							<h2>Pengaduan Masyarakat</h2>

							<p>
							</p>

							<hr />

							<p>
								<span class="block"><strong><i class="fa fa-map-marker"></i> Alamat:</strong> {{$data['alamat']}}</span>
								<span class="block"><strong><i class="fa fa-phone"></i> Telp.:</strong> <a href="tel:1800-555-1234">{{$data['telp']}}</a></span>
								<span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:{{$data['email']}}">{{$data['email']}}</a></span>
							</p>

							<hr />

							<h4 class="font300">Jam Kerja</h4>
							<p>
								<span class="block"><strong>Monday - Friday:</strong> 8am to 4pm</span>
								<span class="block"><strong>Saturday:</strong> Closed</span>
								<span class="block"><strong>Sunday:</strong> Closed</span>
							</p>

						</div>
						<!-- /INFO -->

					</div>

				</div>
			</section>
			<!-- / -->

@stop