<<<<<<< HEAD
class GameWin():
    '''This class is raised as an error if the win conditions are ever met by a player.
   '''
    pass
 
class ShipError:
    pass
 
class LogWrappedFunction(object):
    def __init__(self, function):
        self.function = function
 
    def logAndCall(self, *arguments, **namedArguments):
        print("Calling %s with arguments %s and named arguments %s" %\
                      (self.function.func_name, arguments, namedArguments))
        self.function.__call__(*arguments, **namedArguments)
 
class Board(object):
    '''Creates a board object with a print board method and other methods specific to actions on the board.'''
 
    #Creates a board based on the length that is provided.
    def __init__(self, sides=11):
        self.sides = sides
        self.storedBoard = {(x,y):'~Water' for y in range(1,self.sides) for x in range(1,self.sides)}
        self.backedupBoard = self.storedBoard
 
    #This is the board's print method
    def print_board(self):
        printableBoard = collections.OrderedDict(sorted(self.storedBoard.items()))
        for y in range(1, self.sides):
            print(' '.join(str(printableBoard[x, y])[0] for x in range(1, self.sides)))
 
    def printBoardOpposition(self):
        """This function creates a masked board so you can print it out after you fire a shot.
       """
        self.getMap()
        maskedShips = dict(self.storedBoard)
        for y in range(1, self.sides):
            for x in range(1, self.sides):
                for xFleet in range(len(self.fleet)):
                    if self.fleet[xFleet].getName() in maskedShips[x, y]:
                        if 'damage' in str(maskedShips[x, y]).lower():
                            maskedShips[x, y] = 'X'
                            continue
                        elif 'miss' in str(maskedShips[x, y]).lower():
                            maskedShips[x, y] = '^'
                            continue
                        elif self.fleet[xFleet].getName() in maskedShips[x, y]:
                            maskedShips[x, y] = '~'
        for y in range(1, self.sides):
            print ' '.join(str(maskedShips[x,y])[0] for x in range(1, self.sides))
 
    def getMap(self):
        return self.storedBoard
 
    def backupBoard(self):
        self.backupedBoard = dict(self.storedBoard)
        return self.backedupBoard
 
    def getBackUp(self):
        self.storedBoard = dict(self.backupedBoard)
        return self.storedBoard
 
    def realBackUp(self):
        self.getBackUp()
        self.getMap()

        class Player(Board):
    def __init__(self):
        Board.__init__(self)
        self.playerType = self.askPlayerType()
        self.shipAircraftCarrier = shipBlueprint(5, 'Aircraft Carrier')
        self.shipBattleship = shipBlueprint(4, 'Battleship')
        self.shipSubmarine = shipBlueprint(3, 'Submarine')
        self.shipDestroyer = shipBlueprint(3, 'Destroyer')
        self.shipPatrolBoat = shipBlueprint(2, 'Patrol Boat')
        self.hitEnemyShips = 0
        self.fleet = [self.shipAircraftCarrier,
                      self.shipBattleship,
                      self.shipDestroyer,
                      self.shipPatrolBoat,
                      self.shipSubmarine
                      ]
 
    def horizontal_or_vertical(self, hV = '', z = 0):
        #Needs to be refactored to work with new ship placement
        while z < 100:
            while True:
                try:
                    hV = str(raw_input('Horizontal or Vertical')).lower()
                    if hV[0] == 'h' :
                        self.h_v = 'horizontal'
                        return self.h_v
                    elif hV[0] == 'v':
                        self.h_v = 'vertical'
                        return self.h_v
                    else:
                        print 'You picked %s' % (hV)
                        break
 
                except ValueError:
                    print 'You failed to enter Horizontal or Vertical'
                except KeyError:
                    print 'You failed to enter Horizontal or Vertical'
                except IndexError:
                    print 'You failed to enter Horizontal or Vertical'
            z += 1
 
    #Asks Player Type
    def askPlayerType(self):
        '''This is to build the boards for different players. I will soon incorporate more functionality into it.
       '''
        playerType = raw_input('Are you man or machine?').lower()
        if 'man' in str(playerType):
            return playerType
        else:
            playerType = str('Machine')
            return playerType
 
    def placeShip(self, ship, X, Y):
        self.storedBoard[X, Y] = self.fleet[ship].getName()
        return self.storedBoard
 
    def placeVerticalShip(self, ship, X, Y):
        for i in range(self.fleet[ship].getLength()):
            if 'Water' not in self.storedBoard[X, Y + i]:
                raise StopIteration()
            else:
                self.placeShip(ship, X, Y + i)
 
    def placeHorizontal(self, ship, X, Y):
        for i in range(self.fleet[ship].getLength()):
            if 'Water' not in self.storedBoard[X + i, Y]:
                raise StopIteration()
            else:
                self.placeShip(ship, X + i, Y)
 
    def shipGen(self, ship, X, Y, hV):
        try:
            self.backupBoard()
            if hV % 2 == 0:
                if self.fleet[ship].getLength() + X <= 10:
                    self.placeHorizontal(ship, X, Y)
                else:
                    raise ShipError()
            elif hV % 2 != 0:
                if self.fleet[ship].getLength() + Y <= 10:
                    self.placeVerticalShip(ship, X, Y)
                else:
                    raise ShipError()
        except StopIteration:
            print 'Failed to place %s at (%s, %s)' % (self.fleet[ship].getName(), X, Y)
            raise ShipError()
        except KeyError:
            print 'Failed to place %s at (%s, %s)' % (self.fleet[ship].getName(), X, Y)
            raise ShipError()
        except IndexError:
            print 'You failed to place %s because it is out of bounds' % (self.fleet[ship].getName())
            raise ShipError()
 
    def fleetGen(self, x = 0):
        while x < 1:
            try:
                self.backupBoard()
                if 'man' in self.playerType:
                    for ship in range(len(self.fleet)):
                        self.backupBoard()
                        while True:
                            try:
                                print 'You are placing the %s' % (self.fleet[ship].getName())
                                X = askX()
                                Y = askY()
                                hV = self.horizontal_or_vertical()
                                print 'You are placing %s at (%s, %s) %s' % (self.fleet[ship].getName(), X, Y, hV)
                                if 'h' in hV[0]:
                                    hV = 2
                                elif 'v' in hV[0]:
                                    hV = 3
                                self.shipGen(ship, X, Y, hV)
                            except ShipError:
                                self.realBackUp()
                                ship -+ 1
                            break
                    else:
                        x += 1
                        return
                elif 'Machine' in self.playerType:
                    for ship in range(len(self.fleet)):
                        self.backupBoard()
                        while True:
                            try:
                                X = randint(1, 10)
                                Y = randint(1, 10)
                                hV = randint(1, 10)
                                self.shipGen(ship, X, Y, hV)
                            except ShipError:
                                self.realBackUp()
                                if ship == 0:
                                    continue
                                elif ship > 0:
                                    ship -+ 1
                                    continue
                                continue
                            break
                    else:
                        x += 1
                        return
 
            finally:
                print ''
                self.print_board()
                pass
 
    def __type__(self):
        return self.playerType
 
    def __str__(self, *args, **kargs):
        return 'You are a %s!!!' % (self.playerType)

=======
class GameWin():
    '''This class is raised as an error if the win conditions are ever met by a player.
   '''
    pass
 
class ShipError:
    pass
 
class LogWrappedFunction(object):
    def __init__(self, function):
        self.function = function
 
    def logAndCall(self, *arguments, **namedArguments):
        print("Calling %s with arguments %s and named arguments %s" %\
                      (self.function.func_name, arguments, namedArguments))
        self.function.__call__(*arguments, **namedArguments)
 
class Board(object):
    '''Creates a board object with a print board method and other methods specific to actions on the board.'''
 
    #Creates a board based on the length that is provided.
    def __init__(self, sides=11):
        self.sides = sides
        self.storedBoard = {(x,y):'~Water' for y in range(1,self.sides) for x in range(1,self.sides)}
        self.backedupBoard = self.storedBoard
 
    #This is the board's print method
    def print_board(self):
        printableBoard = collections.OrderedDict(sorted(self.storedBoard.items()))
        for y in range(1, self.sides):
            print(' '.join(str(printableBoard[x, y])[0] for x in range(1, self.sides)))
 
    def printBoardOpposition(self):
        """This function creates a masked board so you can print it out after you fire a shot.
       """
        self.getMap()
        maskedShips = dict(self.storedBoard)
        for y in range(1, self.sides):
            for x in range(1, self.sides):
                for xFleet in range(len(self.fleet)):
                    if self.fleet[xFleet].getName() in maskedShips[x, y]:
                        if 'damage' in str(maskedShips[x, y]).lower():
                            maskedShips[x, y] = 'X'
                            continue
                        elif 'miss' in str(maskedShips[x, y]).lower():
                            maskedShips[x, y] = '^'
                            continue
                        elif self.fleet[xFleet].getName() in maskedShips[x, y]:
                            maskedShips[x, y] = '~'
        for y in range(1, self.sides):
            print ' '.join(str(maskedShips[x,y])[0] for x in range(1, self.sides))
 
    def getMap(self):
        return self.storedBoard
 
    def backupBoard(self):
        self.backupedBoard = dict(self.storedBoard)
        return self.backedupBoard
 
    def getBackUp(self):
        self.storedBoard = dict(self.backupedBoard)
        return self.storedBoard
 
    def realBackUp(self):
        self.getBackUp()
        self.getMap()

        class Player(Board):
    def __init__(self):
        Board.__init__(self)
        self.playerType = self.askPlayerType()
        self.shipAircraftCarrier = shipBlueprint(5, 'Aircraft Carrier')
        self.shipBattleship = shipBlueprint(4, 'Battleship')
        self.shipSubmarine = shipBlueprint(3, 'Submarine')
        self.shipDestroyer = shipBlueprint(3, 'Destroyer')
        self.shipPatrolBoat = shipBlueprint(2, 'Patrol Boat')
        self.hitEnemyShips = 0
        self.fleet = [self.shipAircraftCarrier,
                      self.shipBattleship,
                      self.shipDestroyer,
                      self.shipPatrolBoat,
                      self.shipSubmarine
                      ]
 
    def horizontal_or_vertical(self, hV = '', z = 0):
        #Needs to be refactored to work with new ship placement
        while z < 100:
            while True:
                try:
                    hV = str(raw_input('Horizontal or Vertical')).lower()
                    if hV[0] == 'h' :
                        self.h_v = 'horizontal'
                        return self.h_v
                    elif hV[0] == 'v':
                        self.h_v = 'vertical'
                        return self.h_v
                    else:
                        print 'You picked %s' % (hV)
                        break
 
                except ValueError:
                    print 'You failed to enter Horizontal or Vertical'
                except KeyError:
                    print 'You failed to enter Horizontal or Vertical'
                except IndexError:
                    print 'You failed to enter Horizontal or Vertical'
            z += 1
 
    #Asks Player Type
    def askPlayerType(self):
        '''This is to build the boards for different players. I will soon incorporate more functionality into it.
       '''
        playerType = raw_input('Are you man or machine?').lower()
        if 'man' in str(playerType):
            return playerType
        else:
            playerType = str('Machine')
            return playerType
 
    def placeShip(self, ship, X, Y):
        self.storedBoard[X, Y] = self.fleet[ship].getName()
        return self.storedBoard
 
    def placeVerticalShip(self, ship, X, Y):
        for i in range(self.fleet[ship].getLength()):
            if 'Water' not in self.storedBoard[X, Y + i]:
                raise StopIteration()
            else:
                self.placeShip(ship, X, Y + i)
 
    def placeHorizontal(self, ship, X, Y):
        for i in range(self.fleet[ship].getLength()):
            if 'Water' not in self.storedBoard[X + i, Y]:
                raise StopIteration()
            else:
                self.placeShip(ship, X + i, Y)
 
    def shipGen(self, ship, X, Y, hV):
        try:
            self.backupBoard()
            if hV % 2 == 0:
                if self.fleet[ship].getLength() + X <= 10:
                    self.placeHorizontal(ship, X, Y)
                else:
                    raise ShipError()
            elif hV % 2 != 0:
                if self.fleet[ship].getLength() + Y <= 10:
                    self.placeVerticalShip(ship, X, Y)
                else:
                    raise ShipError()
        except StopIteration:
            print 'Failed to place %s at (%s, %s)' % (self.fleet[ship].getName(), X, Y)
            raise ShipError()
        except KeyError:
            print 'Failed to place %s at (%s, %s)' % (self.fleet[ship].getName(), X, Y)
            raise ShipError()
        except IndexError:
            print 'You failed to place %s because it is out of bounds' % (self.fleet[ship].getName())
            raise ShipError()
 
    def fleetGen(self, x = 0):
        while x < 1:
            try:
                self.backupBoard()
                if 'man' in self.playerType:
                    for ship in range(len(self.fleet)):
                        self.backupBoard()
                        while True:
                            try:
                                print 'You are placing the %s' % (self.fleet[ship].getName())
                                X = askX()
                                Y = askY()
                                hV = self.horizontal_or_vertical()
                                print 'You are placing %s at (%s, %s) %s' % (self.fleet[ship].getName(), X, Y, hV)
                                if 'h' in hV[0]:
                                    hV = 2
                                elif 'v' in hV[0]:
                                    hV = 3
                                self.shipGen(ship, X, Y, hV)
                            except ShipError:
                                self.realBackUp()
                                ship -+ 1
                            break
                    else:
                        x += 1
                        return
                elif 'Machine' in self.playerType:
                    for ship in range(len(self.fleet)):
                        self.backupBoard()
                        while True:
                            try:
                                X = randint(1, 10)
                                Y = randint(1, 10)
                                hV = randint(1, 10)
                                self.shipGen(ship, X, Y, hV)
                            except ShipError:
                                self.realBackUp()
                                if ship == 0:
                                    continue
                                elif ship > 0:
                                    ship -+ 1
                                    continue
                                continue
                            break
                    else:
                        x += 1
                        return
 
            finally:
                print ''
                self.print_board()
                pass
 
    def __type__(self):
        return self.playerType
 
    def __str__(self, *args, **kargs):
        return 'You are a %s!!!' % (self.playerType)

>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
