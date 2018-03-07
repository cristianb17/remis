CREATE TABLE users (
    id int AUTO_INCREMENT,
    name varchar(255),
    email varchar(255),
    password varchar(255),
    remember_token varchar(255), 
   created_at date, 
  updated_at date,    
	
    PRIMARY KEY (id)
);

CREATE TABLE password_resets ( 
id int AUTO_INCREMENT, 
email varchar(255), 
token varchar(255),
 created_at date, 
  updated_at date, 
PRIMARY KEY (id) ) ;
