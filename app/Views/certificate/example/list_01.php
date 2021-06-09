<pre>
CREATE TABLE 테이블명 (
	속성명 데이터타입 NOT NULL,
	PRIMARY KEY(속성명),
	UNIQUE(속성명),
	FOREIGN KEY(속성명) REFERENCES 참조테이블명(참조속성명)
		[ON DELETE CASCADE SET NULL SET DEFAULT NO ACTION],
		[ON UPDATE CASCADE SET NULL SET DEFAULT NO ACTION],
	CONSTRAINT 제약조건명 CHECK(속성명=범위값)
);

CREATE SCHEMA 스키마명 AUTHORIZATION 사용자;

ALTER TABLE table_name ADD column_name column_type;

GRANT insert ON table_name TO user;
REVOKE insert ON table_name FROM user;

INSERT INTO table_name (column_name) VALUES (value);

</pre>