#!C:\xampp\htdocs\Scripts\python.exe
# EASY-INSTALL-ENTRY-SCRIPT: 'watchdog==0.8.2','console_scripts','watchmedo'
__requires__ = 'watchdog==0.8.2'
import sys
from pkg_resources import load_entry_point

if __name__ == '__main__':
    sys.exit(
        load_entry_point('watchdog==0.8.2', 'console_scripts', 'watchmedo')()
    )
