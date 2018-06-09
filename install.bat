@ECHO OFF
ECHO Running command: valet link sportzer
call valet link sportzer
ECHO.
ECHO Installing required dependencies: (npm install)
call npm install
ECHO.
ECHO Installing required dependencies: (composer install)
call composer install
ECHO.
ECHO Migrating database...
call php artisan migrate
ECHO.
ECHO DONE! PRESS ANY KEY TO EXIT...
pause >nul
exit