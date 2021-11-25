function myfunction{
			var x=document.form.department;
		for(i=0;i<x.length;i++){
			if(x[i].checked==true)
				return true;
		}
		
			document.getElemendById("symbol").innerHTML="please choose any one";
			return false;
			
			var z=document.form.doctor;
		
		for(i=0;i<z.length;i++){
			if(z[i].checked==true)
				return true;
		}
			document.getElemendById("select").innerHTML="please choose any one";
			return false;
					
					var y=document.form.time;
		
		for(i=0;i<y.length;i++){
			if(y[i].checked==true)
				return true;
		}
			document.getElemendById("times").innerHTML="please select any time";
			return false;
		
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
				var a=document.getElementById("user").value;
				if(a==""){
					document.getElementById("name").innerHTML="please fill your fullname";
					return false;
				}	
				
				}
				
				function firstfunction(){
				var a=document.getElementById("user").value;
				if(a==""){
					document.getElementById("name").innerHTML="please fill your fullname";
					return false;
				}	
				var b=document.getElementById("pass").value;
				
				if(b==""){
					document.getElementById("check").innerHTML="please fill your fullname";
					return false;
				}
				var c=document.getElementById("address").value;
				if(c==""){
					document.getElementById("area").innerHTML="please fill your fullname";
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
				
				}
				var c=document.getElementById("age").value;
				if(c==""){
					document.getElementById("birth").innerHTML="please fill your age";
					return false;
				}
				
				
			var a=document.form.radgender;
		for(i=0;i<a.length;i++){
			if(a[i].checked==true)
				return true;
		}
			document.getElemendById("message").innerHTML="please select any one";
			return false;
			var b=document.form.nation;
		for(i=0;i<b.length;i++){
			if(b[i].checked==true)
				return true;
		}
			document.getElemendById("symbol").innerHTML="please select any one";
			return false;
			}
			