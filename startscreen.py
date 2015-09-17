
import turtle

from turtledemo import round_dance
"""ArcherSys OS Start Screen """
""" When this Entire Program Starts, Create a Screen """
asosstart =  turtle.Screen()

asosstart.clearscreen()
""" Create a turtle named Fireworks and Set The Background """

fireworks = turtle.Turtle()
asosstart.bgpic("archersys-logo.png")
""" Delay 10 Seconds, and create a star for the  """

asosstart.delay()
""" Set the Colors and Begin Filling it in (The Star) """
fireworks.color('red', 'yellow')
fireworks.begin_fill()
i = 0
while True:
    i += 1
    fireworks.forward(200)
    fireworks.left(170)
    if i == 200:
      """ Stop after 200 Rounds of Drawing """
      break
fireworks.end_fill()
""" Delay for 200 Seconds, and Start Running the Round Dance """
asosstart.delay(200)
print(round_dance.main())

""" Exit after F5 and on click """
asosstart.exitonclick()
