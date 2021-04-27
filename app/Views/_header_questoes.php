<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src='https://www.google.com/recaptcha/api.js'></script>    
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    

    <style>
      body{
        padding-top: 70px;
      }
      .bg-grad {
        background: rgb(166,72,151);
        background: linear-gradient(25deg, rgba(166,72,151,1) 0%, rgba(176,240,213,1) 60%, rgba(242,251,247,1) 89%);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center bottom;
      }
      .bg-white-shadow{
        background: #fff;
        box-shadow: 0 0 6px #555;
      }
      .bg-white-op{
        background: rgba(255,255,255,0.9);
        box-shadow: 0 0 6px #555;
      }
      .bg-white-op-80{
        background: rgba(255,255,255,0.8);
      }
      .logo{
        display:block;
        margin: 0 auto;
        margin-top: 20px;
      }
      .btn-avancar, .btn-retornar{
        display: inline-block;
        margin-top: 20px;
        margin-left: 20px;
        margin-right: 20px;
      }
      .btn-retornar{
        float: left;
      }
      .btn-avancar{
        float: right;
      }
      .secao .card-title{
      }
      .opc-respostas{
      }
      .field-revela-campo{
        display: none;
      }
      .bloco{
        position: relative;
        display: block !important;
        margin-bottom: 20px !important;
        white-space: normal !important;
        text-indent: 0 !important;
      }      

      
      .etapas{
        position: relative;
        display: inline-block;
        width: 100px;
        height: 26px;
        top: 8px;
        border: 1px solid #ccc;
      }
      .etapas .txt-barra{
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 110;
        width: 100%;
        text-align: center;
        line-height: 26px;
        font-size: 12px;
      }
      .etapas .moldura{
        overflow: hidden;
        height: 100%;
      }
      .etapas .moldura .barra{
        width: 100%;
        height: 100%;
        background-color: #9df;
      }

      .oculto{
        display: none;
      }
      .link-exibe{
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
      }

      .bloco-inline{
        display: inline-block!important;
      }

      #genero-relaciona{
        margin: 0 15px;
      }

      
      /* Checkbox & radios */
      .checkbox .cr,
      .radio .cr {
          position: relative;
          float: left;
          display: inline-block;
          border: 1px solid #428bca;
          background-color: #fff;
          width: 24px;
          height: 24px;
          margin-right: .5em;
      }
      .radio .cr {
          border-radius: 50%;
      }
      .checkbox .cr .cr-icon,
      .radio .cr .cr-icon {
          position: absolute;
          font-size: 16px;
          line-height: 0;
          top: 50%;
          left: 50%;
          margin-left: -8px;
          margin-top: -1px;
      }
      .checkbox label, .radio label{
        margin-top: 20px;
      }
      .checkbox label input[type="checkbox"],
      .radio label input[type="radio"] {
          display: none;
      }
      .checkbox label input[type="checkbox"] + .cr > .cr-icon,
      .radio label input[type="radio"] + .cr > .cr-icon {
          transform: scale(5) rotateZ(-40deg);
          opacity: 0;
          transition: all .2s ease-in-out;
      }
      .checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
      .radio label input[type="radio"]:checked + .cr > .cr-icon {
          transform: scale(1) rotateZ(0deg);
          opacity: 1;
          color: #428bca;
      }
      .radio label input[type="radio"]:checked + .cr > .cr-icon {
        padding-top: 1px;
      }
      .checkbox label input[type="checkbox"]:disabled + .cr,
      .radio label input[type="radio"]:disabled + .cr {
          opacity: .5;
      }
      .checkbox label, .radio label {
          display: block;
          min-height: 50px;
          margin-bottom: 20px;
      }
      .checkbox label:last-child, .radio label:last-child {
          margin-bottom: 0;
      }
      .texto {
          display: block;
          float: left;
          width: 80%;
      }

      .txt-entrada{
        color: #fff;
        text-shadow: 2px 2px 3px #777;
      }
      .tela{
          display: none;
          position: relative;
      }
      .ativa{
        display: block;
      }
      .anima-fade-right{
        -webkit-animation: fade-in-right 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
	      animation: fade-in-right 0.6s cubic-bezier(0.390, 0.575, 0.565, 1.000) both;
      }
      @-webkit-keyframes fade-in-right {
        0% {
          -webkit-transform: translateX(200px);
                  transform: translateX(200px);
          opacity: 0;
        }
        100% {
          -webkit-transform: translateX(0);
                  transform: translateX(0);
          opacity: 1;
        }
      }
      @keyframes fade-in-right {
        0% {
          -webkit-transform: translateX(200px);
                  transform: translateX(200px);
          opacity: 0;
        }
        100% {
          -webkit-transform: translateX(0);
                  transform: translateX(0);
          opacity: 1;
        }
      }

      .facebook-share-button, .twitter-share-button{
        font-size: 40px;
        margin: 0 10px;
      }

      .img_qrcode{
        width: 30%;
      }

      .pop-up{
        display:none;
        position: absolute;
        left: 50%;
        top: 10%;
        width: 600px;
        padding: 20px;
        margin-left: -300px;
        background-color: #f90;
        border: 8px solid #fff;
        z-index: 2000;
        box-shadow: 0 0 5px #555;
      }
      .pop-up .fechar{
        position: absolute;
        right: -40px;
        top: 0;
        cursor: pointer;
      }
      .pop-up div p{
        font-size: 1.2rem;
      }
      .anima-pop-up {
        -webkit-animation: bounce-in-top 0.9s both;
                animation: bounce-in-top 0.9s both;
      }
      @-webkit-keyframes bounce-in-top {
      0% {
        -webkit-transform: translateY(-500px);
                transform: translateY(-500px);
        -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
        opacity: 0;
      }
      38% {
        -webkit-transform: translateY(0);
                transform: translateY(0);
        -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
        opacity: 1;
      }
      55% {
        -webkit-transform: translateY(-65px);
                transform: translateY(-65px);
        -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
      }
      72% {
        -webkit-transform: translateY(0);
                transform: translateY(0);
        -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
      }
      81% {
        -webkit-transform: translateY(-28px);
                transform: translateY(-28px);
        -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
      }
      90% {
        -webkit-transform: translateY(0);
                transform: translateY(0);
        -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
      }
      95% {
        -webkit-transform: translateY(-8px);
                transform: translateY(-8px);
        -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
      }
      100% {
        -webkit-transform: translateY(0);
                transform: translateY(0);
        -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
      }
    }
    @keyframes bounce-in-top {
      0% {
        -webkit-transform: translateY(-500px);
                transform: translateY(-500px);
        -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
        opacity: 0;
      }
      38% {
        -webkit-transform: translateY(0);
                transform: translateY(0);
        -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
        opacity: 1;
      }
      55% {
        -webkit-transform: translateY(-65px);
                transform: translateY(-65px);
        -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
      }
      72% {
        -webkit-transform: translateY(0);
                transform: translateY(0);
        -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
      }
      81% {
        -webkit-transform: translateY(-28px);
                transform: translateY(-28px);
        -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
      }
      90% {
        -webkit-transform: translateY(0);
                transform: translateY(0);
        -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
      }
      95% {
        -webkit-transform: translateY(-8px);
                transform: translateY(-8px);
        -webkit-animation-timing-function: ease-in;
                animation-timing-function: ease-in;
      }
      100% {
        -webkit-transform: translateY(0);
                transform: translateY(0);
        -webkit-animation-timing-function: ease-out;
                animation-timing-function: ease-out;
      }
    }

    #bio_ep_close {
        position: absolute;
        left: 100%;
        width: 36px;
        height: 36px;
        color: #fff;
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        border-radius: 50%;
        line-height: 36px;
        background-color: #000;
        cursor: pointer;
    }


      @media (max-width: 768px) {
        body{
          padding-top: 84px;
        }
        .pop-up{
          left: 5%;
          top: 20%;
          width: 90%;
        }
        .img_qrcode{
          width: 70%;
        }
        .bg-grad {
          background: rgba(176,240,213,1);
        }
      }
    
    </style>
    
    <title>Tá Ligado? Prevenção de HIV entre jovens</title>
  </head>
    <?php if(!isset($oculta_header)): ?>
    <body class="bg-grad mb-5">
      <nav class="navbar fixed-top bg-white-shadow">
        <div id="cabecalho" class="col-md-8 offset-md-2">
          <img src="<?=base_url('img/logo-cepedoc-horizontal.png')?>" width="140">
          <div class="etapas">
            <span class="txt-barra"></span>
            <div class="moldura">
              <div class="barra"></div>
            </div>
          </div>
        </div>        
      </nav>

    <?php else: ?>
    
    <body class="bg-grad">
      <div class="text-center">
        <img src="<?=base_url('img/logo-cepedoc-horizontal.png')?>" width="140">  
      </div>
    <?php endif; ?>

      <div class="container col-md-8 offset-md-2">
        