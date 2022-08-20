<?php
  
global $cm_lang, $cm_texts;

// When localizing, the number in format specifications (eg: %1$s) indicates the argument
// position as passed to _txt.  This can be used to process the arguments in
// a different order than they were passed.

$cm_access_services_widget_texts['en_US'] = array(
  // Titles, per-controller
  'ct.co_access_services_widgets.1'  => 'Access Services Widget',
  'ct.co_access_services_widgets.pl' => 'Access Services Widgets',
  
  // Error messages
  //'er.serviceswidget.foobar'        => 'Some error here',
  
  // Plugin texts
  'pl.accessserviceswidget.noconfig'      => 'This widget requires no configuration.',
  'pl.accessserviceswidget.none'     => 'No services',
  'pl.accessserviceswidget.return' => 'Return'
);
