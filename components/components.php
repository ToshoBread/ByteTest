<?php
// Import with: require "../components/components.php"

function renderComponent($component)
{
    return $component->render();
}

class NavigationComponent
{
    function render()
    {
        ob_start();
        require "navigationComponent.html";
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
        require "outerCardComponent.html";
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
        require "innerCardComponent.html";
        return ob_get_clean();
    }
}

class FooterComponent
{
    function render()
    {
        ob_start();
        require "footerComponent.html";
        return ob_get_clean();
    }
}
