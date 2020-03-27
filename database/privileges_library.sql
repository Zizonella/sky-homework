-----------Privileges------------------------------------------------------------------------
# --------For Owner-----------------------------------------------------------------------------
# CREATE USEr 'owner'@'localhost' IDENTIFIED BY 'owner1';
# GRANT ALL PRIVILEGES ON library.* TO 'owner'@'localhost' WITH GRANT OPTION;
#

--------For Admin----------------------------------------------------------------------------
CREATE ROLE 'agency_admin';

GRANT SELECT ON library.* TO agency_admin;
GRANT UPDATE ON library.* TO agency_admin;
GRANT CREATE ON library.listing TO agency_admin;
GRANT CREATE ON library.sale TO agency_admin;
GRANT CREATE ON library.customer TO agency_admin;
GRANT CREATE ON library.agent TO agency_admin;

CREATE USER 'administrator'@'localhost' IDENTIFIED BY 'admin321';
GRANT 'agency_admin' TO 'administrator'@'localhost';



--create user 'admin'@'localhost' identified by 'admin321';
--GRANT READ ON library.* TO 'admin'@'localhost';
--GRANT UPDATE ON library.* TO 'admin'@'localhost';
--GRANT CREATE ON library.listing TO 'admin'@'localhost';
--GRANT CREATE ON library.sale TO 'admin'@'localhost';
--GRANT CREATE ON library.customer TO 'admin'@'localhost';
--GRANT CREATE ON library.agent TO 'admin'@'localhost';



--------For Agent-------------------------------------------------------------------------
CREATE ROLE 'agency_agent';

GRANT SELECT ON library.* TO 'agency_agent'; FLUSH PRIVILEGES;
REVOKE SELECT ON library.agent from 'agency_agent'; FLUSH PRIVILEGES;
GRANT SELECT (email, first_name, last_name, is_administrator) ON library.agent TO 'agency_agent'; FLUSH PRIVILEGES;
GRANT UPDATE ON library.listing TO 'agency_agent';
GRANT UPDATE ON library.sale TO 'agency_agent';
GRANT UPDATE ON library.customer TO 'agency_agent';
GRANT CREATE ON library.listing TO 'agency_agent';
GRANT CREATE ON library.sale TO 'agency_agent';
GRANT CREATE ON library.customer TO 'agency_agent';

CREATE USER 'hanna1'@'localhost' IDENTIFIED BY 'monty6';
CREATE USER 'funny2'@'localhost' IDENTIFIED BY 'fanny7';
CREATE USER 'paul3'@'localhost' IDENTIFIED BY 'pauly';
CREATE USER 'maria4'@'localhost' IDENTIFIED BY 'erich';
CREATE USER 'robert5'@'localhost' IDENTIFIED BY 'rm100';

GRANT 'agency_agent' TO
'hanna1'@'localhost',
'funny2'@'localhost',
'paul3'@'localhost',
'maria4'@'localhost',
'robert5'@'localhost';





--creare user 'hanna1'@'localhost' identified by 'monty6';
--GRANT READ ON library.* TO 'hanna1'@'localhost';
--revoke select on library.agent from 'hanna1'@'localhost';
--GRANT UPDATE ON library.listing TO 'hanna1'@'localhost';
--GRANT UPDATE ON library.sale TO 'hanna1'@'localhost';
--GRANT UPDATE ON library.customer TO 'hanna1'@'localhost';
--GRANT CREATE ON library.listing TO 'hanna1'@'localhost';
--GRANT CREATE ON library.sale TO 'hanna1'@'localhost';
--GRANT CREATE ON library.customer TO 'hanna1'@'localhost';

--------For Customer-------------------------------------------------------------------------

CREATE ROLE 'agency_customer';

GRANT SELECT (email, first_name, last_name) ON library.agent TO 'agency_customer';
GRANT SELECT (region_id, bedrooms, bathrooms, listing_type_id, has_garden, has_parking, sold, asking_price) ON library.listing TO 'agency_customer';
GRANT SELECT ON library.sale TO 'agency_customer';
GRANT SELECT ON library.listing_type TO 'agency_customer';
GRANT SELECT ON library.region TO 'agency_customer';

CREATE USER 'oliver1'@'localhost' IDENTIFIED BY '1';
CREATE USER 'amelie2'@'localhost' IDENTIFIED BY '12';
CREATE USER 'george3'@'localhost' IDENTIFIED BY '123';
CREATE USER 'harry4'@'localhost' IDENTIFIED BY '1234';
CREATE USER 'jack5'@'localhost' IDENTIFIED BY '12345';
CREATE USER 'leo6'@'localhost' IDENTIFIED BY '123456';
CREATE USER 'oscar7'@'localhost' IDENTIFIED BY '1234567';
CREATE USER 'ella8'@'localhost' IDENTIFIED BY '12345678';
CREATE USER 'ava9'@'localhost' IDENTIFIED BY '123456789';
CREATE USER 'charlie10'@'localhost' IDENTIFIED BY '1234567891';
CREATE USER 'sophia11'@'localhost' IDENTIFIED BY '12345678912';
CREATE USER 'grace12'@'localhost' IDENTIFIED BY '123456789123';
CREATE USER 'arthur13'@'localhost' IDENTIFIED BY '1234567891234';
CREATE USER 'isabella14'@'localhost' IDENTIFIED BY '12345678912345';
CREATE USER 'muhammad15'@'localhost' IDENTIFIED BY '123456789123456';

GRANT 'agency_customer' TO
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


--create user 'oliver1'@'localhost' identified by '1';
--GRANT READ (email, first_name, last_name) ON library.agent TO 'oliver1'@'localhost';
--GRANT READ (region_id, bedroom, bathroom, type_id, has_garden, has_parking, sold, asking_price) ON library.property TO 'oliver1'@'localhost';
--GRANT READ ON library.sale TO 'oliver1'@'localhost';
--GRANT READ ON library.type TO 'oliver1'@'localhost';
--GRANT READ ON library.region TO 'oliver1'@'localhost';






