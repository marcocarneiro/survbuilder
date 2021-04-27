<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Painel</title>

  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?= base_url('assets/css/plugins/dataTables/datatables.min.css')?>" rel="stylesheet">

  <link href="<?=base_url('assets/sb-admin-2.min.css')?>" rel="stylesheet">

  <style>

    .bg-cinza{
      background-color: #479;
      color: #444;
    }

    .adicionar, .remover{
      font-size: 2rem;
      cursor: pointer;
    }
    .adicionar{
      color: #05f;
    }
    .remover{
      color: #900;
    }

    .html5buttons .btn{
      border: 1px solid #ccc;
      margin-right: 40px;
    }
    .paginate_button{
      margin-right: 20px;
    }

    #opc-respostas{
      display: none;
      margin-bottom: 40px;
    }

  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">