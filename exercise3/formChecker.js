function valid() {
    //get values
    let username = document.getElementsByName("username")[0].value;
    let password = document.getElementsByName("password")[0].value;
    let tshirt = document.getElementsByName("tshirt")[0].value;
    let sweater = document.getElementsByName("sweater")[0].value;
    let jacket = document.getElementsByName("jacket")[0].value;
    //get shipping options
    let shipping = document.getElementsByName("shipping");
    //regex for checking email
    const checkEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.com)+$/;
    //check each requirement
    if (!checkEmail.test(username)) {
        alert("Username must be in the format: name@domain.com");
        return false;
    } else if (password == "") {
        alert("Password cannot be empty");
        return false;
    } else if (tshirt == "" || tshirt < 0) {
        alert("T-Shirt must be 0 or more");
        return false;
    } else if (sweater == "" || sweater < 0) {
        alert("Sweater must be 0 or more");
        return false;
    } else if (jacket == "" || jacket < 0) {
        alert("Jacket must be 0 or more");
        return false;
    }
    //check if one is checked
    let checked = false;
    for (option of shipping) {
        if (option.checked) {
            checked = true;
        }
    }
    if (!checked) {
        alert("Must select shipping option");
    }
    return checked;
}