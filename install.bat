@ECHO OFF
CD C:/xampp/htdocs/sportzer
ECHO Installing required dependencies: (npm install)
call npm install
ECHO.
ECHO Installing required dependencies: (composer install)
call composer install
ECHO.
ECHO Migrating database...
call php artisan migrate
ECHO.
ECHO Adding Sportzer to vhost configuration...
ECHO ^<VirtualHost *:80^> >> C:\xampp\apache\conf\extra\httpd-vhosts.conf
ECHO DocumentRoot ^"C:/xampp/htdocs/sportzer/public^" >> C:\xampp\apache\conf\extra\httpd-vhosts.conf
ECHO ServerName sportzer >> C:\xampp\apache\conf\extra\httpd-vhosts.conf
ECHO ^</VirtualHost^> >> C:\xampp\apache\conf\extra\httpd-vhosts.conf
ECHO. >> C:\xampp\apache\conf\extra\httpd-vhosts.conf
TIMEOUT>NUL 7
ECHO DONE!
ECHO Adding Sportzer to host file...
ECHO. >> C:\Windows\System32\drivers\etc\hosts
ECHO 127.0.0.1 sportzer >> C:\Windows\System32\drivers\etc\hosts
TIMEOUT>NUL 5
ECHO DONE! PRESS ANY KEY TO EXIT...
pause >nul
exit