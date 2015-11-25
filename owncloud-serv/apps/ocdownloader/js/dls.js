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

$(document).ready(function(){
	function f1(d){
		var a=$('#dllist div.elts').size();
		$('#dllist').append('<div id="elt_'+parseInt(a+1)+'" class="elts new">'+$('#hiddentpl').html()+'</div>');
		$('#elt_'+parseInt(a+1)+' div select').chosen();
		f2(parseInt(a+1));
		if(d){
			$('#elt_'+parseInt(a+1)+' span img.eltdelete').bind('click',function(){
				$(this).parent().parent().remove();
			});
		}else{
			$('#elt_'+parseInt(a+1)+' span img.eltdelete').remove();
		}
	}
	function f2(a){
		$('#elt_'+a+' span.urlc').tipsy({gravity:'s',fade:true});
		$('#elt_'+a+' div select.chzen-select').change(function(){
			switch($('#elt_'+a+' div select.chzen-select option[value="'+$('#elt_'+a+' div select.chzen-select').val()+'"]').text()){
				case 'RapidShare':
					$('#elt_'+a+' span.urlc').attr('title',t('ocdownloader','http(s)://rapidshare.com/files/fileID/fileName.ext'));
				break;
				case 'HTTP':
					$('#elt_'+a+' span.urlc').attr('title',t('ocdownloader','http(s)://anywhere.com/path/to/fileName.ext'));
				break;
				case 'FTP':
					$('#elt_'+a+' span.urlc').attr('title',t('ocdownloader','ftp(s)://LOGIN:PASSWORD@FTPServer.com/path/to/fileName.ext'));
				break;
				case 'YouTube':
					$('#elt_'+a+' span.urlc').attr('title',t('ocdownloader','http://www.youtube.com/watch?v=LuDN2bCIyus'));
				break;
			}
		});
		
		$('#elt_'+a+' div span.overwrite').tipsy({gravity:'s',fade:true});
		$('#elt_'+a+' div span.overwrite input').bind('click',function(){
			if($(this).val() == '1'){
				$(this).val('0');
			}else{
				$(this).val('1');
			}
		});
	}
	function f3(i){
		$(window).bind('beforeunload', function(){
			return false;
		});
		
		var p=$(i).find('select.chzen-select').val();
		if(p==0){
			$(i).find('span.dling').html('<img src="'+OC.imagePath('ocdownloader','warning.png')+'" />&nbsp;'+t('ocdownloader','Select a provider !'));
		}else{
			var u=$(i).find('input.url').val();
			if(u.length==0){
				$(i).find('span.dling').html('<img src="'+OC.imagePath('ocdownloader','warning.png')+'" />&nbsp;'+t('ocdownloader','Provide a file URL !'));
			}else{
				$.ajax({
					type:'POST',
					url:OC.linkTo('ocdownloader','ajax/getProvider.php'),
					dataType:'json',
					data:{p:p},
					async:false,
					success:function(s){
						if(s.e){
							$(i).find('span.dling').html('<img src="'+OC.imagePath('ocdownloader','warning.png')+'" />&nbsp;'+t('ocdownloader', 'Provider does not exist !'));
						}else{
							$(i).removeClass('new');
							$(i).find('span.dling').html('<iframe></iframe>');
							$(i).find('span.dling iframe').attr('src',OC.linkTo('ocdownloader','providers/'+s.n+'.php?u='+u+'&p='+p+'&o='+$(i).find('span.overwrite input').val()));
							$(i).find('span.dling iframe').load(function(){
								n=i.replace('#elt_','');
								n=parseInt(parseInt(n)+1);
								if($('#elt_'+n).length != 0){
									f3('#elt_'+n);
								}else{
									$(window).unbind('beforeunload');
									if($('#dllist div.elts.new').size() == 0 && $(i).find('span.dling iframe').contents().find("#pb_text").text() == '100.0%'){
										f1(false);
									}
								}
								
								if($(i).find('span.dling iframe').contents().find("#pb_text").text() == '100.0%'){
									$(i).css('display','none');
									f4();
								}else{
									$(i).addClass('new');
								}
							});
						}
					}
				});
			}
		}
	}
	function f4(){
		status = new Array(t('ocdownloader','Unknown error'),t('ocdownloader','OK'));
		
		$.ajax({
			type:'POST',
			url:OC.linkTo('ocdownloader','ajax/updateHistory.php'),
			dataType:'json',
			async:true,
			success:function(s){
				$('#tbhisto').html('');
				$.each(s.h, function(k,v){
					$('#tbhisto').append('<tr><td class="col1">'+v.dl_file+'</td><td class="col2">'+v.dl_ts+'</td><td class="col3">'+status[v.dl_status]+'</td></tr>');
				});
			}
		});
	}
	
	$('#elt_'+$('#dllist div.elts').size()+' div select').chosen();
	f2($('#dllist div.elts').size());
	
	$("#geturl").button({text:true}).bind('click',function(){
		var first='';
		$('.elts.new').each(function(k,v){
			$(this).find('span.dling').html('<img src="'+OC.imagePath('ocdownloader','loader.gif')+'" />');
			if(first.length==0){
				first=$(this).attr('id');
			}
		});
		f3('#'+first);
	});
	$("#addelt").button({text:true}).bind('click',function(){
		f1(true);
	});
});