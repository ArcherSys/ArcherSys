# Secure Container
A simple app for owncloud to store any kind of text encrypted.
Every time you want t view the text, you have to enter a passphrase which is
not stored anywhere.

**Note** This app is using the 
[Stanford Javascript Crypto Library](http://bitwiseshiftleft.github.io/sjcl/)
to en-/decrypt the text on the Client side. Your text is stored encrypted in the
database and can not be readen if you use a Non-SSL secured conection.

# Installation
Place this app in **owncloud/apps/**

If you use git, clone it into **owncloud/apps/secure_container** and run
**git submodule init**; If you updated the module, run **git submodule update**
to make sure the external libraries are updated as well.

## Running tests
After [Installing PHPUnit](http://phpunit.de/getting-started.html) run:

    phpunit tests/