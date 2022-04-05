<?php 
function url($uri = "") {
    $uri = ltrim(preg_replace("#/#", "/", $uri), '/');
    echo "http://localhost/mbti/". $uri;
}
function asset($uri = "") {
    $uri = ltrim(preg_replace("#/#", "/", $uri), '/');
    echo "http://localhost/mbti/". $uri;
}
