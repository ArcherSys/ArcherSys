require 'sinatra'
require 'json'
post '/event_handler' do
  payload = JSON.parse(params[:payload])
  "Hey, It Worked!"
end