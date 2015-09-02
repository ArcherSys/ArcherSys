<<<<<<< HEAD
<<<<<<< HEAD
import unittest
from test import support

class LongExpText(unittest.TestCase):
    def test_longexp(self):
        REPS = 65580
        l = eval("[" + "2," * REPS + "]")
        self.assertEqual(len(l), REPS)

def test_main():
    support.run_unittest(LongExpText)

if __name__=="__main__":
    test_main()
=======
import unittest
from test import support

class LongExpText(unittest.TestCase):
    def test_longexp(self):
        REPS = 65580
        l = eval("[" + "2," * REPS + "]")
        self.assertEqual(len(l), REPS)

def test_main():
    support.run_unittest(LongExpText)

if __name__=="__main__":
    test_main()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
import unittest
from test import support

class LongExpText(unittest.TestCase):
    def test_longexp(self):
        REPS = 65580
        l = eval("[" + "2," * REPS + "]")
        self.assertEqual(len(l), REPS)

def test_main():
    support.run_unittest(LongExpText)

if __name__=="__main__":
    test_main()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
