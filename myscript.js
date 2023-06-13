//greetings

function getGreeting() {
	var date = new Date();
	var hours = date.getHours();
	var greeting;

	if (hours >= 0 && hours < 12) {
		greeting =" Goodmorning!, How are you?";
	}
	else if (hours >= 12 && hours < 18) {
		greeting = " Good Afternoon!, How are you?";
	}
	else {
		greeting = " Good Evening!, How are you?";
	}
	return greeting;
}

function displayGreeting(){
	var greeting = getGreeting();
	document.getElementById("greeting").textContent = greeting;
}