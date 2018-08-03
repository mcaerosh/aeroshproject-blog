

<div class="main-panel">
  <div class="content">
    <div class="container-fluid">
      <h4 class="page-title"></h4>
      <div class="row">
        <!-- openlist -->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title"><?php echo $title ?><i class="la la-user"></i></div>
            </div>
            <!-- CARDBODY -->
            <div class="card-body">
              <?php 
//valdiasi input
              echo validation_errors('<div class="alert alert-warning">','</div>');

//erroruploadfile

              if(isset($error)){
                echo '<div class="aler alert-warning">';
                echo $error;
                echo '</div';
              }

//openform
              echo form_open_multipart(base_url('kontributor/profile/edit/'.$user_aktif->id_user));

              ?>  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $user_aktif->username ?>" readonly>
                      </div>
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $user_aktif->nama ?>" required>
                      </div>
                      <div class="form-group">
                        <label>Alamat Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $user_aktif->email ?>">
                      </div>
                      
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                      <img src="<?php echo base_url('assets/upload/images/profile/'.$user_aktif->gambar) ?>" width="275px" height="275px">
                     </div>
                     <div class="form-group">
                      <label>Ganti Foto Profile</label><br>
              <input type="file" name="gambar" class="form-control">

                     </div>
                    </div>
                  </div>
              

                    <input type="submit" name="submit" value="Simpan" class="btn btn-success">
                    
                    

                    <?php echo form_close(); ?>


                  </div>
                  <!-- closelist -->
                </div>
              </div>
            </div>

