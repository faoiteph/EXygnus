<?php

namespace DeFaoite\RMA\Enums;

enum DefaultRMAResolution: string
{
    /**
     * Return resolution type.
     */
    case RETURN = 'return';

    /**
     * Cancel items resolution type.
     */
    case CANCEL_ITEMS = 'cancel_items';
}
