#**CiviCRM extension for Austrian Postcodes**


- Development Status: stable, beta
- Used for: "Provides autocomplete functions for Postcode, City, Street Address and State when Country=Austria. Rearranges address fields so ZIP Code and City are displayed at the top."
- CMS Compatibility: 4.6
- Git URL: [click me](https://github.com/systopia/de.systopia.postcodeat)
- Fully Qualified Name: de.systopia.postcodeat
- Author: Systopia.


#**CiviCRM extension for Austrian Postcodes**

CiviCRM extension for Austrian Postcodes

**Provides autocomplete functions for Postcode, City, Street Address and State when Country=Austria.**

**Rearranges address fields so ZIP Code and City are displayed at the top.**

Uses the XML zip file from Statistik Austria [[**CiviCRM extension for Austrian Postcodes**]](http://www.statistik.at/verzeichnis/strassenliste/gemplzstr.zip)


##API Functions

PostcodeAT.Importstatistikaustria - supports auto-download from statistik austria and manual install with parameter "zipfile". PostcodeAT.Get - main lookup function used by AJAX autocomplete. PostcodeAT.Getatstate - lookup function for Austrian State from Postcode. PostcodeAT.Getstate - lookup function for State from Postcode (requires postal_code and country_id)


##Installation / Usage

**This extension will not look up any addresses until you execute the API function PostcodeAT.Importstatistikaustria and it has completed successfully.** Normally this will retrieve all data automatically but if you do not have an internet connection on your server you will have to download the zip file manually and specify it's location using the parameter "zipfile" when you run the API function.

