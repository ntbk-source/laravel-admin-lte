function swalConfirm(title, text, callback) {
    Swal.fire({
        title,
        text,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
    }).then((result) => {
        if (result.isConfirmed) {
            callback();
        }
    });
}

function logout() {
    swalConfirm("Are you sure ?", "You won't be able to revert this.", () => {
        document.getElementById("logout-form").submit();
    });
}
