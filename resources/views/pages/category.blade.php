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
	<div class="h-product-wrap all-wrap">
	<div class="container">
		<div class="h-product-title wow slideInLeft">
			<h2 class="text-center font-bold color-blue">Sản phẩm của chúng tôi</h2>
		</div>
		<div class="h-product">
			<nav class="mb-4">
				<div class="h-product-menu-mobile-wrap">
					<div class="h-product-menu-mobile background-blue">
						Danh mục sản phẩm
					</div>
					<div class="nav nav-tabs h-product-menu-mobile-content" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-1-tab" data-toggle="tab" href="#nav-1" role="tab" aria-controls="nav-1" aria-selected="true">Sản phẩm</a>
						<a class="nav-item nav-link" id="nav-2-tab" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="false">Giấy Tesliner</a>
						<a class="nav-item nav-link" id="nav-3-tab" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="false">Giấy Medium</a>
						<a class="nav-item nav-link" id="nav-4-tab" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="false">Giấy Bao gói</a>
						<a class="nav-item nav-link" id="nav-5-tab" data-toggle="tab" href="#nav-5" role="tab" aria-controls="nav-5" aria-selected="false">Tấm lợp sinh hợp</a>
						<a class="nav-item nav-link" id="nav-6-tab" data-toggle="tab" href="#nav-6" role="tab" aria-controls="nav-6" aria-selected="false">Tái chế vỏ hộp sữa</a>
						<a class="nav-item nav-link" id="nav-7-tab" data-toggle="tab" href="#nav-7" role="tab" aria-controls="nav-7" aria-selected="false">Vách trần sinh hợp</a>
					</div>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			  <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab">
			  	<div class="row">
			  		<div class="col-md-4">
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
			  		<div class="col-md-4">
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
			  		<div class="col-md-4">
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
			  		<div class="col-md-4">
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
			  		<div class="col-md-4">
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
			  		<div class="col-md-4">
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
			  <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
			  	<div class="row">
			  		<div class="col-md-4">
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
			  		<div class="col-md-4">
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
			  		<div class="col-md-4">
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
			  <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab">
			  	<div class="row">
			  		<div class="col-md-4">
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
			  	</div>
			  </div>
			  <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab">
			  	<div class="row">
			  		<div class="col-md-4">
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
			  	</div>
			  </div>
			  <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-5-tab">
			  	<div class="row">
			  		<div class="col-md-4">
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
			  	</div>
			  </div>
			  <div class="tab-pane fade" id="nav-6" role="tabpanel" aria-labelledby="nav-6-tab">
			  	<div class="row">
			  		<div class="col-md-4">
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
			  	</div>
			  </div>
			  <div class="tab-pane fade" id="nav-7" role="tabpanel" aria-labelledby="nav-7-tab">
			  	<div class="row">
			  		<div class="col-md-4">
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