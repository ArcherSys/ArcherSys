<<<<<<< HEAD
def count(sequence, item):
   number = 0
   for i in sequence:
     if i is item:
        number += 1
   return number
  
def purify(x):
    l=[]
    for c in x:
        if c%2==0:
            l.append(c)
    return l
    
def product(x):
    res = 1
    for i in x:
        res *= i
    return res
    

def remove_duplicates(list):
    tidy = []
    for i in list:
        if i not in tidy:
            tidy.append(i)
    return tidy
    
def median(numbers):
     num = sorted(numbers)
     if len(num) % 2 != 0:
          return num[len(num)/2]
     else:
          return (num[len(num)/2] + num[len(num)/2-1]) / 2.0
          
def join_lists(x, y):
    return x + y

def flatten(lists):
    result = []
    for numbers in lists:
        for i in numbers:
            result.append(i)
    return result
=======
def count(sequence, item):
   number = 0
   for i in sequence:
     if i is item:
        number += 1
   return number
  
def purify(x):
    l=[]
    for c in x:
        if c%2==0:
            l.append(c)
    return l
    
def product(x):
    res = 1
    for i in x:
        res *= i
    return res
    

def remove_duplicates(list):
    tidy = []
    for i in list:
        if i not in tidy:
            tidy.append(i)
    return tidy
    
def median(numbers):
     num = sorted(numbers)
     if len(num) % 2 != 0:
          return num[len(num)/2]
     else:
          return (num[len(num)/2] + num[len(num)/2-1]) / 2.0
          
def join_lists(x, y):
    return x + y

def flatten(lists):
    result = []
    for numbers in lists:
        for i in numbers:
            result.append(i)
    return result
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
