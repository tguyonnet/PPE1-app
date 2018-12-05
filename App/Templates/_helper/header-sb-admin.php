 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $this->getTitle(); ?></title>
  <!-- Bootstrap core CSS-->
  <link href="www/sb-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="www/sb-admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="www/sb-admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="www/sb-admin/css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <a class="navbar-brand" href="?c=Dashboard"><?php echo \Core\Config::APPLI_NAME; ?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="?c=Dashboard">
            <span class="nav-link-text">Tableau de bord</span>
          </a>
        </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Formation">
                <a class="nav-link" href="?c=Formation">
                    <span class="nav-link-text">Formations</span>
                </a>
            </li>
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Career">
                  <a class="nav-link" href="?c=Career">
                      <span class="nav-link-text">Carrieres</span>
                  </a>
              </li>
              <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Absence">
                  <a class="nav-link" href="?c=Absence">
                      <span class="nav-link-text">Absences</span>
                  </a>
              </li>
          </ul>
    </div>


  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">

     
