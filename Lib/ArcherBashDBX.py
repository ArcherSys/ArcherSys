<<<<<<< HEAD
<<<<<<< HEAD
import dropbox, cmd
class ArcherBashDBX(cmd.Cmd):
  def __init__(self): 
   app_key = 'brwekpcno93vtpz'
   app_secret = 'np5coz7g4nzp9og'


   flow = dropbox.client.DropboxOAuth2FlowNoRedirect(app_key, app_secret)

   # Have the user sign in and authorize this token
   authorize_url = flow.start()
   print('1. Go to: ' + authorize_url)
   print('2. Click "Allow" (you might have to log in first)')
   print ('3. Copy the authorization code.')
   code = input("Enter the authorization code here: ").strip()

   # This will fail if the user enters an invalid authorization code
   access_token, user_id = flow.finish(code)

   client = dropbox.client.DropboxClient(access_token)
   print('linked account: ', client.account_info())
   cmd.Cmd.__init__(self)
   self.prompt = "ArcherDBX>"
  def do_download(self, arg):
    """ Downloads a file From Dropbox of Your Choice """ 
    f, metadata = client.get_file_and_metadata('/Documents/' + input('File'))
    out = open(input('File'), 'wb')
    out.write(f.read())
    out.close()
    print(metadata)
  def do_upload(self, arg):
    f = open(input('File to upload'), 'rb')
    response = client.put_file(input('Filename of upload'), f)
    print("uploaded:", response)
	 
if __name__ == '__main__':
   abdbx = ArcherBashDBX()
=======
import dropbox, cmd
class ArcherBashDBX(cmd.Cmd):
  def __init__(self): 
   app_key = 'brwekpcno93vtpz'
   app_secret = 'np5coz7g4nzp9og'


   flow = dropbox.client.DropboxOAuth2FlowNoRedirect(app_key, app_secret)

   # Have the user sign in and authorize this token
   authorize_url = flow.start()
   print('1. Go to: ' + authorize_url)
   print('2. Click "Allow" (you might have to log in first)')
   print ('3. Copy the authorization code.')
   code = input("Enter the authorization code here: ").strip()

   # This will fail if the user enters an invalid authorization code
   access_token, user_id = flow.finish(code)

   client = dropbox.client.DropboxClient(access_token)
   print('linked account: ', client.account_info())
   cmd.Cmd.__init__(self)
   self.prompt = "ArcherDBX>"
  def do_download(self, arg):
    """ Downloads a file From Dropbox of Your Choice """ 
    f, metadata = client.get_file_and_metadata('/Documents/' + input('File'))
    out = open(input('File'), 'wb')
    out.write(f.read())
    out.close()
    print(metadata)
  def do_upload(self, arg):
    f = open(input('File to upload'), 'rb')
    response = client.put_file(input('Filename of upload'), f)
    print("uploaded:", response)
	 
if __name__ == '__main__':
   abdbx = ArcherBashDBX()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
import dropbox, cmd
class ArcherBashDBX(cmd.Cmd):
  def __init__(self): 
   app_key = 'brwekpcno93vtpz'
   app_secret = 'np5coz7g4nzp9og'


   flow = dropbox.client.DropboxOAuth2FlowNoRedirect(app_key, app_secret)

   # Have the user sign in and authorize this token
   authorize_url = flow.start()
   print('1. Go to: ' + authorize_url)
   print('2. Click "Allow" (you might have to log in first)')
   print ('3. Copy the authorization code.')
   code = input("Enter the authorization code here: ").strip()

   # This will fail if the user enters an invalid authorization code
   access_token, user_id = flow.finish(code)

   client = dropbox.client.DropboxClient(access_token)
   print('linked account: ', client.account_info())
   cmd.Cmd.__init__(self)
   self.prompt = "ArcherDBX>"
  def do_download(self, arg):
    """ Downloads a file From Dropbox of Your Choice """ 
    f, metadata = client.get_file_and_metadata('/Documents/' + input('File'))
    out = open(input('File'), 'wb')
    out.write(f.read())
    out.close()
    print(metadata)
  def do_upload(self, arg):
    f = open(input('File to upload'), 'rb')
    response = client.put_file(input('Filename of upload'), f)
    print("uploaded:", response)
	 
if __name__ == '__main__':
   abdbx = ArcherBashDBX()
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
   abdbx.cmdloop()