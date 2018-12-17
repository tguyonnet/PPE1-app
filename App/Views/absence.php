<?php
include('template/head.php');
include('template/menu.php');

echo'<article>';
echo '<header>' . $titrePage . '</header>';
echo'</article>';

$result =  \Models\Absence::getAbsenceEmployee_id($_SESSION['id']);

echo'<thead><tr><th>#</th><th>Libelle</th><th>Date</th></tr></thead>';
for ($i=0; $i>count($result); $i++) {
    echo '<tr>' . '<td>' . $result->id[$i] . '</td>' . '<td>' . $result->formation_libelle[$i] . '</td>' . '<td>' . $result->date[$i] . '</td>';
}



include('template/footer.php');
?>
