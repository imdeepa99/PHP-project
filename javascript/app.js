				function myfunction(){
				var a=document.getElementById("user").value;
				if(a==""){
					document.getElementById("name").innerHTML="please fill your fullname";
					return false;
				}	
				var b=document.getElementById("pass").value;
				
				if(b==""){
					document.getElementById("check").innerHTML="please fill your password";
					return false;
				}
				var c=document.getElementById("address").value;
				if(c==""){
					document.getElementById("area").innerHTML="please fill your address";
					return false;
				}
				var d=document.getElementById("gmail").value;
				if(d.indexOf('@')<=0){
				document.getElementById("mail").innerHTML="invalid @ position";
					return false;	
				}
				if(d.charAt(d.length-4)!='.'){
				document.getElementById("mail").innerHTML="invalid . position";
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
				
				
				var s=document.getElementById("age").value;
				if(s==""){
					document.getElementById("birth").innerHTML="please fill your age";
					return false;
				}
				
			
			var k=document.form.nation;
		for(i=0;i<b.length;i++){
			if(k[i].checked==true)
				return true;
		}
			document.getElemendById("bol").innerHTML="please choose any one";
			return false;
			
				
			var p=document.form.radgender;
		for(i=0;i<p.length;i++){
			if(p[i].checked==true)
				return true;
		}
			document.getElemendById("message").innerHTML="please select any one";
			return false;
			}
			