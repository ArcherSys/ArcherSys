# Carlos Pedro Gonçalves, 2015, Instituto Superior de Ciências Sociais e Políticas (ISCSP), University of Lisbon
# E-mail: cgoncalves@iscsp.ulisboa.pt
#
# Applied Artificial Intelligence Classes: Artificial Intelligence Applied to Game Theory
#
# Lecture 1: Prisoner's Dilemma: Company's Cooperation Game
#
# ----------------------------------------
#            |   Cooperate   |   Defect  |
# ----------------------------------------
# Cooperate  |   (2.5,2.5)   |   (0,5)   |
# ----------------------------------------
# Defect     |     (5,0)     |   (1,1)   |
# ---------------------------------------
#
# If both cooperate they share the strategic value of 5 in equal parts (2.5 for each).
# If one cooperates and the other defects, then, the one that defects gets the strategic value of 5, and the other gets nothing.
# If both defect, then, they cancel each other out and receive 1 each.

class game:
    def __init__(self,players,structure):
        self.players = players
        self.structure = structure


class player:
    def __init__(self,name, strategySpace, payoffs, choice, suboptimal, strategies):
        self.name = name
        self.strategySpace = strategySpace
        self.payoffs = payoffs
        self.choice = choice
        self.suboptimal = suboptimal
        self.strategies = strategies

    def processGame(self,G):   
        for X in G:
            if X[0] == self.name:
                for j in range(1,len(X)):
                    Branch = X[j]
                    Alternative = Branch[0:len(Branch) - 1 ]
                    self.strategySpace = self.strategySpace + [Alternative]
                    self.payoffs = self.payoffs + [Branch[len(Branch) - 1]]
   
    def evaluate(self):
        X = []
        for i in range(0,len(self.strategySpace)):           
            Alternative1 = self.strategySpace[i]
            for j in range(0,len(self.strategySpace)):
                Alternative2 = self.strategySpace[j]
                if Alternative1 != Alternative2:
                    if len(Alternative1) == len(Alternative2):
                        Compare = 0
                        for k in range(0,len(Alternative1) - 1):
                            if Alternative1[k] == Alternative2[k]:
                                Compare = Compare + 0
                            else:
                                Compare = Compare + 1
                        if Compare == 0:
                            PayoffCompare = [self.payoffs[i],self.payoffs[j]]
                            M = max(PayoffCompare)
                            if self.payoffs[i] == M:
                                self.choice = Alternative1
                                X = X + [self.choice]
                            else:
                                self.suboptimal = self.suboptimal + [Alternative1]
                            if self.payoffs[j] == M:
                                self.choice = Alternative2
                                X = X + [self.choice]
                            else:
                                self.suboptimal = self.suboptimal + [Alternative2]          
        X = set(X)
        self.suboptimal = set(self.suboptimal)
        self.strategies = list(X - self.suboptimal)
        print "\nStrategies selected by ", self.name,":"
        print self.strategies


class nash:
    def __init__(self,equilibrium):
        self.equilibrium = equilibrium

    def compareTuples(self,tuple0,tuple1,response):
        counter = 0
        len0 = len(tuple0)
        len1 = len(tuple1)
        for element in tuple0:
            if element in tuple1:
                counter += 1
        if counter == len0 and len0 == len1:
            response = 'Match'
        else:
            response = 'Do not match'
        return response

    def inList(self,tupleA,listB,response):
        for tupleB in listB:
            response = self.compareTuples(tupleA,tupleB,None)
            if response == 'Match':
                break
        return response
   
    def inCommon(self,listA,listB):
        X = []
        for tupleA in listA:
            response = self.inList(tupleA,listB,None)
            if response == 'Match':
                X = X + [tupleA]
        return X

    def compare(self,listA,Slist):
        X = listA
        for S in Slist:
            Y = self.inCommon(X,S)
            X = Y
        self.equilibrium = X



#################################################################################

# Game Definition:

GameCompanyA = ['Company A',
('B cooperates', 'A cooperates', 2.5),
('B cooperates', 'A defects', 5),
('B defects', 'A cooperates', 0),
('B defects', 'A defects', 1)]

GameCompanyB = ['Company B',
('A cooperates', 'B cooperates', 2.5),
('A cooperates', 'B defects', 5),
('A defects', 'B cooperates', 0),
('A defects', 'B defects', 1)]


Game = game(('Company A','Company B'),[GameCompanyA, GameCompanyB])

# Definition of players:

CompanyA = player('Company A',[],[],None,[],None)
CompanyB = player('Company B',[],[],None,[],None)


Players = [CompanyA, CompanyB]

for AI in Players:
    AI.processGame(Game.structure)
    AI.evaluate()


# Game Equilibrium Computation:


ChoicesByPlayers = []

for AI in Players:
    ChoicesByPlayers = ChoicesByPlayers + [AI.strategies]

N = ChoicesByPlayers[len(ChoicesByPlayers) - 1]

Nash = nash(None)

Nash.compare(N,ChoicesByPlayers[0:len(ChoicesByPlayers) - 1])

if len(Nash.equilibrium) == 0:
    print "\nThis game has no equilibrium in pure strategies"
else:
    print "\nThe Nash equilibria of this game are:\n"
    for K in Nash.equilibrium:
        print K

