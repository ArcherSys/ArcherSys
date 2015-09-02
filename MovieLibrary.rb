module ArcherSysOS
require 'erb'
class MovieLibrary
  extend ERB::DefMethod
  def_erb_method('render()', 'movielibrary.rhtml')
  def initialize(items)
    @movies = items
  end
end
end
