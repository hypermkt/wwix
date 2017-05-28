
-- +goose Up
-- SQL in section 'Up' is executed when this migration is applied
CREATE TABLE website_templates(
  id int NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) DEFAULT NULL,
  created_at datetime,
  updated_at datetime,
  PRIMARY KEY(id)
) ENGINE=InnoDB;


-- +goose Down
-- SQL section 'Down' is executed when this migration is rolled back

DROP TABLE website_templates;
