var pageCounter = 1;
var output = document.getElementById('output');
var btn = document.getElementById('btn');

btn.addEventListener('click', function(){

    //Import JSON data from URL and save to variable on click
    var requestData = new XMLHttpRequest();
    requestData.open('GET', 'https://learnwebcode.github.io/json-example/animals-' + pageCounter + '.json');
    requestData.onload = function(){
        if (requestData.status >= 200 && requestData.status <400) {
        var ourData= JSON.parse(requestData.responseText);
        renderHTML(ourData);
        } else {
            console.log("connect but it returned error");
        }
    };
   

    // };

    requestData.send();
    pageCounter++;
    if (pageCounter > 3) {
        btn.classList.add("hide-me");
    }
});
//Asynchronous Javascript and XML/JSON (AJAX)
// create 'renderHTML' function to print out data collected from JSON url to HTML. 
function renderHTML(data) {
    var htmlString = "";
    for (i = 0; i < data.length; i++){
        htmlString += "<p>" + data[i].name + " is a " + data[i].species + " that likes to eat ";
        for (ii = 0; ii < data[i].foods.likes.length; ii++) {
            if (ii == 0){
                htmlString += data[i].foods.likes[ii];
            } else {
                htmlString += " and " + data[i].foods.likes[ii];
            }
        }

        htmlString += ' and dislikes ';
        for (ii = 0; ii < data[i].foods.dislikes.length; ii++) {
            if (ii == 0){
                htmlString += data[i].foods.dislikes[ii];
            } else {
                htmlString += " and " + data[i].foods.dislikes[ii];
            }
        }
        htmlString += '.</p>';
    }
    output.insertAdjacentHTML('beforeend', htmlString);
    console.log(htmlString);
}


