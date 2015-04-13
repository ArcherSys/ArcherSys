module ArcherSysOS
 require "erb"

# build data class
class Listings
  PRODUCT = { :name => "Chicken Fried Steak",
              :desc => "A well messages pattie, breaded and fried.",
              :cost => 9.95 }

  attr_reader :product, :price

  def initialize( product = "", price = "" )
    @product = product
    @price = price
  end

  def build
    b = binding
    # create and run templates, filling member data variables
    ERB.new(<<-'END_PRODUCT'.gsub(/^\s+/, ""), 0, "", "@product").result b
      <%= PRODUCT[:name] %>
      <%= PRODUCT[:desc] %>
    END_PRODUCT
    ERB.new(<<-'END_PRICE'.gsub(/^\s+/, ""), 0, "", "@price").result b
      <%= PRODUCT[:name] %> -- <%= PRODUCT[:cost] %>
      <%= PRODUCT[:desc] %>
    END_PRICE
  end
end

end