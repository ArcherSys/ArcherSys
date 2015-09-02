<<<<<<< HEAD
#
# test_codecmaps_hk.py
#   Codec mapping tests for HongKong encodings
#

from test import support
from test import multibytecodec_support
import unittest

class TestBig5HKSCSMap(multibytecodec_support.TestBase_Mapping,
                       unittest.TestCase):
    encoding = 'big5hkscs'
    mapfileurl = 'http://www.pythontest.net/unicode/BIG5HKSCS-2004.TXT'

if __name__ == "__main__":
    unittest.main()
=======
#
# test_codecmaps_hk.py
#   Codec mapping tests for HongKong encodings
#

from test import support
from test import multibytecodec_support
import unittest

class TestBig5HKSCSMap(multibytecodec_support.TestBase_Mapping,
                       unittest.TestCase):
    encoding = 'big5hkscs'
    mapfileurl = 'http://www.pythontest.net/unicode/BIG5HKSCS-2004.TXT'

if __name__ == "__main__":
    unittest.main()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
