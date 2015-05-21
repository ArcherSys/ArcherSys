import cmd
class AbstractActivityKernel(cmd.Cmd):
    def __init__(self,api_key,api_secret):
        cmd.Cmd.__init__(self)
        self.api_key = api_key
        self.api_secret = api_secret
class AbstractActivity(object):
    '''
    classdocs
    '''


    def __init__(self, params):
        self