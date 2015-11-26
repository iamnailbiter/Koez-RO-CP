<?php if (!defined('FLUX_ROOT')) exit; ?> 

<?php 
$news_table = Flux::config('FluxTables.NewsTable');
$c=0;
$ptheme_errMsg = NULL;

if($news_table){

$sql = "SELECT title, body, link, author, created, modified FROM {$server->loginDatabase}.$news_table ORDER BY id DESC ";
// $sql .= "LIMIT ".(int)Flux::config('LimitNews');
$sth = $server->connection->getStatement($sql);
$sth->execute();
$news = $sth->fetchAll();
}else{
	$ptheme_errMsg = 'FluxCMS Addons is not Installed. You can get it From rathena.org/download';
}
?>
				<table style="width:100%;">
					<tbody>
					<?php
					foreach($news as $n):
					?>
						<tr>
							<td align="left"><a target="_blank" href="<?php echo $n->link; ?>" style="color: #EEE;"><?php echo $n->title; ?></a>
							</td>
							
							<td align="right" rowspan="2">
								<p class="date" style="color:#CCC; font-size:10px;"><?php echo date("M-d-Y", strtotime($n->created)); ?></p>
							</td>
							
							</tr>
							<tr>
							<td align="left">
								<p class="author" style="color: #00CCCC; font-size:10px">Posted by: <b style="color:#CC0000;"><?php echo $n->author; ?></b></p>
							</td>
						</tr>
					<?php
					endforeach;
					?>				
					</tbody>
				</table>