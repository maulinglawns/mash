<?php
// Variables
$who = "INFORMATION ON AUTHOR:<br />
        Name: <strong>Magnus Wallin</strong><br />
        Species: <strong>Human</strong><br />
        Gender: <strong>Male</strong><br />
        Date of Birth: <strong>1975</strong><br />
        Nationality: <strong>Swedish</strong><br />
        Current location: <strong>Solna, Sweden</strong>";

$shell = "THIS WEBSITE:<br />
         Written by Magnus Wallin, with:<br />
         <strong>html</strong>, <strong>css</strong> and 
         <strong>php</strong><br />
         Developed with:<br />
         <strong>GNU/Linux</strong>, <strong>Nginx</strong>, 
         <strong>vim</strong> and <strong>Geany</strong><br />";
        
$help = "<strong>Magnus shell</strong><br />
         <table>
         OPTIONS:
         <tr><td class=\"tdLeft\">'help'</td><td> - show this help</td></tr>
         <tr><td>'who'</td><td> - show basic info about author</td></tr>
         <tr><td>'man mash'</td><td> - info about this website</td></tr>
         <tr><td>'jobs'</td><td> - show my professional work history</td><td>
         <tr><td>'cv'</td><td> - show my educational history</td><td>
         <tr><td>'more'</td><td> - the author beyond the basics</td><td>
         <tr><td>'mash -cl'</td><td> - contact info and links</td><td>
         <tr><td>'rand'</td><td> - random (useless?) info about author</td><td>
         </table>";
         
$jobs = "JOBS:<br />
         <strong>Current position:</strong><br />
         &middot; System administrator (and more!) at
         <a href=\"http://rehnstroem.se\" target=\"_blank\">this place</a><br />
         <strong>Previous:</strong><br />
         &middot; IT-consultant at Svenska antikvariatf&ouml;reningen (2011-12)<br />
         &middot; Webmaster at Bokbinderi Roger Johansson (2011)<br />
         &middot; Shop assistant at Johans Skivb&ouml;rs (1996-2000)<br />
         &middot; Shop assistant at Antikvariat Morris (1995-2000)<br />
         &middot; Machine operator at Scania (1994-2000)<br />
         &middot; Experimental Technician at AstraZeneca (1992-1993)<br />";
         
$cv = "EDUCATION:<br />
        <strong>Essentials of Linux System administration (LFS201)</strong><br />
        The Linux Foundation, 2016<br />
        <strong>Programming and problem solving with Python</strong><br />
        Blekinge Institute of Technology, 2015<br />
        <strong>Linux and small scale networks</strong><br />
        University of G&auml;vle, 2014<br />
        <strong>Databases and object oriented programming in PHP</strong><br />
        Blekinge Institute of Technology, 2012<br />
        <strong>C++</strong><br />
        Uppsala university, 2011<br />
        <strong>Practical Linux</strong><br />
        Mid Sweden University, 2010<br />
        <strong>CSS based web design</strong><br />
        Ume&aring; University, 2010<br />
        <strong>Economic history</strong><br />
        Stockholm University, 2000";

$contact = "<strong>CONTACT:</strong><br />
    e-mail 1: <a href=\"mailto:magnuswallin@tutanota.com\">magnuswallin@tutanota.com</a>
    (I prefer encrypted e-mails, thank you!)<br />
    e-mail 2: <a href=\"mailto:magnuswallin@zoho.com\">magnuswallin@zoho.com</a><br />
    phone: upon request and/or by reference only<br />
    <strong>LINKS:</strong><br />
    My LinkedIn page: <a href=\"https://se.linkedin.com/in/wallinmagnus\" target=\"_blank\">
    https://se.linkedin.com/in/wallinmagnus</a><br />
    UNIX & Linux Stack Exchange: <a href=\"https://unix.stackexchange.com/users/191550/maulinglawns\" target=\"_blank\">
    https://unix.stackexchange.com/users/191550/maulinglawns</a></br />
    <a href=\"http://www.linuxquestions.org\" target=\"_blank\">linuxquestions.org</a>";
        
$more = "MORE INFORMATION ON AUTHOR:<br />
         <strong>Language Proficiency:</strong><br />
         &middot; Swedish - Native or Bilingual Proficiency<br />
         &middot; English - Native or Bilingual Proficiency<br />
         &middot; Spanish - Elementary Proficiency<br />
         <strong>Preferred coding languages:</strong><br />
         &middot; Bash<br />
         &middot; Python 3<br />
         &middot; Php<br />
         &middot; C<br />
         &middot; C++<br />
         <strong>Skills:</strong><br />
         &middot; GNU/Linux<br />
         &middot; Linux system administration<br />
         &middot; macOS<br />
         &middot; Web design<br/>
         &middot; Wordpress<br />
         &middot; GIMP<br />
         &middot; InDesign<br />
         &middot; Typography<br />
         &middot; Office administration<br />
         <strong>Interests:</strong><br />
         &middot; GNU/Linux<br />
         &middot; Hacking (per <a href=\"https://is.gd/T5juSr\" target=\"_blank\">this definition</a>)<br />
         &middot; Books (I read more than anyone I know)<br />
         &middot; Music<br />
         &middot; Working out<br />
         <strong>Driver's license:</strong><br />
         &middot; Yes (B)";
         
$randArr = array(
                "I have a titanium rod in my left wrist",
                "Only one of my tattoos are in colour",
                "My favourite football (soccer) team is AIK Solna",
                "The best book I've ever read is 'America' by Franz Kafka",
                "I don't drink alcohol, the strongest drug I use is nicotine (snus)",
                "My favourite beverage is cranberry juice",
                "I can play the drums, guitar, bass guitar and keyboard",
                "Most of my T-shirts are black",
                "'By the time I get to Arizona' is my favourite Public Enemy song",
                "I have seen Bruce Springsteen live two times",
                "Eating jalapenos (or REALLY spicy food in general) is no longer an option",
                "The most I have ever bench pressed was 95 kilos (209 pounds)",
                "Coffee is essential!",
                );
                
// Functions
function getRand($anArray) 
{
    // get random string from an array and return it
    $key = array_rand($anArray, 1);
    return $anArray[$key];
};
    
?>
