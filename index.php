<?php 
require_once("Components/ComponentsBootstrap4.php");
require_once("Class/Users.php");
$cmp = new ComponentsBootstrap4("http://localhost/LFC/");
$user = new Users("Sergio", "Leon", 21);

echo($cmp->html(false, "lang='es'",
	$cmp->head(false, false, 
		$cmp->title("LF - Components") .
		$cmp->meta(false, false, 'charset="utf-8"') .
		$cmp->meta("viewport", "width=device-width, initial-scale=1, shrink-to-fit=no") .
		$cmp->link("stylesheet", "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css", 'integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"') .
		$cmp->link("stylesheet", "https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css") .
		$cmp->link("stylesheet", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css")
	) .
	$cmp->body(false, false, 
		$cmp->nav("navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top", false, 
			$cmp->div("container-fluid", 
				$cmp->a("index.php", "Navbar", "navbar-brand") .
				$cmp->button("button", 
					$cmp->span("", "navbar-toggler-icon"), 
					"navbar-toggler", 'data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"'
				) .
				$cmp->div("collapse navbar-collapse",
					$cmp->ul(
						$cmp->li($cmp->a("index.php", "link 1", "nav-link"), "nav-item active") .
						$cmp->li($cmp->a("index.php", "link 2", "nav-link"), "nav-item") .
						$cmp->li($cmp->a("index.php", "link 3", "nav-link"), "nav-item") .
						$cmp->li($cmp->a("index.php", "link 4", "nav-link"), "nav-item") .
						$cmp->li($cmp->a("index.php", "link 5", "nav-link"), "nav-item") .
						$cmp->li($cmp->a("index.php", "link 6", "nav-link"), "nav-item"), 
						"navbar-nav mr-auto"
					) .
					$cmp->form(false, "form-inline my-2 my-lg-0", false, 
						$cmp->bsInput("search", "mr-sm-2", 'placeholder="Search" aria-label="Search"', "search", "search") .
						$cmp->button("submit", "Search", "btn btn-outline-success my-2 my-sm-0")
					), 
					'id="navbarSupportedContent"'
				)
			)
		) . 
		$cmp->div("container-fluid", 
			$cmp->div("col-lg-12 mx-auto mt-3 mb-3 bg-white shadow p-2", 
				$cmp->div("row", 
					$cmp->div("col-lg-8", 
						$cmp->bsDataTable("table-striped", false, 
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
							false
						)
					) . 
					$cmp->div("col-lg-4", 
						$cmp->h3("Select") .
						$cmp->div("form-group", 
							$cmp->bsSelect("index1", "index1", false, 
								$cmp->option("", "Seleccione", "selected") . 
								$cmp->option($user->getUsersAge(), $user->getUsersName() . " " . $user->getUsersLastName()) . 
								$cmp->option($user->getUsersAge(), $user->getUsersName() . " " . $user->getUsersLastName()) . 
								$cmp->option($user->getUsersAge(), $user->getUsersName() . " " . $user->getUsersLastName()) . 
								$cmp->option($user->getUsersAge(), $user->getUsersName() . " " . $user->getUsersLastName()) . 
								$cmp->option($user->getUsersAge(), $user->getUsersName() . " " . $user->getUsersLastName())
							)
						) . 
						$cmp->div("form-group", 
							$cmp->bsDataSelect("index2", "index2", false, 
								[
									new Users("Sergio", "Leon", 21), 
									new Users("Emmanuel", "Hernandez", 5), 
									new Users("Daniela", "Leon", 19), 
									new Users("Valentina", "Leon", 14), 
									new Users("Santiago", "Correa", 21), 
									new Users("Felipe", "Gavilán", 18)
								],
								['getUsersName', 'getUsersName', 'getUsersLastName'],
								false,
								"Sergio"
							)
						) .
						$cmp->hr() .
						$cmp->h3("Input") .
						$cmp->div("form-group", 
							$cmp->bsInput("text", "", 'placeholder="name"', "name_user", "name_user")
						) .
						$cmp->div("form-group", 
							$cmp->bsInput("text", "", 'placeholder="last name"', "last_name_user", "last_name_user")
						) .
						$cmp->div("form-group", 
							$cmp->bsInput("date", "", "max='" . (date("Y-m-d")) . "'", "age_user", "age_user")
						) .
						$cmp->div("form-group", 
							$cmp->bsInputFile(false, "files", "files")
						)
					)
				) .
				$cmp->hr() .
				$cmp->div("row", 
					$cmp->div("col-lg-8", 
						$cmp->h3("Jumbotron") .
						$cmp->bsJumbotron(
							$cmp->h1("Hello, world!", "display-4") .
							$cmp->p("This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.", "lead") .
							$cmp->hr("my-4") .
							$cmp->p("It uses utility classes for typography and spacing to space content out within the larger container.") .
							$cmp->button("button", "Example", "btn btn-primary btn-lg")
						)
					) .
					$cmp->div("col-lg-4", 
						$cmp->h3("Alert") .
						$cmp->bsAlert("primary", "A simple primary " . ($cmp->a("#", "alert—check", "alert-link")) . " it out!", true) .
						$cmp->bsAlert("primary", "A simple light alert—check it out!") .
						$cmp->hr() .
						$cmp->h3("Button - Button group") .
						$cmp->bsButtonGroup(
							$cmp->button("button", "Example", "btn btn-outline-success") .
							$cmp->button("button", "Example", "btn btn-outline-primary") .
							$cmp->button("button", "Example", "btn btn-outline-danger")
						) .
						$cmp->bsButtonGroup(
							$cmp->button("button", "Example", "btn btn-success") .
							$cmp->button("button", "Example", "btn btn-primary") .
							$cmp->button("button", "Example", "btn btn-danger"),
							"mt-3"
						)
					)
				) .
				$cmp->hr() .
				$cmp->div("row", 
					$cmp->div("col-lg-5", 
						$cmp->h3("List group") .
						$cmp->bsListGroup("", [
							["text", "content" . $cmp->span("14", "badge badge-primary badge-pill"), "d-flex justify-content-between align-items-center", ""],
							["text", "content", "list-group-item-primary", ""],
							["text", "content", "", ""],
							["link", "index.php", "content", "", ""],
							["link", "index.php", "content", "active", "aria-disabled='true'"]
						])
					) .
					$cmp->div("col-lg-5", 
						$cmp->h3("List group flush") .
						$cmp->bsListGroup("list-group-flush", [
							["text", "content" . $cmp->span("14", "badge badge-primary badge-pill"), "d-flex justify-content-between align-items-center", ""],
							["text", "content", "list-group-item-warning", ""],
							["text", "content", "", ""],
							["link", "index.php", "content", "", ""],
							["link", "index.php", "content", "active", "aria-disabled='true'"]
						])
					) .
					$cmp->div("col-lg-2", 
						$cmp->h3("List group horizotal") .
						$cmp->bsListGroup("list-group-horizontal", [
							["text", "content", "", ""],
							["text", "content", "", "aria-disabled='true'"]
						]) .
						$cmp->bsListGroup("list-group-horizontal", [
							["text", "content", "", ""],
							["text", "content", "", "aria-disabled='true'"]
						]) .
						$cmp->bsListGroup("list-group-horizontal", [
							["text", "content", "", ""],
							["text", "content", "", "aria-disabled='true'"]
						])
					)
				) .
				$cmp->hr() .
				$cmp->div("row", 
					$cmp->div("col-lg-8", 
						$cmp->h3("Media object") .
						$cmp->bsMediaOject("mt-3", 
							["http://localhost/LF/app/res/values/img/Icono.png", "", "alt='Icono' width='64' height='64'"],
							["Titulo", "Lorem ipsum dolor sit amet, Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 
								$cmp->bsMediaOject("", 
									["http://localhost/LF/app/res/values/img/Icono.png", "", "alt='Icono' width='64' height='64'"],
									["Titulo", "Lorem ipsum dolor sit amet, Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", null]
								) .
								$cmp->bsMediaOject("", 
									["http://localhost/LF/app/res/values/img/Icono.png", "", "alt='Icono' width='64' height='64'"],
									["Titulo", "Lorem ipsum dolor sit amet, Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", null]
								)
							]
						) .
						$cmp->bsMediaOject("", 
							["http://localhost/LF/app/res/values/img/Icono.png", "", "alt='Icono' width='64' height='64'"],
							["Titulo", "Lorem ipsum dolor sit amet, Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", null]
						)
					) .
					$cmp->div("col-lg-4", 
						$cmp->h3("Progress bar") .
						$cmp->bsProgress("mt-3", [
							["progress-bar-striped bg-success", 40],
							["bg-primary", 30],
							["progress-bar-striped bg-danger", 20],
							["bg-warning", 10]
						]) .
						$cmp->bsProgress("mt-3", [
							["bg-secondary", 76]
						]) .
						$cmp->bsProgress("mt-3", [
							["bg-primary", 60]
						]) .
						$cmp->bsProgress("mt-3", [
							["bg-danger", 99]
						]) .
						$cmp->bsProgress("mt-3", [
							["bg-warning", 34]
						]) .
						$cmp->bsProgress("mt-3", [
							["progress-bar-striped progress-bar-animated bg-secondary", 15],
							["progress-bar-striped progress-bar-animated bg-primary", 45]
						]) .
						$cmp->hr() .
						$cmp->h3("Modal") .
						$cmp->button("button", "Pulsar", "btn btn-primary btn-block", 'data-toggle="modal" data-target="#modal_example"') .
						$cmp->bsModal("modal_example", "modal-lg", 
							["Titulo de ventana", "text-white", "bg-primary"], 
							[
								$cmp->div("row", 
									$cmp->div("col-lg-6", 
										$cmp->div("form-group", 
											$cmp->bsInput("text", "", 'placeholder="name"', "name_user_c", "name_user_c")
										)
									) .
									$cmp->div("col-lg-6", 
										$cmp->div("form-group", 
											$cmp->bsInput("text", "", 'placeholder="last_name"', "last_name_c", "last_name_c")
										)
									)
								), 
								$cmp->button("submit", "submit", "btn btn-outline-primary") .
								$cmp->button("button", "Close", "btn btn-primary", "data-dismiss='modal'")
							], 
							true, false
						) .
						$cmp->button("button", "Pulsar", "btn btn-success btn-block mt-3", 'data-toggle="modal" data-target="#modal_example_2"') .
						$cmp->bsModal("modal_example_2", "modal-lg", 
							["Titulo de ventana", "text-white", "bg-success"], 
							[
								$cmp->div("row", 
									$cmp->div("col-lg-6", 
										$cmp->div("form-group", 
											$cmp->bsInput("text", "", 'placeholder="name"', "name_user_u", "name_user_u")
										)
									) .
									$cmp->div("col-lg-6", 
										$cmp->div("form-group", 
											$cmp->bsInput("text", "", 'placeholder="last_name"', "last_name_u", "last_name_u")
										)
									)
								), 
								$cmp->button("submit", "submit", "btn btn-outline-success") .
								$cmp->button("button", "Close", "btn btn-success", "data-dismiss='modal'")
							], 
							true, true
						)
					)
				)
			)
		) .
		$cmp->script("https://code.jquery.com/jquery-3.6.0.min.js", 'integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"') .
		$cmp->script("https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js", 'integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"') .
		$cmp->script("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js") .
		$cmp->script("https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js") .
		$cmp->script("https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js") .
		$cmp->script(false, false, "$(document).ready(function() { $('.data_tbl').DataTable(); } ); ")
	)
));