import random
while count < 3:
   num = random.randint(1, 6)
   guess =  int(input("Guess a Number:"))
   if guess != num:
        print "Sorry, you lose!"
        count += 1
   else:
        print "You win!"