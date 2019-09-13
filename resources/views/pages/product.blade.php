@extends('master-layout')
@section('title')
Chi tiết sản phẩm
@endsection
@section('content')
<div class="h-category-banner">
	<h2 class="text-center">Giấy Testliner</h2>
	<div class="h-category-banner-black">
		
	</div>
</div>
<div class="product-wrap all-wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="product-image owl-carousel owl-theme">
					<div class="product-image-member">
						<img src="images/product-1.jpg" class="img-thumbnail">
					</div>
					<div class="product-image-member">
						<img src="images/product-2.jpg" class="img-thumbnail">
					</div>
					<div class="product-image-member">
						<img src="images/product-3.jpg" class="img-thumbnail">
					</div>
					<div class="product-image-member">
						<img src="images/product-4.jpg" class="img-thumbnail">
					</div>
					<div class="product-image-member">
						<img src="images/product-5.jpg" class="img-thumbnail">
					</div>
				</div>
				<div id='product-custom-dots' class='owl-dots mt-4'>
					<div class='owl-dot box-image'>
						<img src="images/product-1.jpg" class="img-fluid">
					</div>
					<div class='owl-dot box-image'>
						<img src="images/product-2.jpg" class="img-fluid">
					</div>
					<div class='owl-dot box-image'>
						<img src="images/product-3.jpg" class="img-fluid">
					</div>
					<div class='owl-dot box-image'>
						<img src="images/product-4.jpg" class="img-fluid">
					</div>
					<div class='owl-dot box-image'>
						<img src="images/product-5.jpg" class="img-fluid">
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="product-content wow slideInRight">
					<div class="product-title mb-4">
						<h2 class="font-bold color-blue">Giấy Testliner KNA, KQM</h2>
					</div>
					<div class="product-detail">
						<p class="font-bold">Chi tiết sản phẩm:</p>
						<p class="text-justify">Sản phẩm dùng làm lớp mặt cho thùng carton, được sản xuất trên hệ thống xeo tròn đã được đầu tư nâng cấp, chất lượng ổn định</p>
						<p class="text-justify">Sản phẩm được phân phối rộng rãi tại thị trường trong và ngoài nước.</p>
						<p class="text-justify">Công ty liên tục cải tiến, đa dạng quy cách, kích thước và màu sắc sản phẩm để mang lại cho khách hàng sự hài lòng tối đa.</p>
					</div>
					<div class="product-specification">
						<p class="font-bold">Thông số ký thuật:</p>
						<p>Định lượng : 125 – 175g/m2</p>
						<p>Độ bục : 2.6  - 4Kgf/cm2</p>
					</div>
					<div class="product-buy">
						<a href="{{ route('lienhe') }}" class="btn-detail">Mua hàng</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="product-related-wrap all-wrap wow slideInLeft">
	<div class="container">
		<div class="product-title mb-4">
			<h2 class="font-bold color-blue">Sản phẩm đề xuất</h2>
		</div>
		<div class="product-related owl-carousel owl-them">
			<div class="product-related-member">
	  			<div class="h-product-member product-related-member-inner">
	  				<div>
	  					<img src="images/h-pro-2.jpg" class="img-fluid">
	  				</div>
	  				<div class="text-center m-3 mt-4">
	  					<a href="" class="font-bold"><h4>Giấy Testliner KNA, KQM</h4></a>
	  				</div>
	  				<div class="m-4">
	  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
	  				</div>
	  			</div>
			</div>
			<div class="product-related-member">
	  			<div class="h-product-member product-related-member-inner">
	  				<div>
	  					<img src="images/h-pro-3.jpg" class="img-fluid">
	  				</div>
	  				<div class="text-center m-3 mt-4">
	  					<a href="" class="font-bold"><h4>Giấy Testliner KT1,K1Y,KS</h4></a>
	  				</div>
	  				<div class="m-4">
	  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
	  				</div>
	  			</div>	
			</div>
			<div class="product-related-member">
	  			<div class="h-product-member product-related-member-inner">
	  				<div>
	  					<img src="images/h-pro-4.jpg" class="img-fluid">
	  				</div>
	  				<div class="text-center m-3 mt-4">
	  					<a href="" class="font-bold"><h4>Giấy bao gói</h4></a>
	  				</div>
	  				<div class="m-4">
	  					<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
	  				</div>
	  			</div>
			</div>
			<div class="product-related-member">
  				<div class="h-product-member product-related-member-inner">
  					<div>
  						<img src="images/h-pro-1.jpg" class="img-fluid">
  					</div>
  					<div class="text-center m-3 mt-4">
  						<a href="" class="font-bold"><h4>Tấm lợp sinh thái</h4></a>
  					</div>
  					<div class="m-4">
  						<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
  					</div>
  				</div>
			</div>
		</div>
	</div>
</div>
@endsection