
// window.onload = function () {
// 	var button = document.querySelector("#contactBtn");
// 	button.addEventListener("click", contact);
// }

function contact() {
	var fullName = document.querySelector("#fullName").value;
	var email = document.querySelector("#email").value;
	var content = document.querySelector("#content").value;

	var fullNameError = document.querySelector("#fullNameHelp");
	var emailError = document.querySelector("#emailHelp");
	var contentError = document.querySelector("#contentHelp");

	var fullNameTrue = true;
	var emailTrue = true;
	var contentTrue = true;

	var reName = /^[A-Z][a-z]{2,15}\s[A-Z][a-z]{2,15}$/;
	var reEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;


	if (fullName) {
		if (!reName.test(fullName)) {
			fullNameError.textContent = "Ime nije ispravno!";
			fullNameTrue = false;
		}
	} else {
		fullNameError.textContent = "Polje za ime ne sme biti prazno!";
		fullNameTrue = false;
	}

	if (email) {
		if (!reEmail.test(email)) {
			emailError.textContent = "Email nije ispravan!";
			emailTrue = false;
		}
	} else {
		emailError.textContent = "Polje za email ne sme biti prazno!";
		emailTrue = false;
	}


	if (!content) {
		contentError.textContent = 'Polje za poruku ne sme biti prazno!';
		contentTrue = false;
	}


	if (fullNameTrue && emailTrue && contentTrue) {
		return true;
	} else{
		return false;
	}

// 		fullNameError.textContent = "";
// 		emailError.textContent = "";
// 		contentError.textContent = "";
		
// 		$.ajax({
// 			url: "index.php?page=contactUpis",
// 			method: "POST",
// 			dataType: "json",
// 			data: {
// 				contactBtn: "send",
// 				fullName, email, content
// 			},
// 			success: function (data) {
// 				console.log(data);
// 				document.querySelector("#fullName").value = "";
// 				document.querySelector("#email").value = "";
// 				document.querySelector("#message").value = "";

// 				var msgAlert = document.querySelector('#successMsg');
// 				var message = document.querySelector('#msg');

// 				msgAlert.classList.remove('invisible');
// 				msgAlert.classList.add('alert-success');
// 				message.textContent = data;
// 				setTimeout(function() {
// 					msgAlert.classList.add('invisible')	
// 				} , 1500);
// 			},
// 			error: function (xhr, status, err) {
// 				var msgAlert = document.querySelector('#successMessage');
// 				var message = document.querySelector('#msg');
// 				switch (xhr.status) {
// 					case 409:
// 						msgAlert.classList.remove('invisible');
// 						msgAlert.classList.add('alert-warning');
// 						message.textContent = 'Email nije dostupan!';
// 						break;
// 					case 422:
// 						msgAlert.classList.remove('invisible');
// 						msgAlert.classList.add('alert-warning');
// 						message.textContent = 'Greške';
// 						break;
// 				}
// 			}
// 		})
// 	} else {
// 		console.log("Ima gresaka");
// 	}
}