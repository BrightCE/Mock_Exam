<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'functions.php';
/*
createTable('government',
            'qnum INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            question TEXT,
            A VARCHAR(256),
            B VARCHAR(256),
            C VARCHAR(256),
            D VARCHAR(256),
            answer VARCHAR(16)');

createTable('biology',
            'qnum INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            question TEXT,
            A VARCHAR(256),
            B VARCHAR(256),
            C VARCHAR(256),
            D VARCHAR(256),
            answer VARCHAR(16)');

createTable('subjects',
            'num INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(64)');
*/
createTable('demo_record',
            's_num INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            subj VARCHAR(64),
            score INT,
            date TIMESTAMP');

createTable('newsletter',
            's_num INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
             email VARCHAR(256),
            date TIMESTAMP');
?>
