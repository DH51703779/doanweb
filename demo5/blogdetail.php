<?php
include 'inc/header.php';
?>
<?php
if(!isset($_GET['id']) || $_GET['id']==NULL){
    echo "<script>window.location = '404.php'</script>";
}else{
    $id= $_GET['id'];
}



if($_SERVER['REQUEST_METHOD']=='POST'){
    $id_mon = $_POST['id_mon'];
	$soluong= $_POST['soluong'];
    $addcart = $ct->insert_cart($id,$soluong);
    
    header('location:cartt.php');

}
 
?>


<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">News</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Detail <i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <?php
					$get_detail= $news->getnewsbyid($id);
					if($get_detail){
						while($result_detail= $get_detail->fetch_assoc()){

					
				?>
				
                <div class="container">
				<div class="row">
					<div class="col-md-7 d-flex">
						<div class="img"><img height="300" width="500" src="images/food/<?php echo $result_detail['images'] ?>"> </div>
						
					</div>
					<div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">News</span>
	            <h2 class="mb-4"><?php echo $result_detail['tieude'] ?></h2>
	          </div>
	          <p><?php echo $result_detail['noidung'] ?></p>
						<pc class="time">
						
						</p>
					</div>
				</div>
			</div>
				<?php
			  	}

			}
			?>

        
            </div>
        </div>
    </div>
</section>

<?php
include 'inc/footer.php';
?>