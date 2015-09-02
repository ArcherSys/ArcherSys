<<<<<<< HEAD
<<<<<<< HEAD
import os
import unittest
from test import support

# skip tests if _ctypes was not built
ctypes = support.import_module('ctypes')
ctypes_symbols = dir(ctypes)

def need_symbol(name):
    return unittest.skipUnless(name in ctypes_symbols,
                               '{!r} is required'.format(name))

def load_tests(*args):
    return support.load_package_tests(os.path.dirname(__file__), *args)
=======
import os
import unittest
from test import support

# skip tests if _ctypes was not built
ctypes = support.import_module('ctypes')
ctypes_symbols = dir(ctypes)

def need_symbol(name):
    return unittest.skipUnless(name in ctypes_symbols,
                               '{!r} is required'.format(name))

def load_tests(*args):
    return support.load_package_tests(os.path.dirname(__file__), *args)
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
import os
import unittest
from test import support

# skip tests if _ctypes was not built
ctypes = support.import_module('ctypes')
ctypes_symbols = dir(ctypes)

def need_symbol(name):
    return unittest.skipUnless(name in ctypes_symbols,
                               '{!r} is required'.format(name))

def load_tests(*args):
    return support.load_package_tests(os.path.dirname(__file__), *args)
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
