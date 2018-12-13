 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <title><?php echo $titreOnglet; ?></title>

  <!-- Bootstrap core CSS-->
  <link href="/www/sb-admin2/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="/www/sb-admin2/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="/www/sb-admin2/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="/www/sb-admin2//css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">


  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="main-page">
      <a class="navbar-brand" href="index.php"><?php echo Config\Config::APPLI_NAME;echo " - "; echo \Config\Config::APPLI_VERSION;?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

        <li class="nav-item" data-toggle="tooltip" title="Dashboard">
          <a class="nav-link" href="?c=Accueil">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Accueil</span>
          </a>
        </li>
          <li class="nav-item" data-toggle="tooltip"  title="Dashboard">
          <a class="nav-link" href="?c=Formation">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Formation</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip"  title="Dashboard">
          <a class="nav-link" href="?c=Carriere">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Carriere</span>
          </a>
        </li>
          <li class="nav-item" data-toggle="tooltip"  title="Dashboard">
          <a class="nav-link" href="?c=Absence">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Absence</span>
          </a>
        </li>

      </ul>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>

      </ul>
    </div>





  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
