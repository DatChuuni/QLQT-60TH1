<?php
	include("lib_db.php");
	include("header.php");

	$sql1="select * from sanpham where GiamGia = 1  ORDER by IDSanPham DESC LIMIT 8 ";
	$data1=select_list($sql1);
	// print_r($data1);exit;
	$sql2="select * from sanpham where GiamGia = 0  ORDER by IDSanPham DESC LIMIT 8 ";
	$data2=select_list($sql2);

	
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>BaiTapWeb</title>
	<link rel="stylesheet" type="text/css" href="bt.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	
	<div class="banner">
		<div class="content-1">
			<div class="container-fluid bg-3 text-center">    
			  <h3>Trà Phổ Biến</h3><br>
			  <div class="row">
			  	<?php foreach ($data2 as $value2) {
			  		
			  	?>
			    <div class="col-sm-3">
			    	<a href="trangthanhtoan.php?id=<?php echo $value2["IDSanPham"];?>">
			      <img src="images/<?php echo $value2['Image']; ?>" class="img-responsive" style="width:100%; height: 300px" alt="Image" >
			      <p><?php echo $value2['Ten']; ?></p>
			      <p><?php echo $value2['GiaTien']; ?>đ</p>
			      </a>
			    </div>
			    <?php  
			    } ?>
			    
			    
			  </div>
			</div>
			
		<div style="text-align:center ; margin-top: 80px  ">
		<div class="content-2">
			<div class="container-fluid bg-3 text-center ">    
			  <h3>Giảm Giá</h3><br>
			  <div class="row">
			  	<?php foreach ($data1 as $value1) {
			  		?>

			    <div class="col-sm-3">
			      
			      <a href="trangthanhtoan.php?id=<?php echo $value1["IDSanPham"];?>">
				      <img src="images/<?php echo $value1['Image']; ?>" class="img-responsive" style="width:100%;" alt="Image" >
				      <p><?php echo $value1['Ten']; ?></p>
				      <p> <?php echo $value1['GiaTien']*0.5;?>đ   <span style="text-decoration: line-through;"> <?php echo $value1['GiaTien'];?>đ</span></p>
			      </a>
			    
			    </div>
			    	<?php
			  	} ?>
			    
			 
			</div>
			
		</div>
		<div style="text-align:center ; margin-top: 130px  ">
	<div class="footer" >
		<!-- Footer -->
<footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Giới thiệu</h5>

        <p>
          
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Hệ Thống Cửa Hàng</h5>
        <strong>Chi Nhánh Hồ Chí Minh</strong>

        <ul class="list-unstyled mb-0">
          <li>
            <p>Quận 10 - 561 Sư Vạn Hạnh, Phường 13</p>
          </li>
          <li>
            <p>Quận Tân Bình - 136 Nguyễn Hồng Đào, Phường 14</p>
          </li>
          <li>
            <p>Quận Tân Phú - 132 Nguyễn Sơn, Phường Phú Thọ Hòa.</p>
          </li>
        </ul>
        <strong>Chi Nhánh Hà Nội</strong>

        <ul class="list-unstyled mb-0">
          <li>
            <p>Đống Đa - 49-51 Hồ Đắc Di, Nam Đồng.</p>
          </li>
          <li>
            <p>Hai Bà Trưng - 121 Phố Huế.</p>
          </li>
          <li>
            <p>Hai Bà Trưng - Tầng 7 Vincom Bà Triệu.</p>
          </li>
        </ul>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0">FANPAGE</h5>
        <div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0" nonce="bw7BlGJc"></script>
       <div class="fb-page" data-href="" data-tabs="timeline" data-width="380" data-height="165" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="" class="fb-xfbml-parse-ignore"><a href="</div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-left p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
	</div>
</body>

</html>