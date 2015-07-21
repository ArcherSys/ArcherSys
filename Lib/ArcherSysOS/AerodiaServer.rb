module ArcherSysOS
require 'ruby_mud'
class MudServer::DefaultController
   def on_start
    # Send messages via send_text.
    send_text "Welcome! Here's a list of available commands"
    send_text "TIME  : See the current time."
    send_text "SAY   : Talk."
    send_text "SECRET: Go somewhere super secret."
    send_text "QUIT  : Disconnect from the server."
    
  end
   def allowed_methods
    super + ['time', 'secret', 'say','study'] # Quit is available by default via `super`
                                      # No need to implement it yourself.
  end
  # User input after a command is provided via `params`.
  def say
   send_text "You just said: #{params}"
  end

  def time
    send_text "The time is now #{Time.now}"
  end
  #Transfer people to a different menu / area using `transfer_to`
  def secret
    transfer_to PokerRoom # Define the PokerRoom as a controller.
  end
  def study
     transfer_to StudyHall
  end
end
class PokerRoom < MudServer::AbstractController # controllers are inherited.
  def on_start
    send_text 'You found the secret poker room!'
    send_text 'Type DEAL to get a hand of cards.'
  end

  def allowed_methods
    ['quit', 'deal']
  end

  def deal
    send_text 'Did I say poker? I meant dice.'
    send_text "You rolled a #{rand(5)+1}."
  end
end
class StudyHall < MudServer::AbstractController # Main course of ArcherSys OS Cashew's 
    def on_start
       send_text 'You are now in the Study Hall! Use this room to collaborate with study group members'
       send_text  'Commands: \n'
     end
    def allowed_methods
        super + ['quiz','lookup','talk','review_notes','quit']
     end
    def quiz #goes to F16Cockpit
       transfer_to F16Cockpit
     end
end
class F16Cockpit < MudServer::AbstractController
end

server = MudServer.new '0.0.0.0', '4321' # Run server on all IPs on port 4321.
                                         # Defaults to 0.0.0.0:4000 if none set.
server.start # Accept connections

puts 'Press enter to exit.'

server.stop if gets.chomp
end
