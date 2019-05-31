# Better Taxonomy Autocomplete

Provides better sorting of matches when typing text into a taxonomy autocomplete field.

Drupal's taxonomy autocomplete looks for any term with the string you have typed, and returns the first ten that it finds. If you have 20 terms that match a given string, you will not ever see the other ten. This is not a problem when your string is long, and you can narrow down the results by typing more characters. However, when you're trying to find a short string, you cannot do this. 

When this module is enabled, autocomplete results for taxonomy fields will be sorted as follows:

- Perfect matches appear first.
- Terms that _start with_ the characters that you have typed are next.
- Finally, the remainder of the terms are sorted by how close the string you typed are towards the beginning of the term.

INSTALLATION
------------

Download and enable module.

CONFIGURATION
-------------

This modules does not provide any configuration. Simply enable the module to apply the better taxonomy autocomplete callback.

DEVELOPERS
----------
See better_taxonomy_autocomplete.api.php for hooks that may be implemented to alter the behavior of this module.

SPONSORS
--------

Born-Digital



