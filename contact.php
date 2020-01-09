<?php 
if( (isset($_POST['firstname'])&&(isset($_POST['phone']))
&&(isset($_POST['email'])&&$_POST['phone']!="message"))){ 
    $to = 'rhdeepak61@gmail.com';
    $subject = 'Contact - Deepak-Resume';
    $message = '
          <html>
              <head>
                  <title>Query from website</title>
              </head>
              <body>
                  <p><b>Firstname:</b> '.$_POST['firstname'].'</p>
                  <p><b>Phone:</b> '.$_POST['phone'].'</p> 
                  <p><b>Email:</b> '.$_POST['email'].'</p>
                  <p><b>Message:</b> '.$_POST['message'].'</p>                      
              </body>
          </html>'; 
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
  $headers .= "From: Site <omdeep003@gmail.com>\r\n"; 
  mail($to, $subject, $message, $headers);
  
    echo json_encode(array('status' => 'success'));
  } else {
    echo json_encode(array('status' => 'error'));
  }
  
?>