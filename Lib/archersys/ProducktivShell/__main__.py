import cmd, getpass, os,sys, string, sqlite3
from random import randint
from . import app_battleship



def guessing_game():
    random_number = randint(1, 10)
    guesses_left = 3
    # Start your game!
    while guesses_left > 0:
         guess = int(input("Your Guess"))
         guesses_left -= 1
         if random_number == guess:
            print( "You Win!")
            break
              
         else:
            if guesses_left == 0:
               print ("You lose!")
               print (int(random_number))
class ProducktivShellRolodex(cmd.Cmd):
    def __init__(self):
         cmd.Cmd.__init__(self)
         self.id_f = open("conchtack_id.dat","wb")
         self.id = 0
         self.intro = "ArcherSys OS Producktiviti ConchTack Shell Environment \n 1.0.0 -- Open Source, Made in 2015"
         self.database_name = input("Database Name:")
         self.db = sqlite3.connect(self.database_name + ".db")
         self.cursor = self.db.cursor()
         self.prompt =  self.database_name + " -> ProducktivShell:"
    def do_CreateDB(self,args):
         """ Creates a new ArcherDB Database (MySQl or SQLite3 for Python)
        
          Define  do_CreateDB
          Ask  Contact Address Book Name:
          Save_To_DB
          Create Tables -> contacts(family, friends, etc.)
          ResetDictionary """
         self.db = sqlite3.connect(self.database_name + ".db")
         self.cursor = self.db.cursor()
         try:
             self.cursor.execute("create table family (id text, first_name text,last_name text,phone text,email text)")
         except sqlite3.OperationalError:
              print("The family contacts group already exists.")
         try:
             self.cursor.execute("create table friend (id text, first_name text,last_name text,phone text,email text)")
         except sqlite3.OperationalError:
             print("The Friends Contact Group already exists.")
   
    def do_NewContact(self,arg):
          """Creates a record for the contacts database
             Define   NewContact
             New_contact = Ask Name: Phone Number: Email:
             SaveNewDBRecord New_Contact """
          self.id += 1
          first_name = input("First Name")
          last_name = input("Last Name:")
          family_type = input("Type of Contact:")
          self.cursor.execute("insert into " + family_type + " values (?, ?, ?, ?, ?)",(str(self.id),first_name,last_name,input("Phone"),input("Email:")))
          print("="*41)
          self.cursor.execute("select * from " + family_type + " WHERE id = (SELECT COUNT(*) FROM " + family_type + " )")
          record = self.cursor.fetchone()
          
          print("Name: " + record[1] + " " + record[2])
 
          print("="*41)
          print("Phone Number: " + record[3])
          print("="*41)
          print("Email: " + record[3])
          print("="*41)
    def do_EditContact(self,arg):
          """ Edits a Record
          Define     EditContact
          Edit_Contact = Select_Record Ask Index
          Ask RECORD_EDIT_PART
          Ask(Edit) RECORD_EDIT_PART
          Save_To_DB (Ans)"""

          field = input("Field:")
          edit_id = int(input("ID to Edit:"))
          query = "UPDATE " + input("Contact Type:") + " SET "+field+"=\""+ input(field) + "\" WHERE id="+str(int(input("ID:")))
         
         
          self.cursor.execute(query)
    def __call__(self):
        self.cmdloop()
    def do_DeleteContact(self,arg):
          """Deletes a Contact
          Ask Select_Record
          DELETE_RECORD Ans
          SaveChanges"""
          field = input("Search Field:")
          value = input("Value:")
          print("Deleting...")
          self.cursor.execute("DELETE FROM " + input("Contact Type:") + " WHERE " + field + "=" + value)
          print("Deleted Record.")
    def  do_Save(self, arg):
          """ Saves the Database and all of its contents
          Define Save
          Save_DB """
          self.db.commit()
          print("Saved")
    def  do_ReadOneContact(self, arg):
          """Reads One Contact selected by an index you specify"""
          self.cursor.execute("SELECT * FROM "+input("Contact Type:") + " WHERE id="+input("ID:"))
          record = self.cursor.fetchone()
          print("="*41)
          print("Name: " + record[1] + " " + record[2])
          print("="*41)
          print("Phone Number:" + record[3])
          print("="*41)
          print("Email: " + record[4])
          print("="*41)
          
    def  do_ReadAllContacts(self, arg):
          """Reads all of the Contacts."""
          for row in self.cursor.execute("SELECT * FROM " + input("Contact Type:")):
             print("="*41)
             print("Contact "+row[0])
             print("="*41)
             print("Name: " + row[1] + " " + row[2])
             print("="*41)
             print("Phone Number:" + row[3])
             print("="*41)
             print("Email: " + row[4])
             print("="*41)
    def  do_Load(self, arg):
          """ Loads a  SQLite Database
          Define Load
          Load_From_ArcherVMFS Ask File:"""

          self.database_name = arg
          self.db = sqlite3.connect(self.database_name + ".db")
          self.cursor = self.db.cursor()
    def  help_overview(self):
          print("APPLICATION TITLE:  ProducktivShell\n")
          print("="*41)
          print("CREATOR: Weldon Henson\n")
          print("="*41)
    	  
          print("The ProducktivShell Application is a cli application that deals with not just cloud services,\n")
          print("="*41)
          print("but also has a special part of this python package for the contacts list.\n")
          print("="*41)
          print("ProdSh (ProducktivShell for short) uses Dropbox to save contacts using the pickle module,\n")
          print("="*41)
          print(" the Dropbox core API, and the Evernote API is used to save the contacts to an Evernote note, and more.\n")
          print("="*41)
          print("APPLICATION DIRECTIONS\n")
          print("To run this you will need ArcherVMCashew (ArcherSys OS Cashew). To run the contacts shell, type contacts. The Contacts Shell has these commands:\n")
          print("1.	CREATEDB\n")
          print("Creates A SQLite Database for Contacts.")
          print("2.	NEWCONTACT")
          print("Creates a record for the contacts database")
          print("3.	EDITCONTACT")
          print("Edits a Record")
          print("4.	DELETECONTACT")
          print("Deletes a Contact")
          print("5.	SAVE")
          print("Saves the Database and all of its contents")
          print("6.	LOAD")
          print("Loads a  SQLite Database")
          print("7.	QUIT")
          print("Quits this program")
          print("8.	READONECONTACT")
          print("Reads One Contact selected by an index you specify")
          print("9.	READALLCONTACTS")
          print("Reads all of the Contacts.")

    def  do_EOF(self, args):
          """Quits this program"""
          self.db.commit()
          FileServer().cmdloop()
class FileServer(cmd.Cmd):
    def __init__(self):
        print("Welcome to ArcherVMJade! ")
        cmd.Cmd.__init__(self)
        
        self.intro = "ProducktivShell v1.5.1 \n Title: ArcherVMJade \n Author: Weldon Henson\n Description:  This VM is the next ArcherVM; \n This VM can create files  Directions: \nFirst:\n Type your custom username \n and any password\n \n type 'create_file <filename>' to create a file \n type edit_file to edit a file \n type import <module> to import a file \n type startapp <appindex> to start an app. for info on the apps used, type help apps "
        
        self.prompt = "What Would you like to do today? \n"
        self.files = []
        self.apps = [
            {"name":"ProducktivShell","app": ProducktivShellRolodex},{"name": "Guesser","app": guessing_game},
            {"name": "Battleship!","app":app_battleship.battleship}
            ]
        self.userdb = {
            "username": input("Please, tell me your name:")
            
      
        }
        print("press enter to continue...")
        input()
    def get_password(self, msg):
        print(msg)
        return
    def do_create_file(self, arg):
        ''' Creates a file
        type "create_file <filename>" to create a file  '''
        self.files.append(open(arg,input("Mode:")))
    def do_ls(self, arg):
       print(self.files)
    def do_edit_file(self, arg):
        '''edits a file type edit_file'''
        running = True
        while running:
           line = input(" ")
           if line == "quit":
                break
           self.files[int(input("File index:"))].write(line)
    def do_shutdown(self, arg):
        sys.exit(0)
    def do_import(self, arg):
        ''' Type import <code> to get started.'''
        exec("import " + arg)
    def do_startapp(self, arg):
        self.apps[int(arg)]["app"]()
    def do_runpy(self, arg):
        exec(arg)
    def help_apps(self):
       print("Apps: \n")
       for app in self.apps:
            print(app["name"])
try:
       FileServer().cmdloop()
except IndexError:
        print("ArcherVM Error 001: Virtual Binary Stack Error")
        print("Reconnecting...")
        FileServer().cmdloop()
except ValueError:
        print("ArcherVM Error 002: Casting Error")
        print("Reconnecting...")
        FileServer().cmdloop()
        
