let currentPage = document.getElementById("app");

console.log("load page js");
function loadPage(page) {
    console.log('entered function');
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            currentPage.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "view/" +page, true);
    xhttp.send();
}