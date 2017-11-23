function submitChat() {
    if (form1.message.value == '') {
        alert("Enter your message!!!");
        return;
    }

    var message = form1.message.value;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
        }
    }

    xmlhttp.open('GET', 'insert.php?message=' + message, true);
    xmlhttp.setRequestHeader("Content-type", "application/json");
    xmlhttp.send();

}

$(document).ready(function (e) {
    $.ajaxSetup({
        cache: false
    });
    setInterval(function () {
        $('#chatlogs').load('logs.php');
    }, 10);
});
