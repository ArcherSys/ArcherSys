<?php
/**
 * ownCloud - EasyBackup
 *
 * @author Sebastian Kanzow
 * @copyright 2014 System k2 GmbH  info@systemk2.de
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
?>

<input type="radio" id="easybackup_radio_<?php p($_['id']); if($_['selected']) print_unescaped('" checked="true');?>" name="easybackup_frequency" />
<?php p($_['label']); ?>
&nbsp;&nbsp;
<select id="easybackup_select_<?php print_unescaped($_['id']); if(!$_['selected']) print_unescaped('" style="visibility: hidden'); ?>">
	<?php
	foreach ( $_ ['options'] as $key => $value ) {
		print_unescaped("<option value=\"$key\"");
		if ($_ ['selected'] == $key) {
			print_unescaped(' selected="true"');
		}
		print_unescaped('>');
		p($value);
		print_unescaped('</option>');
	}
	?>
</select>

