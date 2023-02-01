<?php 
class NumberFormatter {
/* Constants */
public const int PATTERN_DECIMAL;
public const int DECIMAL;
public const int CURRENCY;
public const int PERCENT;
public const int SCIENTIFIC;
public const int SPELLOUT;
public const int ORDINAL;
public const int DURATION;
public const int PATTERN_RULEBASED;
public const int IGNORE;
public const int CURRENCY_ACCOUNTING;
public const int DEFAULT_STYLE;
public const int ROUND_CEILING;
public const int ROUND_FLOOR;
public const int ROUND_DOWN;
public const int ROUND_UP;
public const int ROUND_HALFEVEN;
public const int ROUND_HALFDOWN;
public const int ROUND_HALFUP;
public const int PAD_BEFORE_PREFIX;
public const int PAD_AFTER_PREFIX;
public const int PAD_BEFORE_SUFFIX;
public const int PAD_AFTER_SUFFIX;
public const int PARSE_INT_ONLY;
public const int GROUPING_USED;
public const int DECIMAL_ALWAYS_SHOWN;
public const int MAX_INTEGER_DIGITS;
public const int MIN_INTEGER_DIGITS;
public const int INTEGER_DIGITS;
public const int MAX_FRACTION_DIGITS;
public const int MIN_FRACTION_DIGITS;
public const int FRACTION_DIGITS;
public const int MULTIPLIER;
public const int GROUPING_SIZE;
public const int ROUNDING_MODE;
public const int ROUNDING_INCREMENT;
public const int FORMAT_WIDTH;
public const int PADDING_POSITION;
public const int SECONDARY_GROUPING_SIZE;
public const int SIGNIFICANT_DIGITS_USED;
public const int MIN_SIGNIFICANT_DIGITS;
public const int MAX_SIGNIFICANT_DIGITS;
public const int LENIENT_PARSE;
public const int POSITIVE_PREFIX;
public const int POSITIVE_SUFFIX;
public const int NEGATIVE_PREFIX;
public const int NEGATIVE_SUFFIX;
public const int PADDING_CHARACTER;
public const int CURRENCY_CODE;
public const int DEFAULT_RULESET;
public const int PUBLIC_RULESETS;
public const int DECIMAL_SEPARATOR_SYMBOL;
public const int GROUPING_SEPARATOR_SYMBOL;
public const int PATTERN_SEPARATOR_SYMBOL;
public const int PERCENT_SYMBOL;
public const int ZERO_DIGIT_SYMBOL;
public const int DIGIT_SYMBOL;
public const int MINUS_SIGN_SYMBOL;
public const int PLUS_SIGN_SYMBOL;
public const int CURRENCY_SYMBOL;
public const int INTL_CURRENCY_SYMBOL;
public const int MONETARY_SEPARATOR_SYMBOL;
public const int EXPONENTIAL_SYMBOL;
public const int PERMILL_SYMBOL;
public const int PAD_ESCAPE_SYMBOL;
public const int INFINITY_SYMBOL;
public const int NAN_SYMBOL;
public const int SIGNIFICANT_DIGIT_SYMBOL;
public const int MONETARY_GROUPING_SEPARATOR_SYMBOL;
public const int TYPE_DEFAULT;
public const int TYPE_INT32;
public const int TYPE_INT64;
public const int TYPE_DOUBLE;
public const int TYPE_CURRENCY;
/* Methods */
public __construct(string $locale, int $style, ?string $pattern = null)
public static create(string $locale, int $style, ?string $pattern = null): ?NumberFormatter
public formatCurrency(float $amount, string $currency): string|false
public format(int|float $num, int $type = NumberFormatter::TYPE_DEFAULT): string|false
public getAttribute(int $attribute): int|float|false
public getErrorCode(): int
public getErrorMessage(): string
public getLocale(int $type = ULOC_ACTUAL_LOCALE): string|false
public getPattern(): string|false
public getSymbol(int $symbol): string|false
public getTextAttribute(int $attribute): string|false
public parseCurrency(string $string, string &$currency, int &$offset = null): float|false
public parse(string $string, int $type = NumberFormatter::TYPE_DOUBLE, int &$offset = null): int|float|false
public setAttribute(int $attribute, int|float $value): bool
public setPattern(string $pattern): bool
public setSymbol(int $symbol, string $value): bool
public setTextAttribute(int $attribute, string $value): bool
}

?>