function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        document.getElementById("frm-cnvs").innerHTML =
        this.responseText;
        }
    };
    xhttp.open("GET", "frms.php", true);
    xhttp.send();
}
function loadDoc2() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        document.getElementById("frm-cnvs").innerHTML =
        this.responseText;
        }
    };
    xhttp.open("GET", "frms2.php", true);
    xhttp.send();
}
