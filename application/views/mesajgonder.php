
<div id="content" class="col-lg-10 col-sm-10">
            <!-- content starts -->
 <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Yazılar</a>
        </li>
    </ul>
</div>

<div class="row">
  <div  class="box col-md-12">
    <div  class="box col-md-12" style="margin-left:150px">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h5><i class="glyphicon glyphicon-edit"></i> Mesaj Gönder</h5>


            </div>
            <div class="box-content">
                  <form role="form" method="post" action="<?=base_url()?>Mesajlar/mesajlasma">
                    <div class="form-group">
                        <h4> <label for="exampleInputEmail1">Gönderilecek Kişi</label></h4>
                        <select name="gonderilen">
                        <?php foreach($user as $rs) { ?>

                          <option  value="<?=$rs->id?>"><?=$rs->adi?></option>
                                <?php } ?>
                        </select>

                    </div>
                    <div class="form-group">
                      <h4><label for="exampleInputEmail1">Başlık</label></h4>
                        <input  type="text" class="form-control" width="60" name="baslik" placeholder="Başlık">
                    </div>


                    <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
                    <textarea name="yazi" id="yazi" rows="10" cols="121">
                    </textarea>
                 <br>
               <script>
                  CKEDITOR.replace('yazi');
                </script>

                 <br>
                    <button type="submit" class="btn btn-success">Mesaj Gönder</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->
</div>
</div><!--/row-->

</div><!--/#content.col-md-0-->
</div><!--/fluid-row-->
<div style="float:left">
<?php

	$this->load->view('_footer');


?>
</div>
