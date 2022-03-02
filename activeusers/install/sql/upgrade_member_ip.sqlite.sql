CREATE TABLE IF NOT EXISTS %%PREFIX%%connectedusers_tmp (
    sessionid  varchar(40) NOT NULL,
    login varchar(50) NULL,
    name varchar(50) NULL,
    member_ip VARCHAR(40) NOT NULL DEFAULT '',
    connection_date INT(10) UNSIGNED NOT NULL DEFAULT 0,
    last_request_date INT(10) UNSIGNED NOT NULL DEFAULT 0,
    disconnection_date INT(10) UNSIGNED NULL,
    PRIMARY KEY (sessionid)
) DEFAULT CHARSET=utf8;

INSERT INTO %%PREFIX%%connectedusers_tmp (sessionid, login, name, member_ip, connection_date, last_request_date, disconnection_date)
SELECT sessionid, login, name, member_ip, connection_date, last_request_date, disconnection_date FROM %%PREFIX%%connectedusers;

DROP TABLE %%PREFIX%%connectedusers;
ALTER TABLE %%PREFIX%%connectedusers_tmp RENAME TO %%PREFIX%%connectedusers;
