-- I am an agent 
-- who wants to use customer emails
-- to send marketing emails

-- I am an agent
-- who wants to use customer locations 
-- to inform advertising campaigns 
UPDATE agent SET agent.is_administrator = 1 WHERE id = 2;
SELECT email FROM customer;

-- I am an administrator 
-- who wants to set privileges to a new administrator
-- because I've hired an assistant 

UPDATE agent SET agent.is_administrator = 1 WHERE id = 2; 

-- I am an administrator
-- who wants to take a customer email off the contact list
-- because I want to protect their privacy 

DELETE FROM customer
WHERE email = 'cursus.et.eros@in.ca';

-- I am a customer 
-- who wants to sign up for the mailing list 
-- because I want to know more about properties in SW London 

UPDATE customer SET email_signup = 1 WHERE id = 4;

-- I am a customer
-- who wants to find an agent near me in E London
-- so I don't have to travel far to find one

SELECT first_name last_name FROM agent WHERE region.id = 4;