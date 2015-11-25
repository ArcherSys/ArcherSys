# coding: utf-8
lib = File.expand_path('../lib', __FILE__)
$LOAD_PATH.unshift(lib) unless $LOAD_PATH.include?(lib)
require 'ArcherSysOSApplication/version'

Gem::Specification.new do |spec|
  spec.name          = "ArcherSysOSApplication"
  spec.version       = ArcherSysOSApplication::VERSION
  spec.authors       = ["usage: git [--version] [--help] [-C <path>] [-c name=value]\n           [--exec-path[=<path>]] [--html-path] [--man-path] [--info-path]\n           [-p|--paginate|--no-pager] [--no-replace-objects] [--bare]\n           [--git-dir=<path>] [--work-tree=<path>] [--namespace=<name>]\n           <command> [<args>]\n\nThe most commonly used git commands are:\n   add        Add file contents to the index\n   bisect     Find by binary search the change that introduced a bug\n   branch     List, create, or delete branches\n   checkout   Checkout a branch or paths to the working tree\n   clone      Clone a repository into a new directory\n   commit     Record changes to the repository\n   diff       Show changes between commits, commit and working tree, etc\n   fetch      Download objects and refs from another repository\n   grep       Print lines matching a pattern\n   init       Create an empty Git repository or reinitialize an existing one\n   log        Show commit logs\n   merge      Join two or more development histories together\n   mv         Move or rename a file, a directory, or a symlink\n   pull       Fetch from and integrate with another repository or a local branch\n   push       Update remote refs along with associated objects\n   rebase     Forward-port local commits to the updated upstream head\n   reset      Reset current HEAD to the specified state\n   rm         Remove files from the working tree and from the index\n   show       Show various types of objects\n   status     Show the working tree status\n   tag        Create, list, delete or verify a tag object signed with GPG\n\n'git help -a' and 'git help -g' lists available subcommands and some\nconcept guides. See 'git help <command>' or 'git help <concept>'\nto read about a specific subcommand or concept."]
  spec.email         = ["usage: git [--version] [--help] [-C <path>] [-c name=value]\n           [--exec-path[=<path>]] [--html-path] [--man-path] [--info-path]\n           [-p|--paginate|--no-pager] [--no-replace-objects] [--bare]\n           [--git-dir=<path>] [--work-tree=<path>] [--namespace=<name>]\n           <command> [<args>]\n\nThe most commonly used git commands are:\n   add        Add file contents to the index\n   bisect     Find by binary search the change that introduced a bug\n   branch     List, create, or delete branches\n   checkout   Checkout a branch or paths to the working tree\n   clone      Clone a repository into a new directory\n   commit     Record changes to the repository\n   diff       Show changes between commits, commit and working tree, etc\n   fetch      Download objects and refs from another repository\n   grep       Print lines matching a pattern\n   init       Create an empty Git repository or reinitialize an existing one\n   log        Show commit logs\n   merge      Join two or more development histories together\n   mv         Move or rename a file, a directory, or a symlink\n   pull       Fetch from and integrate with another repository or a local branch\n   push       Update remote refs along with associated objects\n   rebase     Forward-port local commits to the updated upstream head\n   reset      Reset current HEAD to the specified state\n   rm         Remove files from the working tree and from the index\n   show       Show various types of objects\n   status     Show the working tree status\n   tag        Create, list, delete or verify a tag object signed with GPG\n\n'git help -a' and 'git help -g' lists available subcommands and some\nconcept guides. See 'git help <command>' or 'git help <concept>'\nto read about a specific subcommand or concept."]

  spec.summary       = %q{TODO: Write a short summary, because Rubygems requires one.}
  spec.description   = %q{TODO: Write a longer description or delete this line.}
  spec.homepage      = "TODO: Put your gem's website or public repo URL here."

  spec.license       = "MIT"


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
