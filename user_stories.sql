#I am a customer
# who wants to know what a 2 bedroom apartment in West London costs
# so that I can potentially buy one.

# SELECT property.id, postcode, name AS region
# FROM property INNER JOIN region ON property.region_id = region.id
# WHERE region.name= 'West' AND bedrooms = 2;
SELECT
    property.id, postcode, name AS region, type AS type, asking_price
FROM property
         INNER JOIN region ON property.region_id=region.id
         INNER JOIN type ON property.type_id=type.id -- (i added this to specif only flats)
WHERE region.name = 'West' AND bedrooms = '2' AND type.type = 'flat';

#I am a customer
# who wants to know buy a 1 bedroom apartment in East London
# so that I can relocate.
# SELECT property.id, name AS region
# FROM property INNER JOIN region ON property.region_id = region.id
# WHERE region.name = 'East' AND bedrooms = 1;

SELECT
    property.id, postcode, name AS region, type AS type
FROM property
         INNER JOIN region ON property.region_id=region.id
         INNER JOIN type ON property.type_id=type.id -- (i added this to specif only flats)
WHERE region.name = 'East' AND bedrooms = '1' AND type.type = 'flat';

# As an agent
# I  want to add a new property
# so that I can sell it.

INSERT INTO property (id,region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price)
VALUES	(11, 4, 'KK6 3JD',	1,	1,	3,	true, true,	false,	2000000);


# As an agent
# I want to delete a region that is unused
# so that I can clear my db from unnecessary data

DELETE FROM region
WHERE name = 'South South West';

# I am a customer
# who wants to buy a property for a maximum of 500000 pounds
# so I stay within my budget.

SELECT id, asking_price AS properties_within_budget
FROM property
WHERE asking_price <= 500000
ORDER BY asking_price asc ;



# I am a customer
# who wants to buy a house with a garden and a parking space
# so that I can enjoy a garden and have somewhere to park my car.

#I am an agent
# who wants to find new properties in Central London
# so that I can sell them.


# I am am agent
# who wants to sell properties above the asking price
# so that I earn more commission.

# As an agency owner
# I can see all the regions
# so that I can be sure they are correct

# As an agent
# I want to see the average asking price per region
# so that I can better help my customers to stay within their budget

# As an owner
# I want to hire an agent
# so that the agency can sell more properties
INSERT INTO agent(email,password,first_name,last_name) VALUES ('steve@hoha.com', 'steve928','Steve','Eco');

# As an agency owner
# I want to delegate administrative responsibilities to an agent
# so that I have more time to manage the business

UPDATE agent SET agent.is_administrator = 1 WHERE id = 2;


# As an agency owner
# I want to remove agents from the database
# that no longer work for the agency

UPDATE agent SET agent.is_employed = 0 WHERE id = 4;



