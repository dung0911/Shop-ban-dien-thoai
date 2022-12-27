   <?php if (isset($_COOKIE['msg'])) { ?>
       <div class="alert alert-success">
           <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
       </div>
   <?php } ?>
   <hr>
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
       <?php if (isset($_COOKIE['msg'])) { ?>
           <div class="alert alert-warning">
               <strong>Thông báo</strong> <?= $_COOKIE['msg'] ?>
           </div>
       <?php } ?>
       <form action="?mod=nguoidung&act=store" method="POST" role="form" enctype="multipart/form-data">
           <div class="form-group">
               <label for="" class="mb-2">Họ</label>
               <input type="text" class="form-control py-2 px-3 mb-1" id="" placeholder="" name="Ho">
           </div>
           <div class="form-group">
               <label for="" class="mb-2">Tên</label>
               <input type="text" class="form-control py-2 px-3 mb-1" id="" placeholder="" name="Ten">
           </div>
           <div class="form-group">
               <label for="" class="mb-2">Tên Tài Khoản</label>
               <input type="text" class="form-control py-2 px-3 mb-1" id="" placeholder="" name="TaiKhoan">
           </div>
           <div class="form-group">
               <label for="" class="mb-2">Email</label>
               <input type="Email" class="form-control py-2 px-3 mb-1" id="" placeholder="" name="Email">
           </div>
           <div class="form-group">
               <label for="" class="mb-2">Giới tính</label>
               <select id="" name="GioiTinh" class="form-control py-2 px-3 mb-1">
                   <option value="Nam">Nam</option>
                   <option value="Nữ">Nữ</option>
                   <option value="Khác">Khác</option>
               </select>
           </div>
           <div class="form-group">
               <label for="" class="mb-2">Số Điện Thoại</label>
               <input type="text" class="form-control py-2 px-3 mb-1" id="" placeholder="" name="SDT">
           </div>
           <div class="form-group">
               <label for="" class="mb-2">Địa chỉ</label>
               <input type="text" class="form-control py-2 px-3 mb-1" id="" placeholder="" name="DiaChi">
           </div>
           <div class="form-group">
               <label for="" class="mb-2">Mật Khẩu</label>
               <input type="Password" class="form-control py-2 px-3 mb-1" id="" placeholder="" name="MatKhau">
           </div>

           <button type="submit" class="btn btn-primary mt-4">Create</button>
       </form>
   </table>