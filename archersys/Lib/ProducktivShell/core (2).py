import string, sys, sqlite3, cmd, dropbox, webbrowser
from Lib import archersys
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
         """ Creates a new ArcherDB Database (MySQl or SQLite3 for Python) """
         self.db = sqlite3.connect(self.database_name + ".db")
         self.cursor = self.db.cursor()
         self.cursor.execute("create table family (id text, first_name text,last_name text,phone text,email text)")
    def do_NewContact(self,arg):
          """Creates a new contact for the picking!"""
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
          field = input("Field:")
          edit_id = int(input("ID to Edit:"))
          query = "UPDATE " + input("Contact Type:") + " SET "+field+"=\""+ input(field) + "\" WHERE id="+str(int(input("ID:")))
         
         
          self.cursor.execute(query)
    def do_DeleteContact(self,arg):
          field = input("Search Field:")
          value = input("Value:")
          print("Deleting...")
          self.cursor.execute("DELETE FROM " + input("Contact Type:") + " WHERE " + field + "=" + value)
          print("Deleted Record.")
    def do_InitDropbox(self,arg):
          app_key = archersys.ARCHERSYS_FOR_DROPBOX_KEY
          app_secret = archersys.ARCHERSYS_FOR_DROPBOX_SECRET


          flow = dropbox.client.DropboxOAuth2FlowNoRedirect(app_key, app_secret)

          # Have the user sign in and authorize this token
          authorize_url = flow.start()
          print('1. Go to: ' + authorize_url)
          print('2. Click "Allow" (you might have to log in first)')
          print ('3. Copy the authorization code.')
          webbrowser.open(authorize_url)
          code = input("Enter the authorization code here: ").strip()

           
          # This will fail if the user enters an invalid authorization code
          access_token, user_id = flow.finish(code)

          self.client = dropbox.client.DropboxClient(access_token)
          print('linked account: ', self.client.account_info())
    def do_Download(self, arg):
          """ Downloads a file From Dropbox of Your Choice """ 
          f, metadata = self.client.get_file_and_metadata('/Documents/' + input('File'))
          out = open(input('File'), 'wb')
          out.write(f.read())
          out.close()
          print(metadata)
    def  do_Save(self, arg): 
          f = open(self.database_name + ".db","rb")    
          response = self.client.put_file(self.database_name + ".db", f)
          print("uploaded:", response)
   
         