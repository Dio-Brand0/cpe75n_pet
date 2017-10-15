# cpe75n_pet
CpE75N Project - Project Estorya Ta

Hey goise.. I'm placing instructions here on how to import this thing.

1.) Import the database to MySQL phpMyAdmin. The filename is db_pet.sql located at the root.
2.) Pull the latest commit.
	a.) If your git is not working on xampp/htdocs/pet, copy pasta your repo so that the pulled version is found there. You may also want to have your git working on that folder from then on.
3.) Pull out your XAMPP control panel. On the Apache row, click on config then select httpd.conf.
4.) Look for the line that says DocumentRoot. Just point it to the public folder of pet. It should look like DocumentRoot "C:/xampp/htdocs/pet/public".
5.) Go to localhost on your browser.