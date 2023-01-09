<?php
/**
 * Created by PhpStorm.
 * User: Grzegorz
 * Date: 4/27/2016
 * Time: 11:37 AM
 */

 
$characterID = $_GET['c'];
$serverID = $_GET['s'];
$lang = $_GET['lang'];
 
// $str = file_get_contents('http://aionpowerbook.com/search/json.php?characterID=' . $characterID . '&serverID=' . $serverID . '');
$str = file_get_contents('http://aion.plaync.com/xml/gameinfo/api/search/characterDetailInfoJson2nd?serverID=' . $serverID . '&charID=' . $characterID . '');

$string = strtr($str, array(
				'AionCharacterDetailData(' => '',
				', "' . $characterID . '");' => '',
				));

$json = json_decode($string, true);



?>



<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Character Details</title>
<body>
<div class="characters_profile">
<div class="characterInfo">
<div class="info">
<span class="profileImgWrap"><img src="http://static.plaync.co.kr/resource/aion/race/race_0_0.jpg" id="profilePhoto" class="profileImg" alt="" onerror="this.src='http://static.plaync.co.kr/resource/aion/race/race_0_0.jpg'"></span>

<a href="/powerbook/Character?s=53&c=1714551" class="character"><?php echo $json['info']['characterName'] ?></a>
					<span class="lv">Lv.<?php echo $json['info']['level'] ?></span>
					<div class="gameInfo">
						<span class="server">무닌</span>
						<span class="race"><?php echo $json['info']['race'] ?></span>
						<span class="class"> <?php echo $json['info']['className'] ?></span>
					</div>
					
						<a  class="legion ic_legion"><?php echo $json['info']['legionName'] ?></a>
					
				</div>




<div class="abyssInfo">
<div class="abyss">
<span class="title">마군 6급병</span>
<span class="num">순위 없음</span>
<span class="gp"><?php echo $json['abyss']['gloryPoint'] ?></span>
<span class="ap"><?php echo $json['abyss']['abyssPoint'] ?></span>
<span class="kill">Kills :  <?php echo $json['abyss']['totalAbyssKillCnt'] ?></span>
</div>
						
					
</div>
</div>
</div>





<div id="characterDetailInfo" class="characterDetailInfo" style="display: block;">
<div class="characterDetail">

<div id="itemList" style="">

<table summary="Rhand">
<thead><tr><th>Type</th><th>Icon</th><th>Level</th><th>Item Name</th></tr></thead>

<tbody>
<?php 
if ($json['item']['pos_1']['enchantCount'] > 0) {
	$enchant1 = '+' . $json['item']['pos_1']['enchantCount'];	
}elseif ($json['item']['pos_1']['authorizeCount'] > 0) {
	$enchant1 = '+' . $json['item']['pos_1']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_1']['level'] . '</td><td class="item col_' . $json['item']['pos_1']['quality'] . ' bold">' . $enchant1 . ' ' . $json['item']['pos_1']['itemName'] . '</td></tr>'; 

if ($json['item']['pos_2']['enchantCount'] > 0) {
	$enchant2 = '+' . $json['item']['pos_2']['enchantCount'];	
}elseif ($json['item']['pos_2']['authorizeCount'] > 0) {
	$enchant2 = '+' . $json['item']['pos_2']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_2']['level'] . '</td><td class="item col_' . $json['item']['pos_2']['quality'] . ' bold">' . $enchant2 . ' ' . $json['item']['pos_2']['itemName'] . '</td></tr>'; 
?>
</tbody>
</table>

<table summary="Lhand">
<thead><tr><th>Type</th><th>Icon</th><th>Level</th><th>Item Name</th></tr></thead>

<tbody>
<?php 
if ($json['item']['pos_3']['enchantCount'] > 0) {
	$enchant3 = '+' . $json['item']['pos_3']['enchantCount'];	
}elseif ($json['item']['pos_3']['authorizeCount'] > 0) {
	$enchant3 = '+' . $json['item']['pos_3']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_3']['level'] . '</td><td class="item col_' . $json['item']['pos_3']['quality'] . ' bold">' . $enchant3 . ' ' . $json['item']['pos_3']['itemName'] . '</td></tr>'; 

if ($json['item']['pos_4']['enchantCount'] > 0) {
	$enchant4 = '+' . $json['item']['pos_4']['enchantCount'];	
}elseif ($json['item']['pos_4']['authorizeCount'] > 0) {
	$enchant4 = '+' . $json['item']['pos_4']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_4']['level'] . '</td><td class="item col_' . $json['item']['pos_4']['quality'] . ' bold">' . $enchant4 . ' ' . $json['item']['pos_4']['itemName'] . '</td></tr>'; 
?>
</tbody>
</table>

<table summary="Armor">
<thead><tr><th>Type</th><th>Icon</th><th>Level</th><th>Item Name</th></tr></thead>

<tbody>
<?php 
if ($json['item']['pos_11']['enchantCount'] > 0) {
	$enchant11 = '+' . $json['item']['pos_11']['enchantCount'];	
}elseif ($json['item']['pos_11']['authorizeCount'] > 0) {
	$enchant11 = '+' . $json['item']['pos_11']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_11']['level'] . '</td><td class="item col_' . $json['item']['pos_11']['quality'] . ' bold">' . $enchant11 . ' ' . $json['item']['pos_11']['itemName'] . '</td></tr>'; 

if ($json['item']['pos_12']['enchantCount'] > 0) {
	$enchant12 = '+' . $json['item']['pos_12']['enchantCount'];	
}elseif ($json['item']['pos_12']['authorizeCount'] > 0) {
	$enchant12 = '+' . $json['item']['pos_12']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_12']['level'] . '</td><td class="item col_' . $json['item']['pos_12']['quality'] . ' bold">' . $enchant12 . ' ' . $json['item']['pos_12']['itemName'] . '</td></tr>'; 

if ($json['item']['pos_13']['enchantCount'] > 0) {
	$enchant13 = '+' . $json['item']['pos_13']['enchantCount'];	
}elseif ($json['item']['pos_13']['authorizeCount'] > 0) {
	$enchant13 = '+' . $json['item']['pos_13']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_13']['level'] . '</td><td class="item col_' . $json['item']['pos_13']['quality'] . ' bold">' . $enchant13 . ' ' . $json['item']['pos_13']['itemName'] . '</td></tr>'; 

if ($json['item']['pos_14']['enchantCount'] > 0) {
	$enchant14 = '+' . $json['item']['pos_14']['enchantCount'];	
}elseif ($json['item']['pos_14']['authorizeCount'] > 0) {
	$enchant14 = '+' . $json['item']['pos_14']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_14']['level'] . '</td><td class="item col_' . $json['item']['pos_14']['quality'] . ' bold">' . $enchant14 . ' ' . $json['item']['pos_14']['itemName'] . '</td></tr>'; 

if ($json['item']['pos_17']['enchantCount'] > 0) {
	$enchant17 = '+' . $json['item']['pos_17']['enchantCount'];	
}elseif ($json['item']['pos_17']['authorizeCount'] > 0) {
	$enchant17 = '+' . $json['item']['pos_17']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_17']['level'] . '</td><td class="item col_' . $json['item']['pos_17']['quality'] . ' bold">' . $enchant17 . ' ' . $json['item']['pos_17']['itemName'] . '</td></tr>'; 

?>
</tbody>
</table>

<table summary="Accessories">
<thead><tr><th>Type</th><th>Icon</th><th>Level</th><th>Item Name</th></tr></thead>

<tbody>
<?php
if ($json['item']['pos_7']['enchantCount'] > 0) {
	$enchant7 = '+' . $json['item']['pos_7']['enchantCount'];	
}elseif ($json['item']['pos_7']['authorizeCount'] > 0) {
	$enchant7 = '+' . $json['item']['pos_7']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_7']['level'] . '</td><td class="item col_' . $json['item']['pos_7']['quality'] . ' bold">' . $enchant7 . ' ' . $json['item']['pos_7']['itemName'] . '</td></tr>'; 

if ($json['item']['pos_8']['enchantCount'] > 0) {
	$enchant8 = '+' . $json['item']['pos_8']['enchantCount'];	
}elseif ($json['item']['pos_8']['authorizeCount'] > 0) {
	$enchant8 = '+' . $json['item']['pos_8']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_8']['level'] . '</td><td class="item col_' . $json['item']['pos_8']['quality'] . ' bold">' . $enchant8 . ' ' . $json['item']['pos_8']['itemName'] . '</td></tr>'; 

if ($json['item']['pos_9']['enchantCount'] > 0) {
	$enchant9 = '+' . $json['item']['pos_9']['enchantCount'];	
}elseif ($json['item']['pos_9']['authorizeCount'] > 0) {
	$enchant9 = '+' . $json['item']['pos_9']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_9']['level'] . '</td><td class="item col_' . $json['item']['pos_9']['quality'] . ' bold">' . $enchant9 . ' ' . $json['item']['pos_9']['itemName'] . '</td></tr>'; 

if ($json['item']['pos_10']['enchantCount'] > 0) {
	$enchant10 = '+' . $json['item']['pos_10']['enchantCount'];	
}elseif ($json['item']['pos_10']['authorizeCount'] > 0) {
	$enchant10 = '+' . $json['item']['pos_10']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_10']['level'] . '</td><td class="item col_' . $json['item']['pos_10']['quality'] . ' bold">' . $enchant10 . ' ' . $json['item']['pos_10']['itemName'] . '</td></tr>'; 


if ($json['item']['pos_16']['enchantCount'] > 0) {
	$enchant16 = '+' . $json['item']['pos_16']['enchantCount'];	
}elseif ($json['item']['pos_16']['authorizeCount'] > 0) {
	$enchant16 = '+' . $json['item']['pos_16']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_16']['level'] . '</td><td class="item col_' . $json['item']['pos_16']['quality'] . ' bold">' . $enchant16 . ' ' . $json['item']['pos_16']['itemName'] . '</td></tr>'; 



if ($json['item']['pos_15']['enchantCount'] > 0) {
	$enchant15 = '+' . $json['item']['pos_15']['enchantCount'];	
}elseif ($json['item']['pos_15']['authorizeCount'] > 0) {
	$enchant15 = '+' . $json['item']['pos_15']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_15']['level'] . '</td><td class="item col_' . $json['item']['pos_15']['quality'] . ' bold">' . $enchant15 . ' ' . $json['item']['pos_15']['itemName'] . '</td></tr>'; 

if ($json['item']['pos_18']['enchantCount'] > 0) {
	$enchant18 = '+' . $json['item']['pos_18']['enchantCount'];	
}elseif ($json['item']['pos_18']['authorizeCount'] > 0) {
	$enchant18 = '+' . $json['item']['pos_18']['authorizeCount'];	
}
echo '<tr><td class="itemWrap"></td><td class="level">' . $json['item']['pos_18']['level'] . '</td><td class="item col_' . $json['item']['pos_18']['quality'] . ' bold">' . $enchant18 . ' ' . $json['item']['pos_18']['itemName'] . '</td></tr>'; 

?>
</tbody>
</table>
					
<table summary="Feather">
<thead><tr><th>Type</th><th>Icon</th><th>Level</th><th>Item Name</th></tr></thead>

<tbody>
<tr><td class="itemWrap"></td><td class="level"></td><td class="item"></td></tr>
</tbody>
</table>

<table summary="Bracelet">
<thead><tr><th>Type</th><th>Icon</th><th>Level</th><th>Item Name</th></tr></thead>

<tbody>
<tr><td class="itemWrap"></td><td class="level"></td><td class="item"></td></tr>
</tbody>
</table>
					
<table summary="Wings">
<thead><tr><th>Type</th><th>Icon</th><th>Level</th><th>Item Name</th></tr></thead>

<tbody>
<tr><td class="itemWrap"></td><td class="level"></td><td class="item"></td></tr>
</tbody>
</table>
					
					

<dl class="magicalStoneInfo">
<dt>Manastone<span class="slotWrap">Slots: <span class="totalSlotCnt"><?php echo $json['info']['magicstone_totalcount'] ?></span> available, <span class="usingSlotCnt"><?php echo $json['info']['equipmagicstone_count'] ?></span> in use</span></dt>
<dd>Attack<span class="usingSlotCnt"></span><span class="valueSumWrap">+<span class="valueSum">0</span></span></dd>
</dl>
</div></div>


<div class="characterDynamicInfo">
				<div class="characterValues">
					<table summary="능력치">
						<colgroup>
							<col width="17%">
							<col width="5%">
							<col width="28%">
							<col width="17%">
							<col width="5%">
							<col width="28%">
						</colgroup>

<tbody>

<tr>
<th scope="row" colspan="2">HP</th>
<td colspan="4">
<dl class="gageWrap gageWrap-hp">
<dt>HP</dt><dd><span class="basicStat"><?php echo $json['stat']['hp'] ?></span> (+<span class="addedStat"><?php echo $json['stat']['hp'] - $json['stat']['baseHp'] ?></span>)
</dd></dl></td>
</tr>


<tr>
<th scope="row" colspan="2">MP</th>
<td colspan="4">
<dl class="gageWrap gageWrap-mp">
<dt>MP</dt>
<dd><span class="basicStat"><?php echo $json['stat']['mp'] ?></span> (+<span class="addedStat"><?php echo $json['stat']['mp'] - $json['stat']['baseMp'] ?></span>)
</dd></dl></td>
</tr>


<tr>
								<th>Attack</th>
								<th scope="row" rowspan="3" class="hands">M<br>a<br>i<br>n</th>
								<td>
									<span class="statWrap">
										<span class="basicStat"><?php echo $json['stat']['physicalRight'] ?></span>
										
										 (+<span class="addedStat"><?php echo $json['stat']['physicalRight'] - $json['stat']['basePhysicalRight'] ?></span>)
									</span>
								</td>

								<th>Attack</th>
								<th scope="row" rowspan="3" class="hands">O<br>f<br>f</th>
								<td>
									<span class="statWrap noneaddedStat">
										<span class="basicStat">0</span>
										
										
									</span>
								</td>
							</tr>
							<tr>
								<th>Crit Strike</th>
								<td>
									<span class="statWrap">
										<span class="basicStat">39</span> (+<span class="addedStat">37</span>)
									</span>
								</td>
								<th>Crit Strike</th>
								<td>
									<span class="statWrap noneaddedStat">
										<span class="basicStat">0</span>
									</span>
								</td>
							</tr>
							<tr>
								<th>Accuracy</th>
								<td>
									<span class="statWrap">
										<span class="basicStat">871</span> (+<span class="addedStat">89</span>)
									</span>
								</td>
								<th>Accuracy</th>
								<td>
									<span class="statWrap noneaddedStat">
										<span class="basicStat">0</span>
									</span>
								</td>
							</tr>
							<tr>
								<th scope="row" colspan="2">Magic Boost</th>
								<td>
									<span class="statWrap">
										<span class="basicStat"><?php echo $json['stat']['magicalBoost'] ?></span> (+<span class="addedStat"><?php echo $json['stat']['magicalBoost'] - $json['stat']['baseMagicalBoost'] ?></span>)
									</span>
								</td>
								<th scope="row" colspan="2">Magical Acc</th>
								<td>
									<span class="statWrap">
										<span class="basicStat">2540</span> (+<span class="addedStat">757</span>)
									</span>
								</td>
							</tr>
							<tr>
								<th scope="row" colspan="2">Magic Resist</th>
								<td>
									<span class="statWrap">
										<span class="basicStat">2271</span> (+<span class="addedStat">371</span>)
									</span>
								</td>
								<th scope="row" colspan="2">Crit Spell</th>
								<td>
									<span class="statWrap">
										<span class="basicStat">1049</span> (+<span class="addedStat">999</span>)
									</span>
								</td>
							</tr>
							<tr>
								<th scope="row" colspan="2">Mg Defence</th>
								<td>
									<span class="statWrap noneaddedStat">
										<span class="basicStat">132</span>
									</span>
								</td>
								<th scope="row" colspan="2">Mg Supp</th>
								<td>
									<span class="statWrap">
										<span class="basicStat">3126</span> (+<span class="addedStat">972</span>)
									</span>
								</td>
							</tr>
							<tr>
								<th scope="row" colspan="2">Atk Speed</th>
								<td>
									<span class="statWrap noneaddedStat">
										<span class="basicStat">2.1</span>
									</span>
								</td>
								<th scope="row" colspan="2">Speed</th>
								<td>
									<span class="statWrap">
										<span class="basicStat">9.4</span> (+<span class="addedStat">3.4</span>)
									</span>
								</td>
							</tr>
							<tr>
								<th scope="row" colspan="2">Cast Speed</th>
								<td>
									<span class="statWrap">
										<span class="basicStat">0.6</span>
									</span>
								</td>
								<th scope="row" colspan="2">Healing Boost</th>
								<td>
									<span class="statWrap noneaddedStat">
										<span class="basicStat">0</span>
									</span>
								</td>
							</tr>
							<tr>
								<th scope="row" colspan="2">Physical Def</th>
								<td>
									<span class="statWrap">
										<span class="basicStat">1900</span> (+<span class="addedStat">449</span>)
									</span>
								</td>
								<th scope="row" colspan="2">Block</th>
								<td>
									<span class="statWrap">
										<span class="basicStat">1189</span> (+<span class="addedStat">91</span>)
									</span>
								</td>
							</tr>
							<tr>
								<th scope="row" colspan="2">Parry</th>
								<td>
									<span class="statWrap noneaddedStat">
										<span class="basicStat">1098</span>
									</span>
								</td>

								<th scope="row" colspan="2">Evasion</th>
								<td>
									<span class="statWrap">
										<span class="basicStat">2535</span> (+<span class="addedStat">54</span>)
									</span>
								</td>
							</tr>
							<tr>
								<th scope="row" colspan="2">물치저항</th>
								<td>
									<span class="statWrap">
										<span class="basicStat">511</span> (+<span class="addedStat">165</span>)
									</span>
								</td>
								<th scope="row" colspan="2">마치저항</th>
								<td>
									<span class="statWrap">
										<span class="basicStat">115</span> (+<span class="addedStat">65</span>)
									</span>
								</td>
							</tr>
							<tr>
								<th scope="row" colspan="2">물치방어</th>
								<td>
									<span class="statWrap noneaddedStat">
										<span class="basicStat">0</span>
									</span>
								</td>
								<th scope="row" colspan="2">마치방어</th>
								<td>
									<span class="statWrap noneaddedStat">
										<span class="basicStat">0</span>
									</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>


<div class="equipStigma">
<h4></h4>
<div class="equipStigmaList">
<ul class="basicStigma">
<li><a href="http://aion.power.plaync.com/wiki/%ED%8F%AD%ED%92%8D+%EA%B0%95%ED%83%80" class="rare">+8 폭풍 강타</a></li>
<li><a href="http://aion.power.plaync.com/wiki/%ED%8F%AD%ED%92%8D+%EA%B0%95%ED%83%80" class="rare">+8 폭풍 강타</a></li>
<li><a href="http://aion.power.plaync.com/wiki/%ED%8F%AD%ED%92%8D+%EA%B0%95%ED%83%80" class="rare">+8 폭풍 강타</a></li>
</ul>
<ul class="highStigma">
<li><a href="http://aion.power.plaync.com/wiki/%ED%8F%AD%ED%92%8D+%EA%B0%95%ED%83%80" class="rare">+8 폭풍 강타</a></li>
<li><a href="http://aion.power.plaync.com/wiki/%ED%8F%AD%ED%92%8D+%EA%B0%95%ED%83%80" class="rare">+8 폭풍 강타</a></li>
<li><a href="http://aion.power.plaync.com/wiki/%ED%8F%AD%ED%92%8D+%EA%B0%95%ED%83%80" class="rare">+8 폭풍 강타</a></li>
</ul>
<ul class="visionStigma">
<li><a href="http://aion.power.plaync.com/wiki/%ED%8F%AD%ED%92%8D+%EA%B0%95%ED%83%80" class="rare">+8 폭풍 강타</a></li>
</ul>
</div></div>

				<div class="abyssInfo">
					<h4></h4>
					<dl class="currentInfo">
						<dt class="current">Current Abyss Status</dt>
						
						<dd class="current">
							<span class="rank"><span class="point"><?php echo $json['abyss']['currentName'] ?></span></span>
							<span class="rankingWrap"><span class="point">Position: <span class="ranking"><?php echo $json['abyss']['abyssRanking'] ?></span></span>
						</dd>
						<dd class="current">
							<span class="gpWrap"><span class="point"><?php echo $json['abyss']['gloryPoint'] ?></span></span>
							<span class="apWrap"><span class="point"><?php echo $json['abyss']['abyssPoint'] ?></span></span>
						</dd>
					</dl>
					
					<dl>
						<dt class="history">Accumulated Abyss Status</dt>
						<dd class="history">
							<span class="abyssHighstRank">Best: <span class="title"><?php echo $json['abyss']['bestName'] ?></span></span>
							<span class="totalKillWrap">Kills: <span class="totalKill"><?php echo $json['abyss']['totalAbyssKillCnt'] ?></span></span>
						</dd>

<dd class="history">




<ul class="dailyAndWeeklyInfo dailyAndWeeklyInfo_v2">

<li class="abyssTodayInfo"><em>Today:</em><span class="kill"><?php echo $json['abyss']['todayAbyssKillCnt'] ?> </span><span class="ap"><?php echo $json['abyss']['todayAbyssPoint'] ?> </span><span class="gp"><?php echo $json['abyss']['todayGloryPoint'] ?> </span></li>

<li class="abyssDailyInfo"><em>This Week:</em><span class="kill"><?php echo $json['abyss']['thisWeekAbyssKillCnt'] ?> </span><span class="ap"><?php echo $json['abyss']['thisWeekAbyssPoint'] ?> </span><span class="gp"><?php echo $json['abyss']['thisWeekGloryPoint'] ?> </span></li>

<li class="abyssWeeklyInfo"><em>Last Week:</em><span class="kill"><?php echo $json['abyss']['lastWeekAbyssKillCnt'] ?> </span><span class="ap"><?php echo $json['abyss']['lastWeekAbyssPoint'] ?> </span><span class="gp"><?php echo $json['abyss']['lastWeekGloryPoint'] ?> </span></li>

</ul></dd></dl>					
</div></div>

</div>
</body>
</html>
