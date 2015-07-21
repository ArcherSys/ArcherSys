def is_even(x):
    if x % 2 == 0:
        return True
    else:
        return False

def is_int(x):
  if x == int(x):
    return True
 else:
    return False
        
def digit_sum(n):
    ds = str(n)
    result = 0
    for i in range(0,len(ds)):
      result += int(ds[i])
    return result
    
def factorial(x):
    result = 1
    while x > 0:
        result = result * x
        x = x - 1
    return result
    
def is_prime(x):
    if x < 2:
        return False

    for i in range(2, int(x ** 0.5) + 1):
        if x % i == 0:
            return False

    return True
    
def scrabble_score(word):
    point = 0
    for letter in word:
        point += score[letter.lower()]
    return point