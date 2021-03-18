<!-- add flag to comment table -->

ALTER TABLE `comment` ADD `flag` BOOLEAN NOT NULL AFTER `createdAt`;