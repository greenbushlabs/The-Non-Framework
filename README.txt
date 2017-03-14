Directory Structure & Naming Convention:
/images/ => All images go here
/admin/ => Administrative functions
/static/ => All static files go her

static.main.php => main content start page
db.connect.php => All database connection variables and functions
index.php => This is the main template
template.fileName.php => This is any other generic template other than main
array.fileName.php => This is a static generic pre-defined data array
function.fileName.php => This is any generic function that process & computes
form.fileName.php => This is any generic form
view.fileName.php => This is any generic view of data pulled from the database
==============================================
Specifics:
Within each files clearly state function inputs, outputs, and note all transitions within the script.
Example: 
			// @@@@@@@@@@@@@@@@@@@@@@@@@@ //
			// @  THIS IS WHERE THE MAIN DATA IS GRABBED @  //
			// @@@@@@@@@@@@@@@@@@@@@@@@@@ //


			// @@@@@@@@@@@@@@@@@@@@@@@@@@ //
			// @ LOOP THROUGH THE ARRAY HERE @@@@@@  //
			// @@@@@@@@@@@@@@@@@@@@@@@@@@ //


Additional Notes:
To allow PHP “register globals” :
Create php.ini in root directory
Add line register_globals=1 and save
Or
Create .htaccess file in root directory
Add line php_flag register_globals 1 and save


MySQL and SQLAdmin Interfaces:
MySQL: https://www.adminer.org 
SQLite: https://www.phpliteadmin.org 

