'''
Created on Mar 22, 2016

@author: Weldon Henson
'''

class Model(object):
    '''
    classdocs
    '''


    def __init__(self, name):
        self.objectName = name
        self.ClassName = __class__
        '''
        Constructor
        '''
    def activate(self,user):
        'The Action function that is created for defining a custom model'
        pass
    def __call__(self,user):
        self.activate(user)
        