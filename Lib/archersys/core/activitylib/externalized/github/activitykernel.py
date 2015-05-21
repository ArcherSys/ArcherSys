from externalized.contrib.core import AbstractActivityKernel
import PyGithub, getpass
class GithubActivityKernel(AbstractActivityKernel):
    def __init__(self,api_key,api_secret,activity_name):
        AbstractActivityKernel.__init__(self,api_key,api_secret,activity_name)
        self.bbuilder = PyGithub.BlockingBuilder()
        self.intro = "ArcherBash Github v1.0.0 for ArcherSys OS 3.4.1"
        self.account = self.bbuilder.Login(input("Username:"), getpass.getpass("Password")).UserAgent("ArcherBash Github v1.0.0").Build()
        self.user = self.account.get_authenticated_user() 
        self.prompt = "ArcherSysBashGH - " + self.user/