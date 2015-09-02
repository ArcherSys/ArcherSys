#!K:\ArcherVMPeridot\htdocs\Scripts\python.exe
# EASY-INSTALL-ENTRY-SCRIPT: 'Leapcast==0.1.3','console_scripts','leapcast'
__requires__ = 'Leapcast==0.1.3'
import sys
from pkg_resources import load_entry_point

if __name__ == '__main__':
    sys.exit(
        load_entry_point('Leapcast==0.1.3', 'console_scripts', 'leapcast')()
    )
