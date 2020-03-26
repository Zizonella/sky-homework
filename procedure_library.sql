DROP PROCEDURE IF EXISTS insert_into_region;

CREATE PROCEDURE insert_into_region (IN name varchar(10))
BEGIN
    INSERT INTO library.region(name) VALUES (name);
end;

# Second procedure
DROP PROCEDURE IF EXISTS insert_into_property;

CREATE PROCEDURE insert_into_property (    region_id    tinyint,
                                           postcode     varchar(10) ,
                                           bedrooms     tinyint,
                                           bathrooms    tinyint,
                                           type_id      tinyint,
                                           has_garden   boolean,
                                           has_parking  boolean,
                                           sold         boolean,
                                           asking_price int )
BEGIN
    INSERT INTO library.listing (region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price);
END;