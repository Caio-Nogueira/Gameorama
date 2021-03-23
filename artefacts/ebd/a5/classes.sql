DROP TABLE IF EXISTS member CASCADE;
DROP TABLE IF EXISTS member_follow CASCADE;
DROP TABLE IF EXISTS administrator CASCADE;
DROP TABLE IF EXISTS news_post CASCADE;
DROP TABLE IF EXISTS topic CASCADE;
DROP TABLE IF EXISTS topic_follow CASCADE;
DROP TABLE IF EXISTS comment CASCADE;
DROP TABLE IF EXISTS reply CASCADE;
DROP TABLE IF EXISTS post_images CASCADE;
DROP TABLE IF EXISTS post_aura CASCADE;
DROP TABLE IF EXISTS comment_aura CASCADE;
DROP TABLE IF EXISTS follow_notification CASCADE;
DROP TABLE IF EXISTS comment_notification CASCADE;
DROP TABLE IF EXISTS reply_notification CASCADE;
DROP TABLE IF EXISTS post_report CASCADE;
DROP TABLE IF EXISTS topic_report CASCADE;
DROP TABLE IF EXISTS member_report CASCADE;


CREATE TABLE member (
    id integer PRIMARY KEY,
    username text NOT NULL UNIQUE,
    full_name text NOT NULL,
    email text NOT NULL UNIQUE,
    password text NOT NULL,
    bio text,
    profile_img bytea,
    banner_img bytea,
    aura integer DEFAULT 0 NOT NULL
);

CREATE TABLE member_follow (
    id_follower integer REFERENCES member(id) ON DELETE CASCADE,
    id_followed integer REFERENCES member(id) ON DELETE CASCADE,
    PRIMARY KEY(id_follower, id_followed)
);

CREATE TABLE administrator (
    id integer PRIMARY KEY REFERENCES member(id)
);

CREATE TABLE news_post (
    id integer PRIMARY KEY,
    title text NOT NULL,
    body text,
    post_date timestamp NOT NULL,
    aura integer DEFAULT 0 NOT NULL,
    owner integer NOT NULL REFERENCES member(id) ON DELETE CASCADE
);

CREATE TABLE topic (
    id integer PRIMARY KEY,
    name text NOT NULL UNIQUE
);

CREATE TABLE topic_follow (
    id_topic integer REFERENCES topic(id) ON DELETE CASCADE,
    id_member integer REFERENCES member(id) ON DELETE CASCADE,
    PRIMARY KEY(id_topic, id_member)
);

CREATE TABLE comment (
    id integer PRIMARY KEY,
    body text NOT NULL,
    commentDate timestamp NOT NULL,
    aura integer DEFAULT 0 NOT NULL,
    id_post integer NOT NULL REFERENCES news_post(id) ON DELETE CASCADE
);

CREATE TABLE reply (
    id_comment integer PRIMARY KEY REFERENCES comment(id) ON DELETE CASCADE,
    id_parent integer REFERENCES comment(id) ON DELETE CASCADE
);

CREATE TABLE post_images (
    id_post integer REFERENCES news_post(id) ON DELETE CASCADE,
    file bytea,
    PRIMARY KEY(id_post, file)
);

CREATE TABLE post_aura (
    id_post integer REFERENCES news_post(id) ON DELETE CASCADE,
    id_voter integer REFERENCES member(id) ON DELETE CASCADE,
    upvote boolean NOT NULL,
    PRIMARY KEY(id_post, id_voter)
);

CREATE TABLE comment_aura (
    id_comment integer REFERENCES comment(id) ON DELETE CASCADE,
    id_voter integer REFERENCES member(id) ON DELETE CASCADE,
    upvote boolean NOT NULL,
    PRIMARY KEY(id_comment, id_voter)
);

CREATE TABLE follow_notification (
    id_follower integer REFERENCES member(id) ON DELETE CASCADE,
    id_followed integer REFERENCES member(id) ON DELETE CASCADE,
    body text NOT NULL,
    PRIMARY KEY(id_follower, id_followed)
);

CREATE TABLE comment_notification (
    id_comment integer REFERENCES comment(id) ON DELETE CASCADE,
    id_commenter integer REFERENCES member(id) ON DELETE CASCADE,
    body text NOT NULL,
    PRIMARY KEY(id_comment, id_commenter)
);

CREATE TABLE reply_notification (
    id_reply integer REFERENCES reply(id_comment) ON DELETE CASCADE,
    id_commenter integer REFERENCES member(id) ON DELETE CASCADE,
    body text NOT NULL,
    PRIMARY KEY(id_reply, id_commenter)
);

CREATE TABLE post_report (
    id_reporter integer REFERENCES member(id) ON DELETE SET NULL,
    id_post integer REFERENCES news_post(id) ON DELETE CASCADE,
    body text NOT NULL,
    PRIMARY KEY(id_reporter, id_post)
);

CREATE TABLE comment_report (
    id_reporter integer REFERENCES member(id) ON DELETE SET NULL,
    id_comment integer REFERENCES comment(id) ON DELETE CASCADE,
    body text NOT NULL,
    PRIMARY KEY(id_reporter, id_comment)
);

CREATE TABLE topic_report (
    id_reporter integer REFERENCES member(id) ON DELETE SET NULL,
    id_topic integer REFERENCES topic(id) ON DELETE CASCADE,
    body text NOT NULL,
    PRIMARY KEY(id_reporter, id_topic)
);

CREATE TABLE member_report (
    id_reporter integer REFERENCES member(id) ON DELETE SET NULL,
    id_reported integer REFERENCES member(id) ON DELETE CASCADE,
    body text NOT NULL,
    PRIMARY KEY(id_reporter, id_reported)
);