Analys av laddningstid och användbarhet
===============================

##Valda webbplatser
Jag har valt följande tre webbplatser:

* [Karlstads kommun](http://www.karlstad.se)
* [The Guardian](http://www.theguardian.com)
* [Adlibris](http://www.adlibris.se)

Jag arbetar på Karlstads kommun och valde därför min arbetsplats hemsida som den första hemsidan att titta på. Jag vet också att den ganska nyligen är omgjord, vilket gör att det är intressant att se på hur mycket man tänkt på laddningstid och användbarhet.

Utöver det har jag valt sidor som jag själv använder då. Som andra val har jag därför valt The Guardians nyhetssite och som tredje val valde jag webbshoppen Adlibris.

##Verktyg

När jag gjorde analysen använda jag följande verktyg:

* [Google Pagespeed insights](https://developers.google.com/speed/pagespeed/insights/)
* Nätverksfliken i Mozillas devtools och shift-ctrl-r så att inga cashade versioner användes.
* [Google Sheets (länk till mitt dokument)](https://docs.google.com/spreadsheets/d/1uiylA_oBscUe0m87iQZcf-lrEi2fNjf0uaMeQPtuoK4/edit?usp=sharing)


##Karlstads kommun
[FIGURE src="image/karlstadse.png?w=500" class="right w50" caption="Karlstads kommuns förstasida"]
PageSpeed Insights ger Karlstads kommuns site Poor i betyg (63/100) på den mobila sidan och Needs work (77/100) på datorsidan.

Jag har valt följande länkar:

* [Förstasidan](http://www.karlstad.se)
* [Kommun och politik](https://karlstad.se/Kommun-och-politik/)
* [Bygga och bo](https://karlstad.se/Bygga-och-bo/)

Karlstads kommun kan förbättra sin laddningstid genom att optimera bilder och minifiera css och javascript till exempel. Förstasidan består av ganska många bilder så där finns nog en del att vinna.

##The Guardian
[FIGURE src="image/guardian.png?w=500" class="right w50" caption="The Guardians förstasida"]
PageSpeed Insights ger The Guardians site Needs word i betyg (72/100) på den mobila sidan och Good (85/100) på datorsidan.

Jag har valt följande länkar:

* [Förstasidan](http://www.theguardian.com)
* [Environment](https://www.theguardian.com/uk/environment)
* [Travel](https://www.theguardian.com/uk/travel)

The Guardian skulle kunna förbättra sin laddningstid genom att undvika omdirigeringar och minifiera javascript. En nyhetssida har såklart en del bilder så genom att optimera dem finns det säkert en del att vinna även här. The Guardian var dock enligt Pagespeed insights redan bra optimerad.

##Adlibris
[FIGURE src="image/adlibris.png?w=500" class="right w50" caption="Adlibris förstasida"]
PageSpeed Insights ger Adlibris site Poor i betyg (49/100) på den mobila sidan och Needs work (65/100) på datorsidan.

Jag har valt följande länkar:

* [Förstasidan](http://www.adlibris.se)
* [Barnböcker](https://www.adlibris.com/se/barnbocker)
* [Pocket](https://www.adlibris.com/se/sok?filter=format_sv%3Apocket)

Adlibris kan optimeras mycket enligt pagespeed insights. Att ta bort Javascript och CSS-kod som blockerar renderingen från innehåll ovan mitten och att optimera bilder tror jag skulle kunna snabba upp den här siten.

##Sammanfattning
På de sidorna jag tittat på är den vanligaste förbättringsåtgärden att optimera bilder. Minifiering av antingen CSS, Javascript eller HTML kommer också upp som åtgärder på alla (ingen hade optimerat alla tre). 

Om jag ska rangordna sidorna och gå efter PageSpeed Insights så blir resultatet att The Guardian har bäst site. På andraplats kommer Karlstads kommun och på tredjeplats kommer Adlibris. Om jag istället tittar på tiden det tar att ladda siterna så är karlstad kommun snabbast och The Guardian kommer på en andra plats. Adlibris kommer på en klar sistaplats i båda fallen.

Sammantaget tycker jag att The Guardian har den bästa siten. De har ansträngt sig och gjort många optimeringar som förmodligen får ner laddtiden.

Jag har ganska dåligt med tålamod när jag surfar. Tar det mer än 2-3 sekunder klickar jag på reload och hoppas på mer snabbhet om jag inte vet att en site alltid är långsam, men då går jag inte in där om jag inte måste. Dock handlar det ju för mig om visat material och även om mina undersökta sidor har betydligt längre laddningstider än så upplever jag dem inte som långsamma då material på sidan kommer upp med en gång.

Jag har skrivit analysen på egen hand.
