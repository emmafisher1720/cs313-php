CREATE TABLE  users 
(
    id SERIAL NOT NULL,
    first_name VARCHAR(40),
    last_name VARCHAR(100),
    email VARCHAR(70) UNIQUE NOT NULL PRIMARY KEY,
    password VARCHAR(255)
);

CREATE TABLE  categories
(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(50)
);

CREATE TABLE  posts 
(
    id SERIAL NOT NULL PRIMARY KEY,
    title VARCHAR(50) NOT NULL,
    description_text TEXT,
    price MONEY,
    tips TEXT,
    rating SMALLINT,
    user_id VARCHAR REFERENCES users(email),
    category_id INT NOT NULL REFERENCES categories(id)
);

INSERT INTO users(first_name, last_name, email, password) VALUES ('Emma', 'Fisher', 'fis17001@byui.edu', 'myPassword');
INSERT INTO users(first_name, last_name, email, password) VALUES ('Kate', 'Carter', 'car13044@byui.edu', 'KatePassword');
INSERT INTO users(first_name, last_name, email, password) VALUES ('Zach', 'Fisher', 'zach@byui.edu', 'ZachPassword');

INSERT INTO categories(name) VALUES ('Outdoor');
INSERT INTO categories(name) VALUES ('Service');
INSERT INTO categories(name) VALUES ('Romantic');
INSERT INTO categories(name) VALUES ('Group Date');

INSERT INTO posts(category_id, title, description_text, price, tips, rating) VALUES ('3', 'Walmart' ,'This is a cool place to go', 3, 'Do not do something stupid', 3);
INSERT INTO posts(category_id, title, description_text, price, tips, rating) VALUES ('4', 'Eat a burrito', 'This type of food is the bomb', 50, 'One tip is to do it with another couple', 5);
INSERT INTO posts(category_id, title, description_text, price, tips, rating) VALUES ('1', 'Picnic', 'This is a romantic idea. All you need is some food and a date to share it with!', 20, 'Light some candles to make it really romantic', 5);
INSERT INTO posts(category_id, title, description_text, price, tips, rating) VALUES ('2', 'Pick up trash' ,'This is such a great service idea', 3, 'Take your date to do this and if they do not complain, marry them for sure!', 0);

