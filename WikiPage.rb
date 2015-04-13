require "pstore"

# a mock wiki object...
class WikiPage
  def initialize( page_name, author, contents )
    @page_name = page_name
    @revisions = Array.new

    add_revision(author, contents)
  end

  attr_reader :page_name

  def add_revision( author, contents )
    @revisions << { :created  => Time.now,
                    :author   => author,
                    :contents => contents }
  end

  def wiki_page_references
    [@page_name] + @revisions.last[:contents].scan(/\b(?:[A-Z]+[a-z]+){2,}/)
  end

  # ...
end

