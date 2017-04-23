function checkEmail()
 {
	email=document.getElementById('email').value;
	if(email == "")
	{
		alert('email is empty');
		return false;
	}
	
	pass=document.getElementById('password').value;
	if(pass == "")
	{
		alert('password is empty');
		return false;
	}
	cpass=document.getElementById('confirm password').value;
	if(cpass == "")
	{
		alert('confirm password is empty');
		return false;
	}
	
	name=document.getElementById('Frist Name').value;
	if(name == "")
	{
		alert('Name is empty');
		return false;
	}
	
	lname=document.getElementById('Last Name').value;
	if(lname == "")
	{
		alert('Last Name is empty');
		return false;
	}
	
	male=document.getElementById('Male').checked;
	female=document.getElementById('Female').checked;
		if(male==false && female==false)
	{
		alert('Select Gender!!!!');
		return false;
	}
	mobile=document.getElementById('mobile number').value;
	if(mobile=="")
	{
		alert('number is empty');
		return false;
	}
	religion=document.getElementById('religion').value;
	if(religion=="")
	{
		alert('please select any religion');
		return false;
	}
		
 }
 
 