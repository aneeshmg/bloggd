USE test;

DROP TABLE IF EXISTS blog_posts;
DROP TABLE IF EXISTS bloggd_users;


CREATE TABLE bloggd_users(
  u_id INT(128) primary key auto_increment,
  email VARCHAR(256) NOT NULL,
  pass VARCHAR(512) NOT NULL,
  user_name VARCHAR(128) NOT NULL
);

CREATE TABLE blog_posts(
  p_id INT(255) primary key auto_increment,
  written_by INT(128) NOT NULL,
  filename VARCHAR(512) NOT NULL,
  ts timestamp,
  foreign key(written_by) REFERENCES bloggd_users(u_id) ON DELETE CASCADE
)
