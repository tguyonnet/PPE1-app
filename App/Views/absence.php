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
                    Absence de <?php echo $absences[0]->getEmployeeId() ?>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Date de début</th>
                                <th>Date de fin</th>
                                <th>Motif</th>
                                <th>Type</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($absences as $absence)
                            {
                                echo '<tr><td>' . $absence->getStartDate() . '</td>' . '<td>' . $absence->getEndDate() . '</td>' . '<td>' . $absence->getAbsencePattern() . '<td>' . $absence->getType() . '</td></tr>';
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
        <!-- /.col-lg-6 -->
<!--        <div class="col-lg-6">-->
<!--            <div class="panel panel-default">-->
<!--                <div class="panel-heading">-->
<!--                    Basic Table-->
<!--                </div>-->
<!--                <div class="panel-body">-->
<!--                    <div class="table-responsive">-->
<!--                        <table class="table">-->
<!--                            <thead>-->
<!--                            <tr>-->
<!--                                <th>#</th>-->
<!--                                <th>First Name</th>-->
<!--                                <th>Last Name</th>-->
<!--                                <th>Username</th>-->
<!--                            </tr>-->
<!--                            </thead>-->
<!--                            <tbody>-->
<!--                            <tr>-->
<!--                                <td>1</td>-->
<!--                                <td>Mark</td>-->
<!--                                <td>Otto</td>-->
<!--                                <td>@mdo</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>2</td>-->
<!--                                <td>Jacob</td>-->
<!--                                <td>Thornton</td>-->
<!--                                <td>@fat</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>3</td>-->
<!--                                <td>Larry</td>-->
<!--                                <td>the Bird</td>-->
<!--                                <td>@twitter</td>-->
<!--                            </tr>-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- /.col-lg-6 -->
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



<!--object(stdClass)#4 (1) { ["data"]=> object(stdClass)#3 (1) -->
<!--{ ["1"]=> object(stdClass)#2 (6) -->

<!--{ ["id"]=> string(1) "1" ["start_date"]=> string(19) "1999-02-23 16:40:04" ["end_date"]=> string(19) "2000-05-09 21:13:36" ["absence_pattern"]=> string(28) "Mon réveil n’a pas sonné" ["type"]=> string(8) "furlough" ["employee_id"]=> string(1) "1" } } } -->
