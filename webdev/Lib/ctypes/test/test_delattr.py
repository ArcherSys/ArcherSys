<<<<<<< HEAD
import unittest
from ctypes import *

class X(Structure):
    _fields_ = [("foo", c_int)]

class TestCase(unittest.TestCase):
    def test_simple(self):
        self.assertRaises(TypeError,
                          delattr, c_int(42), "value")

    def test_chararray(self):
        self.assertRaises(TypeError,
                          delattr, (c_char * 5)(), "value")

    def test_struct(self):
        self.assertRaises(TypeError,
                          delattr, X(), "foo")

if __name__ == "__main__":
    unittest.main()
=======
import unittest
from ctypes import *

class X(Structure):
    _fields_ = [("foo", c_int)]

class TestCase(unittest.TestCase):
    def test_simple(self):
        self.assertRaises(TypeError,
                          delattr, c_int(42), "value")

    def test_chararray(self):
        self.assertRaises(TypeError,
                          delattr, (c_char * 5)(), "value")

    def test_struct(self):
        self.assertRaises(TypeError,
                          delattr, X(), "foo")

if __name__ == "__main__":
    unittest.main()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
