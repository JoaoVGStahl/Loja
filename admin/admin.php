<?php
  session_start();
  if (!isset($_SESSION["usuarioLogado"])){
	 header("Location:index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Area Administrativa da Loja ETEC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>
    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
    <link href="css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />

    <style>
    </style>
</head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                  
                    <a href="dashboard.html" class="brand"><i class="icon-leaf">Loja Virtual ETEC</i></a>
                    <div id="app-nav-top-bar" class="nav-collapse">
                      
                        <ul class="nav pull-right">
                            <li>
                                <a href="sair.php">Sair</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="body-container">
            <div id="body-content">
                
                    <div class="body-nav body-nav-horizontal body-nav-fixed">
                        <div class="container">
                            <ul>
                                <li>
                                    <a href="?pg=Categorias">
                                        <i class="icon-dashboard icon-large"></i> Categorias
                                    </a>
                                </li>
                                <li>
                                    <a href="?pg=SubCategorias">
                                        <i class="icon-calendar icon-large"></i> SubCategorias
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-map-marker icon-large"></i> Produtos
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-tasks icon-large"></i> Ver Pedidos
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icon-cogs icon-large"></i> Usuários
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                
                
      
    <section class="page container">        
           <?php
                if (isset($_GET["pg"])){
                    switch ($_GET["pg"]){
                        case  "Categorias"       : $incluir = 'categorias/index.php' ; break;
                        case  "SubCategorias"    : $incluir = 'subcategorias/index.php' ;break;
                        case  "AlterarCategoria" : $incluir = 'categorias/alterar.php'; break;
                    }
                    include($incluir);
                }else{
                    echo "<h1>Escolha um item acima para começar</h1>";
                }
           ?>
    </section>

    

            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Carregando&hellip;
        </div>

        <footer class="application-footer">
            <div class="container">
                <p>>Loja Virtual ETEC</p>
                <div class="disclaimer">
                    <p>>Projeto desenvolvido pela turma do 3 Móduto de Desenvolvimento de Sistemas da ETEC de Bebedouro.</p>
                    <p>Todos os direitos Reservados ©2021</p>
                </div>
            </div>
        </footer>
        
        <script src="js/bootstrap/bootstrap-transition.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-alert.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-modal.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-dropdown.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-scrollspy.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-tab.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-tooltip.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-popover.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-button.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-collapse.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-carousel.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-typeahead.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-affix.js" type="text/javascript" ></script>
        <script src="js/bootstrap/bootstrap-datepicker.js" type="text/javascript" ></script>
        <script src="js/jquery/jquery-tablesorter.js" type="text/javascript" ></script>
        <script src="js/jquery/jquery-chosen.js" type="text/javascript" ></script>
        <script src="js/jquery/virtual-tour.js" type="text/javascript" ></script>
        <script type="text/javascript">
        $(function() {
            $('#sample-table').tablesorter();
            $('#datepicker').datepicker();
            $(".chosen").chosen();
        });
    </script>

	</body>
</html>