<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Acesso a Area Administrativa da Loja</title>
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
                   
                </div>
            </div>
        </div>
        <div id="body-container">
                    <div id="body-content">
                        
                        
            <div class='container'>
                
                <div class="signin-row row">
                    <div class="span4"></div>
                    <div class="span8">
                        <div class="container-signin">
                            <legend>Faça seu Login</legend>
                            <form action='login.php' method='POST' id='loginForm' class='form-signin' autocomplete='off'>
                                <div class="form-inner">
                                    <div class="input-prepend">                                        
                                        <span class="add-on" rel="tooltip" title="Informe seu email" data-placement="top"><i class="icon-envelope"></i></span>
                                        <input type='text' class='span4' id='email' name="email" />
                                    </div>

                                    <div class="input-prepend">                                        
                                        <span class="add-on"><i class="icon-key"></i></span>
                                        <input type='password' class='span4' id='senha' name="senha" />
                                    </div>
                                    <label class="checkbox" for='remember_me'>Mantenha-me conectado
                                        <input type='checkbox' id='lembrar' name="lembrar" />
                                    </label>
                                </div>
                                <footer class="signin-actions">
                                    <input class="btn btn-primary" type='submit' id="submit" value='Acessar'/>
                                </footer>
                            </form>
                        </div>
                    </div>
                    <div class="span3"></div>
                </div>     
            </div>    

            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>

        <footer class="application-footer">
            <div class="container">
                <p>Loja Virtual ETEC</p>
                <div class="disclaimer">
                    <p>Projeto desenvolvido pela turma do 3 Móduto de Desenvolvimento de Sistemas da ETEC de Bebedouro.</p>
                    <p>Todos os direitos Reservados ©2021</p>
                </div>
            </div>
        </footer>
        <script type="text/javascript">
            $(function(){
                document.forms['loginForm'].elements['j_username'].focus();
                $('body').addClass('pattern pattern-sandstone');
                $("[rel=tooltip]").tooltip();
            });
        </script>
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
        <script src="sjs/jquery/virtual-tour.js" type="text/javascript" ></script>
        

	</body>
</html>