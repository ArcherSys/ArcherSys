<<<<<<< HEAD
<<<<<<< HEAD
from lib2to3.fixer_base import BaseFix
from lib2to3.fixer_util import Name

class FixParrot(BaseFix):
    """
    Change functions named 'parrot' to 'cheese'.
    """

    PATTERN = """funcdef < 'def' name='parrot' any* >"""

    def transform(self, node, results):
        name = results["name"]
        name.replace(Name("cheese", name.prefix))
=======
from lib2to3.fixer_base import BaseFix
from lib2to3.fixer_util import Name

class FixParrot(BaseFix):
    """
    Change functions named 'parrot' to 'cheese'.
    """

    PATTERN = """funcdef < 'def' name='parrot' any* >"""

    def transform(self, node, results):
        name = results["name"]
        name.replace(Name("cheese", name.prefix))
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
from lib2to3.fixer_base import BaseFix
from lib2to3.fixer_util import Name

class FixParrot(BaseFix):
    """
    Change functions named 'parrot' to 'cheese'.
    """

    PATTERN = """funcdef < 'def' name='parrot' any* >"""

    def transform(self, node, results):
        name = results["name"]
        name.replace(Name("cheese", name.prefix))
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
