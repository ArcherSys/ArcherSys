<<<<<<< HEAD
if {[catch {package present Tcl 8.5.0}]} { return }
=======
if {[catch {package present Tcl 8.5.0}]} { return }
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
if {($::tcl_platform(platform) eq "unix") && ([info exists ::env(DISPLAY)]
	|| ([info exists ::argv] && ("-display" in $::argv)))} {
    package ifneeded Tk 8.5.12 [list load [file join $dir .. .. bin libtk8.5.dll] Tk]
} else {
    package ifneeded Tk 8.5.12 [list load [file join $dir .. .. bin tk85.dll] Tk]
}
