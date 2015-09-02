<<<<<<< HEAD
class Delegator:

    # The cache is only used to be able to change delegates!

    def __init__(self, delegate=None):
        self.delegate = delegate
        self.__cache = set()

    def __getattr__(self, name):
        attr = getattr(self.delegate, name) # May raise AttributeError
        setattr(self, name, attr)
        self.__cache.add(name)
        return attr

    def resetcache(self):
        for key in self.__cache:
            try:
                delattr(self, key)
            except AttributeError:
                pass
        self.__cache.clear()

    def setdelegate(self, delegate):
        self.resetcache()
        self.delegate = delegate
=======
class Delegator:

    # The cache is only used to be able to change delegates!

    def __init__(self, delegate=None):
        self.delegate = delegate
        self.__cache = set()

    def __getattr__(self, name):
        attr = getattr(self.delegate, name) # May raise AttributeError
        setattr(self, name, attr)
        self.__cache.add(name)
        return attr

    def resetcache(self):
        for key in self.__cache:
            try:
                delattr(self, key)
            except AttributeError:
                pass
        self.__cache.clear()

    def setdelegate(self, delegate):
        self.resetcache()
        self.delegate = delegate
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
