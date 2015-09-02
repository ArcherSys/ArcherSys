<<<<<<< HEAD
import os

if __name__ == '__main__':
    while True:
        buf = os.read(0, 1024)
        if not buf:
            break
        try:
            os.write(1, b'OUT:'+buf)
        except OSError as ex:
            os.write(2, b'ERR:' + ex.__class__.__name__.encode('ascii'))
=======
import os

if __name__ == '__main__':
    while True:
        buf = os.read(0, 1024)
        if not buf:
            break
        try:
            os.write(1, b'OUT:'+buf)
        except OSError as ex:
            os.write(2, b'ERR:' + ex.__class__.__name__.encode('ascii'))
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
