crud_ci
==============

A simple CRUD made in CodeIgniter.

Demo online [crud_ci.aws.af.cm](http://crud_ci.aws.af.cm/ "crud_ci")

---------------------------------------

Installation
------------

*1.* Database schema. run this script.

```bash
	CREATE DATABASE crud;
	USE crud;
	CREATE TABLE IF NOT EXISTS `persons` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(45) NOT NULL,
	`email` VARCHAR(45) NOT NULL,
	PRIMARY KEY (`id`)
	) ENGINE=InnoDB
```


Developed by:
--------------

**Gustavo de Souza Lima**
+ Twitter: [@dodilei](http://twitter.com/dodilei "Twitter") | Facebook: [gustavo.w4lker](http://www.facebook.com/gustavo.w4lker/ "Facebook") | GitHub: [gustavosouzalima](http://github.com/gustavox4ids "GitHub")

---------------------------------------

License
---------------
### WTFPL
            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
                    Version 2, December 2004

	Copyright (C) 2004 Sam Hocevar <sam@hocevar.net>

	Everyone is permitted to copy and distribute verbatim or modified
	copies of this license document, and changing it is allowed as long
	as the name is changed.

            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
	TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

	0. You just DO WHAT THE FUCK YOU WANT TO.
