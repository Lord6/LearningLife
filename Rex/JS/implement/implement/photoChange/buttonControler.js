function resetButton(){
	for(i=1;i<=photoNumber;i++){
		document.getElementById(i).src="close.jpg";
	}
}
function buttonControl(buttonIndex){
	imageControl.src="images/"+buttonIndex+".jpg";
	currentIndex=buttonIndex;
	resetButton();
	document.getElementById(currentIndex).src="on.jpg";
	document.getElementById("Msg").innerHTML = "This is No."+currentIndex+" Image";
	
}
function check(flag){
	if(flag)
		if(currentIndex<=1) currentIndex=photoNumber ; else currentIndex--;
	else
		if(currentIndex>=photoNumber) currentIndex=1 ; else currentIndex++;
	buttonControl(currentIndex);
}

function cyclePlay(){
	resetButton();
	currentIndex++;
	if(currentIndex>photoNumber) currentIndex=1 ;
	
	document.getElementById(currentIndex).src="on.jpg";
	imageControl.src="images/"+currentIndex+".jpg";
	document.getElementById("Msg").innerHTML = "This is No."+currentIndex+" Image";
	
	
	

	
}
function checkButton(){
	buttonKey = event.button;	
	switch (buttonKey){
		case 0:
			check(false);
			break;
		case 1:
			break;
		case 2:
			check(true);
			break;
		default:
			break;
	}
}