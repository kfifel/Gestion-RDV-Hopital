create database  if not exists  hospital_management;
use hospital_management;

CREATE TABLE `Speciality` (
      `id` int(10) primary key auto_increment,
      `name` varchar(255) NOT NULL
);

CREATE TABLE `Person` (
      `id` int(10) primary key auto_increment,
      `first_name` varchar(255),
      `last_name` varchar(255),
      `email` varchar(255) UNIQUE,
      `password` varchar(255),
      `role` varchar(255)
);


CREATE TABLE `Doctor` (
          `id` int(10) primary key,
          `speciality` int(10) DEFAULT NULL,
          CONSTRAINT FK_DoctorPerson FOREIGN KEY (`id`) REFERENCES Person(`id`),
          CONSTRAINT FK_DoctorSpeciality FOREIGN KEY (`id`) REFERENCES Speciality(`id`)
);


CREATE TABLE `Patient` (
    `id` int(10) PRIMARY KEY ,
    `date_of_birth` date,
    CONSTRAINT PK_PatientPerson FOREIGN KEY (`id`) REFERENCES Person(`id`)
);


CREATE TABLE `Session` (
       `id` int(10) primary key auto_increment,
       `title` varchar(255) DEFAULT NULL,
       `date_start` date DEFAULT NULL,
       `max_patient` int(20) DEFAULT NULL,
       `id_doctor` varchar(255) DEFAULT NULL,
       CONSTRAINT FK_SessionDoctor FOREIGN KEY (`id_doctor`) REFERENCES Doctor(`id`)
);

CREATE TABLE `Appointment` (
       `id` int (10) primary key auto_increment,
       `order` int(20),
       `date` date,
       `id_patient` int(10),
       `id_session` int(10),
       CONSTRAINT FK_AppointmentPatient FOREIGN KEY (`id_patient`) REFERENCES `Patient` (`id`),
       CONSTRAINT FK_AppointmentSession FOREIGN KEY (`id_session`) REFERENCES `Session` (`id`)
);


