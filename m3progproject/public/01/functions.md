strtoupper returned een string allemaal in hoofdletters
strtoupper kan ook je string omzetten in een ASCII 

Parameters strtoupper: string 
The input string.

Return Values strtoupper: Returns the uppercased string.

Parameters strpos: haystack
The string to search in.

needle
The string to search for.

Prior to PHP 8.0.0, if needle is not a string, it is converted to an integer and applied as the ordinal value of a character. This behavior is deprecated as of PHP 7.3.0, and relying on it is highly discouraged. Depending on the intended behavior, the needle should either be explicitly cast to string, or an explicit call to chr() should be performed.

offset
If specified, search will start this number of characters counted from the beginning of the string. If the offset is negative, the search will start this number of characters counted from the end of the string.

Return Values strpos: Returns the position of where the needle exists relative to the beginning of the haystack string (independent of offset). Also note that string positions start at 0, and not 1.

Returns false if the needle was not found.

file_exists kan je gebruiken om te zien of een file er is

Parameters file_exists: filename
Path to the file or directory.

On windows, use //computername/share/filename or \\computername\share\filename to check files on network shares.

Return Values file_exists: Returns true if the file or directory specified by filename exists; false otherwise.

