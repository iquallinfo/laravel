# laravel

1) Create a new git repository. Write proper commit for each features
=> Repository name : laravel

2) Using composer get the last version of laravel 5 (2min)
=> Done. Downloaded setup of larvel 5 using composer 

3) Using bower, install the jquery library on your app (2min)
=> Installed jquery using bower

4) Create using the Auth middleware and auto generated views an authentication system (5min)
=>  Used the default Laravel 5 middle ware Auth for login Routed the Path for login and register as follows
 Login : auth/login
 Register : auth/register

5) Using migrations define 2 tables (Hotels and Comments) and create the appropriate
Models. Defining the right relationships. Belongs, hasone, hasmany etc… (7 min)
=>  Created 2016_06_02_131454_createTable migration and created 2 tables Hoteles and Comments

6) On the /admin route, create the controller and views to be able to create an hotel.
Important : this page is only accessible by the user with id = 1 (12 min)
=> Routed the admin path. Only user login with login details as follows can access the admin. ID of user is 1
Admin login
user: admin@admin.com
pass: admin

7) Create using Seeds a second user with id = 2 named “john” with password “doe”. (2min)
=> Created Seed UserTableSeeder and added 2 users using it one admin with id 1 and another john with id 2
Another user
user: john@john.com
pass: doe


8) On the front office page “/” you list all hotels. (2 min)
=> List of all hotel is shown on home page

9) By clicking on an hotel you see all comments of this hotel. (2 min)
=> Clicking on View comments, Comments of related hotel is shown

10) If i’m logged in (not anonymous) with an user i’m able to post a comment (5 min)
=> Clicking on Add Comments will allow you to add comment to related holet. It will allow only if you are login

