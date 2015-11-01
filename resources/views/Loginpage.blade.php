@extends('layout')

@section('page-script')
<script type="text/javascript">

 $(document).ready(function() {
    $("#btn_Register").click(function(){
       $("#myform").validate({
   rules: {
    txt_Name: {required: true },
txt_Email: { required: true,
email: true },
	txt_Password:{required: true},
	txt_ConfirmPassword:{required: true,
equalTo: "#txt_Password"	},
	txt_phonenumber:{	required: true,
 phoneUS: true	}
	
  },
        // Specify the validation error messages
        messages: {
            txt_Name: "*",
			txt_Email: "*",
            txt_Password: "*",  
			txt_ConfirmPassword: "*",
			txt_phonenumber: "such phone number does not exist" ,
            txt_Email: "enter valid email address Eg: ex@gmail.com",			
        },
          submitHandler: function(form) {
        form.submit();
  }
  });
    }); 
	
	
	
});

</script>
@stop


@section('content')

<table>
<tr>
<td>
<div  class="loginpage">

<h4>LOGIN</h4>

<table id="table" >
    <tr>
    <th align="right"><label for="txt_UseridLogin"> User ID : </label></th>
    <td ><input type ="text" id="txt_UseridLogin" name="txt_UseridLogin" title="Enter the userName" />  </td>     
    </tr> 

    <tr>
    <th align="right"><label for="txt_PasswordLogin">Password : </label></th>
    <td ><input type ="password"  id="txt_PasswordLogin"name="txt_PasswordLogin" title="Enter your Password" /> </td>     
    </tr> 

   <tr align="center">  
<td align="right">  
<input type ="submit" class="button" name="btn_login" value="Login" onClick="return Mandatory_login()" title="Submit to Login" /></td>

    </tr> 
<?php
if(isset($_GET['err'])){
/*if($_GET['err'] == 1) {
   echo 'user already exists with such name, try another';
}
else if($_GET['err'] == 0){
echo "you are successfully registered";
}
else*/ if($_GET['err'] == 3){
echo "username and password not matched";
}
}
?>
 </table>

 </div>
 </td>
 <td> 
<div style="Width:100%; text-align:center;">
<h4>New Member?</h4>

<h4>REGISTRATION</h4>


<table id="table-register">

<tr>
    <th align="right" ><label for="txt_Name">Name/User ID :</label></th>
    <td ><input type ="text" name="txt_Name" id="txt_Name" title="Enter your name/userId" /> </td>     
    </tr> 


    <tr>
    <th align="right" ><label for="txt_Email">Email : </label></th>
    <td ><input type ="text" name="txt_Email" id="txt_Email" title="Enter your Email" />  </td>     
    </tr> 

    <tr>
    <th align="right" ><label for="txt_Password">Password : </label></th>
    <td ><input type ="password"  name="txt_Password" id="txt_Password" title="Enter password" />  </td>     
    </tr> 

    <tr>
    <th align="right" ><label for="txt_ConfirmPassword" >Confirm Password :</label> </th>
    <td ><input type ="password"  name="txt_ConfirmPassword" id="txt_ConfirmPassword" onblur="compare_password()" title="Enter password again to conform" />  </td>     
    </tr> 

    <tr>
    <th align="right" ><label for="txt_phonenumber">Phone Number :</label> </th>
    <td ><input type ="text" name="txt_phonenumber" id="txt_phonenumber" onblur="isValidUSPhoneFormat()" title="Enter your phone number"/>  </td>     
    </tr> 

    <tr align="center">    
    <td align="center" colspan="2">
	<input type ="submit" name="btn_Register" id="btn_Register"class="button" value="Register" onClick="return Mandatory_Registration()" title="Submit to register" />
   <!-- <input type ="submit" id="btn_Clear" class="button" value="Clear" /> </td>-->
    </tr> 

 </table>
<?php
if(isset($_GET['err'])){
if($_GET['err'] == 1) {
   echo 'user already exists with such name, try another';
}
else if($_GET['err'] == 0){
echo "you are successfully registered";
}
}
?>
 </div> 
 </td>
 </tr>
 </table>

</div>
</div>

@stop
