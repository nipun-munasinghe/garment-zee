function del(event) {
    if (!confirm("Are you sure you want to delete this account permanently?")) {
        event.preventDefault();
    }
}

function change(event) {
    const newPwd = document.getElementById('new-pwd').value;
    const confirmPwd = document.getElementById('confirm-pwd').value;

    if (newPwd !== confirmPwd) {
        event.preventDefault();
        alert("New password and confirmed password do not match!");
    }

    else if (!confirm("Are you sure you want to change your password?")) {
        event.preventDefault();
    }
}
