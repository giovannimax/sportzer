@ECHO OFF
ECHO Installing required dependencies: ->(npm install)<-
call npm install
ECHO.
ECHO Installing required dependencies: ->(composer install)<-
call composer install
ECHO.
ECHO DONE! PRESS ANY KEY TO EXIT...
pause >nul
exit