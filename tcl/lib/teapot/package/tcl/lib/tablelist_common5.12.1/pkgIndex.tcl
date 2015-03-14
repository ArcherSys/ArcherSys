
# @@ Meta Begin
# Package tablelist::common 5.12.1
# Meta activestatetags ActiveTcl Public Tklib
# Meta as::build::date 2014-11-27
# Meta as::origin      http://sourceforge.net/projects/tcllib
# Meta license         BSD
# Meta platform        tcl
# @@ Meta End


if {![package vsatisfies [package provide Tcl] 8.4]} return

package ifneeded tablelist::common 5.12.1 [string map [list @ $dir] {
          set dir {@}
        eval "namespace eval ::tablelist { proc DIR {} {return [list $dir]} } ;\
        	 source [list [file join $dir tablelistPublic.tcl]]"

        # ACTIVESTATE TEAPOT-PKG BEGIN DECLARE

        package provide tablelist::common 5.12.1

        # ACTIVESTATE TEAPOT-PKG END DECLARE
    }]
