<?php
/* * * * Autor Sergio León * * * */
class Components {

	private $url_host;

	/* 
	Lion components 2.5
	*/
	public function __construct($url_host) {
		$this->url_host = $url_host;
	}

	public function url(string $url): string {
		return ($this->url_host . $url . "/");
	}

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	/*
	HTML components
	*/

	public function html(string|bool $html_class = false, string|bool $html_atributes = false, string|bool $html_content = false): string {
		return "<!DOCTYPE html><html" . (!$html_atributes ? '' : " " . $html_atributes) . (!$html_class ? '' : " class='" . ($html_class) . "'") . ">" . (!$html_content ? '' : $html_content) . "</html>";
	}

	public function head(string|bool $head_class = false, string|bool $head_atributes = false, string|bool $head_content = false): string {
		return "<head" . (!$head_atributes ? '' : " " . $head_atributes) . (!$head_class ? '' : " class='" . ($head_class) . "'") . ">" . (!$head_content ? '' : $head_content) . "</head>";
	}

	public function body(string|bool $body_class = false, string|bool $body_atributes = false, string|bool $body_content = false): string {
		return "<body" . (!$body_class ? '' : " class='" . ($body_class) . "'") . (!$body_atributes ? '' : " " .
			$body_atributes) . ">" . (!$body_content ? '' : $body_content) . "</body>";
	}

	public function title(string $title_content): string {
		return "<title>" . ($title_content) . "</title>";
	}

	public function meta(string|bool $meta_name = false, string|bool $meta_content = false, string|bool $meta_atributes = false): string {
		return "<meta" . (!$meta_name ? '' : " name='" . ($meta_name) . "'") . (!$meta_content ? '' : " content='" . ($meta_content) . "' ") . (!$meta_atributes ? '' : " " . $meta_atributes) . ">";
	}

	public function link(string $link_rel, string $link_href, string|bool $link_atributes = false): string {
		return "<link rel='" . ($link_rel) . "' href='" . ($link_href) . "' " . (!$link_atributes ? '' : $link_atributes) . ">";
	}

	public function script(string|bool $script_src = false, string|bool $script_atributes = false, string|bool $script_content = false): string {
		return "<script " . (!$script_src ? '' : "src='" . ($script_src) . "'") . (!$script_atributes ? '' : ' ' . $script_atributes) . ">" . (!$script_content ? '' : $script_content) . "</script>";
	}

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	public function a(string $a_href, string $a_content, string|bool $a_class = false, string|bool $a_atributes = false): string {
		return "<a href='" . ($a_href) . "' " . (!$a_class ? "" : "class='" . ($a_class) . "'") . " " . (!$a_atributes ? '' : $a_atributes) . ">" . ($a_content) . "</a>";
	}

	public function input(string $input_type, string $input_class, string|bool $input_atributes = false, string $input_name, string $input_id): string {
		return "<input type='" . ($input_type) . "' name='" . ($input_name) . "' id='" . ($input_id) . "' class='" . ($input_class) . "' " . (!$input_atributes ? '' : $input_atributes) . ">";
	}

	public function button(string $button_type, string $button_content, string|bool $button_class = false, string|bool $button_atributes = false): string {
		return "<button type='" . ($button_type) . "' " . (!$button_class ? '' : "class='" . $button_class . "'") . " " . (!$button_atributes ? "" : $button_atributes) . ">" . ($button_content) . "</button>";
	}

	public function option(string $option_value, string $option_content, string|bool $option_atributes = false): string {
		return "<option value='" . ($option_value) . "' " . (!$option_atributes ? '' : $option_atributes) . ">" . ($option_content) . "</option>";
	}

	public function select(string $select_name, string $select_id, string|bool $select_class, string $select_content, string|bool $select_atributes = false): string {
		return "<select name='" . ($select_name) . "' id='" . ($select_id) . "' " . (!$select_class ? "" : "class='" . ($select_class) . "'") . " " . (!$select_atributes ? "" : $select_atributes) . ">" . ($select_content) . "</select>";
	}

	public function dataSelect(string $select_name, string $select_id, string|bool $select_class, array $select_content, array $select_methods, string|bool $select_atributes = false, string|int|bool $select_comparate = false): string {
		$content = null; $list = [];

		foreach ($select_content as $key => $obj) {
			$value = null; $text = ""; $data = null;

			foreach ($select_methods as $key2 => $methods) {
				$key2 != 0 ? ($text.= $obj->$methods() . " ") : ($value = $obj->$methods());
				if ($select_comparate != false) {
					$list[0] = $value; 
					$list[1] = $text; 
					$list[2] = ($select_comparate === $value ? 'selected' : '');
				}
			}

			if ($select_comparate != false) {
				for ($i=0; $i < count($list); $i++) { 
					$data = $this->option($list[0], $list[1], $list[2]);
				}
			} else {
				$data.= $this->option($value, $text);
			}

			$content.= $data;
		}

		return "<select name='" . ($select_name) . "' id='" . ($select_id) . "' " . (!$select_class ? "" : "class='" . ($select_class) . "'") . " " . (!$select_atributes ? "" : $select_atributes) . ">" . ($this->option("", "Seleccione", "selected") . $content) . "</select>";
	}

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	public function tr(string $tr_content, string|bool $tr_atributes = false): string {
		return "<tr" . (!$tr_atributes ? '' : " " . $tr_atributes) . ">" . ($tr_content) . "</tr>";
	}

	public function th(string $th_content, string|bool $th_class = false, string|bool $th_tributes = false): string {
		return "<th" . (!$th_class ? '' : " class='" . ($th_class) . "' ") . (!$th_tributes ? '' : " " . $th_tributes) . ">" . ($th_content) . "</th>";
	}

	public function td(string $td_content, string|bool $td_atributes = false): string {
		return "<td " . (!$td_atributes ? '' : $td_atributes) . ">" . ($td_content) . "</td>";
	}

	public function thead(string $thead_content, string|bool $thead_class = false, string|bool $thead_atributes = false): string {
		return "<thead " . (!$thead_class ? '' : "class='" . ($thead_class) . "'") . " " . (!$thead_atributes ? '' : $thead_atributes) . ">" . ($thead_content) . "</thead>";
	}

	public function tbody(string $tbody_content, string|bool $tbody_class = false, string|bool $tbody_atributes = false): string {
		return "<tbody " . (!$tbody_class ? '' : "class='" . ($tbody_class) . "'") . " " . (!$tbody_atributes ? '' : $tbody_atributes) . ">" . ($tbody_content) . "</tbody>";
	}

	public function tfoot(string $tfoot_content, string|bool $tfoot_class = false, string|bool $tfoot_atributes = false): string {
		return "<tfoot " . (!$tfoot_class ? '' : "class='" . ($tfoot_class) . "'") . " " . (!$tfoot_atributes ? '' : $tfoot_atributes) . ">" . ($tfoot_content) . "</tfoot>";
	}

	public function table(string $table_class, string|bool $table_atributes, string $table_title, string $table_content): string {
		return "<table class='" . ($table_class) . "' " . (!$table_atributes ? '' : $table_atributes) . ">" . ($table_title . " " . $table_content) . "</table>";
	}

	public function dataTable(string|bool $table_class, array|bool $table_atributes, array $table_title, array $table_content, array $table_methods, bool $table_tfoot = false): string {
		$title = ""; $content = ""; $obj = ""; $atributes = "";

		for ($i = 0; $i < count($table_title); $i++) { 
			$title.= $this->th($table_title[$i], false, "scope='col'");
		}

		foreach ($table_content as $key => $data) {
			foreach ($table_methods as $key2 => $methods) {
				$obj.= $this->td($data->$methods());
			}

			if ($table_atributes != false) {
				foreach ($table_atributes[1] as $key3 => $value) {
					if ($value['type'] === "data") {
						foreach ($value['value'] as $key4 => $value2) {
							$atributes.= "data-" . $value['content'] . "='" . ($data->$value2()) . "'";
						}
					} elseif ($value['type'] === "modal") {
						$atributes.= 'data-toggle="modal" data-target="#' . ($value['value']) . '"';
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
			$this->tbody($content) . (!$table_tfoot ? "" : $this->tfoot($this->tr($title)))
		);
	}

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
	
	public function form(string|bool $form_method = false, string|bool $form_class = false, string|bool $form_atributes = false, string $form_content): string {
		return "<form " . (!$form_method ? '' : "method='" . ($form_method) . "'") . " class='" . ($form_class) . "' " . (!$form_atributes ? '' : $form_atributes) . ">" . ($form_content) . "</form>";
	}

	public function header(string|bool $header_class = false, string|bool $content_atributes = false, string|bool $header_content = false): string {
		return "<header" . (!$header_class ? '' : " class='" . ($header_class) . "'") . (!$content_atributes ? '' : ' ' . $content_atributes) . ">" . (!$header_content ? '' : $header_content) . "</header>";
	}

	public function main(string|bool $main_class = false, string|bool $main_atributes = false, string|bool $main_content = false): string {
		return "<main " . (!$main_class ? "" : "class='" . ($main_class) . "'") . " " . (!$main_atributes ? '' : $main_atributes) . ">" . (!$main_content ? '' : $main_content) . "</main>";
	}

	public function canvas(string $chart_class, string|bool $chart_height = false): string {
		return "<canvas class='" . ($chart_class) . "' " . (!$chart_height ? '' : "height='" . ($chart_height) . "'") . "></canvas>";
	}

	public function h1(string $h_content, string|bool $h_class = false, string|bool $h_atributes = false): string {
		return "<h1 " . (!$h_class ? '' : "class='" . ($h_class) . "'") . " " . (!$h_atributes ? '' : $h_atributes) . ">" . ($h_content) . "</h1>";
	}

	public function h2(string $h_content, string|bool $h_class = false, string|bool $h_atributes = false): string {
		return "<h2 " . (!$h_class ? '' : "class='" . ($h_class) . "'") . " " . (!$h_atributes ? '' : $h_atributes) . ">" . ($h_content) . "</h2>";
	}

	public function h3(string $h_content, string|bool $h_class = false, string|bool $h_atributes = false): string {
		return "<h3 " . (!$h_class ? '' : "class='" . ($h_class) . "'") . " " . (!$h_atributes ? '' : $h_atributes) . ">" . ($h_content) . "</h3>";
	}

	public function h4(string $h_content, string|bool $h_class = false, string|bool $h_atributes = false): string {
		return "<h4 " . (!$h_class ? '' : "class='" . ($h_class) . "'") . " " . (!$h_atributes ? '' : $h_atributes) . ">" . ($h_content) . "</h4>";
	}

	public function h5(string $h_content, string|bool $h_class = false, string|bool $h_atributes = false): string {
		return "<h5 " . (!$h_class ? '' : "class='" . ($h_class) . "'") . " " . (!$h_atributes ? '' : $h_atributes) . ">" . ($h_content) . "</h5>";
	}

	public function h6(string $h_content, string|bool $h_class = false, string|bool $h_atributes = false): string {
		return "<h6 " . (!$h_class ? '' : "class='" . ($h_class) . "'") . " " . (!$h_atributes ? '' : $h_atributes) . ">" . ($h_content) . "</h6>";
	}

	public function br(): string {
		return "<br>";
	}

	public function strong(string $strong_content): string {
		return "<strong>" . ($strong_content) . "</strong>";
	}

	public function footer(string $footer_content, string|bool $footer_class = false, string|bool $footer_atributes = false): string {
		return "<footer" . (!$footer_class ? '' : " class='" . ($footer_class) . "'") . (!$footer_atributes ? '' : " " . $footer_atributes) .">" . ($footer_content) . "</footer>";
	}

	public function hr(string|bool $hr_class = false): string {
		return "<hr" . (!$hr_class ? '' : " class='" . ($hr_class) . "'") . ">";
	}

	public function nav(string|bool $nav_class = false, string|bool $nav_atributes = false, string $nav_content): string {
		return "<nav " . (!$nav_class ? "" : "class='" . ($nav_class) . "'") . " " . (!$nav_atributes ? '' : $nav_atributes) . ">" . ($nav_content) . "</nav>";
	}

	public function label(string $label_content, string|bool $label_class = false, string|bool $label_atributes = false): string {
		return "<label " . (!$label_class ? '' : "class='" . ($label_class) . "'") . " " . (!$label_atributes ? '' : $label_atributes) . ">" . ($label_content) . "</label>";
	}

	public function p(string $p_content, string|bool $p_class = false, string|bool $p_atributes = false): string {
		return "<p " . (!$p_class ? '' : "class='" . ($p_class) . "'") . " " . (!$p_atributes ? '' : $p_atributes) . ">" . ($p_content) . "</p>";
	}

	public function i(string|bool $i = false): string {
		return "<i " . (!$i ? '' : "class='" . ($i) . "'") . "></i>";
	}

	public function div(string|bool $div_class = false, string|bool $div_content = false, string|bool $div_atributes = false): string {
		return "<div " . (!$div_class ? '' : "class='" . ($div_class) . "'") . " " . (!$div_atributes ? '' : $div_atributes) . ">" . (!$div_content ? '' : $div_content) . "</div>";
	}

	public function span(string $span_content, string|bool $span_class = false, string|bool $span_atributes = false): string {
		return "<span class='" . (!$span_class ? '' : $span_class) . "' " . (!$span_atributes ? '' : $span_atributes) . ">" . (!$span_content ? '' : $span_content) . "</span>";
	}

	public function img(string $img_url, string|bool $img_class = false, string|bool $img_atributes = false): string {		
		return "<img src='" . ($img_url) . "' " . (!$img_class ? '' : "class='" . ($img_class) . "'") . " loading='lazy' " . (!$img_atributes ? '' : $img_atributes) . ">";
	}

	public function li(string $li_content, string|bool $li_class = false, string|bool $li_atributes = false): string {
		return "<li " . (!$li_class ? "" : "class='" . ($li_class) . "'") . " " . (!$li_atributes ? '' : $li_atributes) . ">" . ($li_content) . "</li>";
	}

	public function ul(string $ul_content, string|bool $ul_class = false, string|bool $ul_atributes = false): string {
		return "<ul " . (!$ul_class ? "" : "class='" . ($ul_class) . "'") . " " . (!$ul_atributes ? '' : $ul_atributes) . ">" . ($ul_content) . "</ul>";
	}

	public function small(string $small_content, string|bool $small_class = false, string|bool $small_atributes = false): string {
		return "<small " . (!$small_class ? "" : "class='" . ($small_class) . "'") . " " . (!$small_atributes ? '' : $small_atributes) . ">" . ($small_content) . "</small>";
	}

	public function iframe(string $iframe_src, string|bool $iframe_class = false, string|bool $iframe_atributes = false): string {
		return "<iframe class='" . (!$iframe_class ? '' : $iframe_class) . "' src='" . ($iframe_src) . "' " . (!$iframe_atributes ? '' : $iframe_atributes) . "></iframe>";
	}

}