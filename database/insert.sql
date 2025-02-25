

-- Insert data into city table
INSERT INTO city 
(name, description, history, geography, latitude, longitude, timezone, language, population, area_km2, elevation_m, climate, major_industries, famous_landmarks, average_income, cost_of_living_index, tourist_attractions, countryCode) 
VALUES
('Bonn',
'Bonn is a historic city in western Germany, located along the Rhine River. It served as the capital of West Germany from 1949 to 1990 and remains an important political and cultural hub.',
'Bonn, one of Germany’s oldest cities, was founded as a Roman settlement and later became the residence of the Prince-Archbishops of Cologne. It is known for being the birthplace of Beethoven and hosting several United Nations offices.',
'Bonn is located in western Germany, along the banks of the Rhine River, in the state of North Rhine-Westphalia.',
50.7374, 7.0982, 'CET', 'German', 330000, 141.1, 45, 'temperate oceanic climate', 
'Telecommunications, logistics, education, and international organizations',
'Beethoven House, Bonn Minster, Drachenburg Castle, Poppelsdorf Palace',
53844, 64.2,
'Beethoven House, Bonn Minster, Poppelsdorf Palace & Botanical Gardens, Museum Mile, Drachenburg Castle, Rheinaue Park, Old Town Hall, Post Tower, Arithmeum, Cherry Blossom Avenue',
'DEU');

('Oxford',
'Oxford, known as the "City of Dreaming Spires," is a historic and academic hub in southeastern England, home to the prestigious University of Oxford and stunning medieval architecture. Blending rich heritage with modern innovation, the city boasts world-class museums, scenic rivers, and a vibrant cultural scene.',
'Oxford, founded in the 9th century, grew around the University of Oxford (12th century), becoming a center of learning. It served as King Charles I''s headquarters during the English Civil War and later thrived through industry and innovation.',
'Oxford is located in southeastern England, in the county of Oxfordshire, about 90 km (56 miles) northwest of London. It lies at the confluence of the River Thames and River Cherwell, with a mix of flatlands and gentle hills. The city features historic architecture, green spaces, and waterways, blending urban and rural landscapes.',
51.7520, 1.2577, 'GMT/BST', 'English', 162409, 45.6, 55, 'temperate maritime climate',
'Education & Research, Technology & Science, Publishing, Automotive Manufacturing, Tourism',
'University of Oxford, Radcliffe Camera, Bodleian Library, Christ Church College, Sheldonian Theatre, Bridge of Sighs, Oxford Castle & Prison, Magdalen College Tower, Carfax Tower',
47000, 77.3, 
'Ashmolean Museum, Pitt Rivers Museum, Oxford University Museum of Natural History, The Covered Market, Oxford Botanic Garden & Arboretum, Port Meadow, Oxford Story Museum, The Oxford Playhouse',
'GBR');

-- Insert data into country table
INSERT INTO country (name, code, currency_name, currency_symbol) 
VALUES 
('United Kingdom', 'GBR', 'British Pound', '£'),
('Germany', 'DEU', 'Euro', '€');


INSERT INTO news (title, content, date, cityID) 
VALUES
    ('Oxford Hosts Annual Literature Festival', 
     'The Oxford Literature Festival kicks off this week, featuring renowned authors and engaging discussions across the city.', 
     '2025-03-15', 
     (SELECT cityID FROM city WHERE name = 'Oxford')),

    ('Bonn Celebrates Beethoven Festival', 
     'Bonn honors its most famous son, Ludwig van Beethoven, with a series of concerts and cultural events.', 
     '2025-06-10', 
     (SELECT cityID FROM city WHERE name = 'Bonn')),

    ('New Research Hub Opens in Oxford', 
     'Oxford University launches a cutting-edge research center focusing on AI and biomedical sciences.', 
     '2025-05-20', 
     (SELECT cityID FROM city WHERE name = 'Oxford')),

    ('Bonn Expands Green Spaces Initiative', 
     'The city of Bonn has announced new plans to expand green spaces and improve urban sustainability.', 
     '2025-04-25', 
     (SELECT cityID FROM city WHERE name = 'Bonn'));

-- Insert data into photo table

-- Insert data into news_photo

-- Insert data into user
INSERT INTO user (username) VALUES
('Alice'),
('Bob'),
('Charlie'),
('David'),
('Emma');


-- Insert data into comment 
INSERT INTO comment (content, date, cityID, userID) VALUES
('Bonn is such a charming city with rich history!', '2024-02-20', 1, 1), -- Alice
('I love visiting the Beethoven House in Bonn!', '2024-02-21', 1, 2), -- Bob
('The University of Oxford’s architecture is stunning.', '2024-02-22', 2, 3), -- Charlie
('Oxford’s museums are a must-visit for history lovers.', '2024-02-23', 2, 4), -- David
('The view from Drachenburg Castle in Bonn is breathtaking.', '2024-02-24', 1, 5); -- Emma


-- Insert data into place 

INSERT INTO place (name, description, latitude, longitude, cityID) VALUES
   -- Places in Bonn
('Beethoven House', 'The birthplace of Ludwig van Beethoven, now a museum dedicated to his life and works.', 50.7374, 7.0990, 1),
('Bonn Minster', 'One of Germany’s oldest churches, featuring Romanesque architecture and historical significance.', 50.7340, 7.0950, 1),
('Drachenburg Castle', 'A stunning 19th-century villa with breathtaking views of the Rhine River.', 50.6689, 7.2085, 1),
('Poppelsdorf Palace', 'A Baroque-style palace with botanical gardens, part of the University of Bonn.', 50.7266, 7.0873, 1),

   -- Places in Oxford
('Radcliffe Camera', 'An iconic circular library building in the heart of Oxford, part of the Bodleian Library.', 51.7542, -1.2533, 2),
('Christ Church College', 'A historic college with stunning architecture and ties to "Harry Potter" filming locations.', 51.7507, -1.2552, 2),
('Bodleian Library', 'One of the oldest libraries in Europe, holding millions of historic books and manuscripts.', 51.7543, -1.2547, 2),
('Oxford Castle & Prison', 'A historic castle-turned-prison, now a museum with guided tours.', 51.7511, -1.2624, 2);


-- Insert data into category
INSERT INTO category (name) VALUES
('Historical Site'),
('Museum'),
('University'),
('Library'),
('Castle'),
('Park'),
('Religious Site'),
('Tourist Attraction');


-- Insert data into place_category 
INSERT INTO place_category (placeID, categoryID) VALUES
  -- Bonn places
(1, 2),  -- Beethoven House -> Museum
(2, 7),  -- Bonn Minster -> Religious Site
(3, 5),  -- Drachenburg Castle -> Castle
(3, 8),  -- Drachenburg Castle -> Tourist Attraction
(4, 1),  -- Poppelsdorf Palace -> Historical Site
(4, 8),  -- Poppelsdorf Palace -> Tourist Attraction

  -- Oxford places
(5, 4),  -- Radcliffe Camera -> Library
(5, 1),  -- Radcliffe Camera -> Historical Site
(6, 3),  -- Christ Church College -> University
(6, 1),  -- Christ Church College -> Historical Site
(7, 4),  -- Bodleian Library -> Library
(7, 1),  -- Bodleian Library -> Historical Site
(8, 1),  -- Oxford Castle & Prison -> Historical Site
(8, 5),  -- Oxford Castle & Prison -> Castle
(8, 8);  -- Oxford Castle & Prison -> Tourist Attraction

