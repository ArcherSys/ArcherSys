import turtle
wn = turtle.Screen()
wn.screensize()
ssturtle = turtle.Turtle()
ssturtle.speed(1)
wn.bgpic("archersys-logo.png")

ssturtle.fd(100)
ssturtle.right(90)
ssturtle.fd(150)
ssturtle.right(45)
for i in range(0,2):
  ssturtle.fd(75)
  ssturtle.right(90)
ssturtle.left(45)
ssturtle.fd(150)
ssturtle.right(90)
ssturtle.fd(20)



wn.exitonclick()