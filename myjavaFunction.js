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

$(document).ready(function () {
    $.ajaxSetup({
        cache: false
    });
    setInterval(function () {
        $('#chatlogs').load('logs.php');
    }, 100);
});


function users(){
	xhr1 = new XMLHttpRequest();
        xhr1.onreadystatechange = function()
	{
            if (xhr1.readyState == 4 && xhr1.status == 200) {
		document.getElementById('chatlogs2').innerHTML = xhr1.responseText;
            }
	}
	xhr1.open('POST' , 'user.php' , true);
	xhr1.setRequestHeader('content-type','application/x-www-form-urlencoded');
	xhr1.send();

}
    setInterval(function () {
        $('#chatlogs2').load('user.php');
    }, 10);