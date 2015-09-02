<<<<<<< HEAD
# Copyright 2008 Armin Ronacher.
# Licensed to PSF under a Contributor Agreement.

"""Fixer for reduce().

Makes sure reduce() is imported from the functools module if reduce is
used in that module.
"""

from lib2to3 import fixer_base
from lib2to3.fixer_util import touch_import



class FixReduce(fixer_base.BaseFix):

    BM_compatible = True
    order = "pre"

    PATTERN = """
    power< 'reduce'
        trailer< '('
            arglist< (
                (not(argument<any '=' any>) any ','
                 not(argument<any '=' any>) any) |
                (not(argument<any '=' any>) any ','
                 not(argument<any '=' any>) any ','
                 not(argument<any '=' any>) any)
            ) >
        ')' >
    >
    """

    def transform(self, node, results):
        touch_import('functools', 'reduce', node)
=======
# Copyright 2008 Armin Ronacher.
# Licensed to PSF under a Contributor Agreement.

"""Fixer for reduce().

Makes sure reduce() is imported from the functools module if reduce is
used in that module.
"""

from lib2to3 import fixer_base
from lib2to3.fixer_util import touch_import



class FixReduce(fixer_base.BaseFix):

    BM_compatible = True
    order = "pre"

    PATTERN = """
    power< 'reduce'
        trailer< '('
            arglist< (
                (not(argument<any '=' any>) any ','
                 not(argument<any '=' any>) any) |
                (not(argument<any '=' any>) any ','
                 not(argument<any '=' any>) any ','
                 not(argument<any '=' any>) any)
            ) >
        ')' >
    >
    """

    def transform(self, node, results):
        touch_import('functools', 'reduce', node)
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
