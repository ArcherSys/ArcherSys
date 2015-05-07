#!c:\xampp\htdocs\memdash\Scripts\python.exe
# EASY-INSTALL-ENTRY-SCRIPT: 'psdash==0.6.1','console_scripts','psdash'
__requires__ = 'psdash==0.6.1'
import sys
from pkg_resources import load_entry_point

if __name__ == '__main__':
    sys.exit(
        load_entry_point('psdash==0.6.1', 'console_scripts', 'psdash')()
    )
