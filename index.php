<html><head><title>not here yet</title></head><body><p>brightline currently in dev</p><?php
if ($_GET["tried"] = "yes") {
  if ($_GET["dev"] = "yes") {
    echo("<p>dev mode enabled!</p>")
  } else {
    echo("<p>incorrect password</p>")
  }
} else {
  echo("<form action=\"/check.php\" method=\"post\" autocomplete=\"off\"><input type=\"password\" id=\"p\" name=\"p\"><input type=\"submit\" value=\"enable dev mode\"></form>")
}
?></body></html>
