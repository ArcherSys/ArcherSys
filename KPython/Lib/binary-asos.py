def check_bit4(x):
    mask = 0b1000
    if x & mask > 0:
        return "on"
    else:
        return "off"

def flip_bit(number, n):
    mask = 0b1 << n-1 #make my mask longer by n-1;
    print "Mask:",bin(mask) #print the mask
    result = number ^ mask #flip the bit
    return bin(result)

