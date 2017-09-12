/**
 * Created by ljesc on 27-Jun-17.
 */


var graphCanvas = document.getElementById('x');
if (graphCanvas && graphCanvas.getContext) {
    var context = graphCanvas.getContext('2d');
    $.ajax({
        type: 'POST',
        url: 'jsChart.php',
        success: function (data1) {

            var myLine = data1;
            var result =JSON.parse(myLine);

            JSON.stringify(result);
            var values = result[0].split(",");
            var name = values[1];
            console.log(name);
            console.log(values);

            drawBarChart(context, result, 40, 90, (graphCanvas.height - 20), 10);

        }
    });


}
function drawBarChart(context, data, startX, barWidth, chartHeight, markDataIncrementsIn) {
    context.lineWidth = "1.0";
    var startY = 380;
    drawLine(context, startX, startY, startX, 200);
    drawLine(context, startX, startY, 650, startY);
    // context.lineWidth = "0.0";
    var maxValue = 0;

    for (var i=0; i < data.length; i++) {
        var values = data[i].split(",");
        var name = values[0];
        var height = parseInt(values[1]);
        if (parseInt(height) > parseInt(maxValue)) maxValue = height;

        context.fillStyle = "#b90000";
        drawRectangle(context,startX + (i * barWidth)+i ,(chartHeight - height ),barWidth-30,height,true);

        context.textAlign = "left";
        context.fillStyle = "#000";
        context.fillText(name, startX + (i * barWidth ) + i, chartHeight + 10, 200);
    }
    console.log((maxValue));
    console.log((markDataIncrementsIn));
    var numMarkers = Math.ceil(maxValue / markDataIncrementsIn);
    context.textAlign = "right";
    context.fillStyle = "#000";
    var markerValue = 0;
    for (var i=0; i < numMarkers; i++) {
        context.fillText(markerValue, (startX - 5), (chartHeight - markerValue), 50);
        markerValue += markDataIncrementsIn+10;
    }
}

function drawLine(contextO, startx, starty, endx, endy) {
    contextO.beginPath();
    contextO.moveTo(startx, starty);
    contextO.lineTo(endx, endy);
    contextO.closePath();
    contextO.stroke();
}

function drawRectangle(contextO, x, y, w, h, fill) {
    contextO.beginPath();
    contextO.rect(x, y, w, h);
    contextO.closePath();
    contextO.stroke();
    if (fill) contextO.fill();
}