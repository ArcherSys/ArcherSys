def reverse(text):
    textlist=[]
    for c in text:
        textlist.insert(0,c)
    reversedtext = ''.join(textlist)
    return(reversedtext)
    
def anti_vowel(text):
    t = ""
    for c in text:
       if c not in "aeiouAEIOU":
            t += c
    return t
    
def censor(text, word):
    new = text.replace(word, "*" * len(word))
    return new