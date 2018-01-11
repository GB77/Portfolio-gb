<?php
if(isset($_POST['email'])) {
 
   $email_to = "galbari77@gmail.com";
    $email_subject = "Email from galbari.com";
 
    function died($error) {
        
        echo "<div class='error'>I am sorry, but it appears there were some error(s) with the form you submitted.</div> ";
        echo "<br /><br />" .$error;
        echo "<div class='error'><br /><br /> Please go back and fix these errors.</div>";
        echo "<br></br> <a class='back' href='contact.php'>Go Back</a>";
        
        die();
    }
 ?>
    <!DOCTYPE html>
    <html >

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=no; target-densityDpi=device-dpi"
        />

        <title></title>
        <link href="https://fonts.googleapis.com/css?family=Ceviche+One|Courgette|Gloria+Hallelujah|Lobster|Mirza" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="error.css">
        <link rel="stylesheet" type="text/css" href="animate.css">



    </head>
    
    <body>
   
    </body>



    </html>


    <?php
 
    
    if(!isset($_POST['first_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['content'])) {
        died('<div class="error">We are sorry, but there appears to be a problem with the form you submitted.</div>');       
    }
 
     
 
    $first_name = $_POST['first_name']; 
    $last_name = $_POST['last_name'];
    $email_from = $_POST['email']; 
    $comments = $_POST['content']; 
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= '<div class="error">The <span class="red">Email Address</span> you entered does not appear to be valid.<br /></div>';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= '<div class="error">The <span class="red">First Name</span> you entered does not appear to be valid.<br /></div>';
  }
 
 
 
  if(strlen($comments) < 2) {
    $error_message .= '<div class="error">The <span class="red">Content</span> you entered do not appear to be valid.<br /></div>';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below:\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Content: ".clean_string($comments)."\n";
 

$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  

 
}
?>




        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=no; target-densityDpi=device-dpi" />
           

            <title></title>
            <link href="https://fonts.googleapis.com/css?family=Ceviche+One|Courgette|Gloria+Hallelujah|Lobster|Mirza" rel="stylesheet">

            <link rel="stylesheet" type="text/css" href="success.css">
           



        </head>

        <body>
            <div>
            <div class="plane ">
                <h1 >Message <br>Sent !</h1>
            </div>

            <div class="thanks">
                <h1> Thank you for contacting me. I will get back to you as soon as possible !</h1>


            </div>

            <a class="goBack" href="index.php"> Back To Site </a>
        </div>
        </body>

        </html>