<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SPD4517 Individual Assignment (Web 2.0)</title>
        <meta name="description" content="An assignment developing a Ghost Leg game using Web 2.0 technologies">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- jQuery -->
        <script src="bower_components/jquery/dist/jquery.js" type="text/javascript"></script>

        <!-- Bootstrap -->
        <link href="bower_components/bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <link href="bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <style>body {padding-top: 50px;padding-bottom: 20px;}</style>

        <link href="bower_components/waitMe/waitMe.css" rel="stylesheet" type="text/css"/>
        <script src="bower_components/waitMe/waitMe.js" type="text/javascript"></script>

        <script src="bower_components/Ken_JQuery_Bootstrp_Alert/dist/js/ken-jquery-bootstrap-alert.js" type="text/javascript"></script>

        <link rel="stylesheet" href="css/main.css" />
        <script src="js/main.js" type="text/javascript"></script>
        <script src="js/creategame.js" type="text/javascript"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">SPD4517 Individual Assignment 1</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="about.html">About the Game</a></li>
                        <li><a href="walkthrough.html">Game Walkthrough</a></li>
                        <li><a href="https://dl.dropboxusercontent.com/u/79003042/index.html" target="new">About the Game Creator</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">
                                <span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-header">language</li>
                                <li class="text-center"><a href="#" onclick="window.lang.change('tc');
                                        return false;"><span lang="en">Traditional Chinese</span></a></li>
                                <li class="text-center"><a href="#" onclick="window.lang.change('en');
                                        return false;"><span lang="en">English</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="container-fluid">
            <form id="createform">

                <div id="errortext" class="form-group">

                </div>
                <div id="NameField" class="form-group has-feedback inner">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" required="required" />
                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                    <span class="sr-only">(error)</span>
                </div>
                <div class="form-group has-feedback">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" id="email" name="email" />
                    <span class="help-block">We will send you email of the result.</span>
                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                    <span class="sr-only">(error)</span>
                </div>
                <div class="form-group has-feedback">
                    <label for="gameid">Game ID</label>
                    <input type="text" class="form-control" id="gameid" name="gameid" maxlength="5" required="required" />
                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                    <span class="sr-only">(error)</span>
                </div>
                <div class="form-group has-feedback">
                    <label for="player">No of player</label>
                    <input type="number" class="form-control" id="player" name="player" min="1" required="required" />
                    <span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>
                    <span class="sr-only">(error)</span>
                </div>
                <div class="form-group">
                    <label for="goal">Goals</label>
                    <div id="goal">

                    </div>
                    <span class="help-block">When you type the no of player, the number of goal input would display.</span>
                </div>
                <button id="createButton" type="submit" class="btn btn-default" name="submit">Create</button>
            </form>
        </main>

        <footer class="navbar-fixed-bottom">
            <p>&copy; Chan Kwan Wing 14011142S</p>
        </footer>  

        <div id="ShareDialog" class="modal fade" tabindex="-1" role="dialog">
            <div id="ShareDialogFace" class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Share Game</h4>
                    </div>
                    <div class="modal-body">
                        <iframe id="share" src="" style="width:100%;height: 700px;"></iframe>
                    </div>
                    <div class="modal-footer">
                        <a href="index.html" role="button" class="btn btn-primary expand-right ladda">Leave Share Dialog</a>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


    </body>
</html>