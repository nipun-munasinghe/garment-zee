function formCheck() {
    let Id = document.forms["formDetails"]["Id"].value;
    let fName = document.forms["formDetails"]["fName"].value;
    let amount = document.forms["formDetails"]["amount"].value;
    let fStatus = document.forms["formDetails"]["fStatus"].value;

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