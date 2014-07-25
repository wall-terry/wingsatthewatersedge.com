<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$dsn = 'mysql:host=localhost;dbname=watersedge';
$username = 'watersedge';
$password = 'CDLn2256267';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $ex) {
    $message = $ex->getMessage();
    display_db_error($message);
    exit;
}

function get_user_from_userID($userID) {
    global $db;
    $query = 'SELECT  * FROM users
            WHERE userID = :userID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':userID', $userID);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();
        return $result;
    } catch (Exception $ex) {
        $message = 'Failed to Get user dat from userID';
        display_db_error($message);
    }
}

function createImage($userID, $username, $filename, $title, $description) {
    global $db;

    $query = 'INSERT INTO images
               (userID, username, filename, title, description) 
              VALUES
                (:userID, :username, :filename, :title, :description)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':userID', $userID);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':filename', $filename);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':description', $description);
        $statement->execute();
        $statement->closeCursor();
        $imageID = $db->lastInsertId();
        return $imageID;
    } catch (PDOException $ex) {
        $message = $ex->getMessage();
        display_db_error($message);
    }
}

function createArticle($userID, $username, $title, $text, $description) {
    global $db;

    $query = 'INSERT INTO articles
               (userID, username, title, content, description) 
              VALUES
                (:userID, :username, :title, :content, :description)';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':userID', $userID);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':content', $text);
        $statement->bindValue(':description', $description);
        $statement->execute();
        $statement->closeCursor();
        $articleID = $db->lastInsertId();
        return $articleID;
    } catch (PDOException $ex) {
        $message = $ex->getMessage();
        display_db_error($message);
    }
}

function alterArticle($articleID, $title, $text, $description) {
    global $db;

    $query = 'UPDATE articles
              SET   title = :title,
                    content = :content,
                    description = :description
              WHERE articleID = :articleID';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':content', $text);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':articleID', $articleID);
        $rowCount = $statement->execute();
        $statement->closeCursor();
        return $rowCount;
    } catch (PDOException $ex) {
        $message = $ex->getMessage();
        display_db_error($message);
    }
}

function deleteArticle($articleID) {
    global $db;
    $query = 'DELETE FROM articles Where articleID = :articleID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':articleID', $articleID);
        $rowCount = $statement->execute();
        return $rowCount;
    } catch (PDOException $ex) {
        $message = $ex->getMessage();
        display_db_error($message);
    }
}
    function getImageData($imageID) {
        global $db;

        $query = 'SELECT  * FROM images
            WHERE imageID = :imageID';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':imageID', $imageID);
            $statement->execute();
            $result = $statement->fetch();
            $statement->closeCursor();
            return $result;
        } catch (Exception $ex) {
            $message = 'Failed to Get image data from userID';
            display_db_error($message);
        }
    }

    function getArticleData($articleID) {
        global $db;

        $query = 'SELECT  * FROM articles
            WHERE articleID = :articleID';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':articleID', $articleID);
            $statement->execute();
            $result = $statement->fetch();
            $statement->closeCursor();
            return $result;
        } catch (Exception $ex) {
            $message = 'Failed to Get article data from userID';
            display_db_error($message);
        }
    }

    function getAllImages($limit) {
        global $db;

        $query = "SELECT  * FROM images
              WHERE imageID > 0
              ORDER BY imageID ASC $limit";
        try {
            $statement = $db->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
            return $result;
        } catch (Exception $ex) {
            $message = 'Failed to Get image data from userID';
            display_db_error($message);
        }
    }

    function getAllArticles($limit) {
        global $db;

        $query = "SELECT  * FROM articles
              WHERE articleID > 0
              ORDER BY date DESC $limit";
        try {
            $statement = $db->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
            return $result;
        } catch (Exception $ex) {
            $message = 'Failed to Get image data from userID';
            display_db_error($message);
        }
    }
    
        function create_user_account($username, $email, $password) {
        global $db;

        $query = 'INSERT INTO users
               (username, email, password) 
              VALUES
                (:username, :email, :password)';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':username', $username);
            $statement->bindValue(':email', $email);
            $statement->bindValue(':password', $password);
            $statement->execute();
            $statement->closeCursor();
            $user_ID = $db->lastInsertId();
            return $user_ID;
        } catch (PDOException $ex) {
            $message = $ex->getMessage();
            display_db_error($message);
        }
    }
    
    function alterUserAccount($user_name, $user_email, $new_password, $userID) {
        global $db;
        
        $query = 'UPDATE users
                 SET username = :username,
                     password = :password,
                     email = :email             
            WHERE userID = :userID';

        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':username', $user_name);
            $statement->bindValue(':email', $user_email);
            $statement->bindValue(':password', $new_password);
            $statement->bindValue(':userID', $userID);
            $rowCount =$statement->execute();
            $statement->closeCursor();

            return $rowCount;
        } catch (PDOException $ex) {
            $message = $ex->getMessage();
            display_db_error($message);
        }
    }
    
function deleteUser($userID) {
    global $db;
    $query = 'DELETE FROM users Where userID = :userID';
    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':userID', $userID);
        $rowCount = $statement->execute();
        return $rowCount;
    } catch (PDOException $ex) {
        $message = $ex->getMessage();
        display_db_error($message);
    }
}

    function check_user_login($userName, $passWord) {
    global $db;
    $query = 'SELECT * FROM users
            WHERE username = :username AND password = :password';

    try {
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $userName);
        $statement->bindValue(':password', $passWord);
        $statement->execute();
        $result = $statement->fetch();
        $statement->closeCursor();

        return $result;
    } catch (PDOException $ex) {
        $message = 'Login Database Error';
        display_db_error($message);
    }
}


    function display_db_error($message) {

        echo $message;
        exit();
    }
    