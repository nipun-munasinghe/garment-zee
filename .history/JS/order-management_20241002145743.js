function formCheck() {
    let id = document.forms["formDetails"]["Id"].value;
    let pname = document.forms["formDetails"]["fName"].value;
    let qty = document.forms["formDetails"]["amount"].value;
    let price = document.forms["formDetails"]["fStatus"].value;

    if (Id == "") {
        alert("Order ID Must be filled out.");
        return false;
    }
    if (fName == "") {
        alert("Customer Name must be filled out.");
        return false;
    }
    if (amount == "") {
        alert("Amount Of The Order must be filled out.");
        return false;
    }
    if (fStatus == "") {
        alert("Order Status must be filled out.");
        return false;
    }
    return true;
}
</script>