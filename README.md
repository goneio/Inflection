Inflection
==========
Originally built from source long-lost to the mists of time, only closest reference I can find is here: http://fossies.org/linux/Neos/Packages/Framework/TYPO3.Kickstart/Resources/Private/PHP/Sho_Inflect.php

Original Readme below:

Thanks to http://www.eval.ca/articles/php-pluralize (MIT license)
          http://dev.rubyonrails.org/browser/trunk/activesupport/lib/active_support/inflections.rb (MIT license)
          http://www.fortunecity.com/bally/durrus/153/gramch13.html
          http://www2.gsu.edu/~wwwesl/egw/crump.htm
	//
Changes (12/17/07)
  Major changes
  --
  Fixed irregular noun algorithm to use regular expressions just like the original Ruby source.
      (this allows for things like fireman -> firemen
  Fixed the order of the singular array, which was backwards.
	//
  Minor changes
  --
  Removed incorrect pluralization rule for /([^aeiouy]|qu)ies$/ => $1y
  Expanded on the list of exceptions for *o -> *oes, and removed rule for buffalo -> buffaloes
  Removed dangerous singularization rule for /([^f])ves$/ => $1fe
  Added more specific rules for singularizing lives, wives, knives, sheaves, loaves, and leaves and thieves
  Added exception to /(us)es$/ => $1 rule for houses => house and blouses => blouse
  Added excpetions for feet, geese and teeth
  Added rule for deer -> deer
Changes:
  Removed rule for virus -> viri
  Added rule for potato -> potatoes
  Added rule for *us -> *uses
