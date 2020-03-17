<?php

namespace PHPMVC\LIB;

class Template
{
    private $_templateParts;
    private $_action_view;
    private $_data;

    public function __construct($parts)
    {
        $this->_templateParts = $parts;
    }

    public function setActionViewFile($actionViewPath)
    {
        $this->_action_view = $actionViewPath;
    }

    public function setAppData($data)
    {
        $this->_data = $data;
    }

    private function renderTemplateHeaderStart()
    {
        require_once TEMPLATE_PATH . 'templateheaderstart.php';
    }

    private function renderTemplateHeaderEnd()
    {
        require_once TEMPLATE_PATH . 'templateheaderend.php';
    }

    private function renderTemplateFooter()
    {
        require_once TEMPLATE_PATH . 'templatefooter.php';
    }

    private function renderTemplateBlocks()
    {
        if (array_key_exists('template', $this->_templateParts)) {
            $parts = $this->_templateParts['template'];
            if (!empty($parts)) {
                extract($this->_data);
                foreach ($parts as $partKey => $file) {
                    if ($partKey == ':view')
                        require_once $this->_action_view;
                    else
                        require_once $file;
                }
            }
        }
    }

    private function renderTemplateHeaderResources()
    {
        if (array_key_exists('header_resources', $this->_templateParts)) {
            $parts = $this->_templateParts['header_resources'];
            $output = '';
            // generate CSS Links
            $css = $parts['css'];
            if (!empty($css)) {
                foreach ($css as $cssKey => $path) {
                    $output .= '<link type="text/css" rel="stylesheet" href="' . $path . '" />';
                }
            }
            // generate Js scripts
            $js = $parts['js'];
            if (!empty($js)) {
                foreach ($js as $jsKey => $path) {
                    $output .= '<script src="' . $path . '"></script>';
                }
            }
            echo $output;
        }
    }

    private function renderTemplateFooterResources()
    {
        if (array_key_exists('footer_resources', $this->_templateParts)) {
            $parts = $this->_templateParts['footer_resources'];
            $output = '';

            if (!empty($parts)) {
                foreach ($parts as $partKey => $path) {
                    $output .= '<script src="' . $path . '"></script>';
                }
            }
            echo $output;
        }
    }

    public function renderApp()
    {
        $this->renderTemplateHeaderStart();
        $this->renderTemplateHeaderResources();
        $this->renderTemplateHeaderEnd();
        $this->renderTemplateBlocks();
        $this->renderTemplateFooterResources();
        $this->renderTemplateFooter();
    }
}
