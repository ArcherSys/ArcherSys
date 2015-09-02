<<<<<<< HEAD
<<<<<<< HEAD
files =  semver.browser.js \
         semver.min.js \
				 semver.browser.js.gz \
				 semver.min.js.gz

all: $(files)

clean:
	rm -f $(files)

semver.browser.js: head.js semver.js foot.js
	( cat head.js; \
		cat semver.js | \
			egrep -v '^ *\/\* nomin \*\/' | \
			perl -pi -e 's/debug\([^\)]+\)//g'; \
		cat foot.js ) > semver.browser.js

semver.min.js: semver.browser.js
	uglifyjs -m <semver.browser.js >semver.min.js

%.gz: %
	gzip --stdout -9 <$< >$@

.PHONY: all clean
=======
files =  semver.browser.js \
         semver.min.js \
				 semver.browser.js.gz \
				 semver.min.js.gz

all: $(files)

clean:
	rm -f $(files)

semver.browser.js: head.js semver.js foot.js
	( cat head.js; \
		cat semver.js | \
			egrep -v '^ *\/\* nomin \*\/' | \
			perl -pi -e 's/debug\([^\)]+\)//g'; \
		cat foot.js ) > semver.browser.js

semver.min.js: semver.browser.js
	uglifyjs -m <semver.browser.js >semver.min.js

%.gz: %
	gzip --stdout -9 <$< >$@

.PHONY: all clean
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
=======
files =  semver.browser.js \
         semver.min.js \
				 semver.browser.js.gz \
				 semver.min.js.gz

all: $(files)

clean:
	rm -f $(files)

semver.browser.js: head.js semver.js foot.js
	( cat head.js; \
		cat semver.js | \
			egrep -v '^ *\/\* nomin \*\/' | \
			perl -pi -e 's/debug\([^\)]+\)//g'; \
		cat foot.js ) > semver.browser.js

semver.min.js: semver.browser.js
	uglifyjs -m <semver.browser.js >semver.min.js

%.gz: %
	gzip --stdout -9 <$< >$@

.PHONY: all clean
>>>>>>> b875702c9c06ab5012e52ff4337439b03918f453
