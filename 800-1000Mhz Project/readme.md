# **800**MHz to **1000**Mhz project.
----
> This project aims to provide resources for verifying the frequencies on [Radio Reference ](https://RadioReference.com), In many cases the information may be outdated in your area, for example I needed to request an update to the Mt Horror repeater, as the information was several years old.
 
>  Information can be verified by checking the repeaters registered frequency assignments at the A.C.M.A [Website](https://web.acma.gov.au/rrl/site_proximity.for_client?pCLIENT_NO=220486) ( Australian Communications And Media Authority ).
  
 Rather than create a whole new list exactly the same as Radio Reference, I decided to download the CSV lists for both site information and 800 to 1000 megahertz frequencies, unfortunately this was a cumbersome task trying to get the frequencies that are displayed on Radio Reference ( This means not including anything above 1Ghz and below 800Mhz )
  
##  **The Lists**
----
1. frequencies.csv
2. transmitters.csv

> The two CSV's need to be used together to locate the exact frequencies for each repeater.
 
 transmitters.csv will show you the repeaters name, and importantly the SITE Number.
  
  Once obtaining the Site Number, You need to look through all the registered frequencies and locate the ones associated with the site no' - An easy task for an application, script or software to perform.  
  
 Example,  
### _transmitters.csv_
**SITE_NO**`, LATITUDE, LONGITUDE, NAME,STATE,LICENSING_AREA_ID,POSTCODE,SITE_PRECISION,ELEVATION,HCIS_L2, CHANNELS`

**33164**`,-42.412421,146.463994,TasNetworks Site Heals Spur WAYATINAH,TAS,5,7140,Within 10 metres,684,LY8F,60`
   
###      _frequencies.csv_  
 `LICENSE_NO,`**TOWER_TX_FREQ**`,TOWER_RX_FREQ,`**SITE_NO**
 `1416199,`**866.7625**`,821.7625,`**33164**
 
 
 The tower TX Frequency is the frequency that the repeater will broadcast out to handsets and radio devices while the RX Frequency is the frequency that the Handset will Broadcast Out to the Repeater.
 
In this example, to output a broadcast on channel 866.7625 we would need to Transmit a signal to channel 821.7625.
  
 With a scanner, we are only interested in the repeaters TX transmitter signals, not the RX receiver signals ( unless locating a Radio Device by it's output transmitting signal ).
  
Trunking changes the channels randomly to allow multiple people to communicate simultaneously.
 
 
  
  
  



