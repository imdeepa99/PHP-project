
				function myfunction(){
				var a=document.getElementById("user").value;
				if(a==""){
					document.getElementById("name").innerHTML="please fill your fullname";
					return false;
				}	
				var b=document.getElementById("pass1").value;
				var c=document.getElementById("pass2").value;
				if(b!=c){
					document.getElementById("check").innerHTML="password are not match";
					return false;
				}	
				var d=document.getElementById("phone").value;
				if(d.length>10){
					document.getElementById("number").innerHTML="length must be 10 degit";
					return false;
				}
				if(isNaN(d)){
					document.getElementById("number").innerHTML="only digits are allowed";
					return false;
					}
				if(d.charAt(0)!=9){
					document.getElementById("number").innerHTML="number should started with digit '9'";
					return false;
					}
					var o=document.getElementById("mail").value;
				if(o.indexOf('@')<=0){
				document.getElementById("email").innerHTML="invalid @ position";
					return false;	
				}
				if(o.charAt(o.length-4)!='.'){
				document.getElementById("email").innerHTML="invalid . position";
					return false;	
				}
				
				}
			