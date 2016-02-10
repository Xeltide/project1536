$( document ).ready(function() {
    var headerClass = document.querySelector("#header");
    var headerElement = $(document.getElementById("header"));
    var button0 = document.querySelector("#button0");
    var button1 = document.querySelector("#button1");
    var button2 = document.querySelector("#button2");
    var button3 = document.querySelector("#button3");
    var button4 = document.querySelector("#button4");
    // headerClass.classList.add("header-transparent");
    var currentPage = document.location.pathname.match(/[^\/]+$/)[0];
    if (currentPage == "swimkids.html") {
        button0.classList.add("highlightbuttonclass");
    }
    if (currentPage == "preschool.html") {
        button1.classList.add("highlightbuttonclass");
    }
});