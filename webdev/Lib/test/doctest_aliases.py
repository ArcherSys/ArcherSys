<<<<<<< HEAD
# Used by test_doctest.py.

class TwoNames:
    '''f() and g() are two names for the same method'''

    def f(self):
        '''
        >>> print(TwoNames().f())
        f
        '''
        return 'f'

    g = f # define an alias for f
=======
# Used by test_doctest.py.

class TwoNames:
    '''f() and g() are two names for the same method'''

    def f(self):
        '''
        >>> print(TwoNames().f())
        f
        '''
        return 'f'

    g = f # define an alias for f
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
