-- Rebuild the Database
DROP DATABASE IF EXISTS watersedge;
CREATE DATABASE watersedge;
USE watersedge;
CREATE TABLE users 
          ( userID      INT             NOT NULL    AUTO_INCREMENT,
            username    VARCHAR(60)     NOT NULL,
            email       VARCHAR(255)    NOT NULL,
            password    VARCHAR(60)     NOT NULL,
            verified    BOOLEAN         DEFAULT FALSE,
            user_role   VARCHAR(15)     DEFAULT 'user',
            address     INT(11)         DEFAULT NULL,
            first_name  VARCHAR(60)     DEFAULT NULL,
            last_name   VARCHAR(60)     DEFAULT NULL,
            PRIMARY KEY (userID),
            UNIQUE INDEX email (email)
           );

CREATE TABLE addresses
          ( addressID   INT             NOT NULL    AUTO_INCREMENT,
            line1       VARCHAR(60)     NOT NULL,
            line2       VARCHAR(60)     DEFAULT NULL,
            city        VARCHAR(60)     NOT NULL,
            us_state    VARCHAR(60)     NOT NULL,
            zip         VARCHAR(12)     NOT NULL,
            PRIMARY KEY (addressID)
           );
 
CREATE TABLE orders
          ( orderID         INT             NOT NULL    AUTO_INCREMENT,
            order_date      DATETIME        NOT NULL,
            userID           INT             NOT NULL,
            PRIMARY KEY (orderID),
            INDEX userID (userID)
           );

CREATE TABLE line_items
          ( lineID          INT         NOT NULL    AUTO_INCREMENT,
            orderID         INT         NOT NULL,
            productID       INT         NOT NULL,
            quantity        INT         NOT NULL,
            colorselect     INT         DEFAULT NULL,
            sizeselect      INT         DEFAULT NULL,
            optionselect    INT         DEFAULT NULL,
            PRIMARY KEY (lineID),
            INDEX orderID (orderID),
            INDEX productID (productID)
           );

CREATE TABLE images
          ( imageID     INT             NOT NULL    AUTO_INCREMENT,
            userID      INT             NOT NULL,
            filename    VARCHAR(60)     NOT NULL,
            PRIMARY KEY (imageID),
            INDEX userID (userID)
           );

CREATE TABLE products
          ( productID       INT             NOT NULL    AUTO_INCREMENT,
            description     VARCHAR(60)     NOT NULL,
            price           DECIMAL(10,2)   NOT NULL,
            PRIMARY KEY (productID)
           );

 CREATE TABLE colors
          ( colorID         INT             NOT NULL    AUTO_INCREMENT,
            colorname       VARCHAR(60)     NOT NULL,
            PRIMARY KEY (colorID)
           );

CREATE TABLE sizes
          ( sizeID              INT             NOT NULL    AUTO_INCREMENT,
            size_description    VARCHAR(60)     NOT NULL,
            PRIMARY KEY (sizeID)
           );

CREATE TABLE style_options
          ( styleID         INT             NOT NULL    AUTO_INCREMENT,
            description     VARCHAR(60)     NOT NULL,
            PRIMARY KEY (styleID)
           );

CREATE TABLE color_selections
          ( selectionID     INT     NOT NULL    AUTO_INCREMENT,
            productID       INT     NOT NULL,
            colorID         INT     NOT NULL,
            PRIMARY KEY (selectionID),
            INDEX productID (productID)
           );

CREATE TABLE size_selections
          ( selectionID     INT     NOT NULL    AUTO_INCREMENT,
            productID       INT     NOT NULL,
            sizeID          INT     NOT NULL,
            PRIMARY KEY (selectionID),
            INDEX produtID (productID)
           );

CREATE TABLE style_selections
          ( selectionID     INT     NOT NULL    AUTO_INCREMENT,
            productID       INT     NOT NULL,
            styleID         INT     NOT NULL,
            PRIMARY KEY (selectionID),
            INDEX productID (productID)
           );




