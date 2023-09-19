<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Potluck Sign Up Sheet</title>
</head>
<body onload="ajaxFunction()">    
    <script language = "javascript" type = "text/javascript">
    // get the form element
    var form = document.getElementById("signup");

    // add an event listener for the submit event
    form.addEventListener("Submit", function(event) {
        // prevent the default form submission behavior
        event.preventDefault();
    });

    //Browser Support Code
    function ajaxFunction(){
    var ajaxRequest;  // The variable that makes Ajax possible!
    
    ajaxRequest = new XMLHttpRequest();
    var formData = new FormData(document.getElementById("signup"));
    
    // Create a function that will receive data sent from the server and will update
    // the div section in the same page.
            
    ajaxRequest.onreadystatechange = function(){
        if(ajaxRequest.readyState == 4){
            var ajaxDisplay = document.getElementById('ajaxDiv');
            ajaxDisplay.innerHTML = ajaxRequest.responseText;
        }
    }
    ajaxRequest.open("POST", "signedup.php", true);
    ajaxRequest.send(formData);
    }

    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

    </script>
    <h2>Enter your name and what food you're bringing!</h2>
    <form method="post" id="signup">
        <table>
            <tr><td>Name: </td><td><input type="text" name="name" id="name" autofocus required> </td></tr>
            <tr><td>Item: </td><td><input type="text" name="items" id="items" required> </td></tr>
            <tr><td colspan="2">
            <input type="button" name="Submit" id="Submit" value="Submit" onclick="ajaxFunction()">
            <input type="Reset" name="Reset" id="Reset" value="Reset">
            </td>
            </tr>
        </table>
        <div id='ajaxDiv'> </div>
    </form>

</body>

<?php 
// if (!isset($_SESSION["potluck"])) {
//     header("Location: index.php");
//     die();
// }


?>

</html>