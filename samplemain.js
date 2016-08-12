function validation(){
	var options=document.nextform.options;
if ( ( options[0].checked == false ) && ( options[1].checked == false )&& ( options[2].checked == false )&& 
	( options[3].checked == false )) 
{
alert ( "Please choose one options" ); 
return false;
}
else{
	return true;
}

}


