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
        require "navigationComponent.php";
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
        require "outerCardComponent.php";
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
        require "innerCardComponent.php";
        return ob_get_clean();
    }
}

class FooterComponent
{
    function render()
    {
        ob_start();
        require "footerComponent.php";
        return ob_get_clean();
    }
}

class EditorComponent
{
    function render()
    {
        ob_start();
        require "editorComponent.php";
        return ob_get_clean();
    }
}