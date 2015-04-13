<?php
namespace Payum\Paypal\ExpressCheckout\Nvp\Request\Api;

use Payum\Request\BaseModelRequest;

class AuthorizeTokenRequest extends BaseModelRequest
{
    /**
     * @var bool
     */
    protected $force;

    /**
     * @param mixed $model
     * @param bool $force
     */
    public function __construct($model, $force = false)
    {
        parent::__construct($model);
        
        $this->force = $force;
    }

    /**
     * @return bool
     */
    public function isForced()
    {
        return $this->force;
    }
}