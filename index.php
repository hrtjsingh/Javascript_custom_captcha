<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Custom Captcha</title>
</head>
<body>
	<input type="text" name="captcha_genrated" id="captcha_genrated" style="color:black; font-family: 'Times New Roman, Times, serif';" disabled> 
	<input type="text" name="captcha_input" id="captcha_input" style="color:black; font-family: 'Times New Roman, Times, serif';">
	<button onclick="check()">Click</button>
	<button onclick="reset()">Reset</button>
<script type="text/javascript">
//function source https://stackoverflow.com/questions/1349404/generate-random-string-characters-in-javascript
	function makeid(length) {
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
	return result;
}
//function end
document.getElementById("captcha_genrated").value=makeid(6);
function check(){
	var captcha_genrated = document.getElementById("captcha_genrated").value;
	var captcha_input = document.getElementById("captcha_input").value

if(captcha_input.length>0){
	if(captcha_genrated===captcha_input){
	alert("Captcha Matched");
}else{
	alert("Captcha Not Matched Try Again");
	document.getElementById("captcha_input").value= "";
	document.getElementById("captcha_genrated").value=makeid(6);

}
}else{
	alert("Please Enter Captcha");
}
}
function reset(){
	document.getElementById("captcha_genrated").value=makeid(6);
	document.getElementById("captcha_input").value= "";
}
</script>
</body>
</html>
