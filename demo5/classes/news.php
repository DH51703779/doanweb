<?php
$filepath= realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
include_once ($filepath.'/../helpers/format.php');
?>
<?php

class news {
    private $db ;
    private $fm ;

    public function __construct(){
        $this->db = new Database();
        $this->fm = new Format(); 
    }
    public function insert_new($data,$files)   
    {
       
        $date = getdate();
        $tieude = mysqli_real_escape_string($this->db->link,$data['tieude']);
        $noidung = mysqli_real_escape_string($this->db->link,$data['noidung']);
        $ngay = $date['mday'];
        $thang = $date['mon'];
        $nam = $date['year'];
        $dates = $ngay.$thang.$nam ;
      
        //kiểm tra hình ảnh và lấy hình ảnh cho vào folder upload
        $permited = array('jpg','jpeg','png','gif');
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_temp = $_FILES['image']['tmp_name'];

        $div = explode('.',$file_name);
        $file_ext = strtolower(end($div));
        $unique_image= substr(md5(time()),0,10).'.'.$file_ext;
        $uploaded_image = "../images/food/".$unique_image;


        if($tieude==""||$noidung==""){
            $alert ="chưa nhập đủ thông tin ";
            return $alert ;
        }
        else{
            move_uploaded_file($file_temp,$uploaded_image);
            $query = "INSERT INTO news(tieude,ngaydang,noidung,images) VALUES('$tieude','$dates','$noidung','$unique_image')";
            $result = $this->db->insert($query);
            if($result){
                $alert ="<span class='succsess'> Thêm thành công</span>";
                return $alert ;
            }else{
                $alert ="<span class='succsess'> Thêm không thành công</span>";
                return $alert ;
            }

            }
    
    }
    public function show_news(){
        
        $query = "SELECT * FROM news order by id desc" ;
        $result = $this->db->select($query);
        return $result;

    }
    public function show_loaimenu(){
        
        $query = "SELECT * FROM loai_mon " ;
        $result = $this->db->select($query);
        return $result;

    }
    public function update_loai($tenloai,$ghichu,$id){
        $tenloai=$this->fm->validation($tenloai);
        $ghichu=$this->fm->validation($ghichu);

        $tenloai = mysqli_real_escape_string($this->db->link,$tenloai);
        $ghichu = mysqli_real_escape_string($this->db->link,$ghichu);
        $id = mysqli_real_escape_string($this->db->link,$id);

        if(empty($tenloai)){
            $alert ="chưa nhập tên loại món ";
            return $alert ;
        }
        else{
            $query = "UPDATE  loai_mon SET name_loai='$tenloai',ghichu='$ghichu' Where id_loai='$id'" ;
            $result = $this->db->insert($query);
            if($result){
                $alert ="<span class='succsess'> Sửa thành công</span>";
                return $alert ;
            }else{
                $alert ="<span class='succsess'> Sửa không thành công</span>";
                return $alert ;
            }

            }
    }
    public function del_loai($id){
        $query = "DELETE FROM  news  Where id='$id'" ;
            $result = $this->db->delete($query);
            if($result){
                $alert ="<span class='succsess'> Xóa thành công</span>";
                return $alert ;
            }else{
                $alert ="<span class='succsess'> Xóa không thành công</span>";
                return $alert ;
            }

    }
    public function getnewsbyid($id){
        $query = "SELECT * FROM news where id='$id'" ;
        $result = $this->db->select($query);
        return $result;
        
    }
}

?>