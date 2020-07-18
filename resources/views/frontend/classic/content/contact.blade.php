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
        
        <!-- Contact page section start -->
        <section class="contact-us section-light-grey p-t-70 p-b-70">
            <div class="container">
                <div class="row m-t-20">
                    <div class="col-md-4 col-sm-12">
                        <div class="address-block m-t-0">
                            <div class="address-icon">
                                <i class="fa fa-phone text-center"></i>
                            </div>
                            <div class="address-text">
                                <h5>Phone</h5>
                                <p>{{$data['telp']}}</p>
                                <p>{{$data['telp2']}}</p>
                            </div>
                        </div>
                        <div class="address-block m-t-20">
                            <div class="address-icon">
                                <i class="fa fa-envelope text-center"></i>
                            </div>
                            <div class="address-text">
                                <h5>Email</h5>
                                <p>{{$data['email']}}</p>
                               
                            </div>
                        </div>
                        <div class="address-block m-t-20">
                            <div class="address-icon">
                                <i class="fa fa-home text-center"></i>
                            </div>
                            <div class="address-text">
                                <h5>Address</h5>
                                <span>{{$data['alamat']}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                         <?php echo $data['maps']; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact page section end -->
        

@stop