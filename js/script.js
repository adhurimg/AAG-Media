function validation(){
	var input_text = document.querySelector("#input_text");
	var input_password = document.querySelector("#input_password");
	var error_msg = document.querySelector(".error_msg");

	if(input_text.value.length <= 3 || input_password.value.length <= 3 ){
		error_msg.style.display = "inline-block";
		input_text.style.border = "1px solid #f74040";
		input_password.style.border = "1px solid #f74040";
		return false;
	}
	else{
    alert("form submitted successfully")
		return true;
	}
	
}

var input_fields = document.querySelectorAll(".input");
var login_btn = document.querySelector("#login_btn");

input_fields.forEach(function(input_item){
	input_item.addEventListener("input", function(){
		if(input_item.value.length > 3){
			login_btn.disabled = false;
			login_btn.className = "btn enabled"
		}
	})
})

document.getElementById("submitBtn").addEventListener("click", myFunction);
function myFunction() {
	window.location.href="home.html";
}

function validoMeRegex() {
	var usernameRegex = /^[a-zA-Z]{1}[a-zA-Z0-9]{1,20}$/;
	var userid = document.getElementById('userid').value;

	if (usernameRegex.test(userid)) {
		console.log("Username meets requirements!")
	}else{
		console.log("Username does not meet requirements");
	}

	var passwordRegex = /^[A-Z]{1}[a-zA-Z0-9!@#\$%\^\&*\)\(+=._-]{6,}$/;
	var pass = document.getElementById('pass').value;

	if (passwordRegex.test(pass)) {
		console.log("Password meets requirements")
	}else{
		console.log("Password does not meet requirements");
	}


	var firstRegex = /^[A-Z]{1}[a-zA-Z]{5,15}$/;
	var emri = document.getElementById('emri').value;

	if (firstRegex.test(emri)) {
		console.log("Name meets requirements")
	}else{
		console.log("Name does not meet requirements");
	}

	var emailRegex = /^@.*(\.com|\.net)$/;
	var adresaEmailit = document.getElementById('adresaEmailit').value;

	if (firstRegex.test(emri)) {
		console.log("Email meets requirements")
	}else{
		console.log("Email does not meet requirements");
	}




}

