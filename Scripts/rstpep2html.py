<<<<<<< HEAD
#!C:\xampp\htdocs\Scripts\python.exe
=======
#!K:\ArcherVMPeridot\htdocs\Scripts\python.exe
>>>>>>> 029169e0ae62bb1a8453d802eef1cac663806832

# $Id: rstpep2html.py 4564 2006-05-21 20:44:42Z wiemann $
# Author: David Goodger <goodger@python.org>
# Copyright: This module has been placed in the public domain.

"""
A minimal front end to the Docutils Publisher, producing HTML from PEP
(Python Enhancement Proposal) documents.
"""

try:
    import locale
    locale.setlocale(locale.LC_ALL, '')
except:
    pass

from docutils.core import publish_cmdline, default_description


description = ('Generates (X)HTML from reStructuredText-format PEP files.  '
               + default_description)

publish_cmdline(reader_name='pep', writer_name='pep_html',
                description=description)
