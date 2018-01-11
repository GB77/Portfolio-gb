
<!DOCTYPE html>
<html >

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; minimum-scale=1.0; user-scalable=no; target-densityDpi=device-dpi" />
    

    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Ceviche+One|Courgette|Gloria+Hallelujah|Lobster|Mirza" rel="stylesheet">    
    
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link rel="stylesheet" type="text/css" href="animate.css">
</head>


<body>

<div class="bg">
        <form id="form" name="contactform" method="post" action="send_form_email.php" class="animated bounceInDown">

            <div>
                <label for="first_name">First Name * </label>
            </div>
            <div>
                <input type="text" name="first_name" class="bar" id="firstName">
            </div>
            <div>
                <label for="last_name">Last Name </label>
            </div>
            <div>
                <input type="text" name="last_name" class="bar" id="lastName">
            </div>
            <div>
                <label for="email">Email Address *</label>
            </div>
            <div>
                <input type="text" name="email" class="bar" id="email">
            </div>
            <div>
                <label for="content">Content *</label>
            </div>
            <div>
                <textarea name="content" cols="22" rows="6" class="text" id="content"></textarea>
            </div>
            <div class="button">
                <input type="submit" value="Send" class="submit" onsubmit="validate()">

                <p id="error_para"></p>

                <p> *Required</p>

            </div>

        </form>


        <a class="goBack" href="index.php"> Back To Site </a>

        <img src="envelope.png" class="envelope">




    </div>





</body>




<script> 
    function validate() {
        var ok = true
        var error = "";
        var name = document.getElementById("firstName");
        if (name.value == "") {

            error = "";
            document.getElementById("error_para").innerHTML = error;
            ok = false;

        }


        var email = document.getElementById("email");
        if (email.value == "" || email.value.indexOf("@") == -1) {
            error = " ";
            document.getElementById("error_para").innerHTML = error;
            ok = false;
        }

        var content = document.getElementById("content");
        if (content.value == "" || content.value < 2) {
            error = " ";
            document.getElementById("error_para").innerHTML = error;
            ok = false;
        } else {

        }
        return ok;


    }
</script>

</html>