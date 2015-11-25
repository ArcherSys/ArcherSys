from Lib.archersys.core.BryantCompiler.decompressor_bryapp import extractAll
appfile = input("app")
infile = open(appfile, "rb")

outfile = open(appfile + ".bryapp.zip", "wb")

outfile.write(infile.read()[len("BRYANTCOMPILERAPPLICATIONPACKAGE"):])
extractAll(appfile + '.zip')