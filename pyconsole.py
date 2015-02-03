import code, curses

def __start__():
  
  asosinterpreter = code.InteractiveConsole()
  asosinterpreter.interact(banner="ArcherSys OS Cashew Pythonic Console")
  mode = raw_input("What console app shall we use today?")
def curses_start():
  """Starts the ArcherSys OS Curses Console App"""
  stdscr = curses.initscr()
  curses.cbreak()
  stdscr.keypad(True)
  curses.noecho()


if mode == "curses":
   curses_start()
elif mode == "ipy":
   __start__()