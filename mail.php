<?php

$fp = fopen('testmail.csv','r') or die("can't open file");
#print_r(fgetcsv($fp,1024));
//$csv_line = fgetcsv($fp,1024);
while($csv_line = fgetcsv($fp,1024,',')) {
//$j = count($csv_line);
//    for ($i = 0; $i < $j; $i++) {
//	print_r($csv_line[4]); die;

	$to = $csv_line[4];    
 $FN = $csv_line[1];

$subject = "If You Read Nothing Else Today, Read This Report On Saving Your Drupal Maintenance Cost!";
  $body = "Hello $FN,
  <br><br>
Alan Jacobson, Founder of TweenTribune (first online newspaper for kids) saves every year approximately <strong>60% on his IT maintenance cost</strong> and  utilizes the resources in growing his business.<br><br>

     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. He spends the time in building business strategies instead of moderating the website content.<br><br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Now he worries less about spams and bugs.<br><br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Now he spends more time on analyzing and deciding the content and graphics for his website.<br><br>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. He no more worries about the peak load of 50,000 authenticated users during the peak hours.<br><br>

<a href='http://drushield.com/how-alan-is-saving-60-on-support-cost'> Know How Alan achieved all this and more.</a><br><br>

Regards,<br>
Sarah Gupta<br>
Sr. Drupal Consultant, <br>
DruShield";

 $headers = "From: Sarah@drushield.com\r\n" ."X-Mailer: php";
 $headers  .= 'MIME-Version: 1.0' . "\r\n";
 $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
if (mail($to, $subject, $body, $headers))
        {
       echo("<p>Message successfully sent To $to </p>");
        }
        else
        {
          echo("<p>Message delivery failed...</p>");
        }

	}

	
fclose($fp) or die("can't close file");
?>

