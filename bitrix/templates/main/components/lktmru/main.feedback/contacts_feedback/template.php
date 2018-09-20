<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>

<div id="contacts_form" class="mfeedback" style="margin-top: 10px;">

	<?if(!empty($arResult["ERROR_MESSAGE"])){
		foreach($arResult["ERROR_MESSAGE"] as $v){
			ShowError($v);
		}?>
		<script>
			scrollToElement();
		</script>
	<?}?>
	<?if(strlen($arResult["OK_MESSAGE"]) > 0){?>
		<div class="mf-ok-text">
			<?=$arResult["OK_MESSAGE"]?>
			<?if(isset($arParams['YM_EVENTS']) && is_array($arParams['YM_EVENTS']) ) {
				$this->SetViewTarget("lktm_ym_events");
				foreach ($arParams['YM_EVENTS'] as $sEvent) {
					echo "yaCounter19581646.reachGoal('".$sEvent."');";
				}
				$this->EndViewTarget();
			}?>
		</div>
		<script>
			$(window).load(function(){
				scrollToElement();
			});
		</script>
	<?}?>

	<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
		<?=bitrix_sessid_post()?>
		<div class="mf-name">
			<div class="mf-text">
				Ваш город <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("CITY", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
			</div>
			<input type="text" name="user_city" value="<?=$arResult["AUTHOR_CITY"]?>">
		</div> <br />
		<div class="mf-name">
			<div class="mf-text">
				Название фирмы или юр.лица<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
			</div>
			<input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
		</div><br />
		<div class="mf-name">
			<div class="mf-text">
				Контактный телефон<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
			</div>
			<input type="text" name="user_phone" value="<?=$arResult["AUTHOR_PHONE"]?>">
		</div><br />
		<div class="mf-email">
			<div class="mf-text">
				<?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
			</div>
			<input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
		</div>
		<?if($arParams["USE_CAPTCHA"] == "Y"):?>
			<div class="mf-captcha">
				<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
				<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
				<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
				<input type="text" name="captcha_word" size="30" maxlength="50" value="">
			</div>
		<?endif;?>
		<div class="mf-name agreement">
			<div class="mf-text">
				<input type="hidden" name="AGREE" value="N" />
				<input id="check_agree" type="checkbox" name="AGREE" value="Y"<?if(!isset($_POST['AGREE']) || $_POST['AGREE']=='Y') {?> checked="checked"<?}?> /><label for="check_agree">Даю <a href="#agreement" class="fancy">согласие на обработку данных</a></label><br />
			</div>
		</div><br />

		<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
		<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
	</form>
</div>
<div id="agreement">
	<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH."/include/agreement.php");?>
</div>