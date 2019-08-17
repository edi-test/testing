# Original
#CREATE TABLE table1 (
#	 id int(11)	
#)

CREATE TABLE IF NOT EXISTS table1 ( id int(11));
CREATE TABLE IF NOT EXISTS table2 like table1;
