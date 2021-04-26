let verify = () => {
    if(!/\S+@\S+\.\S+/.test(document.getElementById('username').value)) {
        alert("Your username is wrong!");
        return false;
    }

    if(document.getElementById("password").value.length === 0) {
        alert("You must enter a password!");
        return false;
    }

    if( document.getElementById("quantityDog").value.length === 0 ||
        document.getElementById("quantityCat").value.length === 0 ||
        document.getElementById("quantityLamp").value.length === 0) 
    {
        alert("All item quantities must be filled in (0 if you want none)");
        return false;
    }

    if( document.getElementById("quantityDog").value < 0 ||
        document.getElementById("quantityCat").value < 0 ||
        document.getElementById("quantityLamp").value < 0)
    {
        alert("Quantity values can't be negative");
        return false;
    }

    if( !document.getElementById("free").checked &&
        !document.getElementById("night").checked &&
        !document.getElementById("three").checked)
    {
        alert("You must select a shipping option");
        return false;
    }
    return true;
}