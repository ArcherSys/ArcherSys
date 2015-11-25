import random
while True:
   number = random.randrange(1,11)
   guess = int(input("Guess a number between 1 and 10"))
   if guess == number:
	   print("You Win!")
   else:
	   print("You Lose!")
   if(input("Play again?") != "Yes"):
	   break


