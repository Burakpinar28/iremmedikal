<?php require_once 'header.php'; 
require_once 'sidebar.php'; 












?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <section class="content">
    <div class="container-fluid">

      <div class="row">




        <div class="card card-primary col-md-12">
          <div class="card-header">
            <h3 class="card-title">Sliderler </h3> </div> <?php

            if (@$_GET['yuklenme']=="basarili") {?>
              <h6 style="color: green;">Yükleme işlemi başarılı</h6>
            <?php }

            elseif (@$_GET['yuklenme']=="basarisiz") {?>
              <h6 style="color: red;">Yükleme işlemi başarısız</h6><?php }
              elseif (@$_GET['yuklenme']=="kullanicivar") {?>
                <h6 style="color: red;">Bu kullanıcı kayıtlı</h6>

              <?php   }      ?>

              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">


                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider resim</label>
                    <input  name="sliderresim" type="file" class="form-control"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider başlık</label>
                    <input  name="sliderbaslik" type="text" class="form-control"  placeholder="Lütfen kullanıcı adı giriniz">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slider açıklama</label>
                    <input   name="slideraciklama" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slider sıra</label>
                    <input   name="slidersira" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slider link</label>
                    <input   name="sliderlink" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Slider button adı</label>
                    <input   name="sliderbutton" type="text" class="form-control"  placeholder="Lütfen şifrenizi giriniz">
                  </div>

                    <div class="form-group">
                      <label>Slider durum</label>
                      <select name="sliderdurum" class="form-control select2" style="width: 100%;">
                        <option value="1" selected="selected">Aktif</option>
                        <option value="0" >Pasif</option>
                      </select>
                    </div>


                    <div class="form-group">
                      <label>Slider banner</label>
                      <select name="sliderbanner" class="form-control select2" style="width: 100%;">
                        <option value="1" selected="selected">Slider yap</option>
                        <option value="0" >Banner yap</option>
                      </select>
                    </div>

                    <div class="card-footer">
                      <button name="sliderkaydet" type="submit" class="btn btn-primary">Gönder</button>
                    </div>
                  </form>
                </div>

                <!-- right col -->
              </div>
              <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php require_once 'footer.php'; ?> 