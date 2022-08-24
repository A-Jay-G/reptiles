CREATE TABLE categoriestable (
catID          INT(8) NOT NULL AUTO_INCREMENT,
catName        VARCHAR(255) NOT NULL,
catDesc    VARCHAR(255) NOT NULL,
UNIQUE INDEX catName_unique (catName),
PRIMARY KEY (catID)
) TYPE=INNODB;