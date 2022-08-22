function addZone() {
    let premisesType = $('input[name=premisesType]:checked');
    let levelId = premisesType.parent().attr('id').substring(11);
    console.log(premisesType.val(),levelId);
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
        '            <div id="body_level_'+ id +'" class="accordion-body">' +
        '               <input type="radio" name="premisesType" value="1">Жилое\n' +
        '               <input type="radio" name="premisesType" value="2">МОП\n' +
        '               <input type="radio" name="premisesType" value="3">Подвал\n' +
        '               <input type="radio" name="premisesType" value="4">Офисы' +
        '               <button type="button" class="btn btn-primary" onclick="addZone()">Добавить зону</button>' +
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
