document
	.querySelector(".login-form")
	.addEventListener("submit", async function (event) {
		event.preventDefault();

		const loginInput = document.getElementById("loginInput").value;
		const password = document.getElementById("password").value;

		const data = new FormData();
		data.append("loginInput", loginInput);
		data.append("password", password);

		try {
			const response = await fetch("../server/fetchCredentials.php", {
				method: "POST",
				body: data,
			});

			const result = await response.json();
			displayMessage(result.message, result.success);

			if (result.success) {
				window.location.href = "../pages/home.php";
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

// let form = document.getElementById("loginForm");
// let redirectURI = "https://www.example.com";

// const email = document.getElementById("email");
// const password = document.getElementById("password");
// const submitButton = document.getElementById("submit");

// function setFormAction(action) {
// 	form.setAttribute("action", action);
// }

// function OAuthLoadConsent(params) {
// 	email.removeAttribute("required");
// 	password.removeAttribute("required");

// 	for (var p in params) {
// 		let input = document.createElement("input");
// 		input.setAttribute("required", "false");
// 		input.setAttribute("type", "hidden");
// 		input.setAttribute("name", p);
// 		input.setAttribute("value", params[p]);
// 		form.appendChild(input);
// 	}

// 	form.submit();
// }

// function googleSignIn() {
// 	setFormAction("https://accounts.google.com/o/oauth2/v2/auth");

// 	let params = {
// 		client_id:
// 			"455388179573-3a78k0ecqi80675beucui7sdq3hkgsgs.apps.googleusercontent.com",
// 		redirect_uri: redirectURI,
// 		response_type: "token",
// 		scope: "https://www.googleapis.com/auth/userinfo.profile",
// 		include_granted_scopes: "true",
// 		state: "pass-through-value",
// 	};

// 	OAuthLoadConsent(params);
// }

// function facebookSignIn() {
// 	console.log("Facebook, please send OTP...");
// }

// function githubSignIn() {
// 	setFormAction("https://github.com/login/oauth/authorize");

// 	let params = {
// 		client_id: "Ov23lioWQEvo58ehqcuv",
// 		redirect_uri: redirectURI,
// 		scope: "user",
// 		state: "anUnguessableRandomString1821",
// 		allow_signup: "false",
// 		prompt: "select_account",
// 	};

// 	OAuthLoadConsent(params);
// }
