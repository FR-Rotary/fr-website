YUI = yui-compressor
YUIOPTS = --type css

CLC = closure-compiler
CLCOPTS = --compilation_level ADVANCED_OPTIMIZATIONS

COMPOSER_BIN = composer
COMPOSEROPTS = install

BOWER_BIN = bower
BOWEROPTS = install

# Touch state file after running the target to avoid unnecessary invocations.
COMPOSER = .make-composer
COMPOSER_DEP = composer.json composer.lock
BOWER = .make-bower
BOWER_DEP = bower.json

# Match CSS files, except those with suffix `.min.css`.
CSS = $(filter-out %.min.css,$(wildcard css/*.css css/**/*.css))
CSSMIN = $(CSS:%.css=%.min.css)

# Match JS files, except those with suffix `.min.js`.
JS = $(filter-out %.min.js,$(wildcard js/*.js js/**/*.js))
JSMIN = $(JS:%.js=%.min.js)

.PHONY: all css js clean clean-css clean-js
all: css js $(COMPOSER) $(BOWER)
clean: clean-css clean-js
css: $(CSSMIN)
js: $(JSMIN)

%.min.css: %.css
	@printf -- '-- Minifying %s ...\n' "$<"
	$(YUI) $(YUIOPTS) $< -o $@

%.min.js: %.js
	@printf -- '-- Minifying %s ...\n' "$<"
	$(CLC) $(CLCOPTS) $< --js_output_file $@

$(COMPOSER): $(COMPOSER_DEP)
	@printf -- '-- Running Composer to satisfy PHP dependencies ...\n'
	$(COMPOSER_BIN) $(COMPOSEROPTS)
	@touch $@

$(BOWER): $(BOWER_DEP)
	@printf -- '-- Running Bower to satisfy JS dependencies ...\n'
	$(BOWER_BIN) $(BOWEROPTS)
	@touch $@

clean-css:
	@printf -- '-- Cleaning up minified CSS ...\n'
	rm -f -- $(CSSMIN)

clean-js:
	@printf -- '-- Cleaning up minified JS ...\n'
	rm -f -- $(JSMIN)
