<?php
session_start();

if (isset($_SESSION["data"])) {
    foreach ($_SESSION["data"] as $key => $value) {
        echo "$key: $value <br>";
    }
} else {
    echo "Session kosong";
}

session_unset();
session_destroy();