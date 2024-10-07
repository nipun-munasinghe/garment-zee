function formCheck() {
    let Id = document.forms["formDetails"]["Id"].value;
    let fName = document.forms["formDetails"]["fName"].value;
    let amount = document.forms["formDetails"]["amount"].value;
    let fStatus = document.forms["formDetails"]["fStatus"].value;
    let fEmail = document.forms["formDetails"]["fEmail"].value;
    let fAddress = document.forms["formDetails"]["fAddress"].value;
    let recipt = document.forms["formDetails"]["recipt"].value;

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

    if (fEmail == "") {
        alert("Email Address Must be filled out.");
        return false;
    }

    if (fAddress == "") {
        alert("Address Must be filled out.");
        return false;
    }

    if (recipt == "") {
        alert("Payment Recipt Must be uploaded.");
        return false;
    }
    return alert("Are you need Adding this Order!");
}

function displayUpdate()
{
    alert("Are you need update this!");
}

function displayDelete()
{
    alert("Are you need delete this!")
}