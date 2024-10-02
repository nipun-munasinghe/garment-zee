function del(event) {
    if (!confirm("Are you sure you want to delete this account permanently?")) {
        event.preventDefault();
    }
}

function change(event) {
    if (!confirm("Are you sure you want to change your password?")) {
        event.preventDefault();
    }
}
