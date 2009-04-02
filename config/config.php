<?php

if ($this instanceof sfApplicationConfiguration)
{
  $this->getConfigCache()->registerConfigHandler('config/forms.yml', 'sfSimpleYamlConfigHandler');
  sfFormStrings::connect($this);
}
