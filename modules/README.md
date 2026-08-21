#### This module saves a submitted form to the correct Google Sheet tab

### What happens?

1. The form on the tickets.tar-mac.be site is submitted
2. This entry is being saved in the Google Sheet (https://docs.google.com/spreadsheets/d/1p5ZiWFmHPYLVz0vJV-xSKYH4Ln2bnwdbxf3gPVEE0yo/edit?gid=1407188599#gid=1407188599) - on the correct tab
3. A mail is being send to the ticket buyer
4. A mail is being send to the Tarmac ticket admin

### What to do to make this work for a new event
1. Create a new tab in the Google Sheet (use one word to prevent errors)
2. Change the Google script (https://script.google.com/home) in the project 'Tickets Tarmac' - https://script.google.com/home/projects/19_rIRuo_DISZTBFIv3biJbFyFEvDrj7CysbfOZ4xY00kdTNCgNtv39nr/edit 
3. Replace the old data in code.gs - mostly replace the old name of the tab with the new one, and the ticket price. Both are on top of the code, lines 3 & 4
    `var SHEET_NAAM = 'Flexistantialists';`
    `var prijsPerTicket = 12;`
4. Click `Implementeren` on top of the page, give it a name ('new event' or something like that) and copy the web-app URL
5. IMPORTANT!! Paste the web-app url in line 55 of the Module.php file - if not the changes WILL NOT WORK
    `$webhookUrl = 'https://script.google.com/macros/s/thisisanexample/exec';`
6. Change the 2 templates for the emails that are being sent after form submission in the folder 'templates/_email'
7. Change the `User Notification Subject` in the Form Setting in the form (at the bottom)
7. TEST THE FORM, SHEET AND MAIL

### Future plans
Once it's possible to duplicate a form in Wheelforms, the variables that are now in the code can be set in the Wheel Form. 
Copying a form manually is risky since one small typo can break everything.