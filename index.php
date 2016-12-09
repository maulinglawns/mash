<!DOCTYPE html> 
<head> 
<meta charset="utf-8" />
<link rel="shortcut icon" href="images/favicon.ico" >
<title>mash - MAgnuSHell</title>
<style type="text/css"> 
	body {
		background-color: #000
	}
	#console {
		font-family: courier, monospace;
		color: #fff;
		width:750px;
		margin-left:auto;
		margin-right:auto;
		margin-top:80px;
		font-size:14px;
	}
    
    input {
        background-color: #000;
        color: #fff;
        font-family: courier, monospace;
        border: 0px solid;
    }
    
    /* Hack to hide the submit button */
    button {
        position:absolute;
        left:-9999px;
        top:-9999px;
    }
    
    a {
        color: #fff;
    }
</style>
</head>
<body>
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

</body>
</html>

