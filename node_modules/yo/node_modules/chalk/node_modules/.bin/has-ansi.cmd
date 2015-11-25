<<<<<<< HEAD
<<<<<<< HEAD
@IF EXIST "%~dp0\node.exe" (
  "%~dp0\node.exe"  "%~dp0\..\has-ansi\cli.js" %*
) ELSE (
  @SETLOCAL
  @SET PATHEXT=%PATHEXT:;.JS;=;%
  node  "%~dp0\..\has-ansi\cli.js" %*
=======
@IF EXIST "%~dp0\node.exe" (
  "%~dp0\node.exe"  "%~dp0\..\has-ansi\cli.js" %*
) ELSE (
  @SETLOCAL
  @SET PATHEXT=%PATHEXT:;.JS;=;%
  node  "%~dp0\..\has-ansi\cli.js" %*
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
@IF EXIST "%~dp0\node.exe" (
  "%~dp0\node.exe"  "%~dp0\..\has-ansi\cli.js" %*
) ELSE (
  @SETLOCAL
  @SET PATHEXT=%PATHEXT:;.JS;=;%
  node  "%~dp0\..\has-ansi\cli.js" %*
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
)