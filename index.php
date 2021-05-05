<?php 
require_once("Components.php");
$cmp = new Components(); 

echo($cmp->getDoctype() .
	$cmp->getHtml(
		$cmp->getHead(
			$cmp->getTitle("Components for PHP") .
			$cmp->getMeta("viewport", "width=device-width, initial-scale=1, shrink-to-fit=no", "charset='utf-8'") .
			$cmp->getLink("stylesheet", "text/css", "https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css", "integrity='sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l' crossorigin='anonymous'")
		) .
		$cmp->getBody(
			$cmp->getHeader(false, 
				$cmp->getNav("navbar navbar-expand-lg navbar-light bg-light fixed-top", 
					$cmp->getA("#", "navbar-brand", "Navbar") .
					$cmp->getBtnButton("navbar-toggler", 
						$cmp->getSpan("navbar-toggler-icon"), 
						'data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"'
					) .
					$cmp->getDiv("collapse navbar-collapse", 
						$cmp->getUl("navbar-nav mr-auto", 
							$cmp->getLi("nav-item active", $cmp->getA("#", "nav-link", "Home " . $cmp->getSpan("sr-only", "(current)"))) .
							$cmp->getLi("nav-item", $cmp->getA("#", "nav-link", "Link")) .
							$cmp->getLi("nav-item dropdown", 
								$cmp->getA("#", "nav-link dropdown-toggle", "Dropdown", 'id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"') .
								$cmp->getDiv("dropdown-menu", 
									$cmp->getA("#", "dropdown-item", "Action") .
									$cmp->getA("#", "dropdown-item", "Another action") .
									$cmp->getDiv("dropdown-divider") .
									$cmp->getA("#", "dropdown-item", "Something else here"),
									"aria-labelledby='navbarDropdown'"
								)
							) .
							$cmp->getLi("nav-item", $cmp->getA("#", "nav-link disabled", "Link", 'tabindex="-1" aria-disabled="true"'))
						) .
						$cmp->getForm("POST", 
							$cmp->getInputText("search", "search", "form-control mr-sm-2", 'placeholder="Search" aria-label="Search"') .
							$cmp->getBtnSubmit("outline-success my-2 my-sm-0", "", "Search"), 
							"form-inline my-2 my-lg-0"
						),
						"id='navbarSupportedContent'"
					)
				)
			) .
			$cmp->getMain("flex-shrink-0", 
				$cmp->getDiv("container", 
					$cmp->geth1("Hola titulo", "mt-5") .
					$cmp->getP("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "lead"),
					$cmp->getAttribute(["id", "data"], ["efe", "hola"], "")
				),
				"role='main'"
			) .
			$cmp->getFooter("footer mt-auto py-3", 
				$cmp->getDiv("container", 
					$cmp->getSpan("text-muted", "Place sticky footer content here.")
				)
			) .
			$cmp->getScript("https://code.jquery.com/jquery-3.5.1.slim.min.js", "integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'") .
			$cmp->getScript("https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", "integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'") .
			$cmp->getScript("https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js", "integrity='sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF' crossorigin='anonymous' "), 
			"d-flex flex-column h-100"
		), 
		false, "h-100"
	)
);