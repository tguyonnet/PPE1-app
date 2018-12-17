<?php
include('template/header-sb-admin.php');
include('template/menu-sb-admin.php');

?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $titrePage;?></h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Formations de <?php //echo $_SESSION['name'] ?>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">

                                        <?php
                                        if($formations!=null)
                                        {
                                        ?>
                                        <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Libelle</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach ($formations as $formation)
                                            {
                                                echo '<tr><td>' . $formation->getDate() . '</td>' . '<td>' . $formation->getLibelle() . '</td></tr>';
                                            }
                                        }else{
                                            echo('Inscrivez vous a une formation');
                                        }

                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
<?php
include('template/footer-sb-admin.php');
?>
