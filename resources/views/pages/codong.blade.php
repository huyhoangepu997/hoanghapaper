
@extends('master-layout')
@section('title')
Cổ đông
@endsection
@section('content')


<div class="banner-warp">
  <div class="banner">
    <div class="banner-member">
      <img src="images/anh-1.jpg" class="img-fluid" >
      <div class="banner-member-text">
        <div class="container">
          <div class="banner-member-text-title">
            <h2 class="font-bold text-center text-banner" data-aos="fade-up" data-aos-delay="200">QUAN HỆ CỔ ĐÔNG</h2>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container " >
  <div class="row mt-5">

    <!-- cột bên trái -->
    <div class="col-md-9"  data-aos="fade-up" data-aos-delay="100">
      <div class="codongs-tt-title">
        <div  style="padding:10px; color: white">Quan hệ cổ đông <i class="fa fa-angle-down" aria-hidden="true" style="font-size: 14px"></i></div>
      </div>
      <ul class="nav nav-tabs codong-tt codongs-tt" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Công bố thông tin
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Nghị quyết, biên bản ĐHĐCĐ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Báo cáo và các văn bản liên quan</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" id="contact2-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false">Bản cáo bạch</a>
        </li>
      </ul>

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
         <div class="row mt-3 codong-ct" data-aos="fade-up" data-aos-delay="200">

          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Trung Quốc - thị trường chủ lực nhập khẩu giấy</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">

          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Trung Quốc - thị trường chủ lực nhập khẩu giấy</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Công văn chấp thuận đại chúng</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Chấp thuận lưu ký chứng khoán</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">QĐ Chấp thuận niêm yết cổ phiếu</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">TB về ngày GD đầu tiên của HHP</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">CV chấp thuận gia hạn CBTT BCTC 2018</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
        </div>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row mt-3 codong-ct" data-aos="fade-up" data-aos-delay="200">

          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Trung Quốc - thị trường chủ lực nhập khẩu giấy</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">

          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Trung Quốc - thị trường chủ lực nhập khẩu giấy</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Công văn chấp thuận đại chúng</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Chấp thuận lưu ký chứng khoán</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">QĐ Chấp thuận niêm yết cổ phiếu</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">TB về ngày GD đầu tiên của HHP</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">CV chấp thuận gia hạn CBTT BCTC 2018</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
        </div>
      </div>

      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="row mt-3 codong-ct" data-aos="fade-up" data-aos-delay="200">

          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Trung Quốc - thị trường chủ lực nhập khẩu giấy</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">

          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Trung Quốc - thị trường chủ lực nhập khẩu giấy</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Công văn chấp thuận đại chúng</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Chấp thuận lưu ký chứng khoán</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">QĐ Chấp thuận niêm yết cổ phiếu</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">TB về ngày GD đầu tiên của HHP</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">CV chấp thuận gia hạn CBTT BCTC 2018</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
        </div>
      </div>
      <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">
        <div class="row mt-3 codong-ct" data-aos="fade-up" data-aos-delay="200">

          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Trung Quốc - thị trường chủ lực nhập khẩu giấy</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">

          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Trung Quốc - thị trường chủ lực nhập khẩu giấy</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Công văn chấp thuận đại chúng</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">Chấp thuận lưu ký chứng khoán</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">QĐ Chấp thuận niêm yết cổ phiếu</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">TB về ngày GD đầu tiên của HHP</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
          <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
            <div class="row d-flex align-items-center mt-2">
              <!-- Blog Content -->
              <div class="col-12 col-lg-3 blog-content">                         
                <p class="blog-headline">               
                  09/18/2019
                </p>
              </div>
              <div class="col-12 col-lg-9">
                <p class="mb-0 font-weight-bold"><a href="{{ route('codongchitiet') }}" class="text-dark">CV chấp thuận gia hạn CBTT BCTC 2018</a></p>
              </div>
            </div>
          </div>
          <hr style="width: 95%;margin: 0 auto">
        </div>
      </div>
    </div>



</div>
<!-- cột bên phải -->
<div class="col-md-3 tin-tuc-content"  data-aos="fade-up" data-aos-delay="400">
  <ul class="list-group" >
    <li class="list-group-item text-center font-weight-bold" style="background-color: #058ff7 ; color: white">TIN MỚI</li>
    <li class="list-group-item">
      <div class="row">
        <div class="col-md-4 " style="padding:0"><img src="http://hhppaper.com/image/data/tin%20t%E1%BB%A9c/paper_FMTV.jpg" style="width: 90%">
        </div>
        <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
          <span>Giá giấy và bột giấy thế giới tăng mạnh</span>
        </div>
      </div>
    </li>
    <li class="list-group-item">
      <div class="row">
        <div class="col-md-4 " style="padding:0"><img src="http://www.ppivn.vn/userfiles/giaysanphamgiay_QWBM.jpeg" style="width: 90%">
        </div>
        <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
          <span>Trung Quốc - thị trường nhập khẩu</span>
        </div>
      </div>
    </li>
    <li class="list-group-item">
      <div class="row">
        <div class="col-md-4 " style="padding:0"><img src="http://hhppaper.com/image/cache/data/ch%C3%A0o%20s%C3%A0n%20hhp/caecf57113e3f2bdabf2-300x200.jpg" style="width: 100%">
        </div>
        <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
          <span>Chào sản thành công cổ phiếu HHP  </span>
        </div>
      </div>
    </li>

    <li class="list-group-item">
      <div class="row">
        <div class="col-md-4 " style="padding:0"><img src="http://hhppaper.com/image/data/tin%20t%E1%BB%A9c/paper_FMTV.jpg" style="width: 90%">
        </div>
        <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
          <span>Giá giấy và bột giấy thế giới tăng mạnh  </span>
        </div>
      </div>
    </li>
    <li class="list-group-item">
      <div class="row">
        <div class="col-md-4 " style="padding:0"><img src="http://www.ppivn.vn/userfiles/giaysanphamgiay_QWBM.jpeg" style="width: 90%">
        </div>
        <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
          <span>Trung Quốc - thị trường nhập khẩu  </span>
        </div>
      </div>
    </li>
    <li class="list-group-item">
      <div class="row">
        <div class="col-md-4 " style="padding:0"><img src="http://hhppaper.com/image/cache/data/ch%C3%A0o%20s%C3%A0n%20hhp/caecf57113e3f2bdabf2-300x200.jpg" style="width: 100%">
        </div>
        <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
          <span>Chào sản thành công cổ phiếu HHP  </span>
        </div>
      </div>
    </li>

  </ul>
</div>
<div class="d-flex justify-content-center w-100">
<nav aria-label="Page navigation example" class="mt-4 ">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</div>




</div>
@endsection
