<?php

// These files to insert, update, delete and get data in the database.

namespace Curotec\NoOrderAlert\Model;

use Magento\Framework\Model\AbstractModel;

class News extends AbstractModel{
  protected $_eventPrefix = 'curotec_noorderalert';
    /**
     * News constructor.
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param \Magento\Framework\Model\ResourceModel\AbstractResource|null $resource
     * @param \Magento\Framework\Data\Collection\AbstractDb|null $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

   /**
    * (non-PHPdoc)
    * @see \Magento\Framework\Model\AbstractModel::_construct()
    */
    public function _construct()
    {
        $this->_init('Curotec\NoOrderAlert\Model\Resource\News');
    }

    /**
     * Loading news data
     *
     * @param   mixed $key
     * @param   string $field
     * @return  $this
     */
    public function load($key, $field = null) {
    	if ($field === null) {
    		$this->_getResource()->load($this, $key, 'id');
    		return $this;
    	}
    	$this->_getResource()->load($this, $key, $field);
    	return $this;
    }
}
