CREATE USER 'snows-connector'@'localhost' IDENTIFIED BY '7ulo5I';
GRANT SELECT, INSERT, UPDATE ON snows.* TO 'snows-connector'@'localhost';
