<?php
/* * * * Autor Sergio León * * * */
require_once("Components.php");

class ComponentsBootstrap4 extends Components {
	
	/* 
	Lion components 2.5
	*/
	public function __construct(string $host) {
		parent::__construct($host);
	}

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	/*
	Components Bootstrap4
	*/
	public function bsInput(string $input_type, string $input_class, string|bool $input_atributes = false, string $input_name, string $input_id): string {
		return $this->input($input_type, "form-control " . $input_class, (!$input_atributes ? "" : $input_atributes), $input_name, $input_id);
	}

	public function bsInputFile(string|bool $input_atributes = false, string $input_name, string $input_id): string {
		return $this->div("custom-file", 
			$this->input("file", "custom-file-input", $input_atributes, $input_name, $input_id) .
			$this->label("Seleccionar Archivo", "custom-file-label", "for='" . ($input_id) . "'")
		);
	}

	public function bsSelect(string $select_name, string $select_id, string|bool $select_class, string $select_content, string|bool $select_atributes = false): string {
		return "<select name='" . ($select_name) . "' id='" . ($select_id) . "' " . (!$select_class ? "class='custom-select'" : "class='custom-select " . ($select_class) . "'") . " " . (!$select_atributes ? "" : $select_atributes) . ">" . ($select_content) . "</select>";
	}

	public function bsDataSelect(string $select_name, string $select_id, string|bool $select_class, array $select_content, array $select_methods, string|bool $select_atributes = false, string|int|bool $select_comparate = false): string {
		return $this->dataSelect($select_name, $select_id, (!$select_class ? "custom-select" : "custom-select " . $select_class), $select_content, $select_methods, $select_atributes, $select_comparate);
	}

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	public function bsTable(string|bool $table_class, string|bool $table_atributes = false, string $table_title, string $table_content, string|bool $table_tfooty = false): string {
		return $this->table("table" . (!$table_class ? "" : " " . $table_class), $table_atributes, $table_title, $table_content, $table_tfooty);
	}

	public function bsDataTable(string|bool $table_class, array|bool $table_atributes, array $table_title, array $table_content, 
		array $table_methods, bool $table_tfoot = false): string {
		return $this->dataTable("table w-100 " . $table_class, $table_atributes, $table_title, $table_content, $table_methods, $table_tfoot);
	}

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	public function bsAlert(string $alert_class, string $alert_content, bool $alert_dissmissing = false): string {
		$close = !$alert_dissmissing ? "" : $this->button("button", 
			$this->span("&times;", false, "aria-hidden='true'"),
			"close",
			'data-dismiss="alert" aria-label="Close"'
		);

		return $this->div("alert alert-" . $alert_class, 
			$alert_content . $close, 
			"role='alert'"
		);
	}

	public function bsButtonGroup(string $button, string|bool $button_class = false): string {
		return $this->div("btn-group " . (!$button_class ? "" : $button_class), $button, 'role="group"');
	}

	public function bsJumbotron(string $jumbotron_content, string|bool $jumbotron_class = false, string|bool $jumbotron_atributes = false): string {
		return $this->div("jumbotron " . (!$jumbotron_class ? "" : $jumbotron_class),
			$jumbotron_content,
			$jumbotron_atributes
		);
	}

	public function bsListGroup(string $list_class, array $list_content, string|bool $list_atributes = false): string {
		$content = null; 
		for ($i = 0; $i < count($list_content); $i++) {
			if ($list_content[$i][0] === "link") {
				$content.= $this->a(
					$list_content[$i][1], 
					$list_content[$i][2], 
					"list-group-item list-group-item-action " . ($list_content[$i][3]), 
					$list_content[$i][4]
				);
			} elseif ($list_content[$i][0] === "text") {
				$content.= $this->li(
					$list_content[$i][1], 
					"list-group-item " . $list_content[$i][2],
					$list_content[$i][3]
				);
			} else {
				$content.= $this->li(
					$list_content[$i][1], 
					"list-group-item " . $list_content[$i][2]
				);
			}
		}

		return $this->div("list-group ". $list_class, $content, (!$list_atributes ? "" : $list_atributes));
	}

	public function bsMediaOject(string $media_class, array $media_img, array $media_content, string|bool $media_atriutes = false): string {
		return $this->div("media " . $media_class, 
			$this->img($media_img[0], "mr-3 " . $media_img[1], $media_img[2]) .
			$this->div("media-body", 
				$this->h5($media_content[0], "mt-0") .
				$this->p($media_content[1]) .
				(empty($media_content[2]) ? "" : $media_content[2])
			)
		);
	}

	public function bsProgress(string $progress_class, array $content): string {
		$data = null; for ($i = 0; $i < count($content); $i++) { 
			$data.= $this->div("progress-bar " . $content[$i][0], "", 'role="progressbar" style="width: ' . ($content[$i][1]) . '%" aria-valuenow="' . ($content[$i][1]) . '" aria-valuemin="0" aria-valuemax="100"');
		}

		return $this->div("progress " . $progress_class, $data);
	}

	public function bsModal(string $modal_id, string $modal_class, array $modal_header, array $modal_content, bool $modal_form = false, bool $modal_static = false): string {
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
						$this->button("button", 
							$this->span("&times;", false, "aria-hidden='true'"),
							"close",
							"data-dismiss='modal' aria-label='Close'"
						)
					) .
					$content
				)
			), 
			"id='" . ($modal_id) . "' data-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true' " . (!$modal_static ? "" : "data-backdrop='static'")
		);
	}

	public function bsNavs(string $navs_type, array $navs_id, array $navs_content): string {
		$tabs = null; $content = null; 
		for ($i = 0; $i < count($navs_id); $i++) { 
			if ($i === 0) {
				if ($navs_type === "tabs") {
					$tabs = $this->a("#" . $navs_id[$i][0], $navs_id[$i][1], "nav-link active", "data-toggle='tab' role='tab' aria-controls='" . ($navs_id[$i][0]) . "' aria-selected='true'");
				} elseif ($navs_type === "pills") {
					$tabs = $this->li(
						$this->a("#" . $navs_id[$i][0], $navs_id[$i][1], "nav-link active", "data-toggle='pill' role='tab' aria-controls='" . ($navs_id[$i][0]) . "' aria-selected='true'"), 
						"nav-item", 
						"role='presentation'"
					);
				}
				
				$content = $this->div("tab-pane fade show active", $navs_content[$i][0], "id='" . ($navs_id[$i][0]) . "' role='tabpanel'");
			} else {
				if ($navs_type === "tabs") {
					$tabs.= $this->a("#" . $navs_id[$i][0], $navs_id[$i][1], "nav-link", "data-toggle='tab' role='tab' aria-controls='" . ($navs_id[$i][0]) . "' aria-selected='false'");
				} elseif ($navs_type === "pills") {
					$tabs.= $this->li(
						$this->a("#" . $navs_id[$i][0], $navs_id[$i][1], "nav-link", "data-toggle='pill' role='tab' aria-controls='" . ($navs_id[$i][0]) . "' aria-selected='false'"), 
						"nav-item", 
						"role='presentation'"
					);
				}
				
				$content.= $this->div("tab-pane fade", $navs_content[$i][0], "id='" . ($navs_id[$i][0]) . "' role='tabpanel'");
			}
		}

		if ($navs_type === "tabs") {
			return $this->nav(false, false, 
				$this->div("nav nav-tabs", $tabs, "id='nav-tab' role='tablist'")
			) . $this->div("tab-content", $content);
		} elseif ($navs_type === "pills") {
			return $this->ul($tabs, "nav nav-pills mb-3", "role='tablist'") . $this->div("tab-content", $content);
		}
	}

	public function bsIframe(string $iframe_ratio, string $iframe_src, string|bool $iframe_class = false, string|bool $iframe_atributes = false): string {
		return $this->div("embed-responsive embed-responsive-" . $iframe_ratio, 
			$this->iframe($iframe_src, "embed-responsive-item " . $iframe_class, $iframe_atributes)
		);
	}

}