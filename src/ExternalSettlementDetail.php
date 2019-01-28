<?php declare(strict_types=1);
/**
 * Adyen Parsers for PHP
 *
 * @author    Jacques Marneweck <jacques@siberia.co.za>
 * @copyright 2018-2019 Jacques Marneweck.  All rights strictly reserved.
 */

namespace Jacques\Adyen\Parsers;

use League\Csv\Reader;

class ExternalSettlementDetail extends AbstractParser
{
    /**
     * Expected Headers
     */
    private $expectedHeaders = [
        'Company Account',
        'Merchant Account',
        'Psp Reference',
        'Merchant Reference',
        'Payment Method',
        'Creation Date',
        'TimeZone',
        'Type',
        'Modification Reference',
        'Gross Currency',
        'Gross Debit (GC)',
        'Gross Credit (GC)',
        'Exchange Rate',
        'Net Currency',
        'Net Debit (NC)',
        'Net Credit (NC)',
        'Commission (NC)',
        'Markup (NC)',
        'Scheme Fees (NC)',
        'Interchange (NC)',
        'Payment Method Variant',
        'Acquirer',
        'MID',
        'ARN',
        'Acquirer Reference',
        'Reserved6',
        'Reserved7',
        'Reserved8',
        'Reserved9',
        'Reserved10',
    ];

    /**
     * Headers
     */
    private $headers = [
        'company_account',
        'merchant_account',
        'psp_reference',
        'merchant_reference',
        'payment_method',
        'creation_date',
        'timezone',
        'type',
        'modification_reference',
        'gross_currency',
        'gross_debit_gc',
        'gross_credit_gc',
        'exchange_rate',
        'net_currency',
        'net_debit_nc',
        'net_credit_nc',
        'commission_nc',
        'arkup_nc',
        'scheme_fees_nc',
        'interchange_nc',
        'payment_method_variant',
        'acquirer',
        'mid',
        'arn',
        'acquirer_reference',
        'reserved6',
        'reserved7',
        'reserved8',
        'reserved9',
        'reserved10',
    ];

    /**
     * Map Adyen fields to what we want
     */
    private $mappings = [
    ];

    public function parse()
    {
    }
}
