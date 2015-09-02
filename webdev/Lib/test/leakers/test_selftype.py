<<<<<<< HEAD
# Reference cycles involving only the ob_type field are rather uncommon
# but possible.  Inspired by SF bug 1469629.

import gc

def leak():
    class T(type):
        pass
    class U(type, metaclass=T):
        pass
    U.__class__ = U
    del U
    gc.collect(); gc.collect(); gc.collect()
=======
# Reference cycles involving only the ob_type field are rather uncommon
# but possible.  Inspired by SF bug 1469629.

import gc

def leak():
    class T(type):
        pass
    class U(type, metaclass=T):
        pass
    U.__class__ = U
    del U
    gc.collect(); gc.collect(); gc.collect()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
