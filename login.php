<?php

function isHttps() {
    if (array_key_exists("HTTPS", $_SERVER) && 'on' === $_SERVER["HTTPS"]) {
        return true;
    }
    if (array_key_exists("SERVER_PORT", $_SERVER) && 443 === (int) $_SERVER["SERVER_PORT"]) {
        return true;
    }
    if (array_key_exists("HTTP_X_FORWARDED_SSL", $_SERVER) && 'on' === $_SERVER["HTTP_X_FORWARDED_SSL"]) {
        return true;
    }
    if (array_key_exists("HTTP_X_FORWARDED_PROTO", $_SERVER) && 'https' === $_SERVER["HTTP_X_FORWARDED_PROTO"]) {
        return true;
    }
    return false;
}

include_once 'Configs/config.php';
if (isHttps()) {
    $https = 'https://';
} else {
    $https = 'http://';
}
?>

<html>
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script>
        $.ajax({
            method: "GET",
            url: "<?php echo ROOT_PATH; ?>login",
        })
                .done(function (msg) {
                    $('body').html(msg);
                });
    </script>

    <body>

    </body>
</html>