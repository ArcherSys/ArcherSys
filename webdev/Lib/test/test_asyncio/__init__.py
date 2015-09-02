<<<<<<< HEAD
<<<<<<< HEAD
import os
from test.support import load_package_tests, import_module

# Skip tests if we don't have threading.
import_module('threading')
# Skip tests if we don't have concurrent.futures.
import_module('concurrent.futures')

def load_tests(*args):
    return load_package_tests(os.path.dirname(__file__), *args)
=======
import os
from test.support import load_package_tests, import_module

# Skip tests if we don't have threading.
import_module('threading')
# Skip tests if we don't have concurrent.futures.
import_module('concurrent.futures')

def load_tests(*args):
    return load_package_tests(os.path.dirname(__file__), *args)
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
import os
from test.support import load_package_tests, import_module

# Skip tests if we don't have threading.
import_module('threading')
# Skip tests if we don't have concurrent.futures.
import_module('concurrent.futures')

def load_tests(*args):
    return load_package_tests(os.path.dirname(__file__), *args)
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
