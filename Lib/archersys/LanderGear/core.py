import os, argparse, sys, webbrowser

class PowerStatusManager(object):
    def __init__(self):
        self.parser = argparse.ArgumentParser(prog="TripleP",description=" The Boot and ArcherVMPeridot Power Utility")
        self.parser.add_argument("command", choices=["shutdown","restart","logoff","boot"])
        self.parser.add_argument("path")
        self.args = None
    def __call__(self):
        self.args = self.parser.parse_args()
        if self.args.command == "shutdown":
             os.system(self.args.path + "/xampp_stop")
        elif self.args.command == "restart":
             os.system(self.args.path + "/xampp_stop")
             os.system(self.args.path + "/xampp_start")
        elif self.args.command == "logoff":
             webbrowser.open("http://localhost:80/logout.php")
        elif self.args.command == "boot":
             os.system("start "+ self.args.path + "/xampp_start")
              
    
