<?php

/**
 * @author    MarkusWME <markuswme@pcgamingfreaks.at>
 * @copyright 2016 MarkusWME
 * @license   http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 */

namespace pcgf\pmnamesuggestions\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/** @version 1.0.0 */
class listener implements EventSubscriberInterface
{
    /** @var \phpbb\template\template $template Template object */
    protected $template;

    /** @var \phpbb\controller\helper $helper Helper object */
    protected $helper;

    /**
     * Constructor
     *
     * @access public
     * @since  1.0.0
     *
     * @param \phpbb\template\template $template Template object
     * @param \phpbb\controller\helper $helper   Helper object
     *
     * @return \pcgf\pmnamesuggestions\event\listener The listener object of the extension
     */
    public function __construct(\phpbb\template\template $template, \phpbb\controller\helper $helper)
    {
        $this->template = $template;
        $this->helper = $helper;
    }

    /**
     * Function that returns the subscribed events
     *
     * @access public
     * @since  1.0.0
     * @return mixed[] The subscribed event list
     */
    static public function getSubscribedEvents()
    {
        return array(
            'core.ucp_pm_compose_modify_data' => 'add_pmnamesuggestion_css',
        );
    }

    /**
     * Function that set's the template variable to load the css file when writing a pm
     *
     * @access public
     * @since  1.0.0
     * @return null
     */
    public function add_pmnamesuggestion_css($event)
    {
        $this->template->assign_vars(array(
            'PM_NAME_SUGGESTIONS'                => true,
            'PCGF_PM_NAME_SUGGESTION_URL'        => $this->helper->route('pcgf_pmnamesuggestions_controller'),
            'PCGF_PM_NAME_SOGGESTION_IMAGE_SIZE' => 20,
        ));
    }
}
