document
	.querySelector(".register-form")
	.addEventListener("submit", async function (event) {
		event.preventDefault();

		const username = document.getElementById("username").value;
		const email = document.getElementById("email").value;
		const password = document.getElementById("password").value;
		const confirmPassword = document.getElementById("confirmPassword").value;

		const data = new FormData();
		data.append("username", username);
		data.append("email", email);
		data.append("password", password);
		data.append("confirmPassword", confirmPassword);

		try {
			const response = await fetch("../server/registerUser.php", {
				method: "POST",
				body: data,
			});

			const result = await response.json();
			displayMessage(result.message, result.success);

			if (result.success) {
				window.location.href = "../pages/login.php";
			}
		} catch (error) {
			console.log(error);
			displayMessage("An error occurred. Please try again.", false);
		}
	});

function displayMessage(message, success) {
	const messageElement = document.querySelector(".message");
	messageElement.textContent = message;
	messageElement.style.color = success ? "green" : "red";
}
