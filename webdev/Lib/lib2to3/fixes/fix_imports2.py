<<<<<<< HEAD
<<<<<<< HEAD
"""Fix incompatible imports and module references that must be fixed after
fix_imports."""
from . import fix_imports


MAPPING = {
            'whichdb': 'dbm',
            'anydbm': 'dbm',
          }


class FixImports2(fix_imports.FixImports):

    run_order = 7

    mapping = MAPPING
=======
"""Fix incompatible imports and module references that must be fixed after
fix_imports."""
from . import fix_imports


MAPPING = {
            'whichdb': 'dbm',
            'anydbm': 'dbm',
          }


class FixImports2(fix_imports.FixImports):

    run_order = 7

    mapping = MAPPING
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
"""Fix incompatible imports and module references that must be fixed after
fix_imports."""
from . import fix_imports


MAPPING = {
            'whichdb': 'dbm',
            'anydbm': 'dbm',
          }


class FixImports2(fix_imports.FixImports):

    run_order = 7

    mapping = MAPPING
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
