/* The javascript source for mash - MAgnuSHell */

/* -- Functions -- */
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
/* -- End of functions -- */


var cookieName = "mashCssStyle";
var cookieValue = getCookieValue(cookieName);

setStylesheet(cookieValue);
