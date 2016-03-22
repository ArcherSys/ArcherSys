from Lib.archersys.core.security.crypt.cipher import Cipher

class ShiftCipher(Cipher):
    def __init__(self):
        self.shiftcode = 19
    def setShiftCode(self,code):
        self.shiftcode = code
    def encrypt(self,chars):
        ecode = []
        letts = []
        indexl = []
        word = ""
        for x in range(0,len(chars)):
            indexl.append(self.ALPHABET.index(chars[x]))
            
            ecode.append((indexl[x]+self.shiftcode)%26)
            letts.append(self.ALPHABET[ecode[x]])
         
            word += letts[x]
        print("Encrypted Text:")
        print(word)
    def decrypt(self,chars):
        dcode = []
        letts = []
        indexl = []
        word = ""
        for x in range(0,len(chars)):
            indexl.append(self.ALPHABET.index(chars[x]))
            
            dcode.append((indexl[x]-self.shiftcode)%26)
            letts.append(self.ALPHABET[dcode[x]])
         
            word += letts[x]
        print("Decrypted Text:")
        print(word)
            
            
    