function validateForm() {
    let x = document.form["addinven"]["pname"].value;
    let y = documnet.form["addinven"]["qty"].value;
    let z = document.form["addinven"]["price"].value;
    if (x = ""){
        alert("Product Name Must Be Filled Out");
        return false;
    }else if (y = ""){
        alert("Product Quentity Must Be Filled Out");
        return false;
    }else if (z = ""){
        alert("Product Price Must Be Filled Out");
        return false;
    }
}