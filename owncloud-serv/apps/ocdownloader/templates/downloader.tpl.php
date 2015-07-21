<?php

/**
* ownCloud - ocDownloader plugin
*
* @author Xavier Beurois
* @copyright 2012 Xavier Beurois www.djazz-lab.net
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
* You should have received a copy of the GNU Lesser General Public 
* License along with this library.  If not, see <http://www.gnu.org/licenses/>.
* 
*/

OCP\Util::addStyle('ocdownloader', 'styles');
OCP\Util::addScript('3rdparty','chosen/chosen.jquery.min');
OCP\Util::addStyle('3rdparty','chosen');

OCP\Util::addScript('ocdownloader', 'dls');

?>

<div id="ocdownloader">
	<div class="personalblock topblock titleblock">
		<div class="titleleft">ocDownloader<div class="subtitle"><?php print($l->t('Download files from the Internet directly to the server !')) ?></div></div>
		<?php if(!isset($_['curl_error']) && !isset($_['todl'])){ ?><div class="dlbtn"><button id="addelt"><?php print($l->t('Add Element')); ?></button><button id="geturl"><?php print($l->t('Download')); ?></button></div><div class='clear'></div><?php } ?>
		<div class="clear"></div>
	</div>
	<?php if(isset($_['curl_error'])){ ?>
	<div class="personalblock red">
		<?php print($l->t('The application needs the <strong>PHP cURL</strong> extension to be loaded !')); ?>
	</div>	
	<?php }else{ ?>
		<div id="dllist" class="personalblock">
			<?php print($l->t('Downloads list')); ?>
			<div id="elt_1" class="elts new">
				<div class="eltleft">
					<select class="chzen-select">
						<option value="0"></option>
						<?php foreach($_['user_prov_set'] as $prov){ ?>
						<option value="pr_<?php print($prov['pr_id']); ?>"><?php print($prov['pr_name']); ?></option>
						<?php } ?>
					</select>
					<span title="<?php print($l->t('Overwrite')); ?>" class="overwrite"><input type="checkbox" value="0" /></span>
				</div>
				<span class="urlc" title="<?php print($l->t('Choose a provider first ...')); ?>"><input type="text" class="url" value="" placeholder="<?php print($l->t('URL of the file to download')); ?>" /></span><span class="dling"></span>
			</div>
		</div>
		<div id="hiddentpl">
			<div class="eltleft">
				<select class="chzen-select">
					<option value="0"></option>
					<?php foreach($_['user_prov_set'] as $prov){ ?>
					<option value="pr_<?php print($prov['pr_id']); ?>"><?php print($prov['pr_name']); ?></option>
					<?php } ?>
				</select>
				<span title="<?php print($l->t('Overwrite')); ?>" class="overwrite"><input type="checkbox" value="0" /></span>
			</div>
			<span class="urlc" title="<?php print($l->t('Choose a provider first ...')); ?>"><input type="text" class="url" value="" placeholder="<?php print($l->t('URL of the file to download')); ?>" /></span><span class="dling"><img src="<?php print(OC_Helper::imagePath('ocdownloader', 'delete.png')); ?>" class="eltdelete" /></span>
		</div>
	<?php } ?>
	<div id="divhisto" class="personalblock">
		<?php $status = Array($l->t('Unknown error'),$l->t('OK')); 
		print($l->t('Downloads history')); ?>
		<table border="0" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th class="col1"><?php print($l->t('File')); ?></th>
					<th class="col2"><?php print($l->t('Date / Time')); ?></th>
					<th class="col3"><?php print($l->t('Status')); ?></th>
				</tr>
			</thead>
			<tbody id="tbhisto">
			<?php if(!$_['user_history']){ ?>
			<tr>
				<td colspan="4"><?php print($l->t('No history for now')); ?></td>
			</tr>
			<?php }else{ 
				foreach($_['user_history'] as $history){ ?>
				<tr>
					<td class="col1"><?php print($history['dl_file']); ?></td>
					<td class="col2"><?php print($history['dl_ts']); ?></td>
					<td class="col3"><?php print($status[$history['dl_status']]); ?></td>
				</tr>
				<?php }
			} ?>
			</tbody>
		</table>
	</div>
</div>
