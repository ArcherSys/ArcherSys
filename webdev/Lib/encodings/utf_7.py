<<<<<<< HEAD
""" Python 'utf-7' Codec

Written by Brian Quinlan (brian@sweetapp.com).
"""
import codecs

### Codec APIs

encode = codecs.utf_7_encode

def decode(input, errors='strict'):
    return codecs.utf_7_decode(input, errors, True)

class IncrementalEncoder(codecs.IncrementalEncoder):
    def encode(self, input, final=False):
        return codecs.utf_7_encode(input, self.errors)[0]

class IncrementalDecoder(codecs.BufferedIncrementalDecoder):
    _buffer_decode = codecs.utf_7_decode

class StreamWriter(codecs.StreamWriter):
    encode = codecs.utf_7_encode

class StreamReader(codecs.StreamReader):
    decode = codecs.utf_7_decode

### encodings module API

def getregentry():
    return codecs.CodecInfo(
        name='utf-7',
        encode=encode,
        decode=decode,
        incrementalencoder=IncrementalEncoder,
        incrementaldecoder=IncrementalDecoder,
        streamreader=StreamReader,
        streamwriter=StreamWriter,
    )
=======
""" Python 'utf-7' Codec

Written by Brian Quinlan (brian@sweetapp.com).
"""
import codecs

### Codec APIs

encode = codecs.utf_7_encode

def decode(input, errors='strict'):
    return codecs.utf_7_decode(input, errors, True)

class IncrementalEncoder(codecs.IncrementalEncoder):
    def encode(self, input, final=False):
        return codecs.utf_7_encode(input, self.errors)[0]

class IncrementalDecoder(codecs.BufferedIncrementalDecoder):
    _buffer_decode = codecs.utf_7_decode

class StreamWriter(codecs.StreamWriter):
    encode = codecs.utf_7_encode

class StreamReader(codecs.StreamReader):
    decode = codecs.utf_7_decode

### encodings module API

def getregentry():
    return codecs.CodecInfo(
        name='utf-7',
        encode=encode,
        decode=decode,
        incrementalencoder=IncrementalEncoder,
        incrementaldecoder=IncrementalDecoder,
        streamreader=StreamReader,
        streamwriter=StreamWriter,
    )
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
