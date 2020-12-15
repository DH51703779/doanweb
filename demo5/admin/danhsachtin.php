<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/news.php' ?>
<?php
$news = new news();
if(isset($_GET['delid'])){
	$id= $_GET['delid'];
	$delloai = $news->del_loai($id);
}
else{
    echo "a";
}
	
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Danh sách loại </h2>
                <div class="block">
				<?php
                if(isset($delloai)){
                    echo $delloai;
                }
                ?>        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>tiêu đề </th>
                            <th>Ngày đăng</th>
                            <th>action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$show_loai = $news->show_news();
						if($show_loai){
							$i=0;
							while($result = $show_loai->fetch_assoc()){
								$i++;						
						
					?>
						<tr class="odd gradeX">
							<td><?php echo $i ?></td>
                            <td><?php echo $result['tieude']?></td>
                            <td><?php echo $result['ngaydang']?></td>
							<td><a href="catedit.php?id_loai=<?php echo $result['id']?>">Edit</a> 
							|| <a onclick="return confirm('bạn muốn xóa ?')" href="?delid=<?php echo $result['id']?>">Delete</a></td>
						</tr>
						<?php
							}
						}
						?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
	$(document).ready(function () {
	    setupLeftMenu();

	    $('.datatable').dataTable();
	    setSidebarHeight();
	});
</script>
<?php include 'inc/footer.php';?>

