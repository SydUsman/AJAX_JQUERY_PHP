function validate(){
    var name = document.forms["myForm"]["name"].value;
    var email = document.forms["myForm"]["email"].value;
    
    // Validate name
    if (name == "") {
        alert("Name must be filled out");
        return false;
    }
    
    // Validate email
    if (email == "") {
        alert("Email must be filled out");
        return false;
    }
}