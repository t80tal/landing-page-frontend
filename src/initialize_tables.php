<?php
require __DIR__ . '/db.php';

function doTableExist($pdo, $tableName)
{
    try {
        $sql = "SELECT 1 FROM $tableName LIMIT 1";
        $pdo->query($sql);
        return true;
    } catch (PDOException $e) {
        if (strpos($e->getMessage(), "relation \"$tableName\" does not exist") !== false) {
            return false;
        }
    }
}

if (!doTableExist($pdo, "contacts")) {
    try {
        $pdo->exec("
                CREATE TABLE contacts (
                    id SERIAL PRIMARY KEY,
                    name VARCHAR(255),
                    email VARCHAR(255),
                    phone VARCHAR(255),
                    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                );
                CREATE INDEX idx_contacts_phone ON contacts(phone);
        ");
    } catch (PDOException $e) {
        echo "Error creating table: " . $e->getMessage();
    }
}

if (!doTableExist($pdo, "newsletter_subscribers")) {
    try {
        $pdo->exec("
                CREATE TABLE newsletter_subscribers (
                    id SERIAL PRIMARY KEY,
                    email VARCHAR(255) UNIQUE,
                    subscription_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                );
                CREATE INDEX idx_newsletter_subscribers_email ON newsletter_subscribers(email);
            ");
    } catch (PDOException $e) {
        echo "Error creating table: " . $e->getMessage();
    }
}
