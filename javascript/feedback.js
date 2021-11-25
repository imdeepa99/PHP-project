				function yourfunction(){
				var m=document.getElementById("user").value;
				if(m==""){
					document.getElementById("name").innerHTML="please fill your fullname";
					return false;
				}	
				
				
				var n=document.getElementById("phone").value;
				if(n.length>10){
					document.getElementById("number").innerHTML="length must be 10 degit";
					return false;
				}
				if(isNaN(n)){
					document.getElementById("number").innerHTML="only digits are allowed";
					return false;
					}
				if(n.charAt(0)!=9){
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
				var m=document.getElementById("message").value;
				if(m==""){
					document.getElementById("area").innerHTML="please fill your message";
					return false;
				}	
				}