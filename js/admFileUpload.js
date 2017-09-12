/**
 * Created by ljesc on 30-Jun-17.
 */
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
$("h1").fadeIn();

$('form').on('submit', uploadFiles);

var files = [];

$('input[type=file]').on('change', prepareUpload);

function prepareUpload(event)
{
    var haha = event.target.files[0];
    files.push(haha);
}

// Catch the form submit and upload the files
function uploadFiles(event)
{
    console.log("upload");
    event.stopPropagation(); // Stop stuff happening
    event.preventDefault(); // Totally stop stuff happening

    console.log(files);
    crtErr("Upload započet!","backup","yellow");
    var data = new FormData();
    $.each(files, function(key, value)
    {
        console.log(value);
        data.append(key, value);
        console.log("ajax");
    });

    console.log(data);
    $.ajax({
        url: 'admFileUpload.php?files',
        type: 'POST',
        data: data,
        cache: true,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data, textStatus, jqXHR)
        {
            if(typeof data.error === 'undefined')
            {
                console.log(data);
                submitForm(event, data);

            }
            else
            {
                console.log(data);
                crtErr("Neuspiješan upload!1","backup","red");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            console.log(data);

            crtErr(textStatus+'---'+errorThrown,"backup","red");
        }
    });
}




function submitForm(event, data)
{
    // Create a jQuery object from the form
    $form = $(event.target);

    // Serialize the form data
    var formData = $form.serialize();


    $.each(data.files, function(key, value)
    {
        formData = formData + '&filenames[]=' + value;
    });

    console.log(formData);
    $.ajax({
        url: 'admFileUpload.php',
        type: 'POST',
        data: formData,
        cache: false,
        dataType: 'json',
        success: function(data, textStatus, jqXHR)
        {
            if(typeof data.error === 'undefined')
            {
                // Success so call function to process the form
                crtErr("Uspiješno kreiran kupon!","backup", "green")
            }
            else
            {
                crtErr("Greška kod zapisa u bazu!","warning","red");
            }
        },
        error: function(jqXHR, textStatus, errorThrown)
        {
            crtErr("Greška kod zapisa u bazu!","warning","red");
        }

    });
}