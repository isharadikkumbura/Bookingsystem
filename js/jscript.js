function empty() {
    var x;
    x = document.getElementById("id").value;
    if (x == "") {
        alert("Enter a Valid Roll Number");
        return false;
    };
}
		  
function validate() {
	 var box = document.getElementById("name");
	 var box1 = document.getElementById("email");
	 var box2 = document.getElementById("message");

	 if (box.value.length < 1) {
		 alert("Please fill necessary fields!!");
		 box.focus();
		 box.style.border = "solid 3px red";
		 return false;
	 
	 }
	 if (box1.value.length < 1) {
		 alert("Please fill necessary fields!!");
		 box.style.border = "solid 3px #1a1aff";
		 box1.focus();
		 box1.style.border = "solid 3px red";
		 return false;
	 }
	 if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(box1.value))){
		alert("You have entered an invalid email address!");
		 box.style.border = "solid 3px #1a1aff";
		box1.focus();
		box1.style.border = "solid 3px red";
		return false;
		
	 }
	 if (box2.value.length < 1) {
		 alert("Please fill necessary fields!!");
		 box2.focus();
		  box.style.border = "solid 3px #1a1aff";
		 box1.style.border = "solid 3px #1a1aff";
		 box2.style.border = "solid 3px red";
		 return false;
	 }
		 box1.style.border = "solid 3px #1a1aff";
		 box2.style.border = "solid 3px #1a1aff";
		alert("Your message has successfully been submitted!!!");
		
 }
 