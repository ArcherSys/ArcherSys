from random import randint
board = []
for x in range(5):
----board.append(["O"] * 5)
def printboard(board):
----for row in board:
--------print " ".join(row)
print "Let's play Battleship!"
printboard(board)
def randomrow(board):
----return randint(0, len(board) - 1)
def randomcol(board):
----return randint(0, len(board[0]) - 1)
shiprow = randomrow(board)
shipcol = randomcol(board)
#adding the second ship
ship2row = randomrow(board)
#making sure it doesn't overlap with the first one
if ship2row==shiprow:
----ship2row = randomrow(board)
ship2col = randomcol(board)
if ship2col==shipcol:
----ship2col = randomcol(board)
print "Ship 1 is at ",shiprow," ",shipcol
print "Ship 2 is at ",ship2row," ",ship2col
for turn in range(4):
#checks first if you've hit both ships already, if so, game over and the player won
----if board[shiprow][shipcol]=="H" and board[ship2row][ship2col]=="H":
--------print "Congratulations, You Won!"
--------break
----else:
--------print "Turn", turn+1
--------guessrow = int(rawinput("Guess Row:"))
--------guesscol = int(rawinput("Guess Col:"))
--------if guessrow == shiprow and guesscol == shipcol:
------------board[guessrow][guesscol] = "H"
------------printboard(board)
------------print "Congratulations! You sunk battleship 1!"
--------elif guessrow == ship2row and guesscol == ship2col:
------------board[guessrow][guesscol] = "H"
------------printboard(board)
------------print "Congratulations! You sunk battleship 2!"
--------else:
------------if (guessrow < 0 or guessrow > 4) or (guesscol < 0 or guesscol > 4):
----------------print "Oops, that's not even in the ocean."
------------elif(board[guessrow][guesscol] == "X"):
----------------print "You guessed that one already."
------------else:
----------------print "You missed my battleship!"
----------------board[guessrow][guesscol] = "X"
----------------print_board(board)
--------if turn == 3:
------------print "Game Over"
