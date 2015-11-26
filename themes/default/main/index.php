<?php if (!defined('FLUX_ROOT')) exit; ?>
<div style="border:none; height:150px; width:100%; margin:0 auto;">
<div style="border:none; height:30px; width:100%; float:left">
<table width="100%" border="0">
  <tr>
    <td align="left" style="color:#fff; text-indent:20px; font-family:JellyBelly; font-size:30px;">Welcome to <?php echo $PlugandPlay['ServerName']; ?></td>
  </tr>
</table>
</div>
<div style="border:none; height:100px; width:100%; float:left">
<table width="100%" border="0">
  <tr>
    <td align="left" style="color:#fff; text-indent:12px; font-family:calibri; font-size:14px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tincidunt lacus id felis ornare porttitor. Praesent ultricies, dolor nec iaculis ullamcorper, est ante pharetra lacus, cursus lobortis elit tortor a eros. Ut in pharetra magna. Fusce nec varius risus, in malesuada mauris. Nunc eu sem at metus lobortis egestas ac ut neque. Duis turpis libero, feugiat sed sapien quis, viverra vulputate felis. Aliquam at lacus luctus, convallis lectus id, eleifend dolor. Aliquam cursus mauris magna, id porta nisl eleifend in. Nunc dui felis, mollis vitae nunc eu, elementum porta lorem.</td>
  </tr>
</table>
</div>
<div style="border:none; height:10px; width:100%; float:left">
<img src="<?php echo $this->themePath('img/border.png') ?>"  />
</div>
</div>

<div class="videoandwoe">
<div style="border:none; height:100%; width:290px; float:left">

<div style="height:150px; width:100%; border:none; margin-top:2px; float:left">
<p style="color:#fff; font-family:JellyBelly; font-size:20px; text-align:center">Promotional Video</p>
<iframe src="<?php echo $PlugandPlay['youtube']; echo "?autoplay=1"; ?>" width="100%" height="150" frameborder="0" allowfullscreen></iframe>
</div>

</div>
<div style="border:none; height:100%; width:350px; float:left; margin-left:20px;">
<div style="height:120px; width:100%; border:none; margin-top:52px; float:left">
<?php include('woesched.php'); ?>
</div>
</div>
</div>
<div class="newsandupdates">
<div style="border:none; height:10px; width:100%; float:left">
<img src="<?php echo $this->themePath('img/border.png') ?>"  />
</div>
<div style="border:none; height:25px; width:100%; float:left">
<table width="100%" border="0">
  <tr>
    <td align="center" style="color:#fff; font-family:JellyBelly; font-size:25px;">Server News and Updates</td>
  </tr>
</table>
</div>
<div class="inside-news" style="border:none; height:120px; width:100%; float:left">
<?php include('news.php'); ?>
</div>
</div>