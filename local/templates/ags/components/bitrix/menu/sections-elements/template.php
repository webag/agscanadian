<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<nav class="wiki-menu">
	<ul class="wiki-menu-root">

		<?foreach($arResult as $item):?>

			<? if (!empty($item['CHILD'])) : ?>
				<li class="wiki-menu-has-sub">
					<i class="i-next"></i>
					<a href="<?=$item['LINK']?>" class="<? echo ($item['SELECTED']) ? 'active' : '';?>"><?=$item['TEXT']?></a>
					<ul>

						<? foreach ($item['CHILD'] as $itemL2) : ?>
							<? if (!empty($itemL2['CHILD'])) : ?>
								<li class="wiki-menu-has-sub">
									<i class="i-next hid"></i>
									<a href="<?=$itemL2['LINK']?>" class="<? echo ($itemL2['SELECTED']) ? 'active' : '';?>"><?=$itemL2['TEXT']?></a>
									<ul style="display: none">
										<? foreach ($itemL2['CHILD'] as $itemL3) : ?>
											<li><a href="<?=$itemL3['LINK']?>" class="<? echo ($itemL3['SELECTED']) ? 'active' : '';?>"><?=$itemL3['TEXT']?></a></li>
										<?endforeach?>
									</ul>
								</li>
							<? else: ?>
								<li><a href="<?=$itemL2['LINK']?>" class="<? echo ($itemL2['SELECTED']) ? 'active' : '';?>"><?=$itemL2['TEXT']?></a></li>
							<? endif;?>
						<?endforeach?>

					</ul>
				</li>
			<? else: ?>
				<li><a href="<?=$item['LINK']?>" class="<? echo ($item['SELECTED']) ? 'active' : '';?>"><?=$item['TEXT']?></a></li>
			<? endif;?>
		<?endforeach?>

	</ul>

	<pre><?//print_r($arResult)?></pre>
</nav>


<?endif?>