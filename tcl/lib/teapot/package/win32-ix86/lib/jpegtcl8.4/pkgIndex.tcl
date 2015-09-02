<<<<<<< HEAD

# @@ Meta Begin
# Package jpegtcl 8.4
# Meta activestatetags ActiveTcl Public
# Meta as::author      {Jan Nijtmans}
# Meta as::build::date 2014-07-21
# Meta as::origin      http://sourceforge.net/projects/tkimg
# Meta description     A variant of the libjpeg system library made
# Meta description     suitable for direct loading as a Tcl package.
# Meta license         BSD
# Meta platform        win32-ix86
# Meta require         {Tcl 8.4}
# Meta summary         jpeg Support
# @@ Meta End


if {![package vsatisfies [package provide Tcl] 8.4]} return

package ifneeded jpegtcl 8.4 [string map [list @ $dir] {
        # ACTIVESTATE TEAPOT-PKG BEGIN REQUIREMENTS

        package require Tcl 8.4

        # ACTIVESTATE TEAPOT-PKG END REQUIREMENTS

            load [file join {@} jpegtcl84.dll]

        # ACTIVESTATE TEAPOT-PKG BEGIN DECLARE

        package provide jpegtcl 8.4

        # ACTIVESTATE TEAPOT-PKG END DECLARE
    }]
=======

# @@ Meta Begin
# Package jpegtcl 8.4
# Meta activestatetags ActiveTcl Public
# Meta as::author      {Jan Nijtmans}
# Meta as::build::date 2014-07-21
# Meta as::origin      http://sourceforge.net/projects/tkimg
# Meta description     A variant of the libjpeg system library made
# Meta description     suitable for direct loading as a Tcl package.
# Meta license         BSD
# Meta platform        win32-ix86
# Meta require         {Tcl 8.4}
# Meta summary         jpeg Support
# @@ Meta End


if {![package vsatisfies [package provide Tcl] 8.4]} return

package ifneeded jpegtcl 8.4 [string map [list @ $dir] {
        # ACTIVESTATE TEAPOT-PKG BEGIN REQUIREMENTS

        package require Tcl 8.4

        # ACTIVESTATE TEAPOT-PKG END REQUIREMENTS

            load [file join {@} jpegtcl84.dll]

        # ACTIVESTATE TEAPOT-PKG BEGIN DECLARE

        package provide jpegtcl 8.4

        # ACTIVESTATE TEAPOT-PKG END DECLARE
    }]
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
