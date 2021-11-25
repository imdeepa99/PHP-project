
				function firstfunction(){
					var x=document.form.Department;
		for(i=0;i<x.length;i++){
			if(x[i].checked==true)
				return true;
		}
		
			document.getElemendById("symbol").innerHTML="please choose any one";
			return false;
			
			var z=document.form.Doctor;
		
		for(i=0;i<z.length;i++){
			if(z[i].checked==true)
				return true;
		}
			document.getElemendById("select").innerHTML="please choose any one";
			return false;
					
					var y=document.form.Time;
		
		for(i=0;i<y.length;i++){
			if(y[i].checked==true)
				return true;
		}
			document.getElemendById("times").innerHTML="please select any time";
			return false;
			
			var l=document.getElementById("use").value;
				if(l==""){
					document.getElementById("name").innerHTML="please fill your fullname";
					return false;
				}	
			
			var d=document.getElementById("ph").value;
				if(d.length>10){
					document.getElementById("num").innerHTML="length must be 10 degit";
					return false;
				}
				if(isNaN(d)){
					document.getElementById("num").innerHTML="only digits are allowed";
					return false;
					}
				if(d.charAt(0)!=9){
					document.getElementById("num").innerHTML="number should started with digit '9'";
					return false;
					}
					var e=document.getElementById("em").value;
				if(e.indexOf('@')<=0){
				document.getElementById("ma").innerHTML="invalid @ position";
					return false;	
				}
				if(e.charAt(e.length-4)!='.'){
				document.getElementById("ma").innerHTML="invalid . position";
					return false;	
				}
				var f=document.getElementById("text").value;
				if(f==""){
					document.getElementById("area").innerHTML="please fill your message";
					return false;
				}	
			}