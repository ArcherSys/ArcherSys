<<<<<<< HEAD
<<<<<<< HEAD
from .. import util as test_util
from . import util

machinery = test_util.import_importlib('importlib.machinery')

import collections
import sys
import unittest


class PathHookTests:

    """Test the path hook for extension modules."""
    # XXX Should it only succeed for pre-existing directories?
    # XXX Should it only work for directories containing an extension module?

    def hook(self, entry):
        return self.machinery.FileFinder.path_hook(
                (self.machinery.ExtensionFileLoader,
                 self.machinery.EXTENSION_SUFFIXES))(entry)

    def test_success(self):
        # Path hook should handle a directory where a known extension module
        # exists.
        self.assertTrue(hasattr(self.hook(util.PATH), 'find_module'))

Frozen_PathHooksTests, Source_PathHooksTests = test_util.test_both(
        PathHookTests, machinery=machinery)


if __name__ == '__main__':
    unittest.main()
=======
from .. import util as test_util
from . import util

machinery = test_util.import_importlib('importlib.machinery')

import collections
import sys
import unittest


class PathHookTests:

    """Test the path hook for extension modules."""
    # XXX Should it only succeed for pre-existing directories?
    # XXX Should it only work for directories containing an extension module?

    def hook(self, entry):
        return self.machinery.FileFinder.path_hook(
                (self.machinery.ExtensionFileLoader,
                 self.machinery.EXTENSION_SUFFIXES))(entry)

    def test_success(self):
        # Path hook should handle a directory where a known extension module
        # exists.
        self.assertTrue(hasattr(self.hook(util.PATH), 'find_module'))

Frozen_PathHooksTests, Source_PathHooksTests = test_util.test_both(
        PathHookTests, machinery=machinery)


if __name__ == '__main__':
    unittest.main()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
from .. import util as test_util
from . import util

machinery = test_util.import_importlib('importlib.machinery')

import collections
import sys
import unittest


class PathHookTests:

    """Test the path hook for extension modules."""
    # XXX Should it only succeed for pre-existing directories?
    # XXX Should it only work for directories containing an extension module?

    def hook(self, entry):
        return self.machinery.FileFinder.path_hook(
                (self.machinery.ExtensionFileLoader,
                 self.machinery.EXTENSION_SUFFIXES))(entry)

    def test_success(self):
        # Path hook should handle a directory where a known extension module
        # exists.
        self.assertTrue(hasattr(self.hook(util.PATH), 'find_module'))

Frozen_PathHooksTests, Source_PathHooksTests = test_util.test_both(
        PathHookTests, machinery=machinery)


if __name__ == '__main__':
    unittest.main()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
