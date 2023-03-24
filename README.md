Polyphonic Composer Configurations
==================================

Experiment on running different `composer.json`s with possibly different dependencies within the same codebase.

The best way from the dependency hell into the dependency-hell-resolution hell! :shrug:

## HOW
TBD…
### _Local Procedure Call_
* serialize request
* `shell_exec` with string argument
* pick autoloader & service-definitions via ENV var
* process request
* echo serialized answer
* unserialize answer

## RAVELIN
ACL, Bastion etc… TBD

## TODOs
* experiment with unix sockets
* add igbinary
* `Symbiont` still callable i.e autoloadable from root flavour
  * look into https://packagist.org/packages/mcaskill/composer-exclude-files
* `post-autoload-dump` for installing / dumping autoloader for the symbionts
  * automate for all subdirectories in polyphony
