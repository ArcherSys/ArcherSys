<<<<<<< HEAD
<<<<<<< HEAD
import unittest.test

from test import support


def test_main():
    # used by regrtest
    support.run_unittest(unittest.test.suite())
    support.reap_children()

def load_tests(*_):
    # used by unittest
    return unittest.test.suite()

if __name__ == "__main__":
    test_main()
=======
import unittest.test

from test import support


def test_main():
    # used by regrtest
    support.run_unittest(unittest.test.suite())
    support.reap_children()

def load_tests(*_):
    # used by unittest
    return unittest.test.suite()

if __name__ == "__main__":
    test_main()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
import unittest.test

from test import support


def test_main():
    # used by regrtest
    support.run_unittest(unittest.test.suite())
    support.reap_children()

def load_tests(*_):
    # used by unittest
    return unittest.test.suite()

if __name__ == "__main__":
    test_main()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
