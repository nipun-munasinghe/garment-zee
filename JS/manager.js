function calculateSalary() {
    const days = document.getElementById('days').value;
    const hours = document.getElementById('hours').value;
    const rate = document.getElementById('rate').value;

    if (days > 0 && hours >= 0 && rate >= 0) {
        const salary = days * hours * rate;
        document.getElementById('salary').innerText = 'Rs.' + salary.toLocaleString();
    } else {
        alert("Please enter valid values for days, hours, and rate.");
    }
}

function storeSalary() {
    const salary = document.getElementById('salary').innerText.replace('Rs.', '').replace(',', '');
    const employeeUsername = document.getElementById('employeeUsername').value;

    if (!employeeUsername || salary === "0.00") {
        alert('Please ensure all fields are filled out and salary is calculated.');
        return;
    }

    let data = new FormData();
    data.append('salary', salary);
    data.append('employeeUsername', employeeUsername);

    fetch('managerdash.php', {
        method: 'POST',
        body: data
    })
    .then(response => response.text())
    .then(result => {
        alert('Server response: ' + result);
    })
    .catch(error => console.error('Error:', error));
}
