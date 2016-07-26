function popup11(str){
	console.log(str);
			// alert("str="+str);
               
                if (window.XMLHttpRequest) 
                {
                xmlhttp=new XMLHttpRequest();
                } else
                { 
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                  
                      $("#banking").html(xmlhttp.responseText); 
					 console.log("hiii"+xmlhttp.responseText);
					
					
				
									/*	var myOptions = xmlhttp.responseText;

					var mySelect = $('#banking');
					$.each(myOptions, function(val, text) {
						mySelect.append(
							$('<option></option>').val(val).html(text)
						);
					});*/
                   //  document.getElementById("tbl11").innerHTML=xmlhttp.responseText;
                     
                   
                    
                }
				
            }
        xmlhttp.open("GET","operation.php?"+str,true);
        xmlhttp.send();
        }
	

function popup(){
			// alert("str="+str);
               
                if (window.XMLHttpRequest) 
                {
                xmlhttp=new XMLHttpRequest();
                } else
                { 
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
            xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                  
                      $("#sbanking").html(xmlhttp.responseText);    
                   //  document.getElementById("tbl11").innerHTML=xmlhttp.responseText;
                     
                   
                    
                }
            }
        xmlhttp.open("GET","operation.php?a=aaa",true);
        xmlhttp.send();
        }