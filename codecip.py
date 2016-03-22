from Lib.archersys.core.security.crypt.shiftcipher import ShiftCipher
choice = ""
while choice != "0":
    print("ShiftCipher CodeCip")
    print("===================")
    print("Pick an Action:")
    print("0. QUIT")
    print("1. Encrypt")
    print("2. Decrypt")
    print("3: Set Cypher Shift")
    choice = input(":")
    sc = ShiftCipher()

    if choice == "1":
        txt = input("Text to Encrypt")
        sc.encrypt(txt)
        input("...")
    elif choice == "2":
        txt = input("Text to Decrypt")
        sc.decrypt(txt)
        input("...")
    elif choice == "3":
        codes = input("Shift Code:")
        sc.setShiftCode(int(codes))