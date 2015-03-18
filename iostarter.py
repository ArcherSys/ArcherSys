from math import pi
from cmd import Cmd
import sys

class IOStarter(Cmd):
   def __init__(self):
      Cmd.__init__(self, 'tab')
      self.completkey = 'tab'
      self.prompt = "Action of the Day"
   def do_get_time_of_alarm(self,arg):
      hours_now = int(input("This Hour:"))
      hours_in_wait = int(input("Time till alarm:"))
      hours2 = hours_now + hours_in_wait
      print( str(hours2 % 24))
   def area_of_circle(self,radius):
      return pi * radius**2
   def do_get_user_circle(self, arg):
      ra = int(input('Radius'))
        
      print(self.area_of_circle(ra))
   def do_get_stay_day(self,arg):
      now = int(input("Day No:"))
      length_of_stay = int(input("Days To Stay"))
      if now + length_of_stay  < 7:
          print(now + length_of_stay)
      else:
          print(length_of_stay % 7)
   def close(self):
       self.close()
   def do_EOF(self,arg):
       self.close()
	    

if __name__ == '__main__':  
   iostart = IOStarter() 
   iostart.cmdloop()