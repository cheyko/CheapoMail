var fname;
var lname;
var uname;
var pword;
var pword_con;
var hide;

function checkForm (){
	
	fname = document.forms["theform"]["firstname"].value;
	lname = document.forms["theform"]["lastname"].value;
	uname = document.forms["theform"]["username"].value;
	pword = document.forms["theform"]["password"].value;
	pword_con = document.forms["theform"]["passcon"].value;
	hide = document.forms["theform"]["hide"].value;

		function validPassword(hash){
			return /^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/.test(hash);		
		}
		
	if(fname == null || fname == ""){
		document.getElementsByTagName('input')[0].className = "change";		
	}

	if(lname == null || lname == ""){	
		document.getElementsByTagName('input')[1].className = "change";
	}
	
	if(uname == null || uname == ""){
		document.getElementsByTagName('input')[2].className = "change";
	}
		
	if( pword == null || pword == ""){
		document.getElementsByTagName('input')[3].className = "change";	
	}
		
	if( pword_con == null || pword_con == "" ){
		document.getElementsByTagName('input')[3].className = "change";
	}
	
	if ( pword != pword_con  || !validPassword(pword) ){
		document.getElementsByTagName('input')[3].className = "change";
		document.getElementsByTagName('input')[4].className = "change";
		return false;		
	}
	
	if (!validPassword(pword)){
		return false;
	}
	
	if (!validEmail(email)){
		return false;
	}
	
	//if ( (fname || lname || uname || email || pword || pword_con) == null || (fname || lname || uname || email || pword || pword_con) == "") {
	if ( (fname && lname && uname && email && pword && pword_con) == null || (fname && lname && uname && email && pword && pword_con) == "") {
		return false;
	}
	if ( (fname && lname && uname && email && pword && pword_con) != null || (fname && lname && uname && email && pword && pword_con) != "") {
		return true;
	}
		
		
}