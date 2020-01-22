      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Question 4</title>
      </head>
      
      <body>
      
      Your name is <?php echo $_POST["name"]; if ($_POST['name'] == ""){$_POST['name'] = filter_var($_POST['name'], FILTER_SANITIZE_STRING);exit( " <strong> - Please enter name</strong>");}else if(is_numeric($_POST['name'])){exit(" <strong> - That cannot be a name, no numbers!</strong>");}?>.<br />
      
      Your surname is <?php echo $_POST["sur"]; if ($_POST['sur'] == ""){$_POST['sur'] = filter_var($_POST['sur'], FILTER_SANITIZE_STRING);exit (" <strong> - Please enter surname</strong>");}else if(is_numeric($_POST['sur'])){exit(" <strong> - That is not a surname, no numbers!</strong>");}?>.<br />
      
      Your Age is <?php echo $_POST["age"] ; if ($_POST['age'] == ""){$_POST['age'] = filter_var($_POST['age'], FILTER_SANITIZE_STRING);exit (" <strong> - Please enter age</strong>");}else if(!is_numeric($_POST['age'])){exit(" <strong> - Age should be in numerical form!</strong>");}?>.<br />
      
      <?php /*?>if(is_numeric($_POST["name"])){$_POST["name"] = NULL; print str_replace('Your name is', ' - <strong>'.$_POST["name"].' is not a valid name. You need to enter text!</strong>','Your name is ');}<?php */?>
      
      
      <?php
      
      if (!empty($_POST["name"]) && !empty ($_POST["sur"]) && !empty ($_POST["age"])){
        
        $name = $_POST["name"];
        $sur = $_POST["sur"];
        $age = $_POST["age"];
        
		$entries = array($name, $sur, $age);
		$entrieslength = count($entries);
		
		/*for ($i = 0; $i < $entrieslength; $i++)
		{
		if ($entries[$i] == NULL){}	
			}*/
        
      
      if ($age < 10)
      {
      print  "You get in for free.";
      }
      else if (($age >= 10) && ($age <= 15))
      {
      print  "Your ticket costs £2.50.";
      }
      
      else if (($age >= 16) && ($age <= 21))
      {
      print  "Your ticket costs £4.00.";
      }
      
      else if ($age > 54)
      {
      print  "Your ticket costs £2.50.";
      }
      
      else if ($age > 21)
      {
        print "<h1>You get to pay £20.</h1>";	
      }
      }
      else 
      	
      {
        echo "<h2>Please enter all details</h2>";
		}
		
      ?>
      </body>
      </html>