from math import pi
def area_of_circle(radius):
    return pi * radius**2

def get_user_circle():
   ra = int(input('Radius'))
        
   print area_of_circle(ra)
    
    
get_user_circle()

