<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package   Efg
 * @author    Thomas Kuhn <mail@th-kuhn.de>
 * @license   http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 * @copyright Thomas Kuhn 2007-2012
 */


$GLOBALS['TL_LANG']['FFL']['efgLookupSelect']['0'] = "Select-Menü (DB)";
$GLOBALS['TL_LANG']['FFL']['efgLookupSelect']['1'] = "ein ein- oder mehrzeiliges Drop-Down-Menü. Die Optionen werden aus einer definierbaren Datenbank-Tabelle gelesen.";
$GLOBALS['TL_LANG']['FFL']['efgLookupCheckbox']['0'] = "Checkbox-Menü (DB)";
$GLOBALS['TL_LANG']['FFL']['efgLookupCheckbox']['1'] = "eine Liste mehrerer Optionen, von denen beliebig viele ausgewählt werden können. Die Optionen werden aus einer definierbaren Datenbank-Tabelle gelesen.";
$GLOBALS['TL_LANG']['FFL']['efgLookupRadio']['0'] = "Radio-Button-Menü (DB)";
$GLOBALS['TL_LANG']['FFL']['efgLookupRadio']['1'] = "eine Liste mehrerer Optionen, von denen eine ausgewählt werden kann. Die Optionen werden aus einer definierbaren Datenbank-Tabelle gelesen.";
$GLOBALS['TL_LANG']['FFL']['efgImageSelect']['0'] = "Bild-Auswahl-Menü";
$GLOBALS['TL_LANG']['FFL']['efgImageSelect']['1'] = "Ein Bild-Auswahl-Menü erzeugt im Formular eine Bilder-Galerie mit Radio-Buttons oder Checkboxen zur Auswahl von Bildern.";
$GLOBALS['TL_LANG']['FFL']['efgFormPaginator']['0'] = "Absendefeld und Seitenumbruch";
$GLOBALS['TL_LANG']['FFL']['efgFormPaginator']['1'] = "Schaltflächen und Seitenumbruch für mehrseitiges Formular.";
$GLOBALS['TL_LANG']['tl_form_field']['efgLookupOptions']['0'] = "Optionen aus Datenbank";
$GLOBALS['TL_LANG']['tl_form_field']['lookup_field']['0'] = "Datenbank-Feld (label)";
$GLOBALS['TL_LANG']['tl_form_field']['lookup_field']['1'] = "Wählen Sie, aus welchem Datenbank-Feld die auswählbaren Optionen (sichtbarer Text bzw. label) gelesen werden sollen.";
$GLOBALS['TL_LANG']['tl_form_field']['lookup_val_field']['0'] = "Datenbank-Feld (value)";
$GLOBALS['TL_LANG']['tl_form_field']['lookup_val_field']['1'] = "Wählen Sie, aus welchem Datenbank-Feld die auswählbaren Optionen (Absendewert bzw. value) gelesen werden sollen.";
$GLOBALS['TL_LANG']['tl_form_field']['lookup_where']['0'] = "Bedingung";
$GLOBALS['TL_LANG']['tl_form_field']['lookup_where']['1'] = "Um bestimmte Datensätze auszuschließen, können Sie hier eine Bedingung eingeben (z.B. <em>published='1'</em> oder <em>type!='admin'</em>).";
$GLOBALS['TL_LANG']['tl_form_field']['lookup_sort']['0'] = "Sortieren nach";
$GLOBALS['TL_LANG']['tl_form_field']['lookup_sort']['1'] = "Hier können Sie eine kommagetrennte Liste der Felder eingeben, nach denen die Ergebnisse sortiert werden sollen (z.B. <em>title ASC</em> oder <em>city ASC, gender DESC</em>). Wenn Sie keine Sortierung angeben, werden die Datensätze anhand des label-Feldes sortiert, oder anhand des Datums (bei Terminen, Quelltabelle tl_calendar_events).";
$GLOBALS['TL_LANG']['tl_form_field']['efgMultiSRC']['0'] = "Quelldateien";
$GLOBALS['TL_LANG']['tl_form_field']['efgMultiSRC']['1'] = "Bitte wählen Sie alle Bilder und/oder Ordner, die in das Formularelement eingefügt werden sollen. Wenn Sie einen Ordner auswählen, werden alle darin enthaltenen Dateien automatisch eingefügt.";
$GLOBALS['TL_LANG']['tl_form_field']['efgImageUseHomeDir']['0'] = "Quelldateien aus Benutzerverzeichnis";
$GLOBALS['TL_LANG']['tl_form_field']['efgImageUseHomeDir']['1'] = "Ist ein Benutzer angemeldet, werden anstelle der oben gewählten Quelldateien alle Bilder in seinem Benutzerverzeichnis in das Formularelement eingefügt.";
$GLOBALS['TL_LANG']['tl_form_field']['efgImageMultiple']['0'] = "Mehrfachauswahl";
$GLOBALS['TL_LANG']['tl_form_field']['efgImageMultiple']['1'] = "Erlaubt die Auswahl mehrerer Bilder im Formular.";
$GLOBALS['TL_LANG']['tl_form_field']['efgImageSortBy']['0'] = "Sortieren nach";
$GLOBALS['TL_LANG']['tl_form_field']['efgImageSortBy']['1'] = "Bitte wählen Sie eine Sortierreihenfolge.";
$GLOBALS['TL_LANG']['tl_form_field']['efgImageSize']['0'] = "Bildbreite und Bildhöhe";
$GLOBALS['TL_LANG']['tl_form_field']['efgImageSize']['1'] = "Geben Sie entweder die Bildbreite, die Bildhöhe oder beide Werte ein, um die Bildgröße anzupassen. Wenn Sie keine Angaben machen, wird das Bild in seiner Originalgröße angezeigt.";
$GLOBALS['TL_LANG']['tl_form_field']['efgImagePerRow']['0'] = "Vorschaubilder pro Reihe";
$GLOBALS['TL_LANG']['tl_form_field']['efgImagePerRow']['1'] = "Bitte legen Sie fest, wie viele Vorschaubilder pro Reihe angezeigt werden sollen.";
$GLOBALS['TL_LANG']['tl_form_field']['efgImageMargin']['0'] = "Bildabstand";
$GLOBALS['TL_LANG']['tl_form_field']['efgImageMargin']['1'] = "Bitte geben Sie den oberen, rechten, unteren und linken Bildabstand sowie die Einheit ein. Der Bildabstand ist der Abstand zwischen einem Bild und seinen benachbarten Elementen.";
$GLOBALS['TL_LANG']['tl_form_field']['efgImageFullsize']['0'] = "Großansicht";
$GLOBALS['TL_LANG']['tl_form_field']['efgImageFullsize']['1'] = "Wenn Sie diese Option wählen, öffnet sich bei Anklicken des Bildes dessen Großansicht.";
$GLOBALS['TL_LANG']['tl_form_field']['name_asc'] = "Dateiname (aufsteigend)";
$GLOBALS['TL_LANG']['tl_form_field']['name_desc'] = "Dateiname (absteigend)";
$GLOBALS['TL_LANG']['tl_form_field']['date_asc'] = "Datum (aufsteigend)";
$GLOBALS['TL_LANG']['tl_form_field']['date_desc'] = "Datum (absteigend)";
$GLOBALS['TL_LANG']['tl_form_field']['meta'] = "Meta Datei (meta.txt)";
$GLOBALS['TL_LANG']['tl_form_field']['random'] = 'Zufällige Reihenfolge';
$GLOBALS['TL_LANG']['tl_form_field']['efgAddBackButton']['0'] = "Zurück-Schaltfläche erstellen";
$GLOBALS['TL_LANG']['tl_form_field']['efgAddBackButton']['1'] = "Eine Schaltfläche erstellen, die zur vorherigen Formular-Seite führt.";
$GLOBALS['TL_LANG']['tl_form_field']['efgBackStoreSessionValues']['0'] = "Formulareingaben bei 'Zurück' erhalten";
$GLOBALS['TL_LANG']['tl_form_field']['efgBackStoreSessionValues']['1'] = "Eingaben im Frontend-Formular auch bei 'Zurück' zwischenspeichern für die Vorbelegung bei erneutem Aufruf dieser Formular-Seite.";
$GLOBALS['TL_LANG']['tl_form_field']['efgBackSlabel']['0'] = "Bezeichnung der Zurück-Schaltfläche";
$GLOBALS['TL_LANG']['tl_form_field']['efgBackSlabel']['1'] = "Bitte geben Sie die Bezeichnung der Zurück-Schaltfläche ein.";
$GLOBALS['TL_LANG']['tl_form_field']['backbutton_legend'] = "Zurück-Schaltfläche";
