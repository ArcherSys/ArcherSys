module ArcherSysOS
   class WordDictionary
      def initialize(title)#creates a hash like a dictionary
        @title = title
        @words = Hash.new
        
     end
def add_entry(word,definition) # Add Definitions
   @words[word] = definition
end
def get_entry(word)
   return "#{!word.capitalize} : #{@words[word]}"
end
end
end