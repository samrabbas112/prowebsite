function clearErrors(){

    errors = document.getElementsByClassName('formerror');
    for(let item of errors)
    {
        item.innerHTML = "";
    }


}
function seterror(id,error){
 //alert(error);
 element = document.getElementById(id);
 element.getElementsByClassName('formerror')[0].innerHTML = error;
}
function validate()
{
	var result=true;
	clearErrors();
	//display the number of form elements in the document
	var name=document.forms['myform']["name"].value;
	if(name.length<5)
	{
		seterror("name","*name lenghth is short");
		result=false;
		

	}
	if(name.length == 0)
	{
		seterror("name", "*name cannot be null");
		result=false;
	}
	var email=document.forms['myform']["email"].value;
	var atindex=email.indexof('@');
	var dotindex=email.lastindexof('.');
	if(atindex<1||dotindex>=email.length-2||dotindex-atindex<3)
	{
		seterror("email","*email is not correct");
		result=false;
		
	}
	
return result;
}