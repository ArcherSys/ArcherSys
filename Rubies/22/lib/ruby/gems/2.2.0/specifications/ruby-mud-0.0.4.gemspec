# -*- encoding: utf-8 -*-
# stub: ruby-mud 0.0.4 ruby lib

Gem::Specification.new do |s|
  s.name = "ruby-mud"
  s.version = "0.0.4"

  s.required_rubygems_version = Gem::Requirement.new(">= 0") if s.respond_to? :required_rubygems_version=
  s.require_paths = ["lib"]
  s.authors = ["Rick Carlino"]
  s.date = "2014-04-20"
  s.description = "A very simple framework for building text based games in Ruby."
  s.email = "please-use-github@rickcarlino.com"
  s.homepage = "https://github.com/rickcarlino/mud"
  s.licenses = ["MIT"]
  s.rubygems_version = "2.4.5"
  s.summary = "Framework for building text based adventure games in Ruby."

  s.installed_by_version = "2.4.5" if s.respond_to? :installed_by_version

  if s.respond_to? :specification_version then
    s.specification_version = 4

    if Gem::Version.new(Gem::VERSION) >= Gem::Version.new('1.2.0') then
      s.add_development_dependency(%q<rspec>, [">= 0"])
      s.add_development_dependency(%q<pry>, [">= 0"])
      s.add_development_dependency(%q<simplecov>, [">= 0"])
    else
      s.add_dependency(%q<rspec>, [">= 0"])
      s.add_dependency(%q<pry>, [">= 0"])
      s.add_dependency(%q<simplecov>, [">= 0"])
    end
  else
    s.add_dependency(%q<rspec>, [">= 0"])
    s.add_dependency(%q<pry>, [">= 0"])
    s.add_dependency(%q<simplecov>, [">= 0"])
  end
end
