<?php
/**
 * Copyright (C) 2007,2008  Arie Nugraha (dicarve@yahoo.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */

/* Membership module submenu items */

$menu[] = array('Header', __('Staff'));
$menu[] = array(__('View Staff List'), MODULES_WEB_ROOT_DIR.'staf/index.php', __('View Staffs with viewing rights'));
$menu[] = array(__('Add New Staff'), MODULES_WEB_ROOT_DIR.'staf/index.php?action=detail', __('Add New Staff Data'));
$menu[] = array(__('Staff Type'), MODULES_WEB_ROOT_DIR.'staf/member_type.php', __('View and modify staff type'));
/* $menu[] = array('Header', __('Tools'));
$menu[] = array(__('Staff Card Printing'), MODULES_WEB_ROOT_DIR.'staf/member_card_generator.php', __('Print Staff Card'));
$menu[] = array(__('Import Data'), MODULES_WEB_ROOT_DIR.'staf/import.php', __('Import Staff Data From CSV File'));
$menu[] = array(__('Export Data'), MODULES_WEB_ROOT_DIR.'staf/export.php', __('Export Staff Data To CSV File'));
*/
?>
