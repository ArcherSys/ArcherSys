<<<<<<< HEAD
from json import load

from urllib2 import urlopen
url =  "http://api.npr.org/query"
url = url + "?apiKey="
key = "API_KEY"
url = url + key
url += '&numResults=3&format=json'
url += '&id='
npr_id = raw_input("Which NPR ID do you want to query?")
url += npr_id
print(url)
response = urlopen(url)
json_obj = load(response)
for story in json_obj:
  for list in json_obj:
   for story in list:
    print(story['title']['$text'])
=======
from json import load

from urllib2 import urlopen
url =  "http://api.npr.org/query"
url = url + "?apiKey="
key = "API_KEY"
url = url + key
url += '&numResults=3&format=json'
url += '&id='
npr_id = raw_input("Which NPR ID do you want to query?")
url += npr_id
print(url)
response = urlopen(url)
json_obj = load(response)
for story in json_obj:
  for list in json_obj:
   for story in list:
    print(story['title']['$text'])
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
