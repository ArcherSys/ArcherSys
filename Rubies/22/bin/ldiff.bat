@ECHO OFF
IF NOT "%~f0" == "~f0" GOTO :WinNT
@"k:\ArcherVMPeridot\htdocs\Rubies\22\bin\ruby.exe" "k:/ArcherVMPeridot/htdocs/Rubies/22/bin/ldiff" %1 %2 %3 %4 %5 %6 %7 %8 %9
GOTO :EOF
:WinNT
@"k:\ArcherVMPeridot\htdocs\Rubies\22\bin\ruby.exe" "%~dpn0" %*
