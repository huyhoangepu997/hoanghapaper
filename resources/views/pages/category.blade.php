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
			<h2 class="text-center font-bold color-blue mb-4">Sản phẩm của chúng tôi</h2>
		</div>
		<div class="h-product">
			<div class="d-flex justify-content-center">
				<ul class="nav nav-pills h-product">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="pill" href="#sanpham">Sản phẩm</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#sanpham-1">Giấy Kraft Sóng</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#sanpham-2">Giấy Kraft Sóng Gia Keo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="pill" href="#sanpham-3">Giấy Chipboard</a>
					</li>
				</ul>
			</div>
			<div class="tab-content">
				<div id="sanpham" class="container tab-pane active"><br>
					<div class="row">
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-6.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-3.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="sanpham-1" class="container tab-pane fade"><br>
					<div class="row">
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-6.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-3.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="sanpham-2" class="container tab-pane fade"><br>
					<div class="row">
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-6.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-3.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="sanpham-3" class="container tab-pane fade"><br>
					<div class="row">
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay1.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Medium gia keo</h4></a>
								</div>
								<div class="text-center m-3">
									Giấy Medium (standard medium) được sử dụng làm lớp sóng hoặc lớp mặt bên trong
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/giay2.jpeg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-6.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
								</div>
								<div class="m-4">
									<a href="{{ route('product') }}" class="btn-detail">Chi tiết</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="h-product-member mb-5">
								<div>
									<img src="images/h-pro-3.jpg" height="235px" width="100%">
								</div>
								<div class="text-center m-3 mt-4">
									<a href="" class="font-bold"><h4>Giấy Testliner KA, K2E,KT</h4></a>
								</div>
								<div class="text-center m-3">
									Sản phẩm  dùng làm lớp mặt  cho thùng carton, được sản xuất trên hệ thống
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