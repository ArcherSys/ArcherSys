
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







