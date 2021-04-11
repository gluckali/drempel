CREATE DATABASE hotel;
USE hotel;

CREATE TABLE klant(
    id INT NOT NULL AUTO_INCREMENT,
    voorletters VARCHAR(250) NOT NULL,
    voorvoegsels VARCHAR(250),
    achternaam VARCHAR(250) NOT NULL,
    adres VARCHAR(250) NOT NULL,
    postcode VARCHAR(250) NOT NULL,
    woonplaats VARCHAR(250) NOT NULL,
    geboortedatum DATE,
    gebruikersnaam VARCHAR(250) NOT NULL,
    wachtwoord VARCHAR(250) NOT NULL,
    PRIMARY KEY(id)
);

CREATE TABLE medewerker(
    id INT NOT NULL AUTO_INCREMENT,
    voorletters VARCHAR(250) NOT NULL,
    voorvoegsels VARCHAR(250),
    achternaam VARCHAR(250) NOT NULL,
    gebruikersnaam VARCHAR(250) NOT NULL,
    wachtwoord VARCHAR(250) NOT NULL,
    PRIMARY KEY(id)
);
CREATE TABLE klantreservering(
    id INT NOT NULL AUTO_INCREMENT,
    datum DATE NOT NULL,
    naam VARCHAR(250) NOT NULL,
    adres VARCHAR(250) NOT NULL,
    postcode VARCHAR(250) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (klantreservering_id) REFERENCES klantreservering(id)
);

CREATE TABLE factuur(
    id INT NOT NULL AUTO_INCREMENT,
    factuurdatum DATE,
    klant_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(klant_id) REFERENCES klant(id)
);

CREATE TABLE kamers (
    id INT NOT NULL AUTO_INCREMENT,
    kamers VARCHAR(250) NOT NULL,
    prijs DECIMAL(5,2),
    PRIMARY KEY(id)
);

CREATE TABLE reservering (
    id INT NOT NULL AUTO_INCREMENT,
    kamers VARCHAR(250) NOT NULL,
    beschikbaar boolean NOT NULL,
    prijs DECIMAL(5,2),
    PRIMARY KEY(id)
);

0 = not true
1 = true