<?php
/*

$variable = mysqli_connect("hostname", "username", "password", "dbname");

mysqli_query($variable, $query);

	1. CREATE DATABASE <dbname>
	2. DROP DATABASE <dbname>

	3. CREATE TABLE <tablename> (colname1 datatype, colname2 datatype)

		Ex.
			CREATE TABLE student (id INT AUTO_INCREMENT, full_name VARCHAR (255), age INT, address TEXT, PRIMARY KEY (id))

	4. DROP TABLE <tablename>
	
	5. TRUNCATE TABLE <tablename>
			TRUNCATE TABLE demo_tbl

	6. DELETE FROM <tablname>
			DELETE TABLE demo_tbl

	
	7. INSERT INTO <tablename> (col1, col2, col3, col4, .... ) VALUES ('val1', 'val2', 'val3')

	8. UPDATE TABLE <tablename> SET col1 = 'val1', col2 = 'val2'.... WHERE id = 3


	9. SELECT * FROM <tablename>

	10. SELECT col1, col2 FROM <tablename>
		Ex. --------- SELECT name, age, city FROM user_tbl
			
			SELECT * FROM student_tbl WHERE age < 25 OR city = 'indore'


				id    	name 		age 		city
				5 		rohit		24			ujjain
				7		james		30			indore


		


			
			SELECT * FROM student_tbl WHERE age < 25 AND city = 'indore'


	11. SELECT DISTINCT col1 FROM <tablename>

			SELECT DISTINCT city FROM employee_tbl


	12. ORDER BY
			The order by keyword is used to ordering the result(sorting the result).

			SELECT * FROM student_tbl ORDER BY age ASC
			SELECT * FROM student_tbl ORDER BY age DESC

	13. LIMIT
			this keyword is getting limited record from the table.

			SELECT * FROM student_tbl WHERE city = 'indore' ORDER BY age ASC LIMIT 3


			SELECT * FROM student_tbl ORDER BY salary DESC LIMIT 1, 1

	14. LIKE

			id 			name 			city 			age
			1			rohit			indore 			25
			2			nidhi			ujjain 			23
			3			rakesh			udaipur			21
			4			nidhi			mumbai 			25
			5			jaya			indore 			20


		SELECT * FROM student_tbl WHERE city LIKE 'u%'
		
		SELECT * FROM student_tbl WHERE city LIKE '%u'
		
		SELECT * FROM student_tbl WHERE city LIKE '%u%'



		
	
		DataBase Engine 			SQL

			1. Oracle
			2. MySQL
			3. MS Access
			4. SQL Server


		SEO ---- Search Engine Optimization
	


			


			
			







*/

?>