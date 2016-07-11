<?php
/**
 * @package modx
 * @subpackage manager.controllers
 */
class SecurityLogoutManagerController extends modManagerController {
    /**
     * Check for any permissions or requirements to load page
     * @return bool
     */
    public function checkPermissions() {
        return true;
    }

    /**
     * Register custom CSS/JS for the page
     * @return void
     */
    public function loadCustomCssJs() {}

    /**
     * Custom logic code here for setting placeholders, etc
     * @param array $scriptProperties
     * @return mixed
     */
    public function process(array $scriptProperties = array()) {
        $this->modx->runProcessor('security/logout');
        $url = $this->modx->getOption('manager_logout_redirect_url') ?: $this->modx->getOption('manager_url',null,MODX_MANAGER_URL);
        $this->modx->sendRedirect($url);
    }

    /**
     * Return the pagetitle
     *
     * @return string
     */
    public function getPageTitle() {
        return $this->modx->lexicon('logout');
    }

    /**
     * Return the location of the template file
     * @return string
     */
    public function getTemplateFile() {
        return 'security/logout.tpl';
    }

    /**
     * Specify the language topics to load
     * @return array
     */
    public function getLanguageTopics() {
        return array('access','user');
    }
}
