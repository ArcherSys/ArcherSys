<<<<<<< HEAD
<<<<<<< HEAD
"""
From http://bugs.python.org/issue6717

A misbehaving trace hook can trigger a segfault by exceeding the recursion
limit.
"""
import sys


def x():
    pass

def g(*args):
    if True: # change to True to crash interpreter
        try:
            x()
        except:
            pass
    return g

def f():
    print(sys.getrecursionlimit())
    f()

sys.settrace(g)

f()
=======
"""
From http://bugs.python.org/issue6717

A misbehaving trace hook can trigger a segfault by exceeding the recursion
limit.
"""
import sys


def x():
    pass

def g(*args):
    if True: # change to True to crash interpreter
        try:
            x()
        except:
            pass
    return g

def f():
    print(sys.getrecursionlimit())
    f()

sys.settrace(g)

f()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
"""
From http://bugs.python.org/issue6717

A misbehaving trace hook can trigger a segfault by exceeding the recursion
limit.
"""
import sys


def x():
    pass

def g(*args):
    if True: # change to True to crash interpreter
        try:
            x()
        except:
            pass
    return g

def f():
    print(sys.getrecursionlimit())
    f()

sys.settrace(g)

f()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
