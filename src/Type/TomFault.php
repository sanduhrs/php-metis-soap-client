<?php

namespace sanduhrs\Metis\Type;

/**
 * Class TomFault
 *
 * @package sanduhrs\Metis\Type
 */
class TomFault
{

    /**
     * @var int
     */
    private $errorcode;

    /**
     * @var string
     */
    private $errormsg;

    /**
     * @return int
     */
    public function getErrorcode()
    {
        return $this->errorcode;
    }

    /**
     * @param int $errorcode
     * @return TomFault
     */
    public function withErrorcode($errorcode)
    {
        $new = clone $this;
        $new->errorcode = $errorcode;

        return $new;
    }

    /**
     * @return string
     */
    public function getErrormsg()
    {
        return $this->errormsg;
    }

    /**
     * @param string $errormsg
     * @return TomFault
     */
    public function withErrormsg($errormsg)
    {
        $new = clone $this;
        $new->errormsg = $errormsg;

        return $new;
    }

}
