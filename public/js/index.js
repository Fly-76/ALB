// Display rules
function displayRules(rules) {
    let html = "";
    for (let rule of rules) {
        for (let field in rule)
            html += `<p>${rule[field]}</p>`;
    }
    let splash = document.getElementById("rulesContent");
    splash.innerHTML = html;
}

// load rules from rules.json file using HTTP request
function loadContent() {
    httpRequest = new XMLHttpRequest();

    httpRequest.onreadystatechange = function() {
        if (httpRequest.readyState === XMLHttpRequest.DONE) {
            if (httpRequest.status === 200) {
                let rules = JSON.parse(httpRequest.responseText);
                displayRules(rules);
            } else {
                alert("Une erreur est survenue");
            }
        }
    };

    httpRequest.open('GET', 'rules.json', true);
    httpRequest.send();
}
loadContent();

// Show splash screen
$(document).ready(function(){
    if (sessionStorage.getItem('splashDisplayed')===null) {
        sessionStorage.setItem('splashDisplayed', 'true');
        $("#rules").modal();
    }
});
