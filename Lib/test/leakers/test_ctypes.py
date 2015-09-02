<<<<<<< HEAD

# Taken from Lib/ctypes/test/test_keeprefs.py, PointerToStructure.test().

from ctypes import Structure, c_int, POINTER
import gc

def leak_inner():
    class POINT(Structure):
        _fields_ = [("x", c_int)]
    class RECT(Structure):
        _fields_ = [("a", POINTER(POINT))]

def leak():
    leak_inner()
    gc.collect()
=======

# Taken from Lib/ctypes/test/test_keeprefs.py, PointerToStructure.test().

from ctypes import Structure, c_int, POINTER
import gc

def leak_inner():
    class POINT(Structure):
        _fields_ = [("x", c_int)]
    class RECT(Structure):
        _fields_ = [("a", POINTER(POINT))]

def leak():
    leak_inner()
    gc.collect()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
