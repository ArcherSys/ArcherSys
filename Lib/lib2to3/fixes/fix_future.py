<<<<<<< HEAD
<<<<<<< HEAD
"""Remove __future__ imports

from __future__ import foo is replaced with an empty line.
"""
# Author: Christian Heimes

# Local imports
from .. import fixer_base
from ..fixer_util import BlankLine

class FixFuture(fixer_base.BaseFix):
    BM_compatible = True

    PATTERN = """import_from< 'from' module_name="__future__" 'import' any >"""

    # This should be run last -- some things check for the import
    run_order = 10

    def transform(self, node, results):
        new = BlankLine()
        new.prefix = node.prefix
        return new
=======
"""Remove __future__ imports

from __future__ import foo is replaced with an empty line.
"""
# Author: Christian Heimes

# Local imports
from .. import fixer_base
from ..fixer_util import BlankLine

class FixFuture(fixer_base.BaseFix):
    BM_compatible = True

    PATTERN = """import_from< 'from' module_name="__future__" 'import' any >"""

    # This should be run last -- some things check for the import
    run_order = 10

    def transform(self, node, results):
        new = BlankLine()
        new.prefix = node.prefix
        return new
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
"""Remove __future__ imports

from __future__ import foo is replaced with an empty line.
"""
# Author: Christian Heimes

# Local imports
from .. import fixer_base
from ..fixer_util import BlankLine

class FixFuture(fixer_base.BaseFix):
    BM_compatible = True

    PATTERN = """import_from< 'from' module_name="__future__" 'import' any >"""

    # This should be run last -- some things check for the import
    run_order = 10

    def transform(self, node, results):
        new = BlankLine()
        new.prefix = node.prefix
        return new
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
