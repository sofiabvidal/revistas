CREATE TABLE revistas
(
    id       INT             NOT NULL    AUTO_INCREMENT,
    nome     VARCHAR(150)    NOT NULL,
    editora  VARCHAR(350)    NULL, 
	area  VARCHAR(350)    NULL, 
    issn    TEXT            NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;