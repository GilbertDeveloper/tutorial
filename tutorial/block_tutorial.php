<?php
class block_tutorial extends block_base {
    public function init() {
        $this->title = get_string('pluginname', 'block_tutorial');
    }
    // The PHP tag and the curly bracket for the class definition 
    // will only be closed after there is another function added in the next section.
  public function get_content() {
    if ($this->content !== null) {
      return $this->content;
    }

    $this->content         =  new stdClass;
    $this->content->text   = 'Bem vindo ao Tutorial';
    $this->content->footer = 'Volte sempre';
 
    return $this->content;
    }
}