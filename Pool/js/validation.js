
function signup_validation(){
	alert("helloooooooo");
 var usr=document.getElementById("usr").value;
	alert($usr);
  var pwd=document.getElementById("pwd").value;
   var cpwd=document.getElementById("cpwd").value;
	 var atpos = usr.indexOf("@");
    var dotpos = usr.lastIndexOf("."); 
    if(usr=="" || pwd=="" || cpwd=="" || pwd!=cpwd)
		{ 
			document.getElementById("a_err").innerHTML="Please Fill All Fields";
			
			if(usr==""){
				
				document.getElementById("a_err").innerHTML="Please Enter User Name";
				
			}
			else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=usr.length) {
				
				document.getElementById("js_error").innerHTML="Not a valid e-mail address";
				
			 }
			else if(pwd==""){
				
				document.getElementById("a_err").innerHTML="Please Enter Email";
				
			}
			else if(cpwd==""){
				
				document.getElementById("a_err").innerHTML="Please Re-Enter password ";
				
			}
			
			else if(pwd!=cpwd){
				
				document.getElementById("a_err").innerHTML="Password Do Not Match";
				
			}
			return false;
		}
	else{
	document.getElementById("a_err").innerHTML="";
	return true;
	}
} 



		
function signup_validation11(){
alert("hello");

var sname=document.getElementById("sfname").value;
//alert(sname);
 var slname=document.getElementById("slname").value;
 //alert(slname);
  var semail=document.getElementById("semail").value;
 // alert(semail);
  var atpos = semail.indexOf("@");
    var dotpos = semail.lastIndexOf(".");
   
   var sdob=document.getElementById("date").value;
    var scontact=document.getElementById("scontact").value;
	 var squalification=document.getElementById("squalification").value;
	  var scity=document.getElementById("scity").value;
	   var sstate=document.getElementById("sstate").value;
	   // var courseId=document.getElementById("courseId").value;
		// var yearId=document.getElementById("yearId").value;
		//var sfile=document.getElementById("sfile").value;
		//alert(sfile);
		  var spwd=document.getElementById("spwd").value;
		   var scpwd=document.getElementById("scpwd").value;
//alert(spwd);alert(scpwd);

    if(sname=="" || slname=="" || semail=="" || sdob=="" || scontact=="" || squalification=="" || scity=="" || sstate=="" || spwd=="" || scpwd=="" || spwd != scpwd)
		{ 
			document.getElementById("js_error").innerHTML="Please Fill All Fields";
			
			if(sname==""){
				
				document.getElementById("js_error").innerHTML="Please Enter First Name";
				
			}
			else if(slname==""){
				
				document.getElementById("js_error").innerHTML="Please Enter Last Name";
				
			}
		     
			
			else if(semail==""){
				
				document.getElementById("js_error").innerHTML="Please Enter Email";
				
			}
			else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=semail.length) {
				
				document.getElementById("js_error").innerHTML="Not a valid e-mail address";
				
			 }
			else if(sdob==""){
				
				document.getElementById("js_error").innerHTML="Please Enter Date Of Birth";
				
			}
			else if(scontact==""){
				
				document.getElementById("js_error").innerHTML="Please Enter Contact No.";
				
			}
			else if(squalification==""){
				
				document.getElementById("js_error").innerHTML="Please Enter Qualification.";
				
			}
			else if(scity==""){
				
				document.getElementById("js_error").innerHTML="Please Enter City.";
				
			}
			else if(sstate==""){
				
				document.getElementById("js_error").innerHTML="Please Enter State.";
				
			}
			else if(spwd==""){
				
				document.getElementById("js_error").innerHTML="Please Enter Password.";
				
			}
			else if(scpwd==""){
				
				document.getElementById("js_error").innerHTML="Please Confirm Password.";
				
			}
			else if(spwd != scpwd){
				//alert(scpwd);
				document.getElementById("js_error").innerHTML="Password Not Matched.";
				
			}
			/*else if(sfile==""){
				
				document.getElementById("js_error").innerHTML="Please Upload Image.";
				
			}*/
			return false;
		}
	else{
	document.getElementById("js_error").innerHTML="";
	return true;
	}
} 

function login_validation(){
	
var username=document.getElementById("username1").value;
//alert(username);
 var atpos1 = username.indexOf("@");
    var dotpos1 = username.lastIndexOf(".");
   
 var password=document.getElementById("password1").value;
 
   if(username=="" || password=="")
		{ 
			document.getElementById("js_error1").innerHTML="Please Fill All Fields";
			
			if(username==""){
				
				document.getElementById("js_error1").innerHTML="Please Enter Your Email Id";
				
			}
			else if (atpos1<1 || dotpos1<atpos1+2 || dotpos1+2>=username.length) {
				
				document.getElementById("js_error1").innerHTML="Not a valid e-mail address";
				
			 }
			else if(password==""){
				
				document.getElementById("js_error1").innerHTML="Please Enter Password.";
				
			}
			return false;
		}
	else{
	document.getElementById("js_error1").innerHTML="";
	return true;
	}
}
