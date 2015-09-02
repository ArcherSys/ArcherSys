/*
The bucket count should be set to about two times the 
maximum expected number of distinct values in the 
index key, rounded up to the nearest power of two.
*/

CREATE TABLE [dbo].[Usersx]
(
	[Id] INT NOT NULL PRIMARY KEY NONCLUSTERED HASH WITH (BUCKET_COUNT = 131072), 
    [Username] NTEXT NOT NULL, 
    [Password] NVARCHAR(50) NULL
) WITH (MEMORY_OPTIMIZED = ON)

GO

/*
Do not change the database path or name variables.
Any sqlcmd variables will be properly substituted during 
build and deployment.
*/

ALTER DATABASE [$(DatabaseName)]
	ADD FILEGROUP [Usersx_FG] CONTAINS MEMORY_OPTIMIZED_DATA