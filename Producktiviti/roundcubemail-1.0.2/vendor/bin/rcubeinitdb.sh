#!/usr/bin/env sh
SRC_DIR="`pwd`"
cd "`dirname "$0"`"
cd "../roundcube/plugin-installer/src/bin"
BIN_TARGET="`pwd`/rcubeinitdb.sh"
cd "$SRC_DIR"
"$BIN_TARGET" "$@"
