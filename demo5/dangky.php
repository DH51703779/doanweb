<?php
include 'inc/header.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
 
  $ten = $_POST['ten'];
  $sdt1=$_POST['sdt1'];
  $sex=$_POST['gioitinh'];
  $pass1= md5($_POST['pass1']);
  $repass=md5($_POST['repass']);
  $result = $us->insert_user($ten,$sdt1,$sex,$pass1,$repass);
  
 
}
?>
?>
<style>
  label{
    color: black;

    font-weight: bold;
  }
  </style>
    
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Đăng Ký</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Đăng Ký<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 pt-5 px-2 pb-2 p-md-5 order-md-last">
            <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Đăng Ký</h2>
            <span  > <?php 
				    if(isset($result))
				        {
				    	echo $result ;
				        }
			?></span>
            <form class="login-form" action=dangky.php method="post">
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col">
                                        <label>Tên</label>
                                        <input type="text" class="form-control" placeholder="vd: Thanh Ngân" required
                                            name="ten">
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-uppercase">Số điện thoại</label>
                                <input name=sdt1 type="text" class="form-control" pattern="[0]{1}[0-9]{9}" placeholder="vd: 03321144XX">

                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <div class="row" data-toggle="buttons">
                                    <div class="col">
                                        <label class="btn btn-outline-secondary">Nam
                                            <input checked type="radio" name="gioitinh" value="1">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <label class="btn btn-outline-secondary">Nữ
                                            <input type="radio" name="gioitinh" value="0">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="text-uppercase">Mật khẩu</label>
                                <input type="password" name=pass1 class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label  class="text-uppercase">Nhập lại mật khẩu</label>
                                <input type="password" name=repass class="form-control" placeholder="">
                            </div>
                            <?php
                 
                            ?> 


                            <div class="form-check">
                                <!-- <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                <small></small>
                            </label> -->
   
                                 <input type="submit" value="Đăng Ký  " class="btn btn-primary py-3 px-5">
                            </div>

                        </form>
					</div>
			
				</div>
			</div>
		</section>
	
    <?php
  include 'inc/footer.php';
  ?>