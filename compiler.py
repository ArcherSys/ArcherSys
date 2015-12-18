infile = open(input("App Zip"),"rb")
outfile = open(input("AppFileName:") + ".bryapp","wb")
outfile.write("BRYANTCOMPILERAPPLICATIONPACKAGE".encode('utf-8'))
outfile.write(infile.read())