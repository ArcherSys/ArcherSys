

class Cipher(object):
    ALPHABET = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"
    def __call__(self,chars,mode):
        if mode == "e":
            self.encrypt(chars)
        elif mode == "d":
            self.decrypt(chars)
    def encrypt(self,chars):
        pass
    def decrypt(self,chars):
        pass

   