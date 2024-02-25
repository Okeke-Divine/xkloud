CREATE TABLE `container` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`ip` TEXT NOT NULL ,
`browser` TEXT NOT NULL ,
`device` TEXT NOT NULL ,
`file_name` TEXT NOT NULL ,
`file_cat` TEXT NOT NULL ,
`fil_id` TEXT NOT NULL ,
`os` TEXT NOT NULL ,
`time` TEXT NOT NULL ,
`downloaders` TEXT NOT NULL,
`cookie` TEXT NOT NULL
) ENGINE = MYISAM ;


CREATE TABLE `files` ( `id` INT NOT NULL AUTO_INCREMENT , `container_id` TEXT NOT NULL , `file_name` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;