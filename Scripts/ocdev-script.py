#!K:\ArcherVMPeridot\htdocs\Scripts\python.exe
# EASY-INSTALL-ENTRY-SCRIPT: 'ocdev==0.0.19','console_scripts','ocdev'
__requires__ = 'ocdev==0.0.19'
import sys
from pkg_resources import load_entry_point

if __name__ == '__main__':
    sys.exit(
        load_entry_point('ocdev==0.0.19', 'console_scripts', 'ocdev')()
    )
