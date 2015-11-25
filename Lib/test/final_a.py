<<<<<<< HEAD
<<<<<<< HEAD
"""
Fodder for module finalization tests in test_module.
"""

import shutil
import test.final_b

x = 'a'

class C:
    def __del__(self):
        # Inspect module globals and builtins
        print("x =", x)
        print("final_b.x =", test.final_b.x)
        print("shutil.rmtree =", getattr(shutil.rmtree, '__name__', None))
        print("len =", getattr(len, '__name__', None))

c = C()
_underscored = C()
=======
"""
Fodder for module finalization tests in test_module.
"""

import shutil
import test.final_b

x = 'a'

class C:
    def __del__(self):
        # Inspect module globals and builtins
        print("x =", x)
        print("final_b.x =", test.final_b.x)
        print("shutil.rmtree =", getattr(shutil.rmtree, '__name__', None))
        print("len =", getattr(len, '__name__', None))

c = C()
_underscored = C()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
"""
Fodder for module finalization tests in test_module.
"""

import shutil
import test.final_b

x = 'a'

class C:
    def __del__(self):
        # Inspect module globals and builtins
        print("x =", x)
        print("final_b.x =", test.final_b.x)
        print("shutil.rmtree =", getattr(shutil.rmtree, '__name__', None))
        print("len =", getattr(len, '__name__', None))

c = C()
_underscored = C()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
