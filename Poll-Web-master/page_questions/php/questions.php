<?php
    $_GET['operation'] = 2;
    require_once('redirect.php');

    $questions = get_questions($_GET['operation']);

    if(isset($_GET['num_tel']) && isset($_GET['texte']) && trim($_GET['num_tel'])!="" && trim($_GET['texte'])!=""){
        $message = array();
        $message['num_tel'] = $_GET['num_tel'];
        $message['texte'] = $_GET['texte'];
        sort_message($message);
        unset($_GET);
        header('Location: '.$_SERVER['PHP_SELF']);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Questions</title>
        <link href="../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    
    <body>
        <?php create_dropdown($questions); ?>
        
        <div class="btn-group" role="group" aria-label="...">
          <button type="button" class="btn btn-default" id="robot_masse">Activer le robot</button>
        </div>
        <br/><br/>
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Envoi d'un message</h3></div>
            <div class="panel-body">
                
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Téléphone</span>
                        <input type="text" class="form-control" placeholder="+33612345678" aria-describedby="basic-addon1" name="num_tel" id="num_tel" value="">
                    </div>
                    <br/>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Texte SMS</span>
                        <input type="text" class="form-control" placeholder="1A" aria-describedby="basic-addon1" name="texte" id="texte" value="">
                    </div>
                    <br/>
                    <div class="btn-group" role="group" aria-label="...">
                      <button type="button" class="btn btn-default" id="robot_unitaire">Envoyer</button>
                    </div>
                
            </div>
        </div>
        
        
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Résultats</h3></div>
            <div class="panel-body" id="ajax_panel">
                
            </div>
        </div>
    
        <script src="../../bootstrap/dist/js/jquery.min.js"></script>
        <script src="../../bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../js/questions.js"></script>
    </body>
</html>