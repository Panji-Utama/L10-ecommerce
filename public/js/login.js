function showAlert(message) {
    const alertBox = document.getElementById("alertBox");
    const alertMessage = document.getElementById("alertMessage");

    alertMessage.textContent = message;
    alertBox.style.display = "block";
    alertBox.style.transform = "translateX(0)";

    setTimeout(() => {
        alertBox.style.transform = "translateX(-100%)";
        setTimeout(() => (alertBox.style.display = "none"), 500);
    }, 3000);
}

document
    .getElementById("loginForm")
    .addEventListener("submit", function (event) {
        if (!this.checkValidity()) {
            event.preventDefault(); // Prevent form submission
            showAlert("Please fill in all required fields."); // Show custom alert
        }
    });
