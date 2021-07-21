<?php 

header('X-Frame-Options: DENY');
header('X-Content-Type-Options: nosniff');
header('X-XSS-Protection: 1;mode=block');
header_remove("X-Powered-By");
ini_set('date.timezone', 'America/Bogota');

require_once("Components/ComponentsBootstrap5.php");
require_once("Class/Users.php");
$cmp = new ComponentsBootstrap5("http://localhost/LFC/");
$user = new Users("Sergio", "Leon", 21);

echo($cmp->html(null, $cmp->lang("es"),
	$cmp->head(null, null, 
		$cmp->title("LF - Components") .
		$cmp->meta(null, null, $cmp->charset("utf-8")) .
		$cmp->meta("viewport", "width=device-width, initial-scale=1") .
		$cmp->link("stylesheet", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", 'integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"') .
		$cmp->link("stylesheet", "https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css") .
		$cmp->link("stylesheet", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css")
	) .
	$cmp->body(null, null, 
		$cmp->nav("navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm", null, 
			$cmp->div("container-fluid", 
				$cmp->a("index.php", "Navbar", "navbar-brand") .
				$cmp->button("button", 
					$cmp->span(null, "navbar-toggler-icon"), "navbar-toggler", $cmp->data("bs-toggle", "collapse") . $cmp->data("bs-target", "#navbarSupportedContent") . $cmp->aria("controls", "navbarSupportedContent") . $cmp->aria("expanded", "false") . $cmp->aria("label", "Toggle navigation")
				) .
				$cmp->div("collapse navbar-collapse",
					$cmp->ul(
						$cmp->li(
							$cmp->a("#alerts", "Alerts", "nav-link active"), 
							"nav-item"
						) .
						$cmp->li(
							$cmp->a("#list_groups", "List group", "nav-link"), 
							"nav-item"
						) .
						$cmp->li(
							$cmp->a("#navs", "Navs", "nav-link"), 
							"nav-item"
						) .
						$cmp->li(
							$cmp->a("#progress_bar", "Progress bar", "nav-link"),
							"nav-item"
						) .
						$cmp->li(
							$cmp->a("#input", "Input", "nav-link"),
							"nav-item"
						) .
						$cmp->li(
							$cmp->a("#buttons", "Buttons", "nav-link"),
							"nav-item"
						) .
						$cmp->li(
							$cmp->a("#iframe", "Iframe", "nav-link"),
							"nav-item"
						) .
						$cmp->li(
							$cmp->a("#dataTable_ex", "Data table", "nav-link"),
							"nav-item"
						),
						"navbar-nav ms-auto mb-2 mb-lg-0"
					), 
					$cmp->id("navbarSupportedContent")
				)
			)
		) . 
		$cmp->div("container-fluid", 
			$cmp->div("col-lg-11 mx-auto mt-5 mb-5 bg-white shadow p-4 rounded", 
				$cmp->div("row", 
					$cmp->h1("Alerts") .
					$cmp->div("col-lg-6", 
						$cmp->div("mb-3", 
							$cmp->bsAlert("primary", "A simple primary " . ($cmp->a("#", "alert—check", "alert-link")) . " it out!", true)
						)
					) .
					$cmp->div("col-lg-6", 
						$cmp->div("mb-3", 
							$cmp->bsAlert("danger", "A simple danger alert—check it out!")
						)
					) .
					$cmp->div("col-lg-6", 
						$cmp->div("mb-3", 
							$cmp->bsAlert("success", 
								$cmp->h4("Well done!", "alert-heading") .
								$cmp->p("Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.") .
								$cmp->hr() .
								$cmp->p("Whenever you need to, be sure to use margin utilities to keep things nice.", "mb-0"),
								true
							)
						)
					) .
					$cmp->div("col-lg-6", 
						$cmp->div("mb-3", 
							$cmp->bsAlert("warning", 
								$cmp->h4("Well done!", "alert-heading") .
								$cmp->p("Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.") .
								$cmp->hr() .
								$cmp->p("Whenever you need to, be sure to use margin utilities to keep things nice and tidy.", "mb-0")
							)
						)
					)
				),
				$cmp->id("alerts")
			) . 
			$cmp->div("col-lg-11 mx-auto mb-5 bg-white shadow p-4 rounded", 
				$cmp->div("row", 
					$cmp->div("col-lg-4", 
						$cmp->div("mb-3", 
							$cmp->h1("List group") .
							$cmp->bsListGroup(null, [
								["text", "content" . $cmp->span("14", "badge badge-primary badge-pill"), "d-flex justify-content-between align-items-center", null],
								["text", "content", "list-group-item-primary", null],
								["text", "content", null, null],
								["text", $cmp->input("checkbox", "form-check-input me-1", null, "example1", "example1") . "First checkbox", null, null],
								["link", "index.php", "content", null, null],
								["link", "index.php", "content", "active", $cmp->aria("disabled", "true")]
							])
						)
					) .
					$cmp->div("col-lg-4", 
						$cmp->div("mb-3", 
							$cmp->h1("List group - flush") .
							$cmp->bsListGroup("list-group-flush", [
								["text", "content" . $cmp->span("14", "badge badge-primary badge-pill"), "d-flex justify-content-between align-items-center", null],
								["text", "content", "list-group-item-warning", null],
								["text", "content", null, null],
								["text", $cmp->input("checkbox", "form-check-input me-1", null, "example1", "example1") . "First checkbox", null, null],
								["link", "index.php", "content", null, null],
								["link", "index.php", "content", "active", $cmp->aria("disabled", "true")]
							])
						)
					) .
					$cmp->div("col-lg-4", 
						$cmp->div("mb-3", 
							$cmp->h1("List group - horizotal") .
							$cmp->div("mb-3", 
								$cmp->bsListGroup("list-group-horizontal-xxl", [
									["text", "content", null, null],
									["text", "content", null, null],
									["text", "content", null, $cmp->aria("disabled", "true")]
								])
							) .
							$cmp->div("mb-3", 
								$cmp->bsListGroup("list-group-horizontal-xxl", [
									["text", "content", null, null],
									["text", "content", null, null],
									["text", "content", null, $cmp->aria("disabled", "true")]
								])
							) .
							$cmp->div("mb-3", 
								$cmp->bsListGroup("list-group-horizontal-xxl", [
									["text", "content", null, null],
									["text", "content", null, null],
									["text", "content", null, $cmp->aria("disabled", "true")]
								])
							) .
							$cmp->div("mb-3", 
								$cmp->bsListGroup("list-group-horizontal-xxl", [
									["text", "content", null, null],
									["text", "content", null, null],
									["text", "content", null, $cmp->aria("disabled", "true")]
								])
							)
						)
					)
				),
				$cmp->id("list_groups")
			) . 
			$cmp->div("col-lg-11 mx-auto mb-5 bg-white shadow p-4 rounded", 
				$cmp->div("row", 
					$cmp->div("col-lg-6", 
						$cmp->h1("Navs - tabs") .
						$cmp->bsNavs("tabs",
							[
								["home", "Home"],
								["home2", "Home2"],
								["home3", "Home3"]
							], 
							[
								[$cmp->div("mt-3 mb-3", "1- Lorem ipsum dolor sit amet, Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")],
								[$cmp->div("mt-3 mb-3", "2- Lorem ipsum dolor sit amet, Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")],
								[$cmp->div("mt-3 mb-3", "3- Lorem ipsum dolor sit amet, Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")]
							]
						)
					) .
					$cmp->div("col-lg-6", 
						$cmp->h1("Navs - pills") .
						$cmp->bsNavs("pills",
							[
								["home6", "Home6"],
								["home7", "Home7"],
								["home8", "Home8"]
							], 
							[
								[$cmp->div("mt-3 mb-3", "6- Lorem ipsum dolor sit amet, Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")],
								[$cmp->div("mt-3 mb-3", "7- Lorem ipsum dolor sit amet, Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")],
								[$cmp->div("mt-3 mb-3", "8- Lorem ipsum dolor sit amet, Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.")]
							]
						)
					)
				),
				$cmp->id("navs")
			) . 
			$cmp->div("col-lg-11 mx-auto mb-5 bg-white shadow p-4 rounded", 
				$cmp->h1("Progress bar") .
				$cmp->div("row", 
					$cmp->div("col-lg-4", 
						$cmp->bsProgress("mt-3", [
							["progress-bar-striped bg-info", 10],
							["progress-bar-striped bg-success", 30],
							["bg-primary", 30],
							["progress-bar-striped bg-danger", 20],
							["bg-warning", 10]
						])
					) .
					$cmp->div("col-lg-4", 
						$cmp->bsProgress("mt-3", [
							["bg-info", 76]
						])
					) .
					$cmp->div("col-lg-4", 
						$cmp->bsProgress("mt-3", [
							["progress-bar-striped progress-bar-animated bg-secondary", 15],
							["progress-bar-striped progress-bar-animated bg-primary", 45]
						])
					)
				) ,
				$cmp->id("progress_bar")
			) . 
			$cmp->div("col-lg-11 mx-auto mb-5 bg-white shadow p-4 rounded", 
				$cmp->h1("Input - Select - Text area", "mb-3") .
				$cmp->div("row", 
					$cmp->div("col-lg-4", 
						$cmp->div("mb-3", 
							$cmp->bsSelect("index1", "index1", null, 
								$cmp->option(null, "Seleccione", $cmp->selected) . 
								$cmp->option($user->getUsersAge(), $user->getUsersName() . " " . $user->getUsersLastName()) . 
								$cmp->option($user->getUsersAge(), $user->getUsersName() . " " . $user->getUsersLastName()) . 
								$cmp->option($user->getUsersAge(), $user->getUsersName() . " " . $user->getUsersLastName()) . 
								$cmp->option($user->getUsersAge(), $user->getUsersName() . " " . $user->getUsersLastName()) . 
								$cmp->option($user->getUsersAge(), $user->getUsersName() . " " . $user->getUsersLastName())
							)
						)
					) . 
					$cmp->div("col-lg-4", 
						$cmp->div("mb-3", 
							$cmp->bsDataSelect("index2", "index2", null, 
								[
									new Users("Sergio", "Leon", 21), 
									new Users("Emmanuel", "Hernandez", 5), 
									new Users("Daniela", "Leon", 19), 
									new Users("Valentina", "Leon", 14), 
									new Users("Santiago", "Correa", 21), 
									new Users("Felipe", "Gavilán", 18)
								],
								['getUsersName', 'getUsersName', 'getUsersLastName', 'getUsersAge'],
								null,
								"Emmanuel"
							)
						)
					) . 
					$cmp->div("col-lg-4", 
						$cmp->div("mb-3", 
							$cmp->bsInput("text", null, $cmp->placeholder("name"), "name_user", "name_user")
						)
					) . 
					$cmp->div("col-lg-4", 
						$cmp->div("mb-3", 
							$cmp->bsInput("date", null, $cmp->max(date("Y-m-d")), "age_user", "age_user")
						)
					) . 
					$cmp->div("col-lg-4", 
						$cmp->div("mb-3", 
							$cmp->bsInput("file", null, null, "files", "files")
						)
					) . 
					$cmp->div("col-lg-4", 
						$cmp->div("mb-3", 
							$cmp->bsInput("file", null, $cmp->multiple, "files", "files")
						)
					) . 
					$cmp->div("col-lg-4", 
						$cmp->div("mb-3", 
							$cmp->bsTextarea(null, $cmp->multiple . $cmp->placeholder("Description..."), "files", "files")
						)
					)
				),
				$cmp->id("input")
			) .
			$cmp->div("col-lg-11 mx-auto mb-5 bg-white shadow p-4 rounded",  
				$cmp->div("row", 
					$cmp->div("col-lg-6", 
						$cmp->div("mb-3", 
							$cmp->h3("Modal") .
							$cmp->div("d-grid gap-2 d-md-block", 
								$cmp->button("button", "Pulsar", "btn btn-primary", $cmp->data("bs-toggle", "modal") . $cmp->data("bs-target", "#modal_example")) . " " .
								$cmp->button("button", "Pulsar", "btn btn-success", $cmp->data("bs-toggle", "modal") . $cmp->data("bs-target", "#modal_example_2")) . " " .
								$cmp->button("button", "Pulsar", "btn btn-info", $cmp->data("bs-toggle", "modal") . $cmp->data("bs-target", "#modal_example_3"))
							)
						)
					) .
					$cmp->div("col-lg-6", 
						$cmp->div("mb-3", 
							$cmp->h3("Button group - checkbox") .
							$cmp->bsButtonGroup(
								$cmp->input("checkbox", "btn-check", $cmp->autocomplete("off"), "checkbox1", "checkbox1") .
								$cmp->label("Button", "btn btn-outline-primary", $cmp->for("checkbox1")) .

								$cmp->input("checkbox", "btn-check", $cmp->autocomplete("off"), "checkbox2", "checkbox2") .
								$cmp->label("Button", "btn btn-outline-primary", $cmp->for("checkbox2")) .

								$cmp->input("checkbox", "btn-check", $cmp->autocomplete("off"), "checkbox3", "checkbox3") .
								$cmp->label("Button", "btn btn-outline-primary", $cmp->for("checkbox3"))
							)
						)
					) .
					$cmp->div("col-lg-6", 
						$cmp->div("mb-3", 
							$cmp->h3("Button group - radio") .
							$cmp->bsButtonGroup(
								$cmp->input("radio", "btn-check", $cmp->autocomplete("off") . $cmp->checked, "radio_example", "radio1") .
								$cmp->label("Button", "btn btn-outline-primary", $cmp->for("radio1")) .

								$cmp->input("radio", "btn-check", $cmp->autocomplete("off"), "radio_example", "radio2") .
								$cmp->label("Button", "btn btn-outline-primary", $cmp->for("radio2")) .

								$cmp->input("radio", "btn-check", $cmp->autocomplete("off"), "radio_example", "radio3") .
								$cmp->label("Button", "btn btn-outline-primary", $cmp->for("radio3"))
							)
						)
					) .
					$cmp->div("col-lg-6", 
						$cmp->div("mb-3", 
							$cmp->h3("Button group - toolbar") .
							$cmp->div("btn-toolbar", 
								$cmp->bsButtonGroup(
									$cmp->button("button", "1", "btn btn-outline-primary") .
									$cmp->button("button", "2", "btn btn-outline-primary") . 
									$cmp->button("button", "3", "btn btn-outline-primary"),
									"me-2"
								) .
								$cmp->bsButtonGroup(
									$cmp->button("button", "1", "btn btn-outline-primary") . 
									$cmp->button("button", "2", "btn btn-outline-primary") . 
									$cmp->button("button", "3", "btn btn-outline-primary") . 
									$cmp->button("button", "4", "btn btn-outline-primary"),
									"me-2"
								) .
								$cmp->bsButtonGroup(
									$cmp->button("button", "1", "btn btn-outline-primary") . 
									$cmp->button("button", "2", "btn btn-outline-primary")
								), 
								$cmp->role("toolbar")
							)
						)
					)
				),
				$cmp->id("buttons")
			) .
			$cmp->div("col-lg-11 mx-auto mb-5 bg-white shadow p-4 rounded", 
				$cmp->h1("Iframe") .
				$cmp->div("row", 
					$cmp->div("col-lg-3",  
						$cmp->bsIframe("1x1 mb-3", "https://www.youtube.com/embed/lDK9QqIzhwk?start=161", $cmp->title("YouTube video", true) . $cmp->allow("accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"))
					) .
					$cmp->div("col-lg-3", 
						$cmp->bsIframe("4x3 mb-3", "https://www.youtube.com/embed/lDK9QqIzhwk", $cmp->title("YouTube video", true) . $cmp->allow("accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"))
					) .
					$cmp->div("col-lg-3", 
						$cmp->bsIframe("16x9 mb-3", "https://www.youtube.com/embed/lDK9QqIzhwk", $cmp->title("YouTube video", true) . $cmp->allow("accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"))
					) .
					$cmp->div("col-lg-3", 
						$cmp->bsIframe("21x9 mb-3", "https://www.youtube.com/embed/lDK9QqIzhwk", $cmp->title("YouTube video", true) . $cmp->allow("accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"))
					)
				),
				$cmp->id("iframe")
			) . 
			$cmp->div("col-lg-11 mx-auto mb-5 bg-white shadow p-4 rounded", 
				$cmp->h1("Data table") .
				$cmp->bsDataTable("table-dark", null, 
					["Nombres", "Apellidos", "Edad"], 
					[
						new Users("Sergio", "Leon", 21), 
						new Users("Emmanuel", "Hernandez", 5), 
						new Users("Daniela", "Leon", 19), 
						new Users("Valentina", "Leon", 14), 
						new Users("Santiago", "Correa", 21), 
						new Users("Felipe", "Gavilán", 18)
					], 
					['getUsersName', 'getUsersLastName', 'getUsersAge'],
					true
				),
				$cmp->id("dataTable_ex")
			) .
			$cmp->bsModal("modal_example", null, 
				["Titulo de ventana", "text-white", "bg-primary"], 
				[
					$cmp->div("row", 
						$cmp->div("col-lg-6", 
							$cmp->div("mb-3", 
								$cmp->bsInput("text", null, $cmp->placeholder("name"), "name_user_c", "name_user_c")
							)
						) .
						$cmp->div("col-lg-6", 
							$cmp->div("mb-3", 
								$cmp->bsInput("text", null, $cmp->placeholder("last_name"), "last_name_c", "last_name_c")
							)
						)
					), 
					$cmp->button("submit", "submit", "btn btn-outline-primary") .
					$cmp->button("button", "Close", "btn btn-primary", $cmp->data("bs-dismiss", "modal"))
				], 
				true, false
			) .
			$cmp->bsModal("modal_example_2", null, 
				["Titulo de ventana", "text-white", "bg-success"], 
				[
					$cmp->div("row", 
						$cmp->div("col-lg-6", 
							$cmp->div("mb-3", 
								$cmp->bsInput("text", null, $cmp->placeholder("name"), "name_user_u", "name_user_u")
							)
						) .
						$cmp->div("col-lg-6", 
							$cmp->div("mb-3", 
								$cmp->bsInput("text", null, $cmp->placeholder("last_name"), "last_name_u", "last_name_u")
							)
						)
					), 
					$cmp->button("submit", "submit", "btn btn-outline-success") .
					$cmp->button("button", "Close", "btn btn-success", $cmp->data("bs-dismiss", "modal"))
				], 
				true, true
			) .
			$cmp->bsModal("modal_example_3", "modal-fullscreen", 
				["Titulo de ventana", "text-white", "bg-info"], 
				[
					$cmp->div("row", 
						$cmp->div("col-lg-6", 
							$cmp->div("mb-3", 
								$cmp->bsInput("text", null, $cmp->placeholder("name"), "name_user_u_2", "name_user_u_2")
							)
						) .
						$cmp->div("col-lg-6", 
							$cmp->div("mb-3", 
								$cmp->bsInput("text", null, $cmp->placeholder("last_name"), "last_name_u_2", "last_name_u_2")
							)
						)
					), 
					$cmp->button("submit", "submit", "btn btn-outline-info") .
					$cmp->button("button", "Close", "btn btn-info", $cmp->data("bs-dismiss", "modal"))
				], 
				true, false
			)
		) .
		$cmp->script("https://code.jquery.com/jquery-3.6.0.min.js", 'integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"') .
		$cmp->script("https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", 'integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"') .
		$cmp->script("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js") .
		$cmp->script("https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js") .
		$cmp->script("https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js") .
		$cmp->script(null, null, "$(document).ready(function() { $('.data_tbl').DataTable(); } ); ")
	)
));