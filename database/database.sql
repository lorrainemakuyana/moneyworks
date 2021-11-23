DROP DATABASE IF EXISTS money_works; 

CREATE DATABASE money_works;  

USE money_works; 

CREATE TABLE users(
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255), 
    password VARCHAR(255), 
    full_name VARCHAR(255),
    email VARCHAR(255),
    phone_number VARCHAR(255),
    gender VARCHAR(255),
    date_of_birth DATE, 
    balance DOUBLE(10, 2),
    PRIMARY KEY(id)
);

CREATE TABLE expenses(
    id INT NOT NULL AUTO_INCREMENT, 
    user_id INT,
    date DATETIME DEFAULT CURRENT_TIMESTAMP,
    description TEXT, 
    amount DOUBLE(10, 2),
    category VARCHAR(255),
    PRIMARY KEY(id), 
    FOREIGN KEY(user_id) REFERENCES users(id)
);

CREATE TABLE income(
    id INT NOT NULL AUTO_INCREMENT, 
    user_id INT,
    date DATETIME DEFAULT CURRENT_TIMESTAMP, 
    description TEXT, 
    amount DOUBLE(10, 2),
    PRIMARY KEY(id), 
    FOREIGN KEY(user_id) REFERENCES users(id)
);

CREATE TABLE investments(
    id INT NOT NULL AUTO_INCREMENT, 
    user_id INT, 
    type VARCHAR(255),
    description TEXT,
    profit_percentage INT, 
    loss_percentage INT, 
    daily_earning DOUBLE(10, 2),
    end_date DATE,
    PRIMARY KEY(id), 
    FOREIGN KEY(user_id) REFERENCES users(id)
);
    