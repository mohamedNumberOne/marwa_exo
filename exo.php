<!DOCTYPE html>
<html>
<head>
	<title>exercice</title>
	<meta charset="utf-8">
	<style type="text/css">
		.txt-r {
			text-align: right;
			font-weight: bold;
		}
		input[type='text'] {
			 float: right;
		}
		.div {
			width: 250px; 
			 display:inline-block; 
			 margin:20px; 
			 border-left:1px solid gray;
			 padding-left:5px;
			 margin-bottom: 20px;
		}
		.p_rep {
			text-align: right;
			height: 40px;
		}
	</style>
</head>
<body>


<div style="width: 90%; margin: auto; " >
	<?php 

		for ($i=0; $i < 12 ; $i++) { 
			 echo "
					<div    class='div' >	
						<p class='txt-r' > ". rand(12,999) . "  </p>
						<p>x</p>
						<p class='txt-r'> ". rand(2,9) . "  </p>
						<hr>
						<p> <span> = </span>  <input type='text'  class='reponce' maxlength='4' >   </p>
						<p class='p_rep' >...</p>
					</div>
				";
		}

	?>
</div>


<script type="text/javascript">
	

	var reponces = document.querySelectorAll('.reponce');
	
 
	for (var i = 0; i < reponces.length; i++) 
	{

		reponces[i].addEventListener('keyup' , function()
		{
			var divs = document.querySelectorAll('.div');
			 
			var current_div =  this.parentElement.parentElement ;
			
			
			var p1 = current_div.firstElementChild.innerText;
			var p2 = current_div.children[2].innerText;
			var p_rep = current_div.lastElementChild ; 
			// console.log(div_children);
			 console.log(  parseInt( p1  ) + parseInt( p2 ) );
			 	 
			 
			if ( ( parseInt( p1  ) * parseInt( p2 ) ) == (this.value).trim()  && (this.value).trim().length>0   )
			{
				p_rep.style.color= 'green';
				p_rep.textContent= 'صحيح ';
				this.style.border = "1px solid green";
			}else {
				p_rep.style.color= 'red';
				p_rep.textContent= 'خطأ';
				this.style.border = "1px solid red";
			}
		});

	}



</script>


</body>
</html>