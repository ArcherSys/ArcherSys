<<<<<<< HEAD
<<<<<<< HEAD
import __future__
import unittest

class FLUFLTests(unittest.TestCase):

    def test_barry_as_bdfl(self):
        code = "from __future__ import barry_as_FLUFL; 2 {0} 3"
        compile(code.format('<>'), '<BDFL test>', 'exec',
                __future__.CO_FUTURE_BARRY_AS_BDFL)
        self.assertRaises(SyntaxError, compile, code.format('!='),
                            '<FLUFL test>', 'exec',
                            __future__.CO_FUTURE_BARRY_AS_BDFL)

    def test_guido_as_bdfl(self):
        code = '2 {0} 3'
        compile(code.format('!='), '<BDFL test>', 'exec')
        self.assertRaises(SyntaxError, compile, code.format('<>'),
                            '<FLUFL test>', 'exec')


def test_main():
    from test.support import run_unittest
    run_unittest(FLUFLTests)


if __name__ == '__main__':
    test_main()
=======
import __future__
import unittest

class FLUFLTests(unittest.TestCase):

    def test_barry_as_bdfl(self):
        code = "from __future__ import barry_as_FLUFL; 2 {0} 3"
        compile(code.format('<>'), '<BDFL test>', 'exec',
                __future__.CO_FUTURE_BARRY_AS_BDFL)
        self.assertRaises(SyntaxError, compile, code.format('!='),
                            '<FLUFL test>', 'exec',
                            __future__.CO_FUTURE_BARRY_AS_BDFL)

    def test_guido_as_bdfl(self):
        code = '2 {0} 3'
        compile(code.format('!='), '<BDFL test>', 'exec')
        self.assertRaises(SyntaxError, compile, code.format('<>'),
                            '<FLUFL test>', 'exec')


def test_main():
    from test.support import run_unittest
    run_unittest(FLUFLTests)


if __name__ == '__main__':
    test_main()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
import __future__
import unittest

class FLUFLTests(unittest.TestCase):

    def test_barry_as_bdfl(self):
        code = "from __future__ import barry_as_FLUFL; 2 {0} 3"
        compile(code.format('<>'), '<BDFL test>', 'exec',
                __future__.CO_FUTURE_BARRY_AS_BDFL)
        self.assertRaises(SyntaxError, compile, code.format('!='),
                            '<FLUFL test>', 'exec',
                            __future__.CO_FUTURE_BARRY_AS_BDFL)

    def test_guido_as_bdfl(self):
        code = '2 {0} 3'
        compile(code.format('!='), '<BDFL test>', 'exec')
        self.assertRaises(SyntaxError, compile, code.format('<>'),
                            '<FLUFL test>', 'exec')


def test_main():
    from test.support import run_unittest
    run_unittest(FLUFLTests)


if __name__ == '__main__':
    test_main()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
