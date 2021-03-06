<?php
    session_start();
    require('../php/fonctions.php');
    header('content-type: text/css');
?>



/* TOUTE LA PAGE */

html, body
{
    height : 100%;
    <?php  
        if(isset($_SESSION['arriere-plan']['radio-a'])){
            if($_SESSION['arriere-plan']['radio-a']=="image" and isset($_SESSION['arriere-plan']['file']))
                echo 'background-image:url(../'.$_SESSION['arriere-plan']['file'].');'; 
        }
        if(isset($_SESSION['arriere-plan']['radio-a']) and isset($_SESSION['arriere-plan']['color']) ){         
            if($_SESSION['arriere-plan']['radio-a']=="color"){
                echo 'background:'.$_SESSION['arriere-plan']['color'].';'; 
            }
        }
    ?>
}

#conteneur
{
    width : 100%;
    min-height : 100%;
    position : relative;
    margin-left : auto;
    margin-right : auto;
    <?php
        if(isset($_SESSION['arriere-plan']['radio-a'])){
            if($_SESSION['arriere-plan']['radio-a']=="image" and isset($_SESSION['arriere-plan']['file']))
                echo 'background-image:url(../'.$_SESSION['arriere-plan']['file'].');'; 
        }
        if(isset($_SESSION['arriere-plan']['radio-a']) and isset($_SESSION['arriere-plan']['color']) ){         
            if($_SESSION['arriere-plan']['radio-a']=="color"){
                echo 'background:'.$_SESSION['arriere-plan']['color'].';'; 
            }
        }
    ?>
}


/* HAUT DE PAGE */

header.public
{
    width : 97%;
    margin-top : 1%;
    margin-left : auto;
    margin-right : auto;
    
}

#question
{
    background : white;
    padding : .3em 79% .3em .3em;
    border : solid black 1px;
    border-radius : 5px;
    float : left;
    <?php text_format_css('question','form_question');?>
}

#nbmsg
{
<?php
    if(isset($_SESSION['nbmess']['checkbox']) and trim($_SESSION['nbmess']['checkbox'])!="")
    {
        text_format_css('nbmess','form_nbmess');
    }else{
        echo "display:none;";
    }
?>
    padding : .5em;
    padding-bottom : .3em;
    border : solid black 1px;
    border-radius : 5px;
    float : right;
}

#nbmsg #nbrecus
{
    text-align : center;
    margin-bottom : 0;
    <?php text_format_css('nbmess','form_nbmess');?>
}



/* BLOC PRINCIPAL */

#section_bar
{
    margin-top : 20em;
    margin-left : 2em;
    display : block;
    width : 80%;
    clear : both;
}

#ajax_bar
{
    margin-bottom : 4em;
}
#ajax_bar >*{
    <?php text_format_css('reponse','form_reponse');?>
}
#ajax_bar:last-child
{
    margin-bottom : 8em;
}

.progress-bar.progress-bar-striped{
    <?php
        if(isset($_SESSION['barre-progressive']['color']))
            echo 'background-color:'.$_SESSION['barre-progressive']['color'].';';
    ?>
}
.progress-bar.progress-bar-warning.progress-bar-striped.active{
    <?php
        if(isset($_SESSION['barre-progressive']['offline-color']))
            echo 'background-color:'.$_SESSION['barre-progressive']['offline-color'].';';
    ?>
}

/* BAS DE PAGE */

footer
{
    position : relative;
    left : 2em;
}

footer p{
        <?php text_format_css('paragraphe','form_paragraphe');?>
}