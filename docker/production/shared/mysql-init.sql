-- ============================================================================
-- MySQL initial setup for EXygnus internal database
-- Executed only on first MySQL initialization (empty /var/lib/mysql)
-- ============================================================================

CREATE DATABASE IF NOT EXISTS `exygnus`
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

CREATE USER IF NOT EXISTS 'exygnus'@'127.0.0.1'
    IDENTIFIED WITH mysql_native_password BY 'exygnus';

CREATE USER IF NOT EXISTS 'exygnus'@'localhost'
    IDENTIFIED WITH mysql_native_password BY 'exygnus';

GRANT ALL PRIVILEGES ON `exygnus`.* TO 'exygnus'@'127.0.0.1';
GRANT ALL PRIVILEGES ON `exygnus`.* TO 'exygnus'@'localhost';

FLUSH PRIVILEGES;
