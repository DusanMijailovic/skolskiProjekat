// window.onload = function() {
// 	document.querySelector("#loginBtn").addEventListener("click", login);
// }


function login() {
	var email = document.querySelector('#email').value;
	var password = document.querySelector('#password').value;

	var passwordError = document.querySelector('#passwordError');
	var emailError = document.querySelector('#emailError');


	var reEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var rePassword = /^[a-z0-9]{8,}$/;

	var emailTrue = true;
	var passwordTrue = true;


	if (email) {
		if (!reEmail.test(email)) {
			emailError.textContent = 'Email nije ispravan!';
			emailTrue = false;
		}
	} else {
		emailError.textContent = 'Polje za email ne sme biti prazno!';
		emailTrue = false;
	}


	if (password) {
		if (!rePassword.test(password)) {
			passwordError.textContent = 'Lozinka nije ispravna!';
			passwordTrue = false;
		}
	} else {
		passwordError.textContent = 'Polje za lozinku ne sme biti prazno!';
		passwordTrue = false;
	}



	if (emailTrue && passwordTrue) {
		return true;
	} else {
		return false;
	}
}
// 		emailError.textContent = "";
// 		passwordError.textContent = "";
// 		$.ajax({
// 			// url: "php/login.php",
// 			method : "POST",
// 			data: {
// 				loginBtn : "send",
// 				email, password
// 			},
// 			dataType: "json",
// 			success: function (data) {
// 				console.log(data);
// 			},
// 			error : function (xhr,status, err) {
// 				var alertDiv = document.querySelector('#successMessage');
// 				var message = document.querySelector('#msg');
// 				switch (xhr.status) {
// 					case 409:
// 						alertDiv.classList.remove('invisible');
// 						alertDiv.classList.add('alert-warning');
// 						message.textContent = 'Ne postoji korisnik sa tim email-om/lozinkom. Pokušajte ponovo!';
// 						break;
// 					case 422:
// 						alertDiv.classList.remove('invisible');
// 						alertDiv.classList.add('alert-warning');
// 						message.textContent = 'Greške!';
// 						break;
// 				}
// 			}
// 		})
// 	} else {
// 		console.log("Ima gresaka");




	



