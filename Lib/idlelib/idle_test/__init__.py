<<<<<<< HEAD
from os.path import dirname

def load_tests(loader, standard_tests, pattern):
    this_dir = dirname(__file__)
    top_dir = dirname(dirname(this_dir))
    package_tests = loader.discover(start_dir=this_dir, pattern='test*.py',
                                    top_level_dir=top_dir)
    standard_tests.addTests(package_tests)
    return standard_tests
=======
from os.path import dirname

def load_tests(loader, standard_tests, pattern):
    this_dir = dirname(__file__)
    top_dir = dirname(dirname(this_dir))
    package_tests = loader.discover(start_dir=this_dir, pattern='test*.py',
                                    top_level_dir=top_dir)
    standard_tests.addTests(package_tests)
    return standard_tests
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
