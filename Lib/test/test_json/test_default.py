<<<<<<< HEAD
<<<<<<< HEAD
from test.test_json import PyTest, CTest


class TestDefault:
    def test_default(self):
        self.assertEqual(
            self.dumps(type, default=repr),
            self.dumps(repr(type)))


class TestPyDefault(TestDefault, PyTest): pass
class TestCDefault(TestDefault, CTest): pass
=======
from test.test_json import PyTest, CTest


class TestDefault:
    def test_default(self):
        self.assertEqual(
            self.dumps(type, default=repr),
            self.dumps(repr(type)))


class TestPyDefault(TestDefault, PyTest): pass
class TestCDefault(TestDefault, CTest): pass
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
from test.test_json import PyTest, CTest


class TestDefault:
    def test_default(self):
        self.assertEqual(
            self.dumps(type, default=repr),
            self.dumps(repr(type)))


class TestPyDefault(TestDefault, PyTest): pass
class TestCDefault(TestDefault, CTest): pass
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
