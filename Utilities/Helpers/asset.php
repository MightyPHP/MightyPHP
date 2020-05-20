<?php
function asset($url){
    return env('APP_URL', '/').$url;
}