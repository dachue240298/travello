<?php
    include('includes/header.php');
    include('includes/navbar.php');
?>
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thêm Nhà Hàng
            <a href="danh-sach-nha-hang.php">
              <button type="button" class="btn btn-success">Danh Sách Nhà Hàng</button>
            </a>
            </h6>
        </div>
        <?php
           

            if(isset($_SESSION['success']) && $_SESSION['success'] !='')
            {
                echo    '<div class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                        </span>
                        <span class="text">
                        '.$_SESSION['success'].'
                        </span>
                        </div>';
                unset($_SESSION['success']);
            }

            if(isset($_SESSION['status']) && $_SESSION['status'] !='')
            {
                echo '<div class="btn btn-warning btn-icon-split">
                     <span class="icon text-white-50">
                        <i class="fas fa-exclamation-triangle"></i>
                     </span>
                     <span class="text">
                        '.$_SESSION['status'].'
                     </span>
                     </div>';
                unset($_SESSION['status']);
            }
        ?>
        <form action="code.php" method="POST">

        <div class="modal-body">


            <div class="form-group">
                <label> Tên Nhà Hàng </label>
                <input type="text" name="TenNhaHang" class="form-control" placeholder="Nhập Tên Nhà Hàng">
            </div>
            <div class="form-group">
                <label> Địa Chỉ </label>
                <input type="text" name="DiaChi" class="form-control" placeholder="Nhập Địa Chỉ">
            </div>
            <div class="form-group">
                <label> Ảnh </label>
                <!-- <input type="file" name="images" id="images" class="form-control" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])"> -->
                <input type="text" name="Anh" class="form-control" placeholder="Nhập Ảnh">
            </div>
            <div class="form-group">
                <label> SDT </label>
                <input type="number" name="SDT" class="form-control" placeholder="Nhập SDT">
            </div>
            <div class="form-group">
                <label> Giới Thiệu </label>
                <input type="text" name="GioiThieuNH" class="form-control" placeholder="Nhập Giới Thiệu">
            </div>
            <div class="form-group">
                <label> Giá Nhà Hàng (VNĐ) </label>
                <input type="number" name="GiaNH" class="form-control" placeholder="Nhập Giá Nhà Hàng">
            </div>
        </div>

        <div class="modal-footer">
            <button type="reset" value="reset" class="btn btn-warning" data-dismiss="modal">Xoá Trường</button>
            <button type="submit" name="btn_them_nh" class="btn btn-primary">Lưu</button>
        </div>

        </form>
    </div>

</div>
<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>