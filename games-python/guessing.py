<<<<<<< HEAD
<<<<<<< HEAD
from random import randint

# Generates a number from 1 through 10 inclusive
random_number = randint(1, 10)
guesses_left = 3
# Start your game!
while guesses_left > 0:
    guess = int(raw_input("Your Guess"))
    if random_number == guess:
        print "You Win!"
        break
    guesses_left -= 1
else:
    print "You lose!"
=======
from random import randint

# Generates a number from 1 through 10 inclusive
random_number = randint(1, 10)
guesses_left = 3
# Start your game!
while guesses_left > 0:
    guess = int(raw_input("Your Guess"))
    if random_number == guess:
        print "You Win!"
        break
    guesses_left -= 1
else:
    print "You lose!"
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
from random import randint

# Generates a number from 1 through 10 inclusive
random_number = randint(1, 10)
guesses_left = 3
# Start your game!
while guesses_left > 0:
    guess = int(raw_input("Your Guess"))
    if random_number == guess:
        print "You Win!"
        break
    guesses_left -= 1
else:
    print "You lose!"
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
    print random_number