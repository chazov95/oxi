function addZone(id) {
    let premisesType = $('input[name=premisesType]:checked');
    let newRow = $('<tr><th onclick="addRoom($(this))">' + premisesType.val() + '</th>' +
        '<input type="hidden" name="level' + id + '[]" value="' + premisesType.val() + '"/>' +
        '</tr>');

    premisesType.parent().children('table').append(newRow);
}

function createLevel(id) {
    $('#buildLevels').append($('<div class="accordion-item">\n' +
        '        <h2 class="accordion-header">\n' +
        '            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" ' +
        '               data-bs-target="#level' + id + '" aria-expanded="false" aria-controls="flush-collapseOne">\n' +
        '                Этаж  ' + id + ' \n' +
        '            </button>\n' +
        '        </h2>\n' +
        '        <div id="level' + id + '" class="accordion-collapse collapse" aria-labelledby="flush-headingOne">\n' +
        '               <input type="text" hidden="hidden" name="level' + id + '" value="level' + id + '">\n' +
        '            <div id="body_level_' + id + '" class="accordion-body">' +
        '               <input type="radio" name="premisesType" value="living">Жилое\n' +
        '               <input type="radio" name="premisesType" value="MOP">МОП\n' +
        '               <input type="radio" name="premisesType" value="basement">Подвал\n' +
        '               <input type="radio" name="premisesType" value="office">Офисы' +
        '               <table></table>' +
        '               <button type="button" class="btn btn-primary" onclick="addZone(' + id + ')">Добавить зону</button>' +
        '            </div>\n' +
        '        </div>\n' +
        '    </div>'
    ));
}

function createForm() {
    let level = $("#level").val();
    let i = 1;
    while (i <= level) {
        createLevel(i);
        i++;
    }
}

function addRoom(x) {
    let test = $('<tr><th> test </th></tr>')
    x.append(test);
}

function getBuild(id) {
    location.href = "/build/" + id;
}

function getLevel(levelId) {
    location.href = "level/" + levelId;
}

function getZone(zoneId) {
    location.href = "zone/" + zoneId;
}
function getRoom(roomId) {
    location.href = "room/" + roomId;
}
