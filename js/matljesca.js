
var predaja1=false;

var element=document.getElementById("naziv_proizvoda");
var element2=document.getElementById("opis_proizvoda");
var element3=document.getElementById("datum_proizvodnje");
var element4=document.getElementById("vrijeme");
var element5=document.getElementById("kolicina");
var element6=document.getElementById("tezina");
var element7=document.getElementById("kategorija3");
var element8=document.getElementById("kategorija2");
var element9=document.getElementById("kategorija");





function naziv_prozivoda() {
    var re = /([A-Z])\w{4,}/g;
    var ok = re.test(element.value);
    if (!ok)
    {
        document.getElementById("error0").style.display="block";
        predaja1=false;
        return false;
    }
    else {
        document.getElementById("error0").style.display="none";
        predaja1=true;
        return true;
    }
}

function datumProvjera() {

    var datre= /\d{2}.\d{2}.\d{4}\./g;
    var datreok=datre.test(element3.value);

    var datum = element3.value.split(".");
    datum.reverse();
    var dat = Date.parse(datum);
    var datn = Date.now();

    var datmanok = dat <= datn;

    if(datreok&&datmanok){
        document.getElementById("error2").style.display="none";
        predaja1=true;
    }
    else {
        document.getElementById("error2").style.display="block";
        predaja1=false;
    }

}

function recenicaProvjera() {

    var recre=/([A-Z]+[^.!?]*[.!?]\s*){3,}/g;
    var recreok=recre.test(element2.value);

    if(recreok){
        document.getElementById("error1").style.display="none";
        predaja1=true;
    }
    else {
        document.getElementById("error1").style.display="block";
        predaja1=false;
    }

}

function vrijemeProvjera() {
    if(element4.value===""){
        predaja1=false;
        document.getElementById("error3").style.display="block";
    }
    else {
        document.getElementById("error3").style.display="none";
        predaja1=true;
    }
}

function kolicinaProvjera() {
    if(element5.value<=0||element5.value===""){
        document.getElementById("error4").style.display="block";
        predaja1=false;
    }
    else {
        document.getElementById("error4").style.display="none";
        predaja1=true;
    }

}

function tezinaProvjera() {
    if(element6.value==="0"){
        predaja1=false;
        document.getElementById("error5").style.display="block";
    }
    else {
        document.getElementById("error5").style.display="none";
        predaja1=true;
    }
}

function cekirajboks() {
    var prva = element7.checked;
    var druga = element8.checked;
    var treca = element9.checked;

    if(prva||druga||treca){
        predaja1=true;
        document.getElementById("error6").style.display="none";
    }
    else{
        predaja1=false;
        document.getElementById("error6").style.display="block";
    }
}

function specialChar() {
    var resc = /[(){}'!#“\/]/g;
    var ok_sc1 = resc.test(element.value);
    var ok_sc2 = resc.test(element2.value);
    var ok_sc3 = resc.test(element4.value);
    var ok_sc4 = resc.test(element5.value);
    if (ok_sc1||ok_sc2||ok_sc3||ok_sc4)
    {
        document.getElementById("error0").style.display="block";
        return false;
    }
    else {
        document.getElementById("error0").style.display="none";
        return true;
    }
}

function predaja() {
    naziv_prozivoda();
    datumProvjera();
    recenicaProvjera();
    cekirajboks();
    vrijemeProvjera();
    kolicinaProvjera();
    tezinaProvjera();
    checkCookie();
    specialChar();
    return predaja1;
}


function setCookie(cname,cvalue,exdays) {
    cname="username";
    cvalue="istek";
    exdays=5;
    var d = new Date();
    d.setTime(d.getTime() + (exdays*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user=getCookie("username");
    if (user !== "") {
        document.getElementById("cookie").style.display="none";
    }
    else {
        document.getElementById("cookie").style.display="block";
        predaja1=false;
    }
}






