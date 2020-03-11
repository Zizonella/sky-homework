DROP ROLE IF EXISTS agent;
DROP ROLE IF EXISTS administrator;
DROP ROLE IF EXISTS offsite_administrator;

DROP USER IF EXISTS 'fanny'@'localhost';
DROP USER IF EXISTS 'fanny'@'%';
DROP USER IF EXISTS 'hanna'@'%';
DROP USER IF EXISTS 'hanna'@'localhost';
DROP USER IF EXISTS 'paul'@'localhost';
DROP USER IF EXISTS 'maria'@'localhost';
DROP USER IF EXISTS 'robert'@'localhost';

# Because this is a small agency, the owner who works at the agency is also an admin so we don't need a separate owner role.
# ROLES
CREATE ROLE administrator;
GRANT ALL PRIVILEGES ON library.* TO administrator WITH GRANT OPTION ;

# The GRANT OPTION privilege enables you to give to other users or remove from other users those privileges that you yourself possess.

CREATE ROLE offsite_administrator;
GRANT SELECT,INSERT,UPDATE,DELETE on library.property TO offsite_administrator;
GRANT SELECT,INSERT,UPDATE,DELETE on library.sale TO offsite_administrator;

# USERS ---- > This password is NOT the same Password as we have inserted into the database. This password is only for logging in.

CREATE OR REPLACE USER 'fanny'@'localhost' IDENTIFIED BY 'password2';
GRANT administrator TO 'fanny'@'localhost';

CREATE OR REPLACE USER 'hanna'@'localhost' IDENTIFIED BY 'password3';
GRANT administrator TO 'hanna'@'localhost';

# Login from the outside of the office
CREATE OR REPLACE USER 'fanny'@'%' IDENTIFIED BY 'password2';
GRANT offsite_administrator TO 'fanny'@'%';

CREATE OR REPLACE USER 'hanna'@'%' IDENTIFIED BY 'password3';
GRANT offsite_administrator TO 'hanna'@'%';

# WHEN YOU LOG IN YOU ARE NOT AUTOMATICALLY ASSIGNED A ROLE, YOU HAVE TO SET IT
# first log in, second set the role ---> SET ROLE administrator, third now if you type show databases it will show you all the databases you have permission to see;
# because of this it is a bad idea to use roles with customers. Ideally customers would not have access to the database at all!


#
CREATE OR REPLACE USER 'oliver1'@'localhost' IDENTIFIED BY '1';
CREATE OR REPLACE USER 'amelie2'@'localhost' IDENTIFIED BY '12';
CREATE OR REPLACE USER 'george3'@'localhost' IDENTIFIED BY '123';
CREATE OR REPLACE USER 'harry4'@'localhost' IDENTIFIED BY '1234';
CREATE OR REPLACE USER 'jack5'@'localhost' IDENTIFIED BY '12345';
CREATE OR REPLACE USER 'leo6'@'localhost' IDENTIFIED BY '123456';
CREATE OR REPLACE USER 'oscar7'@'localhost' IDENTIFIED BY '1234567';
CREATE OR REPLACE USER 'ella8'@'localhost' IDENTIFIED BY '12345678';
CREATE OR REPLACE USER 'ava9'@'localhost' IDENTIFIED BY '123456789';
CREATE OR REPLACE USER 'charlie10'@'localhost' IDENTIFIED BY '1234567891';
CREATE OR REPLACE USER 'sophia11'@'localhost' IDENTIFIED BY '12345678912';
CREATE OR REPLACE USER 'grace12'@'localhost' IDENTIFIED BY '123456789123';
CREATE OR REPLACE USER 'arthur13'@'localhost' IDENTIFIED BY '1234567891234';
CREATE OR REPLACE USER 'isabella14'@'localhost' IDENTIFIED BY '12345678912345';
CREATE OR REPLACE USER 'muhammad15'@'localhost' IDENTIFIED BY '123456789123456';


GRANT SELECT (region_id,bedrooms,bathrooms,type_id,has_garden,has_parking,sold,asking_price) ON library.property  TO
'oliver1'@'localhost',
'amelie2'@'localhost',
'george3'@'localhost',
'harry4'@'localhost',
'jack5'@'localhost',
'leo6'@'localhost',
'oscar7'@'localhost',
'ella8'@'localhost',
'ava9'@'localhost',
'charlie10'@'localhost',
'sophia11'@'localhost',
'grace12'@'localhost',
'arthur13'@'localhost',
'isabella14'@'localhost',
'muhammad15'@'localhost';





