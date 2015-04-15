<?php
//2014 blog script. this blog script is meant to serve as the index (home) page to a blog on a Linux PHP-powered web server. In an extremely simple sense I built it to replace my self-hosted WordPress installation. 
//Instructions: 1. write blog posts as .html files, one .html file per blog post. 2. In the same directory as the blog posts, put this .php file. 3. This .php file scans the directory for .html files and prints out on the page a hyperlink to each. 4. This script alphabetizes the list of hyperlinks, therefore if one makes sure to name each .html file blog post starting with "YYYY-MM-DD...", then this script by nature of alphabetizing them, puts them in date order.
//**********
// start redirect an old wordpress-powered blog post url to point to its new location.
//if ( $_GET['p'] == '893' )
//{
//header("Location: http://wieldlinux.com/2014-11-17-support-engineer-professional-references.html");
//die();
//}
// end redirect.

?>


<p>(blog title) - (blog subtitle)</p>

<?php
//scan the current directory
$diry = "./";

//find .html files
$docs = glob($diry . "*.html");

// Sorts files high to low
arsort($docs);

//print a hyperlink to each .html file, one per line
foreach($docs as $string)
{
    echo '<a href="' . $string . '"/>' . $string . '</a></br>';
}


?>
