<?php

/**
 * i18nl10n Contao Module
 *
 * The i18nl10n module for Contao allows you to manage multilingual content
 * on the element level rather than with page trees.
 *
 *
 * PHP version 5
 * @copyright   Verstärker, Patric Eberle 2014
 * @copyright   Krasimir Berov 2010-2013
 * @author      Patric Eberle <line-in@derverstaerker.ch>
 * @author      Krasimir Berov
 * @package     i18nl10n
 * @license     LGPLv3 http://www.gnu.org/licenses/lgpl-3.0.html
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_page']['l10n_published'] = array
(
    'Hide default language',
    'The page is not present in default language only. Page localizations are shown if published.'
);

$GLOBALS['TL_LANG']['tl_page']['toggleL10n'] = array
(
    'Toggle L10N',
    'Toggle L10N translations and functions'
);

$GLOBALS['TL_LANG']['tl_page']['localize_all'] = array
(
    'L10N for аll',
    'Localize all untranslated pages to available languages'
);

$GLOBALS['TL_LANG']['tl_page']['define_language'] = array
(
    'L10N Languages',
    'Define languages on settings page'
);


/**
 * Messages
 */
$GLOBALS['TL_LANG']['tl_page']['msg_no_languages'] =
    'No alternative languages have been defined yet. Please do so on the '
    . '<a href="%s">settings</a> page.';

$GLOBALS['TL_LANG']['tl_page']['msg_localize_all'] =
    'For all untranslated pages in <span style="white-space:nowrap">[%s]</span> '
    . 'I will create localizations. Are you sure you want to create the following localizations for all unlocalized pages?';