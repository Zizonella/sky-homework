DELETE FROM property;
DELETE FROM agent;
DELETE FROM region;
DELETE FROM type;



INSERT INTO agent( first_name, last_name, password, email) VALUES ('Hanna', 'Montague', 'monty6', 'monty6@hh.uk');
INSERT INTO agent(first_name, last_name, password, email) VALUES ('Fanny', 'Simpson', 'fanny7', 'fannysim@ssj.uk');
INSERT INTO agent( first_name, last_name, password, email) VALUES ('Paul', 'Harrison', 'pauly', 'paul@pa.uk');
INSERT INTO agent(first_name, last_name, password, email) VALUES ('Maria', 'Fromm', 'erich','emf@w.uk');
INSERT INTO agent( first_name, last_name, password, email) VALUES ('Robert', 'Melton', 'rm100', 'rm@ee.oo');

INSERT INTO region VALUES (1, 'North');
INSERT INTO region VALUES (2, 'West');
INSERT INTO region VALUES (3, 'South');
INSERT INTO region VALUES (4, 'East');
INSERT INTO region VALUES (5, 'Central');

INSERT INTO type VALUES (1, 'cottage');
INSERT INTO type VALUES (2, 'flat');
INSERT INTO type VALUES (3, 'house');
INSERT INTO type VALUES (4, 'bungalow');

INSERT INTO property (id, region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (1, 1, 'NW6 3JY',2, 1, 2, false, false, true, 300000);
INSERT INTO property (id,region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (2, 2, 'W11 2JR',3, 1, 2, false, false, true, 534000);
INSERT INTO property (id, region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (3, 3, 'SW16 4EA',2, 1, 3, false, false, false, 290000);
INSERT INTO property (id,region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (4, 4, 'E6 5JG',2, 1, 3, false, false, false, 300000);
INSERT INTO property (id, region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (5, 1, 'NW8 3JY',3, 1, 3, true, true, true, 650000);
INSERT INTO property (id,region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (6, 3, 'S42 9QB',4, 3, 1,  true, true, false, 1000000);
INSERT INTO property (id, region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (7, 3, 'SW16 4AL',2, 1, 2, false, false, true, 420000);
INSERT INTO property (id, region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (8, 3, 'SW6 3JY',1, 1, 2, false, false, true, 300000);
INSERT INTO property (id,region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (9, 4, 'E7 9PX',3, 1, 3, true, true, true, 350000);
