<<<<<<< HEAD
<<<<<<< HEAD
import tkinter as tk
import pygubu

class Application:
    def __init__(self, master):

        #1: Create a builder
        self.builder = builder = pugubu.Builder()

        #2: Load an ui file
        builder.add_from_file('test.ui')

        #3: Create the widget using a master as parent
        self.mainwindow = builder.get_object('mainwindow', master)

if __name__ == '__main__':
    root = tk.Tk()
    app = Application(root)
=======
import tkinter as tk
import pygubu

class Application:
    def __init__(self, master):

        #1: Create a builder
        self.builder = builder = pugubu.Builder()

        #2: Load an ui file
        builder.add_from_file('test.ui')

        #3: Create the widget using a master as parent
        self.mainwindow = builder.get_object('mainwindow', master)

if __name__ == '__main__':
    root = tk.Tk()
    app = Application(root)
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
import tkinter as tk
import pygubu

class Application:
    def __init__(self, master):

        #1: Create a builder
        self.builder = builder = pugubu.Builder()

        #2: Load an ui file
        builder.add_from_file('test.ui')

        #3: Create the widget using a master as parent
        self.mainwindow = builder.get_object('mainwindow', master)

if __name__ == '__main__':
    root = tk.Tk()
    app = Application(root)
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
    root.mainloop()