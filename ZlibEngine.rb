module ArcherSysOS
require "zlib"
 class ZLibEngine #Engine for Inflating and Deflating files
   def initialize(file)
     @data_to_compress = File.read(file)
     puts "Input size: #{@data_to_compress.size}"
   end
   def deflate()  #Compresses Data
    data = Zlib::Deflate.deflate(@data_to_compress)
    puts "Compressed size: #{data.size}"
    return data
   end
   def inflate() #Returns Decompressed Data
      data = Zlib::Inflate.inflate(data_compressed)
      puts "Uncompressed data is: #{data}"
      return data
   end
end

end