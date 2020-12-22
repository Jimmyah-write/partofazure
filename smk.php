
  
  <!DOCTYPE html>
      <html>
       <head>
       <body>
  <title>calling the css file</title>
       <link rel ="stylesheet" href = "style.css">
	   </head>
        
            <p><h3 align = "center"><u>Are you a smoker?</u></h3>
       <p> If yes, you have already heared smoking is deteriorating your health but there is more to that <br>
        Smoking is draining your pocket too,have a look to the following demonestration you will find out how</p>
	                                     <br></p>
		
       <form method="post">
      <form action=" " method="post">
  <label for="fname">Cigaretts per day:</label>
  <input type="number" id="fname" name="NCIGAR"placeholder = "Enter average" width="10"><br><br>
  <label for="lname">Unit price in birr:</label>
  <input type="number" id="lname" name="PCIGAR"placeholder = "Unit price"><br><br>
  <label for="fname">Years you smoked:</label>
  <input type="number" id="lname" name="NYEAR"placeholder = "NUMBER OF YEARS"><br><br>
  <input type="submit" name ="submit" value="Submit">
  <br>
      </form>	
	  </body>
	  </html>
    
  

	  <?php
	   
	
    if(isset($_POST['submit'])){
		
   $numberofcigareet = $_POST['NCIGAR'];
   $unitprice = $_POST['PCIGAR'];
   $yearssmoked = $_POST['NYEAR'];
   $totalprice;
   
    $calcweekyear = $numberofcigareet*$unitprice*365;
	
	//$totalprice=$calcweekyear*1.6*4;
	
	$tenyear = $calcweekyear*10;
	$entered = $yearssmoked*$calcweekyear;
   echo "<br>";
  echo  "<u>****Your Inputs****</u><br>";
  echo "It seems you smoked $numberofcigareet cigarette per day on average for the last $yearssmoked years<br>"; 
  echo "Each cigarette costs you $unitprice Ethiopian birr!<br>"; 
  echo "<u><b>you might have serprised with the outcome</b></u><br>";
  echo "Smoking costs you $entered :for the last $yearssmoked years<br>";
  echo "smoking would cost you $tenyear Ethiopian birr in ten years alone<br><br>";
	 

    $calcweekyear = $numberofcigareet*$unitprice*365;
	
	$totalprice=$entered*1.6*$yearssmoked/100+$entered;
	echo "<u><h3>What could you have achieved instead<br></h3></u>";	
	 if($totalprice <5000){
		 echo "you would have<u><b>$totalprice <br></b></u> if you could have saved the money on bank with the interest";
	}
	else if($totalprice >5000 && $totalprice<10000){
		
		echo "you would have <u><b>$totalprice <br></b></u>if you could have saved the money on bank with the interest";
	}
	else if($totalprice>10000 && $totalprice<20000){
		echo "you would have <u><b>$totalprice <br>br</b></u> if you could have saved it on bank with the interest";
	}
	else if($totalprice>20000 && $totalprice<35000){
		echo "you would have <u><b>$totalprice <br></b></u> if you could have saved it on bank with the interest";
	}
	else if($totalprice>35000 && $totalprice<2000000){
		echo "you would have <u><b>$totalprice</b></u> if you could have saved it on bank with the interest";
	}
	
	else{
		echo "Your input is not feasible";
	}
	//return 0;
	echo "<br><br>";
	echo "<B>DO YOU WISH TO STOP SMOKING, ITS NOT LATE YET CLICK ON THE LINK BELOW AND FINDOUT</B><br>";
	echo "<a href=https://cbqmethod.com/stop-smoking-best-way-co2lpt7/?utm_source=bing
	&utm_medium=cpc&utm_campaign=ma-highintent-web1&lsource=msads&route=routegh&ofr=2p1&path=xweb1&optred=web1thx
	&opg=ps37&grp=27&grpvar=27a&utm_source=bing&utm_medium=cpc&msclkid=df2e68d051bf1f7a78683730dcde431e>click here</a>";
	}
	
		?>
					
		
			
		