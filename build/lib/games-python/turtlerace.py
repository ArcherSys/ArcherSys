<<<<<<< HEAD
import turtle              # 1.  import the modules
import random
wn = turtle.Screen()       # 2.  Create a screen
wn.bgcolor('lightblue')

lance = turtle.Turtle()    # 3.  Create two turtles
andy = turtle.Turtle()
lance.color('red')
andy.color('blue')
lance.shape('turtle')
andy.shape('turtle')

andy.up()                  # 4.  Move the turtles to their starting point
lance.up()
andy.goto(-100,20)
lance.goto(-100,-20)

   

# your code goes here
def race():
  for i in range (1,1001):
     x = random.randrange(1,10)
     if x > 5:
        andy.forward(5)
     else:
        lance.forward(5)
  
race()
wn.exitonclick()


=======
import turtle              # 1.  import the modules
import random
wn = turtle.Screen()       # 2.  Create a screen
wn.bgcolor('lightblue')

lance = turtle.Turtle()    # 3.  Create two turtles
andy = turtle.Turtle()
lance.color('red')
andy.color('blue')
lance.shape('turtle')
andy.shape('turtle')

andy.up()                  # 4.  Move the turtles to their starting point
lance.up()
andy.goto(-100,20)
lance.goto(-100,-20)

   

# your code goes here
def race():
  for i in range (1,1001):
     x = random.randrange(1,10)
     if x > 5:
        andy.forward(5)
     else:
        lance.forward(5)
  
race()
wn.exitonclick()


>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
