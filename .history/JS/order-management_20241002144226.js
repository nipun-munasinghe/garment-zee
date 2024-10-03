function formCheck() {
    let id = document.forms["formDetails"]["Id"].value;
    let pname = document.forms["formDetails"]["fName"].value;
    let qty = document.forms["formDetails"]["amount"].value;
    let price = document.forms["formDetails"]["ftatus"].value;

    if (Id == "") {
        alert("Product ID Must be filled out.");
        return false;
    }
    if (fName == "") {
        alert("Product name must be filled out.");
        return false;
    }
    if (amount == "" || isNaN(qty)) {
        alert("Please enter a vaid quantity");
        return false;
    }
    if (status == "" || isNaN(price)) {
        alert("Please enter a valid price");
        return false;
    }
    return true;
}
</script>