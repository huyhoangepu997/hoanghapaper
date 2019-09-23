
@extends('master-layout')
@section('title')
Giới thiệu
@endsection
@section('content')


<div class="banner-warp">
  <div class="banner">
    <div class="banner-member">
      <img src="images/anh-1.jpg" class="img-fluid" >
      <div class="banner-member-text">
        <div class="container">
          <div class="banner-member-text-title">
            <h2 class="font-bold text-center text-banner" data-aos="fade-up" data-aos-delay="200">GIỚI THIỆU</h2>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container " >
  <div class="row mt-5">

    <!-- cột bên trái -->
    <div class="col-md-12 mb-4"  data-aos="fade-up" data-aos-delay="100">
      <div class="codongs-tt-title" style="width: 105px" >
        <div  style="padding:10px; color: white">Giới thiệu<i class="fa fa-angle-down" aria-hidden="true" style="font-size: 14px"></i></div>
      </div>
      <div style="margin: 0">
        <ul class="nav nav-tabs codong-tt codongs-tt" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home1-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true">Lịch sử phát triển
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profil1e-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false">Tầm nhìn, sứ mệnh</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact1-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false">Văn hóa - giá trị cốt lõi</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" id="contact22-tab" data-toggle="tab" href="#contact22" role="tab" aria-controls="contact22"2 aria-selected="false">Cơ cấu tổ chức</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" id="contact2-tab" data-toggle="tab" href="#contact23" role="tab" aria-controls="contact2" aria-selected="false">Hình ảnh công ty</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" id="contact2-tab" data-toggle="tab" href="#contact24" role="tab" aria-controls="contact2" aria-selected="false">Công ty thành viên</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" id="contact2-tab" data-toggle="tab" href="#contact25" role="tab" aria-controls="contact2" aria-selected="false">Lời của Chúa</a>
        </li>
      </ul>


        <div class="tab-content" id="v-pills-tabContent" data-aos="fade-up" data-aos-delay="400">

          <!-- về chúng tôi -->
          <div class="tab-pane fade show active pl-4" id="home1" role="tabpanel" aria-labelledby="home1-tab">
            <!-- <h4 class="mt-3 text-gioithieu"  >VỀ CHÚNG TÔI</h4>
            <hr>
            <h4 class="mb-5" style="color: #058ff7">1.1 Giới thiệu chung về tổ chức niêm yết</h4>
            <div class="table-responsive">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Tên công ty</td>
                    <td>CÔNG TY CỔ PHẦN GIẤY HOÀNG HÀ HẢI PHÒNG</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Tên giao dịch quốc tế</td>
                    <td>HAI PHONG HOANG HA PAPER JOINT STOCK COMPANY</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Mã chứng khoán</td>
                    <td>HHP</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Trụ sở chính</td>
                    <td>Số 194 đường Kiều Hạ, Phường Đông Hải 2, Quận Hải An, Thành phố Hải Phòng, Việt Nam</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Văn phòng đại diện</td>
                    <td>Số 29, ngõ 53 đường Nguyễn Khoái, Phường Bạch Đằng, Quận Hai Bà Trưng, Thành phố Hà Nội, Việt Nam</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Điện thoại</td>
                    <td>0225 3979952</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Fax</td>
                    <td>0225 3979951</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>Website</td>
                    <td><a href="www.hhppaper.com">www.hhppaper.com</a></td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>Giấy CNĐKKD</td>
                    <td>Số 0201282851 do Sở Kế hoạch và Đầu tư Hải Phòng cấp lần đầu ngày 05/11/2012, đăng ký thay đổi lần thứ 05 ngày 27/08/2019</td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>Vốn điều lệ đăng ký</td>
                    <td>180.000.000.000 (Một trăm tám mươi tỷ) đồng</td>
                  </tr>
                  <tr>
                    <th scope="row">11</th>
                    <td>Vốn thực góp</td>
                    <td>180.000.000.000 (Một trăm tám mươi tỷ) đồng</td>
                  </tr>
                  <tr>
                    <th scope="row">12</th>
                    <td>Người đại diện theo pháp luật</td>
                    <td>Bà Trần Thị Thu Phương - Tổng Giám đốc</td>
                  </tr>
                  <tr>
                    <th scope="row">13</th>
                    <td>Tài khoản ngân hàng</td>
                    <td>114.0000.97519 tại ngân hàng TMCP Công Thương Việt Nam - Chi nhánh Ngô Quyền</td>
                  </tr>
                  <tr>
                    <th scope="row">14</th>
                    <td>Ngày chính thức được chấp thuận là công ty đại chúng</td>
                    <td>Ngày 16/05/2018 (theo Văn bản số 3105/UBCK-GSĐC ngày 16/05/2018 của Ủy Ban Chứng Khoán Nhà Nước)</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <h4 class="my-4 text-uppercase" style="font-size: 20px;">Ngành nghề kinh doanh</h4>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" class="td-style">STT</th>
                    <th scope="col" class="td-style">Tên ngành, nghề kinh doanh</th>
                    <th scope="col">Mã ngành, nghề kinh doanh</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Sản xuất bột giấy, giấy và bìa</td>
                    <td class="td-style">1701 (Chính)</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">2</th>
                    <td>Sản xuất giấy nhăn, bìa nhăn, bao bì từ giấy và bìa</td>
                    <td rowspan="2" class="td-style">1702</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Sản xuất bao bì bằng giấy, bìa, giấy nhăn và giấy bìa</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">3</th>
                    <td>Sản xuất các sản phẩm khác từ giấy và bìa chưa được phân vào đâu</td>
                    <td rowspan="2" class="td-style">1709</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Sản xuất giấy viết, giấy in, giấy tráng phấn. Sản xuất, gia công giấy vệ sinh</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">4</th>
                    <td>Bán buôn đồ dùng khác cho gia đình</td>
                    <td rowspan="2" class="td-style">4649</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Giấy, bìa carton, giấy tráng phấn</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">5</th>
                    <td>Hoạt động dịch vụ hỗ trợ kinh doanh khác còn lại chưa được phân vào đâu</td>
                    <td rowspan="2" class="td-style">8299</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Dịch vụ xuất nhập khẩu hàng hóa</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">6</th>
                    <td>Bán buôn chuyên doanh khác chưa được phân vào đâu</td>
                    <td rowspan="2" class="td-style">4669</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Phế liệu, phế thải kim loại, phi kim loại (không bao gồm bán buôn các loại phế liệu nhập khẩu gây ô nhiễm môi trường), nguyên liệu làm giấy</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">7</th>
                    <td>Bán buôn máy móc, thiết bị và phụ tùng máy khác</td>
                    <td rowspan="2" class="td-style">4659</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Máy móc, thiết bị ngành giấy. Thiết bị thủy lực, máy nén khí, máy cơ khí, thiết bị phòng cháy chữa cháy, thiết bị bảo hộ lao động</td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>In ấn</td>
                    <td class="td-style">1811</td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>Dịch vụ liên quan đến in</td>
                    <td class="td-style">1812</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">10</th>
                    <td>Bán buôn nhiên liệu rắn, lỏng, khí và các sản phẩm liên quan</td>
                    <td rowspan="2" class="td-style">4661</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Nhựa đường, than đá và nhiên liệu rắn khác, dầu thô, xăng dầu, khí đốt và các sản phẩm liên quan</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">11</th>
                    <td>Photo, chuẩn bị tài liệu và các hoạt động hỗ trợ văn phòng đặc biệt khác</td>
                    <td rowspan="2" class="td-style">8219</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Photo, chuẩn bị tài liệu</td>
                  </tr>
                  <tr>
                    <th scope="row">12</th>
                    <td>Kho bãi và lưu giữ hàng hóa</td>
                    <td class="td-style">5210</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">13</th>
                    <td>Lắp đặt máy móc và thiết bị công nghiệp</td>
                    <td rowspan="2" class="td-style">3320</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Lắp đặt máy móc, thiết bị ngành giấy</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">14</th>
                    <td>Hoạt động chuyên môn, khoa học và công nghệ khác chưa được phân vào đâu</td>
                    <td rowspan="2" class="td-style">7490</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Chuyển giao công nghệ sản xuất giấy</td>
                  </tr>
                  <tr>
                    <th scope="row">15</th>
                    <td>Kinh doanh bất động sản, quyền sử dụng đất thuộc chủ sở hữu, chủ sử dụng hoặc đi thuê</td>
                    <td class="td-style">6810</td>
                  </tr>
                  <tr>
                    <th scope="row">16</th>
                    <td>Bốc xếp hàng hóa</td>
                    <td class="td-style">5224</td>
                  </tr>
                  <tr>
                    <th scope="row">17</th>
                    <td>Vận tải hàng hóa bằng đường bộ</td>
                    <td class="td-style">4933</td>
                  </tr>
                  <tr>
                    <th scope="row">18</th>
                    <td>Vận tải hàng hóa đường thuỷ nội địa</td>
                    <td class="td-style">5022</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">19</th>
                    <td>Vận tải hành khách đường bộ khác</td>
                    <td rowspan="2" class="td-style">4932</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Vận tải hành khách bằng xe khách nội tỉnh, liên tỉnh. Vận tải hành khách bằng ô tô theo tuyến cố định và theo hợp đồng</td>
                  </tr>
                  <tr>
                    <th scope="row">20</th>
                    <td>Phá dỡ</td>
                    <td class="td-style">4311</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">21</th>
                    <td>Chuẩn bị mặt bằng</td>
                    <td rowspan="2" class="td-style">4312</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: San lấp mặt bằng</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">22</th>
                    <td>Hoạt động kiến trúc và tư vấn kỹ thuật có liên quan</td>
                    <td rowspan="2" class="td-style">7110</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Tư vấn lập dự án. Tư vấn lập hồ sơ mời thầu, hồ sơ dự thầu công trình xây dựng</td>
                  </tr>
                  <tr>
                    <th scope="row">23</th>
                    <td>Xây dựng nhà để ở</td>
                    <td class="td-style">4101</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">24</th>
                    <td>Hoạt động liên quan đến kế toán, kiểm toán và tư vấn về thuế</td>
                    <td rowspan="2" class="td-style">6920</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Dịch vụ tư vấn kế toán. Dịch vụ kế toán thuế</td>
                  </tr>
                  <tr>
                    <th scope="row">25</th>
                    <td>Xây dựng nhà không để ở</td>
                    <td class="td-style">4102</td>
                  </tr>
                  <tr>
                    <th scope="row">26</th>
                    <td>Xây dựng công trình đường sắt</td>
                    <td class="td-style">4211</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">27</th>
                    <td>Cho thuê xe có động cơ</td>
                    <td rowspan="2" class="td-style">7710</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Cho thuê ôtô; Cho thuê xe có động cơ khác</td>
                  </tr>
                  <tr>
                    <th scope="row">28</th>
                    <td>Xây dựng công trình đường bộ</td>
                    <td class="td-style">4212</td>
                  </tr>
                  <tr>
                    <th scope="row">29</th>
                    <td>Xây dựng công trình điện</td>
                    <td class="td-style">4221</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">30</th>
                    <td>Xây dựng công trình cấp, thoát nước</td>
                    <td rowspan="2" class="td-style">4222</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Xây dựng công trình thủy lợi</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">31</th>
                    <td>Xây dựng công trình chế biến, chế tạo</td>
                    <td rowspan="2" class="td-style">4293</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Xây dựng công trình công nghiệp</td>
                  </tr>
                  <tr>
                    <th scope="row" rowspan="2">32</th>
                    <td>Xây dựng công trình kỹ thuật dân dụng khác</td>
                    <td rowspan="2" class="td-style">4299</td>
                  </tr>
                  <tr>
                    <td>Chi tiết: Xây dựng công trình dân dụng, cơ sở hạ tầng kỹ thuật khu công nghiệp, cơ sở hạ tầng khu đô thị</td>
                  </tr>
                </tbody>
              </table> -->
              <h4 class="my-4" style="color: #058ff7;text-align: center;">Lịch sử phát triển</h4>
              <p>Công ty Cổ phần Giấy Hoàng Hà Hải Phòng (mã số doanh nghiệp 0201282851) có trụ sở chính đặt tại Số 194 đường Kiều Hạ, phường Đông Hải 2, quận Hải An, thành phố Hải Phòng, Việt Nam được thành lập bởi 05 cổ đông sáng lập vào ngày 05 tháng 11 năm 2012, với số vốn góp ban đầu là 18 tỷ đồng để thực hiện dự án Tái cấu trúc Nhà máy sản xuất giấy Đức Dương.</p>
              <p>Nhà máy sản xuất giấy Đức Dương do Hợp tác xã Xí nghiệp sản xuất Giấy Đức Dương (Xí nghiệp Đức Dương) là chủ đầu tư được khởi công xây dựng năm 2007, sau gần 2 năm xây dựng và lắp đặt, dây chuyền sản xuất giấy Kraft công suất 15.000 tấn/năm được hoàn thành và bắt đầu đưa vào sử dụng từ đầu năm 2009. Qua thời gian vận hành chạy thử thành công, đến năm 2010 Nhà máy đã đi vào sản xuất, tuy nhiên sản lượng thời điểm này chỉ đạt 30-50% công suất với dòng sản phẩm giấy Kraft sóng thường. Sang năm 2011 Ngân hàng áp dụng việc giảm hạn mức vay, Xí nghiệp Đức Dương gặp khó khăn về vốn, chỉ hoạt động cầm chừng và đến cuối năm 2011 đã phải cho dừng sản xuất, không còn khả năng trả nợ và có nguy cơ phá sản. Chính vì vậy, Ngân hàng đã ra thông báo tìm kiếm đối tác để bán tài sản thế chấp của Xí nghiệp Đức Dương nhằm thu hồi nợ.</p>
              <p>Được sự giới thiệu của Vietinbank, tháng 09/2012 các cổ đông sáng lập đã khảo sát thực tế tài sản của Xí nghiệp Đức Dương, sau khi cân nhắc, tính toán, lên phương án, bàn bạc, trao đổi thống nhất với Ngân hàng đã quyết định thành lập Công ty Cổ phần Giấy Hoàng Hà Hải Phòng vào tháng 11/2012 để mua lại toàn bộ Nhà máy của Xí nghiệp Đức Dương, tận dụng toàn bộ cơ sở vật chất và pháp lý hiện có, tiến hành đầu tư cải tạo, bổ sung, nâng cấp dây chuyền để chuyển đổi sang dòng sản phẩm giấy Kraft sóng gia keo. Do có thế mạnh về công nghệ sản xuất giấy, khả năng, tiềm lực về nguồn vốn và kinh nghiệm quản lý, chỉ 8 tháng sau khi nhận bàn giao, Công ty đã đưa Nhà máy giấy Hoàng Hà đi vào hoạt động ổn định (tiết kiệm được rất nhiều thời gian nếu đầu tư mới một nhà máy giấy) với dòng sản phẩm giấy Kraft sóng gia keo (giấy bao bì carton) mang thương hiệu Giấy Hoàng Hà. Cho đến nay, các chỉ tiêu về sản lượng, doanh thu, lợi nhuận của Công ty liên tục tăng trưởng qua các năm.</p>
              <p>Công ty tự hào đã khôi phục được một Nhà máy có nguy cơ phải phá bỏ hoàn toàn, giảm thiểu lãng phí tài sản Quốc gia, giảm được khoản nợ xấu đáng kể cho Ngân hàng. Đến nay sau gần 07 năm xây dựng và phát triển, Công ty Giấy Hoàng Hà đã trở thành một Công ty đại chúng với số vốn điều lệ lên tới 180 tỷ đồng. Hệ thống Giấy Hoàng Hà hiện có hai Nhà máy giấy tại Hải Phòng và Hà Nam, doanh thu năm 2018 hợp nhất đạt trên 245 tỷ đồng, tăng 74,4% so với năm 2017, lợi nhuận sau thuế hợp nhất đạt trên 10,4 tỷ đồng, tăng 24% so với năm 2017. Đặc biệt hơn là Công ty đã tạo được công ăn việc làm cho hàng trăm lao động tại Hải Phòng và Hà Nam, đóng góp trên 30 tỷ đồng vào Ngân sách Nhà nước thành phố Hải Phòng vàtrên 13,5 tỷ vào Ngân sách Nhà nước tỉnh Hà Nam, được Cục thuế thành phố Hải Phòng, Cục thuế tỉnh Hà Nam, Tổng cục Thuế, Bộ Tài chính tặng Giấy khen/Bằng khen là đơn vị chấp hành tốt chính sách pháp luật về thuế. Công ty cũng là một trong số rất ít các doanh nghiệp sản xuất giấy tại Việt Nam hiện nay được Tổ chức BUREAU VERITAS cấp chứng chỉ FSC - chứng nhận của Hội đồng quản lý rừng thế giới FSC dành cho nhà sản xuất các sản phẩm từ rừng đảm bảo được tiêu chí về phát triển bền vững, cân bằng được các giá trị bảo vệ môi trường (rừng) với lợi ích xã hội của các bên liên quan (nhà sản xuất, xã hội và người dân địa phương).</p>
              <p>Trong những năm qua, bằng nội lực mạnh mẽ và ý chí quyết tâm, tầm nhìn của người lãnh đạo doanh nghiệp, sự đoàn kết đồng lòng của đội ngũ cán bộ nhân viên, Công ty đã có những bước tăng trưởng ấn tượng và dần khẳng định được vị thế, thương hiệu trên thị trường. Là một doanh nghiệp cung cấp nguyên liệu đầu vào cho các doanh nghiệp sản xuất bao bì carton trong nước, Công ty đã lựa chọn Sứ mệnh của mình là “Đồng hành và Phát triển cùng Khách hàng” và cam kết Luôn đáp ứng trên mức mong đợi của Khách hàng về chất lượng sản phẩm và phương thức phục vụ.Bên cạnh đó, Công ty luôn chú trọng đẩy mạnh đổi mới toàn diện các mặt hoạt động, nhất là công tác tuyên truyền, triển khai và duy trì 5S đã có những chuyển biến tích cực; Trình độ quản lý không ngừng được nâng cao, tiết giảm chi phí, tăng năng suất lao động, cải thiện đời sống vật chất và tinh thần cho anh em cán bộ, công nhân viên.</p>
              <p>Tại Công ty Giấy Hoàng Hà, con người luôn là yếu tố trung tâm tạo nên giá trị cốt lõi của doanh nghiệp. Bên cạnh việc khích lệ tinh thần, tạo động lực cho người lao động thông qua các cuộc thi Lao động giỏi, Sáng tác Slogan, tổ chức các buổi du lịch dã ngoại định kỳ, Công ty còn chú trọng tập trung vào công tác đào tạo nội bộ để chia sẻ kiến thức, kinh nghiệm, nâng cao tay nghề, nghiệp vụ, tìm hiểu văn hóa giá trị cốt lõi cho toàn thể CBCNV.</p>
              <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh1.PNG') }}" alt="" width="100%">
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh2.PNG') }}" alt="" width="100%">
              </div>
            </div>
            <p class="font-italic text-center mt-2">Trụ sở Công ty Cổ phần Giấy Hoàng Hà Hà Nam</p>
            <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh3.PNG') }}" alt="" width="100%">
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh4.PNG') }}" alt="" width="100%">
              </div>
            </div>
            <p class="font-italic text-center mt-2">Giấy khen về thành tích chấp hành tốt chính sách, pháp luật thuế của Công ty con</p>
              <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh5.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Dây chuyền Xeo</p>
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh6.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Hệ thống xử lý nước thải</p>
              </div>
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh7.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Tháp lắng bột</p>
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh8.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Hệ thống nồi hơi, tháp lắng vi sinh</p>
              </div>
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh9.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Kho nguyên liệu, hóa chất</p>
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh10.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Kho thành phẩm</p>
              </div>
            </div>
          </div>
        
          <div class="tab-pane fade pl-4" id="profile1" role="tabpanel" aria-labelledby="profile1-tab">
            <h4 class="mt-3 text-gioithieu">CƠ CẤU TỔ CHỨC</h4>
            <hr>
            <p>Hiện tại, CTCP Giấy Hoàng Hà Hải Phòng được tổ chức và hoạt động tuân thủ theo:</p>
            <ul style="margin-left: 20px;">
              <li>Luật Doanh nghiệp được Quốc hội nước Cộng hòa xã hội chủ nghĩa Việt Nam ban hành và có hiệu lực từ ngày 01/07/2014.</li>
              <li>Điều lệ Công ty được ĐHĐCĐ thường niên năm 2018 thông qua ngày 13/04/2018 có sửa đổi, bổ sung theo Điều lệ mẫu áp dụng cho Công ty đại chúng.</li>
              <li>Trong quá trình hoạt động và phát triển, bộ máy của Công ty đã được xây dựng, điều chỉnh và kiện toàn để phù hợp với chiến lược phát triển, yêu cầu thực tế và đặc điểm hoạt động của Công ty.</li>
            </ul>
            <h5 class="text-center">Sơ đồ 1: Cơ cấu tổ chức CTCP Giấy Hoàng Hà Hải Phòng</h5>
            <div class="text-center"><img src="{{ asset('images/about-1.PNG') }}" alt="" ></div>
            <h5>Công ty mẹ: Công ty CP Giấy Hoàng Hà Hải Phòng</h5>
            <ul style="margin-left: 20px;">
              <li>Địa chỉ trụ sở chính: Số 194 đường Kiều Hạ, phường Đông Hải 2, quận Hải An, thành phố Hải Phòng, Việt Nam</li>
              <li>VPĐD tại Hà Nội: Số 29, ngõ 53 Nguyễn Khoái, Phường Bạch Đằng, quận Hai Bà Trưng, thành phố Hà Nội.</li>
              <li>Điện thoại: 0225 3979952</li>
              <li>Fax: 0225 3979951</li>
              <li>Website: hhppaper.com</li>
              <li>Email: hhppaper@gmail.com</li>
            </ul>
            <h5>Công ty con: Công ty CP Giấy Hoàng Hà Hà Nam</h5>
            <ul style="margin-left: 20px;">
              <li>Địa chỉ: KCN Đồng Văn I, Đồng Văn, Thị trấn Đồng Văn, huyện Duy Tiên, tỉnh Hà Nam, Việt Nam</li>
              <li>• Điện thoại: 0226 3582866</li>
              <li>Fax: 0226 3582867</li>
            </ul>
            <h4 class="mt-3 text-gioithieu">1. Cơ cấu bộ máy quản lý của Công ty</h4>
            <h5 class="text-center">Sơ đồ 1: Cơ cấu tổ chức CTCP Giấy Hoàng Hà Hải Phòng</h5>
            <div class="text-center"><img src="{{ asset('images/sodo.PNG') }}" alt="" ></div>
            <h5 style="margin-top:20px;">Đại hội đồng cổ đông</h5>
            <ul style="margin-left: 20px;">
              <li style="list-style: none;font-weight: 500;">Đại hội đồng cổ đông là cơ quan có thẩm quyền cao nhất của Công ty, quyết định những vấn đề thuộc nhiệm vụ và quyền hạn được Điều lệ Công ty và Pháp luật liên quan quy định. Đại hội đồng cổ đông có các quyền và nhiệm vụ sau:</li>
              <li> Thông qua, sửa đổi, bổ sung Điều lệ Công ty;.</li>
              <li> Thông qua kế hoạch phát triển Công ty, thông qua báo cáo tài chính hàng năm, báo cáo của HĐQT, Ban kiểm soát và của Kiểm toán viên;</li>
              <li>Quyết định mức cổ tức thanh toán hàng năm cho mỗi loại cổ phần phù hợp với Luật Doanh nghiệp và các quyền gắn liền với loại cổ phần đó;</li>
              <li> Quyết định số tiền thù lao của các thành viên Hội đồng quản trị và Báo cáo tiền thù lao của Hội đồng quản trị</li>
              <li>Quyết định tổ chức lại và giải thể Công ty</li>
              <li> Bầu, miễn nhiệm, bãi nhiệm Thành viên HĐQT, Ban kiểm soát</li>
              <li>  Quyết định số thành viên HĐQT;</li>
              <li>Các quyền khác được quy định tại Điều lệ Công ty.</li>
            </ul>
            <h5 style="margin-top:20px;"> Hội đồng quản trị</h5>
            <ul style="margin-left: 20px;">
              <li style="list-style: none;font-weight: 500;">HĐQT là cơ quan quản trị của Công ty, do ĐHĐCĐ bầu ra gồm 05 thành viên, có toàn quyền nhân danh Công ty để quyết định các vấn đề liên quan đến mục đích, quyền lợi của Công ty, trừ những vấn đề thuộc thẩm quyền Đại hội đồng cổ đông. HĐQT có các quyền sau:</li>
              <li> Quyết định cơ cấu tổ chức, bộ máy của Công ty</li>
              <li>Quyết định chiến lược đầu tư, phát triển của Công ty trên cơ sở các mục đích chiến lược do ĐHĐCĐ thông qua</li>
              <li>- Bổ nhiệm, miễn nhiệm, cách chức, giám sát hoạt động của Ban Tổng Giám đốc</li>
              <li>Kiến nghị sửa đổi bổ sung Điều lệ, báo cáo tình hình kinh doanh hàng năm, Báo cáo tài chính, quyết toán năm, phương án phân phối lợi nhuận và phương hướng phát triển, kế hoạch phát triển sản xuất kinh doanh và ngân sách hàng năm trình ĐHĐCĐ</li>
              <li>Kiến nghị việc tổ chức lại, giải thể hoặc yêu cầu phá sản công ty</li>
              <li> Bầu, miễn nhiệm, bãi nhiệm Thành viên HĐQT, Ban kiểm soát</li>
              <li>  Quyết định số thành viên HĐQT;</li>
              <li>Các quyền khác được quy định tại Điều lệ.</li>
              <p>HĐQT của CTCP Giấy Ho&agrave;ng H&agrave; Hải Ph&ograve;ng bao gồm 05 th&agrave;nh vi&ecirc;n:</p>
                          <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td>Ông Trần Kim Gia</td>
                    <td>Chủ tịch HĐQT</td>
                  </tr>
                  <tr>
                    <td>Ông Nguyễn Huy Long</td>
                    <td>Thành viên HĐQT</td>
                  </tr>
                  <tr>
                    <td>Ông Nguyễn Trung Thành</td>
                    <td>Thành viên HĐQT</td>
                  </tr>
                  <tr>
                    <td>Bà Trần Thị Thu Phương</td>
                    <td>Thành viên HĐQTT</td>
                  </tr>
                    <tr>
                    <td>Bà Nguyễn Thị Ngân</td>
                    <td>Thành viên HĐQT</td>
                  </tr>
                </tbody>
              </table>
              <h5 style="margin-top:20px;"> Ban Kiểm soát </h5>
              <ul style="margin-left: 20px;">
                <li style="list-style: none;font-weight: 500;">Ban kiểm soát do ĐHĐCĐ bầu ra gồm 03 thành viên, thay mặt cổ đông để kiểm soát mọi hoạt động quản trị và điều hành sản xuất kinh doanh của Công ty. BKS chịu trách nhiệm trước ĐHĐCĐ và pháp luật về những công việc thực hiện theo quyền và nghĩa vụ như:</li>
                <li> Kiểm tra sổ sách kế toán và các Báo cáo tài chính của Công ty, kiểm tra tính hợp lý, hợp pháp của các hoạt động sản xuất kinh doanh và tài chính Công ty, kiểm tra việc thực hiện các nghị quyết, quyết định của HĐQT</li>
                <li> Trình ĐHĐCĐ báo cáo thẩm tra các báo cáo tài chính của Công ty, đồng thời có quyền trình bày ý kiến độc lập của mình về kết quả thẩm tra các vấn đề liên quan tới hoạt động kinh doanh, hoạt động của HĐQT và Ban Tổng Giám đốc</li>
                <li>Yêu cầu HĐQT triệu tập ĐHĐCĐ bất thường trong trường hợp xét thấy cần thiết</li>
                <li>Các quyền khác được quy định tại Điều lệ</li>
              </ul>
              <h5 style="margin-top:20px;"> Ban Kiểm soát </h5>
              <p>Ban kiểm soát do ĐHĐCĐ bầu ra gồm 03 thành viên, thay mặt cổ đông để kiểm soát mọi hoạt động quản trị và điều hành sản xuất kinh doanh của Công ty. BKS chịu trách nhiệm trước ĐHĐCĐ và pháp luật về những công việc thực hiện theo quyền và nghĩa vụ như</p>
              <ul style="margin-left: 20px;">

                <li>Quyết định cơ cấu tổ chức, bộ máy của Công ty;</li>
                <li>Quyết định chiến lược đầu tư, phát triển của Công ty trên cơ sở các mục đích chiến lược do ĐHĐCĐ thông qua;</li>
                <li>Bổ nhiệm, miễn nhiệm, cách chức, giám sát hoạt động của Ban Tổng Giám đốc;</li>
                <li>Kiến nghị sửa đổi bổ sung Điều lệ, báo cáo tình hình kinh doanh hàng năm, Báo cáo tài chính, quyết toán năm, phương án phân phối lợi nhuận và phương hướng phát triển, kế hoạch phát triển sản xuất kinh doanh và ngân sách hàng năm trình ĐHĐCĐ;</li>
                <li>Kiến nghị việc tổ chức lại, giải thể hoặc yêu cầu phá sản công ty;</li>
                <li>Triệu tập, chỉ đạo chuẩn bị nội dung và chương trình cho các cuộc họp ĐHĐCĐ;</li>
                <li>Đề xuất việc tái cơ cấu lại hoặc giải thể công ty;</li>
                <li>Các quyền khác được quy định tại Điều lệ.</li>
              </ul>
              <p>HĐQT của CTCP Giấy Hoàng Hà Hải Phòng bao gồm 05 thành viên:</p>
              <div class="table-responsive">
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Ông Trần Kim Gia</td>
                      <td>Chủ tịch HĐQT</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Ông Nguyễn Huy Long</td>
                      <td>Thành viên HĐQT</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Ông Nguyễn Trung Thành</td>
                      <td>Thành viên HĐQT</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Bà Trần Thị Thu Phương</td>
                      <td>Thành viên HĐQT</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>VBà Nguyễn Thị Ngân</td>
                      <td>Thành viên HĐQT</td>
                    </tr>                 
                  </tbody>
                </table>
              </div>
            <h5 style="margin-top:20px;">Ban Kiểm soát </h5>
            <p>Ban kiểm soát do ĐHĐCĐ bầu ra gồm 03 thành viên, thay mặt cổ đông để kiểm soát mọi hoạt động quản trị và điều hành sản xuất kinh doanh của Công ty. BKS chịu trách nhiệm trước ĐHĐCĐ và pháp luật về những công việc thực hiện theo quyền và nghĩa vụ như:</p>
            <ul style="margin-left: 20px;">
                <li>Kiểm tra sổ sách kế toán và các Báo cáo tài chính của Công ty, kiểm tra tính hợp lý, hợp pháp của các hoạt động sản xuất kinh doanh và tài chính Công ty, kiểm tra việc thực hiện các nghị quyết, quyết định của HĐQT;</li>
                <li>Trình ĐHĐCĐ báo cáo thẩm tra các báo cáo tài chính của Công ty, đồng thời có quyền trình bày ý kiến độc lập của mình về kết quả thẩm tra các vấn đề liên quan tới hoạt động kinh doanh, hoạt động của HĐQT và Ban Tổng Giám đốc;</li>
                <li>Bổ nhiệm, miễn nhiệm, cách chức, giám sát hoạt động của Ban Tổng Giám đốc;</li>
                <li>Yêu cầu HĐQT triệu tập ĐHĐCĐ bất thường trong trường hợp xét thấy cần thiết;</li>
                <li>Các quyền khác được quy định tại Điều lệ.</li>
              </ul>
            <p>Hiện tại, Ban Kiểm soát của Công ty gồm 03 thành viên bao gồm:</p>
            <div class="table-responsive">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Bà Đào Thị Ngân</td>
                    <td>Trưởng Ban</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bà Đinh Thị Hồng</td>
                    <td>Thành viên</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Bà Đỗ Thị Vươn</td>
                    <td>Thành viên</td>
                  </tr>       
                </tbody>
              </table>
            </div>
            <h5 style="margin-top:20px;">Ban Tổng Giám đốc</h5>
            <p>Ban Tổng Giám đốc Công ty do Hội đồng quản trị bổ nhiệm, chịu sự giám sát của Hội đồng quản trị và chịu trách nhiệm trước Đại hội đồng cổ đông, Hội đồng quản trị và trước pháp luật về việc thực hiện các quyền và nhiệm vụ được giao. Tổng Giám đốc có nhiệm vụ:</p>
            <ul style="margin-left: 20px;">
              <li>Tổ chức điều hành, quản lý mọi hoạt động sản xuất kinh doanh của Công ty theo nghị quyết của ĐHĐCĐ, quyết định của HĐQT, Điều lệ Công ty và tuân thủ pháp luật;</li>
              <li>Xây dựng và trình HĐQT các quy chế quản lý điều hành nội bộ, kế hoạch sản xuất kinh doanh, kế hoạch tài chính hàng năm và dài hạn của Công ty;</li>
              <li>Báo cáo HĐQT về tình hình hoạt động, kết quả sản xuất kinh doanh, chịu trách nhiệm trước ĐHĐCĐ, HĐQT và Pháp luật về những sai phạm gây tổn thất cho Công ty;</li>
              <li>Đề nghị HĐQT quyết định bổ nhiệm, miễn nhiệm, khen thưởng, kỷ luật đối với Phó Tổng Giám đốc, Kế toán trưởng;</li>
              <li>Ký kết, thực hiện các hợp đồng theo quy định của pháp luật;</li>
              <li>Thực hiện các nghị quyết của HĐQT và ĐHĐCĐ, kế hoạch kinh doanh và kế hoạch đầu tư của Công ty đã được HĐQT và ĐHĐCĐ thông qua;</li>
              <li>Các quyền khác được quy định tại Điều lệ Công ty.</li>
            </ul>
            <div class="table-responsive">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Bà Trần Thị Thu Phương</td>
                    <td>Tổng Giám đốc</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Ông Nguyễn Vinh Quang</td>
                    <td>Phó Tổng Giám đốc</td>
                  </tr>     
                </tbody>
              </table>
            </div>
            <h5 style="margin-top:20px;">Các phòng ban chức năng</h5>
            <p class="font-italic">Phòng Tài chính – Kế toán</p>
            <p>Các phòng ban chức năng có chức năng tham mưu, giúp việc cho HĐQT, Ban TGĐ về công tác tài chính kế toán, cụ thể là:</p>

            <ul style="margin-left: 20px;">
              <li>Theo dõi, phản ánh sự lưu chuyển nguồn vốn kinh doanh của Công ty và tham mưu cho Ban lãnh đạo các vấn đề liên quan đảm bảo việc luân chuyển vốn, sử dụng vốn của công ty hiệu quả nhất;</li>
              <li>Kiểm tra, tính toán phân tích tài chính các hợp đồng, dự án của Công ty;</li>
              <li>Chịu trách nhiệm về số liệu báo cáo tài chính kế toán trước Hội đồng quản trị, Ban Tổng Giám đốc và các Cơ quan hữu quan. Theo dõi phản ánh đúng tình hình tài chính của công ty;</li>
              <li>Xây dựng kế hoạch tài chính năm, kế hoạch trung hạn, dài hạn của Công ty trình BTGĐ, HĐQT phê duyệt;</li>
              <li>Tham mưu cho Ban Tổng Giám đốc về chế độ kế toán và những thay đổi của chế độ qua từng thời kỳ trong hoạt động kinh doanh. Tổ chức công tác kế toán, thống kê và bộ máy kế toán phù hợp với công tác tổ chức sản xuất, kinh doanh theo yêu cầu của Công ty;</li>
              <li>Tổ chức ghi chép tính toán và phản ánh chính xác, trung thực, kịp thời, đầy đủ toàn bộ tài sản và phân tích kết quả sản xuất kinh doanh của Công ty;</li>
              <li>Xác định và phản ánh chính xác, kịp thời, đúng chế độ, kết quả kiểm kê tài sản hàng kỳ. Đề xuất xử lý các khoản hao hụt, mất mát, hư hỏng (nếu có);</li>
              <li>Xét duyệt các báo cáo kế toán, thống kê và báo cáo tài chính của đơn vị trực thuộc. Lập, tổng hợp đầy đủ và gửi đúng hạn báo cáo kế toán, thống kê và quyết toán tài chính của Công ty theo chế độ qui định;</li>
              <li>Tổ chức kiểm tra kế toán trong nội bộ Công ty;</li>
              <li>Nghiên cứu các chế độ chính sách trong lĩnh vực thuế, tài chính, thống kê, luật doanh nghiệp… của Nhà nước liên quan đến hoạt động của Công ty nhằm đưa ra cách thực hiện phù hợp;</li>
              <li>Tổ chức phổ biến và hướng dẫn kịp thời các chế độ, thể lệ tài chính, kế toán, thống kê hiện hành cho nội bộ bộ phận cũng như các bộ phận liên quan;</li>
              <li>Quản lý việc chuyển nhượng cổ phần, cổ phiếu của Công ty; phát hành sổ cổ đông Công ty;</li>
              <li>Tổ chức bảo quản, lưu trữ các tài liệu kế toán, giữ bí mật các tài liệu và số liệu kế toán của công ty.</li>
            </ul>
            <p class="font-italic">Phòng Nhân sự</p>
            <p>Là phòng có chức năng tham mưu giúp việc cho HĐQT/BTGĐ để quản lý, điều hành công ty trong lĩnh vực nhân sự. Phòng nhân sự có các chức năng, nhiệm vụ cụ thể như sau:</p>

            <ul style="margin-left: 20px;">
              <li>Đề xuất, tham mưu cho HĐQT/ BTGĐ xây dựng chiến lược phát triển nhân sự  đáp ứng chiến lược kinh doanh của Công ty;</li>
              <li>Nghiên cứu, đề xuất xây dựng mô hình tổ chức bộ máy điều hành của Công ty;</li>
              <li>Xây dựng chính sách nhân sự và chế độ đãi ngộ hợp lý trong nội bộ Công ty. Chủ động đề xuất, trực tiếp xây dựng các quy định, quy chế nội bộ liên quan đến công tác nhân sự của Công ty;</li>
              <li>Đảm bảo nguồn nhân lực cho các phòng/ban thành viên; Điều phối, đánh giá công việc, giám sát hiệu quả sử dụng nhân lực của các phòng/ban thành viên;</li>
              <li>Tổ chức thực hiện, giám sát việc thực hiện kỷ luật lao động, các quy chế quản lý nội bộ. Đề xuất khen thưởng, kỷ luật đối với CBCNV;</li>
              <li>Chịu trách nhiệm truyền thông nội bộ các vấn đề liên quan đến nhân sự để phát triển văn hóa doanh nghiệp;</li>
              <li>Hỗ trợ các bộ phận khác trong việc quản lý nhân sự, công tác đào tạo nhân viên, cách thức tuyển dụng nhân sự…;</li>
              
            </ul>
            <p class="font-italic">Phòng Đầu tư</p>
            <p>Là phòng có chức năng tham mưu giúp việc cho HĐQT/Ban Tổng Giám đốc ra quyết định các vấn đề thuộc lĩnh vực Quản lý đầu tư, xúc tiến đầu tư. Phòng đầu tư có nhiệm vụ cụ thể như sau:</p>

            <ul style="margin-left: 20px;">
              <li>Lên kế hoạch, tổ chức thực hiện và giám sát hiệu quả các hoạt động đầu tư của Công ty;</li>
              <li>Làm việc với các đơn vị, phòng ban khác trong Công ty để hoàn thành các công việc HĐQT đề ra;</li>
              <li>Chấp hành nghiêm chỉnh các chế độ quản lý kinh tế, tài chính, chế độ báo cáo của Công ty;</li>
              <li>Mọi hoạt động của Phòng Đầu tư phải tuân thủ theo các quy định của pháp luật hiện hành</li>           
            </ul>

            <p class="font-italic">Phòng Kinh doanh</p>
            <p>Đây là bộ phận hết sức quan trọng, đóng vai trò chủ chốt trong Công ty, giúp việc cho HĐQT/BTGĐ ra quyết định các vấn đề thuộc lĩnh vực kinh doanh - xuất nhập khẩu, nhiệm vụ cụ thể:</p>

            <ul style="margin-left: 20px;">
              <li>Đảm bảo đầu vào và đầu ra của Công ty, tiếp cận và nghiên cứu thị trường, giới thiệu sản phẩm và mở rộng thị trường cũng như thu hút khách hàng mới;</li>
              <li>Tổ chức thực hiện kế hoạch kinh doanh, tính giá và lập hợp đồng với khách hàng;</li>
              <li>Theo dõi, đôn đốc tiến độ thực hiện của các phòng ban/nhà máy, đảm bảo sản xuất, giao hàng đúng thời hạn theo đơn hàng đã cam kết với khách hàng và kịp thời đề xuất những phương án sản xuất kinh doanh hiệu quả nhất;</li>
              <li>Quản lý đội xe tải và chịu trách nhiệm vận chuyển sản phẩm cho khách hàng;</li> 
              <li>Lập và phân bổ kế hoạch sản xuất kinh doanh hàng năm cho Công ty, hàng quý và hàng tháng cho nhà máy sản xuất.</li>           
            </ul>

            <p class="font-italic">Nhà máy sản xuất</p>
            <p>Nhà máy sản xuất là nơi trực tiếp ra sản phẩm của Công ty, gồm 3 bộ phận với các chức năng và nhiệm vụ chính sau: </p>
            <p style="margin-left: 10px;" class="font-italic">-  Bộ phận hành chính: Bao gồm Hành chính, Kho và Kiểm soát nội bộ.</p>
            <ul style="margin-left: 20px;">
              <li>Công tác hành chính: Đảm bảo tốt công tác an ninh trật tư, an toàn tài sản thiết bị, vật tư hàng hóa và cơ sở hạ tầng tại khu vực nhà máy; Chăm lo đời sống, bữa ăn Trưa, Chiều, Tối cho CBCNV trong Công ty; Xây dựng và triển khai thực hiện kế hoạch về an toàn lao động, vệ sinh lao động, phòng chống cháy nổ trong nhà máy; Phân loại nguyên vật liệu đầu vào, xuống hàng, vệ sinh bãi tập kết nguyên liệu…</li>
              <li>Kho vật tư, thành phẩm: Cập nhật đầy đủ thông tin cần thiết đảm bảo N-X-T theo quy định; Đảm bảo công tác bảo quản hàng hóa và phòng chống cháy nổ trong kho; Sắp xếp kho hợp lý, kiểm kê, đánh giá chất lượng định kỳ và thường xuyên đối chiếu sổ sách với Kế toán nhằm tránh tổn thất.</li>
              <li>Theo dõi, đôn đốc tiến độ thực hiện của các phòng ban/nhà máy, đảm bảo sản xuất, giao hàng đúng thời hạn theo đơn hàng đã cam kết với khách hàng và kịp thời đề xuất những phương án sản xuất kinh doanh hiệu quả nhất;</li>
              <li>Kiểm soát nội bộ Nhà máy: Giám sát các hoạt động nhập - xuất nguyên vật liệu, thành phẩm; Giám sát việc thực hiện nội quy, quy chế của tập thể/cá nhân trong nhà máy; Lập biên bản vi phạm và kiến nghị xử lý vi phạm đối với tập thể/cá nhân vi phạm.</li>          
            </ul>

            <p style="margin-left: 10px;" class="font-italic">- Bộ phận sản xuất: Bao gồm Cơ khí, Điện tự động hóa, Các ca sản xuất và Tổ xe chuyên dụng.</p>
            <ul style="margin-left: 20px;">
              <li>Cơ khí: Quản lý toàn bộ hệ thống máy móc thiết bị, dây chuyền sản xuất: Thực hiện công tác bảo dưỡng, sửa chữa và thay thế máy móc thiết bị đảm bảo hoạt động an toàn và thời gian sản xuất ổn định nhất; Nghiên cứu đề xuất cải tiến, nâng cấp máy móc thiết bị tăng hiệu suất làm việc, tăng sản lượng, hạ giá thành sản phẩm.</li>
              <li>Điện tự động hóa: Quản lý toàn bộ hệ thống thiết bị tủ điện công nghiệp và hệ thống điện tự động hóa thuộc dây chuyền sản xuất: Thực hiện công tác bảo dưỡng, thay thế thiết bị điện đảm bảo hoạt động an toàn và thời gian sản xuất ổn định nhất; Nghiên cứu đề xuất cải tiến, nâng cấp thiết bị tăng hiệu suất làm việc, tăng sản lượng, hạ giá thành sản phẩm.</li>
              <li>Ca sản xuất: Tiếp nhận đơn hàng từ bộ phận kinh doanh và lên kế hoạch sản xuất, tổ chức sản xuất đảm bảo đúng tiến độ, đạt chất lượng theo tiêu chuẩn đã công bố hoặc theo yêu cầu của khách hàng; Kết hợp cùng các bộ phận liên quan (công nghệ, cơ khí, cơ điện,...) nghiên cứu đề xuất cải tiến tăng năng suất, tăng chất lượng sản phẩm.</li>
              <li>Tổ xe chuyên dụng: Thực hiện công việc vận hành các phương tiện xe chuyên dụng (xe xúc lật, xe gắp và xe nâng,…) phục vụ sản xuất, xuất nhập hàng hóa và nâng hạ máy móc thiết bị phục vụ sửa chữa; Tiến hành dọn dẹp, sắp xếp gọn gàng kho bãi trong nhà máy (hỗ trợ lên, xuống hàng hóa cho kho nguyên liệu, kho thành phẩm, khu vực vật tư lớn và khu vực rác thải sản xuất).</li>          
            </ul>

            <p style="margin-left: 10px;" class="font-italic">- Bộ phận kỹ thuật: Bao gồm Công nghệ, Quản lý chất lượng và Môi trường.</p>
            <ul style="margin-left: 20px;">
              <li>Công nghệ: Chịu trách nhiệm toàn bộ về công nghệ sản xuất, xây dựng và duy trì hệ thống quản lý chất lượng theo tiêu chuẩn chất lượng đã công bố; Kiểm tra, giám sát chặt chẽ quy trình sản xuất, thông số sản xuất tại nhà máy; Đưa ra định mức tiêu hao cho từng loại sản phẩm; Nghiên cứu cải tiến đổi mới công nghệ nhằm nâng cao chất lượng sản phẩm, tiết kiệm chi phí sản xuất, so sánh với sản phẩm cùng loại trên thị trường của các đối thủ cạnh tranh.</li>
              <li>Quản lý chất lượng (QC): Tổ chức nghiên cứu, áp dụng quy trình về hệ thống đo lường chất lượng; Kiểm soát chất lượng nguyên liệu đầu vào, chất lượng sản phẩm từ khâu sản xuất, nhập kho và trước khi giao hàng cho khách hàng; Quản lý mẫu sản phẩm sản xuất và thông số chất lượng cho từng sản phẩm sau khi sản xuất.</li>
              <li>Môi trường: Giám sát việc triển khai thực hiện quy trình xử lý nguồn chất thải phát sinh trong sản xuất, vận hành hệ thống xử lý nước thải, chỉ đạo công tác vệ sinh công nghiệp đảm bảo tuân thủ đúng quy định của pháp luật về bảo vệ môi trường.</li>     
            </ul>
          </div>


          <div class="tab-pane fade pl-4" id="contact1" role="tabpanel" aria-labelledby="contact1-tab">
            <h4 class="mt-3 text-gioithieu">1. Cơ cấu bộ máy quản lý của Công ty</h4>
            <h5 class="text-center">Sơ đồ 1: Cơ cấu tổ chức CTCP Giấy Hoàng Hà Hải Phòng</h5>
            <div class="text-center"><img src="{{ asset('images/sodo.PNG') }}" alt="" ></div>
            <h5 style="margin-top:20px;">Đại hội đồng cổ đông</h5>
            <ul style="margin-left: 20px;">
              <li style="list-style: none;font-weight: 500;">Đại hội đồng cổ đông là cơ quan có thẩm quyền cao nhất của Công ty, quyết định những vấn đề thuộc nhiệm vụ và quyền hạn được Điều lệ Công ty và Pháp luật liên quan quy định. Đại hội đồng cổ đông có các quyền và nhiệm vụ sau:</li>
              <li> Thông qua, sửa đổi, bổ sung Điều lệ Công ty;.</li>
              <li> Thông qua kế hoạch phát triển Công ty, thông qua báo cáo tài chính hàng năm, báo cáo của HĐQT, Ban kiểm soát và của Kiểm toán viên;</li>
              <li>Quyết định mức cổ tức thanh toán hàng năm cho mỗi loại cổ phần phù hợp với Luật Doanh nghiệp và các quyền gắn liền với loại cổ phần đó;</li>
              <li> Quyết định số tiền thù lao của các thành viên Hội đồng quản trị và Báo cáo tiền thù lao của Hội đồng quản trị</li>
              <li>Quyết định tổ chức lại và giải thể Công ty</li>
              <li> Bầu, miễn nhiệm, bãi nhiệm Thành viên HĐQT, Ban kiểm soát</li>
              <li>  Quyết định số thành viên HĐQT;</li>
              <li>Các quyền khác được quy định tại Điều lệ Công ty.</li>
            </ul>
            <h5 style="margin-top:20px;"> Hội đồng quản trị</h5>
            <ul style="margin-left: 20px;">
              <li style="list-style: none;font-weight: 500;">HĐQT là cơ quan quản trị của Công ty, do ĐHĐCĐ bầu ra gồm 05 thành viên, có toàn quyền nhân danh Công ty để quyết định các vấn đề liên quan đến mục đích, quyền lợi của Công ty, trừ những vấn đề thuộc thẩm quyền Đại hội đồng cổ đông. HĐQT có các quyền sau:</li>
              <li> Quyết định cơ cấu tổ chức, bộ máy của Công ty</li>
              <li>Quyết định chiến lược đầu tư, phát triển của Công ty trên cơ sở các mục đích chiến lược do ĐHĐCĐ thông qua</li>
              <li>- Bổ nhiệm, miễn nhiệm, cách chức, giám sát hoạt động của Ban Tổng Giám đốc</li>
              <li>Kiến nghị sửa đổi bổ sung Điều lệ, báo cáo tình hình kinh doanh hàng năm, Báo cáo tài chính, quyết toán năm, phương án phân phối lợi nhuận và phương hướng phát triển, kế hoạch phát triển sản xuất kinh doanh và ngân sách hàng năm trình ĐHĐCĐ</li>
              <li>Kiến nghị việc tổ chức lại, giải thể hoặc yêu cầu phá sản công ty</li>
              <li> Bầu, miễn nhiệm, bãi nhiệm Thành viên HĐQT, Ban kiểm soát</li>
              <li>  Quyết định số thành viên HĐQT;</li>
              <li>Các quyền khác được quy định tại Điều lệ.</li>
              <p>HĐQT của CTCP Giấy Ho&agrave;ng H&agrave; Hải Ph&ograve;ng bao gồm 05 th&agrave;nh vi&ecirc;n:</p>
                          <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td>Ông Trần Kim Gia</td>
                    <td>Chủ tịch HĐQT</td>
                  </tr>
                  <tr>
                    <td>Ông Nguyễn Huy Long</td>
                    <td>Thành viên HĐQT</td>
                  </tr>
                  <tr>
                    <td>Ông Nguyễn Trung Thành</td>
                    <td>Thành viên HĐQT</td>
                  </tr>
                  <tr>
                    <td>Bà Trần Thị Thu Phương</td>
                    <td>Thành viên HĐQTT</td>
                  </tr>
                    <tr>
                    <td>Bà Nguyễn Thị Ngân</td>
                    <td>Thành viên HĐQT</td>
                  </tr>
                </tbody>
              </table>
              <h5 style="margin-top:20px;"> Ban Kiểm soát </h5>
              <ul style="margin-left: 20px;">
                <li style="list-style: none;font-weight: 500;">Ban kiểm soát do ĐHĐCĐ bầu ra gồm 03 thành viên, thay mặt cổ đông để kiểm soát mọi hoạt động quản trị và điều hành sản xuất kinh doanh của Công ty. BKS chịu trách nhiệm trước ĐHĐCĐ và pháp luật về những công việc thực hiện theo quyền và nghĩa vụ như:</li>
                <li> Kiểm tra sổ sách kế toán và các Báo cáo tài chính của Công ty, kiểm tra tính hợp lý, hợp pháp của các hoạt động sản xuất kinh doanh và tài chính Công ty, kiểm tra việc thực hiện các nghị quyết, quyết định của HĐQT</li>
                <li> Trình ĐHĐCĐ báo cáo thẩm tra các báo cáo tài chính của Công ty, đồng thời có quyền trình bày ý kiến độc lập của mình về kết quả thẩm tra các vấn đề liên quan tới hoạt động kinh doanh, hoạt động của HĐQT và Ban Tổng Giám đốc</li>
                <li>Yêu cầu HĐQT triệu tập ĐHĐCĐ bất thường trong trường hợp xét thấy cần thiết</li>
                <li>Các quyền khác được quy định tại Điều lệ</li>
              </ul>
              <h5 style="margin-top:20px;"> Ban Kiểm soát </h5>
              <p>Ban kiểm soát do ĐHĐCĐ bầu ra gồm 03 thành viên, thay mặt cổ đông để kiểm soát mọi hoạt động quản trị và điều hành sản xuất kinh doanh của Công ty. BKS chịu trách nhiệm trước ĐHĐCĐ và pháp luật về những công việc thực hiện theo quyền và nghĩa vụ như</p>
              <ul style="margin-left: 20px;">

                <li>Quyết định cơ cấu tổ chức, bộ máy của Công ty;</li>
                <li>Quyết định chiến lược đầu tư, phát triển của Công ty trên cơ sở các mục đích chiến lược do ĐHĐCĐ thông qua;</li>
                <li>Bổ nhiệm, miễn nhiệm, cách chức, giám sát hoạt động của Ban Tổng Giám đốc;</li>
                <li>Kiến nghị sửa đổi bổ sung Điều lệ, báo cáo tình hình kinh doanh hàng năm, Báo cáo tài chính, quyết toán năm, phương án phân phối lợi nhuận và phương hướng phát triển, kế hoạch phát triển sản xuất kinh doanh và ngân sách hàng năm trình ĐHĐCĐ;</li>
                <li>Kiến nghị việc tổ chức lại, giải thể hoặc yêu cầu phá sản công ty;</li>
                <li>Triệu tập, chỉ đạo chuẩn bị nội dung và chương trình cho các cuộc họp ĐHĐCĐ;</li>
                <li>Đề xuất việc tái cơ cấu lại hoặc giải thể công ty;</li>
                <li>Các quyền khác được quy định tại Điều lệ.</li>
              </ul>
              <p>HĐQT của CTCP Giấy Hoàng Hà Hải Phòng bao gồm 05 thành viên:</p>
              <div class="table-responsive">
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Ông Trần Kim Gia</td>
                      <td>Chủ tịch HĐQT</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Ông Nguyễn Huy Long</td>
                      <td>Thành viên HĐQT</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Ông Nguyễn Trung Thành</td>
                      <td>Thành viên HĐQT</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Bà Trần Thị Thu Phương</td>
                      <td>Thành viên HĐQT</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>VBà Nguyễn Thị Ngân</td>
                      <td>Thành viên HĐQT</td>
                    </tr>                 
                  </tbody>
                </table>
              </div>
            <h5 style="margin-top:20px;">Ban Kiểm soát </h5>
            <p>Ban kiểm soát do ĐHĐCĐ bầu ra gồm 03 thành viên, thay mặt cổ đông để kiểm soát mọi hoạt động quản trị và điều hành sản xuất kinh doanh của Công ty. BKS chịu trách nhiệm trước ĐHĐCĐ và pháp luật về những công việc thực hiện theo quyền và nghĩa vụ như:</p>
            <ul style="margin-left: 20px;">
                <li>Kiểm tra sổ sách kế toán và các Báo cáo tài chính của Công ty, kiểm tra tính hợp lý, hợp pháp của các hoạt động sản xuất kinh doanh và tài chính Công ty, kiểm tra việc thực hiện các nghị quyết, quyết định của HĐQT;</li>
                <li>Trình ĐHĐCĐ báo cáo thẩm tra các báo cáo tài chính của Công ty, đồng thời có quyền trình bày ý kiến độc lập của mình về kết quả thẩm tra các vấn đề liên quan tới hoạt động kinh doanh, hoạt động của HĐQT và Ban Tổng Giám đốc;</li>
                <li>Bổ nhiệm, miễn nhiệm, cách chức, giám sát hoạt động của Ban Tổng Giám đốc;</li>
                <li>Yêu cầu HĐQT triệu tập ĐHĐCĐ bất thường trong trường hợp xét thấy cần thiết;</li>
                <li>Các quyền khác được quy định tại Điều lệ.</li>
              </ul>
            <p>Hiện tại, Ban Kiểm soát của Công ty gồm 03 thành viên bao gồm:</p>
            <div class="table-responsive">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Bà Đào Thị Ngân</td>
                    <td>Trưởng Ban</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bà Đinh Thị Hồng</td>
                    <td>Thành viên</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Bà Đỗ Thị Vươn</td>
                    <td>Thành viên</td>
                  </tr>       
                </tbody>
              </table>
            </div>
            <h5 style="margin-top:20px;">Ban Tổng Giám đốc</h5>
            <p>Ban Tổng Giám đốc Công ty do Hội đồng quản trị bổ nhiệm, chịu sự giám sát của Hội đồng quản trị và chịu trách nhiệm trước Đại hội đồng cổ đông, Hội đồng quản trị và trước pháp luật về việc thực hiện các quyền và nhiệm vụ được giao. Tổng Giám đốc có nhiệm vụ:</p>
            <ul style="margin-left: 20px;">
              <li>Tổ chức điều hành, quản lý mọi hoạt động sản xuất kinh doanh của Công ty theo nghị quyết của ĐHĐCĐ, quyết định của HĐQT, Điều lệ Công ty và tuân thủ pháp luật;</li>
              <li>Xây dựng và trình HĐQT các quy chế quản lý điều hành nội bộ, kế hoạch sản xuất kinh doanh, kế hoạch tài chính hàng năm và dài hạn của Công ty;</li>
              <li>Báo cáo HĐQT về tình hình hoạt động, kết quả sản xuất kinh doanh, chịu trách nhiệm trước ĐHĐCĐ, HĐQT và Pháp luật về những sai phạm gây tổn thất cho Công ty;</li>
              <li>Đề nghị HĐQT quyết định bổ nhiệm, miễn nhiệm, khen thưởng, kỷ luật đối với Phó Tổng Giám đốc, Kế toán trưởng;</li>
              <li>Ký kết, thực hiện các hợp đồng theo quy định của pháp luật;</li>
              <li>Thực hiện các nghị quyết của HĐQT và ĐHĐCĐ, kế hoạch kinh doanh và kế hoạch đầu tư của Công ty đã được HĐQT và ĐHĐCĐ thông qua;</li>
              <li>Các quyền khác được quy định tại Điều lệ Công ty.</li>
            </ul>
            <div class="table-responsive">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Bà Trần Thị Thu Phương</td>
                    <td>Tổng Giám đốc</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Ông Nguyễn Vinh Quang</td>
                    <td>Phó Tổng Giám đốc</td>
                  </tr>     
                </tbody>
              </table>
            </div>
            <h5 style="margin-top:20px;">Các phòng ban chức năng</h5>
            <p class="font-italic">Phòng Tài chính – Kế toán</p>
            <p>Các phòng ban chức năng có chức năng tham mưu, giúp việc cho HĐQT, Ban TGĐ về công tác tài chính kế toán, cụ thể là:</p>

            <ul style="margin-left: 20px;">
              <li>Theo dõi, phản ánh sự lưu chuyển nguồn vốn kinh doanh của Công ty và tham mưu cho Ban lãnh đạo các vấn đề liên quan đảm bảo việc luân chuyển vốn, sử dụng vốn của công ty hiệu quả nhất;</li>
              <li>Kiểm tra, tính toán phân tích tài chính các hợp đồng, dự án của Công ty;</li>
              <li>Chịu trách nhiệm về số liệu báo cáo tài chính kế toán trước Hội đồng quản trị, Ban Tổng Giám đốc và các Cơ quan hữu quan. Theo dõi phản ánh đúng tình hình tài chính của công ty;</li>
              <li>Xây dựng kế hoạch tài chính năm, kế hoạch trung hạn, dài hạn của Công ty trình BTGĐ, HĐQT phê duyệt;</li>
              <li>Tham mưu cho Ban Tổng Giám đốc về chế độ kế toán và những thay đổi của chế độ qua từng thời kỳ trong hoạt động kinh doanh. Tổ chức công tác kế toán, thống kê và bộ máy kế toán phù hợp với công tác tổ chức sản xuất, kinh doanh theo yêu cầu của Công ty;</li>
              <li>Tổ chức ghi chép tính toán và phản ánh chính xác, trung thực, kịp thời, đầy đủ toàn bộ tài sản và phân tích kết quả sản xuất kinh doanh của Công ty;</li>
              <li>Xác định và phản ánh chính xác, kịp thời, đúng chế độ, kết quả kiểm kê tài sản hàng kỳ. Đề xuất xử lý các khoản hao hụt, mất mát, hư hỏng (nếu có);</li>
              <li>Xét duyệt các báo cáo kế toán, thống kê và báo cáo tài chính của đơn vị trực thuộc. Lập, tổng hợp đầy đủ và gửi đúng hạn báo cáo kế toán, thống kê và quyết toán tài chính của Công ty theo chế độ qui định;</li>
              <li>Tổ chức kiểm tra kế toán trong nội bộ Công ty;</li>
              <li>Nghiên cứu các chế độ chính sách trong lĩnh vực thuế, tài chính, thống kê, luật doanh nghiệp… của Nhà nước liên quan đến hoạt động của Công ty nhằm đưa ra cách thực hiện phù hợp;</li>
              <li>Tổ chức phổ biến và hướng dẫn kịp thời các chế độ, thể lệ tài chính, kế toán, thống kê hiện hành cho nội bộ bộ phận cũng như các bộ phận liên quan;</li>
              <li>Quản lý việc chuyển nhượng cổ phần, cổ phiếu của Công ty; phát hành sổ cổ đông Công ty;</li>
              <li>Tổ chức bảo quản, lưu trữ các tài liệu kế toán, giữ bí mật các tài liệu và số liệu kế toán của công ty.</li>
            </ul>
            <p class="font-italic">Phòng Nhân sự</p>
            <p>Là phòng có chức năng tham mưu giúp việc cho HĐQT/BTGĐ để quản lý, điều hành công ty trong lĩnh vực nhân sự. Phòng nhân sự có các chức năng, nhiệm vụ cụ thể như sau:</p>

            <ul style="margin-left: 20px;">
              <li>Đề xuất, tham mưu cho HĐQT/ BTGĐ xây dựng chiến lược phát triển nhân sự  đáp ứng chiến lược kinh doanh của Công ty;</li>
              <li>Nghiên cứu, đề xuất xây dựng mô hình tổ chức bộ máy điều hành của Công ty;</li>
              <li>Xây dựng chính sách nhân sự và chế độ đãi ngộ hợp lý trong nội bộ Công ty. Chủ động đề xuất, trực tiếp xây dựng các quy định, quy chế nội bộ liên quan đến công tác nhân sự của Công ty;</li>
              <li>Đảm bảo nguồn nhân lực cho các phòng/ban thành viên; Điều phối, đánh giá công việc, giám sát hiệu quả sử dụng nhân lực của các phòng/ban thành viên;</li>
              <li>Tổ chức thực hiện, giám sát việc thực hiện kỷ luật lao động, các quy chế quản lý nội bộ. Đề xuất khen thưởng, kỷ luật đối với CBCNV;</li>
              <li>Chịu trách nhiệm truyền thông nội bộ các vấn đề liên quan đến nhân sự để phát triển văn hóa doanh nghiệp;</li>
              <li>Hỗ trợ các bộ phận khác trong việc quản lý nhân sự, công tác đào tạo nhân viên, cách thức tuyển dụng nhân sự…;</li>
              
            </ul>
            <p class="font-italic">Phòng Đầu tư</p>
            <p>Là phòng có chức năng tham mưu giúp việc cho HĐQT/Ban Tổng Giám đốc ra quyết định các vấn đề thuộc lĩnh vực Quản lý đầu tư, xúc tiến đầu tư. Phòng đầu tư có nhiệm vụ cụ thể như sau:</p>

            <ul style="margin-left: 20px;">
              <li>Lên kế hoạch, tổ chức thực hiện và giám sát hiệu quả các hoạt động đầu tư của Công ty;</li>
              <li>Làm việc với các đơn vị, phòng ban khác trong Công ty để hoàn thành các công việc HĐQT đề ra;</li>
              <li>Chấp hành nghiêm chỉnh các chế độ quản lý kinh tế, tài chính, chế độ báo cáo của Công ty;</li>
              <li>Mọi hoạt động của Phòng Đầu tư phải tuân thủ theo các quy định của pháp luật hiện hành</li>           
            </ul>

            <p class="font-italic">Phòng Kinh doanh</p>
            <p>Đây là bộ phận hết sức quan trọng, đóng vai trò chủ chốt trong Công ty, giúp việc cho HĐQT/BTGĐ ra quyết định các vấn đề thuộc lĩnh vực kinh doanh - xuất nhập khẩu, nhiệm vụ cụ thể:</p>

            <ul style="margin-left: 20px;">
              <li>Đảm bảo đầu vào và đầu ra của Công ty, tiếp cận và nghiên cứu thị trường, giới thiệu sản phẩm và mở rộng thị trường cũng như thu hút khách hàng mới;</li>
              <li>Tổ chức thực hiện kế hoạch kinh doanh, tính giá và lập hợp đồng với khách hàng;</li>
              <li>Theo dõi, đôn đốc tiến độ thực hiện của các phòng ban/nhà máy, đảm bảo sản xuất, giao hàng đúng thời hạn theo đơn hàng đã cam kết với khách hàng và kịp thời đề xuất những phương án sản xuất kinh doanh hiệu quả nhất;</li>
              <li>Quản lý đội xe tải và chịu trách nhiệm vận chuyển sản phẩm cho khách hàng;</li> 
              <li>Lập và phân bổ kế hoạch sản xuất kinh doanh hàng năm cho Công ty, hàng quý và hàng tháng cho nhà máy sản xuất.</li>           
            </ul>

            <p class="font-italic">Nhà máy sản xuất</p>
            <p>Nhà máy sản xuất là nơi trực tiếp ra sản phẩm của Công ty, gồm 3 bộ phận với các chức năng và nhiệm vụ chính sau: </p>
            <p style="margin-left: 10px;" class="font-italic">-  Bộ phận hành chính: Bao gồm Hành chính, Kho và Kiểm soát nội bộ.</p>
            <ul style="margin-left: 20px;">
              <li>Công tác hành chính: Đảm bảo tốt công tác an ninh trật tư, an toàn tài sản thiết bị, vật tư hàng hóa và cơ sở hạ tầng tại khu vực nhà máy; Chăm lo đời sống, bữa ăn Trưa, Chiều, Tối cho CBCNV trong Công ty; Xây dựng và triển khai thực hiện kế hoạch về an toàn lao động, vệ sinh lao động, phòng chống cháy nổ trong nhà máy; Phân loại nguyên vật liệu đầu vào, xuống hàng, vệ sinh bãi tập kết nguyên liệu…</li>
              <li>Kho vật tư, thành phẩm: Cập nhật đầy đủ thông tin cần thiết đảm bảo N-X-T theo quy định; Đảm bảo công tác bảo quản hàng hóa và phòng chống cháy nổ trong kho; Sắp xếp kho hợp lý, kiểm kê, đánh giá chất lượng định kỳ và thường xuyên đối chiếu sổ sách với Kế toán nhằm tránh tổn thất.</li>
              <li>Theo dõi, đôn đốc tiến độ thực hiện của các phòng ban/nhà máy, đảm bảo sản xuất, giao hàng đúng thời hạn theo đơn hàng đã cam kết với khách hàng và kịp thời đề xuất những phương án sản xuất kinh doanh hiệu quả nhất;</li>
              <li>Kiểm soát nội bộ Nhà máy: Giám sát các hoạt động nhập - xuất nguyên vật liệu, thành phẩm; Giám sát việc thực hiện nội quy, quy chế của tập thể/cá nhân trong nhà máy; Lập biên bản vi phạm và kiến nghị xử lý vi phạm đối với tập thể/cá nhân vi phạm.</li>          
            </ul>

            <p style="margin-left: 10px;" class="font-italic">- Bộ phận sản xuất: Bao gồm Cơ khí, Điện tự động hóa, Các ca sản xuất và Tổ xe chuyên dụng.</p>
            <ul style="margin-left: 20px;">
              <li>Cơ khí: Quản lý toàn bộ hệ thống máy móc thiết bị, dây chuyền sản xuất: Thực hiện công tác bảo dưỡng, sửa chữa và thay thế máy móc thiết bị đảm bảo hoạt động an toàn và thời gian sản xuất ổn định nhất; Nghiên cứu đề xuất cải tiến, nâng cấp máy móc thiết bị tăng hiệu suất làm việc, tăng sản lượng, hạ giá thành sản phẩm.</li>
              <li>Điện tự động hóa: Quản lý toàn bộ hệ thống thiết bị tủ điện công nghiệp và hệ thống điện tự động hóa thuộc dây chuyền sản xuất: Thực hiện công tác bảo dưỡng, thay thế thiết bị điện đảm bảo hoạt động an toàn và thời gian sản xuất ổn định nhất; Nghiên cứu đề xuất cải tiến, nâng cấp thiết bị tăng hiệu suất làm việc, tăng sản lượng, hạ giá thành sản phẩm.</li>
              <li>Ca sản xuất: Tiếp nhận đơn hàng từ bộ phận kinh doanh và lên kế hoạch sản xuất, tổ chức sản xuất đảm bảo đúng tiến độ, đạt chất lượng theo tiêu chuẩn đã công bố hoặc theo yêu cầu của khách hàng; Kết hợp cùng các bộ phận liên quan (công nghệ, cơ khí, cơ điện,...) nghiên cứu đề xuất cải tiến tăng năng suất, tăng chất lượng sản phẩm.</li>
              <li>Tổ xe chuyên dụng: Thực hiện công việc vận hành các phương tiện xe chuyên dụng (xe xúc lật, xe gắp và xe nâng,…) phục vụ sản xuất, xuất nhập hàng hóa và nâng hạ máy móc thiết bị phục vụ sửa chữa; Tiến hành dọn dẹp, sắp xếp gọn gàng kho bãi trong nhà máy (hỗ trợ lên, xuống hàng hóa cho kho nguyên liệu, kho thành phẩm, khu vực vật tư lớn và khu vực rác thải sản xuất).</li>          
            </ul>

            <p style="margin-left: 10px;" class="font-italic">- Bộ phận kỹ thuật: Bao gồm Công nghệ, Quản lý chất lượng và Môi trường.</p>
            <ul style="margin-left: 20px;">
              <li>Công nghệ: Chịu trách nhiệm toàn bộ về công nghệ sản xuất, xây dựng và duy trì hệ thống quản lý chất lượng theo tiêu chuẩn chất lượng đã công bố; Kiểm tra, giám sát chặt chẽ quy trình sản xuất, thông số sản xuất tại nhà máy; Đưa ra định mức tiêu hao cho từng loại sản phẩm; Nghiên cứu cải tiến đổi mới công nghệ nhằm nâng cao chất lượng sản phẩm, tiết kiệm chi phí sản xuất, so sánh với sản phẩm cùng loại trên thị trường của các đối thủ cạnh tranh.</li>
              <li>Quản lý chất lượng (QC): Tổ chức nghiên cứu, áp dụng quy trình về hệ thống đo lường chất lượng; Kiểm soát chất lượng nguyên liệu đầu vào, chất lượng sản phẩm từ khâu sản xuất, nhập kho và trước khi giao hàng cho khách hàng; Quản lý mẫu sản phẩm sản xuất và thông số chất lượng cho từng sản phẩm sau khi sản xuất.</li>
              <li>Môi trường: Giám sát việc triển khai thực hiện quy trình xử lý nguồn chất thải phát sinh trong sản xuất, vận hành hệ thống xử lý nước thải, chỉ đạo công tác vệ sinh công nghiệp đảm bảo tuân thủ đúng quy định của pháp luật về bảo vệ môi trường.</li>     
            </ul>
        </div>

        <div class="tab-pane fade pl-4" id="contact22" role="tabpanel" aria-labelledby="contact22">
          <h4 class="mt-3 text-gioithieu text-center">Cơ cấu tổ chức</h4>
            <p>Hiện tại, CTCP Giấy Hoàng Hà Hải Phòng được tổ chức và hoạt động tuân thủ theo:</p>
            <ul style="margin-left: 20px;">
              <li>Luật Doanh nghiệp được Quốc hội nước Cộng hòa xã hội chủ nghĩa Việt Nam ban hành và có hiệu lực từ ngày 01/07/2014.</li>
              <li>Điều lệ Công ty được ĐHĐCĐ thường niên năm 2018 thông qua ngày 13/04/2018 có sửa đổi, bổ sung theo Điều lệ mẫu áp dụng cho Công ty đại chúng.</li>
              <li>Trong quá trình hoạt động và phát triển, bộ máy của Công ty đã được xây dựng, điều chỉnh và kiện toàn để phù hợp với chiến lược phát triển, yêu cầu thực tế và đặc điểm hoạt động của Công ty.</li>
            </ul>
            <h5 class="text-center">Sơ đồ 1: Cơ cấu tổ chức CTCP Giấy Hoàng Hà Hải Phòng</h5>
            <div class="text-center"><img src="{{ asset('images/about-1.PNG') }}" alt="" ></div>
            <h5>Công ty mẹ: Công ty CP Giấy Hoàng Hà Hải Phòng</h5>
            <ul style="margin-left: 20px;">
              <li>Địa chỉ trụ sở chính: Số 194 đường Kiều Hạ, phường Đông Hải 2, quận Hải An, thành phố Hải Phòng, Việt Nam</li>
              <li>VPĐD tại Hà Nội: Số 29, ngõ 53 Nguyễn Khoái, Phường Bạch Đằng, quận Hai Bà Trưng, thành phố Hà Nội.</li>
              <li>Điện thoại: 0225 3979952</li>
              <li>Fax: 0225 3979951</li>
              <li>Website: hhppaper.com</li>
              <li>Email: hhppaper@gmail.com</li>
            </ul>
            <h5>Công ty con: Công ty CP Giấy Hoàng Hà Hà Nam</h5>
            <ul style="margin-left: 20px;">
              <li>Địa chỉ: KCN Đồng Văn I, Đồng Văn, Thị trấn Đồng Văn, huyện Duy Tiên, tỉnh Hà Nam, Việt Nam</li>
              <li>• Điện thoại: 0226 3582866</li>
              <li>Fax: 0226 3582867</li>
            </ul>
          <!-- <h4 class="mt-3 text-gioithieu">Cơ cấu tổ chức công ty</h4>
          <h4 class="mb-5" style="color: #058ff7">1.1 Danh sách cổ đông sáng lập</h4>
          <p class="text-center">Bảng 2: Danh sách cổ đông sáng lập của Công ty</p>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <tbody>
                <tr>
                  <th>STT</th>
                  <th>Cổ đông</th>
                  <th>Địa chỉ</th>
                  <th>Số CMND/ĐKKD</th>
                  <th>Số lượng CP sở hữutại 27.3.2013 (*)</th>
                  <th>Số lượng CP sở hữu 04/09/2019</th>
                  <th>Tỷ lệ sở hữu/VĐL thực góp (%)</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Trần Kim Gia</td>
                  <td>Số 5, Vọng Đức, Hàng Bài, Hoàn Kiếm, Hà Nội</td>
                  <td>013339304</td>
                  <td>540.000</td>
                  <td>920.000</td>
                  <td class="color-codong">5,11</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Trần Thị Thu Phương</td>
                  <td>Số 45, tổ 15, ngõ Thủ Lệ, Phường Ngọc Khánh, Quận Ba Đình, Hà Nội </td>
                  <td>037166000021</td>
                  <td>720.000</td>
                  <td>1.682.000</td>
                  <td class="color-codong">9,34</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Nguyễn Huy Long</td>
                  <td>P1208 Nhà 34T KĐT Trung Hòa - Nhân Chính, Trung Hòa, Cầu Giấy, Hà Nội</td>
                  <td>001073006514</td>
                  <td>360.000</td>
                  <td>1.221.000</td>
                  <td class="color-codong">6,78</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Trần Quốc Khánh</td>
                  <td>Số 5, Vọng Đức, Hàng Bài, Hoàn Kiếm, Hà Nội</td>
                  <td>013339304</td>
                  <td>540.000</td>
                  <td>920.000</td>
                  <td class="color-codong">5,11</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Trần Anh Giang</td>
                  <td>Phố Phát Diệm Nam, Thị Trấn Phát Diệm, Huyện Kim Sơn, Tỉnh Ninh Bình</td>
                  <td>037086003463</td>
                  <td>90.000</td>
                  <td>103.500</td>
                  <td class="color-codong">0,58</td>
                </tr>  
                <tr>
                  <td></td>
                  <td colspan="3">Tổng cộng</td>
                  <td>1.800.000</td>
                  <td>3.972.500</td>
                  <td class="color-codong">22,07</td>
                </tr>             
              </tbody>
            </table>
          </div>
          <p>(*) Theo quy định khoản 4, Điều 119, Luật doanh nghiệp 2014, tính đến nay, cổ phiếu của cổ đông sáng lập đã hết thời gian hạn chế chuyển nhượng.</p>
          <h4 class="mb-5" style="color: #058ff7">1.2 Danh sách cổ đông nắm giữ từ trên 5% vốn cổ phần của Công ty</h4>
          <p class="text-center">Bảng 3: Danh sách cổ đông nắm giữ từ trên 5% vốn cổ phần của Công ty tại ngày 04/09/2019
          </p>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <tbody>
                <tr>
                  <th>STT</th>
                  <th>Cổ đông</th>
                  <th>Địa chỉ</th>
                  <th>Số CMND/ĐKKD</th>
                  <th>Số lượng CP nắm giữ</th>
                  <th>Tỷ lệ sở hữu/VĐL (%)</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Trần Kim Gia</td>
                  <td>Số 5, Vọng Đức, Hàng Bài, Hoàn Kiếm, Hà Nội</td>
                  <td>013339304</td>
                  <td>920.000</td>
                  <td class="color-codong">5,11</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Trần Thị Thu Phương</td>
                  <td>Số 45, tổ 15, ngõ Thủ Lệ, Phường Ngọc Khánh, Quận Ba Đình, Hà Nội </td>
                  <td>037166000021</td>
                  <td>1.682.000</td>
                  <td class="color-codong">9,34</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Nguyễn Huy Long</td>
                  <td>P1208 Nhà 34T KĐT Trung Hòa - Nhân Chính, Trung Hòa, Cầu Giấy, Hà Nội</td>
                  <td>001073006514</td>
                  <td>1.221.000</td>
                  <td class="color-codong">6,78</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Nguyễn Thị Thu Thủy</td>
                  <td>Lô 3, Tổ 40, TT Nhà hát kịch, phường Trung Hòa, quận Cầu Giấy, Hà Nội</td>
                  <td>030172001294</td>
                  <td>902.120</td>
                  <td class="color-codong">5,01</td>
                </tr> 
                <tr>
                  <td></td>
                  <td colspan="3">Tổng cộng</td>
                  <td>4.725.120</td>
                  <td class="color-codong">26,25</td>
                </tr>             
              </tbody>
            </table>
          </div>
          <p class="text-center">Bảng 4: Cơ cấu cổ đông Công ty tại ngày 04/09/2019
          </p>
          <div class="table-responsive">
            <table class="table table-striped table-bordered">
              <tbody>
                <tr>
                  <th>STT</th>
                  <th>Danh mục</th>
                  <th>Số lượng cổ phiếu</th>
                  <th>Giá trị (đồng)</th>
                  <th>Tỷ lệ sở hữu(%)</th>
                  <th>Số lượng cổ đông</th>
                </tr>
                <tr>
                  <td scope="row">I</td>
                  <td scope="row">Cổ đông trong nước</td>
                  <td scope="row">17.708.530</td>
                  <td scope="row">177.085.300.000</td>
                  <td scope="row">98,38</td>
                  <td scope="row">337</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Cổ đông tổ chức</td>
                  <td>3.450</td>
                  <td>34.500.000</td>
                  <td>0,02</td>
                  <td class="color-codong">01</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Cổ đông cá nhân</td>
                  <td>17.705.080</td>
                  <td>177.050.800.000</td>
                  <td>98,36</td>
                  <td>336</td>
                </tr>
                <tr>
                  <td scope="row">II</td>
                  <td scope="row">Cổ đông nước ngoài</td>
                  <td scope="row">291.470</td>
                  <td scope="row">2.914.700.000</td>
                  <td scope="row">1,62</td>
                  <td scope="row">06</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Cổ đông tổ chức</td>
                  <td>0</td>
                  <td>0</td>
                  <td>0</td>
                  <td class="color-codong">0</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Cổ đông cá nhân</td>
                  <td>291.470</td>
                  <td>2.914.700.000</td>
                  <td>1,62</td>
                  <td>06</td>
                </tr>
                <tr>
                  <td></td>
                  <td colspan="3">Tổng cộng</td>
                  <td>4.725.120</td>
                  <td class="color-codong">26,25</td>
                </tr>   
                <tr>
                  <td scope="row">III</td>
                  <td scope="row">Cổ phiếu quỹ</td>
                  <td scope="row">0</td>
                  <td scope="row">0</td>
                  <td scope="row">0</td>
                  <td scope="row">0</td>
                </tr>  
                <tr>
                  <td scope="row" colspan="2">Tổng</td>
                  <td scope="row">18.000.000</td>
                  <td scope="row">180.000.000.000</td>
                  <td scope="row">100</td>
                  <td scope="row">343</td>
                </tr>         
              </tbody>
            </table>
          </div>
          <p class="text-right">(Nguồn: Danh sách cổ đông chốt tại ngày 04/09/2019)</p> -->
          <h4 class="mt-3 text-gioithieu">1. Cơ cấu bộ máy quản lý của Công ty</h4>
            <h5 class="text-center">Sơ đồ 1: Cơ cấu tổ chức CTCP Giấy Hoàng Hà Hải Phòng</h5>
            <div class="text-center"><img src="{{ asset('images/sodo.PNG') }}" alt="" ></div>
            <h5 style="margin-top:20px;">Đại hội đồng cổ đông</h5>
            <ul style="margin-left: 20px;">
              <li style="list-style: none;font-weight: 500;">Đại hội đồng cổ đông là cơ quan có thẩm quyền cao nhất của Công ty, quyết định những vấn đề thuộc nhiệm vụ và quyền hạn được Điều lệ Công ty và Pháp luật liên quan quy định. Đại hội đồng cổ đông có các quyền và nhiệm vụ sau:</li>
              <li> Thông qua, sửa đổi, bổ sung Điều lệ Công ty;.</li>
              <li> Thông qua kế hoạch phát triển Công ty, thông qua báo cáo tài chính hàng năm, báo cáo của HĐQT, Ban kiểm soát và của Kiểm toán viên;</li>
              <li>Quyết định mức cổ tức thanh toán hàng năm cho mỗi loại cổ phần phù hợp với Luật Doanh nghiệp và các quyền gắn liền với loại cổ phần đó;</li>
              <li> Quyết định số tiền thù lao của các thành viên Hội đồng quản trị và Báo cáo tiền thù lao của Hội đồng quản trị</li>
              <li>Quyết định tổ chức lại và giải thể Công ty</li>
              <li> Bầu, miễn nhiệm, bãi nhiệm Thành viên HĐQT, Ban kiểm soát</li>
              <li>  Quyết định số thành viên HĐQT;</li>
              <li>Các quyền khác được quy định tại Điều lệ Công ty.</li>
            </ul>
            <h5 style="margin-top:20px;"> Hội đồng quản trị</h5>
            <ul style="margin-left: 20px;">
              <li style="list-style: none;font-weight: 500;">HĐQT là cơ quan quản trị của Công ty, do ĐHĐCĐ bầu ra gồm 05 thành viên, có toàn quyền nhân danh Công ty để quyết định các vấn đề liên quan đến mục đích, quyền lợi của Công ty, trừ những vấn đề thuộc thẩm quyền Đại hội đồng cổ đông. HĐQT có các quyền sau:</li>
              <li> Quyết định cơ cấu tổ chức, bộ máy của Công ty</li>
              <li>Quyết định chiến lược đầu tư, phát triển của Công ty trên cơ sở các mục đích chiến lược do ĐHĐCĐ thông qua</li>
              <li>- Bổ nhiệm, miễn nhiệm, cách chức, giám sát hoạt động của Ban Tổng Giám đốc</li>
              <li>Kiến nghị sửa đổi bổ sung Điều lệ, báo cáo tình hình kinh doanh hàng năm, Báo cáo tài chính, quyết toán năm, phương án phân phối lợi nhuận và phương hướng phát triển, kế hoạch phát triển sản xuất kinh doanh và ngân sách hàng năm trình ĐHĐCĐ</li>
              <li>Kiến nghị việc tổ chức lại, giải thể hoặc yêu cầu phá sản công ty</li>
              <li> Bầu, miễn nhiệm, bãi nhiệm Thành viên HĐQT, Ban kiểm soát</li>
              <li>  Quyết định số thành viên HĐQT;</li>
              <li>Các quyền khác được quy định tại Điều lệ.</li>
              <p>HĐQT của CTCP Giấy Ho&agrave;ng H&agrave; Hải Ph&ograve;ng bao gồm 05 th&agrave;nh vi&ecirc;n:</p>
                          <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td>Ông Trần Kim Gia</td>
                    <td>Chủ tịch HĐQT</td>
                  </tr>
                  <tr>
                    <td>Ông Nguyễn Huy Long</td>
                    <td>Thành viên HĐQT</td>
                  </tr>
                  <tr>
                    <td>Ông Nguyễn Trung Thành</td>
                    <td>Thành viên HĐQT</td>
                  </tr>
                  <tr>
                    <td>Bà Trần Thị Thu Phương</td>
                    <td>Thành viên HĐQTT</td>
                  </tr>
                    <tr>
                    <td>Bà Nguyễn Thị Ngân</td>
                    <td>Thành viên HĐQT</td>
                  </tr>
                </tbody>
              </table>
              <h5 style="margin-top:20px;"> Ban Kiểm soát </h5>
              <ul style="margin-left: 20px;">
                <li style="list-style: none;font-weight: 500;">Ban kiểm soát do ĐHĐCĐ bầu ra gồm 03 thành viên, thay mặt cổ đông để kiểm soát mọi hoạt động quản trị và điều hành sản xuất kinh doanh của Công ty. BKS chịu trách nhiệm trước ĐHĐCĐ và pháp luật về những công việc thực hiện theo quyền và nghĩa vụ như:</li>
                <li> Kiểm tra sổ sách kế toán và các Báo cáo tài chính của Công ty, kiểm tra tính hợp lý, hợp pháp của các hoạt động sản xuất kinh doanh và tài chính Công ty, kiểm tra việc thực hiện các nghị quyết, quyết định của HĐQT</li>
                <li> Trình ĐHĐCĐ báo cáo thẩm tra các báo cáo tài chính của Công ty, đồng thời có quyền trình bày ý kiến độc lập của mình về kết quả thẩm tra các vấn đề liên quan tới hoạt động kinh doanh, hoạt động của HĐQT và Ban Tổng Giám đốc</li>
                <li>Yêu cầu HĐQT triệu tập ĐHĐCĐ bất thường trong trường hợp xét thấy cần thiết</li>
                <li>Các quyền khác được quy định tại Điều lệ</li>
              </ul>
              <h5 style="margin-top:20px;"> Ban Kiểm soát </h5>
              <p>Ban kiểm soát do ĐHĐCĐ bầu ra gồm 03 thành viên, thay mặt cổ đông để kiểm soát mọi hoạt động quản trị và điều hành sản xuất kinh doanh của Công ty. BKS chịu trách nhiệm trước ĐHĐCĐ và pháp luật về những công việc thực hiện theo quyền và nghĩa vụ như</p>
              <ul style="margin-left: 20px;">

                <li>Quyết định cơ cấu tổ chức, bộ máy của Công ty;</li>
                <li>Quyết định chiến lược đầu tư, phát triển của Công ty trên cơ sở các mục đích chiến lược do ĐHĐCĐ thông qua;</li>
                <li>Bổ nhiệm, miễn nhiệm, cách chức, giám sát hoạt động của Ban Tổng Giám đốc;</li>
                <li>Kiến nghị sửa đổi bổ sung Điều lệ, báo cáo tình hình kinh doanh hàng năm, Báo cáo tài chính, quyết toán năm, phương án phân phối lợi nhuận và phương hướng phát triển, kế hoạch phát triển sản xuất kinh doanh và ngân sách hàng năm trình ĐHĐCĐ;</li>
                <li>Kiến nghị việc tổ chức lại, giải thể hoặc yêu cầu phá sản công ty;</li>
                <li>Triệu tập, chỉ đạo chuẩn bị nội dung và chương trình cho các cuộc họp ĐHĐCĐ;</li>
                <li>Đề xuất việc tái cơ cấu lại hoặc giải thể công ty;</li>
                <li>Các quyền khác được quy định tại Điều lệ.</li>
              </ul>
              <p>HĐQT của CTCP Giấy Hoàng Hà Hải Phòng bao gồm 05 thành viên:</p>
              <div class="table-responsive">
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Ông Trần Kim Gia</td>
                      <td>Chủ tịch HĐQT</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Ông Nguyễn Huy Long</td>
                      <td>Thành viên HĐQT</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Ông Nguyễn Trung Thành</td>
                      <td>Thành viên HĐQT</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Bà Trần Thị Thu Phương</td>
                      <td>Thành viên HĐQT</td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>VBà Nguyễn Thị Ngân</td>
                      <td>Thành viên HĐQT</td>
                    </tr>                 
                  </tbody>
                </table>
              </div>
            <h5 style="margin-top:20px;">Ban Kiểm soát </h5>
            <p>Ban kiểm soát do ĐHĐCĐ bầu ra gồm 03 thành viên, thay mặt cổ đông để kiểm soát mọi hoạt động quản trị và điều hành sản xuất kinh doanh của Công ty. BKS chịu trách nhiệm trước ĐHĐCĐ và pháp luật về những công việc thực hiện theo quyền và nghĩa vụ như:</p>
            <ul style="margin-left: 20px;">
                <li>Kiểm tra sổ sách kế toán và các Báo cáo tài chính của Công ty, kiểm tra tính hợp lý, hợp pháp của các hoạt động sản xuất kinh doanh và tài chính Công ty, kiểm tra việc thực hiện các nghị quyết, quyết định của HĐQT;</li>
                <li>Trình ĐHĐCĐ báo cáo thẩm tra các báo cáo tài chính của Công ty, đồng thời có quyền trình bày ý kiến độc lập của mình về kết quả thẩm tra các vấn đề liên quan tới hoạt động kinh doanh, hoạt động của HĐQT và Ban Tổng Giám đốc;</li>
                <li>Bổ nhiệm, miễn nhiệm, cách chức, giám sát hoạt động của Ban Tổng Giám đốc;</li>
                <li>Yêu cầu HĐQT triệu tập ĐHĐCĐ bất thường trong trường hợp xét thấy cần thiết;</li>
                <li>Các quyền khác được quy định tại Điều lệ.</li>
              </ul>
            <p>Hiện tại, Ban Kiểm soát của Công ty gồm 03 thành viên bao gồm:</p>
            <div class="table-responsive">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Bà Đào Thị Ngân</td>
                    <td>Trưởng Ban</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bà Đinh Thị Hồng</td>
                    <td>Thành viên</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Bà Đỗ Thị Vươn</td>
                    <td>Thành viên</td>
                  </tr>       
                </tbody>
              </table>
            </div>
            <h5 style="margin-top:20px;">Ban Tổng Giám đốc</h5>
            <p>Ban Tổng Giám đốc Công ty do Hội đồng quản trị bổ nhiệm, chịu sự giám sát của Hội đồng quản trị và chịu trách nhiệm trước Đại hội đồng cổ đông, Hội đồng quản trị và trước pháp luật về việc thực hiện các quyền và nhiệm vụ được giao. Tổng Giám đốc có nhiệm vụ:</p>
            <ul style="margin-left: 20px;">
              <li>Tổ chức điều hành, quản lý mọi hoạt động sản xuất kinh doanh của Công ty theo nghị quyết của ĐHĐCĐ, quyết định của HĐQT, Điều lệ Công ty và tuân thủ pháp luật;</li>
              <li>Xây dựng và trình HĐQT các quy chế quản lý điều hành nội bộ, kế hoạch sản xuất kinh doanh, kế hoạch tài chính hàng năm và dài hạn của Công ty;</li>
              <li>Báo cáo HĐQT về tình hình hoạt động, kết quả sản xuất kinh doanh, chịu trách nhiệm trước ĐHĐCĐ, HĐQT và Pháp luật về những sai phạm gây tổn thất cho Công ty;</li>
              <li>Đề nghị HĐQT quyết định bổ nhiệm, miễn nhiệm, khen thưởng, kỷ luật đối với Phó Tổng Giám đốc, Kế toán trưởng;</li>
              <li>Ký kết, thực hiện các hợp đồng theo quy định của pháp luật;</li>
              <li>Thực hiện các nghị quyết của HĐQT và ĐHĐCĐ, kế hoạch kinh doanh và kế hoạch đầu tư của Công ty đã được HĐQT và ĐHĐCĐ thông qua;</li>
              <li>Các quyền khác được quy định tại Điều lệ Công ty.</li>
            </ul>
            <div class="table-responsive">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Bà Trần Thị Thu Phương</td>
                    <td>Tổng Giám đốc</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Ông Nguyễn Vinh Quang</td>
                    <td>Phó Tổng Giám đốc</td>
                  </tr>     
                </tbody>
              </table>
            </div>
            <h5 style="margin-top:20px;">Các phòng ban chức năng</h5>
            <p class="font-italic">Phòng Tài chính – Kế toán</p>
            <p>Các phòng ban chức năng có chức năng tham mưu, giúp việc cho HĐQT, Ban TGĐ về công tác tài chính kế toán, cụ thể là:</p>

            <ul style="margin-left: 20px;">
              <li>Theo dõi, phản ánh sự lưu chuyển nguồn vốn kinh doanh của Công ty và tham mưu cho Ban lãnh đạo các vấn đề liên quan đảm bảo việc luân chuyển vốn, sử dụng vốn của công ty hiệu quả nhất;</li>
              <li>Kiểm tra, tính toán phân tích tài chính các hợp đồng, dự án của Công ty;</li>
              <li>Chịu trách nhiệm về số liệu báo cáo tài chính kế toán trước Hội đồng quản trị, Ban Tổng Giám đốc và các Cơ quan hữu quan. Theo dõi phản ánh đúng tình hình tài chính của công ty;</li>
              <li>Xây dựng kế hoạch tài chính năm, kế hoạch trung hạn, dài hạn của Công ty trình BTGĐ, HĐQT phê duyệt;</li>
              <li>Tham mưu cho Ban Tổng Giám đốc về chế độ kế toán và những thay đổi của chế độ qua từng thời kỳ trong hoạt động kinh doanh. Tổ chức công tác kế toán, thống kê và bộ máy kế toán phù hợp với công tác tổ chức sản xuất, kinh doanh theo yêu cầu của Công ty;</li>
              <li>Tổ chức ghi chép tính toán và phản ánh chính xác, trung thực, kịp thời, đầy đủ toàn bộ tài sản và phân tích kết quả sản xuất kinh doanh của Công ty;</li>
              <li>Xác định và phản ánh chính xác, kịp thời, đúng chế độ, kết quả kiểm kê tài sản hàng kỳ. Đề xuất xử lý các khoản hao hụt, mất mát, hư hỏng (nếu có);</li>
              <li>Xét duyệt các báo cáo kế toán, thống kê và báo cáo tài chính của đơn vị trực thuộc. Lập, tổng hợp đầy đủ và gửi đúng hạn báo cáo kế toán, thống kê và quyết toán tài chính của Công ty theo chế độ qui định;</li>
              <li>Tổ chức kiểm tra kế toán trong nội bộ Công ty;</li>
              <li>Nghiên cứu các chế độ chính sách trong lĩnh vực thuế, tài chính, thống kê, luật doanh nghiệp… của Nhà nước liên quan đến hoạt động của Công ty nhằm đưa ra cách thực hiện phù hợp;</li>
              <li>Tổ chức phổ biến và hướng dẫn kịp thời các chế độ, thể lệ tài chính, kế toán, thống kê hiện hành cho nội bộ bộ phận cũng như các bộ phận liên quan;</li>
              <li>Quản lý việc chuyển nhượng cổ phần, cổ phiếu của Công ty; phát hành sổ cổ đông Công ty;</li>
              <li>Tổ chức bảo quản, lưu trữ các tài liệu kế toán, giữ bí mật các tài liệu và số liệu kế toán của công ty.</li>
            </ul>
            <p class="font-italic">Phòng Nhân sự</p>
            <p>Là phòng có chức năng tham mưu giúp việc cho HĐQT/BTGĐ để quản lý, điều hành công ty trong lĩnh vực nhân sự. Phòng nhân sự có các chức năng, nhiệm vụ cụ thể như sau:</p>

            <ul style="margin-left: 20px;">
              <li>Đề xuất, tham mưu cho HĐQT/ BTGĐ xây dựng chiến lược phát triển nhân sự  đáp ứng chiến lược kinh doanh của Công ty;</li>
              <li>Nghiên cứu, đề xuất xây dựng mô hình tổ chức bộ máy điều hành của Công ty;</li>
              <li>Xây dựng chính sách nhân sự và chế độ đãi ngộ hợp lý trong nội bộ Công ty. Chủ động đề xuất, trực tiếp xây dựng các quy định, quy chế nội bộ liên quan đến công tác nhân sự của Công ty;</li>
              <li>Đảm bảo nguồn nhân lực cho các phòng/ban thành viên; Điều phối, đánh giá công việc, giám sát hiệu quả sử dụng nhân lực của các phòng/ban thành viên;</li>
              <li>Tổ chức thực hiện, giám sát việc thực hiện kỷ luật lao động, các quy chế quản lý nội bộ. Đề xuất khen thưởng, kỷ luật đối với CBCNV;</li>
              <li>Chịu trách nhiệm truyền thông nội bộ các vấn đề liên quan đến nhân sự để phát triển văn hóa doanh nghiệp;</li>
              <li>Hỗ trợ các bộ phận khác trong việc quản lý nhân sự, công tác đào tạo nhân viên, cách thức tuyển dụng nhân sự…;</li>
              
            </ul>
            <p class="font-italic">Phòng Đầu tư</p>
            <p>Là phòng có chức năng tham mưu giúp việc cho HĐQT/Ban Tổng Giám đốc ra quyết định các vấn đề thuộc lĩnh vực Quản lý đầu tư, xúc tiến đầu tư. Phòng đầu tư có nhiệm vụ cụ thể như sau:</p>

            <ul style="margin-left: 20px;">
              <li>Lên kế hoạch, tổ chức thực hiện và giám sát hiệu quả các hoạt động đầu tư của Công ty;</li>
              <li>Làm việc với các đơn vị, phòng ban khác trong Công ty để hoàn thành các công việc HĐQT đề ra;</li>
              <li>Chấp hành nghiêm chỉnh các chế độ quản lý kinh tế, tài chính, chế độ báo cáo của Công ty;</li>
              <li>Mọi hoạt động của Phòng Đầu tư phải tuân thủ theo các quy định của pháp luật hiện hành</li>           
            </ul>

            <p class="font-italic">Phòng Kinh doanh</p>
            <p>Đây là bộ phận hết sức quan trọng, đóng vai trò chủ chốt trong Công ty, giúp việc cho HĐQT/BTGĐ ra quyết định các vấn đề thuộc lĩnh vực kinh doanh - xuất nhập khẩu, nhiệm vụ cụ thể:</p>

            <ul style="margin-left: 20px;">
              <li>Đảm bảo đầu vào và đầu ra của Công ty, tiếp cận và nghiên cứu thị trường, giới thiệu sản phẩm và mở rộng thị trường cũng như thu hút khách hàng mới;</li>
              <li>Tổ chức thực hiện kế hoạch kinh doanh, tính giá và lập hợp đồng với khách hàng;</li>
              <li>Theo dõi, đôn đốc tiến độ thực hiện của các phòng ban/nhà máy, đảm bảo sản xuất, giao hàng đúng thời hạn theo đơn hàng đã cam kết với khách hàng và kịp thời đề xuất những phương án sản xuất kinh doanh hiệu quả nhất;</li>
              <li>Quản lý đội xe tải và chịu trách nhiệm vận chuyển sản phẩm cho khách hàng;</li> 
              <li>Lập và phân bổ kế hoạch sản xuất kinh doanh hàng năm cho Công ty, hàng quý và hàng tháng cho nhà máy sản xuất.</li>           
            </ul>

            <p class="font-italic">Nhà máy sản xuất</p>
            <p>Nhà máy sản xuất là nơi trực tiếp ra sản phẩm của Công ty, gồm 3 bộ phận với các chức năng và nhiệm vụ chính sau: </p>
            <p style="margin-left: 10px;" class="font-italic">-  Bộ phận hành chính: Bao gồm Hành chính, Kho và Kiểm soát nội bộ.</p>
            <ul style="margin-left: 20px;">
              <li>Công tác hành chính: Đảm bảo tốt công tác an ninh trật tư, an toàn tài sản thiết bị, vật tư hàng hóa và cơ sở hạ tầng tại khu vực nhà máy; Chăm lo đời sống, bữa ăn Trưa, Chiều, Tối cho CBCNV trong Công ty; Xây dựng và triển khai thực hiện kế hoạch về an toàn lao động, vệ sinh lao động, phòng chống cháy nổ trong nhà máy; Phân loại nguyên vật liệu đầu vào, xuống hàng, vệ sinh bãi tập kết nguyên liệu…</li>
              <li>Kho vật tư, thành phẩm: Cập nhật đầy đủ thông tin cần thiết đảm bảo N-X-T theo quy định; Đảm bảo công tác bảo quản hàng hóa và phòng chống cháy nổ trong kho; Sắp xếp kho hợp lý, kiểm kê, đánh giá chất lượng định kỳ và thường xuyên đối chiếu sổ sách với Kế toán nhằm tránh tổn thất.</li>
              <li>Theo dõi, đôn đốc tiến độ thực hiện của các phòng ban/nhà máy, đảm bảo sản xuất, giao hàng đúng thời hạn theo đơn hàng đã cam kết với khách hàng và kịp thời đề xuất những phương án sản xuất kinh doanh hiệu quả nhất;</li>
              <li>Kiểm soát nội bộ Nhà máy: Giám sát các hoạt động nhập - xuất nguyên vật liệu, thành phẩm; Giám sát việc thực hiện nội quy, quy chế của tập thể/cá nhân trong nhà máy; Lập biên bản vi phạm và kiến nghị xử lý vi phạm đối với tập thể/cá nhân vi phạm.</li>          
            </ul>

            <p style="margin-left: 10px;" class="font-italic">- Bộ phận sản xuất: Bao gồm Cơ khí, Điện tự động hóa, Các ca sản xuất và Tổ xe chuyên dụng.</p>
            <ul style="margin-left: 20px;">
              <li>Cơ khí: Quản lý toàn bộ hệ thống máy móc thiết bị, dây chuyền sản xuất: Thực hiện công tác bảo dưỡng, sửa chữa và thay thế máy móc thiết bị đảm bảo hoạt động an toàn và thời gian sản xuất ổn định nhất; Nghiên cứu đề xuất cải tiến, nâng cấp máy móc thiết bị tăng hiệu suất làm việc, tăng sản lượng, hạ giá thành sản phẩm.</li>
              <li>Điện tự động hóa: Quản lý toàn bộ hệ thống thiết bị tủ điện công nghiệp và hệ thống điện tự động hóa thuộc dây chuyền sản xuất: Thực hiện công tác bảo dưỡng, thay thế thiết bị điện đảm bảo hoạt động an toàn và thời gian sản xuất ổn định nhất; Nghiên cứu đề xuất cải tiến, nâng cấp thiết bị tăng hiệu suất làm việc, tăng sản lượng, hạ giá thành sản phẩm.</li>
              <li>Ca sản xuất: Tiếp nhận đơn hàng từ bộ phận kinh doanh và lên kế hoạch sản xuất, tổ chức sản xuất đảm bảo đúng tiến độ, đạt chất lượng theo tiêu chuẩn đã công bố hoặc theo yêu cầu của khách hàng; Kết hợp cùng các bộ phận liên quan (công nghệ, cơ khí, cơ điện,...) nghiên cứu đề xuất cải tiến tăng năng suất, tăng chất lượng sản phẩm.</li>
              <li>Tổ xe chuyên dụng: Thực hiện công việc vận hành các phương tiện xe chuyên dụng (xe xúc lật, xe gắp và xe nâng,…) phục vụ sản xuất, xuất nhập hàng hóa và nâng hạ máy móc thiết bị phục vụ sửa chữa; Tiến hành dọn dẹp, sắp xếp gọn gàng kho bãi trong nhà máy (hỗ trợ lên, xuống hàng hóa cho kho nguyên liệu, kho thành phẩm, khu vực vật tư lớn và khu vực rác thải sản xuất).</li>          
            </ul>

            <p style="margin-left: 10px;" class="font-italic">- Bộ phận kỹ thuật: Bao gồm Công nghệ, Quản lý chất lượng và Môi trường.</p>
            <ul style="margin-left: 20px;">
              <li>Công nghệ: Chịu trách nhiệm toàn bộ về công nghệ sản xuất, xây dựng và duy trì hệ thống quản lý chất lượng theo tiêu chuẩn chất lượng đã công bố; Kiểm tra, giám sát chặt chẽ quy trình sản xuất, thông số sản xuất tại nhà máy; Đưa ra định mức tiêu hao cho từng loại sản phẩm; Nghiên cứu cải tiến đổi mới công nghệ nhằm nâng cao chất lượng sản phẩm, tiết kiệm chi phí sản xuất, so sánh với sản phẩm cùng loại trên thị trường của các đối thủ cạnh tranh.</li>
              <li>Quản lý chất lượng (QC): Tổ chức nghiên cứu, áp dụng quy trình về hệ thống đo lường chất lượng; Kiểm soát chất lượng nguyên liệu đầu vào, chất lượng sản phẩm từ khâu sản xuất, nhập kho và trước khi giao hàng cho khách hàng; Quản lý mẫu sản phẩm sản xuất và thông số chất lượng cho từng sản phẩm sau khi sản xuất.</li>
              <li>Môi trường: Giám sát việc triển khai thực hiện quy trình xử lý nguồn chất thải phát sinh trong sản xuất, vận hành hệ thống xử lý nước thải, chỉ đạo công tác vệ sinh công nghiệp đảm bảo tuân thủ đúng quy định của pháp luật về bảo vệ môi trường.</li>     
            </ul>
        </div>
        <div class="tab-pane fade pl-4" id="contact23" role="tabpanel" aria-labelledby="contact23">
          <h4 class="text-center my-4" style="color: #058ff7;">Dưới đây là một số hình ảnh của Công ty CP Giấy Hoàng Hà Hà Nam</h4>
            <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh1.PNG') }}" alt="" width="100%">
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh2.PNG') }}" alt="" width="100%">
              </div>
            </div>
            <p class="font-italic text-center mt-2">Trụ sở Công ty Cổ phần Giấy Hoàng Hà Hà Nam</p>
            <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh3.PNG') }}" alt="" width="100%">
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh4.PNG') }}" alt="" width="100%">
              </div>
            </div>
            <p class="font-italic text-center mt-2">Giấy khen về thành tích chấp hành tốt chính sách, pháp luật thuế của Công ty con</p>
            <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh5.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Dây chuyền Xeo</p>
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh6.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Hệ thống xử lý nước thải</p>
              </div>
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh7.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Tháp lắng bột</p>
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh8.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Hệ thống nồi hơi, tháp lắng vi sinh</p>
              </div>
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh9.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Kho nguyên liệu, hóa chất</p>
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh10.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Kho thành phẩm</p>
              </div>
            </div>
          <!-- <h4 class="my-3 text-gioithieu">Danh sách những công ty mẹ và công ty con của tổ chức niêm yết, những công ty mà tổ chức đăng ký niêm yết đang nắm giữ quyền kiểm soát hoặc cổ phần chi phối, những công ty nắm quyền kiểm soát hoặc cổ phần chi phối đối với tổ chức đăng ký niêm yết</h4>
          <h4 class="mb-2" style="color: #058ff7">1.1 Công ty mẹ: Không có.</h4>
          <h4 class="mb-2" style="color: #058ff7">1.2 Công ty con:</h4>
          <p class="text-center font-weight-bold">Công ty Cổ phần Giấy Hoàng Hà Hà Nam</p>
          <div class="table-responsive">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Địa chỉ</td>
                    <td>KCN Đồng Văn I, Thị trấn Đồng Văn, Huyện Duy Tiên, Tỉnh Hà Nam</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Điện thoại</td>
                    <td>0226 3582866</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Mã số doanh nghiệp</td>
                    <td>0700219848 do sở Kế hoạch và Đầu tư tỉnh Hà Nam cấp lần đầu ngày 04/10/2002, thay đổi ĐKKD lần thứ 10 ngày /09/2019.</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Sản phẩm chính</td>
                    <td>Giấy Kraft sóng.</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Vốn điều lệ thực góp</td>
                    <td>60.000.000.000 đồng</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Vốn góp của HHP tại công ty con</td>
                    <td>48.000.000.000 đồng</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Tỷ lệ quyền biểu quyết</td>
                    <td>80%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="font-weight-bold">Thời điểm bắt đầu trở thành Công ty con: 27/10/2017</p>
            <p>Công ty Cổ phần Giấy Hoàng Hà Hà Nam là doanh nghiệp được chuyển đổi từ Công ty TNHH Ngọc Hải theo Giấy chứng nhận đăng ký doanh nghiệp Công ty Cổ phần số 0700219848, đăng ký thay đổi lần thứ 8 ngày 10/01/2014. </p>
            <p>Công ty TNHH Ngọc Hải được thành lập ngày 04/10/2002, năm 2003 Công ty đã ký hợp đồng thuê nhà xưởng, sân bãi của Công ty Thực phẩm Miền Bắc và tiến hành đầu tư xây dựng nhà máy sản xuất giấy bao bì công suất 6.000 tấn/năm. Năm 2005 nhà máy bắt đầu đi vào hoạt động nhưng cho đến năm 2011, kết quả kinh doanh của Công ty vẫn không đạt như mong muốn, chính vì vậy các thành viên góp vốn cũ đã tìm đối tác chuyển nhượng lại 90% vốn góp cho các thành viên mới từ ngày 08/02/2012. Sau khi hoàn tất thủ tục pháp lý, Hội đồng thành viên mới đã bổ nhiệm ban điều hành mới, nghiên cứu tình hình thực trạng nhà máy và đưa ra các quyết định đầu tư để tái cấu trúc lại nhà máy.</p>
            <p>Trong giai đoạn từ năm 2012 đến 2015, Công ty TNHH Ngọc Hải (từ 10/01/2014 đổi tên thành Công ty CP Giấy Hoàng Hà Hà Nam) đã cải tạo nâng cấp khôi phục nhà máy, rồi đầu tư để nâng công suất dây chuyền lên 9.000 tấn/năm cũng như một số hạng mục phụ trợ với tổng mức đầu tư khoảng 30 tỷ đồng. Năm 2016, Công ty đã đầu tư thêm gần 10 tỷ đồng (tạm sử dụng nguồn vốn ngắn hạn) bổ sung hạng mục nồi hơi để chuyển nhiên liệu từ than sang Biomas nhằm hạ giá thành sản phẩm và giải quyết bài toán môi trường. Năm 2017, Công ty có kế hoạch đầu tư cải tạo nâng cấp dây chuyền sản xuất để đa dạng hóa sản phẩm, không những chỉ sản xuất sản phẩm giấy Kraft mà có thể sản xuất cả dòng sản phẩm định lượng dày hơn (giấy Chipboard),mở rộng sang thị trường ống lõi thay vì chỉ là thị trường giấy bao bì carton như trước đây và đầu tư bổ sung một số hạng mục về xử lý nước thải nhằm đáp ứng ngày càng tốt hơn các quy định về bảo vệ môi trường với tổng mức đầu tư trên 15 tỷ đồng. Chính vì vậy Công ty đã thực hiện việc phát hành cổ phiếu, tăng vốn điều lệ từ 12 tỷ lên 36 tỷ đồng để bổ sung cho nguồn vốn đã và đang đầu tư. Công ty đã quyết định lựa chọn Công ty CP Giấy Hoàng Hà Hải Phòng là đơn vị góp vốn, vì hai đơn vị có cùng ngành nghề, cùng lĩnh vực sản xuất dòng sản phẩm giấy Kraft sóng, sẽ hỗ trợ được nhau trong quá trình sản xuất kinh doanh chứ không chỉ đơn thuần giải quyết bài toán về nguồn vốn. Sau khi hoàn tất các thủ tục, kể từ ngày 27/10/2017, Công ty CP Giấy Hoàng Hà Hà Nam đã chính thức trở thành công ty con của Công ty CP Giấy Hoàng Hà Hải Phòng (với tỷ lệ vốn góp: Công ty CP Giấy Hoàng Hà Hải Phòng 66,67%, ông Trần Kim Gia 17%, bà Trần Thị Thu Phương 13%, ông Lê Văn Phượng 3,33%).</p>
            <p class="text-center font-weight-bold font-italic">Dưới đây là một số hình ảnh của Công ty CP Giấy Hoàng Hà Hà Nam:</p>
            <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh1.PNG') }}" alt="" width="100%">
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh2.PNG') }}" alt="" width="100%">
              </div>
            </div>
            <p class="font-italic text-center mt-2">Trụ sở Công ty Cổ phần Giấy Hoàng Hà Hà Nam</p>
            <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh3.PNG') }}" alt="" width="100%">
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh4.PNG') }}" alt="" width="100%">
              </div>
            </div>
            <p class="font-italic text-center mt-2">Giấy khen về thành tích chấp hành tốt chính sách, pháp luật thuế của Công ty con</p>
            <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh5.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Dây chuyền Xeo</p>
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh6.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Hệ thống xử lý nước thải</p>
              </div>
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh7.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Tháp lắng bột</p>
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh8.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Hệ thống nồi hơi, tháp lắng vi sinh</p>
              </div>
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh9.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Kho nguyên liệu, hóa chất</p>
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh10.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Kho thành phẩm</p>
              </div>
            </div>
            <p>Sang đầu năm 2019, Công ty CP Giấy Hoàng Hà Hà Nam đã quyết định mua thêm dây chuyền sản xuất giấy Kraft sóng dòng định lượng mỏng công suất 9.000 tấn/năm, nâng công suất nhà máy lên 18.000 tấn/năm, do vậy Công ty đã triển khai phương án phát hành cổ phiếu riêng lẻ cho Công ty mẹ (HHP) với số vốn 24 tỷ đồng, tăng vốn điều lệ lên 80 tỷ đồng. Tính đến ngày 21/08/2019, Công ty CP Giấy Hoàng Hà Hải Phòng đã hoàn thành việc góp vốn và cơ cấu vốn góp của Công ty được thay đổi như sau: </p>
            <p>Công ty CP Giấy Hoàng Hà Hải Phòng 80%, ông Trần Kim Gia 10,2%, bà Trần Thị Thu Phương 7,8%, ông Lê Văn Phượng 2%.</p>
            <p>Kết quả kinh doanh của CTCP Giấy Hoàng Hà Hà Nam:</p>
            <ul style="margin-left: 20px;">
              <li>Năm 2017 : Doanh thu thuần: 82,7 tỷ đồng; LNST: 1,8 tỷ đồng.</li>
              <li>Năm 2018 : Doanh thu thuần: 103,2 tỷ đồng; LNST: 2,9tỷ đồng</li>
              <li>6 tháng đầu năm 2019 : Doanh thu thuần: 64 tỷ đồng; LNST: 1,8 tỷ đồng</li>
            </ul>
            <h4 class="mb-3" style="color: #058ff7">1.3 Công ty liên kết: Không</h4>
            <h4 class="mb-3" style="color: #058ff7">1.4 Hợp tác kinh doanh:</h4>
            <p>Công ty đã ký Hợp đồng hợp tác kinh doanh số 2109/2017/HĐHTKD ngày 21/9/2017 với Công ty TNHH tư vấn sản xuất giấy Hoàng Hà để triển khai dự án Mở rộng và chuyển đổi mục đích sử dụng lô đất 3.523,3 m2 tại địa chỉ phố An Chân, phường Sở Dầu, quận Hồng Bàng, thành phố Hải Phòng với số vốn góp là 20 tỷ đồng.</p>
            <p>Tiến độ triển khai dự án của Công ty TNHH tư vấn sản xuất giấy Hoàng Hà kể từ sau thời điểm Công ty CP Giấy Hoàng Hà Hải Phòng góp vốn (thời điểm Tháng 10/2017) được cập nhật như sau:  </p>
            <p>Công ty TNHH Tư vấn sản xuất giấy Hoàng Hà đã được Sở Tài nguyên và Môi trường thành phố Hải Phòng cấp giấy chứng nhận bổ sung quyền sở hữu đối với 02 công trình trên đất là Nhà kho (DTXD 877,5m2) và Nhà văn phòng, làm việc (DTXD 111,8m2; DTSD 226,8m2) trên giấy chứng nhận quyền sử dụng đất số CE792947 ngày 7/2/2018. Văn bản số 470/SXD_QHKT ngày 6/2/2018 của Sở Xây dựng thành phố Hải Phòng đã xác nhận khu đất trên được quy hoạch là đất ở. Ngày 22/6/2018 UBND thành phố Hải Phòng đã có văn bản số 3095/VP-ĐC2 gửi Sở Xây dựng và UBND quận Hồng Bàng để kiểm tra cụ thể về nguồn gốc đất đai; Ngày 05/7/2018 UBND quận Hồng Bàng có Văn bản 875/UBND-TN&MT; Ngày 17/7/2018 UBND thành phố Hải Phòng có Văn bản số 4395/UBND-ĐC2 giao Sở Xây dựng tổng hợp, báo cáo. Ngày 25/7/2018 Sở Xây dựng đã tổ chức cuộc họp lấy ý kiến các Sở, ngành, địa phương và các đơn vị có liên quan thống nhất đề nghị UBND thành phố cho phép đấu thầu lựa chọn nhà đầu tư thực hiện dự án phát triển nhà ở thương mại, đồng thời có văn bản số 2739/SXD-QHKT ngày 03/8/2018 gửi UBND thành phố Hải Phòng về việc đấu thầu lựa chọn nhà đầu tư để thực hiện dự án phát triển nhà tại phường Sở Dầu, quận Hồng Bàng. Ngày 28/9/2018, UBND thành phố Hải Phòng đã có Văn bản số 4561/VP-QH gửi Sở Xây dựng về việc kiểm tra sự phù hợp của dự án. Ngày 18/7/2019, UBND thành phố Hải Phòng có Văn bản số 4296/UBND-XD gửi Sở Xây dựng yêu cầu kiểm tra, đề xuất, báo cáo UBND thành phố. Ngày 06/8/2019, Sở Xây dựng đã có Văn bản số 3255/SXD-QHKT gửi UBND thành phố Hải Phòng báo cáo về việc đã đưa dự án phát triển nhà tại đường An Chân, phường Sở Dầu, quận Hồng Bàng của Công ty vào kế hoạch để trình duyệt kỳ này. Đến nay, dự án đang được Công ty TNHH Tư vấn sản xuất giấy Hoàng Hà tích cực phối hợp với các Ban ngành có liên quan triển khai theo đúng trình tự quy định của pháp luật.</p> -->

        </div>


        <div class="tab-pane fade pl-4" id="contact24" role="tabpanel" aria-labelledby="contact24">
          <h4 class="my-3 text-gioithieu">Danh sách những công ty mẹ và công ty con của tổ chức niêm yết, những công ty mà tổ chức đăng ký niêm yết đang nắm giữ quyền kiểm soát hoặc cổ phần chi phối, những công ty nắm quyền kiểm soát hoặc cổ phần chi phối đối với tổ chức đăng ký niêm yết</h4>
          <h4 class="mb-2" style="color: #058ff7">1.1 Công ty mẹ: Không có.</h4>
          <h4 class="mb-2" style="color: #058ff7">1.2 Công ty con:</h4>
          <p class="text-center font-weight-bold">Công ty Cổ phần Giấy Hoàng Hà Hà Nam</p>
          <div class="table-responsive">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Địa chỉ</td>
                    <td>KCN Đồng Văn I, Thị trấn Đồng Văn, Huyện Duy Tiên, Tỉnh Hà Nam</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Điện thoại</td>
                    <td>0226 3582866</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Mã số doanh nghiệp</td>
                    <td>0700219848 do sở Kế hoạch và Đầu tư tỉnh Hà Nam cấp lần đầu ngày 04/10/2002, thay đổi ĐKKD lần thứ 10 ngày /09/2019.</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Sản phẩm chính</td>
                    <td>Giấy Kraft sóng.</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Vốn điều lệ thực góp</td>
                    <td>60.000.000.000 đồng</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Vốn góp của HHP tại công ty con</td>
                    <td>48.000.000.000 đồng</td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Tỷ lệ quyền biểu quyết</td>
                    <td>80%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <p class="font-weight-bold">Thời điểm bắt đầu trở thành Công ty con: 27/10/2017</p>
            <p>Công ty Cổ phần Giấy Hoàng Hà Hà Nam là doanh nghiệp được chuyển đổi từ Công ty TNHH Ngọc Hải theo Giấy chứng nhận đăng ký doanh nghiệp Công ty Cổ phần số 0700219848, đăng ký thay đổi lần thứ 8 ngày 10/01/2014. </p>
            <p>Công ty TNHH Ngọc Hải được thành lập ngày 04/10/2002, năm 2003 Công ty đã ký hợp đồng thuê nhà xưởng, sân bãi của Công ty Thực phẩm Miền Bắc và tiến hành đầu tư xây dựng nhà máy sản xuất giấy bao bì công suất 6.000 tấn/năm. Năm 2005 nhà máy bắt đầu đi vào hoạt động nhưng cho đến năm 2011, kết quả kinh doanh của Công ty vẫn không đạt như mong muốn, chính vì vậy các thành viên góp vốn cũ đã tìm đối tác chuyển nhượng lại 90% vốn góp cho các thành viên mới từ ngày 08/02/2012. Sau khi hoàn tất thủ tục pháp lý, Hội đồng thành viên mới đã bổ nhiệm ban điều hành mới, nghiên cứu tình hình thực trạng nhà máy và đưa ra các quyết định đầu tư để tái cấu trúc lại nhà máy.</p>
            <p>Trong giai đoạn từ năm 2012 đến 2015, Công ty TNHH Ngọc Hải (từ 10/01/2014 đổi tên thành Công ty CP Giấy Hoàng Hà Hà Nam) đã cải tạo nâng cấp khôi phục nhà máy, rồi đầu tư để nâng công suất dây chuyền lên 9.000 tấn/năm cũng như một số hạng mục phụ trợ với tổng mức đầu tư khoảng 30 tỷ đồng. Năm 2016, Công ty đã đầu tư thêm gần 10 tỷ đồng (tạm sử dụng nguồn vốn ngắn hạn) bổ sung hạng mục nồi hơi để chuyển nhiên liệu từ than sang Biomas nhằm hạ giá thành sản phẩm và giải quyết bài toán môi trường. Năm 2017, Công ty có kế hoạch đầu tư cải tạo nâng cấp dây chuyền sản xuất để đa dạng hóa sản phẩm, không những chỉ sản xuất sản phẩm giấy Kraft mà có thể sản xuất cả dòng sản phẩm định lượng dày hơn (giấy Chipboard),mở rộng sang thị trường ống lõi thay vì chỉ là thị trường giấy bao bì carton như trước đây và đầu tư bổ sung một số hạng mục về xử lý nước thải nhằm đáp ứng ngày càng tốt hơn các quy định về bảo vệ môi trường với tổng mức đầu tư trên 15 tỷ đồng. Chính vì vậy Công ty đã thực hiện việc phát hành cổ phiếu, tăng vốn điều lệ từ 12 tỷ lên 36 tỷ đồng để bổ sung cho nguồn vốn đã và đang đầu tư. Công ty đã quyết định lựa chọn Công ty CP Giấy Hoàng Hà Hải Phòng là đơn vị góp vốn, vì hai đơn vị có cùng ngành nghề, cùng lĩnh vực sản xuất dòng sản phẩm giấy Kraft sóng, sẽ hỗ trợ được nhau trong quá trình sản xuất kinh doanh chứ không chỉ đơn thuần giải quyết bài toán về nguồn vốn. Sau khi hoàn tất các thủ tục, kể từ ngày 27/10/2017, Công ty CP Giấy Hoàng Hà Hà Nam đã chính thức trở thành công ty con của Công ty CP Giấy Hoàng Hà Hải Phòng (với tỷ lệ vốn góp: Công ty CP Giấy Hoàng Hà Hải Phòng 66,67%, ông Trần Kim Gia 17%, bà Trần Thị Thu Phương 13%, ông Lê Văn Phượng 3,33%).</p>
            <p class="text-center font-weight-bold font-italic">Dưới đây là một số hình ảnh của Công ty CP Giấy Hoàng Hà Hà Nam:</p>
            <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh1.PNG') }}" alt="" width="100%">
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh2.PNG') }}" alt="" width="100%">
              </div>
            </div>
            <p class="font-italic text-center mt-2">Trụ sở Công ty Cổ phần Giấy Hoàng Hà Hà Nam</p>
            <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh3.PNG') }}" alt="" width="100%">
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh4.PNG') }}" alt="" width="100%">
              </div>
            </div>
            <p class="font-italic text-center mt-2">Giấy khen về thành tích chấp hành tốt chính sách, pháp luật thuế của Công ty con</p>
            <div class="row">
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh5.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Dây chuyền Xeo</p>
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh6.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Hệ thống xử lý nước thải</p>
              </div>
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh7.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Tháp lắng bột</p>
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh8.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Hệ thống nồi hơi, tháp lắng vi sinh</p>
              </div>
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh9.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Kho nguyên liệu, hóa chất</p>
              </div>            
              <div class="col-12 col-lg-6">
                <img src="{{ asset('images/anh10.PNG') }}" alt="" width="100%" height="300">
                <p class="text-center mt-2">Kho thành phẩm</p>
              </div>
            </div>
            <p>Sang đầu năm 2019, Công ty CP Giấy Hoàng Hà Hà Nam đã quyết định mua thêm dây chuyền sản xuất giấy Kraft sóng dòng định lượng mỏng công suất 9.000 tấn/năm, nâng công suất nhà máy lên 18.000 tấn/năm, do vậy Công ty đã triển khai phương án phát hành cổ phiếu riêng lẻ cho Công ty mẹ (HHP) với số vốn 24 tỷ đồng, tăng vốn điều lệ lên 80 tỷ đồng. Tính đến ngày 21/08/2019, Công ty CP Giấy Hoàng Hà Hải Phòng đã hoàn thành việc góp vốn và cơ cấu vốn góp của Công ty được thay đổi như sau: </p>
            <p>Công ty CP Giấy Hoàng Hà Hải Phòng 80%, ông Trần Kim Gia 10,2%, bà Trần Thị Thu Phương 7,8%, ông Lê Văn Phượng 2%.</p>
            <p>Kết quả kinh doanh của CTCP Giấy Hoàng Hà Hà Nam:</p>
            <ul style="margin-left: 20px;">
              <li>Năm 2017 : Doanh thu thuần: 82,7 tỷ đồng; LNST: 1,8 tỷ đồng.</li>
              <li>Năm 2018 : Doanh thu thuần: 103,2 tỷ đồng; LNST: 2,9tỷ đồng</li>
              <li>6 tháng đầu năm 2019 : Doanh thu thuần: 64 tỷ đồng; LNST: 1,8 tỷ đồng</li>
            </ul>
            <h4 class="mb-3" style="color: #058ff7">1.3 Công ty liên kết: Không</h4>
            <h4 class="mb-3" style="color: #058ff7">1.4 Hợp tác kinh doanh:</h4>
            <p>Công ty đã ký Hợp đồng hợp tác kinh doanh số 2109/2017/HĐHTKD ngày 21/9/2017 với Công ty TNHH tư vấn sản xuất giấy Hoàng Hà để triển khai dự án Mở rộng và chuyển đổi mục đích sử dụng lô đất 3.523,3 m2 tại địa chỉ phố An Chân, phường Sở Dầu, quận Hồng Bàng, thành phố Hải Phòng với số vốn góp là 20 tỷ đồng.</p>
            <p>Tiến độ triển khai dự án của Công ty TNHH tư vấn sản xuất giấy Hoàng Hà kể từ sau thời điểm Công ty CP Giấy Hoàng Hà Hải Phòng góp vốn (thời điểm Tháng 10/2017) được cập nhật như sau:  </p>
            <p>Công ty TNHH Tư vấn sản xuất giấy Hoàng Hà đã được Sở Tài nguyên và Môi trường thành phố Hải Phòng cấp giấy chứng nhận bổ sung quyền sở hữu đối với 02 công trình trên đất là Nhà kho (DTXD 877,5m2) và Nhà văn phòng, làm việc (DTXD 111,8m2; DTSD 226,8m2) trên giấy chứng nhận quyền sử dụng đất số CE792947 ngày 7/2/2018. Văn bản số 470/SXD_QHKT ngày 6/2/2018 của Sở Xây dựng thành phố Hải Phòng đã xác nhận khu đất trên được quy hoạch là đất ở. Ngày 22/6/2018 UBND thành phố Hải Phòng đã có văn bản số 3095/VP-ĐC2 gửi Sở Xây dựng và UBND quận Hồng Bàng để kiểm tra cụ thể về nguồn gốc đất đai; Ngày 05/7/2018 UBND quận Hồng Bàng có Văn bản 875/UBND-TN&MT; Ngày 17/7/2018 UBND thành phố Hải Phòng có Văn bản số 4395/UBND-ĐC2 giao Sở Xây dựng tổng hợp, báo cáo. Ngày 25/7/2018 Sở Xây dựng đã tổ chức cuộc họp lấy ý kiến các Sở, ngành, địa phương và các đơn vị có liên quan thống nhất đề nghị UBND thành phố cho phép đấu thầu lựa chọn nhà đầu tư thực hiện dự án phát triển nhà ở thương mại, đồng thời có văn bản số 2739/SXD-QHKT ngày 03/8/2018 gửi UBND thành phố Hải Phòng về việc đấu thầu lựa chọn nhà đầu tư để thực hiện dự án phát triển nhà tại phường Sở Dầu, quận Hồng Bàng. Ngày 28/9/2018, UBND thành phố Hải Phòng đã có Văn bản số 4561/VP-QH gửi Sở Xây dựng về việc kiểm tra sự phù hợp của dự án. Ngày 18/7/2019, UBND thành phố Hải Phòng có Văn bản số 4296/UBND-XD gửi Sở Xây dựng yêu cầu kiểm tra, đề xuất, báo cáo UBND thành phố. Ngày 06/8/2019, Sở Xây dựng đã có Văn bản số 3255/SXD-QHKT gửi UBND thành phố Hải Phòng báo cáo về việc đã đưa dự án phát triển nhà tại đường An Chân, phường Sở Dầu, quận Hồng Bàng của Công ty vào kế hoạch để trình duyệt kỳ này. Đến nay, dự án đang được Công ty TNHH Tư vấn sản xuất giấy Hoàng Hà tích cực phối hợp với các Ban ngành có liên quan triển khai theo đúng trình tự quy định của pháp luật.</p>
        </div>


        <div class="tab-pane fade pl-4" id="contact25" role="tabpanel" aria-labelledby="contact25">
          <h4 class="my-3 text-gioithieu text-center" style="color: #058ff7">LỜI DẠY CỦA CHÚA</h4>
                <span>“Về Đấng Ky Tô, các ngươi nghĩ thể nào?” (Ma Thi Ơ 22:42). Với những lời đó, Chúa Giê Su đã làm những người Pha Ri Si phải bối rối trong thời kỳ của Ngài. Cũng với những lời đó, tôi hỏi Các Bạn Thánh Hữu Ngày Sau của tôi và các Ky Tô hữu khác là các anh chị em thật sự tin gì về Chúa Giê Su Ky Tô và các anh chị em đang làm gì vì niềm tin đó.
                  <br>
                Đa số những đoạn tôi trích dẫn trong thánh thư sẽ là từ Kinh Thánh, vì nó quen thuộc với hầu hết Các Ky Tô hữu. Dĩ nhiên, những lời giải thích của tôi sẽ là từ thánh thư hiện đại, nhất là Sách Mặc Môn, dạy chúng ta biết về ý nghĩa của những câu trong Kinh Thánh mơ hồ đến mức mà các Ky Tô hữu khác nhau không đồng ý với ý nghĩa của những đoạn trích dẫn đó. Tôi ngỏ lời với những người tin nhưng cũng với những người khác nữa. Như Anh Cả Tad R. Callister đã dạy chúng ta lúc sáng này, một số người tự gọi là Các Ky Tô hữu ngợi khen Chúa Giê Su là Đức Thầy vĩ đại nhưng tránh xác nhận thiên tính của Ngài. Để ngỏ lời cùng họ, tôi đã sử dụng lời của chính Chúa Giê Su. Chúng ta đều cần phải xem xét điều mà chính Ngài đã dạy về việc Ngài là ai và điều Ngài đã được gửi đến thế gian để làm.</span>
        </div>
        <!-- cột bên phải -->
        <!-- <div class="col-md-3 tin-tuc-content"  data-aos="fade-up" data-aos-delay="700">
          <ul class="list-group" >
            <li class="list-group-item text-center font-weight-bold" style="background-color: #058ff7 ; color: white" >TIN TỨC</li>
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
        </div> -->

      </div>
    </div>
    @endsection
