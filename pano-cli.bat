@echo off

@setlocal

set PANO_PATH=%~dp0

if "%PHP_COMMAND%" == "" set PHP_COMMAND=php.exe

"%PHP_COMMAND%" "%PANO_PATH%pano-cli" %*

@endlocal

PAUSE