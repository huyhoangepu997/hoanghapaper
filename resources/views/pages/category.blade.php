@extends('master-layout')
@section('title')
Danh mục sản phẩm
@endsection
@section('content')
<div class="h-product-wrap">
	<div class="h-category-banner">
		<h2 class="text-center">Tên danh mục sản phẩm</h2>
		<div class="h-category-banner-black">
			
		</div>
	</div>
	<div class="container">
		<div class="h-product-title wow slideInLeft mt-5">
			<h2 class="text-center font-bold color-blue">Sản phẩm của chúng tôi</h2>
		</div>
		<div class="h-product">
{{-- 			<nav class="mb-4">
				<div class="h-product-menu-mobile-wrap">
					<div class="nav nav-tabs nav-tabs-new" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-1-tab" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Tên danh mục</a>
					</div>
				</div>
			</nav> --}}
			<div class="tab-content" id="nav-tabContent">
			  <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
			  	<div class="row">
			  		<div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-1.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Tấm lợp sinh thái</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Hoàng Hà là công ty duy nhất tại Việt Nam thực hiện sản xuất và tái chế ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-2.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Giấy Testliner KNA, KQM</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Sản phẩm dùng làm lớp mặt cho thùng carton, được sản xuất trên hệ thống ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-3.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Giấy Testliner KT1,K1Y,KS</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Sản phẩm dùng làm lớp mặt cho thùng carton, được sản xuất trên hệ thống ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-4.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Giấy bao gói</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Dùng trong đóng gói bao bì. Định lượng : 58,60,70,75 g/m2 Dùng làm bao gói thương ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-5.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
			  				</div>
			  			</div>
			  		</div>
			  		<div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
			  			<div class="h-product-member mb-5">
			  				<div>
			  					<img src="images/h-pro-6.jpg" class="img-fluid">
			  				</div>
			  				<div class="text-center m-3 mt-4">
			  					<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
			  				</div>
			  				<div class="text-center m-3">
			  					Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống ...
			  				</div>
			  				<div class="m-4">
			  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
			  				</div>
			  			</div>
			  		</div>
			  	</div>
			  </div>
			</div>
		</div>
	</div>
</div>
<div class="pb-2">
	<div class="container">
		<nav aria-label="Page navigation example">
			<ul class="pagination">
				<li class="page-item"><a class="page-link" href="{{ route('category') }}"><i class="fas fa-angle-left"></i></a></li>
				<li class="page-item"><a class="page-link" href="{{ route('category') }}">1</a></li>
				<li class="page-item"><a class="page-link" href="{{ route('category') }}">2</a></li>
				<li class="page-item"><a class="page-link" href="{{ route('category') }}">3</a></li>
				<li class="page-item"><a class="page-link" href="{{ route('category') }}"><i class="fas fa-angle-right"></i></a></li>
			</ul>
		</nav>
	</div>
</div>

@endsection