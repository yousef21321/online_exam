/* 1) Create our first database */
create database school
on primary (
	name= school,
	filename= 'C:\Program Files\Microsoft SQL Server\MSSQL14.MSSQLSERVER\MSSQL\DATA\school.mdf',
	size= 20MB,
	maxsize= 100MB,
	filegrowth= 50%
)
log on (
	name= school_log,
	filename= 'C:\Program Files\Microsoft SQL Server\MSSQL14.MSSQLSERVER\MSSQL\DATA\school_log.ldf',
	size= 10MB,
	maxsize= 50MB,
	filegrowth= 5MB
)

/* 2) Add a new file to 'school' database */
alter database school
add file (
	name= school_sec,
	filename= 'C:\Program Files\Microsoft SQL Server\MSSQL14.MSSQLSERVER\MSSQL\DATA\school_sec.ndf',
	size= 10MB,
	maxsize= 30MB,
	filegrowth= 50%
)

/* 3) Modify an existing file in 'school' database */
alter database school
modify file(name= school_sec, maxsize=50MB)

/* 4) Delete an existing file in 'school' database */
alter database school
remove file school_sec

/* 5) execute this line if deleting a file in the 'school' database does NOT work */
DBCC SHRINKFILE(school_sec, EMPTYFILE)

/* 6) Navigate to the 'school' database */
use school

/* 7) get all the information about the files exist inside the 'school' database */
select * from sys.database_files

/* 8) delete the whole 'school' database */
drop database school

