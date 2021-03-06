<?php

namespace SimpleNN\Activation;


/**
 * ReLU - Rectified Linear Unit
 */
class ReLU extends AbstractActivation
{
    /**
     * Activation
     *
     * @param array $inputs
     * @return array
     */
    public function forward(array $inputs): array
    {
        $this->output = array_map(function ($value) {
            if(is_array($value)) {
                return $this->forward($value);
            }

            return max(0, $value);
        }, $inputs);

        return $this->output;
    }

}