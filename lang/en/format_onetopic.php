<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'format_onetopic', language 'en'
 *
 * @since 2.4
 * @package format_onetopic
 * @copyright 2012 David Herney Bernal - cirano
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['currentsection'] = 'This topic';
$string['sectionname'] = 'Topic';
$string['pluginname'] = 'Onetopic format';
$string['page-course-view-topics'] = 'Any course main page in onetopic format';
$string['page-course-view-topics-x'] = 'Any course page in onetopic format';
$string['hidefromothers'] = 'Hide topic';
$string['showfromothers'] = 'Show topic';
$string['hidetabsbar'] = 'Hide tabs bar';
$string['hidetabsbar_help'] = 'Hide tabs bar in the course page. The navigation is with the sections navbar.';

$string['movesectionto'] = 'Move current topic';
$string['movesectionto_help'] = 'Move current topic to left/right of selected topic';

$string['utilities'] = 'Tabs edition utilities';
$string['disableajax'] = 'Asynchronous edit actions';
$string['disable'] = 'Disable';
$string['enable'] = 'Enable';
$string['disableajax_help'] = 'Use this action in order to move resources between topic tabs. It only disables the asynchronous actions in current session, it is not permanently.';

$string['subtopictoright'] = 'Move to right as subtopic';

$string['duplicatesection'] = 'Duplicate current topic';
$string['duplicatesection_help'] = 'Used to duplicate the resources of current topic in a new topic';
$string['duplicate'] = 'Duplicate';
$string['duplicating'] = 'Duplicating';
$string['creating_section'] = 'Creating new topic';
$string['rebuild_course_cache'] = 'Rebuild course cache';
$string['duplicate_confirm'] = 'Are you sure you want to duplicate the current topic? The task can take a while depending on the amount of resources.';
$string['cantcreatesection'] = 'Error creating a new topic';
$string['progress_counter'] = 'Duplicating activities ({$a->current}/{$a->size})';
$string['progress_full'] = 'Duplicating topic';
$string['error_nosectioninfo'] = 'The indicated topic have not information';

$string['level'] = 'Level';
$string['index'] = 'Index';
$string['asprincipal'] = 'Normal, as a first level tab';
$string['asbrother'] = 'Same level that the previous tab';
$string['aschild'] = 'Child of previous tab';
$string['level_help'] = 'Change the tab level.';
$string['fontcolor'] = 'Font color';
$string['fontcolor_help'] = 'Used to change the tab font color. The value can be a color in a CSS valid representation, for example: <ul><li>Hexadecimal: #ffffff</li><li>RGB: rgb(0,255,0)</li><li>Name: green</li></ul>';
$string['bgcolor'] = 'Background color';
$string['bgcolor_help'] = 'Used to change the tab background color. The value can be a color in a CSS valid representation, for example: <ul><li>Hexadecimal: #ffffff</li><li>RGB: rgb(0,255,0)</li><li>Name: green</li></ul>';
$string['cssstyles'] = 'CSS properties';
$string['cssstyles_help'] = 'Used to change CSS properties of the tab. Use a standard value to the attribute <em>style</em> in a html tag. Example: <br /><strong>font-weight: bold; font-size: 16px;</strong>';
$string['firsttabtext'] = 'Text of the first tab in sublevel';
$string['firsttabtext_help'] = 'If this tab has sublevels, this will be the text of the first tab';

$string['firsttabfontcolor'] = 'Font color of the first tab in sublevel';
$string['firsttabfontcolor_help'] = 'Used to change the font color of the first tab in sublevel. The value can be a color in a CSS valid representation, for example: <ul><li>Hexadecimal: #ffffff</li><li>RGB: rgb(0,255,0)</li><li>Name: green</li></ul>';
$string['firsttabbgcolor'] = 'Background color of the first tab in sublevel';
$string['firsttabbgcolor_help'] = 'Used to change the background color of the first tab in sublevel. The value can be a color in a CSS valid representation, for example: <ul><li>Hexadecimal: #ffffff</li><li>RGB: rgb(0,255,0)</li><li>Name: green</li></ul>';
$string['firsttabcssstyles'] = 'CSS properties of the first tab in sublevel';
$string['firsttabcssstyles_help'] = 'Used to change CSS properties of the first tab in sublevel. Use a standard value to the attribute <em>style</em> in a html tag. Example: <br /><strong>font-weight: bold; font-size: 16px;</strong>';

$string['coursedisplay'] = 'Visualization mode of section 0';
$string['coursedisplay_help'] = 'This define as display the section 0: as a first tab or as section before the tabs bar.';
$string['coursedisplay_single'] = 'As tab';
$string['coursedisplay_multi'] = 'Before the tabs';

$string['templatetopic'] = 'Use topic summary as template';
$string['templatetopic_help'] = 'This option is used in order to use the summary topic as a template. If it is used as template, you can include the resources in the content, not only as tradicional moodle\'s lists. <br />In order to include a resource, write the resource name between double brackets, for example: [[News forum]]. This functionality is similar to activity name filter, however, it is different because the user can chose if included the resource icon and decide than activities are be included.';
$string['templetetopic_not'] = 'No, display as default';
$string['templetetopic_single'] = 'Yes, use the summary as template';
$string['templetetopic_list'] = 'Yes, use the summary as template, list the resources that are not referenced';
$string['templatetopic_icons'] = 'Show icon in resource links in summary';
$string['templatetopic_icons_help'] = 'This option defines if the icons are displayed in the summary when it is a template.';
$string['hidden_message'] = 'The section <em>{$a}</em> is not currently available.';
$string['privacy:metadata'] = 'The Onetopic format plugin does not store any personal data.';
$string['hiddensectionshelp'] = 'Hidden sections are shown in collapsed form with available message';

// Additional language strings.
$string['topbordercolor'] = 'Top border color';
$string['topbordercolor_help'] = 'Add a top border color to your tab. Available only for Learning type tabs. Choose from the following colors: <ul><li><span style="background-color: #FFDD00; color: #373a3c">Yellow</span></li><li><span style="background-color: #373a3c; color: #fff">Dark</span></li><li><span style="background-color: #00a1f1; color: #fff">Blue</span></li></ul>';
$string['firsttabtopbordercolor'] = 'First tab top border color';
$string['firsttabbgcolor'] = 'First tab type';
$string['fontcolorwelcometab'] = 'Font color for the welcome tab type';
$string['fontcolorwelcometab_help'] = 'Sets the font color for the welcome tab type to <span style="background-color: #ffdd00; color: #373a3c">#373A3C</span>';
$string['fontcolorimportantinfotab'] = 'Font color for the important info tab type';
$string['fontcolorimportantinfotab_help'] = 'Sets the font color for the important info tab type to <span style="background-color: #373a3c; color: #fff">#FFFFFF</span>';
$string['fontcolorcontenttab'] = 'Font color for the content tab type';
$string['fontcolorcontenttab_help'] = 'Sets the font color for the content tab type to <span style="background-color: #f3f3f3; color: #373a3c">#373A3C</span>';
$string['fontcolorchildtab'] = 'Font color for the child tab type';
$string['fontcolorchildtab_help'] = 'Sets the font color for the child tab type to <span style="background-color: #f3f3f3; color: #373a3c">#373A3C</span>';
$string['fontcolorspecialtab'] = 'Font color for the special tab type';
$string['fontcolorspecialtab_help'] = 'Sets the font color for the special tab type to <span style="background-color: #00a1f1; color: #ffffff">#FFFFFF</span>';

$string['tabtype_ffdd00'] = 'Welcome';
$string['tabtype_373a3c'] = 'Important info';
$string['tabtype_f3f3f3'] = 'Learning';
$string['tabtype_eeeeee'] = 'Child';
$string['tabtype_00a1f1'] = 'Special';

$string['topbordercolor_eeeeee'] = 'None';
$string['topbordercolor_ffdd00'] = 'Yellow';
$string['topbordercolor_373a3c'] = 'Dark';
$string['topbordercolor_00a1f1'] = 'Blue';