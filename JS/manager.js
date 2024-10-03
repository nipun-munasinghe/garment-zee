function calculateSalary() {
    // Get the values from the inputs
    const days = document.getElementById('days').value;
    const hours = document.getElementById('hours').value;
    const rate = document.getElementById('rate').value;

    // Calculate the salary
    const salary = days * hours * rate;

    // Display the salary in the salary box
    document.getElementById('salary').innerText = 'Rs.' + salary.toLocaleString();
}
