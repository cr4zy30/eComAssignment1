function loadCounter(){
    var xhttp = new XMLHttpRequest();
    xhttp.open("GET","counter.txt", false);
    xhttp.send();
    return xhttp.responseText;
}
