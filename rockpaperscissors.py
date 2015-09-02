<<<<<<< HEAD
def run_rps():
    choices = []
    names = []
    for i in range(0,2):
                names.append(input("Enter your name " + str(i+1)))
    for i in names:
                print("Welcome to Rock Paper Scissors, "+i)
                choices.append(input("If you had to choose between a rock, a piece of paper,    and a silly pair of scissors, what would you choose?:"))
    if (choices[0] == "Rock") and (choices[1] == "Scissors"):
                print("Player 1 (" + names[0] + ") Wins! ( Rock > Scissors)")
    elif (choices[1] == "Rock") and (choices[0] == "Scissors"):
        	print("Player 2 (" + names[1] + " Wins! (Rock > Scissors)")
    elif (choices[0] == "Paper") and (choices[1] == "Rock"):
        	print("Player 1 (" + names[0] + ") Wins! (Paper > Rock)")
    elif (choices[1] == "Paper") and (choices[0] == "Rock"):
        	print("Player 2 (" + names[1] + ") Wins! (Paper > Rock)")
    elif (choices[0] == "Scissors") and (choices[0] == "Paper"):
        	print("Player 1 (" + names[0] + ") Wins! (Scissors > Paper)")
    elif (choices[1] == "Scissors") and (choices[1] == "Paper"):
	        print("Player 2 (" + names[0] + ") Wins! (Scissors > Paper)")
	
run_rps()
while True:
    if input("Play again?") == "Yes":
                run_rps()
    else:
                break
	

	
	 
=======

def run_rps():
   names = []
   choice = []
   for i in range(0,2):
       names.append(input("Name of Player " + str(i+1)))
   for i in range(0,2):
       print("Welcome to 'Rock, Paper, Scissors' , " + names[i])
       choice.append(input("Rock, Paper, or Scissors"))
   print("Processing")
   if (choice[0] == "Rock") and (choice [1] == "Scissors"):
       print("Player 1 Wins (Rock > Scissors) ")
   elif(choice[1] == "Rock") and (choice[0] == "Scissors"):
       print("Player 2 Wins (Rock > Scissors)")
   elif(choice[0] == "Scissors") and (choice[1] == "Paper"):
       print("Player 1 Wins (Scissors > Paper)")
   elif(choice[1] == "Scissors") and (choice[0] == "Paper"):
       print("Player 2 Wins (Scissors > Paper)")
   elif(choice[0] == "Paper") and (choice[1] == "Rock"):
       print("Player 1 Wins (Paper > Rock)")
   elif(choice[1] == "Paper") and (choice[0] == "Rock"):
       print("Player 2 Wins (Paper > Rock)")

run_rps()
play_again = input("Play Again")
if play_again == "Yes":
    run_rps()







>>>>>>> 5b57999e67de357067ea8a442d900c4378e88c2f
