<?php

namespace industry_brain\Request\V20180712;

/**
 * Request of InvokeServiceAsync
 *
 * @method string getServiceId()
 * @method string getParams()
 */
class InvokeServiceAsyncRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $requestScheme = 'https';

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'industry-brain',
            '2018-07-12',
            'InvokeServiceAsync'
        );
    }

    /**
     * @param string $serviceId
     *
     * @return $this
     */
    public function setServiceId($serviceId)
    {
        $this->requestParameters['ServiceId'] = $serviceId;
        $this->queryParameters['ServiceId'] = $serviceId;

        return $this;
    }

    /**
     * @param string $params
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->requestParameters['Params'] = $params;
        $this->queryParameters['Params'] = $params;

        return $this;
    }
}
