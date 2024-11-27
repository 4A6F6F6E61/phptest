CREATE TABLE User (
    id         BIGINT AUTO_INCREMENT PRIMARY KEY,
    username   VARCHAR(50) NOT NULL UNIQUE,
    user_img   VARCHAR(255) DEFAULT NULL,
    password   VARCHAR(255) NOT NULL,
    name       VARCHAR(100) NOT NULL,
    email      VARCHAR(320) NOT NULL UNIQUE,
    bio        TEXT DEFAULT "",
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deleted_at DATETIME DEFAULT NULL
) ENGINE = InnoDB;

CREATE TABLE Post (
    id         BIGINT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each post
    user_id    BIGINT NOT NULL, -- Foreign key to user table
    content    TEXT NOT NULL, -- Supports longer posts
    img_url    VARCHAR(255) DEFAULT NULL, -- Optional image URL
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP, -- Post creation timestamp
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- Auto-updated timestamp
    deleted_at DATETIME DEFAULT NULL, -- For soft deletes
    nsfw       BOOLEAN NOT NULL DEFAULT FALSE, -- Boolean for NSFW flag
    CONSTRAINT fk_user FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE
) ENGINE = InnoDB;
