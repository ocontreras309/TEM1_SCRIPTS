CREATE TABLE student
(
    id int NOT NULL AUTO_INCREMENT,
    first_name varchar(50) NOT NULL,
    last_name varchar(50) NOT NULL,
    semester int NOT NULL,
    PRIMARY KEY(id)
) ENGINE InnoDB;

INSERT INTO student(first_name, last_name, semester) VALUES ('Juan', 'Perez', 3);
INSERT INTO student(first_name, last_name, semester) VALUES ('Marco', 'Lopez', 4);
INSERT INTO student(first_name, last_name, semester) VALUES ('Elmer', 'Peredo', 5);
