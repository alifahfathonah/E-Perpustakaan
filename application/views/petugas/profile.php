 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Diri Petugas
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Detail Petugas</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border ">

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
          Setting Data Diri
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-4">
              <form method="post" enctype="multipart/form-data " id="updateProfileAdmin" class="form-horizontal">
                  <?php if(!empty($petugas->photo)) { ?>
                    <img style="height: 300px;width: 350px;" class="img img-thumbnail" src="<?php echo base_url('assets/poto/' . $petugas->photo) ?>">
                   <?php }else { ?>
                    <img height="350px" width="350px" class="img img-thumbnail " src="<?php echo base_url('assets/poto/001admG001.jpg') ?>">
                   <?php } ?>
                   <input type="hidden" name="id" value="<?php echo $petugas->id ?>">
                   <input type="hidden" name="photo" value="<?php echo $petugas->photo ?>">
                   <input type="hidden" name="id_akun" value="<?php echo $petugas->id_akun ?>">
                   <input type="file" onchange="return cek()" name="file" id="file" style="margin-top: 2px;margin-bottom: 3px;" class="form-control">
                   <div class="progress active mt-2" id="load" style="display:none; ;">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                      <span class="sr-only">20% Complete</span>
                    </div>
                  </div>
                   <button class="btn btn-info btn-sm mb-2" type="submit">Update Profile</button>
              </form>
            </div>

            <div class="col-md-8">
              <form method="post" enctype="multipart/form-data" id="updateadmin" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">ID Akun</label>
                  <div class="col-sm-10">
                     <input type="hidden" name="id" value="<?php echo $petugas->id ?>">
                    <input readonly="" value="<?php echo $petugas->id_akun ?>" type="text" class="form-control" name="id_akun" id="id_akun" placeholder="Input ID Admin">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text"  value="<?php echo $petugas->nama ?>" class="form-control" name="nama" id="nama" placeholder="Input Nama Admin">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">No Telpon</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control"  value="<?php echo $petugas->no_telp ?>" name="no_telp" id="notelp" placeholder="Input No Telpon Akun">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?php echo $petugas->email ?>" name="email" id="email" placeholder="Input Email Admin">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">New Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Input New Password">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Rewrite - New Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Input Re-New Password">
                  </div>
                </div>




                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Simpan Data</button>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              </div>
              <!-- /.box-footer -->
            </form>
            </div>
          </div>
             
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
<script type="text/javascript">
//cek ekstensi file yang boleh di upload
function cek(){
      var file = document.getElementById("file");
      var path = file.value ;
      var exe = /(\.jpeg|\.png|\.jpg)$/i;
        if(!exe.exec(path)){
          swal({
            icon : "error" ,
            dangerMode : [true,"Ok"],
            title : "Perhatian" ,
            text : "Ekstensi File Tidak di Ijinkan"
          });
          file.value = "" ;
        }
    }

  $(function(){
      $("#updateadmin").on('submit',function(e){
        e.preventDefault();
          if(document.getElementById('id_akun').value == ""){
              swal({
                icon : "error" ,
                dangerMode : [true,"Ok"],
                title : "Perhatian" ,
                text : "ID Akun Belum di Input"
              }).then(function(){
                $("#id_akun").focus();
              })
          }else if(document.getElementById('nama').value == ""){
              swal({
                icon : "error" ,
                dangerMode : [true,"Ok"],
                title : "Perhatian" ,
                text : "Nama Admin Belum di Input"
              }).then(function(){
                $("#nama").focus();
              })
          }else if(document.getElementById('notelp').value == ""){
              swal({
                icon : "error" ,
                dangerMode : [true,"Ok"],
                title : "Perhatian" ,
                text : "No Telpon Belum di Input"
              }).then(function(){
                $("#notelp").focus();
              })
          }else if(document.getElementById('email').value == ""){
              swal({
                icon : "error" ,
                dangerMode : [true,"Ok"],
                title : "Perhatian" ,
                text : "Email Belum di Input"
              }).then(function(){
                $("#email").focus();
              })
          }else if(document.getElementById('password').value != document.getElementById('password2').value  ){
              swal({
                icon : "error" ,
                dangerMode : [true,"Ok"],
                title : "Perhatian" ,
                text : "Password Harus Sama"
              }).then(function(){
                $("#password").focus();
              })
          }else {
              $.ajax({
                  url : "<?php echo base_url('petugas/Profile/update') ?>" ,
                  method : "POST" ,
                  data : new FormData(this),
                  processData : false ,
                  cache : false ,
                  contentType : false ,
                  beforeSend : function(){
                    $(".Loading").show();
                  },
                  complete : function(){
                    $(".Loading").hide();
                  },
                  success : function(e){
                      if(e == "Update Password Sukses"){
                        swal({
                          icon : "success" ,
                          title : e 
                        }).then(function(){
                          window.location.href="<?php echo base_url('petugas/Profile/') ?>"
                        })
                      }else if(e == "Update Data Sukses"){
                        swal({
                          icon : "success" ,
                          title : e 
                        }).then(function(){
                          window.location.href="<?php echo base_url('petugas/Profile/') ?>"
                        })
                      }else {
                        swal({
                          icon : "error" ,
                          dangerMode : [true,"Ok"],
                          title : e 
                        })
                      }
                  }
              })
          }
      })

      //update poto profile member
      $("#updateProfileAdmin").on("submit",function(e){
        e.preventDefault();
          if(document.getElementById("file").value == ""){
            swal({
              icon : "error" ,
              dangerMode : [true,"Ok"],
              title : "Perhatian" ,
              text : "Lampiran  Kosong"
            })
          }else {
            $.ajax({
                  url : "<?php echo base_url('petugas/Profile/updateProfile') ?>" ,
                  method : "POST" ,
                  data : new FormData(this),
                  processData : false ,
                  cache : false ,
                  contentType : false ,
                  beforeSend : function(){
                    $("#load").show();
                  },
                  complete : function(){
                     $("#load").hide();
                  },
                  success : function(e){
                     if(e == "Berhasil Update Data"){
                        swal({
                          icon : "success" ,
                          title : e 
                        }).then(function(){
                          window.location.href="<?php echo base_url('petugas/Profile/') ?>"
                        })
                      }else {
                        swal({
                          icon : "error" ,
                          dangerMode : [true,"Ok"],
                          title : e 
                        })
                      }
                  }
            })
          }
      })
  })

</script>
