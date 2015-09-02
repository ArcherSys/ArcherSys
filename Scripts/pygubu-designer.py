#!c:\windows\system32\cmd.exe /c python.exe

import os; activate_this=os.path.join(os.path.dirname(os.path.realpath(__file__)), 'activate_this.py'); exec(compile(open(activate_this).read(), activate_this, 'exec'), dict(__file__=activate_this)); del os, activate_this

# encoding: utf8
#
# Copyright 2012-2013 Alejandro Autalan
#
# This program is free software: you can redistribute it and/or modify it
# under the terms of the GNU General Public License version 3, as published
# by the Free Software Foundation.
#
# This program is distributed in the hope that it will be useful, but
# WITHOUT ANY WARRANTY; without even the implied warranties of
# MERCHANTABILITY, SATISFACTORY QUALITY, or FITNESS FOR A PARTICULAR
# PURPOSE.  See the GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License along
# with this program.  If not, see <http://www.gnu.org/licenses/>.
#
# For further info, check  http://pygubu.web.here

"""Script to run Pygubu."""

import sys
import os

# this will be replaced at install time
INSTALLED_BASE_DIR = "C:\xampp\htdocs\Lib\site-packages"

# get the replaced-at-install-time name if exists, or the project one
if os.path.exists(INSTALLED_BASE_DIR):
    project_basedir = INSTALLED_BASE_DIR
else:
    project_basedir = os.path.abspath(os.path.dirname(os.path.dirname(
                                            os.path.realpath(sys.argv[0]))))

if project_basedir not in sys.path:
    sys.path.insert(0, project_basedir)

# first of all, show the versions
print("Running Python %s on %r" % (sys.version_info, sys.platform))
version_file = os.path.join(project_basedir, 'version.txt')

import pygubu
print("Pygubu: v. %s" % (pygubu.__version__,))

from pygubudesigner import main

main.start_pygubu()