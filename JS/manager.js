function calculateSalary() {
    // Get the values from the inputs
    const days = document.getElementById('days').value;
    const hours = document.getElementById('hours').value;
    const rate = document.getElementById('rate').value;

    // Check if all fields have valid values
    if (days && hours && rate) {
        // Calculate the salary
        const salary = days * hours * rate;

        // Show the salary in an alert box
        alert('The calculated salary is: Rs.' + salary.toLocaleString());
    } else {
        alert('Please fill in all fields.');
    }
}
