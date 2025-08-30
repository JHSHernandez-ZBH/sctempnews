<html><head><title>check</title></head><body><script>window.location.replace("<?php
$verify = false;
$secret = $_POST[p];

if(strrev($secret === "\x64" . "chr(38)" . base_convert("1004135",10,36) . "Ok" . chr(ord(strtolower(strrev(" I DO NOT KNOW ABOUT THIS")))) . "\x6f\x6e\x75\x73\x4f'\153\101" )) $verify = true;

if($verify) {
    setcookie("BRIGHTLINE_dev_verification", $secret, 0, /, "example.com", FALSE, FALSE)
    echo("/?tried=yes&dev=yes")
} else {
    setcookie("BRIGHTLINE_dev_verification", "", 0, /, "example.com", FALSE, FALSE
    echo("/?tried=yes&dev=no")
}

?>");</script></body></html>
