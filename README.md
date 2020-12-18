# Zobrazování výsledků voleb
## Projekt na PVA - Martin Růžek, I4

## Co by měla aplikace umět
 
Hlavním cílem aplikace je zobrazování výsledků předchozích voleb. K tomu budu používat [API Českého statistického úřadu](https://www.volby.cz).

Výsledky se budou cachovat a uschovávat v databázi aplikace, tou by měla být MySQL. 

Uživatel by měl být shopen zobrazit výsledky všech voleb od roku 1990 až do roku 2020. Vše by mělo být podrobné. 

Stránka by měla umožňovat:

* Zobrazovat výsledky v různých grafech
* Zobrazovat výsledky jednotlivých subjektů v čase
* Připravit live výsledků voleb nadcházejících

Pro vytvoření aplikace je nutné:

* Navrhnout databázi
* Vymyslet cachování
* Nadesignovat vzhled stránky


# UPDATES

## 18.12.2020

* Added simple router
* Added simple viewing template