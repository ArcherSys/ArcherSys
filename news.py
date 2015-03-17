from urllib import urlopen
from json import load
url =  "http://api.npr.org/query"
url = url + "?apiKey="
key = "API_KEY"
url= url + key
url += '&numResults=3&format=json'
url += '&id='
npr_id = raw_input("Which NPR ID do you want to query?")
url += npr_id
print(url)
response = urlopen(url)
json_obj = load(response)
for story in json_obj['list']['story']:
    print(story['title']['$text'])
