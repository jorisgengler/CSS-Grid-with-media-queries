function validateForm() {
    var x = document.forms["contact_formulier"]["email"].value;
    var y = document.forms["contact_formulier"]["firstname"].value;
    var m = document.forms["contact_formulier"]["subject1"].value;

    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");

//---------------------------------- Name ----------------------------------//
    if (y == "") {
        alert("Name must be filled out");
        return false;
    }
//---------------------------------- Email ----------------------------------//
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
//---------------------------------- Text field ----------------------------------//
    if (m == "") {
        alert("Write something");
        return false;
    }
}
