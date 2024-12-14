<?php
// Import this file by inserting code below:
// require "../components/components.php"

function renderComponent($component)
{
    return $component->render();
}

class NavigationComponent
{
    function render()
    {
        ob_start();
        require "../components/navigationComponent.php";
        return ob_get_clean();
    }
}

class OuterCardComponent
{
    private $content;

    public function __construct($content)
    {
        $this->content = $content;
    }
    function render()
    {
        ob_start();
        extract(["outerCardContent" => $this->content]);
        require "../components/outerCardComponent.php";
        return ob_get_clean();
    }
}


class InnerCardComponent
{
    private $content;

    public function __construct($content)
    {
        $this->content = $content;
    }
    function render()
    {
        ob_start();
        extract(["innerCardContent" => $this->content]);
        require "../components/innerCardComponent.php";
        return ob_get_clean();
    }
}

class FooterComponent
{
    function render()
    {
        ob_start();
        require "../components/footerComponent.php";
        return ob_get_clean();
    }
}
