# -*- encoding: utf-8 -*-
# stub: bombshell 0.1.6 ruby lib

Gem::Specification.new do |s|
  s.name = "bombshell"
  s.version = "0.1.6"

  s.required_rubygems_version = Gem::Requirement.new(">= 0") if s.respond_to? :required_rubygems_version=
  s.require_paths = ["lib"]
  s.authors = ["Andy Rossmeissl"]
  s.date = "2011-12-08"
  s.description = "Give your application or gem an interactive shell, complete with custom prompts, tab completion, and various callbacks. Commands are defined as Ruby methods and can be grouped into logical subshells."
  s.email = "andy@rossmeissl.net"
  s.extra_rdoc_files = ["LICENSE.txt", "README.markdown"]
  s.files = ["LICENSE.txt", "README.markdown"]
  s.homepage = "http://github.com/rossmeissl/bombshell"
  s.licenses = ["MIT"]
  s.rubygems_version = "2.4.5"
  s.summary = "Custom IRB consoles made easy"

  s.installed_by_version = "2.4.5" if s.respond_to? :installed_by_version

  if s.respond_to? :specification_version then
    s.specification_version = 3

    if Gem::Version.new(Gem::VERSION) >= Gem::Version.new('1.2.0') then
      s.add_development_dependency(%q<aruba>, [">= 0.3.4"])
      s.add_development_dependency(%q<bueller>, [">= 0"])
    else
      s.add_dependency(%q<aruba>, [">= 0.3.4"])
      s.add_dependency(%q<bueller>, [">= 0"])
    end
  else
    s.add_dependency(%q<aruba>, [">= 0.3.4"])
    s.add_dependency(%q<bueller>, [">= 0"])
  end
end
