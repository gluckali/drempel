readme!

login: test - 1234
gluck - 1234
Database:

Ik heb 4 sql statements gemaakt
die heb ik in mijn php uitgevoerd

dit werkte toen gelijk, ik ga nu de login maken.
--

Ik heb de login gemaakt, een gehasht password geprint, die heb ik in mijn database gezet. 
ik heb nu een database aangemaakt met de login user gluck met als wachtwoord 1234 (het is gehashed)
dus nu kan ik proberen in te loggen.
---

ik ben nu ingelogd als Test met wachtwoord 1234
nu ben ik verwezen naar de index.php pagina.

nu kan je inloggen en uitloggen

bij het uitloggen als je correct bent uitgelogd krijg je een bericht 
you logged out
ik heb geen anchor toegevoegd in medewerkerlogout met een redirect naar de index page of de login (time)
ik heb ook niet in de website toegevoegd dat je ingelogd bent, was geen requirement
---
in de index heb je een reservering pagina, die niet compleet is. 
Ik moest mijn sql anders uploaden met beschikbaarheid, maar omdat ik geen statement bestand had, had ik het verkeerd
geupload in de database.
---
Na het reserveren kan je print this page doen, dit kan ook als je een medewerker bent, het is een simple knobpbpbpb.
---
je hebt een medewerker folder:
die bevat een edit, een delete een overzicht een login en logout.
dit spreekt voorzich, de edit edit, de delete delete, de overzicht heb ik gebind met de edit en de delete.
---
statements is voor het database, het was niet perfect gegaan omdat ik het niet goed kon schrijven via ergens 


hieronder zie je meer informatie over alles wat ik heb gedaan en de main struggle points, ik heb in mijn vakantie 
elke dag minstens 7 uur gecodeerd ( niet in mijn weekend ) dus ik had alles geprepared voor deze drempel examen.


Struggles:

In normaliseren:

combining two different columns together 
erd is okay but need to know above first
---
what do I do if there are no repeating groups?
---

during making a login
I had a capital and the wrong ../

make sure to reread these small things
I tried to login with gluck for 15 min but it was Gluck
passwords worked aswell.
--
--
How do I call make a warning that the rooms are fully booked?
3,4, 10 went terribly bad as I did not prepare for it.



--------

done:
1	Een hoofdpagina met daarop informatie Hotel Ter Duin
2	Een contactpagina met daarop het adres van het Hotel met telefoonnummers, het postadres en een e mailadres.
3	Een Reserveringspagina waarop klanten een kamer kunnen reserveren. ( niet goed gedaan )
4	Klanten moeten een reservering kunnen printen. ( niet goed gedaan, klanten kunnen prijs wijzigen) 
5	Medewerkers van Huis ter duin moeten kunnen inloggen.
6	Medewerkers van Huis ter duin moeten kunnen uitloggen.
7	Medewerkers van Huis ter duin moeten een lijst kunnen afdrukken. Op die lijst moet staan welke kamers verhuurd zijn.
8	Medewerkers van Huis ter duin moeten reserveringen kunnen wijzigen.
9	Medewerkers van Huis ter duin moeten reserveringen verwijderen.

WIFI died I stopped the recording and the code. 
10 did not work out, I know how to do it in the database, but not in php. 
If I had wifi, I would set a variable that would select the data (select from) and I would do a if and else 
if it is under 2 echo a warning
if its above 2 then echo its fine 
10	Medewerkers van Huis ter duin krijgen een alarm te zien op het moment dat er nog maar 2 kamers over zijn op een dag (working on it)

---
reservering
dan heb ik 5 kamers
een klant pakt 1 kamer 
delete? -> printen how?
boolean
room beschikbaar -> true? -> can get it
false -> can't get it


I want to make it that a room is available when: its not 0
so if boolean is 1
then you can order the room
if its 0 then you cannot order the room because its taken.
if statement
if database is 2 >


klanten maak edit button nog een keer
maar call het reserve
only thing they can change is the beschikbaarheid

