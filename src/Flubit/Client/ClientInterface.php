<?php

namespace Flubit\Client;

interface ClientInterface
{
     /**
     * 
     * @param string $format
     * @return Client
     */
    public function setResponseFormat($format);
    
    /**
     * 
     * @return string
     */
    public function getResponseFormat();
    
    /**
     * 
     * @param string $format
     * @return Client
     */
    public function setRequestFormat($format);
    
    /**
     * 
     * @return string
     */
    public function getRequestFormat();
    
    /**
     * @return \SimpleXMLElement|array
     */
    public function getAccountStatus();

    /**
     * @param string    $id
     * @param \DateTime $dateTime
     * @param array     $params
     *
     * @return \SimpleXMLElement|array
     */
    public function dispatchOrderByFlubitId($id, \DateTime $dateTime, array $params);

    /**
     * @param string    $id
     * @param \DateTime $dateTime
     * @param array     $params
     *
     * @return \SimpleXMLElement|array
     */
    public function dispatchOrderByMerchantOrderId($id, \DateTime $dateTime, array $params);

    /**
     * @param string $id
     * @param string $reason
     *
     * @return \SimpleXMLElement|array
     */
    public function cancelOrderByFlubitId($id, $reason);

    /**
     * @param string $id
     * @param string $reason
     *
     * @return \SimpleXMLElement|array
     */
    public function cancelOrderByMerchantOrderId($id, $reason);

    /**
     * @param string $id
     * @param string $reason
     * @param string $amount
     *
     * @return \SimpleXMLElement|array
     */
    public function refundOrderByFlubitId($id, $reason, $amount);

    /**
     * @param string $id
     * @param string $reason
     * @param string $amount
     *
     * @return \SimpleXMLElement|array
     */
    public function refundOrderByMerchantOrderId($id, $reason, $amount);

    /**
     * @param           $status
     * @param \DateTime $from
     * @param int       $page
     * @param int       $limit
     *
     * @return \SimpleXMLElement|array
     */
    public function getOrders($status, \DateTime $from = null, $page = 1, $limit = 100);

    /**
     * @param string $isActive
     * @param        $limit
     * @param        $page
     * @param null   $sku
     *
     * @return \SimpleXMLElement|array
     */
    public function getProducts($isActive, $limit, $page, $sku = null);

    /**
     * @param string $feedID
     *
     * @return \SimpleXMLElement|array
     */
    public function getProductsFeed($feedID);
    
    /**
     * 
     * @param type $feedID
     * @param type $page
     * @param type $limit
     * 
     * @return \SimpleXMLElement|array
     */
    public function getProductsFeedErrors($feedID, $page, $limit);

    /**
     * @param $productData
     * @param string(create|update|replace) $type
     *
     * @return \SimpleXMLElement|array
     */
    public function createProducts($productData, $type = null);
    
    /**
     * 
     * @param $productData
     * 
     * @return \SimpleXMLElement|array
     */
    public function createSingleProduct($productData);

    /**
     * @param $productData
     *
     * @return \SimpleXMLElement|array
     */
    public function updateProducts($productData);
    
    /**
     * 
     * @param $productData
     * @param string(create|update|replace) $type
     * 
     * @return \SimpleXMLElement|array
     */
    public function updateSingleProduct($productData, $type = null);
}
