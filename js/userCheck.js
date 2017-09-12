
$("h1").fadeIn();
var trenutni = "";

function crtErr(errMsg, errIco, icoCol) {
    var $element2 = $("<div class='notif'>"
        +"<i class='material-icons' style=' color:" + icoCol + "'>" + errIco +"</i>"
        +"<p>" + errMsg + "</p>"
        +"</div>)");
    $(".notifications-wrapper").prepend($element2);
    $(".notif").animate({opacity:"1"});
    setTimeout(function(){
        $('.notif').fadeOut("slow", function() { $('.notif').remove();});
    }, 3000);
}

$(document).ready(function(){
$("td").click(function () {
    trenutni = this;
    var col_name = this.id;
    var id = $(this).parent().find("td:first").html();
    var firstCol = $("th:first").html();
    var clickValue = $(this).html();

    var $element2 = $("<div id='modalTableInput' style='width: 160px; height: 100px; position: absolute; background-color: white;  z-index: 5;'>"
                        +"<input id='tblInput' type='text' value='"+clickValue+"'/>"
                        +"<p>"
                        +"<button onclick='btnCloseModal()' id='btnCloseModal' style='padding-right: 15px; padding-left: 15px; '  ><i id='ikona' style='left: 5px;' class='material-icons'>close</i></button>"
                        +"<button id='save' onclick='btnSaveModal()' style='padding-right: 15px; padding-left: 15px; float: left;'  ><i id='ikona' style='left: 5px;' class='material-icons'>save</i></button>"
                        +"</p>"
                        +"</div>");
    $(this).after($element2);



});
});


function btnCloseModal() {
    $("#modalTableInput").remove();
    }

function btnSaveModal() {

    var value = $("#tblInput").val();
    var col_name = trenutni.id;
    var id = $(trenutni).parent().find("td:first").html();
    var first_col = $("th:first").html();
    var tbl_name = $("h4").html();


    $.ajax({
        type: 'POST',
        url: 'userCheck.php',
        data: {value:value, colname:col_name, tblname: tbl_name, fircol:first_col, id:id },
        success: function (data) {
            if (data == 1) {
                $(trenutni).html(value);
                $("#modalTableInput").remove();
            }
            else {
                $(trenutni).html("POGREŠKA");
                $(trenutni).css({"color": "red"});
                $("#modalTableInput").remove();
            }
        }
    })
}
$(document).ready(function(){
    $('.delete').click(function () {
        trenutni = this;
        $("#modalTableInput").remove();
        var id = $(trenutni).parent().find("td:first").html();
        var first_col = $("th:first").html();
        var tbl_name = $("h4").html();
        var row = $(trenutni).parent();
        $.ajax({
            type: 'POST',
            url: 'userCheck.php',
            data: {tblname: tbl_name, fircol:first_col, idDelete:id },
            success: function (data) {
                if (data == 1) {

                    row.remove();
                }
                else {
                    $(trenutni).html("POGREŠKA");
                    $(trenutni).css({"color": "red"});
                    $("#modalTableInput").remove();
                }
            }
        })


    })
});

$(document).ready(function(){
    $('#addRow').click(function () {
        $("#modalTableInput").remove();
        var row = $("tbody>tr").html();
        row= "<tr>"+ row + "</tr>";
        $("table tbody").append(row);
        var addRow = $("h4").html();

        $.ajax({
            type: 'POST',
            url: 'userCheck.php',
            data: {addRow: addRow },
            success: function (data) {
                if (data) {
                     $("tbody>tr:last-child").each(
                     function (i, red) {
                     $(red).children().html("unesi");
                     $(red).children().eq(0).html(data);
                     })
                }
                else {
                    $("tbody>tr:last-child").each(
                        function (i, red) {
                            $(red).children().html("POGREŠKA");
                        })
                }
            }
        })


    })
});


//PROVJERE NA KORISNIČKOJ
$(document).ready(function() {
    $('#koris').blur(function(){
        var korname = $('#koris').val();
        $.ajax({
            type: 'POST',
            url: 'userCheck.php',
            data: {koris:korname},
            success: function (data) {
                if (data == 1) {
                    crtErr("Korisničko ime postoji!","close","red");
                    $(this).select();
                    $('#submit').attr("disabled", true);
                    $('#koris').focus();
                }
                else {
                    crtErr("Korisničko ime uredu!","done","green");
                    $('#submit').removeAttr("disabled");
                }
            }

        });
    });

});

$(document).ready(function() {
    $('#email').blur(function(){
        var email = $('#email').val();
        $.ajax({
            type: 'POST',
            url: 'userCheck.php',
            data: {email:email},
            success: function (data) {
                if (data == 1) {
                    crtErr("Email ime postoji!","close","red");
                    $(this).select();
                    $('#submit').attr("disabled", true);
                    $('#email').focus();
                }
                else {
                    crtErr("Email uredu!","done","green");
                    $('#submit').removeAttr("disabled");
                }
            }

        });
    });

});

$(document).ready(function() {
    $('#ime').blur(function(){
        var ime = $('#ime').val();

        if (ime.length<2) {
            crtErr("Ime mora biti duže od 2 znaka!","close","red");
            $(this).select();
            $('#submit').attr("disabled", true);
            $('#ime').focus();
        }
        else {
            crtErr("Ime uredu!","done","green");
            $('#submit').removeAttr("disabled");
        }
    });
});

$(document).ready(function() {
    $('#prezime').blur(function(){
        var prezime = $('#prezime').val();

        if (prezime.length<2) {
            crtErr("Prezime mora biti duže od 2 znaka!","close","red");
            $(this).select();
            $('#submit').attr("disabled", true);
            $('#prezime').focus();
        }
        else {
            crtErr("Prezime uredu!","done","green");
            $('#submit').removeAttr("disabled");
        }
    });
});

$(document).ready(function() {
    $('#lozinka_p').blur(function(){
        var lozinka = $('#lozinka').val();
        var lozinkap = $('#lozinka_p').val();

        if (lozinka!=lozinkap) {
            crtErr("Lozinke nisu iste!","close","red");
            $(this).select();
            $('#submit').attr("disabled", true);
            $('#lozinka_p').focus();
        }
        else {
            crtErr("Lozinke iste!","done","green");
            $('#submit').removeAttr("disabled");
        }
    });
});

$(document).ready(function(){



    $('.block').click(function () {

        var username = $(this).parent().find("td:first").html();
        var ono = $(this).parent().find("td:nth-child(5)");
        var stat = $(this).parent().find("td:nth-child(5)").html();
        $("#modalTableInput").remove();

        $.ajax({
            type: "POST",
            url: "userCheck.php",
            data: {username:username, status:stat},
            success: function () {

                if (stat=="active"){
                    crtErr("Korisnik blokiran!", "block", "red");
                    ono.html("block");
                }
                else {
                    crtErr("Korisnik aktiviran!", "done", "green");
                    ono.html("active");
                }
            }
            
            })


    })
});

//$(document).ready(function(){
    $('#rezerviraj').on("click", function () {
        var username = $("#username").html();
        var service = $("#service").html();
        var date =$("#datum").val();
        var time =$("#vrijeme").val();

        $.ajax({
            type: "POST",
            url: "userCheck.php",
            dataType: 'json',
            data: {rezerviraj:username, service:service, date:date, time:time},
            success: function (data) {
                if (typeof data.error === 'undefined'){
                    crtErr("Zauzet termin!","close","red");
                }
                else {

                    crtErr("Uspiješno rezervirano!","done","green");
                }


            }

        })


    });
//});

$('#catIzbor').on("click", function () {
    var catTitle = $("#koris2").val();
    var desc = $("#opis_proizvoda").val();
    var mod =$("select[name=modIzbor] option:selected").val();

   $.ajax({
        type: "POST",
        url: "userCheck.php",
        data: {catTitle:catTitle, desc:desc, mod:mod},
        success: function (data) {
            if (data){
                crtErr("Uspiješno kreirano!","done","green");

            }
            else {

                crtErr("Greška kod kreiranja!","close","red");

            }
            $("#koris2").val("");
            $("#opis_proizvoda").val("");
            $("select[name=modIzbor] option:selected").val("");

        }

    })


});



$(document).ready(function(){
    $('#catIzborMod').on("click", function () {
        var catTitle = $("#koris2").val();
        var desc = $("#opis_proizvoda").val();
        var duration = $("#vrijeme").val();
        var cat =$("select[name=modIzbor] option:selected").val();
        console.log(catTitle,desc,duration,cat);
        $.ajax({
            type: "POST",
            url: "userCheck.php",
            data: {serTitle:catTitle, desc:desc, cat:cat, duration:duration},
            success: function (data) {
                console.log(data);
                if (data==1){
                    crtErr("Uspiješno kreirano!","done","green");


                }
                else {
                    crtErr("Greška kod kreiranja!","close","red");

                }
                $("#koris2").val("");
                $("#opis_proizvoda").val("");
                $("#vrijeme").val("00:00");
                $("select[name=modIzbor] option:selected").val("");

            }

        })


    });
});


$(document).ready(function(){
    $('#modCoupon').on("click", function () {
        var value = $("#koris2").val();
        var datefrom = $("#datum").val();
        var dateto = $("#vrijeme").val();
        var couponid =$("select[name=modCoupon] option:selected").val();

        $.ajax({
            type: "POST",
            url: "userCheck.php",
            data: {couponid:couponid, value:value, datefrom:datefrom, dateto:dateto},
            success: function (data) {
                console.log(data);
                if (data==1){
                    crtErr("Uspiješno promjenjeno!","done","green");


                }
                else {
                    crtErr("Greška kod promjene!","close","red");

                }
                $("#koris2").val("");
                $("#datum").val("");
                $("#vrijeme").val("");
                $("select[name=modIzbor] option:selected").val("");

            }

        })


    });
});

$(document).ready(function(){
    $('#modCheckCoupon').on("click", function () {
        var value = $("#koris2").val();


        $.ajax({
            type: "POST",
            url: "userCheck.php",
            data: {modCheckCoupon:value},
            success: function (data) {

                if (data){
                    crtErr("Validan kupon!","done","green");


                }
                else {
                    crtErr("Kupon ne postoji!","close","red");

                }
                $("#koris2").val("");


            }

        })


    });
});


$(document).ready(function(){
    $("#points").ready(function () {


        var  brbd="1";


        $.ajax({
            type: "POST",
            url: "userCheck.php",
            data: {brbodova:brbd},
            success: function (data) {
                $("#points").html(data);

            }

        });

    })
});


function share() {
    var username=1;
    $.ajax({
        type: "POST",
        url: "userCheck.php",
        data: {share:username}
    })
}





