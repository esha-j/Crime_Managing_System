# Crime_Reporting_System

### OBJECTIVE

Not only during pandemic, but even before, many a times, victims were ashamed of the crimes that they were subject to, and under familial and societal pressure, did not report the crime. This has been going on for so long, and due to this, many criminals go unpunished and keep on doing bad things. To prevent any victim in the future from being scared to report what happened to them, we have come up with this project. This system will also enable the police force to manage crime data and criminal information better and in a more organized way, which will increase their efficiency. The system will hold criminal details, use details, FIR details, and FIR status, amongst other things. It will also hold the information of missing people who are currently being worked on. It will allow only authorized users(police officers with login ID and password) to access the stores files, whereas the FIRs will be able to get filed by anyone.

### MOTIVATION

This system can be utilised by any police department across the country, this system is not only for the authorized higher officials, this is also for the common citizen of our nation. The citizens are given limited access to the portal, they can login and file a FIR, the view the status of their FIR and they can also get updated with the current local crime. To assure safety and proper functioning of each case , an officer will be appointed to a particular case and will stay in contact with the victim or the relatives. The status report of each crime will get updated everyday by the officer in charge. Police can also keep track of the missing citizens as well as the criminal yet to be caught.

### PROJECT RESOURCE REQUIREMENTS

+ SOFTWARE REQUIREMENTS
```
MySQL Workbench 8.0 CE
Php Admin
Notepad++
XAMPP v.3.2.4
```
+ HARDWARE REQUIREMENTS
```
233 MHz processor
128 MB SD-RAM
2 – 4 GB Hard-Disk
1.44 MB Floppy Disk Drive
Monitor
```

### DESIGN OF THE PROJECT

#### ER DIAGRAM
![image](https://github.com/esha-j/Crime_Managing_System/assets/88835998/f7b030dd-b135-4592-807d-a797a7fef6b6)


#### RELATIONAL SCHEMA
![image](https://github.com/esha-j/Crime_Managing_System/assets/88835998/d4069528-9b98-41af-8394-c6f1c5a1a720)



### IMPLEMENTATION

Using Xampp and Visual Studio Code we create the front end with the help of css, html, php and javascript. The front-end will run in any browsing website under the localhost code. The front end and the back end are connected using the following code:
```
<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_CMS = "localhost";
$database_CMS = "crimes";
$username_CMS = "root";
$password_CMS = "";
$CMS = mysqli_connect($hostname_CMS, $username_CMS, $password_CMS) or trigger_error(mysql_error(),E_USER_ERROR); 
?>

```

### FRONT-END

#### HOME-PAGE
![image](https://github.com/esha-j/Crime_Managing_System/assets/88835998/c3dbc398-514f-4048-96db-cd88c25ca83d)

#### NEWS
![image](https://github.com/esha-j/Crime_Managing_System/assets/88835998/94cb229b-7ca8-4e4e-9dc7-7178f72f49b9)

#### TIPS
![image](https://github.com/esha-j/Crime_Managing_System/assets/88835998/0b757926-9f0e-4544-ad9e-6cecad0efa46)

#### ADMIN-PAGE
Only admin can access to this page, here they can manage the safety tips, news , user details as well as the details of various police stations.

![image](https://github.com/esha-j/Crime_Managing_System/assets/88835998/63460ddf-b1e2-4385-bcff-335958f2684c)

![image](https://github.com/esha-j/Crime_Managing_System/assets/88835998/7db19db9-4697-4765-8a1d-3da06d2bbc3e)


#### POLICE-LOGIN
Only the particular police station staff can access this page. Here they can modify the complaints , missing citizens and the most wanted pages.

![image](https://github.com/esha-j/Crime_Managing_System/assets/88835998/f80dbf54-cb4d-4dee-af78-fe287a1efc94)

![image](https://github.com/esha-j/Crime_Managing_System/assets/88835998/0cd57489-cfde-4a74-a785-4785ff5bb74d)

#### USER-LOGIN
The User can file complaints and track their complains.

![image](https://github.com/esha-j/Crime_Managing_System/assets/88835998/861b51b0-b2ed-48f7-8820-bcbbd073a255)

![image](https://github.com/esha-j/Crime_Managing_System/assets/88835998/fa9c2449-2dc7-4339-9fb0-a52b16078ad5)

### CONCLUSION

Moving towards the digital world and during this pandemic we have realized the importance of digitalizing everything. As crime rates have been increasing, this system helps in monitoring the criminal reports and the user can file complains online. As this system is user friendly and can also be used by admin. This system also allows helps the user to keep track of their complaints and the police to manage the complaints.

### REFERENCES 

[1] Birudukota Ananda Ganesh ,B.N.S.Gupta, “Crime Management and Reporting System”, JETIR, Volume 7, Issue 8, August 2020 

[2] Aamir Khan, Amit Singh, Ankit Chauhan, Aishwarya Gupta, “CRIME MANAGEMENT SYSTEM”, International Research Journal of Engineering and Technology (IRJET) e-ISSN: 2395- 0056, p-ISSN: 2395-0072 , Volume: 06 Issue: 04 | Apr 2019 

[3] Shiju Sathyadevan, Crime analysis and prediction,IEEE,25 Sep t2014,10.11 09/CNSC.20 14.6906719

[4] C. J. Date, A. Kannan and S. Swamynathan, An Introduction to Database Systems, Pearson Education, Eighth Edition, 2009






