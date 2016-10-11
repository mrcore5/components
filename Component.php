<? namespace Mrcore\Components;

class Component
{
    public $id;
    public $source;
    public $options;
    public $plugins;

    public function __construct($id, $source, $options, $plugins)
    {
        $this->id = $id;
        $this->source = $source;
        $this->options = $options;
        $this->plugins = $plugins;
        return $this;
    }

    public function hasPlugin($plugin)
    {
        return true;
    }
}
