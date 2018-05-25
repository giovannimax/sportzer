@ECHO OFF
CD  %~dp0
ECHO Applying localhostfix...
ECHO ^<VirtualHost *:80^> >> C:\xampp\apache\conf\extra\httpd-vhosts.conf
ECHO DocumentRoot ^"C:/xampp/htdocs/^" >> C:\xampp\apache\conf\extra\httpd-vhosts.conf
ECHO ServerName localhost >> C:\xampp\apache\conf\extra\httpd-vhosts.conf
ECHO ^</VirtualHost^> >> C:\xampp\apache\conf\extra\httpd-vhosts.conf
ECHO. >> C:\xampp\apache\conf\extra\httpd-vhosts.conf
ECHO. >> C:\Windows\System32\drivers\etc\hosts
ECHO 127.0.0.1 localhost >> C:\Windows\System32\drivers\etc\hosts
TIMEOUT>NUL 5
ECHO DONE!
PAUSE
EXIT