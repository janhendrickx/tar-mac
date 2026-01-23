Starten
Craft CMS:
docker opstarten (ik gebruik de desktop versie, die app openen is genoeg)
`ddev start`

Connectie maken met ssh gaat als volgt:
dit is een snelkoppeling - te vinden in de ~/.ssh/config
`ssh tarmac`
Ofwel de standaard mijn.host manier (met extra poort, poort 22 werkt hier niet)
`ssh -p 26 xc113002@tar-mac.be`

Tailwind:
`npx tailwindcss -i ./web/assets/sass/app.css -o ./web/assets/css/app.css --watch`