<<<<<<< HEAD
<<<<<<< HEAD
# Helper module for testing the skipmodules argument of warnings.warn()

import warnings

def outer(message, stacklevel=1):
    inner(message, stacklevel)

def inner(message, stacklevel=1):
    warnings.warn(message, stacklevel=stacklevel)
=======
# Helper module for testing the skipmodules argument of warnings.warn()

import warnings

def outer(message, stacklevel=1):
    inner(message, stacklevel)

def inner(message, stacklevel=1):
    warnings.warn(message, stacklevel=stacklevel)
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
# Helper module for testing the skipmodules argument of warnings.warn()

import warnings

def outer(message, stacklevel=1):
    inner(message, stacklevel)

def inner(message, stacklevel=1):
    warnings.warn(message, stacklevel=stacklevel)
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
