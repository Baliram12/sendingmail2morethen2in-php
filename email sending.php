<?php 





  if((isset($_REQUEST['fname']) && $_REQUEST['fname']!='')){
        
        
    
$fname=$_REQUEST['fname'];
$email=$_REQUEST['primary_email'];
$phone=$_REQUEST['cont_no'];
//$to = "miteshmk17@gmail.com";


$to="info@hyvaitsolutions.com";
$from = $_REQUEST['primary_email']; 


$message = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hyva IT Solutions</title>


    <style>
     .clear{
        clear: both;
      }
      td{
        width: 50% !important;
      }
  
      .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    padding: 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border-top: 1px solid #f3f3f3 !important;
}
    .main_p{
       width: 50% !important; padding: 0px; border: 1px solid #ccc; margin: 0 auto;
    }
    @media screen and (max-width: 768px){
      .main_p{
       width: 80%;
    }
    }
    </style>
    
    
  </head>
  <body style="padding: 100px 0px;">
    <div class="main_p" style="width="50%" border="0" cellspacing="0" cellpadding="0" align="center" padding:0px;line-height:1px;font-size:1px;margin:0px auto">
      <div class="header" style="background-color: #cc9933; padding: 5px 0; width: 100%;">
          <h1 style="color: #fff; text-align: center; margin: 0px; font-family: verdena;">Hyva IT Solutions</h1>
      </div>
        <div class="center_cont" style="width: 100%;">
          <p style="text-align: center; padding: 20px; font-size: 14px; font-family: arial; line-height: 30px;">
<table class="table">
    <tbody>
      
      <tr>
        <td>Name</td>
        <td>'.$fname .'</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>'.$_REQUEST['primary_email'].'</td>
      </tr>
      <tr>
        <td>Phone</td>
        <td>'.$_REQUEST['cont_no'].'</td>
      </tr>
     
     
    </tbody>
  </table>          </p>
        </div>
      <div class="footer" style="background-color: #cc9933; padding: 5px 0; width: 100%;">
          <p style="color: #fff; text-align: center; margin: 0px; font-family: verdena;">Copyright © 2019 Hyva IT Solutions. All Rights Reserved.</p>
      </div>
    </div>
  </div>
  </body>
</html>
';
 
 
 
 

$alertmsg = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hyva IT Solutions</title>
    <style>
    .main_p{
      width: 50% !important; padding: 0px; border: 1px solid #ccc; margin: 0 auto;
    }
    @media screen and (max-width: 768px){
      .main_p{
      width: 80%;
    }
    }
    </style>
  </head>
  <body style="padding: 100px 0px;">
    <div class="main_p" style="width="50%" border="0" cellspacing="0" cellpadding="0" align="center" padding:0px;line-height:1px;font-size:1px;margin:0px auto">
      <div class="header" style="background-color: #cc9933; padding: 5px 0; width: 100%;">
          <h1 style="color: #fff; text-align: center; margin: 0px; font-family: verdena;">Hyva IT Solutions</h1>
      </div>
        <div class="center_cont" style="width: 100%;">
          <p style="text-align: center; padding: 20px; font-size: 14px; font-family: arial; line-height: 30px;">
            Thank you '.$fname.' . <br/>Your request is recieved.and we are processing your request Our team will contact with you!.
          </p>
        </div>
      <div class="footer" style="background-color: #cc9933; padding: 5px 0; width: 100%;">
          <p style="color: #fff; text-align: center; margin: 0px; font-family: verdena;">Copyright © 2019 Hyva IT Solutions. All Rights Reserved.</p>
      </div>
    </div>
  </div>
  </body>
</html>';

 

    

//$headers="From:Hyva IT Solutions $from"; 
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//$headers .="From: Hyva IT Solutions $to"."\r\n";


  
  $headers1 = "MIME-Version: 1.0" . "\r\n";
 $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 $headers1 .="From: info@hyvaitsolutions.com"."\r\n";
 $headers1 .="CC: ram@hyvaitsolutions.com \r\n";
 $headers1 .="CC: info@hyvaitsolutions.com \r\n";
 $headers1 .="CC: hr@hyvaitsolutions.com \r\n";

  mail($email,$subject,$alertmsg,$headers); 
    if(mail($to,$subject,$message,$headers1)):
    
else:
   
endif;

    }
?>

