CREATE TABLE BLOODBANK
(
    BloodBankId int NOT NULL PRIMARY KEY,
    location varchar(20)
);

CREATE TABLE RECEPTIONIST
(
    recept_id int NOT NULL PRIMARY KEY,
    RName varchar(50),
    REmail varchar(30),
    Raddress varchar(50),
    RPhone varchar(10),
    bloodBankId int,
    FOREIGN KEY (bloodBankId) REFERENCES BLOODBANK(BloodBankId)
);

CREATE TABLE DONAR
(
    Donar_id int NOT NULL PRIMARY KEY,
    DName varchar(50) NOT NULL,
    DAge int,
    Dsex char(1),
    DAddress varchar(50),
    recept_id int,
    FOREIGN KEY (recept_id) REFERENCES RECEPTIONIST(recept_id)
);

CREATE TABLE PHONE
(
    Phone_no char(10),
    Donar_id int,
    FOREIGN KEY (Donar_id) REFERENCES DONAR (Donar_id)
);

CREATE TABLE BLOOD
(
    BloodId int not null PRIMARY key,
    bloodType VARCHAR(5),
    cost int,
    donarId int,
    BloodBankId int,
    FOREIGN KEY (donarId) REFERENCES DONAR(Donar_id),
    FOREIGN KEY (BloodBankId) REFERENCES BLOODBANK (BloodBankId)
);

INSERT INTO BLOODBANK
VALUES
    (1, 'Mejestic'),
    (2, 'Nelamangala'),
    (3, 'Electronic City'),
    (4, 'banshankri'),
    (5, 'Yashwanthpura'),
    (6, 'Jayanagara'),
    (7, 'Atthibele'),
    (8, 'Yelhanka');

INSERT INTO RECEPTIONIST
VALUES
    (101212, 'Mark', 'mark12@gmail.com', 'Anand rao circle', '9124398084', 1),
    (101312, 'Dan', 'dan23@gmail.com', 'nelmangala', '9124300084', 2),
    (101412, 'Steve', 'steve1999@gmail.com', 'konappana agrahara', '7091841090', 3),
    (101512, 'Parker', 'pankerp@gmail.com', 'banshankri', '9118733891', 4),
    (101612, 'Jason', 'johnysins@gmail.com', 'peenya', '8124378084', 5),
    (101712, 'Preetham', 'priyathama@gmail.com', 'jayanagara', '9121398184', 6),
    (101812, 'Swetha', 'shwetthaa@gmail.com', 'atthibele', '9123398084', 7);

INSERT into DONAR
VALUES(150221, 'Mark', 25, 'M','majestic', 101212),
    (160011, 'Abdul', 35, 'F','peenya', 101612),
    (160101, 'Smith', 22, 'M','nelmangala', 101312),
    (150011, 'Pat', 29, 'M', 'chandrapura',101412),
    (150021, 'Shyam', 42, 'F','konappana agrahara', 101412),
    (150121, 'Dan', 44, 'M','banshankri', 101512),
    (160031, 'Mike', 33, 'F','atthibele', 101812),
    (160301, 'Elisa', 31, 'F','jayanagara', 101712),
    (160091, 'Carrol', 24, 'M','nelmangala', 101312),
    (160401, 'Naruto', 19, 'M','Konoha', 101212),
    (160511, 'Sasuke', 19, 'M','K R Market', 101512),
    (160711, 'Itachi', 25, 'M','gorgunte palya', 101612);

INSERT INTO PHONE
VALUES
    ('9110834850', 160511),
    ('8293903939', 160101),
    ('9203930022', 150011),
    ('8024302022', 150021),
    ('8108302380', 160011),
    ('7091841048', 150121),
    ('9103024234', 160301),
    ('8249027433', 160031),
    ('8492929299', 160301),
    ('8723413245', 160711),
    ('8792393232', 160091),
    ('9116723232', 160401),
    ('9136723232', 160101),
    ('8723413289', 160011),
    ('9107424234', 150021);

INSERT INTO BLOOD
VALUES
(11, 'A+', 1400, 160511, 2),
(12, 'A+', 700, 160011, 1),
(13, 'O+', 3500, 150121, 4),
(23, 'AB+', 1500, 160101, 6),
(40, 'O-', 15000, 160091, 1),
(41, 'B+', 1590, 160401, 5),
(43, 'A+', 1400, 160511, 3),
(44, 'A+', 1400, 160011, 3),
(46, 'A+', 1100, 160511, 3),
(45, 'AB+', 1800, 160101, 6),
(47, 'O+', 1230, 150021, 7),
(53, 'A+', 1400, 150011, 5),
(63, 'B-', 9000, 160711, 8),
(66, 'A+', 1380, 160011, 6),
(67, 'AB+', 1780, 150221, 2),
(73, 'A+', 1900, 150011, 3),
(76, 'A-', 8500, 160301, 7),
(97, 'AB+', 1120, 160101, 4),
(253, 'O+', 1900, 150021, 4),
(413, 'A-', 10000, 160301, 7),
(503, 'O+', 1300, 150121, 1),
(553, 'O+', 1500, 150121, 2),
(583, 'O-', 10500, 160031, 8);