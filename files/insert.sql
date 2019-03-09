INSERT INTO Cost (cost_avg, budget_type)
VALUES (0, 'free'),
(15, 'cheap'),
(50, 'affordable'),
(100, 'expensive'),
(200, 'luxury');

INSERT INTO Person (p_ID, name)
VALUES (1, 'nada'),
(2, 'rory'),
(3, 'simeon'),
(4, 'mayesha'),
(5, 'hazra');

INSERT INTO Classification (city_population, classification)
VALUES (8000000, 'large city'),
(720000, 'small city'),
(2000000, 'big city'),
(630000, 'small city'),
(9000000, 'large city');

INSERT INTO Address (address, lat, lon)
VALUES ('8 Shibakoen, Minato, Tokyo 105-0011, Japan', 35.7, 139.7),
('London SE1 9RA, UK', 51.53, -0.1),
('5 Avenue Anatole France, 75007 Paris, France', 48.8, 2.3),
('Space Needle, 400 Broad St, Seattle, WA 98109, USA', 47.6, -122.3),
('845 Avison Way, Vancouver, BC V6G 3E2', 49.3, -123.1);

INSERT INTO StarRating (rating, stars)
VALUES (1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

INSERT INTO Country (country_ID, name, language, population, currency)
VALUES (1, 'England', 'English', 55000000, 'Pound'),
(2, 'USA', 'English', 325000000, 'Dollar'),
(3, 'France', 'French',67000000, 'Euro'),
(4, 'Canada', 'English', 36000000, 'Dollar'),
(5, 'Japan', 'Japanese', 127000000, 'Yen');

INSERT INTO City (city_name, country_ID, city_population, lat, lon)
VALUES ('London', 1, 8000000, 51.5, -0.1),
('Seattle', 2, 720000, 47.6, -122.3),
('Paris', 3, 2000000, 48.8, 2.3),
('Vancouver', 4, 630000, 49.3, -123.1), 
('Tokyo', 5, 9000000, 35.7, 139.7);

INSERT INTO Destination (dest_ID, city_name, country_ID, name, ranking, description, rating, visiting_hours, address)
VALUES 
(1, 'Tokyo', 5, 'Tokyo Tower', 4, 'tallest self-supporting steel', 5, '24 hours', '8 Shibakoen, Minato, Tokyo 105-0011, Japan'),
(2, 'London', 1, 'London Bridge', 3, 'famous bridge in all of london', 1, '24 hours', 'London SE1 9RA, UK'), 
(3, 'Paris', 3, 'Eiffel Tower', 2,  'a wonder of the word', 3, '9-24', '5 Avenue Anatole France, 75007 Paris, France'),
(4, 'Seattle', 2, 'Space Needle', 5, 'seattle’s top observation deck', 2, '9-1', 'Space Needle, 400 Broad St, Seattle, WA 98109, USA'), 
(5, 'Vancouver', 4, 'Stanley Park', 1, 'natural park', 1, '9-21', '845 Avison Way, Vancouver, BC V6G 3E2');

INSERT INTO Activity (act_ID, name, cost_avg)
VALUES (1, 'hiking', 0),
(2, 'sightseeing', 0),
(3, 'tour of Paris', 50),
(4, 'swimming', 15),
(5, 'snowboarding', 50),
(6, 'biking', 0),
(7, 'tour of Rome', 200),
(8, 'tour of Tokyo', 100),
(9, 'tour of London', 100),
(10, 'tour of Berlin', 100);

INSERT INTO Review (rev_ID, p_ID, dest_ID, review, rating)
VALUES (1, 1, 4, 'aight', 2),
(2, 2, 1, 'amazing', 4),
(3, 3, 2, 'wonderful', 4),
(4, 4, 5, 'great place', 5),
(5, 5, 5, 'beautiful', 3);

INSERT INTO Recreation (act_ID, icon)
VALUES (1, 'hike.png'),
(2, 'sight.png'),
(6, 'bike.png'),
(4, 'swim.png'),
(5, 'snowboard.png');

INSERT INTO Tour (act_ID, provider, url, duration)
VALUES (3, 'Intrepid Travel', 'www.intrepidtravel.com/france',  7),
(7, 'G Adventures', 'www.gadventures.com/rome', 6),
(8, 'Topdeck', 'www.topdeck.com/tokyo', 4),
(9, 'G Adventures', 'www.gadventures.com/london', 5),
(10, 'Globus', 'www.globus.com/berlin', 6 );

INSERT INTO Destination_Activity (act_ID, dest_ID)
VALUES (2, 1),
(2, 2),
(3, 3),
(2, 4),
(6, 5);

INSERT INTO Bucket_List (bl_ID, p_ID, title, date_modified)
VALUES (1, 1, 'Nada’s Bucket List','2019/02/09'),
(2, 2, 'Rory’s Bucket List', '2018/11/19'),
(3, 3, 'Simeon’s Bucket List', '2019/01/05'),
(4, 4, 'Mayesha’s Cool Bucket List','2017/07/09'),
(5, 5, 'Hazra’s Bucket List', '2018/07/20');

INSERT INTO Save_Bucket_List (bl_ID, dest_ID, date_modified)
VALUES (1, 2, '2019/02/09'),
(2, 3, '2018/11/19'),
(3, 4, '2019/01/05'),
(4, 1, '2017/07/09'),
(5, 5, '2018/07/20');
