function calculateSalary() {
    let days = document.getElementById("days").value;
    let hours = document.getElementById("hours").value;
    let rate = document.getElementById("rate").value;

    if (days > 0 && hours >= 0 && rate >= 0) {
        let salary = days * hours * rate;
        document.getElementById("salary").innerHTML = "Rs." + salary.toFixed(2);
    } else {
        alert("Please enter valid values for days, hours, and rate.");
    }
}

function storeSalary() {
    let employeeUsername = document.getElementById("employeeUsername").value;
    let salary = document.getElementById("salary").textContent.replace("Rs.", "").trim();

    if (salary > 0) {
        // Send the salary and employee username to the PHP script
        let form = document.createElement("form");
        form.method = "POST";
        form.action = "managerdash.php"; // Replace with the correct PHP file name

        let usernameField = document.createElement("input");
        usernameField.type = "hidden";
        usernameField.name = "employeeUsername";
        usernameField.value = employeeUsername;
        form.appendChild(usernameField);

        let salaryField = document.createElement("input");
        salaryField.type = "hidden";
        salaryField.name = "salary";
        salaryField.value = salary;
        form.appendChild(salaryField);

        document.body.appendChild(form);
        form.submit();
    } else {
        alert("Please calculate the salary first.");
    }
}
