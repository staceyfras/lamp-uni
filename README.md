# lamp-uni

Remember to use correct credentials for server login on our Interfaces.
ssh cs332a18@shell.ecs.fullerton.edu

Database(official project):
mysql -h mariadb -u cs332a18 -p
password: kexoocei
"use cs332aXX". Use "source createTables.sql; source insertData.sql;" in mariadb console to create db and fill with data.
If need to reset db, use "drop table x;" where x is the current table you want to drop, createTables.sql does not drop in the correct order due to FK restraints. You can also drop the whole database and recreate it: "drop database x" and "create database x"

student + professor portal + query are completed.

all .sql files are successful.

TODO:
insertData.sql needs to be populated with data corresponding to project requirements.

drop table if exists implementation?

delete table .sql?

COMPLETE: #4 - #6 on project requirements
https://docs.google.com/document/d/1bDSYHmkxgwYZHG5TzZ-9n1Al_Nv0awZV2ps4rnKf-gY/edit?usp=sharing

JOHN: How to commit your insertData.sql file:
git checkout <newbranchname> insertData.sql
  
git commit -am "replacing inserData.sql"
git push origin <newbranchname>
  
then go on github.com and make a pull request for that branch.... i think this should work?

https://jasonrudolph.com/blog/2009/02/25/git-tip-how-to-merge-specific-files-from-another-branch/

^ more info



