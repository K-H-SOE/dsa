CREATE DATABASE twin_cities_db;
USE twin_cities_db;

CREATE TABLE cities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    country VARCHAR(100),
    population INT,
    geo_location VARCHAR(255),
    currency VARCHAR(50)
);

CREATE TABLE places_of_interest (
    id INT AUTO_INCREMENT PRIMARY KEY,
    city_id INT,
    name VARCHAR(255),
    type VARCHAR(100),
    capacity INT,
    geo_location VARCHAR(255),
    photo_url VARCHAR(255),
    FOREIGN KEY (city_id) REFERENCES cities(id)
);
