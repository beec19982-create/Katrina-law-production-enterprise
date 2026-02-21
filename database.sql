
CREATE TABLE movies (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255),
release_year VARCHAR(20),
image VARCHAR(255),
description TEXT
);

CREATE TABLE subscribers (
id INT AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(255)
);

INSERT INTO movies(title,release_year,image,description) VALUES
('Arrow','2014–2020','arrow.jpg','DC Superhero Series'),
('NCIS','2021–Present','ncis.jpg','Crime Investigation Series');
