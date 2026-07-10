CREATE DATABASE ehealth;

USE ehealth;

CREATE TABLE patients (
    id VARCHAR(20) PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(20),
    diagnosis VARCHAR(100),
    admitted BOOLEAN
);