<?php
/**
 * Copyright © 2016 Magmodules.eu. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magmodules\TheFeedbackCompany\Cron;

use Magmodules\TheFeedbackCompany\Model\Api as ApiModel;

class ImportReviews
{

    protected $apiModel;

    /**
     * ImportReviews constructor.
     * @param ApiModel $apiModel
     */
    public function __construct(ApiModel $apiModel)
    {
        $this->apiModel = $apiModel;
    }

    /**
     * Execute import of reviews though API model
     */
    public function execute()
    {
        $type = 'cron';
        $this->apiModel->getReviews($type);
    }
}