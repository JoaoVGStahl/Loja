<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Simple Dashboard</title>
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
                                <a href="login.html">Sair</a>
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
                                    <a href="#">
                                        <i class="icon-dashboard icon-large"></i> Categorias
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
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
        
        <div class="row">
            <!--<div class="span3">
                <div class="box">
                    <div class="box-content">

                    </div>
                </div>
            </div>-->
            
            <div class="span16">
                <div class="row">
                    <div class="span8">
                        

<script type="text/javascript">
    google.load('visualization', '1', {'packages': ['corechart']});
    google.setOnLoadCallback(drawVisualization);
    
    function drawVisualization() {
        visualization_data = new google.visualization.DataTable();
        
        visualization_data.addColumn('string', 'Task');
        
        visualization_data.addColumn('number', 'Hours per Day');
        
        
        visualization_data.addRow(['Work', 11]);
        
        visualization_data.addRow(['Eat', 2]);
        
        visualization_data.addRow(['Commute', 2]);
        
        visualization_data.addRow(['Watch TV', 2]);
        
        visualization_data.addRow(['Sleep', 7]);
        
      
        visualization = new google.visualization.PieChart(document.getElementById('piechart'));

        



        
        
        visualization.draw(visualization_data, {title: 'My Daily Activities', height: 260});

        
    }
</script>

                        <div class="box">
                            <div class="box-header">
                                <i class="icon-bar-chart"></i>
                                <h5>Charts</h5>
                            </div>
                            <div class="box-content">
                                <div id="piechart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="span8">
                        <div class="box pattern pattern-sandstone">
                            <div class="box-header">
                                <i class="icon-table"></i>
                                <h5>
                                    Table
                                </h5>
                            </div>
                            <div class="box-content box-table">
                                <table id="sample-table" class="table table-hover table-bordered tablesorter">
                                    <thead>
                                        <tr>
                                            <th>Version</th>
                                            <th>Browser</th>
                                            <th class="td-actions"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>7.0</td>
                                            <td>Internet
                                            Explorer</td>
                                            <td class="td-actions">
                                                <a href="javascript:;" class="btn btn-small btn-info">
                                                    <i class="btn-icon-only icon-ok"></i>
                                                </a>

                                                <a href="javascript:;" class="btn btn-small btn-danger">
                                                    <i class="btn-icon-only icon-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4.0</td>
                                            <td>Firefox</td>
                                            <td class="td-actions">
                                                <a href="javascript:;" class="btn btn-small btn-info">
                                                    <i class="btn-icon-only icon-ok"></i>
                                                </a>

                                                <a href="javascript:;" class="btn btn-small btn-danger">
                                                    <i class="btn-icon-only icon-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Latest</td>
                                            <td>Safari</td>
                                            <td class="td-actions">
                                                <a href="javascript:;" class="btn btn-small btn-info">
                                                    <i class="btn-icon-only icon-ok"></i>
                                                </a>

                                                <a href="javascript:;" class="btn btn-small btn-danger">
                                                    <i class="btn-icon-only icon-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Latest</td>
                                            <td>Chrome</td>
                                            <td class="td-actions">
                                                <a href="javascript:;" class="btn btn-small btn-info">
                                                    <i class="btn-icon-only icon-ok"></i>
                                                </a>

                                                <a href="javascript:;" class="btn btn-small btn-danger">
                                                    <i class="btn-icon-only icon-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>
                                            Opera</td>
                                            <td class="td-actions">
                                                <a href="javascript:;" class="btn btn-small btn-info">
                                                    <i class="btn-icon-only icon-ok"></i>
                                                </a>

                                                <a href="javascript:;" class="btn btn-small btn-danger">
                                                    <i class="btn-icon-only icon-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="span8">
                        <div class="box">
                            <div class="box-header">
                                <i class="icon-folder-open"></i>
                                <h5>Content</h5>
                            </div>
                            <div class="box-content">
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                                <p>
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum.
                                </p>
                                <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="span8">
                        

<script type="text/javascript">
    google.load('visualization', '1', {'packages': ['corechart']});
    google.setOnLoadCallback(drawVisualization);
    
    function drawVisualization() {
        visualization_data = new google.visualization.DataTable();
        
        visualization_data.addColumn('string', 'Task');
        
        visualization_data.addColumn('number', 'Hours per Day');
        
        
        visualization_data.addRow(['Work', 11]);
        
        visualization_data.addRow(['Eat', 2]);
        
        visualization_data.addRow(['Commute', 2]);
        
        visualization_data.addRow(['Watch TV', 2]);
        
        visualization_data.addRow(['Sleep', 7]);
        
      
        visualization = new google.visualization.ColumnChart(document.getElementById('barchart'));

        



        
        
        visualization.draw(visualization_data, {title: 'My Daily Activities', height: 300});

        
    }
</script>
                        <div class="blockoff-left">
                            <div id="barchart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span16">
                <div class="box">
                    <div class="box-header">
                        <i class="icon-sign-blank"></i>
                        <h5>Sample Box</h5>
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-hide-me">
                            <i class="icon-reorder"></i>
                        </button>
                    </div>
                    <div class="box-hide-me box-content collapse out">
                        <legend class="lead">
                            Box Code
                        </legend>
                        <code style="background: none; border: none;"><span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"box"</span><span class="nt">&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"box-header"</span><span class="nt">&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"icon-sign-blank"</span><span class="nt">&gt;&lt;/i&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;h5&gt;</span>Sample Box<span class="nt">&lt;/h5&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">"btn btn-box-right"</span> <span class="na">data-toggle=</span><span class="s">"collapse"</span> <span class="na">data-target=</span><span class="s">".box-hide-me"</span><span class="nt">&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"icon-reorder"</span><span class="nt">&gt;&lt;/i&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;/button&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;/div&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"box-hide-me box-content collapse out"</span><span class="nt">&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;legend</span> <span class="na">class=</span><span class="s">"lead"</span><span class="nt">&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Box Code
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;/legend&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;/div&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"box-footer"</span><span class="nt">&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;h5&gt;</span>Sample Footer<span class="nt">&lt;/h5&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nt">&lt;/div&gt;</span>
                            <br/><span class="nt">&lt;/div&gt;</span>
                        </code>
                    </div>
                    <div class="box-footer">
                        <h5>Sample Footer</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16">
                <div class="well well-small well-shadow">
                    <legend class="lead">Shadow Well<code>class="well well-small well-shadow"</code></legend>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span16">
                <div class="box">
                    <div class="box-content">
                        <legend class="lead">
                            Box Component
                        </legend>
                        <code style="background: none;border: none;"><span class="nt">&lt;div</span>
                            <span class="na">class=</span><span>"box"</span><span>&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&lt;div</span> <span>class=</span><span>"box-content"</span><span>&gt;</span>
                            <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>&lt;/div&gt;</span>
                            <br/><span>&lt;/div&gt;</span>
                        </code><br/>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

            </div>
        </div>

        <div id="spinner" class="spinner" style="display:none;">
            Loading&hellip;
        </div>

        <footer class="application-footer">
            <div class="container">
                <p>Application Footer</p>
                <div class="disclaimer">
                    <p>This is an example disclaimer. All right reserved.</p>
                    <p>Copyright © keaplogik 2011-2012</p>
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