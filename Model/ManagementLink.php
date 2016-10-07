<?php

/**
 *  Api Model written by jake.ltiwicki@gmail.com
 *  @source: https://docs.chargify.com/api-adjustments
 */

namespace Litwicki\Bundle\ChargifyBundle\Model;

use Litwicki\Bundle\ChargifyBundle\Services\ChargifyModel;
use Litwicki\Bundle\ChargifyBundle\Services\ChargifyInterface;

use ChargifyBundle\Exception\ChargifyMethodNotAccessibleException;

class ManagementLink extends ChargifyModel implements ChargifyInterface
{

    /**
     * @type string
     */
    protected $url;
    
    /**
     * @type int
     */
    protected $fetch_count;
    
    /**
     * @type datetime
     */
    protected $created_at;
    
    /**
     * @type datetime
     */
    protected $new_link_available_at;
    
    /**
     * @type datetime
     */
    protected $expires_at;

    /**
     * @return datetime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param datetime $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return datetime
     */
    public function getExpiresAt()
    {
        return $this->expires_at;
    }

    /**
     * @param datetime $expires_at
     */
    public function setExpiresAt($expires_at)
    {
        $this->expires_at = $expires_at;
    }

    /**
     * @return datetime
     */
    public function getFetchCount()
    {
        return $this->fetch_count;
    }

    /**
     * @param datetime $fetch_count
     */
    public function setFetchCount($fetch_count)
    {
        $this->fetch_count = $fetch_count;
    }

    /**
     * @return datetime
     */
    public function getNewLinkAvailableAt()
    {
        return $this->new_link_available_at;
    }

    /**
     * @param datetime $new_link_available_at
     */
    public function setNewLinkAvailableAt($new_link_available_at)
    {
        $this->new_link_available_at = $new_link_available_at;
    }

    /**
     * @return datetime
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param datetime $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

}