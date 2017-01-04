<?php
class ViewHtmlTest extends PHPUnit_Framework_TestCase
{
    private $_view = 'view_html';
    private $_viewPlugin;

    function setup()
    {
        $this->_viewPlugin = \PMVC\plug($this->_view);
    }

    function testPath()
    {
        $this->_viewPlugin->setThemeFolder('./');
        $this->_viewPlugin->initTemplateHelper();
        $helloPath = \PMVC\value(
            $this->_viewPlugin,
            [
                'paths',
                'index'
            ]
        );
        $this->assertEquals(realpath(__DIR__.'/../index.html'), realpath($helloPath));
    }
}
