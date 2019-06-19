<?php
// Set timezone
date_default_timezone_set("UTC");

// Default index file
define("DIRECTORY_INDEX", "index.html");

// if requesting a directory then serve the default index
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// Routing. All paths are routed to this file by the .htaccess config, then we sort them here.
if($path == "/gallery") {
    include("gallery.html");
} else if($path == "/about") {
    include("about.html");
} else if($path == "/blog") {
    include("blog.html");
} else if(substr($path, 0, 6) === "/blog/") {
    $post = explode("/", $path)[2]; // The html filename of the blog post
    include("posts/" . $post);
}
// If none of above, just render index.html


// // If the file exists then return false and let the server handle it
// if (file_exists($_SERVER["DOCUMENT_ROOT"] . $path)) {
//     return false;
// }