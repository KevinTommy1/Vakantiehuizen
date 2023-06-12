drop database if exists vakantiehuizen;
create database if not exists vakantiehuizen;

use vakantiehuizen;

create table teksten (
id int primary key AUTO_INCREMENT,
pagina varchar(255),
titel varchar(255),
tekst varchar(1000) );

create table huizen (
id int primary key AUTO_INCREMENT,
personen int,
prijs float,
huis varchar(255),
omschrijving_small varchar(200),
omschrijving varchar(2000) );

create table afbeeldingen(
id int primary key auto_increment,
huis_id int,
afbeelding varchar(100),
FOREIGN KEY (huis_id) REFERENCES huizen(id)
);
create table contact(
        id int primary key auto_increment,
        naam varchar(255),
        email varchar(255),
        TelefoonNummer integer(10),
        adres varchar(255),
        bericht varchar(255),
        ipAddres varchar(255)
);


INSERT INTO teksten (pagina,titel,tekst)
VALUES ('home','Welkom bij Zilt & Zo Vakantieverblijven, 
<br>dé plek voor een onvergetelijke vakantie in het prachtige Zeeland!',
'Onze vakantiehuisjes bieden de perfecte uitvalsbasis om te genieten van de Zeeuwse stranden, duinen, en pittoreske dorpjes.  
Of je nu op zoek bent naar rust en ontspanning, of juist naar avontuur en actie, bij ons vind je het allemaal. Onze huisjes zijn   
met zorg en aandacht ingericht, zodat je je meteen thuis voelt. Neem gerust een kijkje op onze website en ontdek ons aanbod.  
We hopen je snel te mogen verwelkomen bij Zilt & Zo Vakantieverblijven!');
INSERT INTO teksten (pagina,titel,tekst)
VALUES ('vakantiehuizen','Verhuur',"Onze vakantiehuisjes bieden alles wat je nodig hebt voor een heerlijk verblijf aan de Zeeuwse kust. 
Elk huisje is met zorg en aandacht ingericht, zodat je je meteen thuis voelt. Onze huisjes variëren van knusse studio's tot ruime villa's 
en bieden plaats aan 2 tot 16 personen. Elk huisje beschikt over een eigen keuken, badkamer en woonkamer, en is voorzien van moderne voorzieningen 
zoals gratis Wi-Fi en een flatscreen-tv. Bovendien hebben onze huisjes een eigen terras of balkon, waar je kunt genieten van het prachtige uitzicht op de omgeving. 
Of je nu een romantisch weekendje weg wilt plannen of een gezinsvakantie, bij Zilt & Zo Vakantieverblijven vind je het perfecte vakantiehuisje voor elke gelegenheid. 
Neem een kijkje bij ons aanbod en boek vandaag nog jouw droomvakantie in Zeeland!");

insert into huizen (personen, prijs, huis, omschrijving_small, omschrijving) values (8,95.00,"Zandkreek","Omschrijving Zandkreek klein","Omschrijving Zandkreek groot");
insert into huizen (personen, prijs, huis, omschrijving_small, omschrijving) values (12,120.00,"Oosterschelde","Omschrijving Oosterschelde klein","Omschrijving Oosterschelde groot");
insert into huizen (personen, prijs, huis, omschrijving_small, omschrijving) values (12,110.50,"Grevelingen","Omschrijving Grevelingen klein","Omschrijving Grevelingen groot");
insert into huizen (personen, prijs, huis, omschrijving_small, omschrijving) values (16,135.95,"Westerschelde","Omschrijving Westerschelde klein","Omschrijving Westerschelde groot");

insert into afbeeldingen(huis_id,afbeelding) values(1,"img/huisjes/8pers/8pers.png");
insert into afbeeldingen(huis_id,afbeelding) values(1,"img/huisjes/8pers/8pers_bed.png");
insert into afbeeldingen(huis_id,afbeelding) values(1,"img/huisjes/8pers/8pers_keuken.png");

insert into afbeeldingen(huis_id,afbeelding) values(2,"img/huisjes/12pers/12pers_bed.png");
insert into afbeeldingen(huis_id,afbeelding) values(2,"img/huisjes/12pers/12pers_keuken.png");
insert into afbeeldingen(huis_id,afbeelding) values(2,"img/huisjes/12pers/12pers.png");

insert into afbeeldingen(huis_id,afbeelding) values(3,"img/huisjes/10pers/10pers.png");
insert into afbeeldingen(huis_id,afbeelding) values(3,"img/huisjes/10pers/10pers_bed.png");
insert into afbeeldingen(huis_id,afbeelding) values(3,"img/huisjes/10pers/10pers_keuken.png");
insert into afbeeldingen(huis_id,afbeelding) values(4,"img/huisjes/16pers/16pers.png");
insert into afbeeldingen(huis_id,afbeelding) values(4,"img/huisjes/16pers/16pers_bed.png");
insert into afbeeldingen(huis_id,afbeelding) values(4,"img/huisjes/16pers/16pers_keuken.png");



SELECT h.personen, h.prijs, h.huis, h.omschrijving_small, h.omschrijving, h.id, a.huis_id, a.afbeelding
        FROM huizen h
        LEFT JOIN afbeeldingen a ON a.huis_id = h.id
        ORDER BY h.huis
