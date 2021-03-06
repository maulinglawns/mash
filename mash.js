/* The javascript source for mash - MAgnuSHell */

/* ------ Functions ------ */
function setMashCookie(cookieName, cookieValue)
{
    /* Set cookie name and value. */
    document.cookie = cookieName + "=" + cookieValue;
}

function getCookieValue(aString)
{
    /* Search for cookie with name aString.
    Return value of cookie if found */
    
    /* Create regex. Search for aString. Save the value inside () */ 
    var regex = new RegExp(aString + "=([^;]*)");
    /* The result is saved in an array */
    var cArr = regex.exec(document.cookie);
    /* Need to check if cArr is null to avoid TypeError */
    if (cArr) {
        /* The cookie value is saved in index 1 in the array */
        var cValue = cArr[1];
    }
    
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

function getRandomInt(min, max)
{
    // Return an int between min and max
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function typeWriter()
{
    /* Emulates typing on a keyboard */
    if (getCookieValue("welcomeShown") == "yes") {
        /* If we have 'hasShown' cookie, then exit. 
         * We only want welcome text _once_ */
        return;
    }
    // Get length of welcome text
    var textLength = welcome.length;

    if (index >= textLength) {
        /* Set cookie after showing welcome text once */
        setMashCookie("welcomeShown", "yes");
        return;
    }
    
    document.getElementById("welcomeText").innerHTML += welcome.charAt(index);
    index++;
    if (welcome.charAt(index-1) == "." || welcome.charAt(index-1) == ":") {
        /* Take longer pause if we type a '.' or ':' */
        var typeTime = setTimeout("typeWriter()", getRandomInt(500, 850));
    } else {
        var typeTime = setTimeout("typeWriter()", getRandomInt(10, 200));
    }
}
/* ------ End of functions ------ */

var cookieValueCss = getCookieValue("mashCssStyle");
var index = 0;
var welcome = "Welcome to mash - MAgnuSHell. I don't track you: \
all cookies are destroyed after this session. Type 'help' at the \
prompt below for options. Use the menu at the bottom to change terminal \
style.";

// Set style based on this cookie
setStylesheet(cookieValueCss);
