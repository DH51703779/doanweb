<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/news.php' ?>

<?php
$news = new news();
	if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['submit'])){

		$insernews = $news->insert_new($_POST,$_FILES) ;
	}
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Thêm món ăn</h2>
        <div class="block">   
                
         <form action="updatetin.php" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Tiêu đề</label>
                    </td>
                    <td>
                        <input type="text" name="tieude" placeholder="Enter tieude..." class="medium" />
                    </td>
                </tr>
			
                <tr>
                    <td>
                        <label>Nội dung</label>
                    </td>
                    <td>
                    <textarea name="noidung" class="tinymce"></textarea>
                    </td>
                </tr>
				
                <tr>
                    <td>
                        <label>Tải hình </label>
                    </td>
                    <td>
                        <input type="file" name="image" />
                    </td>
                </tr>
				
				

				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Save" /> <?php
                if(isset($insernews)){
                    echo $insernews;
                }
                ?>    
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include 'inc/footer.php';?>


