# CPSC471
The php i believe to be pretty much done we need the SQL posted here WITH WHAT ALL THE VARIABLES MEAN. Cause it is a bit confusing as of right now with the queries...

WE HAVE TO MAKE THE HTML OF KEY FUNCTIONS NOW AND TRY TO DEBUG SO WE CAN HAND SOMETHING IN FOR THURSDAY...

What functions are necessary for the key presentation?
1.) patient can view their records
2.) doctor can search their patients
3.) nurse can look at drug records 
4.) pharmacist can look at drugs and fill it 
5.) We still need sql and what not to edit information... currently doctors can only search ???? 

query1= pulls all the datafrom patient user and displays it using query2.
query2= pulls just the credential from user if matched in the database.used as authentication.
// not really a variable.query3= updates the database doesnt pull anything. Only the admin has this option.
query4= returns creadentials from admin used as authentification.
query5= returns professionals clearence level if login successfull used as authentification and clearence aproval.
query6=pulls all info from doctors patients based on clearance that we got from query5.
query7= pulls all info from nurses patients based on clearance that we got from query5.
query8=pulls all info from pharmacist patients based on clearance that we got from query5.

My understanding on how the program should be.
1. you go to our website.
2. the main page should have three option 
    a) user login
    b) professional login
    c) admistrator login
3.if a) then perform user login authentification based on query2 and show info based on query1.
4. if b) perform user login authentification based on query5 then show info based on query6-query8 clerance level.
5. if c) perform admin login authentification based on query4 then update info based on query3.

Admins are people who have access to the complete data base they log into the db itself not through our website for example. Jorge can access the db cause he made it therefore he is an admin.
