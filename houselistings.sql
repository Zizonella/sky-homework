CREATE TABLE properties (
id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
region_id int,
postcode VARCHAR(10),
bedrooms tinyint,
bathrooms tinyint,
type_id tinyint,
has_garden boolean NOT NULL,
has_parking boolean NOT NULL,
sold boolean NOT NULL,
asking_price int,
CONSTRAINT FK_region_property FOREIGN KEY (id_region) REFERENCES region (id_region)
)ENGINE=INNODB;

CREATE TABLE sale (
id int UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
date varchar (20) NOT NULL,
agent_id int UNSIGNED NOT NULL,
customer_id int UNSIGNED NOT NULL,
house_id int UNSIGNED NOT NULL,
price int UNSIGNED NOT NULL
CONSTRAINT FK_AgentSale 
CHECK (id_agent),
CONSTRAINT FK_CustomerSale
FOREIGN KEY (id_customer) REFERENCES customer (id_customer),
CONSTRAINT FK_PropertySale
FOREIGN KEY (id_property) REFERENCES property (id_property)
);
CREATE TABLE region(
id TINYINT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
region_name varchar(10) NOT NULL
);
CREATE TABLE agent(
id INT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
email VARCHAR(50),
password VARCHAR(50),
first_name VARCHAR (50),
last_name VARCHAR (50)
);

CREATE TABLE type(
id TINYINT UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY,
type VARCHAR(20) NOT NULL
);

CREATE TABLE customer (
id int,
first_name VARCHAR (50) NOT NULL,
last_name VARCHAR (50) NOT NULL,
password VARCHAR (50) NOT NULL, 
email VARCHAR (50) NOT NULL
);