<?php
include('template/head.php');
include('template/menu.php');


$url = 'http://api.test/formation';
//  Initiate curl
$ch = curl_init();
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL, $url);
//  Execute
$response = curl_exec($ch);
// Closing
curl_close($ch);
$result = json_decode($response);

?>
<article>
    <header><?php echo $titrePage;?> </header>

        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Liste des Formations
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead><tr><th>#</th><th>Libelle</th><th>Date</th></tr></thead>
                            <tbody>

                            {% for user in users %}
                            {{ loop.index }} - {{ user.username }}
                            {% endfor %}


                            for ($i=0; $i>count($result); $i++){
                                echo'<tr>'.'<td>'.$result->id[$i].'</td>'.'<td>'.$result->formation_libelle[$i].'</td>'.'<td>'.$result->date[$i].'</td>';
                            };
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





</article>
<?php
include('template/footer.php');
?>
