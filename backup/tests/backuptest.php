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
 * Backup Questournament module
 * backup task that provides all the settings and steps to perform one complete backup of the activity.
 *
 * Module developed at the University of Valladolid
 * Designed and directed by Juan Pablo de Castro with the effort of many other
 * students of telecommunciation engineering
 * this module is provides as-is without any guarantee. Use it as your own risk.
 *
 * @author Juan Pablo de Castro and many others.
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @copyright (c) 2014, INTUITEL Consortium
 * @package mod_quest */
define('CLI_SCRIPT', 1);
require_once(dirname(__FILE__) . '/../../../../config.php');
require_once($CFG->dirroot . '/backup/util/includes/backup_includes.php');

$coursemoduletobackup = 2; // Set this to one existing choice cmid in your dev site
$userdoingthebackup = 2; // Set this to the id of your admin accouun

$bc = new backup_controller(backup::TYPE_1ACTIVITY, $coursemoduletobackup, backup::FORMAT_MOODLE, backup::INTERACTIVE_NO,
        backup::MODE_GENERAL, $userdoingthebackup);
$bc->execute_plan();