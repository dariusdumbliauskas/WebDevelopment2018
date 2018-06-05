
var array = [];

function clearInput() {
    document.querySelector(".input1").value = "";
    document.querySelector(".input2").value = "";
    document.querySelector(".input3").value = "";
}

$('#submit').click(function () {
    value1 = $('.input1').val();
    value2 = $('.input2').val();
    value3 = $('.input3').val();
    value4 = [value1, value2, value3];
    array.push(value4);
    lentele();
});
function lentele() {
    var lentele = '';
        for (var i = 0; i < array.length; i++) {
            lentele +=
                '<tr>'
                + '<td> ' + array[i][0] + '</td>'
                + '<td> ' + array[i][1] + '</td>'
                + '<td> ' + array[i][2] + '</td>'
                + '<td> <button type="button" class="btn btn-primary" onClick="editRow()">redaguoti</button> </td>'
                + '<td> <button type="button" class="btn btn-primary" onclick="deleteRow(' + i + ')">Trinti</button></td>'
                + '</tr>';
        };
        document.getElementById('output').innerHTML = lentele;
        clearInput();
        }


function deleteRow(eilute) {
    array.splice(eilute, 1);
    lentele();
}

function editRow() {
    $('td').each(function () {
        $(this).attr('contenteditable', true);
    });
}