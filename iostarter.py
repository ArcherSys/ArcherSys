from math import pi
from cmd import Cmd
import sys, turtle

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
   def do_get_interest(self, arg):
       P = 10000
       r = 0.08
       n = 12
       t = int(input("Years:"))
       print((P*(1 + (r/n))**n*t))
   def do_get_mpg(self, arg):
       odometer = int(input("Miles:"))
       gallons_used = int(input("Gallons:"))
       print(odometer/gallons_used)
   def do_ctf(self,arg):
       deg_c = int(input("What is the temperature in Celsius? "))
       deg_f = deg_c * (9 / 5) + 32
       print(deg_c, " degrees Celsius is", deg_f, " degrees Farenheit.")
   def do_ftc(self,arg):
       deg_f = int(input("What is the temperature in Fahrenheit? "))
       deg_c = (deg_f - 32)/(5/9)
       print(deg_f, " degrees Farenheit  is", deg_c, " degrees Celsius.")
   def do_wait_time(self, arg):
       current_time_int = input("What is the current time (in hours 0-23)?")
       wait_time_int = input("How many hours do you want to wait")

       current_time_int = int(current_time_int)
       wait_time_int = int(wait_time_int)

       final_time_int = current_time_int + wait_time_int

       final_answer = final_time_int % 24

       print("The time after waiting is: ", final_answer)

# draw an equilateral triangle
   def do_draw_triangle(self, arg):
     wn = turtle.Screen()
     norvig = turtle.Turtle()
     for i in range(3):
       norvig.forward(100)

    # the angle of each vertice of a regular polygon
    # is 360 divided by the number of sides
       norvig.left(360/3)
     wn.exitonclick()
   def do_draw_hexagon(self, arg):
     wn = turtle.Screen()
     dijkstra = turtle.Turtle()

     for i in range(6):
        dijkstra.forward(100)
        dijkstra.left(360/6)

     wn.exitonclick()
#


if __name__ == '__main__':
   iostart = IOStarter()
   iostart.cmdloop()