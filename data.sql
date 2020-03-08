DELETE FROM sale;
DELETE FROM property;
DELETE FROM customer;
DELETE FROM agent;
DELETE FROM region;
DELETE FROM type;



INSERT INTO agent( first_name, last_name, password, email, is_administrator, is_employed) VALUES ('Hanna', 'Montague', 'monty6', 'monty6@hh.uk', true, true);
INSERT INTO agent(first_name, last_name, password, email, is_administrator, is_employed) VALUES ('Fanny', 'Simpson', 'fanny7', 'fannysim@ssj.uk', false, true);
INSERT INTO agent( first_name, last_name, password, email, is_administrator, is_employed) VALUES ('Paul', 'Harrison', 'pauly', 'paul@pa.uk', false, true);
INSERT INTO agent(first_name, last_name, password, email, is_administrator, is_employed) VALUES ('Maria', 'Fromm', 'erich','emf@w.uk', false, true);
INSERT INTO agent( first_name, last_name, password, email, is_administrator, is_employed) VALUES ('Robert', 'Melton', 'rm100', 'rm@ee.oo', false, true);


INSERT INTO region VALUES (1, 'North');
INSERT INTO region VALUES (2, 'West');
INSERT INTO region VALUES (3, 'South');
INSERT INTO region VALUES (4, 'East');
INSERT INTO region VALUES (5, 'Central');

INSERT INTO type VALUES (1, 'cottage');
INSERT INTO type VALUES (2, 'flat');
INSERT INTO type VALUES (3, 'house');
INSERT INTO type VALUES (4, 'bungalow');

INSERT INTO customer VALUES (1, 'Missy', 'Simpson', 'missy@hotmail.com', 'mis99');
INSERT INTO customer VALUES (2, 'Carter', 'Althea', 'mauris.molestie@quam.ca', 'ath66');
INSERT INTO customer VALUES (3, 'Ulla', 'Mason', 'amet@dis.com', 'ull72');
INSERT INTO customer VALUES (4, 'Portia', 'Greene', 'cras.eget.nisi@Proindolor.net', 'portiagr22');
INSERT INTO customer VALUES (5, 'Mona', 'Gregory', 'monag@hotmail.com', 'mona652');
INSERT INTO customer VALUES (6, 'Birdie', 'Beach', 'in.consectetuer.ipsum@ac.net', 'beach');
INSERT INTO customer VALUES (7, 'Nathan', 'Wagner', 'lacinia.Sed@ligulaDonecluctus.org', 'wagnermx');
INSERT INTO customer VALUES (8, 'Commodus', 'Gaudi', 'commodo.ipsum@faucs.edu', 'commodus');
INSERT INTO customer VALUES (9, 'Wagner', 'Herr', 'sapien@dignissim.com', 'skinfood');
INSERT INTO customer VALUES (10, 'maura44', 'Sissie', 'Maura', 'mauris.sit.amet@nibhlaciniaorci.com');
INSERT INTO customer VALUES (11, 'mis55', 'Sophia', 'Qimpson', 'nisi.nibh.lacinia@atauctorullamcorper.edu');
INSERT INTO customer VALUES (12, 'Monica', 'Addison', 'cursus.et.eros@in.ca', 'monical');

INSERT INTO property (id, region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (1, 1, 'NW6 3JY',2, 1, 2, false, false, false, 300000);
INSERT INTO property (id,region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (2, 2, 'W11 2JR',3, 1, 2, false, false, false, 534000);
INSERT INTO property (id, region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (3, 3, 'SW16 4EA',2, 1, 3, false, false, false, 290000);
INSERT INTO property (id,region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (4, 4, 'E6 5JG',2, 1, 3, false, false, false, 300000);
INSERT INTO property (id, region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (5, 1, 'NW8 3JY',3, 1, 3, true, true, false, 650000);
INSERT INTO property (id,region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (6, 3, 'S42 9QB',4, 3, 1,  true, true, false, 1000000);
INSERT INTO property (id, region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (7, 3, 'SW16 4AL',2, 1, 2, false, false, false, 420000);
INSERT INTO property (id, region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (8, 3, 'SW6 3JY',1, 1, 2, false, false, false, 300000);
INSERT INTO property (id,region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (9, 4, 'E7 9PX',3, 1, 3, true, true, false, 350000);
INSERT INTO property (id,region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES	(10, 2, 'TW3 5ED',	2,	2,	2,	true, true,	false,	650000);
INSERT INTO property (id,region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES	(11, 1, 'KK6 3JD',	2,	1,	3,	true, true,	false,	2000000);


# property 1 sold
INSERT INTO sale VALUES (1,'2019-05-21',1,3,1,576327);
UPDATE property SET sold = 1 WHERE id = 1;

INSERT INTO sale VALUES (2,'2018-12-27',3,5,2,538047);
UPDATE property SET sold = 1 WHERE id = 2;

INSERT INTO sale VALUES (3,'2020-02-18',2,6,5,870831);
UPDATE property SET sold = 1 WHERE id = 5;

INSERT INTO sale VALUES (4,'2020-1-24',1,1,7,443200);
UPDATE property SET sold = 1 WHERE id = 7;

INSERT INTO sale VALUES (5,'2017-02-01',3,8,8,258186);
UPDATE property SET sold = 1 WHERE id = 8;




