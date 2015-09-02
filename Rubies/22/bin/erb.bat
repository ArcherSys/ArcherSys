<<<<<<< HEAD
@ECHO OFF
IF NOT "%~f0" == "~f0" GOTO :WinNT
ECHO.This version of Ruby has not been built with support for Windows 95/98/Me.
GOTO :EOF
:WinNT
@"%~dp0ruby.exe" "%~dpn0" %*
=======
@ECHO OFF
IF NOT "%~f0" == "~f0" GOTO :WinNT
ECHO.This version of Ruby has not been built with support for Windows 95/98/Me.
GOTO :EOF
:WinNT
@"%~dp0ruby.exe" "%~dpn0" %*
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
