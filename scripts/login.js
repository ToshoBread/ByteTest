let form = document.getElementById("loginForm");
// let redirectURI = "http://127.0.0.1:5500/home.html";
let redirectURI = "https://www.example.com";

const email = document.getElementById("email");
const password = document.getElementById("password");
const submitButton = document.getElementById("submit");

function setFormAction(action) {
	form.setAttribute("action", action);
}

function OAuthLoadConsent(params) {
	email.removeAttribute("required");
	password.removeAttribute("required");

	for (var p in params) {
		let input = document.createElement("input");
		input.setAttribute("required", "false");
		input.setAttribute("type", "hidden");
		input.setAttribute("name", p);
		input.setAttribute("value", params[p]);
		form.appendChild(input);
	}

	form.submit();
}

// function OAuthLoadConsent2(params) {
//   email.removeAttribute("required");
//   password.removeAttribute("required");

//   const fragment = document.createDocumentFragment();

//   Object.entries(params).forEach(([key, value]) => {
//     const input = document.createElement("input");
//     input.type = "hidden";
//     input.name = key;
//     input.value = value;
//     fragment.appendChild(input);
//   });

//   form.appendChild(fragment);
//   form.submit();
// }

function googleSignIn() {
	setFormAction("https://accounts.google.com/o/oauth2/v2/auth");

	let params = {
		client_id:
			"455388179573-3a78k0ecqi80675beucui7sdq3hkgsgs.apps.googleusercontent.com",
		redirect_uri: redirectURI,
		response_type: "token",
		scope: "https://www.googleapis.com/auth/userinfo.profile",
		include_granted_scopes: "true",
		state: "pass-through-value",
	};

	OAuthLoadConsent(params);
}

function facebookSignIn() {
	console.log("Facebook, please send OTP...");
}

function githubSignIn() {
	setFormAction("https://github.com/login/oauth/authorize");

	let params = {
		client_id: "Ov23lioWQEvo58ehqcuv",
		redirect_uri: redirectURI,
		scope: "user",
		state: "anUnguessableRandomString1821",
		allow_signup: "false",
		prompt: "select_account",
	};

	OAuthLoadConsent(params);
}
