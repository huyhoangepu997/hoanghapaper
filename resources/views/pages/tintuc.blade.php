
@extends('master-layout')
@section('title')
Tin tức
@endsection
@section('content')


<div class="banner-warp">
  <div class="banner">
    <div class="banner-member">
      <img src="images/anh-1.jpg" class="img-fluid" >
      <div class="banner-member-text">
        <div class="container">
          <div class="banner-member-text-title">
            <h2 class="font-bold text-center text-banner" data-aos="fade-up" data-aos-delay="200">TIN TỨC</h2>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container " >
    <div class="row mt-5">

    <!-- cột bên trái -->
        <div class="col-md-9 "  data-aos="fade-up" data-aos-delay="100">
            <ul class="nav nav-tabs codong-tt" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tin tức nội bộ
</a>
              </li>
             
        

               <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Tin tức trong ngành</a>
              </li>
            </ul>

            <!-- tin tức nội bộ -->
            <div class="tab-content" id="myTabContent" data-aos="fade-up" data-aos-delay="200">
              
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
                 <div class="row mt-5 codong-ct">
                   
                    <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
                      <div class="row">
                        <div class="col-md-4">
                         <div class="thumbnail text-center mt-3 ml-3">
                            <img src="http://hhppaper.com/image/cache/data/tin%20t%E1%BB%A9c/small_396_giaysanphamgiay-300x200.jpeg" alt="" style="width:100%;height: 100%">
                        </div>
                        </div>
                        <!-- Blog Content -->
                        <div class="col-md-8 blog-content">
                            <a href="{{ route('tintucchitiet') }}" class="blog-headline">
                                <h5>Trung Quốc - thị trường chủ lực nhập khẩu giấy </h5>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">09/18/2019</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p> Chiếm 19% thị phần nhóm hàng và 18,1% tỷ trọng, Trung Quốc tiếp tục là thị trường chủ lực cung cấp giấy cho Việt Nam trong nửa đầu năm 2018.</p>
                             <a href="{{ route('tintucchitiet') }}"
                                class="btn btn-outline-primary btn-sm mt-3">
                                Đọc tiếp >>
                            </a>
                        </div>
                    </div>
                </div>


                </div>

                  <div class="row mt-3 codong-ct"  data-aos="fade-up" data-aos-delay="200">
                   
                    <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
                      <div class="row">
                        <div class="col-md-4">
                         <div class="thumbnail text-center mt-4 ml-3">
                            <img src="http://hhppaper.com/image/cache/data/tin%20t%E1%BB%A9c/Hoi-dn-giay1-300x200.jpg" alt="" style="width:100%;">
                        </div>
                        </div>
                        <!-- Blog Content -->
                        <div class="col-md-8 blog-content">
                            <a href="#" class="blog-headline">
                                <h5>Hội thảo doanh nghiệp Ngành Giấy về tình hình nhập khẩu giấy thu </h5>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">09/18/2019</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p> Chiếm 19% thị phần nhóm hàng và 18,1% tỷ trọng, Trung Quốc tiếp tục là thị trường chủ lực cung cấp giấy cho Việt Nam trong nửa đầu năm 2018.</p>
                             <a href=""
                                class="btn btn-outline-primary btn-sm mt-3">
                                Đọc tiếp >>
                            </a>
                        </div>
                    </div>
                </div>


                </div>



                  <div class="row mt-3 codong-ct" data-aos="fade-up" data-aos-delay="200">
                   
                    <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
                      <div class="row">
                        <div class="col-md-4">
                         <div class="thumbnail text-center mt-3 ml-3">
                            <img src="http://hhppaper.com/image/cache/data/ch%C3%A0o%20s%C3%A0n%20hhp/caecf57113e3f2bdabf2-300x200.jpg" alt="" style="width:100%;height: 100%">
                        </div>
                        </div>
                        <!-- Blog Content -->
                        <div class="col-md-8 blog-content">
                            <a href="#" class="blog-headline">
                                <h5>Chào sản thành công cổ phiếu HHP</h5>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">09/18/2019</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p> Chiếm 19% thị phần nhóm hàng và 18,1% tỷ trọng, Trung Quốc tiếp tục là thị trường chủ lực cung cấp giấy cho Việt Nam trong nửa đầu năm 2018.</p>
                             <a href=""
                                class="btn btn-outline-primary btn-sm mt-3">
                                Đọc tiếp >>
                            </a>
                        </div>
                    </div>
                </div>


                </div>

                  <div class="row mt-3 codong-ct" data-aos="fade-up" data-aos-delay="200">
                   
                    <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
                      <div class="row">
                        <div class="col-md-4">
                         <div class="thumbnail text-center mt-3 ml-3">
                            <img src="http://hhppaper.com/image/cache/data/C%C3%B4ng%20v%C4%83n%20%C4%91%E1%BA%A1i%20ch%C3%BAng/t%E1%BA%A3i%20xu%E1%BB%91ng-250x150.jpg" alt="" style="width:100%;height: 100%">
                        </div>
                        </div>
                        <!-- Blog Content -->
                        <div class="col-md-8 blog-content">
                            <a href="#" class="blog-headline">
                                <h5>Trung Quốc - thị trường chủ lực nhập khẩu giấy </h5>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">09/18/2019</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p> Chiếm 19% thị phần nhóm hàng và 18,1% tỷ trọng, Trung Quốc tiếp tục là thị trường chủ lực cung cấp giấy cho Việt Nam trong nửa đầu năm 2018.</p>
                             <a href=""
                                class="btn btn-outline-primary btn-sm mt-3">
                                Đọc tiếp >>
                            </a>
                        </div>
                    </div>
                </div>


                </div>
              </div>


              <!-- tin tức trong ngành -->


              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                 <div class="row mt-3 codong-ct">
                   
                    <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
                      <div class="row">
                        <div class="col-md-4">
                         <div class="thumbnail text-center mt-3 ml-3">
                            <img src="http://hhppaper.com/image/cache/data/C%C3%B4ng%20v%C4%83n%20%C4%91%E1%BA%A1i%20ch%C3%BAng/t%E1%BA%A3i%20xu%E1%BB%91ng-250x150.jpg" alt="" style="width:100%;height: 100%">
                        </div>
                        </div>
                        <!-- Blog Content -->
                        <div class="col-md-8 blog-content">
                            <a href="#" class="blog-headline">
                                <h5>Trung Quốc - thị trường chủ lực nhập khẩu giấy </h5>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">09/18/2019</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p> Chiếm 19% thị phần nhóm hàng và 18,1% tỷ trọng, Trung Quốc tiếp tục là thị trường chủ lực cung cấp giấy cho Việt Nam trong nửa đầu năm 2018.</p>
                             <a href=""
                                class="btn btn-outline-primary btn-sm mt-3">
                                Đọc tiếp >>
                            </a>
                        </div>
                    </div>
                </div>


                </div>

                <div class="row mt-5 codong-ct">
                   
                    <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
                      <div class="row">
                        <div class="col-md-4">
                         <div class="thumbnail text-center mt-3 ml-3">
                            <img src="http://hhppaper.com/image/cache/data/tin%20t%E1%BB%A9c/small_396_giaysanphamgiay-300x200.jpeg" alt="" style="width:100%;height: 100%">
                        </div>
                        </div>
                        <!-- Blog Content -->
                        <div class="col-md-8 blog-content">
                            <a href="#" class="blog-headline">
                                <h5>Trung Quốc - thị trường chủ lực nhập khẩu giấy </h5>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">09/18/2019</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p> Chiếm 19% thị phần nhóm hàng và 18,1% tỷ trọng, Trung Quốc tiếp tục là thị trường chủ lực cung cấp giấy cho Việt Nam trong nửa đầu năm 2018.</p>
                             <a href=""
                                class="btn btn-outline-primary btn-sm mt-3">
                                Đọc tiếp >>
                            </a>
                        </div>
                    </div>
                </div>


                </div>


                <div class="row mt-5 codong-ct">
                   
                    <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp" >
                      <div class="row">
                        <div class="col-md-4">
                         <div class="thumbnail text-center mt-3 ml-3">
                            <img src="http://hhppaper.com/image/cache/data/tin%20t%E1%BB%A9c/small_396_giaysanphamgiay-300x200.jpeg" alt="" style="width:100%;height: 100%">
                        </div>
                        </div>
                        <!-- Blog Content -->
                        <div class="col-md-8 blog-content">
                            <a href="#" class="blog-headline">
                                <h5>Trung Quốc - thị trường chủ lực nhập khẩu giấy </h5>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">09/18/2019</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p> Chiếm 19% thị phần nhóm hàng và 18,1% tỷ trọng, Trung Quốc tiếp tục là thị trường chủ lực cung cấp giấy cho Việt Nam trong nửa đầu năm 2018.</p>
                             <a href=""
                                class="btn btn-outline-primary btn-sm mt-3">
                                Đọc tiếp >>
                            </a>
                        </div>
                    </div>
                </div>


                </div>

              </div>
            </div>

               
        </div>
<!-- cột bên phải -->
        <div class="col-md-3 tin-tuc-content"  data-aos="fade-up" data-aos-delay="400">
            <ul class="list-group" >
                <li class="list-group-item text-center font-weight-bold" style="background-color: #058ff7 ; color: white" >TUYỂN DỤNG</li>
              <li class="list-group-item">
                  <div class="row">
                      <div class="col-md-4 " style="padding:0"><img src="http://hhppaper.com/image/data/tin%20t%E1%BB%A9c/paper_FMTV.jpg" style="width: 100%">
                      </div>
                      <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                          <span>Giá giấy và bột giấy thế giới tăng mạnh  </span>
                      </div>
                  </div>
              </li>
              <li class="list-group-item">
                  <div class="row">
                      <div class="col-md-4 " style="padding:0"><img src="http://www.ppivn.vn/userfiles/giaysanphamgiay_QWBM.jpeg" style="width: 100%">
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

              <li class="list-group-item">
                  <div class="row">
                      <div class="col-md-4 " style="padding:0"><img src="http://hhppaper.com/image/data/tin%20t%E1%BB%A9c/paper_FMTV.jpg" style="width: 100%">
                      </div>
                      <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                          <span>Giá giấy và bột giấy thế giới tăng mạnh  </span>
                      </div>
                  </div>
              </li>
              <li class="list-group-item">
                  <div class="row">
                      <div class="col-md-4 " style="padding:0"><img src="http://www.ppivn.vn/userfiles/giaysanphamgiay_QWBM.jpeg" style="width: 100%">
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

    </div>

   


</div>
@endsection
