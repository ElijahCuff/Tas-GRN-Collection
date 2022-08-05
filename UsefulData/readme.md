## Collection of other useful materials.    
• Information Operations   
• Communication Operations   
• Training Operations   
• Evasion Resources    
   
### Universal Police TGID    
• Some scanners require entering a TGID to listen in on specific Talk Group's, for example the Health Department/Ambulance or Defence Department/Police.   
Many departments have several TGID's to seperate transmissions, for example the Tas GRN has several TGID'S for identifying if it's from a Vehicle, from an officer's device on the field or from a Headquarters such as state wide Broadcast for instance.
      
```
Police South 
DEC 	AFS 	Mode 	Alpha Tag	Description	Tag
1058	08-042	D	PD S14	Police South 14	Law Dispatch
1059	08-043	D	PD S15	Police South 15	Law Dispatch
1077	08-065	D	PD S22 Country	Police South 22 Country	Law Talk
1078	08-066	D	PD S23 Hobart	Police South 23 Hobart	Law Dispatch
1079	08-067	D	PD S24 E Shore	Police South 24 Eastern Shore	Law Dispatch
1080	08-070	D	PD S25 Chat	Police South 25 Chat	Law Talk
Police West 
DEC 	AFS 	Mode 	Alpha Tag	Description	Tag
1093	08-085	D	PD W36 Country	Police West 36 Country	Law Dispatch
1094	08-086	D	PD W37 City	Police West 37 City	Law Tac
1095	08-087	D	PD W38 Chat	Police West 38 Chat	Law Talk
Police 
DEC 	AFS 	Mode 	Alpha Tag	Description	Tag
1099	08-093	D	PD 42	Police 42	Law Tac
```

The talk groups can be annoying to program on some handsets, 🕵️‍♂️ Uniden I'm looking at you.      
For this reason a useful trick to include all departments is to set your TGID as open after 08...
```
08----
```
This tells the handset to exclude anything that isn't by a police department.     

  
#### Maybe Useful,   
https://github.com/ElijahCuff/Australia-Telstra-Payphone-Number-Database
