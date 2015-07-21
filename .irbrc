require 'irb/completion'

IRB.conf[:IRB_NAME]="arrby"
IRB.conf[:MATH_MODE]=false
IRB.conf[:INSPECT_MODE]=true
IRB.conf[:IRB_RC] = nil
IRB.conf[:BACK_TRACE_LIMIT]=16
IRB.conf[:USE_LOADER] = false
IRB.conf[:USE_READLINE] = nil
IRB.conf[:SAVE_HISTORY] = 1000
IRB.conf[:USE_TRACER] = false
IRB.conf[:IGNORE_SIGINT] = true
IRB.conf[:IGNORE_EOF] = false
IRB.conf[:PROMPT_MODE] = :ARCHERVMCASHEW_PROMPT
IRB.conf[:PROMPT] [:ARCHERVMCASHEW_PROMPT] = {
	:AUTO_INDENT => true,
	:PROMPT_I => 'ARRBY>> ',
	:PROMPT_S => '??>> ',
	:PROMPT_C => '??>>??>>',
	:RETURN => "   ==>%s\n"
}

IRB.conf[:DEBUG_LEVEL]=0

