<?php

class Components {

	/* Lions Components 2.2 */
	public function __construct() {
		
	}

	/*
	Components HTML
	*/
	public function getUrl($url) {
		return "http://localhost/LF/" . ($url) . "/";
	}

	public function getA($a_href, $a_class, $a_content, $a_atributes = false) {
		return "<a href='" . ($a_href) . "' class='" . ($a_class) . "' " . (!$a_atributes ? '' : $a_atributes) . ">" . ($a_content) . "</a>";
	}

	public function getDoctype() {
		return "<!DOCTYPE html>";
	}

	public function getInput($input_type, $input_class, $input_atributes = false) {
		return "<input type='" . ($input_type) . "' class='" . ($input_class) . "' " . (!$input_atributes ? '' : $input_atributes) . ">";
	}

	public function getHtml($html_content = false, $html_atributes = false, $html_class = false) {
		return "<html" . (!$html_atributes ? '' : " " . $html_atributes) . (!$html_class ? '' : " class='" . ($html_class) . "'") . ">" . (!$html_content ? '' : $html_content) . "</html>";
	}

	public function getHead($head_content = false, $head_atributes = false, $head_class = false) {
		return "<head" . (!$head_atributes ? '' : " " . $head_atributes) . (!$head_class ? '' : " class='" . ($head_class) . "'") . ">" . (!$head_content ? '' : $head_content) . "</head>";
	}

	public function getBody($body_content = false, $body_class = false, $body_atributes = false) {
		return "<body" . (!$body_class ? '' : " class='" . ($body_class) . "'") . (!$body_atributes ? '' : " " .
			$body_atributes) . ">" . (!$body_content ? '' : $body_content) . "</body>";
	}

	public function getHeader($header_class = false, $header_content = false, $content_atributes = false) {
		return "<header" . (!$header_class ? '' : " class='" . ($header_class) . "'") . (!$content_atributes ? '' : ' ' . $content_atributes) . ">" . (!$header_content ? '' : $header_content) . "</header>";
	}

	public function getMain($main_class, $main_content = false, $main_atributes = false) {
		return "<main class='" . ($main_class) . "' " . (!$main_atributes ? '' : $main_atributes) . ">" . (!$main_content ? '' : $main_content) . "</main>";
	}

	public function getIframe($iframe_src, $iframe_class = false, $iframe_atributes = false) {
		return $this->getDiv("embed-responsive embed-responsive-16by9", 
			"<iframe class='embed-responsive-item " . (!$iframe_class ? '' : $iframe_class) . "' src='" . ($iframe_src) . "' allowfullscreen " . (!$iframe_atributes ? '' : $iframe_atributes) . "></iframe>"
		);
	}

	public function getH1($h_title, $h_class = false, $h_atributes = false) {
		return "<h1 class='" . (!$h_class ? '' : $h_class) . "' " . (!$h_atributes ? '' : $h_atributes) . ">" . ($h_title) . "</h1>";
	}

	public function getH2($h_title, $h_class = false, $h_atributes = false) {
		return "<h2 class='" . (!$h_class ? '' : $h_class) . "' " . (!$h_atributes ? '' : $h_atributes) . ">" . ($h_title) . "</h2>";
	}

	public function getH3($h_title, $h_class = false, $h_atributes = false) {
		return "<h3 class='" . (!$h_class ? '' : $h_class) . "' " . (!$h_atributes ? '' : $h_atributes) . ">" . ($h_title) . "</h3>";
	}

	public function getH4($h_title, $h_class = false, $h_atributes = false) {
		return "<h4 class='" . (!$h_class ? '' : $h_class) . "' " . (!$h_atributes ? '' : $h_atributes) . ">" . ($h_title) . "</h4>";
	}

	public function getH5($h_title, $h_class = false, $h_atributes = false) {
		return "<h5 class='" . (!$h_class ? '' : $h_class) . "' " . (!$h_atributes ? '' : $h_atributes) . ">" . ($h_title) . "</h5>";
	}

	public function getH6($h_title, $h_class = false, $h_atributes = false) {
		return "<h6 class='" . (!$h_class ? '' : $h_class) . "' " . (!$h_atributes ? '' : $h_atributes) . ">" . ($h_title) . "</h6>";
	}

	public function getBr() {
		return "<br>";
	}

	public function getTitle($title_content) {
		return "<title>" . ($title_content) . "</title>";
	}

	public function getMeta($meta_name = false, $meta_content = false, $meta_atributes = false) {
		return "<meta" . (!$meta_name ? '' : " name='" . ($meta_name) . "'") . (!$meta_content ? '' : " content='" . ($meta_content) . "' ") . (!$meta_atributes ? '' : " " . $meta_atributes) . ">";
	}

	public function getLink($link_rel, $link_type, $link_href, $link_atributes = false) {
		return "<link rel='" . ($link_rel) . "' type='" . ($link_type) . "' href='" . ($link_href) . "' " . (!$link_atributes ? '' : $link_atributes) . ">";
	}

	public function getScript($script_src = false, $script_atributes = false, $script_content = false) {
		return "<script type='text/javascript' " . (!$script_src ? '' : "src='" . ($script_src) . "'") . (!$script_atributes ? '' : ' ' . $script_atributes) . ">" . (!$script_content ? '' : $script_content) . "</script>";
	}

	public function getStrong($strong_content) {
		return "<strong>" . ($strong_content) . "</strong>";
	}

	public function getFooter($footer_class, $footer_content, $footer_atributes = false) {
		return "<footer" . (!$footer_class ? '' : " class='" . ($footer_class) . "'") . (!$footer_atributes ? '' : " " . $footer_atributes) .">" . ($footer_content) . "</footer>";
	}

	public function getTd($td_content, $td_atributes = false) {
		return "<td " . (!$td_atributes ? '' : $td_atributes) . ">" . ($td_content) . "</td>";
	}

	public function getTr($tr_content, $tr_atributes = false) {
		return "<tr" . (!$tr_atributes ? '' : " " . $tr_atributes) . ">" . ($tr_content) . "</tr>";
	}

	public function getHr($hr_class = false) {
		return "<hr" . (!$hr_class ? '' : " class='" . ($hr_class) . "'") . ">";
	}

	public function getNav($nav_class, $nav_content, $nav_atributes = false) {
		return "<nav class='" . ($nav_class) . "' " . (!$nav_atributes ? '' : $nav_atributes) . ">" . ($nav_content) . "</nav>";
	}

	public function getLabel($label_content, $label_class = false, $label_atributes = false) {
		return "<label " . (!$label_class ? '' : "class='" . ($label_class) . "'") . " " . (!$label_atributes ? '' : $label_atributes) . ">" . ($label_content) . "</label>";
	}

	public function getP($p_content, $p_class = false, $p_atributes = false) {
		return "<p class='" . (!$p_class ? '' : $p_class) . "' " . (!$p_atributes ? '' : $p_atributes) . ">" . ($p_content) . "</p>";
	}

	public function getForm($form_method, $form_content, $form_class = false, $form_atributes = false) {
		return "<form " . (!$form_method ? '' : "method='" . ($form_method) . "'") . " class='" . ($form_class) . "' " . (!$form_atributes ? '' : $form_atributes) . ">" . ($form_content) . "</form>";
	}

	public function getIcon($icon_class) {
		return "<i class='" . ($icon_class) . "'></i>";
	}

	public function getDiv($div_class, $div_content = false, $div_atributes = false) {
		return "<div class='" . ($div_class) . "' " . (!$div_atributes ? '' : $div_atributes) . ">" . (!$div_content ? '' : $div_content) . "</div>";
	}

	public function getSpan($span_class, $span_content = false, $span_atributes = false) {
		return "<span class='" . (!$span_class ? '' : $span_class) . "' " . (!$span_atributes ? '' : $span_atributes) . ">" . (!$span_content ? '' : $span_content) . "</span>";
	}

	public function getImg($img_url, $img_class, $img_atributes = false) {		
		return "<img src='" . ($img_url) . "' class='" . ($img_class) . "' loading='lazy' " . (!$img_atributes ? '' : $img_atributes) . ">";
	}

	public function getLi($li_class, $li_content, $li_atributes = false) {
		return "<li class='" . ($li_class) . "' " . (!$li_atributes ? '' : $li_atributes) . ">" . ($li_content) . "</li>";
	}

	public function getUl($ul_class, $ul_content, $ul_atributes = false) {
		return "<ul class='" . ($ul_class) . "' " . (!$ul_atributes ? '' : $ul_atributes) . ">" . ($ul_content) . "</ul>";
	}

	public function getSmall($small_content, $small_class, $small_atributes = false) {
		return "<small class='" . ($small_class) . "' " . (!$small_atributes ? '' : $small_atributes) . ">" . ($small_content) . "</small>";
	}

	public function getTh($th_content, $th_class = false, $th_tributes = false) {
		return "<th" . (!$th_class ? '' : " class='" . ($th_class) . "' ") . (!$th_tributes ? '' : " " . $th_tributes) . ">" . ($th_content) . "</th>";
	}

	public function getThead($thead_content, $thead_class = false, $thead_atributes = false) {
		return "<thead class='" . (!$thead_class ? '' : $thead_class) . "' " . (!$thead_atributes ? '' : $thead_atributes) . ">" . ($thead_content) . "</thead>";
	}

	public function getTbody($tbody_content, $tbody_class = false, $tbody_atributes = false) {
		return "<tbody class='" . (!$tbody_class ? '' : $tbody_class) . "' " . (!$tbody_atributes ? '' : $tbody_atributes) . ">" . ($tbody_content) . "</tbody>";
	}

	public function getTfooty($tfooty_content, $tfooty_class = false, $tfooty_atributes = false) {
		return "<tfooty class='" . (!$tfooty_class ? '' : $tfooty_class) . "' " . (!$tfooty_atributes ? '' : $tfooty_atributes) . ">" . ($tfooty_content) . "</tfooty>";
	}

	public function getTable($table_class, $table_content, $table_atributes = false) {
		return "<table class='" . ($table_class) . "' " . (!$table_atributes ? '' : $table_atributes) . ">" . ($table_content) . "</table>";
	}

	public function getOption($option_value, $option_content, $option_atributes = false) {
		return "<option value='" . ($option_value) . "' " . (!$option_atributes ? '' : $option_atributes) . ">" . ($option_content) . "</option>";
	}

	/*
	Components Bootstrap
	*/
	public function getModalDark($modal_title, $modal_id, $modal_class, $modal_content, $modal_buttons = false, $modal_form = false, $modal_static = false) {
		return $this->getDiv("modal fade", 
			$this->getDiv("modal-dialog " . ($modal_class), 
				$this->getDiv("modal-content", 
					$this->getDiv("modal-header bg-dark", 
						$this->getH5($modal_title, "modal-title text-white", "id='exampleModalLabel'") .
						$this->getBtnButton("close", $this->getIcon("fad fa-times text-white"), 'data-dismiss="modal" aria-label="Close"')
					) .
					(!$modal_form ? $this->getDiv("modal-body", $modal_content) . $this->getDiv("modal-footer", $modal_buttons) : $modal_content)
				)
			),
			"id='" . ($modal_id) . "' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true' " . (!$modal_static ? '' : "data-backdrop='static' data-keyboard='false'")
		);
	}

	public function getModalInfo($modal_title, $modal_id, $modal_class, $modal_content, $modal_buttons = false, $modal_form = false, $modal_static = false) {
		return $this->getDiv("modal fade", 
			$this->getDiv("modal-dialog " . ($modal_class), 
				$this->getDiv("modal-content", 
					$this->getDiv("modal-header bg-info", 
						$this->getH5($modal_title, "modal-title text-white", "id='exampleModalLabel'") .
						$this->getBtnButton("close", $this->getIcon("fad fa-times text-white"), 'data-dismiss="modal" aria-label="Close"')
					) .
					(!$modal_form ? $this->getDiv("modal-body", $modal_content) . $this->getDiv("modal-footer", $modal_buttons) : $modal_content)
				)
			),
			"id='" . ($modal_id) . "' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true' " . (!$modal_static ? '' : "data-backdrop='static' data-keyboard='false'")
		);
	}

	public function getModalSuccess($modal_title, $modal_id, $modal_class, $modal_content, $modal_buttons = false, $modal_form = false, $modal_static = false) {
		return $this->getDiv("modal fade", 
			$this->getDiv("modal-dialog " . ($modal_class), 
				$this->getDiv("modal-content", 
					$this->getDiv("modal-header bg-success", 
						$this->getH5($modal_title, "modal-title text-white", "id='exampleModalLabel'") .
						$this->getBtnButton("close", $this->getIcon("fad fa-times text-white"), 'data-dismiss="modal" aria-label="Close"')
					) .
					(!$modal_form ? $this->getDiv("modal-body", $modal_content) . $this->getDiv("modal-footer", $modal_buttons) : $modal_content)
				)
			),
			"id='" . ($modal_id) . "' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true' " . (!$modal_static ? '' : "data-backdrop='static' data-keyboard='false'")
		);
	}

	public function getModalSecondary($modal_title, $modal_id, $modal_class, $modal_content, $modal_buttons = false, $modal_form = false, $modal_static = false) {
		return $this->getDiv("modal fade", 
			$this->getDiv("modal-dialog " . ($modal_class), 
				$this->getDiv("modal-content", 
					$this->getDiv("modal-header bg-secondary", 
						$this->getH5($modal_title, "modal-title text-white", "id='exampleModalLabel'") .
						$this->getBtnButton("close", $this->getIcon("fad fa-times text-white"), 'data-dismiss="modal" aria-label="Close"')
					) .
					(!$modal_form ? $this->getDiv("modal-body", $modal_content) . $this->getDiv("modal-footer", $modal_buttons) : $modal_content)
				)
			),
			"id='" . ($modal_id) . "' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true' " . (!$modal_static ? '' : "data-backdrop='static' data-keyboard='false'")
		);
	}

	public function getModalPrimary($modal_title, $modal_id, $modal_class, $modal_content, $modal_buttons = false, $modal_form = false, $modal_static = false) {
		return $this->getDiv("modal fade", 
			$this->getDiv("modal-dialog " . ($modal_class), 
				$this->getDiv("modal-content", 
					$this->getDiv("modal-header bg-primary", 
						$this->getH5($modal_title, "modal-title text-white", "id='exampleModalLabel'") .
						$this->getBtnButton("close", $this->getIcon("fad fa-times text-white"), 'data-dismiss="modal" aria-label="Close"')
					) .
					(!$modal_form ? $this->getDiv("modal-body", $modal_content) . $this->getDiv("modal-footer", $modal_buttons) : $modal_content)
				)
			),
			"id='" . ($modal_id) . "' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true' " . (!$modal_static ? '' : "data-backdrop='static' data-keyboard='false'")
		);
	}

	public function getModalWarning($modal_title, $modal_id, $modal_class, $modal_content, $modal_buttons = false, $modal_form = false, $modal_static = false) {
		return $this->getDiv("modal fade", 
			$this->getDiv("modal-dialog " . ($modal_class), 
				$this->getDiv("modal-content", 
					$this->getDiv("modal-header bg-warning", 
						$this->getH5($modal_title, "modal-title", "id='exampleModalLabel'") .
						$this->getBtnButton("close", $this->getIcon("fad fa-times text-white"), 'data-dismiss="modal" aria-label="Close"')
					) .
					(!$modal_form ? $this->getDiv("modal-body", $modal_content) . $this->getDiv("modal-footer", $modal_buttons) : $modal_content)
				)
			),
			"id='" . ($modal_id) . "' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true' " . (!$modal_static ? '' : "data-backdrop='static' data-keyboard='false'")
		);
	}

	public function getModalDanger($modal_title, $modal_id, $modal_class, $modal_content, $modal_buttons = false, $modal_form = false, $modal_static = false) {
		return $this->getDiv("modal fade", 
			$this->getDiv("modal-dialog " . ($modal_class), 
				$this->getDiv("modal-content", 
					$this->getDiv("modal-header bg-danger", 
						$this->getH5($modal_title, "modal-title text-white", "id='exampleModalLabel'") .
						$this->getBtnButton("close", $this->getIcon("fad fa-times text-white"), 'data-dismiss="modal" aria-label="Close"')
					) .
					(!$modal_form ? $this->getDiv("modal-body", $modal_content) . $this->getDiv("modal-footer", $modal_buttons) : $modal_content)
				)
			),
			"id='" . ($modal_id) . "' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true' " . (!$modal_static ? '' : "data-backdrop='static' data-keyboard='false'")
		);
	}

	public function getModal($modal_title, $modal_id, $modal_class, $modal_content, $modal_buttons = false, $modal_form = false, $modal_static = false) {
		return $this->getDiv("modal fade", 
			$this->getDiv("modal-dialog " . ($modal_class), 
				$this->getDiv("modal-content", 
					$this->getDiv("modal-header bg-light", 
						$this->getH5($modal_title, "modal-title", "id='exampleModalLabel'") .
						$this->getBtnButton("close", $this->getIcon("fad fa-times text-white"), 'data-dismiss="modal" aria-label="Close"')
					) .
					(!$modal_form ? $this->getDiv("modal-body", $modal_content) . $this->getDiv("modal-footer", $modal_buttons) : $modal_content)
				)
			),
			"id='" . ($modal_id) . "' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true' " . (!$modal_static ? '' : "data-backdrop='static' data-keyboard='false'")
		);
	}

	public function getCalendar($calendar_id, $calendar_class = false) {
		return $this->getDiv(!$calendar_class ? '' : $calendar_class, "", "id='" . ($calendar_id) . "'");
	}

	public function getChart($chart_class, $chart_height = false) {
		return "<canvas class='" . ($chart_class) . "' " . (!$chart_height ? '' : "height='" . ($chart_height) . "'") . "></canvas>";
	}

	public function getBtnSubmit($btn_class, $btn_value, $btn_content) {
		return "<button type='submit' name='btn_controller' class='btn btn-" . ($btn_class) . "' value='" . ($btn_value) . "'>" . ($btn_content) . "</button>";
	}

	public function getBtnButton($btn_class, $btn_content, $btn_atribute = false) {
		return "<button type='button' class='" . ($btn_class) . "' " . (!$btn_atribute ? '' : $btn_atribute) . ">" . ($btn_content) . "</button>";
	}

	public function getBtnReset($btn_class, $btn_content) {
		return "<button type='reset' class='btn btn-" . ($btn_class) . "'>" . ($btn_content) . "</button>";
	}

	public function getBtnModalDismiss($btn_class, $btn_content) {
		return "<button type='button' class='btn btn-" . ($btn_class) . "' data-dismiss='modal'>" . ($btn_content) . "</button>";
	}

	public function getBtnModalView($btn_class, $btn_modal_view, $btn_content) {
		return "<button type='button' class='btn btn-" . ($btn_class) . "' data-toggle='modal' data-target='#" . ($btn_modal_view) . "'>" . ($btn_content) . "</button>";
	}

	public function getInputTel($input_name, $input_id, $input_class, $input_atributes = false) {
		return "<input type='tel' name='" . ($input_name) . "' id='" . ($input_id) . "' class='form-control " . (!$input_class ? '' : $input_class) . "' " . (!$input_atributes ? '' : $input_atributes) . ">";
	}

	public function getInputRange($input_name, $input_id, $input_class, $input_atributes = false) {
		return "<input type='range' name='" . ($input_name) . "' id='" . ($input_id) . "' class='custom-range " . (!$input_class ? '' : $input_class) . "' " . (!$input_atributes ? '' : $input_atributes) . ">";
	}

	public function getInputColor($input_name, $input_id, $input_class, $input_atributes = false) {
		return "<input type='color' name='" . ($input_name) . "' id='" . ($input_id) . "' class='form-control " . (!$input_class ? '' : $input_class) . "' " . (!$input_atributes ? '' : $input_atributes) . ">";
	}

	public function getInputText($input_name, $input_id, $input_class, $input_atributes = false) {
		return "<input type='text' name='" . ($input_name) . "' id='" . ($input_id) . "' class='form-control " . (!$input_class ? '' : $input_class) . "' " . (!$input_atributes ? '' : $input_atributes) . ">";
	}

	public function getInputDate($input_name, $input_id, $input_class, $input_atributes = false) {
		return "<input type='date' name='" . ($input_name) . "' id='" . ($input_id) . "' class='form-control " . (!$input_class ? '' : $input_class) . "' " . (!$input_atributes ? '' : $input_atributes) . ">";
	}

	public function getInputNumber($input_name, $input_id, $input_class, $input_atributes = false) {
		return "<input type='number' name='" . ($input_name) . "' id='" . ($input_id) . "' class='form-control " . (!$input_class ? '' : $input_class) . "' " . (!$input_atributes ? '' : $input_atributes) . ">";
	}

	public function getInputEmail($input_name, $input_id, $input_class, $input_atributes = false) {
		return "<input type='email' name='" . ($input_name) . "' id='" . ($input_id) . "' class='form-control " . (!$input_class ? '' : $input_class) . "' " . (!$input_atributes ? '' : $input_atributes) . ">";
	}

	public function getInputPassword($input_name, $input_id, $input_class, $input_atributes = false) {
		return "<input type='password' name='" . ($input_name) . "' id='" . ($input_id) . "' class='form-control " . (!$input_class ? '' : $input_class) . "' " . (!$input_atributes ? '' : $input_atributes) . ">";
	}

	public function getInputRadio($input_name, $input_id, $input_class, $input_atributes = false) {
		return "<input type='radio' name='" . ($input_name) . "' id='" . ($input_id) . "' class='" . (!$input_class ? '' : $input_class) . "' " . (!$input_atributes ? '' : $input_atributes) . ">";
	}

	public function getInputCheck($input_name, $input_id, $input_class, $input_atributes = false) {
		return "<input type='checkbox' name='" . ($input_name) . "' id='" . ($input_id) . "' class='" . (!$input_class ? '' : $input_class) . "' " . (!$input_atributes ? '' : $input_atributes) . ">";
	}

	public function getTextArea($text_name, $text_id, $text_class, $text_atributes = false) {
		return "<textarea name='" . ($text_name) . "' class='" . ($text_class) . "' id='" . ($text_id) . "' " . (!$text_atributes ? '' : $text_atributes) . "></textarea>";
	}

	public function getInputFile($input_name, $input_id, $input_class, $input_atributes = false) {
		return $this->getDiv("custom-file", 
			"<input type='file' name='" . ($input_name) . "' class='" . ("custom-file-input " . (!$input_class ? '' : $input_class)) . "' id='" . ($input_id) . "' onchange='inputFileName(this.value, " . '"label-' . ($input_id) . '"' . ")' " . (!$input_atributes ? '' : $input_atributes) . ">".
			$this->getLabel("Seleccione", "custom-file-label", "for='" . ($input_id) . "' id='label-" . ($input_id) . "'") .
			$this->getFeedback("file")
		);
	}

	public function getProgress($progress_class, $progress_style, $progress_max) {
		return $this->getDiv(("progress-bar " . $progress_class), 
			($progress_style . "%"), 
			"role='progressbar' style='width: " . ($progress_style . "%;") . "' aria-valuenow='" . ($progress_style . "%") . "' aria-valuemin='0' aria-valuemax='" . ($progress_max) . "'"
		);
	}

	public function getAlert($alert_type, $alert_class, $alert_content) {
		return $this->getDiv("alert alert-" . ($alert_type) . " alert-dismissible fade show " . (!$alert_class ? "" : $alert_class), 
			($alert_content) .
			$this->getBtnButton("close", 
				$this->getSpan(false, "&times;", "aria-hidden='true'"), " data-dismiss='alert' aria-label='Close'"
			), 
			"role='alert'"
		);
	}

	public function getMediaObject($media_url, $media_class, $media_title, $media_content) {
		return $this->getDiv("media " . (!$media_class ? "" : $media_class), 
			$this->getImg($media_url, "mr-3", "width='64' height='64'") .
			$this->getDiv("media-body", 
				$this->getH5(empty($media_title) ? "" : $media_title, "mt-0") .
				(empty($media_content) ? "" : $media_content)
			)
		);
	}

	public function getList($list_items, $list_class = false, $items = null) {
		for ($i =0; $i < count($list_items); $i++) { 
			$items.= $this->getLi("list-group-item", $list_items[$i]);
		}

		return $this->getUl(!$list_class ? "" : $list_class, $items);
	}

	public function getCardSimpleLinks($card_class, $card_title, $card_sub_title, $card_content, $card_link = false, $links = null) {
		if ($card_link != false) {
			for ($i = 0; $i < count($card_link); $i++) { 
				$links.= $card_link[$i];
			}
		}

		return $this->getDiv("card " . (!$card_class ? '' : $card_class), 
			$this->getDiv("card-body", 
				$this->getH5($card_title, "card-title") .
				$this->getH6($card_sub_title, "card-subtitle mb-2 text-muted") .
				$this->getP($card_content, "card-text") .
				$links === null ? '' : $links
			)
		);
	}

	public function getCardColor($card_class, $card_title, $card_sub_title, $card_content, $card_time) {
		return $this->getDiv("card " . ($card_class), 
			$this->getDiv("card-header", $card_title) .
			$this->getDiv("card-body", 
				$this->getH5($card_sub_title, "card-title") .
				$this->getP($card_content, "card-text")
			) .
			$this->getDiv("card-footer", $card_time)
		);
	}

	public function getCardSimpleImg($card_url, $card_title, $card_sub_title, $card_content, $card_time, $card_content_extra = false, $card_atributes = false) {
		return $this->getDiv("card mb-3", 
			$this->getImg($card_url, "card-img-top") .
			$this->getDiv("card-body", 
				$this->getH5($card_title, "card-title") .
				$this->getH6($card_sub_title, "card-subtitle mb-2 text-muted") .
				$this->getP($card_content, "card-text")
			) .
			(!$card_content_extra ? "" : $card_content_extra) .
			$this->getDiv("card-footer", 
				$this->getP($this->getSmall($card_time, "text-muted"), "card-text")
			),
			(!$card_atributes ? '' : $card_atributes)
		);
	}

	public function getCardChCf($card_head, $card_body, $card_footer, $card_class = false) {
		return $this->getDiv("card " . (!$card_class ? '' : $card_class), 
			$this->getDiv("card-header", $card_head) .
			$this->getDiv("card-body", $card_body) .
			$this->getDiv("card-footer", $card_footer)
		);
	}

	public function getTableData($table_type, $table_class, $table_color, $table_title, $table_content, $title = null) {
		for ($i = 0; $i < count($table_title); $i++) {
			$title.= $this->getTh($table_title[$i]);
		}

		return $this->getDiv("table-responsive-xl", 
			$this->getTable("table text-center w-100 " . ($table_class . " " . (!$table_type ? '' : "data_tbl")), 
				$this->getThead($title, $table_color).
				$this->getTbody($table_content)
			)
		);
	}

	public function getSelect($select_type, $select_name, $select_class, $select_id, $select_rows, $select_columns, $select_atributes = false, $module = null) {
		if ($select_type) {
			foreach ($select_rows as $key => $data) {
				if (count($select_columns) > 4) {
					$module.= $this->getOption($data[$select_columns[0]], $data[$select_columns[1]] . $data[$select_columns[2]] . " " . $data[$select_columns[3]], $select_columns[4]);
				} elseif (count($select_columns) > 3) {
					$module.= $this->getOption($data[$select_columns[0]], $data[$select_columns[1]] . $data[$select_columns[2]], $select_columns[3]);
				} elseif (count($select_columns) > 2) {
					$module.= $this->getOption($data[$select_columns[0]], $data[$select_columns[1]] . " " . $data[$select_columns[2]]);
				} else {
					$module.= $this->getOption($data[$select_columns[0]], $data[$select_columns[1]]);
				}
			}
		} elseif (!$select_type) {
			for ($i = 0; $i < count($select_rows); $i++) {
				if (count($select_rows[$i]) > 2) {
					$module.= $this->getOption($select_rows[$i][0], $select_rows[$i][1], $select_rows[$i][2]);
				} else {
					$module.= $this->getOption($select_rows[$i][0], $select_rows[$i][1]);
				}
			}
		}

		return "<select name='" . ($select_name) . "' class='" . (!$select_class ? '' : $select_class) . "' id='" . ($select_id) . "' " . (!$select_atributes ? '' : $select_atributes) . ">" . $this->getOption("", "Seleccione", "selected") . ($module) . "</select>";
	}

	public function getNavs($navs_title, $navs_content, $title = null, $content = null) {
		for ($i = 0; $i < count($navs_title); $i++) {
			$title.= $this->getLi("nav-item", 
				$this->getA(("#" . ($navs_title[$i][0])), ("nav-link " . ($i === 0 ? 'active' : '')), ($navs_title[$i][1]), "data-toggle='tab' role='tab' aria-selected='" . ($i === 0 ? 'true' : 'false') . "'"), 
				"role='presentation'"
			);
		}

		for ($j = 0; $j < count($navs_content); $j++) { 
			$content.= $this->getDiv(("tab-pane fade " . ($j === 0 ? 'show active' : '')), 
				($navs_content[$j][0]), "role='tabpanel' id='" . ($navs_content[$j][1]) . "'"
			);
		}

		return $this->getUl("nav nav-tabs", $title, "role='tablist'") . $this->getDiv("tab-content", 
			$content
		);
	}

	public function getFeedback($feedback_type = false, $feedback_content = false, $module = null) {
		if (!$feedback_type) {
			$module = $this->getDiv("valid-feedback", "Campo Valido") . $this->getDiv("invalid-feedback", "Campo Invalido");
		} elseif ($feedback_type === "text") {
			$module = $this->getDiv("valid-feedback", !$feedback_content ? 'Texto Valido' : $feedback_content[0]) . $this->getDiv("invalid-feedback", !$feedback_content ? 'Texto Invalido' : $feedback_content[1]);
		} elseif ($feedback_type === "number") {
			$module = $this->getDiv("valid-feedback", !$feedback_content ? 'Numero Valido' : $feedback_content[0]) . $this->getDiv("invalid-feedback", !$feedback_content ? 'Numero Invalido' : $feedback_content[1]);
		} elseif ($feedback_type === "email") {
			$module = $this->getDiv("valid-feedback", !$feedback_content ? 'Email Valido' : $feedback_content[0]) . $this->getDiv("invalid-feedback", !$feedback_content ? 'Email Invalido' : $feedback_content[1]);
		} elseif ($feedback_type === "file") {
			$module = $this->getDiv("valid-feedback", !$feedback_content ? 'Archivo Valido' : $feedback_content[0]) . $this->getDiv("invalid-feedback", !$feedback_content ? 'Archivo Invalido' : $feedback_content[1]);
		} elseif ($feedback_type === "date") {
			$module = $this->getDiv("valid-feedback", !$feedback_content ? 'Fecha Valido' : $feedback_content[0]) . $this->getDiv("invalid-feedback", !$feedback_content ? 'Fecha Invalido' : $feedback_content[1]);
		} elseif ($feedback_type === "select") {
			$module = $this->getDiv("valid-feedback", !$feedback_content ? 'Elemento Valido' : $feedback_content[0]) . $this->getDiv("invalid-feedback", !$feedback_content ? 'Elemento Invalido' : $feedback_content[1]);
		} elseif ($feedback_type === "password") {
			$module = $this->getDiv("valid-feedback", !$feedback_content ? 'Password Valido' : $feedback_content[0]) . $this->getDiv("invalid-feedback", !$feedback_content ? 'Password Invalido' : $feedback_content[1]);
		} elseif ($feedback_type === "radio") {
			$module = $this->getDiv("valid-feedback", !$feedback_content ? 'Opcion Valido' : $feedback_content[0]) . $this->getDiv("invalid-feedback", !$feedback_content ? 'Opcion Invalido' : $feedback_content[1]);
		} elseif ($feedback_type === "icon") {
			$module = $this->getDiv("valid-feedback", !$feedback_content ? 'Icono Valido' : $feedback_content[0]) . $this->getDiv("invalid-feedback", !$feedback_content ? 'Icono Invalido' : $feedback_content[1]);
		}

		return $module;
	}

}