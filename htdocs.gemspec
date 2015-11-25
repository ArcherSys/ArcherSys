# coding: utf-8
lib = File.expand_path('../lib', __FILE__)
$LOAD_PATH.unshift(lib) unless $LOAD_PATH.include?(lib)
require 'htdocs/version'

Gem::Specification.new do |spec|
  spec.name          = "archersysos"
  spec.version       = ArcherSysOS::VERSION
  spec.authors       = ["Weldon Henson"]
  spec.email         = ["acosf2014.pdflint@gmail.com"]

  spec.summary       = %q{todo: write a short summary, because rubygems requires one.}
  spec.description   = %q{todo: write a longer description or delete this line.}
  spec.homepage      = "todo: put your gem's website or public repo url here."


  spec.files         = `git ls-files -z`.split("\x0").reject { |f| f.match(%r{^(test|spec|features)/}) }
  spec.bindir        = "exe"
  spec.executables   = spec.files.grep(%r{^exe/}) { |f| File.basename(f) }
  spec.require_paths = ["lib"]


  if spec.respond_to?(:metadata)
    spec.metadata['allowed_push_host'] = "TODO: Set to 'http://mygemserver.com' to prevent pushes to rubygems.org, or delete to allow pushes to any server."
  end

  spec.add_development_dependency "bundler", "~> 1.8"
  spec.add_development_dependency "rake", "~> 10.0"


end
