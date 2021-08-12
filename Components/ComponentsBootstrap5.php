<?php

/* 
	author: Sergio León
	https://github.com/Sleon4
	Lion components 2.7
*/

require_once("Components.php");

class ComponentsBootstrap5 extends Components {

	public string $novalidate = " novalidate";
	
	public function __construct(string $host) {
		parent::__construct($host);
	}

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	/*
	Components Bootstrap5
	*/
	public function bsInput(string $input_type, ?string $input_class, ?string $input_atributes = null, string $input_name, string $input_id): string {
		return $this->input($input_type, "form-control " . $input_class, (empty($input_atributes) ? "" : $input_atributes), $input_name, $input_id);
	}

	public function bsTextarea(?string $input_class, ?string $input_atributes = null, ?string $input_name, ?string $input_id): string {
		return $this->textarea("form-control " . $input_class, $input_atributes, $input_name, $input_id);
	}

	public function bsSelect(string $select_name, string $select_id, ?string $select_class, string $select_content, ?string $select_atributes = null): string {
		return $this->select($select_name, $select_id, "form-select " . $select_class, $select_content, $select_atributes);
	}

	public function bsDataSelect(string $select_name, string $select_id, ?string $select_class, array $select_content, array $select_methods, ?string $select_atributes = null, string|int|null $select_comparate = null): string {
		return $this->dataSelect($select_name, $select_id, (empty($select_class) ? "form-select" : "form-select " . $select_class), $select_content, $select_methods, $select_atributes, $select_comparate);
	}

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	public function bsTable(?string $table_class, ?string $table_atributes = null, string $table_title, string $table_content, ?string $table_tfooty = null): string {
		return $this->table("table " . (empty($table_class) ? "" : $table_class), $table_atributes, $table_title, $table_content, $table_tfooty);
	}

	public function bsDataTable(?string $table_class, ?array $table_atributes, array $table_title, array $table_content, 
		array $table_methods, bool $table_tfoot = false): string {
		return $this->dataTable("table w-100 " . $table_class, $table_atributes, $table_title, $table_content, $table_methods, $table_tfoot);
	}

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	public function bsFeedback(?string $valid, ?string $invalid): string {
		return $this->div("valid-feedback", $valid) . $this->div("invalid-feedback", $invalid);
	}

	public function bsAlert(string $alert_class, string $alert_content, bool $alert_dissmissing = false): string {
		$close = $this->button("button", "", "btn-close", $this->data("bs-dismiss", "alert") . $this->aria("label", "Close"));

		return $this->div("alert alert-" . $alert_class . (empty($alert_dissmissing) ? "" : " alert-dismissible fade show"), 
			$alert_content . (empty($alert_dissmissing) ? "" : $close), 
			$this->role("alert")
		);
	}

	public function bsButtonGroup(string $button, ?string $button_class = null): string {
		return $this->div("btn-group " . (empty($button_class) ? "" : $button_class), $button, $this->role("group"));
	}

	public function bsListGroup(?string $list_class, array $list_content, ?string $list_atributes = null): string {
		$content = null; 

		for ($i = 0; $i < count($list_content); $i++) {
			if ($list_content[$i][0] === "link") {
				$content.= $this->a($list_content[$i][1], $list_content[$i][2], "list-group-item list-group-item-action " . ($list_content[$i][3]), $list_content[$i][4]);
			} elseif ($list_content[$i][0] === "text") {
				$content.= $this->li($list_content[$i][1], "list-group-item " . $list_content[$i][2], $list_content[$i][3]);
			} else {
				$content.= $this->li($list_content[$i][1], "list-group-item " . $list_content[$i][2]);
			}
		}

		return $this->div("list-group " . $list_class, $content, (empty($list_atributes) ? "" : $list_atributes));
	}

	public function bsProgress(string $progress_class, array $content): string {
		$data = null; 

		for ($i = 0; $i < count($content); $i++) { 
			$data.= $this->div("progress-bar " . $content[$i][0], null, $this->role("progressbar") . $this->style("width: " . $content[$i][1] . "%") . $this->aria("valuenow", $content[$i][1]) . $this->aria("valuemin", "0") . $this->aria("valuemax", "100"));
		}

		return $this->div("progress " . $progress_class, $data);
	}

	public function bsModal(string $modal_id, ?string $modal_class, array $modal_header, array $modal_content, bool $modal_form = false, bool $modal_static = false): string {
		$content = null;

		if (!$modal_form) {
			$content = $this->div("modal-body", 
				$modal_content[0]
			) .
			$this->div("modal-footer", 
				$modal_content[1]
			);
		} elseif ($modal_form) {
			$content = $this->form("POST", "needs-validation", "novalidate", 
				$this->div("modal-body", 
					$modal_content[0]
				) .
				$this->div("modal-footer", 
					$modal_content[1]
				)
			);
		}

		return $this->div("modal fade", 
			$this->div("modal-dialog " . $modal_class, 
				$this->div("modal-content", 
					$this->div("modal-header " . $modal_header[2], 
						$this->h5($modal_header[0], "modal-title " . $modal_header[1]) .
						$this->button("button", "", "btn-close", $this->data("bs-dismiss", "modal") . $this->aria("label", "Close"))
					) .
					$content
				)
			), 
			$this->id($modal_id) . $this->tabindex("-1") . $this->aria("hidden", "true") . (!$modal_static ? "" : $this->data("bs-backdrop", "static") . $this->data("bs-keyboard", "false"))
		);
	}

	public function bsNavs(string $navs_type, array $navs_id, array $navs_content): string {
		$tabs = null; $content = null; 
		for ($i = 0; $i < count($navs_id); $i++) { 
			if ($navs_type === "tabs") {
				$tabs.= $this->button("button", $navs_id[$i][1], "nav-link " . ($i === 0 ? "active" : ""), $this->data("bs-toggle", "tab") . $this->data("bs-target", "#" . $navs_id[$i][0]) . $this->role("tab") . $this->aria("selected", ($i === 0 ? "true" : "false")));
			} elseif ($navs_type === "pills") {
				$tabs.= $this->li(
					$this->button("button", $navs_id[$i][1], "nav-link " . ($i === 0 ? "active" : ""), $this->data("bs-toggle", "pill") . $this->data("bs-target", "#" . $navs_id[$i][0]) . $this->role("tab") . $this->aria("selected", ($i === 0 ? "true" : "false"))), 
					"nav-item", 
					"role='presentation'"
				);
			}

			$content.= $this->div("tab-pane fade " . ($i === 0 ? "show active" : ""), $navs_content[$i][0], $this->id($navs_id[$i][0]) . $this->role("tabpanel"));
		}

		if ($navs_type === "tabs") {
			return $this->nav(false, false, 
				$this->div("nav nav-tabs", $tabs, $this->role("tablist"))
			) . $this->div("tab-content", $content);
		} elseif ($navs_type === "pills") {
			return $this->ul($tabs, "nav nav-pills mb-3", $this->role("tablist")) . $this->div("tab-content", $content);
		} else {
			return $this->nav(false, false, 
				$this->div("nav nav-tabs", $tabs, $this->role("tablist"))
			) . $this->div("tab-content", $content);
		}
	}

	public function bsIframe(string $iframe_ratio, string $iframe_src, ?string $iframe_atributes = null): string {
		return $this->div("ratio ratio-" . $iframe_ratio, 
			$this->iframe($iframe_src, false, $this->allowfullscreen . $iframe_atributes)
		);
	}

}