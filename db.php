<?php

$conn = new mysqli('localhost','root','','train');

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$query = "CREATE TABLE train(
        train_id varchar(8) PRIMARY KEY,
        tr_date date,
        destinantion VARCHAR(30),
        arrive_time time(5),
        start_loc VARCHAR(30),
        departure_time time(5),
        train_name VARCHAR(30),
        route varchar(15),
        availability varchar(1))";


        if ($conn->query($query) === TRUE) {
  echo "Table train created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}



$query = "INSERT INTO train (train_id, tr_date, destinantion, arrive_time, start_loc, departure_time, train_name, route, availability)
VALUES 
('MG1001','2021-01-01','Colombo Fort','18:00:00','Batticlao','08:00:00','Meena Gaya','Eastern','Y'),
('PM1002','2021-01-01','Badulla','20:00:00','Colombo Fort','10:00:00','Podi Manike','Main Line','Y'),
('PM1001','2021-01-01','Colombo Fort','20:00:00','Badulla','10:00:00','Podi Manike','Main Line','N'),
('UM1006','2021-01-01','Badulla','18:00:00','Colombo Fort','08:00:00','Udarata Manike','Main Line','Y'),
('UM1005','2021-01-01','Colombo Fort','18:00:00','Badulla','08:00:00','Udarata Manike','Main Line','Y'),
('MG1002','2021-01-01','Batticlao','18:00:00','Colombo Fort','08:00:00','Meena Gaya','Eastern','Y'),
('RR1001','2021-01-01','Colombo Fort','09:30:00','Matara','13:20:00','Rajarata Rajini	','Northern line','Y'),
('RR1002','2021-01-01','Vavuniya','13:45:00','Colombo Fort','20:15:00','Rajarata Rajini	','Northern line','Y'),
('RR1003','2021-01-01','Colombo Fort','03:15:00','Vavuniya','09:55:00','Rajarata Rajini	','Northern line','N'),
('RR1004','2021-01-01','Matara','10:30:00','Colombo Fort','14:26:00','Rajarata Rajini	','Northern line','Y'),
('NM1001','2021-01-01','Vavuniya','22:00:00','Colombo Fort','05:05:00','Night Mail	','Northern line','Y'),
('NM1002','2021-01-01','Colombo Fort','22:00:00','Vavuniya','04:45:00','Night Mail	','Northern line','Y'),
('NC1001','2021-01-01','Anuradhapura','08:45:00','Colombo fort','14:10:00','Normal (C)	','Northern line','Y'),
('NC1002','2021-01-01','Colombo Fort','08:40:00','Anuradhapura','14:00:00','Normal (C)	','Northern line','Y'),
('EB1001','2021-01-01','Trincomalee','06:05:00','Colombo Fort','13:55:00','Express (B)	','Eastern line','N'),
('EB1002','2021-01-01','Batticaloa','06:05:00','Colombo fort','15:45:00','Express (B)	','Eastern line','Y'),
('EB1003','2021-01-01','Colombo fort','10:00:00','Trincomalee','19:00:00','Express (B)	','Eastern line','Y'),
('EB1004','2021-01-01','Colombo fort','05:20:00','Batticaloa','15:50:00','Express (B)	','Eastern line','Y'),
('NM1003','2021-01-01','Trincomalee','21:00:00','Colombo Fort','05:10:00','Night mail','Eastern line','Y'),
('NM1004','2021-01-01','Batticaloa','21:00:00','Colombo Fort','08:05:00','Night mail','Eastern line','Y'),
('NM1005','2021-01-01','Colombo Fort','19:00:00','Trincomalee','04:15:00','Night mail','Eastern line','N'),
('NM1006','2021-01-01','Colombo Fort','17:20:00','Batticaloa','04:15:00','Night mail','Eastern line','Y'),
('MK1001','2021-01-01','Chilaw','20:42:00','Colombo Fort','18:05:00','Muthu Kumari (A)','Puttalam Line','Y'),
('MK1002','2021-01-01','Puttalam','07:49:00','Chilaw','05:20:00','Muthu Kumari (A)','Puttalam Line','Y'),
('NA1001','2021-01-01','Noor Nagar','08:27:00','Colombo Fort','04:00:00','Normal (A)','Puttalam Line','Y'),
('NA1002','2021-01-01','Puttalam','12:10:00','Colombo Fort','07:35:00','Normal (A)','Puttalam Line','Y'),
('NA1003','2021-01-01','Noor Nagar','15:33:00','Colombo Fort','11:30:00','Normal (A)','Puttalam Line','N'),
('NA1004','2021-01-01','Puttalam','20:43:00','Colombo Fort','17:30:00','Normal (A)','Puttalam Line','Y'),
('NA1005','2021-01-01','Puttalam','23:20:00','Colombo Fort','17:10:00','Normal (A)','Puttalam Line','Y'),
('NA1006','2021-01-01','Colombo fort','08:10:00','Noor Nagar','19:00:00','Normal (A)','Puttalam Line','Y'),
('NA1007','2021-01-01','Colombo fort','14:04:00','Noor Nagar','04:35:00','Normal (A)','Puttalam Line','Y'),
('NA1008','2021-01-01','Colombo fort','20:55:00','Noor Nagar','09:50:00','Normal (A)','Puttalam Line','Y'),
('EB1005','2021-01-01','Matara','12:00:00','Colombo Fort','08:35:00','Express (B)','Coastal Line','Y'),
('EB1006','2021-01-01','Matara','11:00:00','Colombo Fort','06:55:00','Express (B)','Coastal Line','Y'),
('EB1007','2021-01-01','Colombo fort','10:00:00','Matara','14:00:00','Express (B)','Coastal Line','Y'),
('GK1001','2021-01-01','Matara','18:00:00','Maradana','13:00:00','Galu Kumari','Coastal Line','Y'),
('GK1002','2021-01-01','Maradana','10:00:00','Matara','05:00:00','Galu Kumari','Coastal Line','N'),
('RK1001','2021-01-01','Matara','19:00:00','Maradana','15:00:00','Ruhunu Kumari','Coastal Line','Y'),
('RK1002','2021-01-01','Maradana','09:00:00','Matara','05:00:00','Ruhunu Kumari','Coastal Line','Y'),
('SD1001','2021-01-01','Galle','20:00:00','Maradana','17:00:00','Samudra Devi','Coastal Line','Y'),
('SD1002','2021-01-01','Maradana','08:00:00','Galle','05:00:00','Samudra Devi','Coastal Line','Y'),
('S1001','2021-01-01','Matara','19:00:00','Maradana','16:00:00','Sangarika','Coastal Line','Y'),
('S1002','2021-01-01','Maradana','08:00:00','Matara','04:00:00','Sangarika','Coastal Line','N'),
('NC1003','2021-01-01','Galle','21:00:00','Maradana','17:00:00','Normal (C)','Coastal Line','Y'),
('NC1004','2021-01-01','Galle','22:00:00','Maradana','18:00:00','Normal (C)','Coastal Line','Y'),
('NC1005','2021-01-01','Maradana','07:00:00','Galle','03:00:00','Normal (C)','Coastal Line','Y'),
('NC1006','2021-01-01','Maradana','07:00:00','Galle','04:00:00','Normal (C)','Coastal Line','Y'),
('NC1007','2021-01-01','Maradana','13:00:00','Galle','09:00:00','Normal (C)','Coastal Line','Y'),
('NC1008','2021-01-01','Matara','22:00:00','Maradana','17:00:00','Normal (C)','Coastal Line','N')";


if ($conn->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}







$conn->close();
?>
