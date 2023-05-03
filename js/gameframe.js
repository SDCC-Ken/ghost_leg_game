var addline = function (context, area, y) {
    canvas[area].push(y);
    context.beginPath();
    context.moveTo(0, y);
    context.lineTo(300, y);
    context.stroke();
    context.beginPath();
    $.ajax(
            {
                method: "POST",
                url: "Ajax/addline.php?ID=" + id,
                data: {
                    area: area,
                    y: y,
                },
                datatype: "json",
                success: function (jsonresult) {
                    var result = JSON.parse(jsonresult);
                    if (!result.success) {
                        $('#gameborad').waitMe({effect: 'bounce', text: '', bg: '#FFF', color: '#000', sizeW: '', sizeH: '', source: ''});
                        $("#errortext").kenJqueryBootstrapAlert({type: "danger", close: true, "message": "Server Error! Please reload Page"});
                    }
                },
                fail: function (error) {
                    $('#gameborad').waitMe({effect: 'bounce', text: '', bg: '#FFF', color: '#000', sizeW: '', sizeH: '', source: ''});
                    $("#errortext").kenJqueryBootstrapAlert({type: "danger", close: true, "message": "Server Error! Please reload Page"});
                },
            }
    );
}
function checkOK(y, prev, area, next) {
    var ok = false;
    if (prev.length > 0) {
        ok = (canvas[prev.attr('id')].indexOf(y) === -1);
    }
    ok = (canvas[area.attr('id')].indexOf(y) === -1);
    if (next.length > 0) {
        ok = (canvas[next.attr('id')].indexOf(y) === -1);
    }
    return ok;
}
$(document).ready(function () {
    for (var i = 0; i < game.line.length; i++) {
        canvas[game.line[i].area].push(Number(game.line[i].y));
    }
    $('canvas').on({
        mousedown: function (e) {
            console.log(canvas);
            var area = $(this);
            var y = e.pageY - this.offsetTop;
            if (checkOK(y, area.prev("canvas"), area, area.next("canvas"))) {
                addline(area[0].getContext("2d"), area.attr('id'), y);
            }
        }
    });
});