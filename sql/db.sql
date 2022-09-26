CREATE table games 
(
    id int not null PRIMARY KEY,
    title varchar (50),
    category_id int not null,
    game_time datetime ,
    FOREIGN KEY (category_id)
    REFERENCES categories(id)
    ON DELETE CASCADE,
    video_path varchar (255),
    thumbnail varchar (255),
    likes int,
    dislikes int,
    description text
);


CREATE table categories
(
    id int not null PRIMARY KEY,
    title varchar (50)   
);

CREATE table users 
(
    id int not null PRIMARY KEY,
    name varchar (50),
    email varchar (50),
    address varchar (50),
    phone bigint (11),
    role varchar (50),
    has_paid int
);

Create table comments 
(
    id int not null PRIMARY KEY,
    game_id int not null,
    FOREIGN KEY (game_id)
    REFERENCES games(id)
    ON DELETE CASCADE,
    user_id int not null,
    FOREIGN KEY (user_id)
    REFERENCES users(id)
    ON DELETE CASCADE,
    comment text  
);

CREATE TABLE wishlist
(
    id int not null PRIMARY KEY,
    user_id int not null,
    FOREIGN KEY (user_id)
    REFERENCES users(id)
    ON DELETE CASCADE,
    game_id int not null,
    FOREIGN KEY (game_id)
    REFERENCES games(id)
    ON DELETE CASCADE
);

CREATE TABLE gallery
(
    id int not null PRIMARY KEY,
    title varchar (50),
    description text,
    thumbnail varchar (255)
);

CREATE table news
(
    id int not null PRIMARY KEY,
    title varchar (50),
     description text,
    thumbnail varchar (255),
    created_at datetime
);

CREATE table medal_standing
(
    id int not null PRIMARY KEY,
    teams varchar (50),
    gold int,
    silver int,
    bronze int,
    total int
);

CREATE table game_schedule
(
    id int not null PRIMARY KEY,
    game_title varchar (50),
    game_time datetime 
);

CREATE table payment
(
    id int not null PRIMARY KEY,
    product_id int,
    phone_number int,
    amount double,
    payment_status int,
    remarks text,
    user_id int not null,
    FOREIGN KEY (user_id)
    REFERENCES users(id)
    ON DELETE CASCADE
);