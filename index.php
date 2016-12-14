<!DOCTYPE html> 
<head> 
<meta charset="utf-8" />
<link rel="shortcut icon" href="images/favicon.ico" >
<link id="css_styles" rel="stylesheet" type="text/css" href="mash_default.css">
<title>mash - MAgnuSHell</title>
</head>
<body>
<script>
/* Move this to separate file later */
function setMashCookie(cookieName)
{
    /* Set cookie name. Based on this name, choose css style */
    document.cookie = "mashCssStyle=" + cookieName;
}

function getCookieValue(aString)
{
    /* Search for cookie with name aString.
    Return value of cookie if found */
    
    /* Create regex. Search for aString. Save the value inside (.*) */ 
    var regex = new RegExp(aString + "=(.*)");
    /* The result is saved in an array */
    var cArr = regex.exec(document.cookie);
    /* The value (if any) is saved in index 1 in the array */
    var cValue = cArr[1];
    
    if (cValue != "") {
        return cValue;
    }
    
    return "";
}

function setStylesheet(aCookieValue)
{
    /* Change stylesheet based on cookie value */
    switch(aCookieValue) {
        case "mash_retro.css":
            document.getElementById("css_styles").setAttribute("href", aCookieValue);
            break;
        case "mash_inv.css":
            document.getElementById("css_styles").setAttribute("href", aCookieValue);
            break;
        default:
            document.getElementById("css_styles").setAttribute("href", "mash_default.css");
    }
}

var cookieName = "mashCssStyle";
var cookieValue = getCookieValue(cookieName);

setStylesheet(cookieValue);

/* Just for debugging... */
var cookies = document.cookie;
console.log(cookies);
console.log(cookieValue);
</script>
<?php

// Import variables and functions
require_once('mashVarsFuncs.php');
    
// Initalize varibles here
$userInput = "";
$inputError = "";            

// get user input if entered
if (isset($_GET['cmd'])) {
    $userInput = htmlentities($_GET['cmd']);
    // error message on wrong command(s)
    $inputError = "Unknown option '" . $userInput . 
    "'. Type 'help' for more information.";
}

// Handle what has been submitted in this switch
switch ($userInput) {
    case "who":
        $stdout = $who;
        break;
    case "help":
        $stdout = $help;
        break;
    case "man mash":
        $stdout = $shell;
        break;
    case "jobs":
        $stdout = $jobs;
        break;
    case "cv":
        $stdout = $cv;
        break;
    case "more";
        $stdout = $more;
        break;
    case "mash -cl";
    $stdout = $contact;
        break;
    case "rand";
        $stdout = getRand($randArr);
        break;
    default:
        $stdout = $inputError;
}
            
?>

<div id="console">
    <?php 
        if (isset($stdout)) {
            echo "<p>" . $stdout . "</p>"; 
        }
    ?>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="get">
        <p>magnus@wallin:~$ <input type="text" name="cmd" autofocus></p>
        <button type="submit" class="submit">Go</button>
    </form>
</div>

<div id="term_settings">
<a href="" onclick="setMashCookie('mash_default.css')">
<span class="term_link" style="color: #fff; background: black;" title="White text, black backround">default style</span></a>
&middot;
<a href="" onclick="setMashCookie('mash_retro.css')">
<span class="term_link" style="color: #33cc33; background: black;" title="Green text, black backround">retro style</span></a>
&middot;
<a href="" onclick="setMashCookie('mash_inv.css')">
<span class="term_link" style="color: black; background: white;" title="Black text, white backround">inverted</span></a>
</div>

</body>
</html>

