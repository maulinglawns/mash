/* The javascript source for mash - MAgnuSHell */

/* -- Functions -- */
function setMashCookie(cookieName, cookieValue)
{
    /* Set cookie name. Based on this name, choose css style */
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
        /* The value (if any) is saved in index 1 in the array */
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
    var hasShown = getCookieValue("welcomeShown");
    console.log(hasShown);
    // Get length of welcome text
    var textLength = welcome.length;
    // If we have shown all text, set cookie. We only want to
    // display this _once_!
    if (index >= textLength) {
        shown = true;
        console.log(shown);
        setMashCookie("welcomeShown", "yes");
        return;
    }
    // Emulates typing on a keyboard
    document.getElementById("welcomeText").innerHTML += welcome.charAt(index);
    index++;
    if (welcome.charAt(index-1) == "." || welcome.charAt(index-1) == ":") {
        /* Take longer pause if we type a '.' or ':' */
        var typeTime = setTimeout("typeWriter()", getRandomInt(500, 850));
    } else {
        var typeTime = setTimeout("typeWriter()", getRandomInt(10, 200));
    }
}
/* -- End of functions -- */

var cookieValueCss = getCookieValue("mashCssStyle");
var index = 0;
var welcome = "Welcome to mash - MAgnuSHell. I don't track you: \
all cookies are destroyed after this session. Type 'help' at the \
prompt below for options. Use the menu at the bottom to change terminal \
style.";
var shown = false;

setStylesheet(cookieValueCss);

console.log(document.cookie);
console.log(shown);

