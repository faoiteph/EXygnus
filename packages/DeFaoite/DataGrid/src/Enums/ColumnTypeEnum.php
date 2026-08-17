<?php

namespace DeFaoite\DataGrid\Enums;

use DeFaoite\DataGrid\ColumnTypes\Aggregate;
use DeFaoite\DataGrid\ColumnTypes\Boolean;
use DeFaoite\DataGrid\ColumnTypes\Date;
use DeFaoite\DataGrid\ColumnTypes\Datetime;
use DeFaoite\DataGrid\ColumnTypes\Decimal;
use DeFaoite\DataGrid\ColumnTypes\Integer;
use DeFaoite\DataGrid\ColumnTypes\Text;
use DeFaoite\DataGrid\Exceptions\InvalidColumnTypeException;

enum ColumnTypeEnum: string
{
    /**
     * String.
     */
    case STRING = 'string';

    /**
     * Integer.
     */
    case INTEGER = 'integer';

    /**
     * Decimal.
     */
    case DECIMAL = 'decimal';

    /**
     * Boolean.
     */
    case BOOLEAN = 'boolean';

    /**
     * Date.
     */
    case DATE = 'date';

    /**
     * Date time.
     */
    case DATETIME = 'datetime';

    /**
     * Aggregate.
     */
    case AGGREGATE = 'aggregate';

    /**
     * Get the corresponding class name for the column type.
     */
    public static function getClassName(string $type): string
    {
        return match ($type) {
            self::STRING->value => Text::class,
            self::INTEGER->value => Integer::class,
            self::DECIMAL->value => Decimal::class,
            self::BOOLEAN->value => Boolean::class,
            self::DATE->value => Date::class,
            self::DATETIME->value => Datetime::class,
            self::AGGREGATE->value => Aggregate::class,
            default => throw new InvalidColumnTypeException("Invalid column type: {$type}"),
        };
    }
}
