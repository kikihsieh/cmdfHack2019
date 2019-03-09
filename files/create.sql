CREATE TABLE Cost(
	cost_avg	INTEGER,
	budget_type	VARCHAR(50),
	PRIMARY KEY (cost_avg)
);

CREATE TABLE Person(
	p_ID	INTEGER,
	name	VARCHAR(50),
PRIMARY KEY (p_ID)
);

CREATE TABLE Classification(
	city_population	INTEGER,
	classification	VARCHAR(50),
	PRIMARY KEY (city_population)
);

CREATE TABLE Address(
	address	VARCHAR(50),
	lat		DECIMAL,
	lon		DECIMAL,
	PRIMARY KEY (address)
);

CREATE TABLE StarRating(
	rating		INTEGER, 
	stars	 	INTEGER, 
	PRIMARY KEY (rating)
);

CREATE TABLE Country(
	country_ID	INTEGER, 
	name		VARCHAR(50),
	language 	VARCHAR(50),
	population	INTEGER,
	currency	VARCHAR(50),
	PRIMARY KEY (country_ID)
);

CREATE TABLE City(
	city_name		VARCHAR(50),
	country_ID		INTEGER,
	city_population INTEGER,
	lat				DECIMAL,
	lon				DECIMAL,
	PRIMARY KEY (country_ID, city_name), 	
	FOREIGN KEY (country_ID) REFERENCES Country(country_ID),
	FOREIGN KEY (city_population) REFERENCES Classification(city_population)
);


CREATE TABLE Destination(
	dest_ID			INTEGER, 
	city_name		VARCHAR(50),
	country_ID		INTEGER,
	name			VARCHAR(50),
	ranking			INTEGER,
	description		VARCHAR(50),
	rating			INTEGER,
	visiting_hours	VARCHAR(50),
	address			VARCHAR(50),
	PRIMARY KEY (dest_ID),
	FOREIGN KEY (country_ID, city_name) REFERENCES City(country_ID, city_name),
	FOREIGN KEY (country_ID) REFERENCES Country(country_ID),
	FOREIGN KEY (address) REFERENCES Address(address),
	FOREIGN KEY (rating) REFERENCES StarRating(rating)
);

CREATE TABLE Activity(
	act_ID		INTEGER,
	name		VARCHAR(50),
	cost_avg	INTEGER,
	PRIMARY KEY (act_ID),
	FOREIGN KEY (cost_avg) REFERENCES Cost(cost_avg)
);

CREATE TABLE Review(
	rev_ID		INTEGER,
	p_ID		INTEGER,
	dest_ID		INTEGER,
	rating 		INTEGER,
	review		VARCHAR(50),
	PRIMARY KEY (rev_ID),
	FOREIGN KEY (p_ID) REFERENCES Person(p_ID),
	FOREIGN KEY (dest_ID) REFERENCES Destination(dest_ID)
);

CREATE TABLE Recreation(
	act_ID 	INTEGER PRIMARY KEY,
	icon 		CHAR(50),
	FOREIGN KEY (act_ID) REFERENCES Activity(act_ID)
);

CREATE TABLE Tour(
	act_ID		INTEGER PRIMARY KEY,
	provider	CHAR(50),
	url			CHAR(50),
	duration	INTEGER,
	FOREIGN KEY (act_ID) REFERENCES Activity(act_ID) 
);

CREATE TABLE Destination_Activity(
	act_ID	INTEGER,
	dest_ID	INTEGER,
	PRIMARY KEY (act_ID, dest_ID),
	FOREIGN KEY (act_ID) REFERENCES Activity(act_ID),
	FOREIGN KEY (dest_ID) REFERENCES Destination(dest_ID)
);

CREATE TABLE Bucket_List(
	bl_ID			INTEGER PRIMARY KEY,
	p_ID 			INTEGER,
	title 			VARCHAR(50),
	date_modified 	DATE,
	FOREIGN KEY (p_ID) REFERENCES Person(p_ID)
);

CREATE TABLE Save_Bucket_List(
	bl_ID			INTEGER PRIMARY KEY,
	dest_ID			INTEGER,
	date_modified	DATE,
	FOREIGN KEY (dest_ID) REFERENCES Destination(dest_ID)
);
