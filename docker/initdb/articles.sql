SET CHARACTER_SET_CLIENT = utf8mb4;
SET CHARACTER_SET_CONNECTION = utf8mb4;

CREATE TABLE `sampledb`. `test_t.saku` ( `id` BIGINT NOT NULL AUTO_INCREMENT , `date` DATE NOT NULL , `like_num` BIGINT NOT NULL , `comment_num` BIGINT NOT NULL , `post_num` INT NOT NULL , `follower_num` INT NOT NULL , `impression_num` BIGINT NOT NULL , `reach_num` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

CREATE TABLE `sampledb`. `test_account` ( `id` BIGINT NOT NULL AUTO_INCREMENT , `date` DATE NOT NULL , `like_num` BIGINT NOT NULL , `comment_num` BIGINT NOT NULL , `post_num` INT NOT NULL , `follower_num` INT NOT NULL , `impression_num` BIGINT NOT NULL , `reach_num` BIGINT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

INSERT INTO `test_t.saku`(
    `id`,
    `date`,
    `like_num`,
    `comment_num`,
    `post_num`,
    `follower_num`,
    `impression_num`,
    `reach_num`
)
VALUES
(
    NULL,
    CURRENT_DATE(),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 2 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 3 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 4 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 5 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 6 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 7 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 8 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 9 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
);

INSERT INTO `test_account`(
    `id`,
    `date`,
    `like_num`,
    `comment_num`,
    `post_num`,
    `follower_num`,
    `impression_num`,
    `reach_num`
)
VALUES
(
    NULL,
    CURRENT_DATE(),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 2 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 3 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 4 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 5 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 6 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 7 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 8 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
),
(
    NULL,
    DATE_SUB(CURRENT_DATE, INTERVAL 9 DAY),
    FLOOR(20 + RAND() * 40),
    FLOOR(5 + RAND() * 20),
    FLOOR(5 + RAND() * 15),
    FLOOR(20 + RAND() * 50),
    FLOOR(30 + RAND() * 50),
    FLOOR(30 + RAND() * 50)
);