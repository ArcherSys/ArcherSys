@ECHO OFF
IF NOT "%~f0" == "~f0" GOTO :WinNT
@"c:\xampp\htdocs\Rubies\22\bin\ruby.exe" "c:/xampp/htdocs/Rubies/22/bin/httpclient" %1 %2 %3 %4 %5 %6 %7 %8 %9
GOTO :EOF
:WinNT
@"c:\xampp\htdocs\Rubies\22\bin\ruby.exe" "%~dpn0" %*
