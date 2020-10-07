/*****************************************************************************/
/* Project S13 ; minimal database schema for the bank application            */
/*                                                                           */
/*****************************************************************************/

/*****************************************************************************
*	Create new database and user
*/

	-- Delete any pre-existing database named bank_php and create a new one
	DROP DATABASE IF EXISTS banque_php;
	CREATE DATABASE banque_php CHARACTER SET 'utf8mb4';

	-- Delete any pre-existing user named PHP bank and create  a new one
	-- Granted access rights to this user
	DROP USER IF EXISTS 'banquePHP'@'localhost';
	DROP USER IF EXISTS 'banquePHP';
	CREATE USER 'banquePHP'@'%' IDENTIFIED BY 'pwd';
	GRANT ALL PRIVILEGES ON banque_php.* TO 'banquePHP'@'%';


/*****************************************************************************
* Create needed tables for the application using relevant data types 
*/
	-- Select the database we're going to work on
	USE banque_php;

	-- Create a table in order to log users' informations
	CREATE TABLE users (
		u_id INT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
		u_name VARCHAR(30) NOT NULL,
		u_address VARCHAR(50) NOT NULL,
		u_email VARCHAR(20) NOT NULL,
		u_password VARCHAR(100),
		u_birthdate DATE NOT NULL,
		u_creation_date DATE NOT NULL,
		PRIMARY KEY (u_id)
	)
	ENGINE=INNODB;

	-- Create a table in order to log accounts' informations
	CREATE TABLE accounts (
		a_id TINYINT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
		a_user_id INT UNSIGNED NOT NULL,
		a_number VARCHAR(35) NOT NULL,
		a_type VARCHAR(20) NOT NULL,
		a_balance DECIMAL(11,2) NOT NULL,
		a_creation_date DATE NOT NULL,
		PRIMARY KEY (a_id),
		CONSTRAINT fk_user_id
			FOREIGN KEY (a_user_id)
			REFERENCES users(u_id)
	)
	ENGINE=INNODB;
	
	-- Create a table in order to log accounts' informations
	CREATE TABLE transactions (
		t_id INT UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
		t_account_id TINYINT UNSIGNED NOT NULL,
		t_description VARCHAR(50) NOT NULL,
		t_type VARCHAR(10) NOT NULL,
		t_amount DECIMAL(11,2) NOT NULL,
		t_date DATE NOT NULL,
		PRIMARY KEY (t_id),
		CONSTRAINT fk_account_id
			FOREIGN KEY (t_account_id)
			REFERENCES accounts(a_id)
	)
	ENGINE=INNODB;


/*****************************************************************************
* Fill the database with dummy datas
*/
	INSERT INTO users VALUES
	(null, 'Bernard Madoff', '11 Wall St, New York, NY 10005, États-Unis', 'madoff@larnaque.com', '$2y$10$0enD99Yc1bIjyZ0dD0GeLOuqE9yyLLNe3YCsmlpZUwrKigj.L8lNG','1938-04-29', '2020-10-04'),
	(null, 'Christophe Rocancourt', 'prison de la Santé, 42, rue de la Santé 75014 Paris', 'rocancourt@lasante.gouv', '$2y$10$vRcjJQBwGk4axLki.S1ZxeS6EuCH50QLt5ggwAgghDAMVNG1sF2Dq','1967-07-16', '2020-10-03');

	INSERT INTO accounts VALUES
	(null, 1, 'GB82 WEST 1234 4598 7654 32', 'Compte courant', '1200.45', '2020-10-04'),
	(null, 2, 'FR76 30004 01587 00026011712 20', 'Compte courant', '6500.45', '2020-10-03'),
	(null, 2, 'FR76 30004 01587 00016017702 29', 'Plan Epargne Logement', '498.45', '2020-10-03'),
	(null, 2, 'FR76 30004 01587 00024408900 69', 'Livret A', '1980.45', '2020-10-04');
	
	INSERT INTO transactions VALUES
	(null, 1, 'Depot guichet', 'Credit', '1200.45', '2020-10-04'),
	(null, 2, 'Depot guichet', 'Credit', '7500.45', '2020-10-03'),
	(null, 3, 'Depot guichet', 'Credit', '498.45', '2020-10-03'),
	(null, 4, 'Depot guichet', 'Credit', '1980.45', '2020-10-04'),
	(null, 2, 'Virement', 'Debit', '1000', '2020-10-04');

