<?php
defined('JPATH_PLATFORM') or die;
class JFormFieldWebFonts extends JFormField
{
protected $type = 'WebFonts';
protected function getInput()
{
$html = array();
$attr = '';
$attr .= $this->element['class'] ? ' class="' . (string) $this->element['class'] . '"' : '';
if ((string) $this->element['readonly'] == 'true' || (string) $this->element['disabled'] == 'true')
{
$attr .= ' disabled="disabled"';
}
$attr .= $this->element['size'] ? ' size="' . (int) $this->element['size'] . '"' : '';
$attr .= $this->multiple ? ' multiple="multiple"' : '';
$options = (array) $this->getOptions();
if ((string) $this->element['readonly'] == 'true')
{
$html[] = JHtml::_('select.genericlist', $options, '', trim($attr), 'value', 'text', $this->value, $this->id);
$html[] = '<input type="hidden" name="' . $this->name . '" value="' . $this->value . '"/>';
}
else
{
$html[] = JHtml::_('select.genericlist', $options, $this->name, trim($attr), 'value', 'text', $this->value, $this->id);
}
return implode($html);
}
protected function getOptions()
{
$webFonts = array();
foreach ($this->element->children() as $webfonts)
{
$webFonts['MS Sans Serif, Geneva, sans-serif'] = 'MS Sans Serif';
$webFonts['Arial, Helvetica, sans-serif'] = 'Arial';
$webFonts['Courier, monospace'] = 'Courier';
$webFonts['Garamond, serif'] = 'Garamond';
$webFonts['Georgia, serif'] = 'Georgia';
$webFonts['Impact, Charcoal, sans-serif'] = 'Impact';
$webFonts['Lucida Console, Monaco, monospace'] = 'Lucida Console';
$webFonts['Lucida Sans Unicode, Lucida Grande, sans-serif'] = 'Lucida Sans Unicode';
$webFonts['MS Serif, New York, sans-serif'] = 'MS Serif';
$webFonts['Palatino Linotype, Book Antiqua, Palatino, serif'] = 'Palatino Linotype';
$webFonts['Tahoma, Geneva, sans-serif'] = 'Tahoma';
$webFonts['Times New Roman, Times, serif'] = 'Times New Roman';
$webFonts['Trebuchet MS, Helvetica, sans-serif'] = 'Trebuchet MS';
$webFonts['Verdana, Geneva, sans-serif'] = 'Verdana';
}
reset($webfonts);
return $webFonts;
}
}
