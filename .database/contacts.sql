CREATE DATABASE IF NOT EXISTS app;

USE app;

CREATE TABLE IF NOT EXISTS contacts (
  id UUID,
  name VARCHAR(255),
  email VARCHAR(255),
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()
);

-- populate with some data
INSERT INTO contacts (id, name, email) VALUES(UUID(), "Bruno Andrade", "bruno@gmail.com");
INSERT INTO contacts (id, name, email) VALUES(UUID(), "Tayná Farria", "tayna@gmail.com");
INSERT INTO contacts (id, name, email) VALUES(UUID(), "John Doe", "john.doe@gmail.com");
INSERT INTO contacts (id, name, email) VALUES(UUID(), "Jane Doe", "jane.doe@gmail.com");