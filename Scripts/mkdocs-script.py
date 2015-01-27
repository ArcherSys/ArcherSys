#!K:\ArcherVMPeridot\htdocs\Scripts\python.exe
# EASY-INSTALL-ENTRY-SCRIPT: 'mkdocs==0.11.1','console_scripts','mkdocs'
__requires__ = 'mkdocs==0.11.1'
import sys
from pkg_resources import load_entry_point

if __name__ == '__main__':
    sys.exit(
        load_entry_point('mkdocs==0.11.1', 'console_scripts', 'mkdocs')()
    )
