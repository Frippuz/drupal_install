drupal_install
==============

Drupal install

This is an installationscript for a generic Drupal site.

The script installs a new site under desired folder with the basic common folder hierarchy:
- a make script fetches common modules, libraries and themes
- a subtheme is generated
- the /etc/hosts file is updated
- virtual host files are created for apache and nginx
- database and database user are created

Installation
------------

Copy alla files to a desired local i.e. /usr/local
Create a symlink for the initsite script

sudo ln -s [path to initsite] /usr/local/bin/initsite
