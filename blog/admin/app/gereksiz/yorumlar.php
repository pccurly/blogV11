<?php require 'inc/ustkisim.php'; ?>
<div id="wrapper">

    <!-- Navigation -->
    <?php
    require 'inc/top_nav.php'; 
    require 'inc/left_nav.php';
    ?>

</nav>

<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">YORUMLAR</h1>
                                  <?php 
                                    $db->sql = "select * from tb_comment";
                                    $yorumlar = $db->select();
                                    if ($yorumlar ==false) {
                                        echo '<p>Yorum Bulunamadı..</p>';
                                    }else{

                                   ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Tüm YORUMLAR
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Yorum</th>
                                            <th>Ad Soyad</th>
                                            <th>Email</th>
                                            <th>Web</th>
                                            <th>Tarih</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no=1; 
                                            foreach ($yorumlar as $key => $value) {
                                         ?>
                                     
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?php echo $value->comment_content; ?></td>
                                            <td><?php echo $value->comment_name; ?></td>
                                            <td><?php echo $value->comment_email; ?></td>
                                            <td><?php echo $value->comment_web; ?></td>
                                            <td><?php echo $value->comment_date; ?></td>
                                            <td><?php echo $value->comment_content_id; ?></td>
                                            <td>
                                            <?php 
                                            if ($value->comment_confirm==0) {
                                                echo '<a href="index.php?url=yorum_onayla&id='.$value->comment_id.'" class="btn btn-success">Onayla</a>';
                                             }elseif ($value->comment_confirm==1) {
                                                 echo '<a href="index.php?url=yorum_onay_iptal&id='.$value->comment_id.'" class="btn btn-danger">Onayı Kaldır</a>';
                                             }
                                              ?> 
                                                
                                                
                                            </td>
                                            
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
             <?php } ?>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<?php require 'inc/altkisim.php' ?>