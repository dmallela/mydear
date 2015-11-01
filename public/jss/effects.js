
function username_Empty(){
var x=document.getElementById("txt_UseridLogin");
if(x.value==""||x.value==null){
//alert("user name cannot be empty");
x.style.borderColor="#FF0000";
return false;
}
}

function password_Empty(){
var x=document.getElementById("txt_PasswordLogin");
if(x.value==""||x.value==null){
//alert("user name cannot be empty");
x.style.borderColor="#FF0000";
return false;
}
}

function Mandatory_login(){

var x=document.getElementById("txt_UseridLogin");
if(x.value==""||x.value==null){
x.style.borderColor="#FF0000";
return false;
}

var x=document.getElementById("txt_PasswordLogin");
if(x.value==""||x.value==null){
//alert("user name cannot be empty");
x.style.borderColor="#FF0000";
return false;
}

}

/*

function Mandatory_Registration(){

var x=document.getElementById("txt_Name");
if(x.value==""||x.value==null){
alert("user name cannot be empty");
//document.getElementById("required").style.color="#FF0000";
x.style.borderColor="#FF0000";
document.getElementById("txt_Name").value=x.value;
return false;
}



var x=document.getElementById("txt_Email");
if(x.value==""||x.value==null){
x.style.borderColor="#FF0000";
return false;
}

var x=document.getElementById("txt_Email").value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address, Eg: example@gmail.com ");
  return false;
  }

var x=document.getElementById("txt_Password");
if(x.value==""||x.value==null){
x.style.borderColor="#FF0000";
return false;
}

var x=document.getElementById("txt_ConfirmPassword");
if(x.value==""||x.value==null){
alert("passwords not matched");
x.style.borderColor="#FF0000";
return false;
}
var x=document.getElementById("txt_phonenumber");
if(x.value==""||x.value==null){
x.style.borderColor="#FF0000";
return false;
}

var phoneNumberPattern = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s.]{0,1}[0-9]{3}[-\s.]{0,1}[0-9]{4}$/;  
            if(phoneNumberPattern.test(document.getElementById("txt_phonenumber").value) == false)
            {
                 var phoneNumberPattern = /^(\()?\d{3}(\))?(.|\s)?\d{3}(.|\s)\d{4}$/; 
				 alert("not valid number Ex: (123) 456-7890");
               return false;
            }
             
  
  /*var phoneRegex = new RegExp('\d{9}');
  var phoneNum = document.getElementById("txt_phonenumber").value;
  
  if(!(phoneNum.match(phoneRegex))) {
    alert("Invalid Phone Number");
    document.getElementById("txt_phonenumber").focus();
	return false;
  }}*/
 
  
function isValidUSPhoneFormat(){  
            var phoneNumberPattern = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s.]{0,1}[0-9]{3}[-\s.]{0,1}[0-9]{4}$/;  
            if(phoneNumberPattern.test(document.getElementById("txt_phonenumber").value) == false)
            {
                 var phoneNumberPattern = /^(\()?\d{3}(\))?(.|\s)?\d{3}(.|\s)\d{4}$/; 
				 alert("not valid number Ex: (123) 456-7890");
                 return phoneNumberPattern.test(document.getElementById("txt_phonenumber").value);   
            }
            return phoneNumberPattern.test(document.getElementById("txt_phonenumber").value);  
        }
		
function isValidUSPhoneFormat(){  
            var phoneNumberPattern = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s.]{0,1}[0-9]{3}[-\s.]{0,1}[0-9]{4}$/;  
            if(phoneNumberPattern.test(document.getElementById("txt_phone").value) == false)
            {
                 var phoneNumberPattern = /^(\()?\d{3}(\))?(.|\s)?\d{3}(.|\s)\d{4}$/; 
				 alert("not valid number Ex: (123) 456-7890");
                 return phoneNumberPattern.test(document.getElementById("txt_phone").value);   
            }
            return phoneNumberPattern.test(document.getElementById("txt_phone").value);  
  }

   
  
function compare_password(){

var pass=document.getElementById("txt_Password").value;
var confirm=document.getElementById("txt_ConfirmPassword").value;
if(pass.trim()!=confirm.trim()){
alert("your confirm password not matched with password");
document.getElementById("txt_Password").value="";
document.getElementById("txt_ConfirmPassword").value="";
document.getElementById("txt_Password").focus();
return false;
}
}

function validateForm()
{
var x=document.getElementById("txt_Email").value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address, Eg: example@gmail.com ");
  return false;
  }
}


function receiver_detail_validation(){
var x=document.getElementById("txt_Name");
if(x.value==""||x.value==null){
//alert("user name cannot be empty";
x.style.borderColor="#FF0000";
return false;
}


var x=document.getElementById("txt_deliverydate");
if(x.value==""||x.value==null){
x.style.borderColor="#FF0000";
return false;
}


var x=document.getElementById("txt_relation");
if(x.value==""||x.value==null){
x.style.borderColor="#FF0000";
return false;
}

var x=document.getElementById("txt_occasion");
if(x.value==""||x.value==null){
//alert("user name cannot be empty");
x.style.borderColor="#FF0000";
return false;
}

var x=document.getElementById("txt_address");
if(x.value==""||x.value==null){
x.style.borderColor="#FF0000";
return false;
}

var x=document.getElementById("txt_city");
if(x.value==""||x.value==null){
x.style.borderColor="#FF0000";
return false;
}

var x=document.getElementById("txt_zip");
if(x.value==""||x.value==null){
x.style.borderColor="#FF0000";
return false;
}
/*
var re16digit = /^\d{7}$/;
    if (!re16digit.test(document.getElementById("txt_zip").value)) {
        alert("Not a valid zip code");
        return false;
    }
*/


var x=document.getElementById("txt_phone");
if(x.value==""||x.value==null){
x.style.borderColor="#FF0000";
return false;
}

}

//payment page validation


function creditcard_validation(){


var x=document.getElementById("txt_cardnumber");
if(x.value==""||x.value==null){
x.style.borderColor="#FF0000";
return false;
}

var re16digit = /^\d{16}$/;
    if (!re16digit.test(document.getElementById("txt_cardnumber").value)) {
        alert("Please enter your 16 digit credit card numbers");
        return false;
    }

var x=document.getElementById("txt_month");
if(x.value==""||x.value==null){
x.style.borderColor="#FF0000";
return false;
}

var re16digit = /^\d{2}$/;
var x=document.getElementById("txt_month");
    if (!re16digit.test(document.getElementById("txt_month").value)||x.value>'12') {
        alert("Please enter valid month");
        return false;
    }

var x=document.getElementById("txt_year");
if(x.value==""||x.value==null){
x.style.borderColor="#FF0000";
return false;
}


var re4digit = /^\d{4}$/;
var x=document.getElementById("txt_year");
    if (!re4digit.test(document.getElementById("txt_year").value)||x.value<new Date().getFullYear()) {
        alert("Please enter valid year");
		document.getElementById("txt_year").focus();
        return false;
    }

var x=document.getElementById("txt_securecode");
if(x.value==""||x.value==null){
x.style.borderColor="#FF0000";
return false;
}


var re4digit = /^\d{3}$/;
var x=document.getElementById("txt_securecode");
    if (!re4digit.test(document.getElementById("txt_securecode").value)) {
        alert("Security code is not valid, Ex:123 (three digit number on your card)");
        return false;
    }


var x=document.getElementById("txt_billingaddress");
if(x.value==""||x.value==null){
x.style.borderColor="#FF0000";
return false;
}

}

function status(){
alert("success");
}


