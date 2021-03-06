<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Catalog\Api;

/**
 * @api
 * @since 101.1.0
 */
interface CategoryListInterface
{
    /**
     * Get category list
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Magento\Catalog\Api\Data\CategorySearchResultsInterface
     * @since 101.1.0
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
