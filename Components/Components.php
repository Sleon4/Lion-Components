<?php

/* * * * author: Sergio León * * * */
class Components {

	private $url_host;

	/*
	HTML atributes
	*/
	public string $multiple = " multiple";
	public string $readonly = " readonly";
	public string $disabled = " disabled";
	public string $selected = " selected";
	public string $required = " required";
	public string $allowfullscreen = " allowfullscreen";
	public string $checked = " checked";

	/* 
	Lion framework - components 2.6
	*/
	public function __construct($url_host) {
		$this->url_host = $url_host;
	}

	public function url(string $url): string {
		return ($this->url_host . $url . "/");
	}

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	/*
	HTML atributes
	*/
	public function integrity(string $integrity): string {
		return " integrity='" . ($integrity) . "'";
	}

	public function alt(string $alt): string {
		return " alt='" . ($alt) . "'";
	}

	public function allow(string $allow): string {
		return " allow='" . ($allow) . "'";
	}

	public function class(string $class): string {
		return " class='" . ($class) . "'";
	}

	public function id(string $id): string {
		return " id='" . ($id) . "'";
	}

	public function data(string $data, string $data_value): string {
		return " data-" . ($data) . "='" . ($data_value) . "'";
	}

	public function aria(string $aria, string $aria_value): string {
		return " aria-" . ($aria) . "='" . ($aria_value) . "'";
	}

	public function placeholder(string $placeholder): string {
		return " placeholder='" . ($placeholder) . "'";
	}

	public function name(string $name): string {
		return " name='" . ($name) . "'";
	}

	public function type(string $type): string {
		return " type='" . ($type) . "'";
	}

	public function src(string $src): string {
		return " src='" . ($src) . "'";
	}

	public function rel(string $rel): string {
		return " rel='" . ($rel) . "'";
	}

	public function href(string $href): string {
		return " href='" . ($href) . "'";
	}

	public function value(?string $value): string {
		return " value='" . ($value) . "'";
	}

	public function method(string $method): string {
		return " method='" . ($method) . "'";
	}

	public function scope(string $scope): string {
		return " scope='" . ($scope) . "'";
	}

	public function loading(string $loading): string {
		return " loading='" . ($loading) . "'";
	}

	public function tabindex(string $tabindex): string {
		return " tabindex='" . ($tabindex) . "'";
	}

	public function max(string $max): string {
		return " max='" . ($max) . "'";
	}

	public function min(string $min): string {
		return " min='" . ($min) . "'";
	}

	public function role(string $role): string {
		return " role='" . ($role) . "'";
	}

	public function content(string $content): string {
		return " content='" . ($content) . "'";
	}

	public function autocomplete(string $autocomplete): string {
		return " autocomplete='" . ($autocomplete) . "'";
	}

	public function width(string $witdh): string {
		return " witdh='" . ($witdh) . "'";
	}

	public function height(string $height): string {
		return " height='" . ($height) . "'";
	}

	public function style(string $style): string {
		return " style='" . ($style) . "'";
	}

	public function for(string $for): string {
		return " for='" . ($for) . "'";
	}

	public function lang(string $lang): string {
		return " lang='" . ($lang) . "'";
	}

	public function charset(string $charset): string {
		return " charset='" . ($charset) . "'";
	}

	/*
	HTML components
	*/
	public function html(?string $html_class, ?string $html_atributes, ?string $html_content = null): string {
		return "<!DOCTYPE html><html" . (empty($html_atributes) ? '' : $html_atributes) . (empty($html_class) ? '' : $this->class($html_class)) . ">" . (!$html_content ? '' : $html_content) . "</html>";
	}

	public function head(?string $head_class, ?string $head_atributes, ?string $head_content = null): string {
		return "<head" . (empty($head_atributes) ? '' : $head_atributes) . (empty($head_class) ? '' : $this->class($head_class)) . ">" . (empty($head_content) ? '' : $head_content) . "</head>";
	}

	public function body(?string $body_class, ?string $body_atributes, ?string $body_content = null): string {
		return "<body" . (empty($body_class) ? '' : $this->class($body_class)) . (empty($body_atributes) ? '' : $body_atributes) . ">" . (empty($body_content) ? '' : $body_content) . "</body>";
	}

	public function title(?string $title_content, ?bool $title_attr = false): string {
		return !$title_attr ? "<title>" . ($title_content) . "</title>" : " title='" . ($title_content) . "'";
	}

	public function meta(?string $meta_name, ?string $meta_content, ?string $meta_atributes = null): string {
		return "<meta" . (empty($meta_name) ? '' : $this->name($meta_name)) . (empty($meta_content) ? '' : $this->content($meta_content)) . (empty($meta_atributes) ? '' : $meta_atributes) . ">";
	}

	public function link(?string $link_rel, ?string $link_href, ?string $link_atributes = null): string {
		return "<link" . ($this->rel($link_rel) . $this->href($link_href) . (!$link_atributes ? '' : $link_atributes)) . ">";
	}

	public function script(?string $script_src, ?string $script_atributes = null, ?string $script_content = null): string {
		return "<script" . (empty($script_src) ? '' : $this->src($script_src)) . (empty($script_atributes) ? '' : ' ' . $script_atributes) . ">" . (empty($script_content) ? '' : $script_content) . "</script>";
	}

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	public function a(?string $a_href, ?string $a_content, ?string $a_class = null, ?string $a_atributes = null): string {
		return "<a" . ($this->href($a_href) . (empty($a_class) ? "" : $this->class($a_class)) . (empty($a_atributes) ? '' : $a_atributes)) . ">" . ($a_content) . "</a>";
	}

	public function input(?string $input_type, ?string $input_class, ?string $input_atributes = null, ?string $input_name, ?string $input_id): string {
		return "<input" . ($this->type($input_type) . $this->name($input_name) . $this->id($input_id) . $this->class($input_class) . (empty($input_atributes) ? '' : $input_atributes)) . ">";
	}

	public function textarea(?string $input_class, ?string $input_atributes = null, ?string $input_name, ?string $input_id): string {
		return "<textarea" . ($this->class($input_class) . $this->name($input_name) . $this->id($input_id) . (empty($input_atributes) ? '' : $input_atributes)) . "></textarea>";
	}

	public function button(?string $button_type, ?string $button_content, ?string $button_class = null, ?string $button_atributes = null): string {
		return "<button" . ($this->type($button_type) . (empty($button_class) ? '' : $this->class($button_class)) . (empty($button_atributes) ? "" : $button_atributes)) . ">" . ($button_content) . "</button>";
	}

	public function option(?string $option_value, ?string $option_content, ?string $option_atributes = null): string {
		return "<option" . (($this->value($option_value)) . (empty($option_atributes) ? '' : $option_atributes)) . ">" . ($option_content) . "</option>";
	}

	public function select(?string $select_name, ?string $select_id, ?string $select_class, ?string $select_content, ?string $select_atributes = null): string {
		return "<select" . ($this->name($select_name) . $this->id($select_id) . (empty($select_class) ? "" : $this->class($select_class)) . (empty($select_atributes) ? "" : $select_atributes)) . ">" . ($select_content) . "</select>";
	}

	public function dataSelect(?string $select_name, ?string $select_id, ?string $select_class, array $select_content, array $select_methods, ?string $select_atributes = null, string|int|bool $select_comparate = null): string {
		$content = null; $list = [];

		foreach ($select_content as $key => $obj) {
			$value = null; $text = ""; $data = null;

			foreach ($select_methods as $key2 => $methods) {
				$key2 != 0 ? ($text.= $obj->$methods() . " ") : ($value = $obj->$methods());
				if ($select_comparate != null) {
					$list[0] = $value; 
					$list[1] = $text; 
					$list[2] = ($select_comparate === $value ? $this->selected : '');
				}
			}

			if ($select_comparate != null) {
				for ($i=0; $i < count($list); $i++) { 
					$data = $this->option($list[0], $list[1], $list[2]);
				}
			} else {
				$data.= $this->option($value, $text);
			}

			$content.= $data;
		}

		return $this->select($select_name, $select_id, $select_class, ($this->option("", "Seleccione", $this->selected) . $content), (empty($select_atributes) ? "" : $select_atributes));
	}

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	public function tr(?string $tr_content, ?string $tr_atributes = null): string {
		return "<tr" . (empty($tr_atributes) ? '' : " " . $tr_atributes) . ">" . ($tr_content) . "</tr>";
	}

	public function th(?string $th_content, ?string $th_class = null, ?string $th_tributes = null): string {
		return "<th" . (empty($th_class) ? '' : $this->class($th_class)) . (empty($th_tributes) ? '' : " " . $th_tributes) . ">" . ($th_content) . "</th>";
	}

	public function td(?string $td_content, ?string $td_atributes = null): string {
		return "<td" . (empty($td_atributes) ? '' : $td_atributes) . ">" . ($td_content) . "</td>";
	}

	public function thead(?string $thead_content, ?string $thead_class = null, ?string $thead_atributes = null): string {
		return "<thead" . ((empty($thead_class) ? '' : $this->class($thead_class)) . (empty($thead_atributes) ? '' : $thead_atributes)) . ">" . ($thead_content) . "</thead>";
	}

	public function tbody(?string $tbody_content, ?string $tbody_class = null, ?string $tbody_atributes = null): string {
		return "<tbody" . ((empty($tbody_class) ? '' : $this->class($tbody_class)) . (empty($tbody_atributes) ? '' : $tbody_atributes)) . ">" . ($tbody_content) . "</tbody>";
	}

	public function tfoot(?string $tfoot_content, ?string $tfoot_class = null, ?string $tfoot_atributes = null): string {
		return "<tfoot" . ((empty($tfoot_class) ? '' : $this->class($tfoot_class)) . (empty($tfoot_atributes) ? '' : $tfoot_atributes)) . ">" . ($tfoot_content) . "</tfoot>";
	}

	public function table(?string $table_class, ?string $table_atributes, ?string $table_title, ?string $table_content): string {
		return "<table" . ($this->class($table_class) . (empty($table_atributes) ? '' : $table_atributes)) . ">" . ($table_title . " " . $table_content) . "</table>";
	}

	public function dataTable(?string $table_class, ?array $table_atributes, array $table_title, array $table_content, array $table_methods, bool $table_tfoot = null): string {
		$title = ""; $content = ""; $obj = ""; $atributes = "";

		for ($i = 0; $i < count($table_title); $i++) { 
			$title.= $this->th($table_title[$i], false, $this->scope("col"));
		}

		foreach ($table_content as $key => $data) {
			foreach ($table_methods as $key2 => $methods) {
				$obj.= $this->td($data->$methods());
			}

			if ($table_atributes != null) {
				foreach ($table_atributes[1] as $key3 => $value) {
					if ($value['type'] === "data") {
						foreach ($value['value'] as $key4 => $value2) {
							$atributes.= $this->data($value['content'], $data->$value2());
						}
					} elseif ($value['type'] === "modal") {
						$atributes.= $this->data("toggle", "modal") . $this->data("target", "#" . $value['value']);
					}
				}
			}

			$content.= $this->tr($obj, $atributes);
			$atributes = "";
			$obj = "";
		}

		return $this->table(
			"data_tbl " . $table_class, 
			!$table_atributes ? "" : $table_atributes[0], 
			$this->thead($this->tr($title)), 
			$this->tbody($content) . (empty($table_tfoot) ? "" : $this->tfoot($this->tr($title)))
		);
	}

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
	
	public function form(?string $form_method = null, ?string $form_class = null, ?string $form_atributes = null, ?string $form_content): string {
		return "<form" . ((empty($form_method) ? '' : $this->method($form_method)) . $this->class($form_class) . (empty($form_atributes) ? '' : $form_atributes)) . ">" . ($form_content) . "</form>";
	}

	public function header(?string $header_class = null, ?string $content_atributes = null, ?string $header_content = null): string {
		return "<header" . ((empty($header_class) ? '' : $this->class($header_class)) . (empty($content_atributes) ? '' : ' ' . $content_atributes)) . ">" . (!$header_content ? '' : $header_content) . "</header>";
	}

	public function main(?string $main_class = null, ?string $main_atributes = null, ?string $main_content = null): string {
		return "<main" . ((empty($main_class) ? "" : $this->class($main_class)) . (empty($main_atributes) ? '' : $main_atributes)) . ">" . (empty($main_content) ? '' : $main_content) . "</main>";
	}

	public function canvas(?string $canvas_class, ?string $chart_height = null): string {
		return "<canvas" . ($this->class($canvas_class) . (!$chart_height ? '' : $this->height($chart_height))) . "></canvas>";
	}

	public function h1(?string $h_content, ?string $h_class = null, ?string $h_atributes = null): string {
		return "<h1" . ((empty($h_class) ? '' : $this->class($h_class)) . (empty($h_atributes) ? '' : $h_atributes)) . ">" . ($h_content) . "</h1>";
	}

	public function h2(?string $h_content, ?string $h_class = null, ?string $h_atributes = null): string {
		return "<h2" . ((empty($h_class) ? '' : $this->class($h_class)) . (empty($h_atributes) ? '' : $h_atributes)) . ">" . ($h_content) . "</h2>";
	}

	public function h3(?string $h_content, ?string $h_class = null, ?string $h_atributes = null): string {
		return "<h3" . ((empty($h_class) ? '' : $this->class($h_class)) . (empty($h_atributes) ? '' : $h_atributes)) . ">" . ($h_content) . "</h3>";
	}

	public function h4(?string $h_content, ?string $h_class = null, ?string $h_atributes = null): string {
		return "<h4" . ((empty($h_class) ? '' : $this->class($h_class)) . (empty($h_atributes) ? '' : $h_atributes)) . ">" . ($h_content) . "</h4>";
	}

	public function h5(?string $h_content, ?string $h_class = null, ?string $h_atributes = null): string {
		return "<h5" . ((empty($h_class) ? '' : $this->class($h_class)) . (empty($h_atributes) ? '' : $h_atributes)) . ">" . ($h_content) . "</h5>";
	}

	public function h6(?string $h_content, ?string $h_class = null, ?string $h_atributes = null): string {
		return "<h6" . ((empty($h_class) ? '' : $this->class($h_class)) . (empty($h_atributes) ? '' : $h_atributes)) . ">" . ($h_content) . "</h6>";
	}

	public function br(): string {
		return "<br>";
	}

	public function strong(?string $strong_content): string {
		return "<strong>" . ($strong_content) . "</strong>";
	}

	public function footer(?string $footer_content, ?string $footer_class = null, ?string $footer_atributes = null): string {
		return "<footer" . ((empty($footer_class) ? '' : $this->class($footer_class)) . (empty($footer_atributes) ? '' : " " . $footer_atributes)) .">" . ($footer_content) . "</footer>";
	}

	public function hr(?string $hr_class = null): string {
		return "<hr" . (empty($hr_class) ? '' : $this->class($hr_class)) . ">";
	}

	public function nav(?string $nav_class, ?string $nav_atributes, ?string $nav_content): string {
		return "<nav" . ((empty($nav_class) ? "" : $this->class($nav_class) . (empty($nav_atributes) ? '' : $nav_atributes))) . ">" . ($nav_content) . "</nav>";
	}

	public function label(?string $label_content, ?string $label_class = null, ?string $label_atributes = null): string {
		return "<label" . ((empty($label_class) ? '' : $this->class($label_class)) . (empty($label_atributes) ? '' : $label_atributes)) . ">" . ($label_content) . "</label>";
	}

	public function p(?string $p_content, ?string $p_class = null, ?string $p_atributes = null): string {
		return "<p" . ((empty($p_class) ? '' : $this->class($p_class)) . (empty($p_atributes) ? '' : $p_atributes)) . ">" . ($p_content) . "</p>";
	}

	public function i(?string $i = null): string {
		return "<i" . ($this->class($i)) . "></i>";
	}

	public function div(?string $div_class = null, ?string $div_content = null, ?string $div_atributes = null): string {
		return "<div" . ((empty($div_class) ? '' : $this->class($div_class)) . (empty($div_atributes) ? '' : $div_atributes)) . ">" . (empty($div_content) ? '' : $div_content) . "</div>";
	}

	public function span(?string $span_content, ?string $span_class = null, ?string $span_atributes = null): string {
		return "<span" . ((empty($span_class) ? '' : $this->class($span_class)) . (empty($span_atributes) ? '' : $span_atributes)) . ">" . (empty($span_content) ? '' : $span_content) . "</span>";
	}

	public function img(?string $img_url, ?string $img_class = null, ?string $img_atributes = null): string {		
		return "<img" . (($this->src($img_url)) . (empty($img_class) ? '' : $this->class($img_class)) . $this->loading("lazy") . (empty($img_atributes) ? '' : $img_atributes)) . ">";
	}

	public function li(?string $li_content, ?string $li_class = null, ?string $li_atributes = null): string {
		return "<li" . ((empty($li_class) ? "" : $this->class($li_class)) . (empty($li_atributes) ? '' : $li_atributes)) . ">" . ($li_content) . "</li>";
	}

	public function ul(?string $ul_content, ?string $ul_class = null, ?string $ul_atributes = null): string {
		return "<ul" . ((empty($ul_class) ? "" : $this->class($ul_class) . (empty($ul_atributes) ? '' : $ul_atributes))) . ">" . ($ul_content) . "</ul>";
	}

	public function small(?string $small_content, ?string $small_class = null, ?string $small_atributes = null): string {
		return "<small" . ((empty($small_class) ? "" : $this->class($small_class)) . (empty($small_atributes) ? '' : $small_atributes)) . ">" . ($small_content) . "</small>";
	}

	public function iframe(?string $iframe_src, ?string $iframe_class = null, ?string $iframe_atributes = null): string {
		return "<iframe" . ((empty($iframe_class) ? '' : $this->class($iframe_class)) . $this->src($iframe_src) . (empty($iframe_atributes) ? '' : $iframe_atributes)) . "></iframe>";
	}

}