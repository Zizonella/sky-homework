DELIMITER //
#Procedure to change the salary of the agents

CREATE PROCEDURE pay_rise3(IN p_id int, IN p_salary int)
BEGIN
    UPDATE
        agent
    SET salary = p_salary
    WHERE id = p_id;
END //

# Second

CREATE PROCEDURE insert_into_region(IN name varchar(10))
BEGIN
    INSERT INTO library.region(name) VALUES (name);
END//


CREATE PROCEDURE insert_into_listing(region_id tinyint,
                                      postcode varchar(10),
                                      bedrooms tinyint,
                                      bathrooms tinyint,
                                      listing_type_id tinyint,
                                      has_garden boolean,
                                      has_parking boolean,
                                      sold boolean,

                                      asking_price int)


BEGIN
    INSERT INTO library.listing (region_id, postcode, bedrooms, bathrooms, listing_type_id, has_garden, has_parking,
                                 sold, asking_price)
    VALUES (region_id, postcode, bedrooms, bathrooms, listing_type_id, has_garden, has_parking, sold, asking_price);
END//


DELIMITER ;


#to call procedure 

CALL pay_rise3(1, 50000);




