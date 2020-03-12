CREATE PROCEDURE insert_into_listing (    region_id    tinyint,
                                           postcode     varchar(10) ,
                                           bedrooms     tinyint,
                                           bathrooms    tinyint,
                                           type_id      tinyint,
                                           has_garden   boolean,
                                           has_parking  boolean,
                                           sold         boolean,
                                           asking_price int )
BEGIN
    INSERT INTO library.property (region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price) VALUES (region_id, postcode, bedrooms, bathrooms, type_id, has_garden, has_parking, sold, asking_price);
END;