<?php 
echo($cmp->getHeader(false, 
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
));