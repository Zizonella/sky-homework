#I am a customer #
# who wants to know buy a 1 bedroom apartment in East London # so that I can relocate.
SELECT listing.id, name AS region FROM listing INNER JOIN region ON listing.region_id = region.id WHERE region.name = 'East' AND bedrooms = 1;
#I am a customer # who wants to know what a 2 bedroom apartment in West London costs # so that I can potentially buy one.
SELECT listing.id, listing, name AS region FROM listing INNER JOIN region ON listing.region_id = region.id WHERE region.name= 'West' AND bedrooms = 2;

# I am a customer # who wants to buy a property for a maximum of 500000 pounds # so I stay within my budget.
SELECT id, asking_price AS properties_within_budget FROM listing WHERE asking_price <= 500000 ORDER BY asking_price asc ;
#I am a customer # who wants to know if property 1 has been sold in the past # so I can find out when it was sold and at what price.
SELECT sale.id, date, price, listing_id AS property_reference FROM sale WHERE listing_id= '1';

# I am a customer who wants to sign up for the mailing list because I want to know more about properties in SW London;
SELECT email FROM customer;

# I am a customer who wants to unsubscribe from the mailing list because I already bought a house;
UPDATE customer SET customer.mailing_list = false WHERE id = 12;

# As an agent I want to see all listings that are not sold so that I can advertise it.
SELECT * FROM listing WHERE sold = false;

# As an agent, I would like to add a new listing so that I can sell it.
UPDATE listing  SET bedrooms = 3, bathrooms = 3, asking_price = 750000 WHERE id=4;
# As an agent # I want to inform my customer how many years it will take to pay of their mortgage if they have £300,000 deposit and will pay £1000 each month # so that the customer has more knowledge
SELECT listing.id, postcode, asking_price, (asking_price - 300000) / 1000 AS years_on_mortgage FROM listing WHERE id=2;
# As an agent # I want to delete a region that is unused # so that I can clear my db from unnecessary data
DELETE FROM region WHERE name = 'South South West';
# As an agent I want to see all 2 bed 1 bath properties to show a client.
SELECT listing.id, listing.sold, sale.date, sale.price  FROM listing  INNER JOIN sale  ON listing.id = sale.listing_id  WHERE listing.id = 5 AND sale.id = 5;
# As an agent, I would like to compare 2 listings  to price them correctly.
SELECT listing.id, listing.bedrooms, listing.bathrooms, listing.has_garden, listing.has_parking, listing.asking_price, sale.price, region.name, listing.listing_type_id FROM listing INNER JOIN sale  ON listing.id = sale.listing_id INNER JOIN region  ON listing.region_id = region.id INNER JOIN listing_type  ON listing.listing_type_id = listing_type.id WHERE listing.id = 5 AND sale.id= 5 AND region.id=5 AND listing_type.id=5;

# As an admin I want to add a new customer so that my db is up to date.
INSERT INTO customer (first_name, last_name, password, email) VALUES ('Rhadika', 'Shetty', 'rsya1', 'rhadikashetty@gmail.com');

# As an agency owner # I want to delegate administrative responsibilities to an agent # so that I have more time to manage the business
UPDATE agent SET agent.is_administrator = 1 WHERE id = 2;


# As an agency owner  # I want add a new region to the database  # as I am expanding my agency
INSERT INTO region(name) VALUES('Brighton');

# As an admin I want to increase the asking price because there are multiple bidders.
UPDATE listing  SET asking_price = 650000 WHERE id=2;

# As an owner # I want to hire an agent # so that the agency can sell more properties
INSERT INTO agent(email,password,first_name,last_name) VALUES ('steve@hoha.com', 'steve928','Steve','Eco');

# As an agency owner # I want to remove agents from the database # that no longer work for the agency
UPDATE agent SET agent.is_employed = 0 WHERE id = 4;


