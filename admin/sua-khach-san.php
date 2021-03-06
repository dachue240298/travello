<?php
    include('includes/header.php');
    include('includes/navbar.php');
?>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Sửa Khách Sạn
    <a href="danh-sach-khach-san.php">
              <button type="button" class="btn btn-success">Danh Sách Khách Sạn</button>
            </a>
    </h6>
  </div>
    
  <div class="card-body">
    <?php
        $connection = mysqli_connect("localhost","root","","travello_db");
        if(isset($_POST['edit_btn']))
        {
            $maks = $_POST['sua_maks'];
            $query = "SELECT * FROM khachsan WHERE MaKS ='$maks'";
            $query_run = mysqli_query($connection, $query);
            foreach($query_run as $row)
            {
    ?>
                <form action="code.php" method="POST">
                <div class="form-group">
                        <label> Mã Khách Sạn </label>
                        <input type="text" name="sua_maks"  value="<?php echo $row['MaKS'] ?>" class="form-control" placeholder="Enter MaKS" readonly>
                    </div>
                    <div class="form-group">
                        <label> Tên Khách Sạn </label>
                        <input type="text" name="sua_tenks"  value="<?php echo $row['TenKS'] ?>" class="form-control" placeholder="Enter TenKS">
                    </div>
                    <div class="form-group">
                        <label> Hạng Sao </label>
                        <input type="number" name="sua_hangsao"  value="<?php echo $row['HangSao'] ?>" class="form-control" placeholder="Enter HangSao">
                    </div>
                    <div class="form-group">
                        <label>Địa Chỉ Khách Sạn </label>
                        <input type="text" name="sua_diachiks" value="<?php echo $row['DiaChi'] ?>" class="form-control" placeholder="Enter DiaChi">
                    </div>
                    <div class="form-group">
                        <label>Số Điện Thoại </label>
                        <input type="number" name="sua_sdtks" value="<?php echo $row['DienThoai'] ?>" class="form-control" placeholder="Enter DienThoai">
                    </div>
                    <div class="form-group">
                        <label>Số Phòng </label>
                        <input type="number" name="sua_sophong" value="<?php echo $row['SoPhong'] ?>" class="form-control" placeholder="Enter SoPhong">
                    </div>
                    <div class="form-group">
                        <label>WebSite </label>
                        <input type="text" name="sua_web" value="<?php echo $row['WebSite'] ?>" class="form-control" placeholder="Enter WebSite">
                    </div>
                    <div class="form-group">
                        <label>Ảnh Khách Sạn </label>
                        <input type="text" name="sua_anhks" value="<?php echo $row['Anh'] ?>" class="form-control" placeholder="Enter Anh">
                    </div>
                    <a href="danh-sach-khach-san.php" class="btn btn-danger">Cancel</a>
                    <button type="submit" name="btn_capnhat_ks" class="btn btn-primary">Update</button>
                </form>

                <?php
            }
        }
        
      ?>
    
  </div>
</div>


<?php
    include('includes/footer.php');
    include('includes/scripts.php');
?>