DROP PROCEDURE IF EXISTS insert_into_region;

CREATE PROCEDURE insert_into_region (IN name varchar(10))
BEGIN
    INSERT INTO library.region(name) VALUES (name);
end;

