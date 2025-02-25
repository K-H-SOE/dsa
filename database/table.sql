-- *** Corrected SQL Schema with AUTO_INCREMENT ***

-- Create table for city
CREATE TABLE city (
    cityID INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    history TEXT,
    geography TEXT,
    latitude DECIMAL(10, 6),
    longitude DECIMAL(11, 6),
    timezone VARCHAR(50),
    language VARCHAR(100),
    population INT,
    area_km2 DECIMAL(6, 2),
    elevation_m INT,
    climate VARCHAR(255),
    major_industries TEXT,
    famous_landmarks TEXT,
    average_income INT,
    cost_of_living_index DECIMAL(4, 1),
    tourist_attractions TEXT,
    countryCode CHAR(3), 
    PRIMARY KEY (cityID),
    FOREIGN KEY (countryCode) REFERENCES country(code)
);

-- Create table for country (including currency details)
CREATE TABLE country (
    countryID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    code CHAR(3) NOT NULL UNIQUE,
    currency_name VARCHAR(255),
    currency_symbol VARCHAR(10),
    PRIMARY KEY (countryID)
);

-- Create table for news
CREATE TABLE news (
    newsID INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    date DATE NOT NULL,
    cityID INT NOT NULL,
    PRIMARY KEY (newsID),
    FOREIGN KEY (cityID) REFERENCES city(cityID)
);

-- Create table for photo
CREATE TABLE photo (
    photoID INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    image BLOB NOT NULL,
    date DATE NOT NULL,
    cityID INT NOT NULL,
    PRIMARY KEY (photoID),
    FOREIGN KEY (cityID) REFERENCES city(cityID)
);

-- Create junction table for news and photo
CREATE TABLE news_photo (
    newsID INT NOT NULL,
    photoID INT NOT NULL,
    FOREIGN KEY (newsID) REFERENCES news(newsID),
    FOREIGN KEY (photoID) REFERENCES photo(photoID)
);

-- Create table for user
CREATE TABLE user (
    userID INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    PRIMARY KEY (userID)
);

-- Create table for comment
CREATE TABLE comment (
    commentID INT NOT NULL AUTO_INCREMENT,
    content TEXT NOT NULL,
    date DATE NOT NULL,
    cityID INT NOT NULL,
    userID INT NOT NULL,
    PRIMARY KEY (commentID),
    FOREIGN KEY (cityID) REFERENCES city(cityID),
    FOREIGN KEY (userID) REFERENCES user(userID)
);

-- Create table for place
CREATE TABLE place (
    placeID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    latitude DECIMAL(10, 8),
    longitude DECIMAL(11, 8),
    cityID INT NOT NULL,
    PRIMARY KEY (placeID),
    FOREIGN KEY (cityID) REFERENCES city(cityID)
);

-- Create table for category
CREATE TABLE category (
    categoryID INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    PRIMARY KEY (categoryID)
);

-- Create junction table for place_category
CREATE TABLE place_category (
    placeID INT NOT NULL,
    categoryID INT NOT NULL,
    FOREIGN KEY (placeID) REFERENCES place(placeID),
    FOREIGN KEY (categoryID) REFERENCES category(categoryID)
);

