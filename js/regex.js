function show() {

    /*var a = document.getElementById("utxt").value;
    document.getElementById("utxt1").value = a;*/
    var val = document.getElementById("utxt1").value;
    var val1 = document.getElementById("Mail1").value;

    var regex = /^s.taimoor@gmail.com/;
    var regex1 = /^\d{5}$/;
    var regex2 = /^taimoor/;
    var regex3 = /^\d{5}$/;

    if (val.match(regex2) && val1.match(regex1)) {
        location.href = "profile.html";
    }
    else {
        alert("email or Password is wrong!!");
    }

}