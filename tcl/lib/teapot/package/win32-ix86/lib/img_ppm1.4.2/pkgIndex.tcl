<<<<<<< HEAD

# @@ Meta Begin
# Package img::ppm 1.4.2
# Meta activestatetags ActiveTcl Public Img
# Meta as::build::date 2014-07-21
# Meta as::origin      http://sourceforge.net/projects/tkimg
# Meta category        Tk Image Format
# Meta description     This is support for the ppm image format.
# Meta license         BSD
# Meta platform        win32-ix86
# Meta require         {img::base 1.4-2}
# Meta require         {Tcl 8.4}
# Meta require         {Tk 8.4}
# Meta subject         ppm
# Meta summary         ppm Image Support
# @@ Meta End


if {![package vsatisfies [package provide Tcl] 8.4]} return

package ifneeded img::ppm 1.4.2 [string map [list @ $dir] {
        # ACTIVESTATE TEAPOT-PKG BEGIN REQUIREMENTS

        package require img::base 1.4-2
        package require Tcl 8.4
        package require Tk 8.4

        # ACTIVESTATE TEAPOT-PKG END REQUIREMENTS

            load [file join {@} tkimgppm142.dll]

        # ACTIVESTATE TEAPOT-PKG BEGIN DECLARE

        package provide img::ppm 1.4.2

        # ACTIVESTATE TEAPOT-PKG END DECLARE
    }]
=======

# @@ Meta Begin
# Package img::ppm 1.4.2
# Meta activestatetags ActiveTcl Public Img
# Meta as::build::date 2014-07-21
# Meta as::origin      http://sourceforge.net/projects/tkimg
# Meta category        Tk Image Format
# Meta description     This is support for the ppm image format.
# Meta license         BSD
# Meta platform        win32-ix86
# Meta require         {img::base 1.4-2}
# Meta require         {Tcl 8.4}
# Meta require         {Tk 8.4}
# Meta subject         ppm
# Meta summary         ppm Image Support
# @@ Meta End


if {![package vsatisfies [package provide Tcl] 8.4]} return

package ifneeded img::ppm 1.4.2 [string map [list @ $dir] {
        # ACTIVESTATE TEAPOT-PKG BEGIN REQUIREMENTS

        package require img::base 1.4-2
        package require Tcl 8.4
        package require Tk 8.4

        # ACTIVESTATE TEAPOT-PKG END REQUIREMENTS

            load [file join {@} tkimgppm142.dll]

        # ACTIVESTATE TEAPOT-PKG BEGIN DECLARE

        package provide img::ppm 1.4.2

        # ACTIVESTATE TEAPOT-PKG END DECLARE
    }]
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
